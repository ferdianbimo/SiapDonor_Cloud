pipeline {
    agent any

    stages {
        stage('Git checkout') {
            steps {
                echo "Checking out the code from Git repository"
                checkout([$class: 'GitSCM', 
                          branches: [[name: '*/main']], 
                          userRemoteConfigs: [[url: 'https://github.com/ferdianbimo/SiapDonor_Cloud.git']]])
            }
        }

     stage('Build Docker Images') {
            steps {
                echo "Building Docker images local"
                sh 'docker build -t laravel-app:latest -f Dockerfile .'
                sh 'docker build -t nginx:alpine -f nginx.Dockerfile .'
                sh 'docker build -t mysql:8.0 -f mysql.Dockerfile .'
            }
        }

post {
        success {
            echo "Pipeline executed successfully!"
        }
        failure {
            echo "Pipeline failed!"
        }
    }
}
