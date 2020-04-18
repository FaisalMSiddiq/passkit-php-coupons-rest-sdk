# IoPassOverrides

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imageIds** | [**\PkIo\Model\IoImageIds**](IoImageIds.md) |  | [optional] 
**locations** | [**\PkIo\Model\IoGPSLocation[]**](IoGPSLocation.md) | A list of up to 10 GPS locations where this pass should be presented on the lock-screen. Overrides any template level values. | [optional] 
**beacons** | [**\PkIo\Model\IoBeacon[]**](IoBeacon.md) | A list of up to 10 Beacon UUIDs that should trigger the pass to be presented on the lock-screen. Overrides any template level values. | [optional] 
**links** | [**\PkIo\Model\IoLink[]**](IoLink.md) | A list of (personalized) links to be shown on the pass. Overrides any template level values. | [optional] 
**colors** | [**\PkIo\Model\IoColors**](IoColors.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

