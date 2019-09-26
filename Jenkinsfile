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
            sh 'npm install redoc --save'
            sh 'npm install -g create-openapi-repo'
            sh 'npm install -g @stoplight/prism-cli'
            sh 'npm install -g dredd'
          }
        }

        stage('Linting') {
            steps {
                echo 'Linting...'
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
//		sh 'dredd init'
//		sh 'echo '
		sh "dredd definitions/json/photoshelter.json \${VIEW} --loglevel error --method GET,POST,DELETE --sorted"
            }
        }

	// Documentation generation for master only, developers can replicate the steps to generate their own docs
        stage('Documentation Generation') {
//	    when {
//		branch 'master'
//	    } 
            steps {
		echo 'Generating documentation'
		sh 'pwd'
		sh 'chmod 755 run-redoc.exp'
		checkout(userRemoteConfigs: [url: "https://github.com/photoshelter-dev/psapi-v4-doc.github.io/blob/ad62d27119ca05aadff980ab856b8d27104616c1/run-redoc.exp"])
 		sh '${WORKSPACE}/run-redoc.exp'
		//sh 'create-openapi-repo .'
		
                echo 'Deploying....'
		sh 'npm run gh-pages'
            }
        }
    }
}

