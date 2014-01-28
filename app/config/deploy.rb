default_run_options[:pty] = true  # Must be set for the password prompt
                                  # from git to work
set :application, "yoxima"
# set :domain,      "#{application}.com"
set :domain,      "91.121.192.4"
# set :deploy_to,   "/var/www/#{domain}"
set :deploy_to,   "/var/www/#{application}"
set :app_path,    "app"
set :user,        "fabrice"
set :scm_passphrase, "RVapt3FOA"
set :use_sudo,    true

set :ssh_options,   :forward_agent => true 
set :ssh_options,   :keys => %w(c:/Users/Fabrice/.ssh/id_rsa)

set :repository,  "git@github.com:ekzoplasm/#{application}.git"
set :scm,         :git
set :branch, "master"
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]
set :use_composer, true
set :update_vendors, true

# Symfony2 >= 2.1
before 'symfony:composer:update', 'symfony:copy_vendors'

namespace :symfony do
  desc "Copy vendors from previous release"
  task :copy_vendors, :except => { :no_release => true } do
    if Capistrano::CLI.ui.agree("Do you want to copy last release vendor dir then do composer install ?: (y/N)")
      capifony_pretty_print "--> Copying vendors from previous release"

      run "cp -a #{previous_release}/vendor #{latest_release}/"
      capifony_puts_ok
    end
  end
end