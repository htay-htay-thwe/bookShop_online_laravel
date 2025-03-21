pipeline {

  agent  { label 'first_kubernetes' } 

    environment {
        DOCKER_IMAGE = 'htayhtaythwe717/kubernetes'
        KUBECONFIG_CREDENTIALS = 'k8s-config'
    }

    triggers {
        githubPush()  // 🚀 Automatically triggers on GitHub push
    }

    stages {
        stage('Checkout Code') {
            steps {
              git credentialsId: 'github', url: 'git@github.com:htay-htay-thwe/bookShop_online_laravel.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $DOCKER_IMAGE:1.0 .'
            }
        }

        stage('Push to Docker Hub') {
            steps {
                withDockerRegistry([credentialsId: 'docker-hub-credentials']) {
                    sh 'docker push $DOCKER_IMAGE:latest'
                }
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                withKubeConfig([credentialsId: KUBECONFIG_CREDENTIALS]) {
                    sh '''
                    kubectl apply -f laravel-deploy.yaml
                    kubectl apply -f mysql-deploy.yaml
                    '''
                }
            }
        }
    }
}
