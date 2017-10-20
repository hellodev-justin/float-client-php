# Float\Client\AccountsApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccounts**](AccountsApi.md#getAccounts) | **GET** /accounts | List accounts


# **getAccounts**
> \Float\Client\Model\Account[] getAccounts()

List accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\AccountsApi();

try {
    $result = $api_instance->getAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

