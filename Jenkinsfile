pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/ferdianbimo/SiapDonor_Cloud.git'
            }
        }
        stage('Send Dockerfile to Ansible') {
            steps {
                echo 'Sending Dockerfile to Ansible...'
                // Tambahkan langkah mengirimkan Dockerfile ke Ansible di sini
            }
        }
        stage('Build Docker Image') {
            steps {
                echo 'Building Docker Image...'
                // Tambahkan langkah build image Docker di sini
            }
        }
        stage('Push Image to Docker Hub') {
            steps {
                echo 'Pushing Image to Docker Hub...'
                // Tambahkan langkah push image ke Docker Hub di sini
            }
        }
        stage('Copy Files to Kubernetes') {
            steps {
                echo 'Copying Files to Kubernetes...'
                // Tambahkan langkah copy file ke Kubernetes di sini
            }
        }
        stage('Deploy to Kubernetes') {
            steps {
                echo 'Deploying to Kubernetes...'
                // Tambahkan langkah deploy aplikasi ke Kubernetes di sini
            }
        }
    }
}
