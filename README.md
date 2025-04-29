# yii2-app

The repository yii2-app appears to be a project for deploying an application using Ansible playbooks and includes a CI/CD pipeline. Here's a step-by-step summary of the repository based on its README:
1. Running Ansible Playbooks

The repository includes several Ansible playbooks to set up and deploy the application. These are executed as follows:

Install Docker:

    ansible-playbook ansible/install_docker.yml

Install NGINX:

    ansible-playbook ansible/install_nginx.yml

Set up Docker Swarm:

    ansible-playbook ansible/setup_swarm.yml

Deploy the application:

    ansible-playbook ansible/deploy_app.yml

2. Continuous Integration/Continuous Deployment (CI/CD)

    The repository is configured such that pushing to the main branch will automatically trigger a build and deployment process.

3. Testing the Deployment

    After deployment, you can verify the application by accessing it through the public IP or domain in a browser.
