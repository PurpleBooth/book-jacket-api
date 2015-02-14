# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.ssh.forward_agent = true
  config.hostmanager.enabled = true
  config.hostmanager.manage_host = true
  config.hostmanager.include_offline = true

  config.vm.define "book-jacket-api" do |silex|
    silex.vm.provision "shell", inline: <<PROVISIONSCRIPT
      add-apt-repository ppa:git-core/ppa
      apt-get update
      apt-get install -y git php5-common php5-cli php5-fpm nginx

      php -r "readfile('https://getcomposer.org/installer');" | php
      mv composer.phar /usr/local/bin/composer
PROVISIONSCRIPT

    silex.vm.provision "file", source: "provisioning/nginx-sites/default", destination: "/tmp/nginx-default-site"

    silex.vm.provision "shell", inline: <<PROVISIONSCRIPT
      mv /tmp/nginx-default-site /etc/nginx/sites-enabled/default
      service nginx restart
PROVISIONSCRIPT

    silex.vm.network "private_network", ip: "192.168.33.11"
    silex.vm.hostname = 'book-jacket-api.herokuapp.com'
    silex.vm.synced_folder ".", "/vagrant"
  end
end
