$HOSTNAME = "babylone-allinone.dev"
$BOX = "ubuntu/trusty64"
$IP = "192.12.12.12"
$MEMORY = ENV.has_key?('VM_MEMORY') ? ENV['VM_MEMORY'] : "1024"
$CPUS = ENV.has_key?('VM_CPUS') ? ENV['VM_CPUS'] : "1"
$EXEC_CAP = ENV.has_key?('VM_EXEC_CAP') ? ENV['VM_EXEC_CAP'] : "100"

Vagrant.configure("2") do |config|
  config.vm.hostname = $HOSTNAME
  config.vm.box = $BOX
  config.vm.network :private_network, ip: $IP
  config.ssh.forward_agent = true

  config.vm.synced_folder ".", "/var/www/doppl-store/current", type: "nfs"

  config.vm.provider "virtualbox" do |v|
    v.name = "doppl-store"
    v.customize ["modifyvm", :id, "--cpuexecutioncap", $EXEC_CAP]
    v.customize ["modifyvm", :id, "--memory", $MEMORY]
    v.customize ["modifyvm", :id, "--cpus", $CPUS]
  end

  # Provision the box
  config.vm.provision :ansible do |ansible|
      ansible.extra_vars = { ansible_ssh_user: 'vagrant' }
      ansible.playbook = "ansible/site.yml"
  end
end
