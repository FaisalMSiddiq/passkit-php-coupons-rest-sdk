# IoImageData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**icon** | **string** | Mandatory icon, used in Apple Wallet lock screen (87px x 87px). | [optional] 
**logo** | **string** | Logo is circle-cropped by Google Pay, a 15% safety margin is recommended (660px x 660px). | [optional] 
**appleLogo** | **string** | Apple logo can be used where a rectangular design is preferred for Apple Passes only.  If ommitted, the square logo image will be used.  (&lt;&#x3D;480px x 150px). | [optional] 
**hero** | **string** | Hero is the Google Pay strip and is also used in the dialog box when installing (1032px x 336px). | [optional] 
**eventStrip** | **string** | Apple Wallet strip image for EventTicket pass types (1125px x 294px). | [optional] 
**strip** | **string** | Apple Wallet strip image for other pass types with a  strip image (1125px x 369px). | [optional] 
**thumbnail** | **string** | Used on Membership passes and Apple event tickets with a background image (&gt;&#x3D;270px x &gt;&#x3D;270px in a ratio range of 2:3-3:2). | [optional] 
**background** | **string** | Used only be Apple Event Ticket designs, this image is blurred to form a background and so can be a low quality image.  Note it may also be slightly cropped on some devices (180px x 220px). | [optional] 
**footer** | **string** |  | [optional] 
**security** | **string** | Google Pay - used to denote a security program on boarding pass types (E.g. TSA PreCheck®).  Width of 1600px is shared with the boarding privilege logo (&lt;&#x3D;1600px x 80px). | [optional] 
**privilege** | **string** | Google Pay - used to denote a boarding privilege.  Width of 1600px is shared with the security program logo (&lt;&#x3D;1600px x 80px). | [optional] 
**airlineAlliance** | **string** | Google Pay - used to denote airline alliance on boarding pass types (&lt;&#x3D;1600px x 80px). | [optional] 
**personalization** | **string** | For Apple Pay NFC passes whitelisted for personalization. Image is displayed after terms are presented (&lt;&#x3D;450px x 120px). | [optional] 
**banner** | **string** | Used on a landing page or email.  Image has no size constraints and will be treated as @2x pixel density. | [optional] 
**message** | **string** | Used for Google Pay in wallet promotional messages - for Apple Pay, the message will be rendered on a mobile website (1860px x &lt;&#x3D;930px). | [optional] 
**profile** | **string** | Used for user Profile images (300px x 300px). Cannot be localized. | [optional] 
**appImage** | **string** | Used for user app images in Google Pay Passes (300px x 300px). Cannot be localized. | [optional] 
**localizedIcon** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedLogo** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedAppleLogo** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedHero** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedEventStrip** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedStrip** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedThumbnail** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedBackground** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedFooter** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedSecurity** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedPrivilege** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedAirlineAlliance** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedPersonalization** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedBanner** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localizedMessage** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

