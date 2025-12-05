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
        sh 'composer install --no-interaction'
      }
    }
    stage('Run PHP') {
      steps {
        sh 'php index.php'
      }
    }
    stage('Run Unit Tests') {
      steps {
        sh './vendor/bin/phpunit --configuration phpunit.xml'
      }
    }
  }
}
