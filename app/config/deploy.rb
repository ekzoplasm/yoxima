set :application, "yoxima"
set :domain,      "91.121.192.4"
set :deploy_to,   "/var/www/#{application}"
set :app_path,    "app"
set :user,        "fabrice"
#default_run_options[:pty] = true
set :use_sudo,    false
#Sudo Password if use_sudo true
#set :password, "RVapt3FOA"

set :ssh_options,   :forward_agent => true

set :repository,  "https://github.com/ekzoplasm/#{application}.git"
set :scm,         :git
#git password
set :scm_password, "psy5mdna7"
set :scm_passphrase, "RVapt3FOA"
set :branch, "master"

set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL

#set :use_set_permissions, true


set :shared_files,    [app_path + "/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads"]
set :update_vendors, true
set :use_composer, true

namespace :symfony do
  namespace :configure do
    def shared_parameters_path
      "#{shared_path}/#{app_path}/config/parameters.yml"
    end
 
    def app_parameters_path
      "#{latest_release}/#{app_path}/config/parameters.yml"
    end
 
    def shared_parameters_config
      @shared_parameters_config ||= fetch_yaml "#{shared_parameters_path}"
    end
 
    def app_parameters_config
      @app_parameters_config ||= fetch_yaml "#{app_parameters_path}"
    end
 
    def fetch_yaml (yaml_path)
      require 'yaml'
      file = capture("cat #{yaml_path}")
      YAML::load(file)
    end
 
    task :parameters do
      conf_files_exists = capture("if test -s #{shared_parameters_path} ; then echo 'exists' ; fi").strip
      conf_file_changed = false
 
      if !conf_files_exists.eql?("exists")
        run "mkdir -p #{shared_path}/#{app_path}/config"
        run "cp #{app_parameters_path} #{shared_parameters_path}"
        shared_parameters_config['parameters'].sort.map do |key, value|
          prompt_with_default(:"#{key}", app_parameters_config.fetch(:"#{key}", value))
          shared_parameters_config['parameters'][key] = eval key;
        end
        conf_file_changed = true
      end
 
      app_parameters_config['parameters'].sort.map do |key, value|
        if !shared_parameters_config['parameters'].has_key?(key)
          prompt_with_default(:"#{key}", app_parameters_config.fetch(:"#{key}", value))
          shared_parameters_config['parameters'][key] = eval key;
          conf_file_changed = true
        end
      end
 
      if conf_file_changed
        put shared_parameters_config.to_yaml, "#{shared_parameters_path}"
      end
    end
  end
end
 
before "deploy:finalize_update" do
  symfony.configure.parameters
end

