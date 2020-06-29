<?php
/**
 * NotificationIntegration
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
 * Swagger Codegen version: 2.4.12
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
 * NotificationIntegration Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationIntegration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationIntegration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applicability' => 'string',
        'create_date' => '\DateTime',
        'created_by_owner' => 'bool',
        'creator_id' => 'int',
        'id' => 'int',
        'integration_type' => 'string',
        'name' => 'string',
        'params' => 'map[string,string]',
        'state' => 'string',
        'user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applicability' => null,
        'create_date' => 'date-time',
        'created_by_owner' => null,
        'creator_id' => 'int64',
        'id' => 'int64',
        'integration_type' => null,
        'name' => null,
        'params' => null,
        'state' => null,
        'user_id' => 'int64'
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
        'applicability' => 'applicability',
        'create_date' => 'createDate',
        'created_by_owner' => 'createdByOwner',
        'creator_id' => 'creatorId',
        'id' => 'id',
        'integration_type' => 'integrationType',
        'name' => 'name',
        'params' => 'params',
        'state' => 'state',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicability' => 'setApplicability',
        'create_date' => 'setCreateDate',
        'created_by_owner' => 'setCreatedByOwner',
        'creator_id' => 'setCreatorId',
        'id' => 'setId',
        'integration_type' => 'setIntegrationType',
        'name' => 'setName',
        'params' => 'setParams',
        'state' => 'setState',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicability' => 'getApplicability',
        'create_date' => 'getCreateDate',
        'created_by_owner' => 'getCreatedByOwner',
        'creator_id' => 'getCreatorId',
        'id' => 'getId',
        'integration_type' => 'getIntegrationType',
        'name' => 'getName',
        'params' => 'getParams',
        'state' => 'getState',
        'user_id' => 'getUserId'
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

    const APPLICABILITY_NONE = 'NONE';
    const APPLICABILITY_USE_ALWAYS = 'USE_ALWAYS';
    const INTEGRATION_TYPE_PAGER_DUTY = 'PAGER_DUTY';
    const INTEGRATION_TYPE_NAGIOS = 'NAGIOS';
    const INTEGRATION_TYPE_WEB_HOOKS = 'WEB_HOOKS';
    const INTEGRATION_TYPE_WEB_HOOKS_TEMPLATE = 'WEB_HOOKS_TEMPLATE';
    const INTEGRATION_TYPE_HIP_CHAT = 'HIP_CHAT';
    const INTEGRATION_TYPE_EMAIL_LIST = 'EMAIL_LIST';
    const INTEGRATION_TYPE_TEMPORARY_EMAIL_LIST = 'TEMPORARY_EMAIL_LIST';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_DISABLED = 'DISABLED';
    const STATE_DELETED = 'DELETED';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicabilityAllowableValues()
    {
        return [
            self::APPLICABILITY_NONE,
            self::APPLICABILITY_USE_ALWAYS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationTypeAllowableValues()
    {
        return [
            self::INTEGRATION_TYPE_PAGER_DUTY,
            self::INTEGRATION_TYPE_NAGIOS,
            self::INTEGRATION_TYPE_WEB_HOOKS,
            self::INTEGRATION_TYPE_WEB_HOOKS_TEMPLATE,
            self::INTEGRATION_TYPE_HIP_CHAT,
            self::INTEGRATION_TYPE_EMAIL_LIST,
            self::INTEGRATION_TYPE_TEMPORARY_EMAIL_LIST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
            self::STATE_DELETED,
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
        $this->container['applicability'] = isset($data['applicability']) ? $data['applicability'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['created_by_owner'] = isset($data['created_by_owner']) ? $data['created_by_owner'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApplicabilityAllowableValues();
        if (!is_null($this->container['applicability']) && !in_array($this->container['applicability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'applicability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($this->container['integration_type']) && !in_array($this->container['integration_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'integration_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets applicability
     *
     * @return string
     */
    public function getApplicability()
    {
        return $this->container['applicability'];
    }

    /**
     * Sets applicability
     *
     * @param string $applicability applicability
     *
     * @return $this
     */
    public function setApplicability($applicability)
    {
        $allowedValues = $this->getApplicabilityAllowableValues();
        if (!is_null($applicability) && !in_array($applicability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applicability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applicability'] = $applicability;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets created_by_owner
     *
     * @return bool
     */
    public function getCreatedByOwner()
    {
        return $this->container['created_by_owner'];
    }

    /**
     * Sets created_by_owner
     *
     * @param bool $created_by_owner created_by_owner
     *
     * @return $this
     */
    public function setCreatedByOwner($created_by_owner)
    {
        $this->container['created_by_owner'] = $created_by_owner;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

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
     * Gets integration_type
     *
     * @return string
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param string $integration_type integration_type
     *
     * @return $this
     */
    public function setIntegrationType($integration_type)
    {
        $allowedValues = $this->getIntegrationTypeAllowableValues();
        if (!is_null($integration_type) && !in_array($integration_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'integration_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['integration_type'] = $integration_type;

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
     * Gets params
     *
     * @return map[string,string]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param map[string,string] $params params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
