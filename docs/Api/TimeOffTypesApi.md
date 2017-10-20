# Float\Client\TimeOffTypesApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTimeoffType**](TimeOffTypesApi.md#addTimeoffType) | **POST** /timeoff-types | Add a new time off type
[**getTimeoffType**](TimeOffTypesApi.md#getTimeoffType) | **GET** /timeoff-types/{timeoff_type_id} | Retrieve a single time off type
[**getTimeoffTypes**](TimeOffTypesApi.md#getTimeoffTypes) | **GET** /timeoff-types | List of time off types
[**updateTimeoffType**](TimeOffTypesApi.md#updateTimeoffType) | **PATCH** /timeoff-types/{timeoff_type_id} | Update a time off type&#39;s details


# **addTimeoffType**
> \Float\Client\Model\TimeoffType addTimeoffType($timeoff)

Add a new time off type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffTypesApi();
$timeoff = new \Float\Client\Model\TimeoffType(); // \Float\Client\Model\TimeoffType | The time off type to create

try {
    $result = $api_instance->addTimeoffType($timeoff);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffTypesApi->addTimeoffType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoff** | [**\Float\Client\Model\TimeoffType**](../Model/TimeoffType.md)| The time off type to create | [optional]

### Return type

[**\Float\Client\Model\TimeoffType**](../Model/TimeoffType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeoffType**
> \Float\Client\Model\TimeoffType getTimeoffType($timeoffTypeId)

Retrieve a single time off type

Returns a single time off type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffTypesApi();
$timeoffTypeId = 56; // int | The time off type's ID

try {
    $result = $api_instance->getTimeoffType($timeoffTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffTypesApi->getTimeoffType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoffTypeId** | **int**| The time off type&#39;s ID |

### Return type

[**\Float\Client\Model\TimeoffType**](../Model/TimeoffType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimeoffTypes**
> \Float\Client\Model\TimeoffType[] getTimeoffTypes()

List of time off types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffTypesApi();

try {
    $result = $api_instance->getTimeoffTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffTypesApi->getTimeoffTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\TimeoffType[]**](../Model/TimeoffType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTimeoffType**
> \Float\Client\Model\TimeoffType updateTimeoffType($timeoffTypeId)

Update a time off type's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\TimeOffTypesApi();
$timeoffTypeId = 56; // int | The time off type's ID

try {
    $result = $api_instance->updateTimeoffType($timeoffTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffTypesApi->updateTimeoffType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeoffTypeId** | **int**| The time off type&#39;s ID |

### Return type

[**\Float\Client\Model\TimeoffType**](../Model/TimeoffType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

