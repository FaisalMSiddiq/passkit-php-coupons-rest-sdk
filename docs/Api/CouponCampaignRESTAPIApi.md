# PkIo\CouponCampaignRESTAPIApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCouponCampaign**](CouponCampaignRESTAPIApi.md#createcouponcampaign) | **POST** /coupon/singleUse/campaign | Create Coupon Campaign
[**deleteCouponCampaign**](CouponCampaignRESTAPIApi.md#deletecouponcampaign) | **DELETE** /coupon/singleUse/campaign/{id} | Delete Coupon Campaign
[**getAnalytics**](CouponCampaignRESTAPIApi.md#getanalytics) | **GET** /coupon/singleUse/campaign/{classId}/analytics | Get Coupon Campaign Analytics
[**getCouponCampaign**](CouponCampaignRESTAPIApi.md#getcouponcampaign) | **GET** /coupon/singleUse/campaign/{id} | Get Coupon Campaign
[**listCouponCampaigns**](CouponCampaignRESTAPIApi.md#listcouponcampaigns) | **GET** /coupon/singleUse/campaigns | List Coupon Campaigns
[**updateCouponCampaign**](CouponCampaignRESTAPIApi.md#updatecouponcampaign) | **PUT** /coupon/singleUse/campaign | Update Coupon Campaign

# **createCouponCampaign**
> \PkIo\Model\IoId createCouponCampaign($body)

Create Coupon Campaign

Creates a new Single Use Coupon Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCouponCampaign(); // \PkIo\Model\SingleUseCouponsCouponCampaign | 

try {
    $result = $apiInstance->createCouponCampaign($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->createCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCouponCampaign**](../Model/SingleUseCouponsCouponCampaign.md)|  |

### Return type

[**\PkIo\Model\IoId**](../Model/IoId.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCouponCampaign**
> object deleteCouponCampaign($body, $id)

Delete Coupon Campaign

Deletes an existing Coupon Campaign by id. Deleting a Coupon Campaign results in the related offer being deleted, and all coupons being invalidated in the customers Mobile Wallet; rendering them unusable. This method needs to be used with care, this is irreversible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\IoId(); // \PkIo\Model\IoId | 
$id = "id_example"; // string | The unique identifier to an object or record.

try {
    $result = $apiInstance->deleteCouponCampaign($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->deleteCouponCampaign: ', $e->getMessage(), PHP_EOL;
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

# **getAnalytics**
> \PkIo\Model\SingleUseCouponsCouponCampaignAnalyticsResponse getAnalytics($classId, $protocol, $period, $startDate, $endDate, $timezone)

Get Coupon Campaign Analytics

Retrieves protocol specific analytics data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$classId = "classId_example"; // string | An identifier of the class in the protocol.
$protocol = "protocol_example"; // string | A type of protocol.   - RAW_PROTOCOL: Reserved for v2 v3 legacy pass protocol.  - V1_PROTOCOL: Reserved for migrating legacy v1 passes.  - FLIGHT_PROTOCOL: Flights - mapped to Google's boarding passes class.  - LOYALTY_PROTOCOL: Loyalty - mapped to Google's loyalty class.  - EVENT_TICKET_PROTOCOL: Event Tickets; - mapped to Google's event ticket class.  - COUPON_PROTOCOL: Coupons - mapped to Google's offer class.  - STORED_VALUE_PROTOCOL: Stored Value - mapped to Google's gift class.  - TRANSIT_VALUE_PROTOCOL: Stored Value - mapped to Google's transit class.  - MEMBERSHIP: Values 100 onwards are for PassKit generic protocols. Generic Membership protocol  - SINGLE_USE_COUPON: Single Use Coupon protocol  - PROP_0001: Values 1000 onwards are for proprietary protocols Proprietary protocol.  - PROP_0002: Proprietary protocol.
$period = "period_example"; // string | A period unit of individual data (day, month or year).   - DAY: Show individual data by day.  - MONTH: Default response will be in months.  - YEAR: Show individual data by year.
$startDate = "startDate_example"; // string | Start date sets the oldest date of the data to be shown.
$endDate = "endDate_example"; // string | End date sets the latest date of the data to be shown.
$timezone = "timezone_example"; // string | Timezone in IANA format; defaults to UTC if not providedd.

try {
    $result = $apiInstance->getAnalytics($classId, $protocol, $period, $startDate, $endDate, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->getAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **classId** | **string**| An identifier of the class in the protocol. |
 **protocol** | **string**| A type of protocol.   - RAW_PROTOCOL: Reserved for v2 v3 legacy pass protocol.  - V1_PROTOCOL: Reserved for migrating legacy v1 passes.  - FLIGHT_PROTOCOL: Flights - mapped to Google&#x27;s boarding passes class.  - LOYALTY_PROTOCOL: Loyalty - mapped to Google&#x27;s loyalty class.  - EVENT_TICKET_PROTOCOL: Event Tickets; - mapped to Google&#x27;s event ticket class.  - COUPON_PROTOCOL: Coupons - mapped to Google&#x27;s offer class.  - STORED_VALUE_PROTOCOL: Stored Value - mapped to Google&#x27;s gift class.  - TRANSIT_VALUE_PROTOCOL: Stored Value - mapped to Google&#x27;s transit class.  - MEMBERSHIP: Values 100 onwards are for PassKit generic protocols. Generic Membership protocol  - SINGLE_USE_COUPON: Single Use Coupon protocol  - PROP_0001: Values 1000 onwards are for proprietary protocols Proprietary protocol.  - PROP_0002: Proprietary protocol. | [optional]
 **period** | **string**| A period unit of individual data (day, month or year).   - DAY: Show individual data by day.  - MONTH: Default response will be in months.  - YEAR: Show individual data by year. | [optional]
 **startDate** | **string**| Start date sets the oldest date of the data to be shown. | [optional]
 **endDate** | **string**| End date sets the latest date of the data to be shown. | [optional]
 **timezone** | **string**| Timezone in IANA format; defaults to UTC if not providedd. | [optional]

### Return type

[**\PkIo\Model\SingleUseCouponsCouponCampaignAnalyticsResponse**](../Model/SingleUseCouponsCouponCampaignAnalyticsResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponCampaign**
> \PkIo\Model\SingleUseCouponsCouponCampaign getCouponCampaign($id)

Get Coupon Campaign

Gets an existing Coupon Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The unique identifier to an object or record.

try {
    $result = $apiInstance->getCouponCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->getCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier to an object or record. |

### Return type

[**\PkIo\Model\SingleUseCouponsCouponCampaign**](../Model/SingleUseCouponsCouponCampaign.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCouponCampaigns**
> object listCouponCampaigns($limit, $offset, $filterField, $filterValue, $filterOperator, $orderBy, $orderAsc)

List Coupon Campaigns

Lists all Coupon Campaigns for the logged in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records.
$offset = 56; // int | Allows you to offset the first record returned by the limit.
$filterField = array("filterField_example"); // string[] | Array of column names to filter results by.
$filterValue = array("filterValue_example"); // string[] | Array of values to test against the filter fields.
$filterOperator = array("filterOperator_example"); // string[] | will be whitelisted operators in io core.
$orderBy = "orderBy_example"; // string | Field to order results by.
$orderAsc = true; // bool | Will return in ascending order if true, or descending order if false.

try {
    $result = $apiInstance->listCouponCampaigns($limit, $offset, $filterField, $filterValue, $filterOperator, $orderBy, $orderAsc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->listCouponCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limit the number of records returned. If not specified, a default of 25 is used.  Enter -1 for all records. | [optional]
 **offset** | **int**| Allows you to offset the first record returned by the limit. | [optional]
 **filterField** | [**string[]**](../Model/string.md)| Array of column names to filter results by. | [optional]
 **filterValue** | [**string[]**](../Model/string.md)| Array of values to test against the filter fields. | [optional]
 **filterOperator** | [**string[]**](../Model/string.md)| will be whitelisted operators in io core. | [optional]
 **orderBy** | **string**| Field to order results by. | [optional]
 **orderAsc** | **bool**| Will return in ascending order if true, or descending order if false. | [optional]

### Return type

**object**

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCouponCampaign**
> \PkIo\Model\SingleUseCouponsCouponCampaign updateCouponCampaign($body)

Update Coupon Campaign

Updates an existing Pass Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKeyAuth
$config = PkIo\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PkIo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PkIo\Api\CouponCampaignRESTAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PkIo\Model\SingleUseCouponsCouponCampaign(); // \PkIo\Model\SingleUseCouponsCouponCampaign | 

try {
    $result = $apiInstance->updateCouponCampaign($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponCampaignRESTAPIApi->updateCouponCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PkIo\Model\SingleUseCouponsCouponCampaign**](../Model/SingleUseCouponsCouponCampaign.md)|  |

### Return type

[**\PkIo\Model\SingleUseCouponsCouponCampaign**](../Model/SingleUseCouponsCouponCampaign.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

