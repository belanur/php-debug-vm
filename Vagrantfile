# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "vivid-vervet"
  config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/vivid/current/vivid-server-cloudimg-amd64-vagrant-disk1.box"
 
  config.vm.provider :virtualbox do |vb|
    # This allows symlinks to be created within the /vagrant root directory, 
    # which is something librarian-puppet needs to be able to do. This might
    # be enabled by default depending on what version of VirtualBox is used.
    vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
    vb.memory = 2048
    # this should fix slow dns lookups in the vm 
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end

  config.vm.provision :shell, :path => "provision/shell/main.sh"

  # We use puppet for provisioning
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "provision/puppet/manifests"
    puppet.manifest_file  = "main.pp"
    puppet.module_path = "provision/puppet/modules"
  end

  # Accessing "localhost:8080" will access port 80 on the guest machine .
  config.vm.network :forwarded_port, guest: 80, host: 8080

  # Set the hostname
  config.vm.hostname = "debugvm"

end
