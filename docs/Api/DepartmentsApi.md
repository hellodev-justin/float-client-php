# Float\Client\DepartmentsApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDepartment**](DepartmentsApi.md#addDepartment) | **POST** /departments | Add a new department
[**deleteDepartment**](DepartmentsApi.md#deleteDepartment) | **DELETE** /departments/{department_id} | Delete a department
[**getDepartment**](DepartmentsApi.md#getDepartment) | **GET** /departments/{department_id} | Retrieve a single department
[**getDepartments**](DepartmentsApi.md#getDepartments) | **GET** /departments | List departments
[**updateDepartment**](DepartmentsApi.md#updateDepartment) | **PATCH** /departments/{department_id} | Update a department&#39;s details


# **addDepartment**
> \Float\Client\Model\Department addDepartment($department)

Add a new department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\DepartmentsApi();
$department = new \Float\Client\Model\Department(); // \Float\Client\Model\Department | The department to create.

try {
    $result = $api_instance->addDepartment($department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->addDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | [**\Float\Client\Model\Department**](../Model/Department.md)| The department to create. | [optional]

### Return type

[**\Float\Client\Model\Department**](../Model/Department.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDepartment**
> deleteDepartment($departmentId)

Delete a department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\DepartmentsApi();
$departmentId = 56; // int | department id to delete

try {
    $api_instance->deleteDepartment($departmentId);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->deleteDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **departmentId** | **int**| department id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDepartment**
> \Float\Client\Model\Department getDepartment($departmentId)

Retrieve a single department

Returns a single department.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\DepartmentsApi();
$departmentId = 56; // int | The department's id

try {
    $result = $api_instance->getDepartment($departmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **departmentId** | **int**| The department&#39;s id |

### Return type

[**\Float\Client\Model\Department**](../Model/Department.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDepartments**
> \Float\Client\Model\Department[] getDepartments()

List departments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\DepartmentsApi();

try {
    $result = $api_instance->getDepartments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Department[]**](../Model/Department.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDepartment**
> \Float\Client\Model\Department updateDepartment($departmentId)

Update a department's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\DepartmentsApi();
$departmentId = 56; // int | The department's id

try {
    $result = $api_instance->updateDepartment($departmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->updateDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **departmentId** | **int**| The department&#39;s id |

### Return type

[**\Float\Client\Model\Department**](../Model/Department.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

