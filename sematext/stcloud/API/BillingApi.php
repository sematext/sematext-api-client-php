<?php
/**
 * BillingApi
 * PHP version 5
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sematext Cloud API
 *
 * API Explorer provides access and documentation for Sematext REST API. The REST API requires the API Key to be sent as part of `Authorization` header. E.g.: `Authorization : apiKey e5f18450-205a-48eb-8589-7d49edaea813`.
 *
 * OpenAPI spec version: v3
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sematext\stcloud\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use sematext\stcloud\ApiException;
use sematext\stcloud\Configuration;
use sematext\stcloud\HeaderSelector;
use sematext\stcloud\ObjectSerializer;

/**
 * BillingApi Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingApi
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
     * Operation getDetailedInvoiceUsingGET1
     *
     * Get invoice details
     *
     * @param  string $service service (required)
     * @param  int $year year (required)
     * @param  int $month month (required)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \sematext\stcloud\Model\InvoiceResponse
     */
    public function getDetailedInvoiceUsingGET1($service, $year, $month)
    {
        list($response) = $this->getDetailedInvoiceUsingGET1WithHttpInfo($service, $year, $month);
        return $response;
    }

    /**
     * Operation getDetailedInvoiceUsingGET1WithHttpInfo
     *
     * Get invoice details
     *
     * @param  string $service service (required)
     * @param  int $year year (required)
     * @param  int $month month (required)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \sematext\stcloud\Model\InvoiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDetailedInvoiceUsingGET1WithHttpInfo($service, $year, $month)
    {
        $returnType = '\sematext\stcloud\Model\InvoiceResponse';
        $request = $this->getDetailedInvoiceUsingGET1Request($service, $year, $month);

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
                        '\sematext\stcloud\Model\InvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDetailedInvoiceUsingGET1Async
     *
     * Get invoice details
     *
     * @param  string $service service (required)
     * @param  int $year year (required)
     * @param  int $month month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDetailedInvoiceUsingGET1Async($service, $year, $month)
    {
        return $this->getDetailedInvoiceUsingGET1AsyncWithHttpInfo($service, $year, $month)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDetailedInvoiceUsingGET1AsyncWithHttpInfo
     *
     * Get invoice details
     *
     * @param  string $service service (required)
     * @param  int $year year (required)
     * @param  int $month month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDetailedInvoiceUsingGET1AsyncWithHttpInfo($service, $year, $month)
    {
        $returnType = '\sematext\stcloud\Model\InvoiceResponse';
        $request = $this->getDetailedInvoiceUsingGET1Request($service, $year, $month);

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
     * Create request for operation 'getDetailedInvoiceUsingGET1'
     *
     * @param  string $service service (required)
     * @param  int $year year (required)
     * @param  int $month month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDetailedInvoiceUsingGET1Request($service, $year, $month)
    {
        // verify the required parameter 'service' is set
        if ($service === null || (is_array($service) && count($service) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service when calling getDetailedInvoiceUsingGET1'
            );
        }
        // verify the required parameter 'year' is set
        if ($year === null || (is_array($year) && count($year) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $year when calling getDetailedInvoiceUsingGET1'
            );
        }
        // verify the required parameter 'month' is set
        if ($month === null || (is_array($month) && count($month) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $month when calling getDetailedInvoiceUsingGET1'
            );
        }

        $resourcePath = '/users-web/api/v3/billing/invoice/{service}/{year}/{month}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($service !== null) {
            $resourcePath = str_replace(
                '{' . 'service' . '}',
                ObjectSerializer::toPathValue($service),
                $resourcePath
            );
        }
        // path params
        if ($year !== null) {
            $resourcePath = str_replace(
                '{' . 'year' . '}',
                ObjectSerializer::toPathValue($year),
                $resourcePath
            );
        }
        // path params
        if ($month !== null) {
            $resourcePath = str_replace(
                '{' . 'month' . '}',
                ObjectSerializer::toPathValue($month),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation listAvailablePlansUsingGET1
     *
     * Get available plans
     *
     * @param  int $integration_id integrationId (optional)
     * @param  string $app_type appType (optional)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \sematext\stcloud\Model\PlansResponse
     */
    public function listAvailablePlansUsingGET1($integration_id = null, $app_type = null)
    {
        list($response) = $this->listAvailablePlansUsingGET1WithHttpInfo($integration_id, $app_type);
        return $response;
    }

    /**
     * Operation listAvailablePlansUsingGET1WithHttpInfo
     *
     * Get available plans
     *
     * @param  int $integration_id integrationId (optional)
     * @param  string $app_type appType (optional)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \sematext\stcloud\Model\PlansResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAvailablePlansUsingGET1WithHttpInfo($integration_id = null, $app_type = null)
    {
        $returnType = '\sematext\stcloud\Model\PlansResponse';
        $request = $this->listAvailablePlansUsingGET1Request($integration_id, $app_type);

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
                        '\sematext\stcloud\Model\PlansResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listAvailablePlansUsingGET1Async
     *
     * Get available plans
     *
     * @param  int $integration_id integrationId (optional)
     * @param  string $app_type appType (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAvailablePlansUsingGET1Async($integration_id = null, $app_type = null)
    {
        return $this->listAvailablePlansUsingGET1AsyncWithHttpInfo($integration_id, $app_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAvailablePlansUsingGET1AsyncWithHttpInfo
     *
     * Get available plans
     *
     * @param  int $integration_id integrationId (optional)
     * @param  string $app_type appType (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAvailablePlansUsingGET1AsyncWithHttpInfo($integration_id = null, $app_type = null)
    {
        $returnType = '\sematext\stcloud\Model\PlansResponse';
        $request = $this->listAvailablePlansUsingGET1Request($integration_id, $app_type);

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
     * Create request for operation 'listAvailablePlansUsingGET1'
     *
     * @param  int $integration_id integrationId (optional)
     * @param  string $app_type appType (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listAvailablePlansUsingGET1Request($integration_id = null, $app_type = null)
    {
        $resourcePath = '/users-web/api/v3/billing/availablePlans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($integration_id !== null) {
            $queryParams['integrationId'] = ObjectSerializer::toQueryValue($integration_id, 'int64');
        }
        // query params
        if ($app_type !== null) {
            $queryParams['appType'] = ObjectSerializer::toQueryValue($app_type, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation updatePlanUsingPUT
     *
     * Update plan for an app
     *
     * @param  \sematext\stcloud\Model\BillingInfo $body dto (required)
     * @param  int $app_id appId (required)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \sematext\stcloud\Model\UpdatePlanResponse
     */
    public function updatePlanUsingPUT($body, $app_id)
    {
        list($response) = $this->updatePlanUsingPUTWithHttpInfo($body, $app_id);
        return $response;
    }

    /**
     * Operation updatePlanUsingPUTWithHttpInfo
     *
     * Update plan for an app
     *
     * @param  \sematext\stcloud\Model\BillingInfo $body dto (required)
     * @param  int $app_id appId (required)
     *
     * @throws \sematext\stcloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \sematext\stcloud\Model\UpdatePlanResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePlanUsingPUTWithHttpInfo($body, $app_id)
    {
        $returnType = '\sematext\stcloud\Model\UpdatePlanResponse';
        $request = $this->updatePlanUsingPUTRequest($body, $app_id);

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
                        '\sematext\stcloud\Model\UpdatePlanResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updatePlanUsingPUTAsync
     *
     * Update plan for an app
     *
     * @param  \sematext\stcloud\Model\BillingInfo $body dto (required)
     * @param  int $app_id appId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePlanUsingPUTAsync($body, $app_id)
    {
        return $this->updatePlanUsingPUTAsyncWithHttpInfo($body, $app_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updatePlanUsingPUTAsyncWithHttpInfo
     *
     * Update plan for an app
     *
     * @param  \sematext\stcloud\Model\BillingInfo $body dto (required)
     * @param  int $app_id appId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePlanUsingPUTAsyncWithHttpInfo($body, $app_id)
    {
        $returnType = '\sematext\stcloud\Model\UpdatePlanResponse';
        $request = $this->updatePlanUsingPUTRequest($body, $app_id);

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
     * Create request for operation 'updatePlanUsingPUT'
     *
     * @param  \sematext\stcloud\Model\BillingInfo $body dto (required)
     * @param  int $app_id appId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updatePlanUsingPUTRequest($body, $app_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updatePlanUsingPUT'
            );
        }
        // verify the required parameter 'app_id' is set
        if ($app_id === null || (is_array($app_id) && count($app_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app_id when calling updatePlanUsingPUT'
            );
        }

        $resourcePath = '/users-web/api/v3/billing/info/{appId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($app_id !== null) {
            $resourcePath = str_replace(
                '{' . 'appId' . '}',
                ObjectSerializer::toPathValue($app_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
            'PUT',
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
