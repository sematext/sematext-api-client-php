<?php
/**
 * CloudWatchSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sematext Cloud API
 *
 * API Explorer provides access and documentation for Sematext REST API. The REST API requires the API Key to be sent as part of `Authorization` header. E.g.: `Authorization : apiKey e5f18450-205a-48eb-8589-7d49edaea813`.
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
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
 * CloudWatchSettings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CloudWatchSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CloudWatchSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_key' => 'string',
        'fetch_frequency' => 'string',
        'region' => 'string',
        'secret_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_key' => null,
        'fetch_frequency' => null,
        'region' => null,
        'secret_key' => null
    ];

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
        'access_key' => 'accessKey',
        'fetch_frequency' => 'fetchFrequency',
        'region' => 'region',
        'secret_key' => 'secretKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_key' => 'setAccessKey',
        'fetch_frequency' => 'setFetchFrequency',
        'region' => 'setRegion',
        'secret_key' => 'setSecretKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_key' => 'getAccessKey',
        'fetch_frequency' => 'getFetchFrequency',
        'region' => 'getRegion',
        'secret_key' => 'getSecretKey'
    ];

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

    const FETCH_FREQUENCY_MINUTE = 'MINUTE';
    const FETCH_FREQUENCY_FIVE_MINUTES = 'FIVE_MINUTES';
    const FETCH_FREQUENCY_FIFTEEN_MINUTES = 'FIFTEEN_MINUTES';
    const REGION_US_EAST_1 = 'US_EAST_1';
    const REGION_US_WEST_1 = 'US_WEST_1';
    const REGION_EU_WEST_1 = 'EU_WEST_1';
    const REGION_US_WEST_2 = 'US_WEST_2';
    const REGION_AP_SOUTHEAST_1 = 'AP_SOUTHEAST_1';
    const REGION_AP_SOUTHEAST_2 = 'AP_SOUTHEAST_2';
    const REGION_AP_NORTHEAST_1 = 'AP_NORTHEAST_1';
    const REGION_SA_EAST_1 = 'SA_EAST_1';
    const REGION_GOV_CLOUD = 'GovCloud';
    const REGION_CN_NORTH_1 = 'CN_NORTH_1';
    const REGION_US_EAST_2 = 'US_EAST_2';
    const REGION_AP_SOUTH_1 = 'AP_SOUTH_1';
    const REGION_AP_NORTHEAST_2 = 'AP_NORTHEAST_2';
    const REGION_CA_CENTRAL_1 = 'CA_CENTRAL_1';
    const REGION_EU_CENTRAL_1 = 'EU_CENTRAL_1';
    const REGION_EU_WEST_2 = 'EU_WEST_2';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFetchFrequencyAllowableValues()
    {
        return [
            self::FETCH_FREQUENCY_MINUTE,
            self::FETCH_FREQUENCY_FIVE_MINUTES,
            self::FETCH_FREQUENCY_FIFTEEN_MINUTES,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_US_EAST_1,
            self::REGION_US_WEST_1,
            self::REGION_EU_WEST_1,
            self::REGION_US_WEST_2,
            self::REGION_AP_SOUTHEAST_1,
            self::REGION_AP_SOUTHEAST_2,
            self::REGION_AP_NORTHEAST_1,
            self::REGION_SA_EAST_1,
            self::REGION_GOV_CLOUD,
            self::REGION_CN_NORTH_1,
            self::REGION_US_EAST_2,
            self::REGION_AP_SOUTH_1,
            self::REGION_AP_NORTHEAST_2,
            self::REGION_CA_CENTRAL_1,
            self::REGION_EU_CENTRAL_1,
            self::REGION_EU_WEST_2,
        ];
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
        $this->container['access_key'] = isset($data['access_key']) ? $data['access_key'] : null;
        $this->container['fetch_frequency'] = isset($data['fetch_frequency']) ? $data['fetch_frequency'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['secret_key'] = isset($data['secret_key']) ? $data['secret_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFetchFrequencyAllowableValues();
        if (!is_null($this->container['fetch_frequency']) && !in_array($this->container['fetch_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fetch_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'region', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return $this
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets fetch_frequency
     *
     * @return string
     */
    public function getFetchFrequency()
    {
        return $this->container['fetch_frequency'];
    }

    /**
     * Sets fetch_frequency
     *
     * @param string $fetch_frequency fetch_frequency
     *
     * @return $this
     */
    public function setFetchFrequency($fetch_frequency)
    {
        $allowedValues = $this->getFetchFrequencyAllowableValues();
        if (!is_null($fetch_frequency) && !in_array($fetch_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fetch_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fetch_frequency'] = $fetch_frequency;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($region) && !in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string $secret_key secret_key
     *
     * @return $this
     */
    public function setSecretKey($secret_key)
    {
        $this->container['secret_key'] = $secret_key;

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


