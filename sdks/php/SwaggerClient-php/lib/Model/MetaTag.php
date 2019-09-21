<?php
/**
 * MetaTag
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PhotoShelter API v4
 *
 * # PhotoShelter API v4 definition
 *
 * OpenAPI spec version: Anthony
 * Contact: api-support@photoshelter.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MetaTag Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MetaTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MetaTag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'copyright' => 'string',
'version' => 'string',
'rate_limit_limit' => 'int',
'rate_limit_current' => 'int',
'rate_limit_expires' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'copyright' => null,
'version' => null,
'rate_limit_limit' => null,
'rate_limit_current' => null,
'rate_limit_expires' => null    ];

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
        'copyright' => 'copyright',
'version' => 'version',
'rate_limit_limit' => 'rate_limit_limit',
'rate_limit_current' => 'rate_limit_current',
'rate_limit_expires' => 'rate_limit_expires'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copyright' => 'setCopyright',
'version' => 'setVersion',
'rate_limit_limit' => 'setRateLimitLimit',
'rate_limit_current' => 'setRateLimitCurrent',
'rate_limit_expires' => 'setRateLimitExpires'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copyright' => 'getCopyright',
'version' => 'getVersion',
'rate_limit_limit' => 'getRateLimitLimit',
'rate_limit_current' => 'getRateLimitCurrent',
'rate_limit_expires' => 'getRateLimitExpires'    ];

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
        $this->container['copyright'] = isset($data['copyright']) ? $data['copyright'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['rate_limit_limit'] = isset($data['rate_limit_limit']) ? $data['rate_limit_limit'] : null;
        $this->container['rate_limit_current'] = isset($data['rate_limit_current']) ? $data['rate_limit_current'] : null;
        $this->container['rate_limit_expires'] = isset($data['rate_limit_expires']) ? $data['rate_limit_expires'] : null;
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
     * Gets copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string $copyright copyright
     *
     * @return $this
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets rate_limit_limit
     *
     * @return int
     */
    public function getRateLimitLimit()
    {
        return $this->container['rate_limit_limit'];
    }

    /**
     * Sets rate_limit_limit
     *
     * @param int $rate_limit_limit rate_limit_limit
     *
     * @return $this
     */
    public function setRateLimitLimit($rate_limit_limit)
    {
        $this->container['rate_limit_limit'] = $rate_limit_limit;

        return $this;
    }

    /**
     * Gets rate_limit_current
     *
     * @return int
     */
    public function getRateLimitCurrent()
    {
        return $this->container['rate_limit_current'];
    }

    /**
     * Sets rate_limit_current
     *
     * @param int $rate_limit_current rate_limit_current
     *
     * @return $this
     */
    public function setRateLimitCurrent($rate_limit_current)
    {
        $this->container['rate_limit_current'] = $rate_limit_current;

        return $this;
    }

    /**
     * Gets rate_limit_expires
     *
     * @return int
     */
    public function getRateLimitExpires()
    {
        return $this->container['rate_limit_expires'];
    }

    /**
     * Sets rate_limit_expires
     *
     * @param int $rate_limit_expires rate_limit_expires
     *
     * @return $this
     */
    public function setRateLimitExpires($rate_limit_expires)
    {
        $this->container['rate_limit_expires'] = $rate_limit_expires;

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
