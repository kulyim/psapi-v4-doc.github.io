<?php
/**
 * PortalApi
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
 * PortalApi Class Doc Comment
 *
 * @category Class
 * @package  PhotoShelter
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PortalApi
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
     * Operation portalGet
     *
     * Gets all the collections and galleries for the accountat the root level.
     *
     * @param  string $user_id User ID, will attempt to derive from hostname if not provided optional. (optional)
     * @param  string $org_id Organization ID, will attempt to derive from hostname if not provided optional (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page. (optional)
     * @param  string $sort_by Sort by gallery property. (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     *
     * @throws \PhotoShelter\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function portalGet($user_id = null, $org_id = null, $page = null, $per_page = null, $sort_by = null, $sort_dir = null)
    {
        list($response) = $this->portalGetWithHttpInfo($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir);
        return $response;
    }

    /**
     * Operation portalGetWithHttpInfo
     *
     * Gets all the collections and galleries for the accountat the root level.
     *
     * @param  string $user_id User ID, will attempt to derive from hostname if not provided optional. (optional)
     * @param  string $org_id Organization ID, will attempt to derive from hostname if not provided optional (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page. (optional)
     * @param  string $sort_by Sort by gallery property. (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     *
     * @throws \PhotoShelter\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function portalGetWithHttpInfo($user_id = null, $org_id = null, $page = null, $per_page = null, $sort_by = null, $sort_dir = null)
    {
        $returnType = 'string';
        $request = $this->portalGetRequest($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir);

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
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\APIv4\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\APIv4\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\APIv4\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\APIv4\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PhotoShelter\APIv4\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation portalGetAsync
     *
     * Gets all the collections and galleries for the accountat the root level.
     *
     * @param  string $user_id User ID, will attempt to derive from hostname if not provided optional. (optional)
     * @param  string $org_id Organization ID, will attempt to derive from hostname if not provided optional (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page. (optional)
     * @param  string $sort_by Sort by gallery property. (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function portalGetAsync($user_id = null, $org_id = null, $page = null, $per_page = null, $sort_by = null, $sort_dir = null)
    {
        return $this->portalGetAsyncWithHttpInfo($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation portalGetAsyncWithHttpInfo
     *
     * Gets all the collections and galleries for the accountat the root level.
     *
     * @param  string $user_id User ID, will attempt to derive from hostname if not provided optional. (optional)
     * @param  string $org_id Organization ID, will attempt to derive from hostname if not provided optional (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page. (optional)
     * @param  string $sort_by Sort by gallery property. (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function portalGetAsyncWithHttpInfo($user_id = null, $org_id = null, $page = null, $per_page = null, $sort_by = null, $sort_dir = null)
    {
        $returnType = 'string';
        $request = $this->portalGetRequest($user_id, $org_id, $page, $per_page, $sort_by, $sort_dir);

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
     * Create request for operation 'portalGet'
     *
     * @param  string $user_id User ID, will attempt to derive from hostname if not provided optional. (optional)
     * @param  string $org_id Organization ID, will attempt to derive from hostname if not provided optional (optional)
     * @param  int $page Page number (optional)
     * @param  int $per_page Number of rows returned per page. (optional)
     * @param  string $sort_by Sort by gallery property. (optional)
     * @param  string $sort_dir Sorting result set direction (ascending or descending) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function portalGetRequest($user_id = null, $org_id = null, $page = null, $per_page = null, $sort_by = null, $sort_dir = null)
    {

        $resourcePath = '/portal';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($org_id !== null) {
            $queryParams['org_id'] = ObjectSerializer::toQueryValue($org_id);
        }
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


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'application/xml'],
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
