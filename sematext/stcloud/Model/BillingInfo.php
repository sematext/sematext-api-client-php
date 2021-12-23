<?php
/**
 * BillingInfo
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
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sematext\stcloud\Model;

use ArrayAccess;
use sematext\stcloud\ObjectSerializer;

/**
 * BillingInfo Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingInfo implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'credit_card_id' => 'int',
    'payment_method' => 'string',
    'plan_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'credit_card_id' => 'int64',
    'payment_method' => null,
    'plan_id' => 'int64'    ];

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
        'credit_card_id' => 'creditCardId',
    'payment_method' => 'paymentMethod',
    'plan_id' => 'planId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_card_id' => 'setCreditCardId',
    'payment_method' => 'setPaymentMethod',
    'plan_id' => 'setPlanId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_card_id' => 'getCreditCardId',
    'payment_method' => 'getPaymentMethod',
    'plan_id' => 'getPlanId'    ];

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
        $this->container['credit_card_id'] = isset($data['credit_card_id']) ? $data['credit_card_id'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
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
     * Gets credit_card_id
     *
     * @return int
     */
    public function getCreditCardId()
    {
        return $this->container['credit_card_id'];
    }

    /**
     * Sets credit_card_id
     *
     * @param int $credit_card_id credit_card_id
     *
     * @return $this
     */
    public function setCreditCardId($credit_card_id)
    {
        $this->container['credit_card_id'] = $credit_card_id;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return int
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param int $plan_id plan_id
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

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
