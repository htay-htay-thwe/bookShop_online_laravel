pipeline {

  agent  any

    environment {
        DOCKER_IMAGE = 'htayhtaythwe717/first_kuber'
    }

    triggers {
        githubPush()  // 🚀 Automatically triggers on GitHub push
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
                withDockerRegistry([credentialsId: 'docker-hub-credentials', url: '']) {
                    sh 'docker push $DOCKER_IMAGE:1.0'
                }
            }
        }
}
}

     
