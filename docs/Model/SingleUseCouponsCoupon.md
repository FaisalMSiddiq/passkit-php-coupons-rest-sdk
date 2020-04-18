# SingleUseCouponsCoupon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PassKit generated coupon id (22 characters). | [optional] 
**externalId** | **string** | This can be used to set the &#x27;external&#x27; ID of the coupon (i.e. the unique coupon code as it&#x27;s being used in your system). If provided then this can be used to query &amp; update coupon. This field will be treated as unique within the campaign, and cannot be updated at a later stage. | [optional] 
**offerId** | **string** | The coupon offer id that the coupon belongs to. | 
**campaignId** | **string** | The coupon campaign id the the coupon belongs to. | 
**pii** | [**\PkIo\Model\IoPerson**](IoPerson.md) |  | [optional] 
**metaData** | **map[string,string]** | Any other meta fields for the coupon that are not covered in the protocol (i.e. you might want to captures sign-up location, or favourite perfume, for segmenting later on). | [optional] 
**sku** | **string** | Optional SKU. Can be used in the barcode by setting ${coupon.sku} in the template barcode settings. | [optional] 
**optOut** | **bool** | Indicates if the user of the coupon opted out to receive marketing promotions (defaults to false). | [optional] 
**status** | [**\PkIo\Model\SingleUseCouponsCouponStatus**](SingleUseCouponsCouponStatus.md) |  | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Optional field to set when the coupon expires. When the expiry date hits, it will automatically gray out the barcode. Only applicable if the template for the offer is set to EXPIRE_ON_VARIABLE_DATE_TIME. | [optional] 
**redemptionDetails** | [**\PkIo\Model\SingleUseCouponsRedemptionDetails**](SingleUseCouponsRedemptionDetails.md) |  | [optional] 
**passOverrides** | [**\PkIo\Model\IoPassOverrides**](IoPassOverrides.md) |  | [optional] 
**passMetaData** | [**\PkIo\Model\IoMetadata**](IoMetadata.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date the coupon was created. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | The date the coupon was last updated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

