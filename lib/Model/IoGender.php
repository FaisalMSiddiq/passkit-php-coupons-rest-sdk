<?php
/**
 * IoGender
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
 * IoGender Class Doc Comment
 *
 * @category Class
 * @description Gender, as per government issued id.   - NOT_KNOWN: Use only where gender is not known  - MALE: Male  - FEMALE: Female
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoGender
{
    /**
     * Possible values of this enum
     */
    const NOT_KNOWN = 'NOT_KNOWN';
const MALE = 'MALE';
const FEMALE = 'FEMALE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_KNOWN,
self::MALE,
self::FEMALE,        ];
    }
}