# IoPagination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records. | [optional] 
**offset** | **int** | Allows you to offset the first record returned by the limit. | [optional] 
**filterField** | **string[]** | Array of column names to filter results by. | [optional] 
**filterValue** | **string[]** | Array of values to test against the filter fields. | [optional] 
**filterOperator** | **string[]** |  | [optional] 
**orderBy** | **string** | Field to order results by. | [optional] 
**orderAsc** | **bool** | Will return in ascending order if true, or descending order if false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

