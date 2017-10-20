# Float\Client\PublicHolidaysApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addHoliday**](PublicHolidaysApi.md#addHoliday) | **POST** /holidays | Block out times throughout the year when the office is closed
[**deleteHoliday**](PublicHolidaysApi.md#deleteHoliday) | **DELETE** /holidays/{holiday_id} | Delete a holiday
[**getHoliday**](PublicHolidaysApi.md#getHoliday) | **GET** /holidays/{holiday_id} | Retrieve a single holiday
[**getHolidays**](PublicHolidaysApi.md#getHolidays) | **GET** /holidays | List holidays
[**updateHoliday**](PublicHolidaysApi.md#updateHoliday) | **PATCH** /holidays/{holiday_id} | Update a holiday&#39;s details


# **addHoliday**
> \Float\Client\Model\Holiday addHoliday($holiday)

Block out times throughout the year when the office is closed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PublicHolidaysApi();
$holiday = new \Float\Client\Model\Holiday(); // \Float\Client\Model\Holiday | The holiday to create

try {
    $result = $api_instance->addHoliday($holiday);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicHolidaysApi->addHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday** | [**\Float\Client\Model\Holiday**](../Model/Holiday.md)| The holiday to create | [optional]

### Return type

[**\Float\Client\Model\Holiday**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHoliday**
> deleteHoliday($holidayId)

Delete a holiday

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PublicHolidaysApi();
$holidayId = 56; // int | holiday id to delete

try {
    $api_instance->deleteHoliday($holidayId);
} catch (Exception $e) {
    echo 'Exception when calling PublicHolidaysApi->deleteHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holidayId** | **int**| holiday id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHoliday**
> \Float\Client\Model\Holiday getHoliday($holidayId)

Retrieve a single holiday

Returns a single holiday.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PublicHolidaysApi();
$holidayId = 56; // int | The holiday's ID

try {
    $result = $api_instance->getHoliday($holidayId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicHolidaysApi->getHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holidayId** | **int**| The holiday&#39;s ID |

### Return type

[**\Float\Client\Model\Holiday**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHolidays**
> \Float\Client\Model\Holiday[] getHolidays()

List holidays

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PublicHolidaysApi();

try {
    $result = $api_instance->getHolidays();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicHolidaysApi->getHolidays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Holiday[]**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHoliday**
> \Float\Client\Model\Holiday updateHoliday($holidayId)

Update a holiday's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PublicHolidaysApi();
$holidayId = 56; // int | The holiday's ID

try {
    $result = $api_instance->updateHoliday($holidayId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicHolidaysApi->updateHoliday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holidayId** | **int**| The holiday&#39;s ID |

### Return type

[**\Float\Client\Model\Holiday**](../Model/Holiday.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

