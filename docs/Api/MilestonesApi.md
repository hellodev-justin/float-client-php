# Float\Client\MilestonesApi

All URIs are relative to *https://api.float.com/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMilestone**](MilestonesApi.md#addMilestone) | **POST** /milestones | Add a new project milestone
[**deleteMilestone**](MilestonesApi.md#deleteMilestone) | **DELETE** /milestones/{milestone_id} | Delete a milestone
[**getMilestone**](MilestonesApi.md#getMilestone) | **GET** /milestones/{milestone_id} | Retrieve a single milestone
[**getMilestones**](MilestonesApi.md#getMilestones) | **GET** /milestones | List project milestones
[**updateMilestone**](MilestonesApi.md#updateMilestone) | **PATCH** /milestones/{milestone_id} | Update a milestone&#39;s details


# **addMilestone**
> \Float\Client\Model\Milestone addMilestone($milestone)

Add a new project milestone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\MilestonesApi();
$milestone = new \Float\Client\Model\Milestone(); // \Float\Client\Model\Milestone | The milestone to create

try {
    $result = $api_instance->addMilestone($milestone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->addMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestone** | [**\Float\Client\Model\Milestone**](../Model/Milestone.md)| The milestone to create | [optional]

### Return type

[**\Float\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMilestone**
> deleteMilestone($milestoneId)

Delete a milestone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\MilestonesApi();
$milestoneId = 56; // int | milestone id to delete

try {
    $api_instance->deleteMilestone($milestoneId);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->deleteMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestoneId** | **int**| milestone id to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMilestone**
> \Float\Client\Model\Milestone getMilestone($milestoneId)

Retrieve a single milestone

Returns a single milestone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\MilestonesApi();
$milestoneId = 56; // int | The milestone's ID

try {
    $result = $api_instance->getMilestone($milestoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestoneId** | **int**| The milestone&#39;s ID |

### Return type

[**\Float\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMilestones**
> \Float\Client\Model\Milestone[] getMilestones()

List project milestones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\MilestonesApi();

try {
    $result = $api_instance->getMilestones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->getMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Float\Client\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMilestone**
> \Float\Client\Model\Milestone updateMilestone($milestoneId)

Update a milestone's details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Float\Client\Api\MilestonesApi();
$milestoneId = 56; // int | The milestone's ID

try {
    $result = $api_instance->updateMilestone($milestoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestonesApi->updateMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestoneId** | **int**| The milestone&#39;s ID |

### Return type

[**\Float\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

