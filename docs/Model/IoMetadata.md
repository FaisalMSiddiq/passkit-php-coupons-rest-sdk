# IoMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\PkIo\Model\IoStatus**](IoStatus.md) |  | [optional] 
**lifecycleEvents** | [**\PkIo\Model\IoLifecycleEvents[]**](IoLifecycleEvents.md) | Events that the pass has attained. Not Writable. | [optional] 
**utm** | [**\PkIo\Model\IoUTM**](IoUTM.md) |  | [optional] 
**altId** | **string** |  | [optional] 
**issueIpAddress** | **string** |  | [optional] 
**installIpAddress** | **string** | IP address of the device where the pass was installed on. Not Writeable. | [optional] 
**renderLocation** | [**\PkIo\Model\IoMetaLocation**](IoMetaLocation.md) |  | [optional] 
**renderIpAddress** | **string** | IP address of the device where the pass landing page was rendered on. Not Writeable. | [optional] 
**installUserAgent** | **string** | User agent provided by the Wallet Application. Not Writable. | [optional] 
**renderUserAgent** | **string** | User agent where the landing page was rendered on. Not Writable. | [optional] 
**installDeviceAttributes** | [**\PkIo\Model\IoDeviceAttributes[]**](IoDeviceAttributes.md) | User agent provided by the Wallet Application. Not Writable. | [optional] 
**renderDeviceAttributes** | [**\PkIo\Model\IoDeviceAttributes[]**](IoDeviceAttributes.md) | User agent where the landing page was rendered on. Not Writable. | [optional] 
**issueAt** | [**\DateTime**](\DateTime.md) | Date the pass record was created. Not Writable. | [optional] 
**renderedAt** | [**\DateTime**](\DateTime.md) | Date the pass was first displayed to the user to install. Not Writable. | [optional] 
**firstInstalledAt** | [**\DateTime**](\DateTime.md) | Date the pass was first installed in a mobile wallet. Not Writable. | [optional] 
**lastInstalledAt** | [**\DateTime**](\DateTime.md) | Date the pass was last installed in a mobile wallet. For Apple devices, this will update each time the device registers a new token. Not Writable. | [optional] 
**firstUninstalledAt** | [**\DateTime**](\DateTime.md) | Date the pass was first uninstalled from a mobile wallet.  For Apple devices, this represents either the time notifications were disabled, or when the pass was removed from the wallet as it is not possible to distinguish the two events. Not Writable. | [optional] 
**lastUninstalledAt** | [**\DateTime**](\DateTime.md) | Date the pass was last uninstalled from a mobile wallet. Not Writable. | [optional] 
**invalidatedAt** | [**\DateTime**](\DateTime.md) | Date the pass was invalidated. Not Writable. | [optional] 
**lastUpdatedAt** | [**\DateTime**](\DateTime.md) | Date the pass record was last updated. Can be used for segmenting passes based &#x27;last visit&#x27;, or &#x27;last-purchase&#x27;. Not Writable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

