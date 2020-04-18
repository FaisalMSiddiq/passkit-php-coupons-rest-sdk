# PkIo\CouponOfferRESTAPIApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponOffer**](CouponOfferRESTAPIApi.md#createcouponoffer) | **POST** /coupon/singleUse/offer | Create Coupon Offer
[**deleteCouponOffer**](CouponOfferRESTAPIApi.md#deletecouponoffer) | **DELETE** /coupon/singleUse/offer/{id} | Delete Coupon Offer
[**getCouponOffer**](CouponOfferRESTAPIApi.md#getcouponoffer) | **GET** /coupon/singleUse/offer/{id} | Get Coupon Offer
[**listCouponOffers**](CouponOfferRESTAPIApi.md#listcouponoffers) | **GET** /coupon/singleUse/offers | List Coupon Offers
[**updateCouponOffer**](CouponOfferRESTAPIApi.md#updatecouponoffer) | **PUT** /coupon/singleUse/offer | Update Coupon Offer

# **createCouponOffer**
> \PkIo\Model\IoId createCouponOffer($body)

Create Coupon Offer

Creates a new Coupon Offer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponOfferRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCouponOffer(); // \PkIo\Model\SingleUseCouponsCouponOffer | 

try {
    $result = $apiInstance->createCouponOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponOfferRESTAPIApi->createCouponOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCouponOffer**](../Model/SingleUseCouponsCouponOffer.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponOffer**
> object deleteCouponOffer($body, $id)

Delete Coupon Offer

Deletes an existing Coupon Offer by id. Deleting a Coupon Offer results in all coupons being invalidated in the customers Mobile Wallet; rendering them unusable. Needs to be used with care, this is irreversible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponOfferRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\IoId(); // \PkIo\Model\IoId | 
$id = "id_example"; // string | The unique identifier to an object or record.

try {
    $result = $apiInstance->deleteCouponOffer($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponOfferRESTAPIApi->deleteCouponOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\IoId**](../Model/IoId.md)|  |
 **id** | **string**| The unique identifier to an object or record. |

### Return type

**object**

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponOffer**
> \PkIo\Model\SingleUseCouponsCouponOffer getCouponOffer($id)

Get Coupon Offer

Gets an existing Coupon Offer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponOfferRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The unique identifier to an object or record.

try {
    $result = $apiInstance->getCouponOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponOfferRESTAPIApi->getCouponOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier to an object or record. |

### Return type

[**\PkIo\Model\SingleUseCouponsCouponOffer**](../Model/SingleUseCouponsCouponOffer.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCouponOffers**
> object listCouponOffers($campaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc)

List Coupon Offers

Lists all Coupon Offers for a campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponOfferRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | 
$paginationLimit = 56; // int | Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records.
$paginationOffset = 56; // int | Allows you to offset the first record returned by the limit.
$paginationFilterField = array("paginationFilterField_example"); // string[] | Array of column names to filter results by.
$paginationFilterValue = array("paginationFilterValue_example"); // string[] | Array of values to test against the filter fields.
$paginationFilterOperator = array("paginationFilterOperator_example"); // string[] | will be whitelisted operators in io core.
$paginationOrderBy = "paginationOrderBy_example"; // string | Field to order results by.
$paginationOrderAsc = true; // bool | Will return in ascending order if true, or descending order if false.

try {
    $result = $apiInstance->listCouponOffers($campaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponOfferRESTAPIApi->listCouponOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**|  | [optional]
 **paginationLimit** | **int**| Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records. | [optional]
 **paginationOffset** | **int**| Allows you to offset the first record returned by the limit. | [optional]
 **paginationFilterField** | [**string[]**](../Model/string.md)| Array of column names to filter results by. | [optional]
 **paginationFilterValue** | [**string[]**](../Model/string.md)| Array of values to test against the filter fields. | [optional]
 **paginationFilterOperator** | [**string[]**](../Model/string.md)| will be whitelisted operators in io core. | [optional]
 **paginationOrderBy** | **string**| Field to order results by. | [optional]
 **paginationOrderAsc** | **bool**| Will return in ascending order if true, or descending order if false. | [optional]

### Return type

**object**

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCouponOffer**
> \PkIo\Model\SingleUseCouponsCouponOffer updateCouponOffer($body)

Update Coupon Offer

Updates an existing Coupon Offer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponOfferRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCouponOffer(); // \PkIo\Model\SingleUseCouponsCouponOffer | 

try {
    $result = $apiInstance->updateCouponOffer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponOfferRESTAPIApi->updateCouponOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCouponOffer**](../Model/SingleUseCouponsCouponOffer.md)|  |

### Return type

[**\PkIo\Model\SingleUseCouponsCouponOffer**](../Model/SingleUseCouponsCouponOffer.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

