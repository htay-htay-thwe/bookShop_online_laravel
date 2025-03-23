pipeline {

  agent  any

    environment {
        DOCKER_IMAGE = 'htayhtaythwe717/first_kuber'
    }

    stages {
        stage('Checkout Code') {
            steps {
              git credentialsId: 'github', branch: 'main',url: 'https://github.com/htay-htay-thwe/bookShop_online_laravel.git'
            }
        }
         stage('Build Docker Image') {
            steps {
                sh 'docker build -t $DOCKER_IMAGE:1.0 .'
            }
        }

        stage('Push to Docker Hub') {
            steps {
                withDockerRegistry([credentialsId: 'docker-hub', url: '']) {
                    sh 'docker push $DOCKER_IMAGE:1.0'
                }
            }
        }
         stage('Install Kubectl & Minikube') {
            steps {
                sh '''
                # Install kubectl
                curl -LO "https://dl.k8s.io/release/$(curl -L -s https://dl.k8s.io/release/stable.txt)/bin/linux/amd64/kubectl"
                chmod +x kubectl
                sudo mv kubectl /usr/local/bin/

                # Install Minikube
                curl -Lo minikube https://storage.googleapis.com/minikube/releases/latest/minikube-linux-amd64
                chmod +x minikube
                sudo mv minikube /usr/local/bin/

                  # Ensure jenkins user is added to docker group (if needed)
        sudo usermod -aG docker jenkins


        # Switch to jenkins user (non-root user)
        su - jenkins -c "minikube start --driver=docker"
                '''
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                sh '''
                kubectl cluster-info
                kubectl apply -f laravel-deploy.yaml
                kubectl apply -f mysql-deploy.yaml
                '''
            }
        }
}
}

     
