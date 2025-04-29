# yii2-app
How to run Ansible playbooks:

  ansible-playbook -i ansible/hosts.ini ansible/install_docker.yml

  ansible-playbook -i ansible/hosts.ini ansible/install_nginx.yml

  ansible-playbook -i ansible/hosts.ini ansible/setup_swarm.yml

  ansible-playbook -i ansible/hosts.ini ansible/deploy_app.yml

How CI/CD works (push to main triggers build and deploy).

How to test deployment (access public IP or domain in browser).
