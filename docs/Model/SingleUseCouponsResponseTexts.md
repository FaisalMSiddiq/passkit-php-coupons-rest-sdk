# SingleUseCouponsResponseTexts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeemConfirmationDialogBoxText** | **string** | To be shown before redemption page is rendered. The dialogue box will have \&quot;Ok\&quot; and \&quot;Cancel\&quot; bottons. If visitor clicks \&quot;Ok\&quot;, coupon will be redeemed and the redemption page will render fixed code. This only applies to the redemption type REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED. | [optional] 
**localizedRedeemConfirmationDialogBoxText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**cancelRedeemText** | **string** | To be shown when visitor clicks \&quot;Cancel\&quot; and reject to redeem now. This only applies to the redemption type REDEMPTION_TYPE_CUSTOMER_INITIATED_CODE_FIXED. | [optional] 
**localizedCancelRedeemText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**afterRedeemText** | **string** | To be shown when coupon has been redeemed. | [optional] 
**localizedAfterRedeemText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**couponAlreadyRedeemedText** | **string** | To be shown when the coupon was already redeemed. | [optional] 
**localizedCouponAlreadyRedeemedText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**offerExpiredText** | **string** | To be shown when the offer period has ended. | [optional] 
**localizedOfferExpiredText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**couponExpiredText** | **string** | To be shown when the coupon expiry date / redemption end date has passed. | [optional] 
**localizedCouponExpiredText** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

