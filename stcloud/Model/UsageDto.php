<?php
/**
 * UsageDto
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
 * UsageDto Class Doc Comment
 *
 * @category Class
 * @package  Sematext\STCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsageDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsageDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
'daily_usage' => '\Sematext\STCloud\Model\DailyDto[]',
'daily_volume_mb' => 'int',
'end' => '\DateTime',
'failed_count' => 'int',
'limit_change_events' => '\Sematext\STCloud\Model\LimitChangeEventDTO[]',
'max_allowed_mb' => 'int',
'max_limit_mb' => 'int',
'start' => '\DateTime',
'volume' => 'int',
'volume_change_events' => '\Sematext\STCloud\Model\LimitChangeEventDTO[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count' => 'int64',
'daily_usage' => null,
'daily_volume_mb' => 'int64',
'end' => 'date-time',
'failed_count' => 'int64',
'limit_change_events' => null,
'max_allowed_mb' => 'int64',
'max_limit_mb' => 'int64',
'start' => 'date-time',
'volume' => 'int64',
'volume_change_events' => null    ];

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
        'count' => 'count',
'daily_usage' => 'dailyUsage',
'daily_volume_mb' => 'dailyVolumeMB',
'end' => 'end',
'failed_count' => 'failedCount',
'limit_change_events' => 'limitChangeEvents',
'max_allowed_mb' => 'maxAllowedMB',
'max_limit_mb' => 'maxLimitMB',
'start' => 'start',
'volume' => 'volume',
'volume_change_events' => 'volumeChangeEvents'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
'daily_usage' => 'setDailyUsage',
'daily_volume_mb' => 'setDailyVolumeMb',
'end' => 'setEnd',
'failed_count' => 'setFailedCount',
'limit_change_events' => 'setLimitChangeEvents',
'max_allowed_mb' => 'setMaxAllowedMb',
'max_limit_mb' => 'setMaxLimitMb',
'start' => 'setStart',
'volume' => 'setVolume',
'volume_change_events' => 'setVolumeChangeEvents'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
'daily_usage' => 'getDailyUsage',
'daily_volume_mb' => 'getDailyVolumeMb',
'end' => 'getEnd',
'failed_count' => 'getFailedCount',
'limit_change_events' => 'getLimitChangeEvents',
'max_allowed_mb' => 'getMaxAllowedMb',
'max_limit_mb' => 'getMaxLimitMb',
'start' => 'getStart',
'volume' => 'getVolume',
'volume_change_events' => 'getVolumeChangeEvents'    ];

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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['daily_usage'] = isset($data['daily_usage']) ? $data['daily_usage'] : null;
        $this->container['daily_volume_mb'] = isset($data['daily_volume_mb']) ? $data['daily_volume_mb'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['failed_count'] = isset($data['failed_count']) ? $data['failed_count'] : null;
        $this->container['limit_change_events'] = isset($data['limit_change_events']) ? $data['limit_change_events'] : null;
        $this->container['max_allowed_mb'] = isset($data['max_allowed_mb']) ? $data['max_allowed_mb'] : null;
        $this->container['max_limit_mb'] = isset($data['max_limit_mb']) ? $data['max_limit_mb'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['volume_change_events'] = isset($data['volume_change_events']) ? $data['volume_change_events'] : null;
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets daily_usage
     *
     * @return \Sematext\STCloud\Model\DailyDto[]
     */
    public function getDailyUsage()
    {
        return $this->container['daily_usage'];
    }

    /**
     * Sets daily_usage
     *
     * @param \Sematext\STCloud\Model\DailyDto[] $daily_usage daily_usage
     *
     * @return $this
     */
    public function setDailyUsage($daily_usage)
    {
        $this->container['daily_usage'] = $daily_usage;

        return $this;
    }

    /**
     * Gets daily_volume_mb
     *
     * @return int
     */
    public function getDailyVolumeMb()
    {
        return $this->container['daily_volume_mb'];
    }

    /**
     * Sets daily_volume_mb
     *
     * @param int $daily_volume_mb daily_volume_mb
     *
     * @return $this
     */
    public function setDailyVolumeMb($daily_volume_mb)
    {
        $this->container['daily_volume_mb'] = $daily_volume_mb;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets failed_count
     *
     * @return int
     */
    public function getFailedCount()
    {
        return $this->container['failed_count'];
    }

    /**
     * Sets failed_count
     *
     * @param int $failed_count failed_count
     *
     * @return $this
     */
    public function setFailedCount($failed_count)
    {
        $this->container['failed_count'] = $failed_count;

        return $this;
    }

    /**
     * Gets limit_change_events
     *
     * @return \Sematext\STCloud\Model\LimitChangeEventDTO[]
     */
    public function getLimitChangeEvents()
    {
        return $this->container['limit_change_events'];
    }

    /**
     * Sets limit_change_events
     *
     * @param \Sematext\STCloud\Model\LimitChangeEventDTO[] $limit_change_events limit_change_events
     *
     * @return $this
     */
    public function setLimitChangeEvents($limit_change_events)
    {
        $this->container['limit_change_events'] = $limit_change_events;

        return $this;
    }

    /**
     * Gets max_allowed_mb
     *
     * @return int
     */
    public function getMaxAllowedMb()
    {
        return $this->container['max_allowed_mb'];
    }

    /**
     * Sets max_allowed_mb
     *
     * @param int $max_allowed_mb max_allowed_mb
     *
     * @return $this
     */
    public function setMaxAllowedMb($max_allowed_mb)
    {
        $this->container['max_allowed_mb'] = $max_allowed_mb;

        return $this;
    }

    /**
     * Gets max_limit_mb
     *
     * @return int
     */
    public function getMaxLimitMb()
    {
        return $this->container['max_limit_mb'];
    }

    /**
     * Sets max_limit_mb
     *
     * @param int $max_limit_mb max_limit_mb
     *
     * @return $this
     */
    public function setMaxLimitMb($max_limit_mb)
    {
        $this->container['max_limit_mb'] = $max_limit_mb;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets volume_change_events
     *
     * @return \Sematext\STCloud\Model\LimitChangeEventDTO[]
     */
    public function getVolumeChangeEvents()
    {
        return $this->container['volume_change_events'];
    }

    /**
     * Sets volume_change_events
     *
     * @param \Sematext\STCloud\Model\LimitChangeEventDTO[] $volume_change_events volume_change_events
     *
     * @return $this
     */
    public function setVolumeChangeEvents($volume_change_events)
    {
        $this->container['volume_change_events'] = $volume_change_events;

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