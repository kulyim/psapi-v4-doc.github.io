pipeline {

    agent any

    tools {nodejs "node"}

    environment {
        CI = 'true'
    }
    stages {
        stage('Install dependencies') {
          steps {
            sh 'npm install'
            sh 'npm install'
            sh 'npm install speccy -g'
            sh 'npm install -g swagger-cli'
            sh 'npm install redoc --save'
            sh 'npm install -g create-openapi-repo'
            sh 'npm install -g @stoplight/prism-cli'
            sh 'npm install -g dredd'
        //    sh 'sudo apt-get install expect'
        //    sh 'sudo apt-get install curl'
          }
        }
        stage('Cloning Git') {
          steps {
              echo 'Test'
          //    echo 'Pulling...' + scm.branches[0].name
               echo 'Print Env'
		echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
		echo $GIT_BRANCH
            //  git 'https://github.com/photoshelter-dev/psapi-v4-doc.github.io.git'
          }
        }
        stage('Linting') {
            steps {
                echo 'Building..'
                sh 'npm config ls'
            }
        }
        stage('Syntax Validation') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Contract Testing') {
            steps {
                echo 'Deploying....'
            }
        }
        stage('Documentation Generation') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}

