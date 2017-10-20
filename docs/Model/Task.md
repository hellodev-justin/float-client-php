# Task

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taskId** | **int** | The ID of this task. Read-only: not required when creating a task | [optional] 
**projectId** | **int** | The ID of the project that this task belongs to | 
**startDate** | **string** | Start date of this task | 
**endDate** | **string** | End date of this task | 
**startTime** | **string** | Start time of this task in 24 hr format | [optional] 
**hours** | **float** | Number of hours per day to spend on this task | 
**peopleId** | **int** | The ID of the person assigned to this task | 
**priority** | **int** | Is this task a priority? 1 &#x3D; Priority, 0 &#x3D; Not a priority | [optional] 
**name** | **string** | Name of this task | [optional] 
**notes** | **string** | Additional notes about the task | [optional] 
**repeatState** | **string** | Frequency that this task repeats. 0 &#x3D; No repeat, 1 &#x3D; Weekly, 2 &#x3D; Monthly, 3 &#x3D; Every 2 Weeks | [optional] 
**repeatEndDate** | **string** | Date that the repeating task will cease | [optional] 
**createdBy** | **string** | Account ID of person who created this task (read-only) | [optional] 
**created** | **string** | Date this record was created (read-only) | [optional] 
**modifiedBy** | **string** | Account ID of person who last modified this task (read-only) | [optional] 
**modified** | **string** | Date this record was last modified (read-only) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


