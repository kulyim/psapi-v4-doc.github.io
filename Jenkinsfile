pipeline {


    agent any

    tools {nodejs "node"}

    environment {
        CI = 'true'
	VIEW = readFile('.ps-api').trim()
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

          }
        }

        stage('Linting') {
            steps {
                echo 'Linting...'
                sh 'npm config ls'
		println('Speccy')
		sh 'speccy lint -v definitions/json/photoshelter.json'
            }
        }
   
        stage('Syntax Validation') {
            steps {
                echo 'Checking syntax'
		sh 'swagger-cli validate -d --no-schema --no-spec definitions/json/photoshelter.json'
            }
        }

	// Each developer must have a .ps-api config file with the PROTOCOL:URL:PORT or their view
        stage('Contract Testing') {
            steps {
                echo 'Contract Testing....'
//		def viewPort = readfile('.ps-api').trim()
		sh "dredd definitions/json/photoshelter.json echo \${VIEW} --dry-run"
            }
        }
	// Documentation generation for master only, developers can replicate the steps to generate their own docs
        stage('Documentation Generation') {
	    when {
		branch 'master'
	    }
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

