<?php
/**
 * ClientsApi
 * PHP version 5
 *
 * @category Class
 * @package  Float\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Reference
 *
 * This API allows 3rd party integration of your Float data.
 *
 * OpenAPI spec version: 3.0.0-beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Float\Client\Api;

use \Float\Client\ApiClient;
use \Float\Client\ApiException;
use \Float\Client\Configuration;
use \Float\Client\ObjectSerializer;

/**
 * ClientsApi Class Doc Comment
 *
 * @category Class
 * @package  Float\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientsApi
{
    /**
     * API Client
     *
     * @var \Float\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Float\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Float\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Float\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Float\Client\ApiClient $apiClient set the API client
     *
     * @return ClientsApi
     */
    public function setApiClient(\Float\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addClient
     *
     * Add a new client
     *
     * @param \Float\Client\Model\Client $data The client to create (optional)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Client
     */
    public function addClient($data = null)
    {
        list($response) = $this->addClientWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation addClientWithHttpInfo
     *
     * Add a new client
     *
     * @param \Float\Client\Model\Client $data The client to create (optional)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Client, HTTP status code, HTTP response headers (array of strings)
     */
    public function addClientWithHttpInfo($data = null)
    {
        // parse inputs
        $resourcePath = "/clients";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Float\Client\Model\Client',
                '/clients'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Client', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Client', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteClient
     *
     * Delete a client
     *
     * @param int $clientId client id to delete (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteClient($clientId)
    {
        list($response) = $this->deleteClientWithHttpInfo($clientId);
        return $response;
    }

    /**
     * Operation deleteClientWithHttpInfo
     *
     * Delete a client
     *
     * @param int $clientId client id to delete (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteClientWithHttpInfo($clientId)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $clientId when calling deleteClient');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($clientId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/clients/{client_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getClient
     *
     * Retrieve a single client
     *
     * @param int $clientId The client&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Client
     */
    public function getClient($clientId)
    {
        list($response) = $this->getClientWithHttpInfo($clientId);
        return $response;
    }

    /**
     * Operation getClientWithHttpInfo
     *
     * Retrieve a single client
     *
     * @param int $clientId The client&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Client, HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientWithHttpInfo($clientId)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $clientId when calling getClient');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($clientId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Float\Client\Model\Client',
                '/clients/{client_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Client', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Client', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getClients
     *
     * List clients
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Client[]
     */
    public function getClients()
    {
        list($response) = $this->getClientsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getClientsWithHttpInfo
     *
     * List clients
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Client[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getClientsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/clients";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Float\Client\Model\Client[]',
                '/clients'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Client[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Client[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateClient
     *
     * Update a client's name
     *
     * @param int $clientId The client&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Client
     */
    public function updateClient($clientId)
    {
        list($response) = $this->updateClientWithHttpInfo($clientId);
        return $response;
    }

    /**
     * Operation updateClientWithHttpInfo
     *
     * Update a client's name
     *
     * @param int $clientId The client&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Client, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateClientWithHttpInfo($clientId)
    {
        // verify the required parameter 'clientId' is set
        if ($clientId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $clientId when calling updateClient');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($clientId !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($clientId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Float\Client\Model\Client',
                '/clients/{client_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Client', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Client', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}