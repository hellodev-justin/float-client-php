# Float\Client\TasksApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTask**](TasksApi.md#addTask) | **POST** /tasks | Add a new task
[**deleteTask**](TasksApi.md#deleteTask) | **DELETE** /tasks/{task_id} | Delete a task
[**getTask**](TasksApi.md#getTask) | **GET** /tasks/{task_id} | Retrieve a single task
[**getTasks**](TasksApi.md#getTasks) | **GET** /tasks | List tasks. This includes any tasks or repeating task sets that start or end within the date range specified.
[**updateTask**](TasksApi.md#updateTask) | **PATCH** /tasks/{task_id} | Update a task&#39;s details


# **addTask**
> \Float\Client\Model\Task addTask($task)

Add a new task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TasksApi();
$task = new \Float\Client\Model\Task(); // \Float\Client\Model\Task | The task to create.

try {
    $result = $api_instance->addTask($task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->addTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | [**\Float\Client\Model\Task**](../Model/Task.md)| The task to create. | [optional]

### Return type

[**\Float\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTask**
> deleteTask($taskId)

Delete a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TasksApi();
$taskId = 56; // int | task id to delete

try {
    $api_instance->deleteTask($taskId);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **int**| task id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \Float\Client\Model\Task getTask($taskId)

Retrieve a single task

Returns a single task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TasksApi();
$taskId = 56; // int | The task's ID

try {
    $result = $api_instance->getTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **int**| The task&#39;s ID |

### Return type

[**\Float\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Float\Client\Model\Task[] getTasks()

List tasks. This includes any tasks or repeating task sets that start or end within the date range specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TasksApi();

try {
    $result = $api_instance->getTasks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \Float\Client\Model\Task updateTask($taskId)

Update a task's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TasksApi();
$taskId = 56; // int | The task's ID

try {
    $result = $api_instance->updateTask($taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskId** | **int**| The task&#39;s ID |

### Return type

[**\Float\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

