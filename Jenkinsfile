pipeline {

    agent any

    tools {nodejs "node"}

    environment {
        CI = 'true'
    }
    stages {
        stage('Install dependencies') {
          steps {
            sh 'npm install --silent' // avoiding warnings from pkgs
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
		echo 'Print env'
   		sh "printenv | sort"
		sh 'git branch'
		println('fetching public repo')
//                git 'https://github.com/photoshelter-dev/psapi-v4-doc.github.io.git'
		sh 'git clone --single-branch --branch anthony https://github.com/photoshelter-dev/psapi-v4-doc.github.io.git'
		sh 'pwd'
		sh 'ls -la'
       		}
        }
/* Skipping for now . step is working
        stage('Linting') {
            steps {
                echo 'Linting...'
                sh 'npm config ls'
		println('Speccy')
		sh 'speccy lint -v definitions/photoshelter.json'
            }
        }
   
        stage('Syntax Validation') {
            steps {
                echo 'Checking syntax'
		sh 'swagger-cli validate -d --no-schema --no-spec definitions/photoshelter.json'
            }
        }
        stage('Contract Testing') {
            steps {
                echo 'Contract Testing....'
		sh 'dredd definitions/photoshelter.json http://anthony.dev.bitshelter.com:8090 --dry-run'
            }
        }
*/
        stage('Documentation Generation') {
            steps {
		echo 'Generating documentation'
		sh 'ls -la'
		sh 'cd /var/jenkins_home/workspace/pecifications-workflow-mp_master'
		sh 'ls -la'
		sh 'chmod 755 run-redoc.exp'
		sh 'ls -la'
		sh './run-redoc.exp'
                echo 'Deploying....'
		sh 'npm run gh-pages'
            }
        }

    }
}

