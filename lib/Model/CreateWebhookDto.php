<?php
/**
 * CreateWebhookDto
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
 * CreateWebhookDto Class Doc Comment
 *
 * @category Class
 * @package  sallfris\Leadball\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateWebhookDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateWebhookDto';
    
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'event_type' => 'string',
        'tag' => 'string',
        'url' => 'string'];
    
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'event_type' => null,
        'tag' => null,
        'url' => null];
    
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
        'event_type' => 'eventType',
        'tag' => 'tag',
        'url' => 'url'];
    
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_type' => 'setEventType',
        'tag' => 'setTag',
        'url' => 'setUrl'];
    
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_type' => 'getEventType',
        'tag' => 'getTag',
        'url' => 'getUrl'];
    
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
    
    const EVENT_TYPE_ALL = 'ALL';
    const EVENT_TYPE_NEW_MESSAGE = 'NEW_MESSAGE';
    const EVENT_TYPE_STATUS_CHANGED = 'STATUS_CHANGED';
    const EVENT_TYPE_MESSAGE_UPDATED = 'MESSAGE_UPDATED';
    const EVENT_TYPE_CHAT_CREATED = 'CHAT_CREATED';
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_ALL,
            self::EVENT_TYPE_NEW_MESSAGE,
            self::EVENT_TYPE_STATUS_CHANGED,
            self::EVENT_TYPE_MESSAGE_UPDATED,
            self::EVENT_TYPE_CHAT_CREATED,];
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
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }
    
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array(
                $this->container['event_type'],
                $allowedValues,
                true
            )) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
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
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }
    
    /**
     * Sets event_type
     *
     * @param string $eventType WebhookEventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($eventType) && !in_array($eventType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $eventType;
        
        return $this;
    }
    
    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }
    
    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        
        return $this;
    }
    
    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }
    
    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        
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
