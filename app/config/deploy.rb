set :application, "yoxima"
set :domain,      "91.121.192.4"
set :deploy_to,   "/var/www/#{application}"
set :app_path,    "app"
set :user,        "fabrice"
set :use_sudo,    false

set :ssh_options,   :forward_agent => true

set :repository,  "https://github.com/ekzoplasm/#{application}.git"
set :scm,         :git
set :scm_password, "psy5mdna7"
set :scm_passphrase, "RVapt3FOA"
set :branch, "master"

set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]
set :use_composer, true
set :update_vendors, false

#On clean les release après avoir atteint le nombre max de keep_releases(voir au dessus "set  :keep_releases,  3")
after "deploy", "deploy:cleanup"

# Symfony2 >= 2.1
#before 'symfony:composer:update', 'symfony:copy_vendors'

#namespace :symfony do
#  desc "Copy vendors from previous release"
#  task :copy_vendors, :except => { :no_release => true } do
#    if Capistrano::CLI.ui.agree("Do you want to copy last release vendor dir then do composer install ?: (y/N)")
#      capifony_pretty_print "--> Copying vendors from previous release"

#      run "cp -a #{previous_release}/vendor #{latest_release}/"
#      capifony_puts_ok
#    end
#  end
#end