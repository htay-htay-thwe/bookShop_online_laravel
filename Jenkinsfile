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
              git credentialsId: 'github', branch: 'main',url: 'git@github.com:htay-htay-thwe/bookShop_online_laravel.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $DOCKER_IMAGE:1.0 .'
            }
        }

        stage('Push to Docker Hub') {
            steps {
                withDockerRegistry([credentialsId: 'docker-hub-credentials',url: 'https://index.docker.io/v1/']) {
                    sh 'docker push $DOCKER_IMAGE:1.0'
                }
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
              withKubeConfig(caCertificate: '''MIIDBjCCAe6gAwIBAgIBATANBgkqhkiG9w0BAQsFADAVMRMwEQYDVQQDEwptaW5p
a3ViZUNBMB4XDTI1MDMyMTA2NTEwNFoXDTM1MDMyMDA2NTEwNFowFTETMBEGA1UE
AxMKbWluaWt1YmVDQTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALLc
WM84Lgm64bYsJn6flpeoyM57Spz2rN9G0G59pd9nEbj/1jxardUY6RCbNyNE10Vf
9Hi3GbFDp2I+hPgm11xHtxajb9Gy7aJ9QsxFxuKa8NmO7wQJlQUv95Cg7xx5NfFj
+yVcPIhEzrm0I4BP9LTXcDTG9eR1UbpaH+62+E29jLe6DcDsptHStY1jjWE6VcuN
Gb/etDof30jrp17EknpBoLz+qZnIm0xxIFhWvjjFFnMM4fcq47WTIumuyyy3wNMw
r4yGzHq1t2sFrJO6f8v1VHv4hd2+uUtSu6mCphESInXrHGMj/5wBbzWsoYtZ3aQo
WRy9GxDi7q+Gy6+rdSkCAwEAAaNhMF8wDgYDVR0PAQH/BAQDAgKkMB0GA1UdJQQW
MBQGCCsGAQUFBwMCBggrBgEFBQcDATAPBgNVHRMBAf8EBTADAQH/MB0GA1UdDgQW
BBT10c4Zcz4C1IMX2RTrGHxuqe6/aTANBgkqhkiG9w0BAQsFAAOCAQEAqK57Jogx
PGUeDolmcLmORdn1v99g2xwik6BHnJu9zM8GUhrgAgden7aT659imT73Ka2ilb9+
FtIbLfgC/tBskQTOaKOjBp4CwfUIhO/dWzDXKF0RL/vPfaCGo+h72bPriteRbcVl
xLEUCfXV8/Tq2P/xZ71LFob+n2EGiSm+EgRqEyJi92YxDfTfieXQmy0sZuQn3dDh
oJYY3IBjR+AKwYj9C0VY+MiTmPwxDTiSXRTVAVW2Xswy3WZ828EefSSeyzhQV8ou
aPnzPmzimMOfnlFKZA70WIo1uwSYQ+2Kk89vJEaTycyBYhxGVeEbm1QMQjrx0oIq
ROvtGpKZTyPLww==''', clusterName: '', contextName: '', credentialsId: 'kubectl', namespace: '', restrictKubeConfigAccess: false, serverUrl: 'https://192.168.49.2:8443') {
       sh '''
                    kubectl apply -f laravel-deploy.yaml --validate=false
                    kubectl apply -f mysql-deploy.yaml --validate=false
                    '''
}
            }
        }
    }
}
