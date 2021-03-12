<?php
/**
 * AppMetadata
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sematext\STCloud
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
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sematext\STCloud\Model;

use \ArrayAccess;
use \Sematext\STCloud\ObjectSerializer;

/**
 * AppMetadata Class Doc Comment
 *
 * @category Class
 * @package  Sematext\STCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aws_cloud_watch_access_key' => 'string',
'aws_cloud_watch_secret_key' => 'string',
'aws_fetch_frequency' => 'string',
'aws_region' => 'string',
'sub_types' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aws_cloud_watch_access_key' => null,
'aws_cloud_watch_secret_key' => null,
'aws_fetch_frequency' => null,
'aws_region' => null,
'sub_types' => null    ];

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
        'aws_cloud_watch_access_key' => 'awsCloudWatchAccessKey',
'aws_cloud_watch_secret_key' => 'awsCloudWatchSecretKey',
'aws_fetch_frequency' => 'awsFetchFrequency',
'aws_region' => 'awsRegion',
'sub_types' => 'subTypes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aws_cloud_watch_access_key' => 'setAwsCloudWatchAccessKey',
'aws_cloud_watch_secret_key' => 'setAwsCloudWatchSecretKey',
'aws_fetch_frequency' => 'setAwsFetchFrequency',
'aws_region' => 'setAwsRegion',
'sub_types' => 'setSubTypes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aws_cloud_watch_access_key' => 'getAwsCloudWatchAccessKey',
'aws_cloud_watch_secret_key' => 'getAwsCloudWatchSecretKey',
'aws_fetch_frequency' => 'getAwsFetchFrequency',
'aws_region' => 'getAwsRegion',
'sub_types' => 'getSubTypes'    ];

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

    const AWS_FETCH_FREQUENCY_MINUTE = 'MINUTE';
const AWS_FETCH_FREQUENCY_FIVE_MINUTES = 'FIVE_MINUTES';
const AWS_FETCH_FREQUENCY_FIFTEEN_MINUTES = 'FIFTEEN_MINUTES';
const AWS_REGION_US_EAST_1 = 'US_EAST_1';
const AWS_REGION_US_WEST_1 = 'US_WEST_1';
const AWS_REGION_EU_WEST_1 = 'EU_WEST_1';
const AWS_REGION_US_WEST_2 = 'US_WEST_2';
const AWS_REGION_AP_SOUTHEAST_1 = 'AP_SOUTHEAST_1';
const AWS_REGION_AP_SOUTHEAST_2 = 'AP_SOUTHEAST_2';
const AWS_REGION_AP_NORTHEAST_1 = 'AP_NORTHEAST_1';
const AWS_REGION_SA_EAST_1 = 'SA_EAST_1';
const AWS_REGION_GOV_CLOUD = 'GovCloud';
const AWS_REGION_CN_NORTH_1 = 'CN_NORTH_1';
const AWS_REGION_US_EAST_2 = 'US_EAST_2';
const AWS_REGION_AP_SOUTH_1 = 'AP_SOUTH_1';
const AWS_REGION_AP_NORTHEAST_2 = 'AP_NORTHEAST_2';
const AWS_REGION_CA_CENTRAL_1 = 'CA_CENTRAL_1';
const AWS_REGION_EU_CENTRAL_1 = 'EU_CENTRAL_1';
const AWS_REGION_EU_WEST_2 = 'EU_WEST_2';
const SUB_TYPES_EC2 = 'aws_ec2';
const SUB_TYPES_ELB = 'aws_elb';
const SUB_TYPES_EBS = 'aws_ebs';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAwsFetchFrequencyAllowableValues()
    {
        return [
            self::AWS_FETCH_FREQUENCY_MINUTE,
self::AWS_FETCH_FREQUENCY_FIVE_MINUTES,
self::AWS_FETCH_FREQUENCY_FIFTEEN_MINUTES,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAwsRegionAllowableValues()
    {
        return [
            self::AWS_REGION_US_EAST_1,
self::AWS_REGION_US_WEST_1,
self::AWS_REGION_EU_WEST_1,
self::AWS_REGION_US_WEST_2,
self::AWS_REGION_AP_SOUTHEAST_1,
self::AWS_REGION_AP_SOUTHEAST_2,
self::AWS_REGION_AP_NORTHEAST_1,
self::AWS_REGION_SA_EAST_1,
self::AWS_REGION_GOV_CLOUD,
self::AWS_REGION_CN_NORTH_1,
self::AWS_REGION_US_EAST_2,
self::AWS_REGION_AP_SOUTH_1,
self::AWS_REGION_AP_NORTHEAST_2,
self::AWS_REGION_CA_CENTRAL_1,
self::AWS_REGION_EU_CENTRAL_1,
self::AWS_REGION_EU_WEST_2,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubTypesAllowableValues()
    {
        return [
            self::SUB_TYPES_EC2,
self::SUB_TYPES_ELB,
self::SUB_TYPES_EBS,        ];
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
        $this->container['aws_cloud_watch_access_key'] = isset($data['aws_cloud_watch_access_key']) ? $data['aws_cloud_watch_access_key'] : null;
        $this->container['aws_cloud_watch_secret_key'] = isset($data['aws_cloud_watch_secret_key']) ? $data['aws_cloud_watch_secret_key'] : null;
        $this->container['aws_fetch_frequency'] = isset($data['aws_fetch_frequency']) ? $data['aws_fetch_frequency'] : null;
        $this->container['aws_region'] = isset($data['aws_region']) ? $data['aws_region'] : null;
        $this->container['sub_types'] = isset($data['sub_types']) ? $data['sub_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAwsFetchFrequencyAllowableValues();
        if (!is_null($this->container['aws_fetch_frequency']) && !in_array($this->container['aws_fetch_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'aws_fetch_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAwsRegionAllowableValues();
        if (!is_null($this->container['aws_region']) && !in_array($this->container['aws_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'aws_region', must be one of '%s'",
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
     * Gets aws_cloud_watch_access_key
     *
     * @return string
     */
    public function getAwsCloudWatchAccessKey()
    {
        return $this->container['aws_cloud_watch_access_key'];
    }

    /**
     * Sets aws_cloud_watch_access_key
     *
     * @param string $aws_cloud_watch_access_key aws_cloud_watch_access_key
     *
     * @return $this
     */
    public function setAwsCloudWatchAccessKey($aws_cloud_watch_access_key)
    {
        $this->container['aws_cloud_watch_access_key'] = $aws_cloud_watch_access_key;

        return $this;
    }

    /**
     * Gets aws_cloud_watch_secret_key
     *
     * @return string
     */
    public function getAwsCloudWatchSecretKey()
    {
        return $this->container['aws_cloud_watch_secret_key'];
    }

    /**
     * Sets aws_cloud_watch_secret_key
     *
     * @param string $aws_cloud_watch_secret_key aws_cloud_watch_secret_key
     *
     * @return $this
     */
    public function setAwsCloudWatchSecretKey($aws_cloud_watch_secret_key)
    {
        $this->container['aws_cloud_watch_secret_key'] = $aws_cloud_watch_secret_key;

        return $this;
    }

    /**
     * Gets aws_fetch_frequency
     *
     * @return string
     */
    public function getAwsFetchFrequency()
    {
        return $this->container['aws_fetch_frequency'];
    }

    /**
     * Sets aws_fetch_frequency
     *
     * @param string $aws_fetch_frequency aws_fetch_frequency
     *
     * @return $this
     */
    public function setAwsFetchFrequency($aws_fetch_frequency)
    {
        $allowedValues = $this->getAwsFetchFrequencyAllowableValues();
        if (!is_null($aws_fetch_frequency) && !in_array($aws_fetch_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'aws_fetch_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aws_fetch_frequency'] = $aws_fetch_frequency;

        return $this;
    }

    /**
     * Gets aws_region
     *
     * @return string
     */
    public function getAwsRegion()
    {
        return $this->container['aws_region'];
    }

    /**
     * Sets aws_region
     *
     * @param string $aws_region aws_region
     *
     * @return $this
     */
    public function setAwsRegion($aws_region)
    {
        $allowedValues = $this->getAwsRegionAllowableValues();
        if (!is_null($aws_region) && !in_array($aws_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'aws_region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aws_region'] = $aws_region;

        return $this;
    }

    /**
     * Gets sub_types
     *
     * @return string[]
     */
    public function getSubTypes()
    {
        return $this->container['sub_types'];
    }

    /**
     * Sets sub_types
     *
     * @param string[] $sub_types Comma separated list of AWS types monitored by created app
     *
     * @return $this
     */
    public function setSubTypes($sub_types)
    {
        $allowedValues = $this->getSubTypesAllowableValues();
        if (!is_null($sub_types) && array_diff($sub_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sub_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_types'] = $sub_types;

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
