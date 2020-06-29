<?php
/**
 * App
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
 * App Class Doc Comment
 *
 * @category Class
 * @package  sematext\stcloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class App implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'App';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ajax_threshold' => 'int',
        'app_type' => 'string',
        'app_type_id' => 'int',
        'creator_email' => 'string',
        'credit_card_expiry' => 'string',
        'credit_card_number' => 'string',
        'description' => 'string',
        'display_status' => 'string',
        'first_data_saved_date' => 'int',
        'id' => 'int',
        'integration' => '\sematext\stcloud\Model\ServiceIntegration',
        'last_data_received_date' => 'int',
        'last_data_saved_date' => 'int',
        'logged_in_user_app_role' => 'string',
        'monthly_invoice_account' => 'bool',
        'name' => 'string',
        'owner_email' => 'string',
        'owning_organization' => '\sematext\stcloud\Model\BasicOrganizationDto',
        'page_load_threshold' => 'int',
        'payment_method_id' => 'int',
        'plan' => '\sematext\stcloud\Model\Plan',
        'prepaid_account' => 'bool',
        'status' => 'string',
        'token' => 'string',
        'trial_end_date' => 'int',
        'url_group_limit' => 'int',
        'user_roles' => '\sematext\stcloud\Model\UserRole[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ajax_threshold' => 'int64',
        'app_type' => null,
        'app_type_id' => 'int64',
        'creator_email' => null,
        'credit_card_expiry' => null,
        'credit_card_number' => null,
        'description' => null,
        'display_status' => null,
        'first_data_saved_date' => 'int64',
        'id' => 'int64',
        'integration' => null,
        'last_data_received_date' => 'int64',
        'last_data_saved_date' => 'int64',
        'logged_in_user_app_role' => null,
        'monthly_invoice_account' => null,
        'name' => null,
        'owner_email' => null,
        'owning_organization' => null,
        'page_load_threshold' => 'int64',
        'payment_method_id' => 'int64',
        'plan' => null,
        'prepaid_account' => null,
        'status' => null,
        'token' => null,
        'trial_end_date' => 'int64',
        'url_group_limit' => 'int32',
        'user_roles' => null
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
        'ajax_threshold' => 'ajaxThreshold',
        'app_type' => 'appType',
        'app_type_id' => 'appTypeId',
        'creator_email' => 'creatorEmail',
        'credit_card_expiry' => 'creditCardExpiry',
        'credit_card_number' => 'creditCardNumber',
        'description' => 'description',
        'display_status' => 'displayStatus',
        'first_data_saved_date' => 'firstDataSavedDate',
        'id' => 'id',
        'integration' => 'integration',
        'last_data_received_date' => 'lastDataReceivedDate',
        'last_data_saved_date' => 'lastDataSavedDate',
        'logged_in_user_app_role' => 'loggedInUserAppRole',
        'monthly_invoice_account' => 'monthlyInvoiceAccount',
        'name' => 'name',
        'owner_email' => 'ownerEmail',
        'owning_organization' => 'owningOrganization',
        'page_load_threshold' => 'pageLoadThreshold',
        'payment_method_id' => 'paymentMethodId',
        'plan' => 'plan',
        'prepaid_account' => 'prepaidAccount',
        'status' => 'status',
        'token' => 'token',
        'trial_end_date' => 'trialEndDate',
        'url_group_limit' => 'urlGroupLimit',
        'user_roles' => 'userRoles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ajax_threshold' => 'setAjaxThreshold',
        'app_type' => 'setAppType',
        'app_type_id' => 'setAppTypeId',
        'creator_email' => 'setCreatorEmail',
        'credit_card_expiry' => 'setCreditCardExpiry',
        'credit_card_number' => 'setCreditCardNumber',
        'description' => 'setDescription',
        'display_status' => 'setDisplayStatus',
        'first_data_saved_date' => 'setFirstDataSavedDate',
        'id' => 'setId',
        'integration' => 'setIntegration',
        'last_data_received_date' => 'setLastDataReceivedDate',
        'last_data_saved_date' => 'setLastDataSavedDate',
        'logged_in_user_app_role' => 'setLoggedInUserAppRole',
        'monthly_invoice_account' => 'setMonthlyInvoiceAccount',
        'name' => 'setName',
        'owner_email' => 'setOwnerEmail',
        'owning_organization' => 'setOwningOrganization',
        'page_load_threshold' => 'setPageLoadThreshold',
        'payment_method_id' => 'setPaymentMethodId',
        'plan' => 'setPlan',
        'prepaid_account' => 'setPrepaidAccount',
        'status' => 'setStatus',
        'token' => 'setToken',
        'trial_end_date' => 'setTrialEndDate',
        'url_group_limit' => 'setUrlGroupLimit',
        'user_roles' => 'setUserRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ajax_threshold' => 'getAjaxThreshold',
        'app_type' => 'getAppType',
        'app_type_id' => 'getAppTypeId',
        'creator_email' => 'getCreatorEmail',
        'credit_card_expiry' => 'getCreditCardExpiry',
        'credit_card_number' => 'getCreditCardNumber',
        'description' => 'getDescription',
        'display_status' => 'getDisplayStatus',
        'first_data_saved_date' => 'getFirstDataSavedDate',
        'id' => 'getId',
        'integration' => 'getIntegration',
        'last_data_received_date' => 'getLastDataReceivedDate',
        'last_data_saved_date' => 'getLastDataSavedDate',
        'logged_in_user_app_role' => 'getLoggedInUserAppRole',
        'monthly_invoice_account' => 'getMonthlyInvoiceAccount',
        'name' => 'getName',
        'owner_email' => 'getOwnerEmail',
        'owning_organization' => 'getOwningOrganization',
        'page_load_threshold' => 'getPageLoadThreshold',
        'payment_method_id' => 'getPaymentMethodId',
        'plan' => 'getPlan',
        'prepaid_account' => 'getPrepaidAccount',
        'status' => 'getStatus',
        'token' => 'getToken',
        'trial_end_date' => 'getTrialEndDate',
        'url_group_limit' => 'getUrlGroupLimit',
        'user_roles' => 'getUserRoles'
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
        $this->container['ajax_threshold'] = isset($data['ajax_threshold']) ? $data['ajax_threshold'] : null;
        $this->container['app_type'] = isset($data['app_type']) ? $data['app_type'] : null;
        $this->container['app_type_id'] = isset($data['app_type_id']) ? $data['app_type_id'] : null;
        $this->container['creator_email'] = isset($data['creator_email']) ? $data['creator_email'] : null;
        $this->container['credit_card_expiry'] = isset($data['credit_card_expiry']) ? $data['credit_card_expiry'] : null;
        $this->container['credit_card_number'] = isset($data['credit_card_number']) ? $data['credit_card_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_status'] = isset($data['display_status']) ? $data['display_status'] : null;
        $this->container['first_data_saved_date'] = isset($data['first_data_saved_date']) ? $data['first_data_saved_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['last_data_received_date'] = isset($data['last_data_received_date']) ? $data['last_data_received_date'] : null;
        $this->container['last_data_saved_date'] = isset($data['last_data_saved_date']) ? $data['last_data_saved_date'] : null;
        $this->container['logged_in_user_app_role'] = isset($data['logged_in_user_app_role']) ? $data['logged_in_user_app_role'] : null;
        $this->container['monthly_invoice_account'] = isset($data['monthly_invoice_account']) ? $data['monthly_invoice_account'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner_email'] = isset($data['owner_email']) ? $data['owner_email'] : null;
        $this->container['owning_organization'] = isset($data['owning_organization']) ? $data['owning_organization'] : null;
        $this->container['page_load_threshold'] = isset($data['page_load_threshold']) ? $data['page_load_threshold'] : null;
        $this->container['payment_method_id'] = isset($data['payment_method_id']) ? $data['payment_method_id'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['prepaid_account'] = isset($data['prepaid_account']) ? $data['prepaid_account'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['trial_end_date'] = isset($data['trial_end_date']) ? $data['trial_end_date'] : null;
        $this->container['url_group_limit'] = isset($data['url_group_limit']) ? $data['url_group_limit'] : null;
        $this->container['user_roles'] = isset($data['user_roles']) ? $data['user_roles'] : null;
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
     * Gets ajax_threshold
     *
     * @return int
     */
    public function getAjaxThreshold()
    {
        return $this->container['ajax_threshold'];
    }

    /**
     * Sets ajax_threshold
     *
     * @param int $ajax_threshold ajax_threshold
     *
     * @return $this
     */
    public function setAjaxThreshold($ajax_threshold)
    {
        $this->container['ajax_threshold'] = $ajax_threshold;

        return $this;
    }

    /**
     * Gets app_type
     *
     * @return string
     */
    public function getAppType()
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string $app_type app_type
     *
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets app_type_id
     *
     * @return int
     */
    public function getAppTypeId()
    {
        return $this->container['app_type_id'];
    }

    /**
     * Sets app_type_id
     *
     * @param int $app_type_id app_type_id
     *
     * @return $this
     */
    public function setAppTypeId($app_type_id)
    {
        $this->container['app_type_id'] = $app_type_id;

        return $this;
    }

    /**
     * Gets creator_email
     *
     * @return string
     */
    public function getCreatorEmail()
    {
        return $this->container['creator_email'];
    }

    /**
     * Sets creator_email
     *
     * @param string $creator_email creator_email
     *
     * @return $this
     */
    public function setCreatorEmail($creator_email)
    {
        $this->container['creator_email'] = $creator_email;

        return $this;
    }

    /**
     * Gets credit_card_expiry
     *
     * @return string
     */
    public function getCreditCardExpiry()
    {
        return $this->container['credit_card_expiry'];
    }

    /**
     * Sets credit_card_expiry
     *
     * @param string $credit_card_expiry credit_card_expiry
     *
     * @return $this
     */
    public function setCreditCardExpiry($credit_card_expiry)
    {
        $this->container['credit_card_expiry'] = $credit_card_expiry;

        return $this;
    }

    /**
     * Gets credit_card_number
     *
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->container['credit_card_number'];
    }

    /**
     * Sets credit_card_number
     *
     * @param string $credit_card_number credit_card_number
     *
     * @return $this
     */
    public function setCreditCardNumber($credit_card_number)
    {
        $this->container['credit_card_number'] = $credit_card_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_status
     *
     * @return string
     */
    public function getDisplayStatus()
    {
        return $this->container['display_status'];
    }

    /**
     * Sets display_status
     *
     * @param string $display_status display_status
     *
     * @return $this
     */
    public function setDisplayStatus($display_status)
    {
        $this->container['display_status'] = $display_status;

        return $this;
    }

    /**
     * Gets first_data_saved_date
     *
     * @return int
     */
    public function getFirstDataSavedDate()
    {
        return $this->container['first_data_saved_date'];
    }

    /**
     * Sets first_data_saved_date
     *
     * @param int $first_data_saved_date first_data_saved_date
     *
     * @return $this
     */
    public function setFirstDataSavedDate($first_data_saved_date)
    {
        $this->container['first_data_saved_date'] = $first_data_saved_date;

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
     * Gets integration
     *
     * @return \sematext\stcloud\Model\ServiceIntegration
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \sematext\stcloud\Model\ServiceIntegration $integration integration
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets last_data_received_date
     *
     * @return int
     */
    public function getLastDataReceivedDate()
    {
        return $this->container['last_data_received_date'];
    }

    /**
     * Sets last_data_received_date
     *
     * @param int $last_data_received_date last_data_received_date
     *
     * @return $this
     */
    public function setLastDataReceivedDate($last_data_received_date)
    {
        $this->container['last_data_received_date'] = $last_data_received_date;

        return $this;
    }

    /**
     * Gets last_data_saved_date
     *
     * @return int
     */
    public function getLastDataSavedDate()
    {
        return $this->container['last_data_saved_date'];
    }

    /**
     * Sets last_data_saved_date
     *
     * @param int $last_data_saved_date last_data_saved_date
     *
     * @return $this
     */
    public function setLastDataSavedDate($last_data_saved_date)
    {
        $this->container['last_data_saved_date'] = $last_data_saved_date;

        return $this;
    }

    /**
     * Gets logged_in_user_app_role
     *
     * @return string
     */
    public function getLoggedInUserAppRole()
    {
        return $this->container['logged_in_user_app_role'];
    }

    /**
     * Sets logged_in_user_app_role
     *
     * @param string $logged_in_user_app_role logged_in_user_app_role
     *
     * @return $this
     */
    public function setLoggedInUserAppRole($logged_in_user_app_role)
    {
        $this->container['logged_in_user_app_role'] = $logged_in_user_app_role;

        return $this;
    }

    /**
     * Gets monthly_invoice_account
     *
     * @return bool
     */
    public function getMonthlyInvoiceAccount()
    {
        return $this->container['monthly_invoice_account'];
    }

    /**
     * Sets monthly_invoice_account
     *
     * @param bool $monthly_invoice_account monthly_invoice_account
     *
     * @return $this
     */
    public function setMonthlyInvoiceAccount($monthly_invoice_account)
    {
        $this->container['monthly_invoice_account'] = $monthly_invoice_account;

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
     * Gets owner_email
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string $owner_email owner_email
     *
     * @return $this
     */
    public function setOwnerEmail($owner_email)
    {
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets owning_organization
     *
     * @return \sematext\stcloud\Model\BasicOrganizationDto
     */
    public function getOwningOrganization()
    {
        return $this->container['owning_organization'];
    }

    /**
     * Sets owning_organization
     *
     * @param \sematext\stcloud\Model\BasicOrganizationDto $owning_organization owning_organization
     *
     * @return $this
     */
    public function setOwningOrganization($owning_organization)
    {
        $this->container['owning_organization'] = $owning_organization;

        return $this;
    }

    /**
     * Gets page_load_threshold
     *
     * @return int
     */
    public function getPageLoadThreshold()
    {
        return $this->container['page_load_threshold'];
    }

    /**
     * Sets page_load_threshold
     *
     * @param int $page_load_threshold page_load_threshold
     *
     * @return $this
     */
    public function setPageLoadThreshold($page_load_threshold)
    {
        $this->container['page_load_threshold'] = $page_load_threshold;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return int
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param int $payment_method_id payment_method_id
     *
     * @return $this
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets plan
     *
     * @return \sematext\stcloud\Model\Plan
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param \sematext\stcloud\Model\Plan $plan plan
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets prepaid_account
     *
     * @return bool
     */
    public function getPrepaidAccount()
    {
        return $this->container['prepaid_account'];
    }

    /**
     * Sets prepaid_account
     *
     * @param bool $prepaid_account prepaid_account
     *
     * @return $this
     */
    public function setPrepaidAccount($prepaid_account)
    {
        $this->container['prepaid_account'] = $prepaid_account;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets trial_end_date
     *
     * @return int
     */
    public function getTrialEndDate()
    {
        return $this->container['trial_end_date'];
    }

    /**
     * Sets trial_end_date
     *
     * @param int $trial_end_date trial_end_date
     *
     * @return $this
     */
    public function setTrialEndDate($trial_end_date)
    {
        $this->container['trial_end_date'] = $trial_end_date;

        return $this;
    }

    /**
     * Gets url_group_limit
     *
     * @return int
     */
    public function getUrlGroupLimit()
    {
        return $this->container['url_group_limit'];
    }

    /**
     * Sets url_group_limit
     *
     * @param int $url_group_limit url_group_limit
     *
     * @return $this
     */
    public function setUrlGroupLimit($url_group_limit)
    {
        $this->container['url_group_limit'] = $url_group_limit;

        return $this;
    }

    /**
     * Gets user_roles
     *
     * @return \sematext\stcloud\Model\UserRole[]
     */
    public function getUserRoles()
    {
        return $this->container['user_roles'];
    }

    /**
     * Sets user_roles
     *
     * @param \sematext\stcloud\Model\UserRole[] $user_roles user_roles
     *
     * @return $this
     */
    public function setUserRoles($user_roles)
    {
        $this->container['user_roles'] = $user_roles;

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
