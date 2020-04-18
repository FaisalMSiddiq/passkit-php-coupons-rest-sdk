# SingleUseCouponsRedemptionSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redemptionStartDate** | [**\DateTime**](\DateTime.md) | Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date. | [optional] 
**redemptionEndDate** | [**\DateTime**](\DateTime.md) | Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date. | [optional] 
**redemptionType** | [**\PkIo\Model\SingleUseCouponsRedemptionType[]**](SingleUseCouponsRedemptionType.md) | Dictates redemption type; defaults to API. | [optional] 
**customerInitiatedfixedCode** | **string** | For fixed code customer initiated redemption; the fixed code to display needs to be set. | [optional] 
**codeProvidedOnRedeemSettings** | [**\PkIo\Model\SingleUseCouponsCustomerInitiatedCodeProvideOnRedeem**](SingleUseCouponsCustomerInitiatedCodeProvideOnRedeem.md) |  | [optional] 
**standardSettings** | [**\PkIo\Model\SingleUseCouponsStandardPassKitHostedPage**](SingleUseCouponsStandardPassKitHostedPage.md) |  | [optional] 
**selfHostedSettings** | [**\PkIo\Model\SingleUseCouponsSelfHostedPage**](SingleUseCouponsSelfHostedPage.md) |  | [optional] 
**redemptionTimer** | [**\PkIo\Model\SingleUseCouponsRedemptionTimerSettings**](SingleUseCouponsRedemptionTimerSettings.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

