# Person

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**peopleId** | **int** | The unique identifier for this person. Read-only: not required when creating a person | 
**name** | **string** | The person&#39;s full name | 
**email** | **string** | Email address for this person | [optional] 
**jobTitle** | **string** | The person&#39;s job title | [optional] 
**department** | [**\Float\Client\Model\Department**](Department.md) |  | [optional] 
**notes** | **string** | Any notes related to this person | [optional] 
**avatarFile** | **string** | Filename of thumbnail image for this person (read-only) | [optional] 
**autoEmail** | **int** | Should this person&#39;s schedule be emailed at start of week? 1 &#x3D; Yes, 0 &#x3D; No | [optional] 
**employeeType** | **int** | Full-time or part-type. 1 &#x3D; Full-time, 0  &#x3D; Part-time | [optional] 
**nonWorkDays** | **int[]** | Days when a part-time person cannot be scheduled. Array of integers where 0 &#x3D; Sunday, 1 &#x3D; Monday, etc. E.g., \&quot;[0,4,6]\&quot; would be Sunday, Thursday and Saturday and this person could be scheduled on Monday, Tuesday, Wednesday or Friday. Valid values | [optional] 
**workDayHours** | **float** | Number of hours that a part-time person is available for scheduling per day | [optional] 
**active** | **int** | Is this person active or archived? 1 &#x3D; Active, 0 &#x3D; Archived | [optional] 
**contractor** | **bool** | Is this person a contractor? 1 &#x3D; Yes, 0 &#x3D; No | [optional] 
**tags** | [**\Float\Client\Model\PeopleTag[]**](PeopleTag.md) |  | [optional] 
**startDate** | **string** | Date the person started | [optional] 
**endDate** | **string** | Date the person finished | [optional] 
**created** | **string** | Date this record was created (read-only) | [optional] 
**modified** | **string** | Date this record was last modified (read-only) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


