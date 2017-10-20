# Float\Client\ProjectsApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProject**](ProjectsApi.md#addProject) | **POST** /projects | Add a new project
[**deleteProject**](ProjectsApi.md#deleteProject) | **DELETE** /projects/{project_id} | Delete a project
[**getProject**](ProjectsApi.md#getProject) | **GET** /projects/{project_id} | Retrieve a single project.
[**getProjects**](ProjectsApi.md#getProjects) | **GET** /projects | List projects
[**updateProject**](ProjectsApi.md#updateProject) | **PATCH** /projects/{project_id} | Update a project&#39;s details


# **addProject**
> \Float\Client\Model\Project addProject($data)

Add a new project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ProjectsApi();
$data = new \Float\Client\Model\Project(); // \Float\Client\Model\Project | The project to create

try {
    $result = $api_instance->addProject($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Float\Client\Model\Project**](../Model/Project.md)| The project to create | [optional]

### Return type

[**\Float\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($projectId)

Delete a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ProjectsApi();
$projectId = 56; // int | project id to delete

try {
    $api_instance->deleteProject($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **int**| project id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \Float\Client\Model\Project getProject($projectId)

Retrieve a single project.

Retrieve a single project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ProjectsApi();
$projectId = 56; // int | The project's ID

try {
    $result = $api_instance->getProject($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **int**| The project&#39;s ID |

### Return type

[**\Float\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjects**
> \Float\Client\Model\Project[] getProjects()

List projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ProjectsApi();

try {
    $result = $api_instance->getProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProject**
> \Float\Client\Model\Project updateProject($projectId)

Update a project's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ProjectsApi();
$projectId = 56; // int | The project's id

try {
    $result = $api_instance->updateProject($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **int**| The project&#39;s id |

### Return type

[**\Float\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

