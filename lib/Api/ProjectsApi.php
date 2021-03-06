<?php
/**
 * ProjectsApi
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
 * ProjectsApi Class Doc Comment
 *
 * @category Class
 * @package  Float\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectsApi
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
     * @return ProjectsApi
     */
    public function setApiClient(\Float\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addProject
     *
     * Add a new project
     *
     * @param \Float\Client\Model\Project $data The project to create (optional)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Project
     */
    public function addProject($data = null)
    {
        list($response) = $this->addProjectWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation addProjectWithHttpInfo
     *
     * Add a new project
     *
     * @param \Float\Client\Model\Project $data The project to create (optional)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Project, HTTP status code, HTTP response headers (array of strings)
     */
    public function addProjectWithHttpInfo($data = null)
    {
        // parse inputs
        $resourcePath = "/projects";
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
                '\Float\Client\Model\Project',
                '/projects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Project', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Project', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProject
     *
     * Delete a project
     *
     * @param int $projectId project id to delete (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteProject($projectId)
    {
        list($response) = $this->deleteProjectWithHttpInfo($projectId);
        return $response;
    }

    /**
     * Operation deleteProjectWithHttpInfo
     *
     * Delete a project
     *
     * @param int $projectId project id to delete (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProjectWithHttpInfo($projectId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling deleteProject');
        }
        // parse inputs
        $resourcePath = "/projects/{project_id}";
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
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
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
                '/projects/{project_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getProject
     *
     * Retrieve a single project.
     *
     * @param int $projectId The project&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Project
     */
    public function getProject($projectId)
    {
        list($response) = $this->getProjectWithHttpInfo($projectId);
        return $response;
    }

    /**
     * Operation getProjectWithHttpInfo
     *
     * Retrieve a single project.
     *
     * @param int $projectId The project&#39;s ID (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Project, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectWithHttpInfo($projectId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling getProject');
        }
        // parse inputs
        $resourcePath = "/projects/{project_id}";
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
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
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
                '\Float\Client\Model\Project',
                '/projects/{project_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Project', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Project', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProjects
     *
     * List projects
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Project[]
     */
    public function getProjects()
    {
        list($response) = $this->getProjectsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getProjectsWithHttpInfo
     *
     * List projects
     *
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Project[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/projects";
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
                '\Float\Client\Model\Project[]',
                '/projects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Project[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Project[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateProject
     *
     * Update a project's details
     *
     * @param int $projectId The project&#39;s id (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return \Float\Client\Model\Project
     */
    public function updateProject($projectId)
    {
        list($response) = $this->updateProjectWithHttpInfo($projectId);
        return $response;
    }

    /**
     * Operation updateProjectWithHttpInfo
     *
     * Update a project's details
     *
     * @param int $projectId The project&#39;s id (required)
     * @throws \Float\Client\ApiException on non-2xx response
     * @return array of \Float\Client\Model\Project, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProjectWithHttpInfo($projectId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling updateProject');
        }
        // parse inputs
        $resourcePath = "/projects/{project_id}";
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
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
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
                '\Float\Client\Model\Project',
                '/projects/{project_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Float\Client\Model\Project', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Float\Client\Model\Project', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
