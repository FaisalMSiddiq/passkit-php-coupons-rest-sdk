# IoEmailTemplate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** | Subject of the email. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc.. | [optional] 
**localizedSubject** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**bodyTextContent** | **string** | Text content of the email (for email clients that don&#x27;t support HTML). The body text is rendered above pass install url text. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc. | [optional] 
**localizedBodyTextContent** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**bodyHtmlContent** | **string** | Content for HTML email rendered above the pass install button. Can contain any of the fields from fields array: ${DISPLAY_NAME}, ${EMAIL_ADDRESS}, etc. | [optional] 
**localizedBodyHtmlContent** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**configuration** | [**\PkIo\Model\IoEmailConfiguration**](IoEmailConfiguration.md) |  | [optional] 
**buttonText** | **string** | Text of the pass install button. | [optional] 
**buttonTextColor** | **string** | Text color of the pass install button. | [optional] 
**buttonBackgroundColor** | **string** | Color of the pass install button. | [optional] 
**buttonBorderRadius** | **string** | Radius of the pass install button. The unit can be px or %. Default is px. | [optional] 
**footerTextContent** | **string** | Footer text content (for email clients that don&#x27;t support HTML). The footer text is rendered below the pass install url text. | [optional] 
**localizedFooterTextContent** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**footerHtmlContent** | **string** | Footer HTML content rendered below the pass install button. | [optional] 
**localizedFooterHtmlContent** | [**\PkIo\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**messageBackgroundColor** | **string** | Background color for the message content section. | [optional] 
**pageBackgroundColor** | **string** | Background color for the margin space surrounding the message content. This setting is relevant for PC viewers. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

