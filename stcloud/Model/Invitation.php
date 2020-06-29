<?php
/**
 * Invitation
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
 * Invitation Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invitation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app' => '\sematext\stcloud\Model\App',
        'apps' => '\sematext\stcloud\Model\App[]',
        'id' => 'int',
        'invite_date' => '\DateTime',
        'invite_status' => 'string',
        'invitee_email' => 'string',
        'invitee_role' => 'string',
        'invitee_status' => 'string',
        'inviter_email' => 'string',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app' => null,
        'apps' => null,
        'id' => 'int64',
        'invite_date' => 'date-time',
        'invite_status' => null,
        'invitee_email' => null,
        'invitee_role' => null,
        'invitee_status' => null,
        'inviter_email' => null,
        'uuid' => null
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
        'app' => 'app',
        'apps' => 'apps',
        'id' => 'id',
        'invite_date' => 'inviteDate',
        'invite_status' => 'inviteStatus',
        'invitee_email' => 'inviteeEmail',
        'invitee_role' => 'inviteeRole',
        'invitee_status' => 'inviteeStatus',
        'inviter_email' => 'inviterEmail',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app' => 'setApp',
        'apps' => 'setApps',
        'id' => 'setId',
        'invite_date' => 'setInviteDate',
        'invite_status' => 'setInviteStatus',
        'invitee_email' => 'setInviteeEmail',
        'invitee_role' => 'setInviteeRole',
        'invitee_status' => 'setInviteeStatus',
        'inviter_email' => 'setInviterEmail',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app' => 'getApp',
        'apps' => 'getApps',
        'id' => 'getId',
        'invite_date' => 'getInviteDate',
        'invite_status' => 'getInviteStatus',
        'invitee_email' => 'getInviteeEmail',
        'invitee_role' => 'getInviteeRole',
        'invitee_status' => 'getInviteeStatus',
        'inviter_email' => 'getInviterEmail',
        'uuid' => 'getUuid'
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

    const INVITE_STATUS_PENDING = 'PENDING';
    const INVITE_STATUS_ACCEPTED = 'ACCEPTED';
    const INVITE_STATUS_CANCELLED = 'CANCELLED';
    const INVITE_STATUS_DECLINED = 'DECLINED';
    const INVITEE_ROLE_SUPER_USER = 'SUPER_USER';
    const INVITEE_ROLE_OWNER = 'OWNER';
    const INVITEE_ROLE_ADMIN = 'ADMIN';
    const INVITEE_ROLE_USER = 'USER';
    const INVITEE_ROLE_DEMO = 'DEMO';
    const INVITEE_ROLE_ANONYMOUS = 'ANONYMOUS';
    const INVITEE_STATUS_INACTIVE = 'INACTIVE';
    const INVITEE_STATUS_ACTIVE = 'ACTIVE';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInviteStatusAllowableValues()
    {
        return [
            self::INVITE_STATUS_PENDING,
            self::INVITE_STATUS_ACCEPTED,
            self::INVITE_STATUS_CANCELLED,
            self::INVITE_STATUS_DECLINED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInviteeRoleAllowableValues()
    {
        return [
            self::INVITEE_ROLE_SUPER_USER,
            self::INVITEE_ROLE_OWNER,
            self::INVITEE_ROLE_ADMIN,
            self::INVITEE_ROLE_USER,
            self::INVITEE_ROLE_DEMO,
            self::INVITEE_ROLE_ANONYMOUS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInviteeStatusAllowableValues()
    {
        return [
            self::INVITEE_STATUS_INACTIVE,
            self::INVITEE_STATUS_ACTIVE,
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['apps'] = isset($data['apps']) ? $data['apps'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invite_date'] = isset($data['invite_date']) ? $data['invite_date'] : null;
        $this->container['invite_status'] = isset($data['invite_status']) ? $data['invite_status'] : null;
        $this->container['invitee_email'] = isset($data['invitee_email']) ? $data['invitee_email'] : null;
        $this->container['invitee_role'] = isset($data['invitee_role']) ? $data['invitee_role'] : null;
        $this->container['invitee_status'] = isset($data['invitee_status']) ? $data['invitee_status'] : null;
        $this->container['inviter_email'] = isset($data['inviter_email']) ? $data['inviter_email'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInviteStatusAllowableValues();
        if (!is_null($this->container['invite_status']) && !in_array($this->container['invite_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invite_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInviteeRoleAllowableValues();
        if (!is_null($this->container['invitee_role']) && !in_array($this->container['invitee_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invitee_role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInviteeStatusAllowableValues();
        if (!is_null($this->container['invitee_status']) && !in_array($this->container['invitee_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invitee_status', must be one of '%s'",
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
     * Gets app
     *
     * @return \sematext\stcloud\Model\App
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \sematext\stcloud\Model\App $app For invite request, only app.id needs to be set.
     *
     * @return $this
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

        return $this;
    }

    /**
     * Gets apps
     *
     * @return \sematext\stcloud\Model\App[]
     */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
     * Sets apps
     *
     * @param \sematext\stcloud\Model\App[] $apps For invite request, only apps.id needs to be set.
     *
     * @return $this
     */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;

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
     * Gets invite_date
     *
     * @return \DateTime
     */
    public function getInviteDate()
    {
        return $this->container['invite_date'];
    }

    /**
     * Sets invite_date
     *
     * @param \DateTime $invite_date invite_date
     *
     * @return $this
     */
    public function setInviteDate($invite_date)
    {
        $this->container['invite_date'] = $invite_date;

        return $this;
    }

    /**
     * Gets invite_status
     *
     * @return string
     */
    public function getInviteStatus()
    {
        return $this->container['invite_status'];
    }

    /**
     * Sets invite_status
     *
     * @param string $invite_status invite_status
     *
     * @return $this
     */
    public function setInviteStatus($invite_status)
    {
        $allowedValues = $this->getInviteStatusAllowableValues();
        if (!is_null($invite_status) && !in_array($invite_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invite_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invite_status'] = $invite_status;

        return $this;
    }

    /**
     * Gets invitee_email
     *
     * @return string
     */
    public function getInviteeEmail()
    {
        return $this->container['invitee_email'];
    }

    /**
     * Sets invitee_email
     *
     * @param string $invitee_email invitee_email
     *
     * @return $this
     */
    public function setInviteeEmail($invitee_email)
    {
        $this->container['invitee_email'] = $invitee_email;

        return $this;
    }

    /**
     * Gets invitee_role
     *
     * @return string
     */
    public function getInviteeRole()
    {
        return $this->container['invitee_role'];
    }

    /**
     * Sets invitee_role
     *
     * @param string $invitee_role invitee_role
     *
     * @return $this
     */
    public function setInviteeRole($invitee_role)
    {
        $allowedValues = $this->getInviteeRoleAllowableValues();
        if (!is_null($invitee_role) && !in_array($invitee_role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invitee_role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invitee_role'] = $invitee_role;

        return $this;
    }

    /**
     * Gets invitee_status
     *
     * @return string
     */
    public function getInviteeStatus()
    {
        return $this->container['invitee_status'];
    }

    /**
     * Sets invitee_status
     *
     * @param string $invitee_status invitee_status
     *
     * @return $this
     */
    public function setInviteeStatus($invitee_status)
    {
        $allowedValues = $this->getInviteeStatusAllowableValues();
        if (!is_null($invitee_status) && !in_array($invitee_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invitee_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invitee_status'] = $invitee_status;

        return $this;
    }

    /**
     * Gets inviter_email
     *
     * @return string
     */
    public function getInviterEmail()
    {
        return $this->container['inviter_email'];
    }

    /**
     * Sets inviter_email
     *
     * @param string $inviter_email inviter_email
     *
     * @return $this
     */
    public function setInviterEmail($inviter_email)
    {
        $this->container['inviter_email'] = $inviter_email;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
