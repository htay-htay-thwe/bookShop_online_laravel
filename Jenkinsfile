pipeline {

  agent  { label 'first_kubernetes' } 

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
}
}

     
