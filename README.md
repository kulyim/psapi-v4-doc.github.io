# PhotoShelter API v4 Open API 3 specifications and generated documentation

## OpenAPI Specification
Currently tracking [v3.0.0](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md)


## JSON API
Currently tracking [v1.0]([https://jsonapi.org/format/1.0/](https://jsonapi.org/format/1.0/))

## How-to
[How to submit your Open API definitions for peer review?](http://wiki.corp.bitshelter.com/bin/view/Main/DeptDev/ApiV4/How%20to%20submit%20your%20Open%20API%20definitions%20for%20peer%20review%3F)

## Quality
It is highly recommended to run the tools below against your OAS3 specifications to ensure quality and conformity to standards.

Cherry pick the ones your prefer, although trying and using all of them is beneficial rather than sticking to one or a few.

### Linting
---
#### JSON Linter with Open API v3 support
![Spectral Lint](https://github.com/stoplightio/spectral/raw/develop/img/spectral-banner.png)

[Spectral](https://github.com/stoplightio/spectral)

---

**Speccy** : *"Make sure your OpenAPI 3.0 specifications are more than just valid, make sure they're useful!"*

![enter image description here](https://avatars0.githubusercontent.com/u/4072897?s=200&v=4=25x)

[Speccy](https://github.com/wework/speccy)

---

### Validation

![enter image description here](https://avatars1.githubusercontent.com/u/43750074?s=200&v=4=25x)

[Swagger-cli](https://github.com/APIDevTools/swagger-cli)

---

### Contract Testing

![enter image description here](https://raw.githubusercontent.com/apiaryio/dredd/master/docs/_static/images/dredd.png)

[Dredd](https://github.com/apiaryio/dredd)

## Notes
:warning: Your .ps-api configuration file must be pointing to the right view URL:PORT

## File Structure

```
├── api.yaml
├── components
│   ├── domain.yaml
│   ├── errors.yaml
│   ├── headers.yaml
│   ├── parameters.yaml
│   ├── requests.yaml
│   ├── responses.yaml
│   └── schemas.yaml
├── info
│   ├── info.yaml
│   └── server.yaml
├── paths
│   ├── collections.yaml
│   └── index.yaml
├── dredd.yml
├── gulpfile.js
├── package-lock.json
├── package.json
├── redoc-templates
│   └── photoshelter.hbs
└── run-redoc.exp
```

##### /api.yaml
The main file that holds the top level definitions of the final API definition

##### /info/*.yaml
These file hold the general information of API definition

#### /paths/index.yaml
This file hold the top level resource of the API. For example the file `/paths/collections.yaml` should hold all the endpoints that
falls under the `psapi/v4/collections` URI

#### /components
This folder should contain all the necessary components of the API definitions. Each parameter, response and schemas should be in
their corresponding files

### How to compile
Look at the gulpfile.js