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
	    // adding some magic
//	    sh 'npm install -g fury-cli'
//	    sh 'npm install -g openapi-to-postmanv2'
//	    sh 'wget https://github.com/bukalapak/vanadia/releases/download/v1.1.1/vanadia-v1.1.1.linux-amd64.tar.gz'
//	    sh 'tar -xzf vanadia-v1.1.1.linux-amd64.tar.gz'
//	    sh './vanadia -h'

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
//		sh 'dredd init'
//		sh 'echo '
		sh "dredd definitions/json/photoshelter.json \${VIEW} --loglevel error --method GET,POST,DELETE --sorted"
            }
        }

//	stage("Additional Sugar")
//	{
//	    steps {
//		sh 'fury --format text/vnd.apiblueprint definitions/json/photoshelter.json photoshelter.apib'
//		sh './vanadia --input photoshelter.apib --output API.postman_collection.json --config vanadia.yml'
//		sh 'echo vanadia.yml'
//		sh 'openapi2postmanv2 -spec definitions/json/photoshelter.json --output photoshelter-postman.json -pretty'
//	    }
//	}
	// Documentation generation for master only, developers can replicate the steps to generate their own docs
        stage('Documentation Generation') {
//	    when {
//		branch 'master'
//	    } 
            steps {
		echo 'Generating documentation'
		sh 'pwd'
		sh 'chmod 755 run-redoc.exp'
	//	sh 'cd /var/jenkins_home/workspace/pecifications-workflow-mp_${JOB_BASE_NAME}'
	//	sh 'pwd'
	//	sh 'ls -la'
	//	sh 'chmod 755 run-redoc.exp'
//		sh 'ls -la'
//		sh 'run-redoc.exp'
//		sh './run-redoc.exp'
		sh '${JENKINS_HOME}/run-redoc.exp'
//		sh '/var/jenkins_home/workspace/pecifications-workflow-mp_${JOB_BASE_NAME}/run-redoc.exp'
//		sh './var/jenkins_home/workspace/specifications-workflow-mp_${JOB_BASE_NAME}/run-redoc.exp'
                echo 'Deploying....'
		sh 'npm run gh-pages'
            }
        }
    }
}

