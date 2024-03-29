<?php
/**
 * MinPeriodFeePeriod
 *
 * PHP version 5
 *
 * @category Class
 * @package  sematext\stcloud
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
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sematext\stcloud\Model;

use \ArrayAccess;
use \sematext\stcloud\ObjectSerializer;

/**
 * MinPeriodFeePeriod Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MinPeriodFeePeriod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MinPeriodFeePeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'browser_monitors' => 'int',
'discount' => 'float',
'from_date' => '\DateTime',
'http_monitors' => 'int',
'id' => 'int',
'ingestion_period_fee_amount' => 'float',
'min_period_fee_amount' => 'float',
'overage_percentage' => 'float',
'plan_data_limit' => 'int',
'storage_period_fee_amount' => 'float',
'to_date' => '\DateTime',
'used_plan' => 'string',
'used_plan_period_fee' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'browser_monitors' => 'int32',
'discount' => null,
'from_date' => 'date-time',
'http_monitors' => 'int32',
'id' => 'int64',
'ingestion_period_fee_amount' => null,
'min_period_fee_amount' => null,
'overage_percentage' => null,
'plan_data_limit' => 'int64',
'storage_period_fee_amount' => null,
'to_date' => 'date-time',
'used_plan' => null,
'used_plan_period_fee' => null    ];

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
        'browser_monitors' => 'browserMonitors',
'discount' => 'discount',
'from_date' => 'fromDate',
'http_monitors' => 'httpMonitors',
'id' => 'id',
'ingestion_period_fee_amount' => 'ingestionPeriodFeeAmount',
'min_period_fee_amount' => 'minPeriodFeeAmount',
'overage_percentage' => 'overagePercentage',
'plan_data_limit' => 'planDataLimit',
'storage_period_fee_amount' => 'storagePeriodFeeAmount',
'to_date' => 'toDate',
'used_plan' => 'usedPlan',
'used_plan_period_fee' => 'usedPlanPeriodFee'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'browser_monitors' => 'setBrowserMonitors',
'discount' => 'setDiscount',
'from_date' => 'setFromDate',
'http_monitors' => 'setHttpMonitors',
'id' => 'setId',
'ingestion_period_fee_amount' => 'setIngestionPeriodFeeAmount',
'min_period_fee_amount' => 'setMinPeriodFeeAmount',
'overage_percentage' => 'setOveragePercentage',
'plan_data_limit' => 'setPlanDataLimit',
'storage_period_fee_amount' => 'setStoragePeriodFeeAmount',
'to_date' => 'setToDate',
'used_plan' => 'setUsedPlan',
'used_plan_period_fee' => 'setUsedPlanPeriodFee'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'browser_monitors' => 'getBrowserMonitors',
'discount' => 'getDiscount',
'from_date' => 'getFromDate',
'http_monitors' => 'getHttpMonitors',
'id' => 'getId',
'ingestion_period_fee_amount' => 'getIngestionPeriodFeeAmount',
'min_period_fee_amount' => 'getMinPeriodFeeAmount',
'overage_percentage' => 'getOveragePercentage',
'plan_data_limit' => 'getPlanDataLimit',
'storage_period_fee_amount' => 'getStoragePeriodFeeAmount',
'to_date' => 'getToDate',
'used_plan' => 'getUsedPlan',
'used_plan_period_fee' => 'getUsedPlanPeriodFee'    ];

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
        $this->container['browser_monitors'] = isset($data['browser_monitors']) ? $data['browser_monitors'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['http_monitors'] = isset($data['http_monitors']) ? $data['http_monitors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ingestion_period_fee_amount'] = isset($data['ingestion_period_fee_amount']) ? $data['ingestion_period_fee_amount'] : null;
        $this->container['min_period_fee_amount'] = isset($data['min_period_fee_amount']) ? $data['min_period_fee_amount'] : null;
        $this->container['overage_percentage'] = isset($data['overage_percentage']) ? $data['overage_percentage'] : null;
        $this->container['plan_data_limit'] = isset($data['plan_data_limit']) ? $data['plan_data_limit'] : null;
        $this->container['storage_period_fee_amount'] = isset($data['storage_period_fee_amount']) ? $data['storage_period_fee_amount'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['used_plan'] = isset($data['used_plan']) ? $data['used_plan'] : null;
        $this->container['used_plan_period_fee'] = isset($data['used_plan_period_fee']) ? $data['used_plan_period_fee'] : null;
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
     * Gets browser_monitors
     *
     * @return int
     */
    public function getBrowserMonitors()
    {
        return $this->container['browser_monitors'];
    }

    /**
     * Sets browser_monitors
     *
     * @param int $browser_monitors browser_monitors
     *
     * @return $this
     */
    public function setBrowserMonitors($browser_monitors)
    {
        $this->container['browser_monitors'] = $browser_monitors;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date from_date
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets http_monitors
     *
     * @return int
     */
    public function getHttpMonitors()
    {
        return $this->container['http_monitors'];
    }

    /**
     * Sets http_monitors
     *
     * @param int $http_monitors http_monitors
     *
     * @return $this
     */
    public function setHttpMonitors($http_monitors)
    {
        $this->container['http_monitors'] = $http_monitors;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ingestion_period_fee_amount
     *
     * @return float
     */
    public function getIngestionPeriodFeeAmount()
    {
        return $this->container['ingestion_period_fee_amount'];
    }

    /**
     * Sets ingestion_period_fee_amount
     *
     * @param float $ingestion_period_fee_amount ingestion_period_fee_amount
     *
     * @return $this
     */
    public function setIngestionPeriodFeeAmount($ingestion_period_fee_amount)
    {
        $this->container['ingestion_period_fee_amount'] = $ingestion_period_fee_amount;

        return $this;
    }

    /**
     * Gets min_period_fee_amount
     *
     * @return float
     */
    public function getMinPeriodFeeAmount()
    {
        return $this->container['min_period_fee_amount'];
    }

    /**
     * Sets min_period_fee_amount
     *
     * @param float $min_period_fee_amount min_period_fee_amount
     *
     * @return $this
     */
    public function setMinPeriodFeeAmount($min_period_fee_amount)
    {
        $this->container['min_period_fee_amount'] = $min_period_fee_amount;

        return $this;
    }

    /**
     * Gets overage_percentage
     *
     * @return float
     */
    public function getOveragePercentage()
    {
        return $this->container['overage_percentage'];
    }

    /**
     * Sets overage_percentage
     *
     * @param float $overage_percentage overage_percentage
     *
     * @return $this
     */
    public function setOveragePercentage($overage_percentage)
    {
        $this->container['overage_percentage'] = $overage_percentage;

        return $this;
    }

    /**
     * Gets plan_data_limit
     *
     * @return int
     */
    public function getPlanDataLimit()
    {
        return $this->container['plan_data_limit'];
    }

    /**
     * Sets plan_data_limit
     *
     * @param int $plan_data_limit plan_data_limit
     *
     * @return $this
     */
    public function setPlanDataLimit($plan_data_limit)
    {
        $this->container['plan_data_limit'] = $plan_data_limit;

        return $this;
    }

    /**
     * Gets storage_period_fee_amount
     *
     * @return float
     */
    public function getStoragePeriodFeeAmount()
    {
        return $this->container['storage_period_fee_amount'];
    }

    /**
     * Sets storage_period_fee_amount
     *
     * @param float $storage_period_fee_amount storage_period_fee_amount
     *
     * @return $this
     */
    public function setStoragePeriodFeeAmount($storage_period_fee_amount)
    {
        $this->container['storage_period_fee_amount'] = $storage_period_fee_amount;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date to_date
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets used_plan
     *
     * @return string
     */
    public function getUsedPlan()
    {
        return $this->container['used_plan'];
    }

    /**
     * Sets used_plan
     *
     * @param string $used_plan used_plan
     *
     * @return $this
     */
    public function setUsedPlan($used_plan)
    {
        $this->container['used_plan'] = $used_plan;

        return $this;
    }

    /**
     * Gets used_plan_period_fee
     *
     * @return float
     */
    public function getUsedPlanPeriodFee()
    {
        return $this->container['used_plan_period_fee'];
    }

    /**
     * Sets used_plan_period_fee
     *
     * @param float $used_plan_period_fee used_plan_period_fee
     *
     * @return $this
     */
    public function setUsedPlanPeriodFee($used_plan_period_fee)
    {
        $this->container['used_plan_period_fee'] = $used_plan_period_fee;

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
