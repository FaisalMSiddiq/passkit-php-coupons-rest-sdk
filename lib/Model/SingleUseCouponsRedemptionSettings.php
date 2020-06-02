<?php
/**
 * SingleUseCouponsRedemptionSettings
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

use \ArrayAccess;
use \PkIo\ObjectSerializer;

/**
 * SingleUseCouponsRedemptionSettings Class Doc Comment
 *
 * @category Class
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleUseCouponsRedemptionSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'single_use_couponsRedemptionSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'redemptionStartDate' => '\DateTime',
'redemptionEndDate' => '\DateTime',
'redemptionType' => '\PkIo\Model\SingleUseCouponsRedemptionType[]',
'codeProvidedOnRedeemSettings' => '\PkIo\Model\SingleUseCouponsCustomerInitiatedCodeProvideOnRedeemSettings',
'fixedCodeSettings' => '\PkIo\Model\SingleUseCouponsCustomerInitiatedFixedCodeSettings',
'standardSettings' => '\PkIo\Model\SingleUseCouponsStandardPassKitHostedPage'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'redemptionStartDate' => 'date-time',
'redemptionEndDate' => 'date-time',
'redemptionType' => null,
'codeProvidedOnRedeemSettings' => null,
'fixedCodeSettings' => null,
'standardSettings' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'redemptionStartDate' => 'redemptionStartDate',
'redemptionEndDate' => 'redemptionEndDate',
'redemptionType' => 'redemptionType',
'codeProvidedOnRedeemSettings' => 'codeProvidedOnRedeemSettings',
'fixedCodeSettings' => 'fixedCodeSettings',
'standardSettings' => 'standardSettings'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redemptionStartDate' => 'setRedemptionStartDate',
'redemptionEndDate' => 'setRedemptionEndDate',
'redemptionType' => 'setRedemptionType',
'codeProvidedOnRedeemSettings' => 'setCodeProvidedOnRedeemSettings',
'fixedCodeSettings' => 'setFixedCodeSettings',
'standardSettings' => 'setStandardSettings'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redemptionStartDate' => 'getRedemptionStartDate',
'redemptionEndDate' => 'getRedemptionEndDate',
'redemptionType' => 'getRedemptionType',
'codeProvidedOnRedeemSettings' => 'getCodeProvidedOnRedeemSettings',
'fixedCodeSettings' => 'getFixedCodeSettings',
'standardSettings' => 'getStandardSettings'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['redemptionStartDate'] = isset($data['redemptionStartDate']) ? $data['redemptionStartDate'] : null;
        $this->container['redemptionEndDate'] = isset($data['redemptionEndDate']) ? $data['redemptionEndDate'] : null;
        $this->container['redemptionType'] = isset($data['redemptionType']) ? $data['redemptionType'] : null;
        $this->container['codeProvidedOnRedeemSettings'] = isset($data['codeProvidedOnRedeemSettings']) ? $data['codeProvidedOnRedeemSettings'] : null;
        $this->container['fixedCodeSettings'] = isset($data['fixedCodeSettings']) ? $data['fixedCodeSettings'] : null;
        $this->container['standardSettings'] = isset($data['standardSettings']) ? $data['standardSettings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets redemptionStartDate
     *
     * @return \DateTime
     */
    public function getRedemptionStartDate()
    {
        return $this->container['redemptionStartDate'];
    }

    /**
     * Sets redemptionStartDate
     *
     * @param \DateTime $redemptionStartDate Optional field that can be set if offers can only be redeemed after a certain date. Defaults to the offer issue start date. Needs to be greater than / equal to the offer issue start date, and less than / equal to offer issue end date.
     *
     * @return $this
     */
    public function setRedemptionStartDate($redemptionStartDate)
    {
        $this->container['redemptionStartDate'] = $redemptionStartDate;

        return $this;
    }

    /**
     * Gets redemptionEndDate
     *
     * @return \DateTime
     */
    public function getRedemptionEndDate()
    {
        return $this->container['redemptionEndDate'];
    }

    /**
     * Sets redemptionEndDate
     *
     * @param \DateTime $redemptionEndDate Optional field that can be set if offers can only be redeemed until a certain date. Defaults to the offer issue end date. Needs to be less than / equal to the offer issue end date.
     *
     * @return $this
     */
    public function setRedemptionEndDate($redemptionEndDate)
    {
        $this->container['redemptionEndDate'] = $redemptionEndDate;

        return $this;
    }

    /**
     * Gets redemptionType
     *
     * @return \PkIo\Model\SingleUseCouponsRedemptionType[]
     */
    public function getRedemptionType()
    {
        return $this->container['redemptionType'];
    }

    /**
     * Sets redemptionType
     *
     * @param \PkIo\Model\SingleUseCouponsRedemptionType[] $redemptionType Dictates redemption type; defaults to API.
     *
     * @return $this
     */
    public function setRedemptionType($redemptionType)
    {
        $this->container['redemptionType'] = $redemptionType;

        return $this;
    }

    /**
     * Gets codeProvidedOnRedeemSettings
     *
     * @return \PkIo\Model\SingleUseCouponsCustomerInitiatedCodeProvideOnRedeemSettings
     */
    public function getCodeProvidedOnRedeemSettings()
    {
        return $this->container['codeProvidedOnRedeemSettings'];
    }

    /**
     * Sets codeProvidedOnRedeemSettings
     *
     * @param \PkIo\Model\SingleUseCouponsCustomerInitiatedCodeProvideOnRedeemSettings $codeProvidedOnRedeemSettings codeProvidedOnRedeemSettings
     *
     * @return $this
     */
    public function setCodeProvidedOnRedeemSettings($codeProvidedOnRedeemSettings)
    {
        $this->container['codeProvidedOnRedeemSettings'] = $codeProvidedOnRedeemSettings;

        return $this;
    }

    /**
     * Gets fixedCodeSettings
     *
     * @return \PkIo\Model\SingleUseCouponsCustomerInitiatedFixedCodeSettings
     */
    public function getFixedCodeSettings()
    {
        return $this->container['fixedCodeSettings'];
    }

    /**
     * Sets fixedCodeSettings
     *
     * @param \PkIo\Model\SingleUseCouponsCustomerInitiatedFixedCodeSettings $fixedCodeSettings fixedCodeSettings
     *
     * @return $this
     */
    public function setFixedCodeSettings($fixedCodeSettings)
    {
        $this->container['fixedCodeSettings'] = $fixedCodeSettings;

        return $this;
    }

    /**
     * Gets standardSettings
     *
     * @return \PkIo\Model\SingleUseCouponsStandardPassKitHostedPage
     */
    public function getStandardSettings()
    {
        return $this->container['standardSettings'];
    }

    /**
     * Sets standardSettings
     *
     * @param \PkIo\Model\SingleUseCouponsStandardPassKitHostedPage $standardSettings standardSettings
     *
     * @return $this
     */
    public function setStandardSettings($standardSettings)
    {
        $this->container['standardSettings'] = $standardSettings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
