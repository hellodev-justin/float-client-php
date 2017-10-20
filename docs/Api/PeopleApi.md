# Float\Client\PeopleApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPerson**](PeopleApi.md#addPerson) | **POST** /people | Add a new person
[**deletePerson**](PeopleApi.md#deletePerson) | **DELETE** /people/{people_id} | Delete a person
[**getPeople**](PeopleApi.md#getPeople) | **GET** /people | List people
[**getPerson**](PeopleApi.md#getPerson) | **GET** /people/{people_id} | Retrieve a single person
[**updatePerson**](PeopleApi.md#updatePerson) | **PATCH** /people/{people_id} | Update a person&#39;s details


# **addPerson**
> \Float\Client\Model\Person addPerson($body)

Add a new person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PeopleApi();
$body = new \Float\Client\Model\Person(); // \Float\Client\Model\Person | The client to create

try {
    $result = $api_instance->addPerson($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->addPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Float\Client\Model\Person**](../Model/Person.md)| The client to create | [optional]

### Return type

[**\Float\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePerson**
> deletePerson($peopleId)

Delete a person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PeopleApi();
$peopleId = 56; // int | people id to delete

try {
    $api_instance->deletePerson($peopleId);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->deletePerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peopleId** | **int**| people id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPeople**
> \Float\Client\Model\Person[] getPeople($page, $perPage)

List people

Search for all people in your organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PeopleApi();
$page = 56; // int | The page number of the page of results to return
$perPage = 56; // int | The number of items per page

try {
    $result = $api_instance->getPeople($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->getPeople: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number of the page of results to return | [optional]
 **perPage** | **int**| The number of items per page | [optional]

### Return type

[**\Float\Client\Model\Person[]**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerson**
> \Float\Client\Model\Person getPerson($peopleId)

Retrieve a single person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PeopleApi();
$peopleId = 56; // int | The person's id

try {
    $result = $api_instance->getPerson($peopleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peopleId** | **int**| The person&#39;s id |

### Return type

[**\Float\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePerson**
> \Float\Client\Model\Person updatePerson($peopleId)

Update a person's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\PeopleApi();
$peopleId = 56; // int | The person's id

try {
    $result = $api_instance->updatePerson($peopleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peopleId** | **int**| The person&#39;s id |

### Return type

[**\Float\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

