pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Run PHP') {
            steps {
                bat 'php -v'
                bat 'php index.php'
            }
        }

        stage('Run Unit Test') {
            steps {
                bat 'vendor\\bin\\phpunit'
            }
        }
    }
}
