# SingleUseCouponsCouponCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PassKit generated program id (22 characters). | [optional] 
**name** | **string** | Name of the coupon campaign; used in the portal / API. Not shown to the end-customer. | 
**localizedName** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**status** | [**\PkIo\Model\IoProjectStatus[]**](IoProjectStatus.md) | The program status (bitmask of ProjectStatus). Defaults to io.ProjectStatus.PROJECT_ACTIVE_FOR_OBJECT_CREATION + io.ProjectStatus.PROJECT_DRAFT. | 
**passTypeIdentifier** | **string** | Leave empty for draft campaigns. Needs to be set for campaigns where status contains PROJECT_PUBLISHED. | [optional] 
**ianaTimezone** | **string** | The campaign timezone. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date the campaign was created. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | The date the campaign updated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

