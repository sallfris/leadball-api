<?php
/**
 * Message
 *
 * PHP version 5
 *
 * @category Class
 * @package  sallfris\Leadball\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Leadball messaging service - OpenAPI 3.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.25.5
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace sallfris\Leadball\Client\Model;

use ArrayAccess;
use JsonException;
use sallfris\Leadball\Client\ObjectSerializer;

/**
 * Message Class Doc Comment
 *
 * @category Class
 * @package  sallfris\Leadball\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Message';
    
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => 'string',
        'user' => 'object',
        'from_me' => 'bool',
        'date' => 'string',
        'content' => '\sallfris\Leadball\Client\Model\MessageContent'];
    
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'status' => null,
        'user' => null,
        'from_me' => null,
        'date' => null,
        'content' => null];
    
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
        'status' => 'status',
        'user' => 'user',
        'from_me' => 'fromMe',
        'date' => 'date',
        'content' => 'content'];
    
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'user' => 'setUser',
        'from_me' => 'setFromMe',
        'date' => 'setDate',
        'content' => 'setContent'];
    
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'user' => 'getUser',
        'from_me' => 'getFromMe',
        'date' => 'getDate',
        'content' => 'getContent'];
    
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
    
    const STATUS_LB_SERVER = 'LB_SERVER';
    const STATUS_SERVER = 'SERVER';
    const STATUS_DEVICE = 'DEVICE';
    const STATUS_READ = 'READ';
    const STATUS_ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LB_SERVER,
            self::STATUS_SERVER,
            self::STATUS_DEVICE,
            self::STATUS_READ,
            self::STATUS_ERROR,];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['from_me'] = isset($data['from_me']) ? $data['from_me'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }
    
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $status MessageStatus
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;
        
        return $this;
    }
    
    /**
     * Gets user
     *
     * @return object
     */
    public function getUser()
    {
        return $this->container['user'];
    }
    
    /**
     * Sets user
     *
     * @param object $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        
        return $this;
    }
    
    /**
     * Gets from_me
     *
     * @return bool
     */
    public function getFromMe()
    {
        return $this->container['from_me'];
    }
    
    /**
     * Sets from_me
     *
     * @param bool $fromMe from_me
     *
     * @return $this
     */
    public function setFromMe($fromMe)
    {
        $this->container['from_me'] = $fromMe;
        
        return $this;
    }
    
    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }
    
    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        
        return $this;
    }
    
    /**
     * Gets content
     *
     * @return \sallfris\Leadball\Client\Model\MessageContent
     */
    public function getContent()
    {
        return $this->container['content'];
    }
    
    /**
     * Sets content
     *
     * @param \sallfris\Leadball\Client\Model\MessageContent $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    /**
     * Gets the string presentation of the object
     *
     * @return string
     * @throws JsonException
     */
    public function __toString(): string
    {
        $jsonOptions = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR : 0;
        
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), $jsonOptions);
    }
}
