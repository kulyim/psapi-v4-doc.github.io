<?php
/**
 * GalleryApi
 * PHP version 5
 *
 * @category Class
 * @package  PhotoShelter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PhotoShelter API v4
 *
 * # PhotoShelter API v4 definition
 *
 * OpenAPI spec version: Anthony
 * Contact: api-support@photoshelter.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PhotoShelter\APIv4Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use PhotoShelter\ApiException;
use PhotoShelter\Configuration;
use PhotoShelter\HeaderSelector;
use PhotoShelter\ObjectSerializer;

/**
 * GalleryApi Class Doc Comment
 *
 * @category Class
 * @package  PhotoShelter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GalleryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation galleriesGet
     *
     * Gets all the galleries for the account.
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page (optional)
     * @param  string $sort_by Sort by gallery property (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     * @param  string $name Full or partial gallery name (optional)
     * @param  string $parent Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. (optional)
     * @param  bool $portfolio Filter the result set to return galleries listed on public site (optional)
     * @param  bool $recently_updated Filter the result set to return galleries recently updated (optional)
     * @param  \PhotoShelter\psPackage\ApiKey $api_key api_key (optional)
     *
     * @throws \PhotoShelter\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PhotoShelter\psPackage\InlineResponse200
     */
    public function galleriesGet($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $name = null, $parent = null, $portfolio = null, $recently_updated = null, $api_key = null)
    {
        list($response) = $this->galleriesGetWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key);
        return $response;
    }

    /**
     * Operation galleriesGetWithHttpInfo
     *
     * Gets all the galleries for the account.
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page (optional)
     * @param  string $sort_by Sort by gallery property (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     * @param  string $name Full or partial gallery name (optional)
     * @param  string $parent Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. (optional)
     * @param  bool $portfolio Filter the result set to return galleries listed on public site (optional)
     * @param  bool $recently_updated Filter the result set to return galleries recently updated (optional)
     * @param  \PhotoShelter\psPackage\ApiKey $api_key (optional)
     *
     * @throws \PhotoShelter\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PhotoShelter\psPackage\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function galleriesGetWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $name = null, $parent = null, $portfolio = null, $recently_updated = null, $api_key = null)
    {
        $returnType = '\PhotoShelter\psPackage\InlineResponse200';
        $request = $this->galleriesGetRequest($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\psPackage\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation galleriesGetAsync
     *
     * Gets all the galleries for the account.
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page (optional)
     * @param  string $sort_by Sort by gallery property (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     * @param  string $name Full or partial gallery name (optional)
     * @param  string $parent Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. (optional)
     * @param  bool $portfolio Filter the result set to return galleries listed on public site (optional)
     * @param  bool $recently_updated Filter the result set to return galleries recently updated (optional)
     * @param  \PhotoShelter\psPackage\ApiKey $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function galleriesGetAsync($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $name = null, $parent = null, $portfolio = null, $recently_updated = null, $api_key = null)
    {
        return $this->galleriesGetAsyncWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation galleriesGetAsyncWithHttpInfo
     *
     * Gets all the galleries for the account.
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page (optional)
     * @param  string $sort_by Sort by gallery property (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     * @param  string $name Full or partial gallery name (optional)
     * @param  string $parent Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. (optional)
     * @param  bool $portfolio Filter the result set to return galleries listed on public site (optional)
     * @param  bool $recently_updated Filter the result set to return galleries recently updated (optional)
     * @param  \PhotoShelter\psPackage\ApiKey $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function galleriesGetAsyncWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $name = null, $parent = null, $portfolio = null, $recently_updated = null, $api_key = null)
    {
        $returnType = '\PhotoShelter\psPackage\InlineResponse200';
        $request = $this->galleriesGetRequest($page, $per_page, $sort_by, $sort_dir, $name, $parent, $portfolio, $recently_updated, $api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'galleriesGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page (optional)
     * @param  string $sort_by Sort by gallery property (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     * @param  string $name Full or partial gallery name (optional)
     * @param  string $parent Limit galleries to children of the provided collection ID. Pass blank to find galleries with no parent. (optional)
     * @param  bool $portfolio Filter the result set to return galleries listed on public site (optional)
     * @param  bool $recently_updated Filter the result set to return galleries recently updated (optional)
     * @param  \PhotoShelter\psPackage\ApiKey $api_key (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function galleriesGetRequest($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $name = null, $parent = null, $portfolio = null, $recently_updated = null, $api_key = null)
    {

        $resourcePath = '/galleries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = ObjectSerializer::toQueryValue($sort_by);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = ObjectSerializer::toQueryValue($sort_dir);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($parent !== null) {
            $queryParams['parent'] = ObjectSerializer::toQueryValue($parent);
        }
        // query params
        if ($portfolio !== null) {
            $queryParams['portfolio'] = ObjectSerializer::toQueryValue($portfolio);
        }
        // query params
        if ($recently_updated !== null) {
            $queryParams['recently_updated'] = ObjectSerializer::toQueryValue($recently_updated);
        }
        // query params
        if ($api_key !== null) {
            $queryParams['api_key'] = ObjectSerializer::toQueryValue($api_key);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
