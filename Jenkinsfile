pipeline {
    agent any

    stages {
        stage('Setup PHP') {
            steps {
                bat 'set PATH=C:\\laragon\\bin\\php\\php-8.3.16-Win32-vs16-x64;%PATH%'
                bat 'php -v'
            }
        }

        stage('Install Dependencies') {
            steps {
                bat 'composer install'
            }
        }

        stage('Run PHP') {
            steps {
                bat 'php index.php'
            }
        }
    }
}
