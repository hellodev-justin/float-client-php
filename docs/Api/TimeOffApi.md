# Float\Client\TimeOffApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTimeoff**](TimeOffApi.md#addTimeoff) | **POST** /timeoffs | Add a new time off
[**deleteTimeoff**](TimeOffApi.md#deleteTimeoff) | **DELETE** /timeoffs/{timeoff_id} | Delete a time off record
[**getTimeoff**](TimeOffApi.md#getTimeoff) | **GET** /timeoffs/{timeoff_id} | Retrieve a single time off
[**getTimeoffs**](TimeOffApi.md#getTimeoffs) | **GET** /timeoffs | List of time off scheduled.
[**updateTimeoff**](TimeOffApi.md#updateTimeoff) | **PATCH** /timeoffs/{timeoff_id} | Update a time off&#39;s details


# **addTimeoff**
> \Float\Client\Model\Timeoff addTimeoff($timeoff)

Add a new time off

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffApi();
$timeoff = new \Float\Client\Model\Timeoff(); // \Float\Client\Model\Timeoff | The time off to create

try {
    $result = $api_instance->addTimeoff($timeoff);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->addTimeoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoff** | [**\Float\Client\Model\Timeoff**](../Model/Timeoff.md)| The time off to create | [optional]

### Return type

[**\Float\Client\Model\Timeoff**](../Model/Timeoff.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTimeoff**
> deleteTimeoff($timeoffId)

Delete a time off record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffApi();
$timeoffId = 56; // int | time off id to delete

try {
    $api_instance->deleteTimeoff($timeoffId);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->deleteTimeoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoffId** | **int**| time off id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeoff**
> \Float\Client\Model\Timeoff getTimeoff($timeoffId)

Retrieve a single time off

Returns a single time off.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffApi();
$timeoffId = 56; // int | The time off's ID

try {
    $result = $api_instance->getTimeoff($timeoffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->getTimeoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoffId** | **int**| The time off&#39;s ID |

### Return type

[**\Float\Client\Model\Timeoff**](../Model/Timeoff.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeoffs**
> \Float\Client\Model\Timeoff[] getTimeoffs()

List of time off scheduled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffApi();

try {
    $result = $api_instance->getTimeoffs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->getTimeoffs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Timeoff[]**](../Model/Timeoff.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTimeoff**
> \Float\Client\Model\Timeoff updateTimeoff($timeoffId)

Update a time off's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffApi();
$timeoffId = 56; // int | The time off's ID

try {
    $result = $api_instance->updateTimeoff($timeoffId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->updateTimeoff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoffId** | **int**| The time off&#39;s ID |

### Return type

[**\Float\Client\Model\Timeoff**](../Model/Timeoff.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

