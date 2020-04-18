# PkIo\CouponRESTAPIApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countCouponsByCouponCampaign**](CouponRESTAPIApi.md#countcouponsbycouponcampaign) | **GET** /coupon/singleUse/coupons/count/{couponCampaignId} | List Coupons
[**createCoupon**](CouponRESTAPIApi.md#createcoupon) | **POST** /coupon/singleUse/coupon | Create Coupon
[**createCouponPublic**](CouponRESTAPIApi.md#createcouponpublic) | **POST** /coupon/singleUse/coupon/public | Create Coupon (public)
[**getCouponByExternalId**](CouponRESTAPIApi.md#getcouponbyexternalid) | **GET** /coupon/singleUse/coupon/externalId/{couponCampaignId}/{externalId} | Get Coupon by External ID
[**getCouponById**](CouponRESTAPIApi.md#getcouponbyid) | **GET** /coupon/singleUse/coupon/{id} | Get Coupon by ID
[**listCouponsByCouponCampaign**](CouponRESTAPIApi.md#listcouponsbycouponcampaign) | **GET** /coupon/singleUse/coupons/{couponCampaignId} | List Coupons
[**redeemCoupon**](CouponRESTAPIApi.md#redeemcoupon) | **PUT** /coupon/singleUse/coupon/redeem | Redeem Coupon
[**updateCoupon**](CouponRESTAPIApi.md#updatecoupon) | **PUT** /coupon/singleUse/coupon | Update Coupon
[**voidCoupon**](CouponRESTAPIApi.md#voidcoupon) | **DELETE** /coupon/singleUse/coupon | Void Coupon

# **countCouponsByCouponCampaign**
> \PkIo\Model\IoCount countCouponsByCouponCampaign($couponCampaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc)

List Coupons

Count all coupons for a Coupon Campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponCampaignId = "couponCampaignId_example"; // string | Coupon Campaign ID
$paginationLimit = 56; // int | Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records.
$paginationOffset = 56; // int | Allows you to offset the first record returned by the limit.
$paginationFilterField = array("paginationFilterField_example"); // string[] | Array of column names to filter results by.
$paginationFilterValue = array("paginationFilterValue_example"); // string[] | Array of values to test against the filter fields.
$paginationFilterOperator = array("paginationFilterOperator_example"); // string[] | will be whitelisted operators in io core.
$paginationOrderBy = "paginationOrderBy_example"; // string | Field to order results by.
$paginationOrderAsc = true; // bool | Will return in ascending order if true, or descending order if false.

try {
    $result = $apiInstance->countCouponsByCouponCampaign($couponCampaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->countCouponsByCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponCampaignId** | **string**| Coupon Campaign ID |
 **paginationLimit** | **int**| Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records. | [optional]
 **paginationOffset** | **int**| Allows you to offset the first record returned by the limit. | [optional]
 **paginationFilterField** | [**string[]**](../Model/string.md)| Array of column names to filter results by. | [optional]
 **paginationFilterValue** | [**string[]**](../Model/string.md)| Array of values to test against the filter fields. | [optional]
 **paginationFilterOperator** | [**string[]**](../Model/string.md)| will be whitelisted operators in io core. | [optional]
 **paginationOrderBy** | **string**| Field to order results by. | [optional]
 **paginationOrderAsc** | **bool**| Will return in ascending order if true, or descending order if false. | [optional]

### Return type

[**\PkIo\Model\IoCount**](../Model/IoCount.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCoupon**
> \PkIo\Model\IoId createCoupon($body)

Create Coupon

Creates a new unique Coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCoupon(); // \PkIo\Model\SingleUseCouponsCoupon | 

try {
    $result = $apiInstance->createCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponPublic**
> \PkIo\Model\IoId createCouponPublic($body)

Create Coupon (public)

Creates a new unique Coupon (public endpoint, only available for public Coupon Campaigns)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCoupon(); // \PkIo\Model\SingleUseCouponsCoupon | 

try {
    $result = $apiInstance->createCouponPublic($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->createCouponPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponByExternalId**
> \PkIo\Model\SingleUseCouponsCoupon getCouponByExternalId($couponCampaignId, $externalId)

Get Coupon by External ID

Gets a Coupon record by External ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponCampaignId = "couponCampaignId_example"; // string | Coupon Campaign ID
$externalId = "externalId_example"; // string | External ID

try {
    $result = $apiInstance->getCouponByExternalId($couponCampaignId, $externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->getCouponByExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponCampaignId** | **string**| Coupon Campaign ID |
 **externalId** | **string**| External ID |

### Return type

[**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponById**
> \PkIo\Model\SingleUseCouponsCoupon getCouponById($id)

Get Coupon by ID

Gets a Coupon record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The unique identifier to an object or record.

try {
    $result = $apiInstance->getCouponById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->getCouponById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier to an object or record. |

### Return type

[**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCouponsByCouponCampaign**
> object listCouponsByCouponCampaign($couponCampaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc)

List Coupons

List all coupons for a Coupon Campaign. Supports pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$couponCampaignId = "couponCampaignId_example"; // string | Coupon Campaign ID
$paginationLimit = 56; // int | Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records.
$paginationOffset = 56; // int | Allows you to offset the first record returned by the limit.
$paginationFilterField = array("paginationFilterField_example"); // string[] | Array of column names to filter results by.
$paginationFilterValue = array("paginationFilterValue_example"); // string[] | Array of values to test against the filter fields.
$paginationFilterOperator = array("paginationFilterOperator_example"); // string[] | will be whitelisted operators in io core.
$paginationOrderBy = "paginationOrderBy_example"; // string | Field to order results by.
$paginationOrderAsc = true; // bool | Will return in ascending order if true, or descending order if false.

try {
    $result = $apiInstance->listCouponsByCouponCampaign($couponCampaignId, $paginationLimit, $paginationOffset, $paginationFilterField, $paginationFilterValue, $paginationFilterOperator, $paginationOrderBy, $paginationOrderAsc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->listCouponsByCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponCampaignId** | **string**| Coupon Campaign ID |
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

# **redeemCoupon**
> \PkIo\Model\IoId redeemCoupon($body)

Redeem Coupon

Redeems an existing Coupon. Use this endpoint when you want to capture redemption data and trigger the switch to the redemption design of the coupon. The coupon cannot be used again after calling this endpoint, and is marked as redeemed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCoupon(); // \PkIo\Model\SingleUseCouponsCoupon | 

try {
    $result = $apiInstance->redeemCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->redeemCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupon**
> \PkIo\Model\IoId updateCoupon($body)

Update Coupon

Updates an existing Coupon

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCoupon(); // \PkIo\Model\SingleUseCouponsCoupon | 

try {
    $result = $apiInstance->updateCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidCoupon**
> object voidCoupon($body)

Void Coupon

Voids (deletes) an existing Coupon by ID or External ID. Invalidates the coupon in the customers Mobile Wallet; rendering it useless. This method is irreversible and should be used with care.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCoupon(); // \PkIo\Model\SingleUseCouponsCoupon | 

try {
    $result = $apiInstance->voidCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->voidCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCoupon**](../Model/SingleUseCouponsCoupon.md)|  |

### Return type

**object**

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

