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
	    sh 'npm install -g npx'
            sh 'npm install -g swagger-cli'
            sh 'npm install -g redoc --save'
            //sh 'npm install -g create-openapi-repo'
            //sh 'npm install -g @stoplight/prism-cli'
            sh 'npm install -g dredd'
	    //sh 'npm install -g redoc-cli'
	    sh 'redoc-cli --help'	
          }
        }

        stage('Linting') {
            steps {
                echo 'Linting...'
		// keeping this for testing	
//		sh '`pwd`/myscript.sh'
		sh 'ls -la'
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
		sh "dredd definitions/json/photoshelter.json \${VIEW} --loglevel error --method GET,POST,DELETE --sorted --details --output ${BUILD_DISPLAY_NAME}.html --reporter html"
            }
        }
    }
}

