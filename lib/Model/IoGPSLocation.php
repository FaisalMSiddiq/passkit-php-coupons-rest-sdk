<?php
/**
 * IoGPSLocation
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
 * IoGPSLocation Class Doc Comment
 *
 * @category Class
 * @description A location record enables the pass to be pushed to the lock screen when the user is in near the location. For iOS users, a customized message can also be displayed.
 * @package  PkIo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoGPSLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ioGPSLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'lat' => 'double',
'lon' => 'double',
'alt' => 'int',
'lockScreenMessage' => 'string',
'localizedLockScreenMessage' => '\PkIo\Model\IoLocalizedString',
'position' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'lat' => 'double',
'lon' => 'double',
'alt' => 'int32',
'lockScreenMessage' => null,
'localizedLockScreenMessage' => null,
'position' => 'int64'    ];

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
        'id' => 'id',
'name' => 'name',
'lat' => 'lat',
'lon' => 'lon',
'alt' => 'alt',
'lockScreenMessage' => 'lockScreenMessage',
'localizedLockScreenMessage' => 'localizedLockScreenMessage',
'position' => 'position'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'lat' => 'setLat',
'lon' => 'setLon',
'alt' => 'setAlt',
'lockScreenMessage' => 'setLockScreenMessage',
'localizedLockScreenMessage' => 'setLocalizedLockScreenMessage',
'position' => 'setPosition'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'lat' => 'getLat',
'lon' => 'getLon',
'alt' => 'getAlt',
'lockScreenMessage' => 'getLockScreenMessage',
'localizedLockScreenMessage' => 'getLocalizedLockScreenMessage',
'position' => 'getPosition'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['alt'] = isset($data['alt']) ? $data['alt'] : null;
        $this->container['lockScreenMessage'] = isset($data['lockScreenMessage']) ? $data['lockScreenMessage'] : null;
        $this->container['localizedLockScreenMessage'] = isset($data['localizedLockScreenMessage']) ? $data['localizedLockScreenMessage'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lat'] === null) {
            $invalidProperties[] = "'lat' can't be null";
        }
        if ($this->container['lockScreenMessage'] === null) {
            $invalidProperties[] = "'lockScreenMessage' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return double
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param double $lat Latitude.
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return double
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param double $lon Longitude.
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets alt
     *
     * @return int
     */
    public function getAlt()
    {
        return $this->container['alt'];
    }

    /**
     * Sets alt
     *
     * @param int $alt Altitude in metres.
     *
     * @return $this
     */
    public function setAlt($alt)
    {
        $this->container['alt'] = $alt;

        return $this;
    }

    /**
     * Gets lockScreenMessage
     *
     * @return string
     */
    public function getLockScreenMessage()
    {
        return $this->container['lockScreenMessage'];
    }

    /**
     * Sets lockScreenMessage
     *
     * @param string $lockScreenMessage Message to be displayed on lock screen when user is in the location (iOS only).
     *
     * @return $this
     */
    public function setLockScreenMessage($lockScreenMessage)
    {
        $this->container['lockScreenMessage'] = $lockScreenMessage;

        return $this;
    }

    /**
     * Gets localizedLockScreenMessage
     *
     * @return \PkIo\Model\IoLocalizedString
     */
    public function getLocalizedLockScreenMessage()
    {
        return $this->container['localizedLockScreenMessage'];
    }

    /**
     * Sets localizedLockScreenMessage
     *
     * @param \PkIo\Model\IoLocalizedString $localizedLockScreenMessage localizedLockScreenMessage
     *
     * @return $this
     */
    public function setLocalizedLockScreenMessage($localizedLockScreenMessage)
    {
        $this->container['localizedLockScreenMessage'] = $localizedLockScreenMessage;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Locations will be added in order of their position, from lowest to highest. Position can be any value, E.g. 3 Locations with positions 30, 10, 20 would be added 10 first, 20 second and 30 third.  If no position is provided and the number of locations exceeds 10, there is no guarantee which location(s) would be excluded from the pass.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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