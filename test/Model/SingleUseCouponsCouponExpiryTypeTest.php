<?php
/**
 * SingleUseCouponsCouponExpiryTypeTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Single Use Coupon API
 *
 * This protocol is suit for cases where the user requires a clean and simple single use coupon for short term coupon campaigns in Apple Wallet and Google Pay.
 *
 * OpenAPI spec version: 0.1
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace PkIo;

/**
 * SingleUseCouponsCouponExpiryTypeTest Class Doc Comment
 *
 * @category    Class
 * @description - AUTO_EXPIRE_OFFER_END_DATE: The system will set the coupon expiry based to the campaign end date (default).  - AUTO_EXPIRE_REDEMPTION_END_DATE: The system will set the coupon expiry based to the redemption end date.  - EXPIRE_AFTER_X_DAYS: The system will calculate the expiry date based the number of days after the digital coupon is issued. The calculated date needs to be within range of the campaign date rules. For example, if issue date + EXPIRE_AFTER_X_DAYS is greater than the campaign end date, it will default to the campaign end date. The expiry date will be based on your timezone. The digital card will expire at 23:59:59 of set date in fixed timezone.  - EXPIRE_ON_VARIABLE_DATE_TIME: If you want to set the expiry date for each individual coupon when the coupon is issued, you can use this expiry type. You can set expiry date and time in fixed timezone on the coupon record. The date needs to be within range of the campaign date rules, otherwise the system will return an error.
 * @package     PkIo
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SingleUseCouponsCouponExpiryTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "SingleUseCouponsCouponExpiryType"
     */
    public function testSingleUseCouponsCouponExpiryType()
    {
    }
}