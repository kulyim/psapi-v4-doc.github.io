# PhotoShelter API v4 generated code and documentation

Definition files pushed by Swagger Hub


### Files

 - **.ps-api :** Placeholder file for the view URL and PORT 
 -- *first line of the file*
 - **Jenkinsfile** CI/CD definitions and trigger file
 - **run-redoc.exp** expect file with definitions to generate and push documentation to *GitHub Pages*.


## OpenAPI Specification

Currently tracking [v3.0.0](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md)


## JSON API

Currently tracking [v1.0]([https://jsonapi.org/format/1.0/](https://jsonapi.org/format/1.0/))

## CI/CD Steps

### Linting 
![enter image description here](https://avatars0.githubusercontent.com/u/4072897?s=200&v=4 =25x)
[Speccy](https://github.com/wework/speccy)
	
"Make sure your OpenAPI 3.0 specifications are more than just valid, make sure they're useful!" 
### Validation
![enter image description here](https://avatars1.githubusercontent.com/u/43750074?s=200&v=4 =25x)
[Swagger-cli](https://github.com/APIDevTools/swagger-cli)
### Contract Testing
![enter image description here](https://raw.githubusercontent.com/apiaryio/dredd/master/docs/_static/images/dredd.png =1280x)
:warning: Your .ps-api configuration file must be pointing to the right view URL:PORT
:warning: Your test must be present as well
