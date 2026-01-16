pipeline {
    agent any

    environment {
        IMAGE_NAME = "php-website"
        CONTAINER_NAME = "php-website-container"
        HOST_PORT = "8082"
    }

    stages {

        stage('Build Docker Image-1') {
            steps {
                sh 'docker build -t $IMAGE_NAME:latest .'
            }
        }

        stage('Stop Old Container-1') {
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
                -p $HOST_PORT:80 \
                $IMAGE_NAME:latest
                '''
            }
        }
    }
}
