Doppl Store
===========

#Init :
bundle install

#Provision remote instance :
ansible-playbook ansible/site.yml -i ansible/inventory.yml

#Deploy :
bundle exec cap prod deploy
