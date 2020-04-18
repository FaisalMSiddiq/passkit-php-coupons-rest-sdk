# PkIo\CouponAPISingleUseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyCouponCampaign**](CouponAPISingleUseApi.md#copycouponcampaign) | **POST** /coupon/singleUse/campaign/copy | Copy Campaign

# **copyCouponCampaign**
> \PkIo\Model\IoId copyCouponCampaign($body)

Copy Campaign

Copies an existing campaign record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponAPISingleUseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCampaignCopyRequest(); // \PkIo\Model\SingleUseCouponsCampaignCopyRequest | 

try {
    $result = $apiInstance->copyCouponCampaign($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponAPISingleUseApi->copyCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCampaignCopyRequest**](../Model/SingleUseCouponsCampaignCopyRequest.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

