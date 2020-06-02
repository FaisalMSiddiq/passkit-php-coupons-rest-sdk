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

// Set the Coupon body
$body = new PkIo\Model\SingleUseCouponsCoupon();
$body->setCampaignId("myCampaignId");
$body->setOfferId("myOfferId");

try {
    $result = $apiInstance->createCoupon($body);
    print_r($result);
    echo sprintf("Pass URL: https://pub1.pskt.io/%s\n", $result->getId());
} catch (Exception $e) {
    echo 'Exception when calling CouponRESTAPIApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
?>