# Timeoff

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeoffId** | **int** | The ID of this time off. Read-only: not required when creating a time off | [optional] 
**timeoffTypeId** | **int** | The ID of this time off type | 
**startDate** | **string** | Start date of this time off | 
**endDate** | **string** | End date of this time off | 
**hours** | **float** | Number of hours per day for this time off. Not required when a full day | 
**timeoffNotes** | **string** | Additional notes about the time off | [optional] 
**modifiedBy** | **string** | Account ID of person who last modified this time off (read-only) | [optional] 
**createdBy** | **string** | Account ID of person who created this time off (read-only) | [optional] 
**created** | **string** | Date this record was created (read-only) | [optional] 
**modified** | **string** | Date this record was modified (read-only) | [optional] 
**repeatState** | **string** | Frequency that this time off repeats. 0 &#x3D; No repeat, 1 &#x3D; Weekly, 2 &#x3D; Monthly, 3 &#x3D; Every 2 Weeks | [optional] 
**repeatEnd** | **string** | Date that the repeating time off will cease | [optional] 
**fullDay** | **int** | Is this time off for a full day? 1 &#x3D; Yes, 0 &#x3D; No | [optional] 
**peopleIds** | [**null[]**](.md) | List of people IDs assigned to this time off | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


