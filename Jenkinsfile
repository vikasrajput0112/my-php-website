pipeline {
    agent any

    environment {
        IMAGE_NAME = "php-website"
        CONTAINER_NAME = "php-website-container"
    }

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh '''
                docker build -t $IMAGE_NAME:latest .
                '''
            }
        }

        stage('Stop Old Container') {
            steps {
                sh '''
                docker stop $CONTAINER_NAME || true
                docker rm $CONTAINER_NAME || true
                '''
            }
        }

        stage('Deploy Website') {
            steps {
                sh '''
                docker run -d \
                --name $CONTAINER_NAME \
                -p 8080:80 \
                $IMAGE_NAME:latest
                '''
            }
        }
    }
}
