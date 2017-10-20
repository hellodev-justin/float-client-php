# Float\Client\ClientsApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addClient**](ClientsApi.md#addClient) | **POST** /clients | Add a new client
[**deleteClient**](ClientsApi.md#deleteClient) | **DELETE** /clients/{client_id} | Delete a client
[**getClient**](ClientsApi.md#getClient) | **GET** /clients/{client_id} | Retrieve a single client
[**getClients**](ClientsApi.md#getClients) | **GET** /clients | List clients
[**updateClient**](ClientsApi.md#updateClient) | **PATCH** /clients/{client_id} | Update a client&#39;s name


# **addClient**
> \Float\Client\Model\Client addClient($data)

Add a new client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ClientsApi();
$data = new \Float\Client\Model\Client(); // \Float\Client\Model\Client | The client to create

try {
    $result = $api_instance->addClient($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->addClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Float\Client\Model\Client**](../Model/Client.md)| The client to create | [optional]

### Return type

[**\Float\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClient**
> deleteClient($clientId)

Delete a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ClientsApi();
$clientId = 56; // int | client id to delete

try {
    $api_instance->deleteClient($clientId);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| client id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClient**
> \Float\Client\Model\Client getClient($clientId)

Retrieve a single client

Returns a single client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ClientsApi();
$clientId = 56; // int | The client's ID

try {
    $result = $api_instance->getClient($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| The client&#39;s ID |

### Return type

[**\Float\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClients**
> \Float\Client\Model\Client[] getClients()

List clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ClientsApi();

try {
    $result = $api_instance->getClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Client[]**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClient**
> \Float\Client\Model\Client updateClient($clientId)

Update a client's name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\ClientsApi();
$clientId = 56; // int | The client's ID

try {
    $result = $api_instance->updateClient($clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **int**| The client&#39;s ID |

### Return type

[**\Float\Client\Model\Client**](../Model/Client.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

