# SingleUseCouponsRedemptionDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redemptionDate** | [**\DateTime**](\DateTime.md) | The date the coupon was redeemed (set by the system when the redeem endpoint is called). | [optional] 
**redemptionCode** | **string** | Optional field that contains the redemption code provided on redeem (either the fixed one if set, or user provided). | [optional] 
**lat** | **double** | Option redemption GPS lat, lon &amp;  alt. | [optional] 
**lon** | **double** | Longitude. | [optional] 
**alt** | **int** | Altitude in metres. | [optional] 
**redemptionSource** | **string** | Optional redemption user agent, can be used in case where a Merchant uses the PassKit scanning solution combined with their own POS redemption and wants to differentiate the source of redemption. | [optional] 
**redemptionReference** | **string** | Optional redemption reference, can be used for staff name, username, POS ID, location ID, etc. | [optional] 
**transactionReference** | **string** | Optional transaction reference, can be used to consolidate baskets at a later stage via a manual process. | [optional] 
**transactionAmount** | **double** | Optional total transaction amount. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

