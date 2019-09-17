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
         /*   sh 'npm install -g swagger-cli'
            sh 'npm install redoc --save'
            sh 'npm install -g create-openapi-repo'
            sh 'npm install -g @stoplight/prism-cli'
            sh 'npm install -g dredd' */
        //    sh 'sudo apt-get install expect'
        //    sh 'sudo apt-get install curl'
          }
        }
        stage('Cloning Git') {
          steps {
              echo 'Test clone git'

//		sh 'git clone git@github.com:photoshelter-dev/psapi-v4-doc.github.io.git'
 		//git branch: "${params.SPECIFIER}", url: "${GIT_URL}"
//		git branch: "${GIT_BRANCH}",
    //		credentialsId: 'JenkinsAccesstoPSGit',
    //		url: 'git@github.com:photoshelter-dev/psapi-v4-doc.github.io.git'			
//		echo "Running ${env.BUILD_ID} on ${env.JENKINS_URL}"
//		echo $GIT_BRANCH
echo 'Print env'
   sh "printenv | sort"
//echo  ${scm.branch}
//GITHUB_PR_TARGET_BRANCH
//	sh 'printenv'			
	//	sh 'ls -la'
		
              git 'https://github.com/photoshelter-dev/psapi-v4-doc.github.io.git'
          }
        }
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
		
            }
        }
/*        stage('Contract Testing') {
            steps {
                echo 'Deploying....'
            }
        }
        stage('Documentation Generation') {
            steps {
                echo 'Deploying....'
            }
        }
*/
    }
}

