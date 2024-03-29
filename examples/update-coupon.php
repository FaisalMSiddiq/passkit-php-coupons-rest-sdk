<?php
require_once "../vendor/autoload.php";

// Create config and set host
$config = PkIo\Configuration::getDefaultConfiguration();
$config->setHost("https://api.pub1.passkit.io");

// Create auth object for token generation
$auth = new PkIo\Auth("myApiKey", "myApiSecret");

// Create the API instance
$apiInstance = new PkIo\Api\CouponsApi(
    new GuzzleHttp\Client(),
    $config
);

// Generate a new JWT.
// IMPORTANT: Our JWTs are short-lived; if you plan to re-use the API instance for multiple requests, then make sure to generate a new token for each request (repeat below line of code)
$apiInstance->getConfig()->setApiKey('Authorization', $auth->GenerateJwt());

// Set the Coupon body (an update requires the PassKit Coupon ID or the Campaign Id + External ID)
$body = new PkIo\Model\SingleUseCouponsCoupon();
$body->setId("myPassKitId");
$body->setOptOut(true);

try {
    $result = $apiInstance->updateCoupon($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>