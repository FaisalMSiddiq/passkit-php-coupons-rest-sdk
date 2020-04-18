<?php
/**
 * IoDeviceAttributes
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
 * Do not edit the class manually.
 */

namespace PkIo\Model;
use \PkIo\ObjectSerializer;

/**
 * IoDeviceAttributes Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoDeviceAttributes
{
    /**
     * Possible values of this enum
     */
    const NO_ATTRIBUTES = 'NoAttributes';
const IOS = 'Ios';
const ANDROID = 'Android';
const SUPPORT_WALLET = 'SupportWallet';
const WALLET_SCANNER = 'WalletScanner';
const WALLET_DAEMON = 'WalletDaemon';
const WALLET_PASSES = 'WalletPasses';
const WINDOWS = 'Windows';
const OSX = 'OSX';
const LINUX = 'Linux';
const MOBILE = 'Mobile';
const DESKTOP = 'Desktop';
const TABLET = 'Tablet';
const UNSUPPORTED_IOS = 'UnsupportedIos';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_ATTRIBUTES,
self::IOS,
self::ANDROID,
self::SUPPORT_WALLET,
self::WALLET_SCANNER,
self::WALLET_DAEMON,
self::WALLET_PASSES,
self::WINDOWS,
self::OSX,
self::LINUX,
self::MOBILE,
self::DESKTOP,
self::TABLET,
self::UNSUPPORTED_IOS,        ];
    }
}