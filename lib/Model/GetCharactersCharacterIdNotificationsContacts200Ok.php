<?php
/**
 * GetCharactersCharacterIdNotificationsContacts200Ok
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * The version of the OpenAPI document: 1.17
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdNotificationsContacts200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdNotificationsContacts200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_notifications_contacts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'message' => 'string',
        'notification_id' => 'int',
        'send_date' => '\DateTime',
        'sender_character_id' => 'int',
        'standing_level' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'message' => null,
        'notification_id' => 'int32',
        'send_date' => 'date-time',
        'sender_character_id' => 'int32',
        'standing_level' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'message' => false,
		'notification_id' => false,
		'send_date' => false,
		'sender_character_id' => false,
		'standing_level' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message' => 'message',
        'notification_id' => 'notification_id',
        'send_date' => 'send_date',
        'sender_character_id' => 'sender_character_id',
        'standing_level' => 'standing_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'notification_id' => 'setNotificationId',
        'send_date' => 'setSendDate',
        'sender_character_id' => 'setSenderCharacterId',
        'standing_level' => 'setStandingLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'notification_id' => 'getNotificationId',
        'send_date' => 'getSendDate',
        'sender_character_id' => 'getSenderCharacterId',
        'standing_level' => 'getStandingLevel'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('notification_id', $data ?? [], null);
        $this->setIfExists('send_date', $data ?? [], null);
        $this->setIfExists('sender_character_id', $data ?? [], null);
        $this->setIfExists('standing_level', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['notification_id'] === null) {
            $invalidProperties[] = "'notification_id' can't be null";
        }
        if ($this->container['send_date'] === null) {
            $invalidProperties[] = "'send_date' can't be null";
        }
        if ($this->container['sender_character_id'] === null) {
            $invalidProperties[] = "'sender_character_id' can't be null";
        }
        if ($this->container['standing_level'] === null) {
            $invalidProperties[] = "'standing_level' can't be null";
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message string
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notification_id
     *
     * @return int
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param int $notification_id notification_id integer
     *
     * @return self
     */
    public function setNotificationId($notification_id)
    {
        if (is_null($notification_id)) {
            throw new \InvalidArgumentException('non-nullable notification_id cannot be null');
        }
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets send_date
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime $send_date send_date string
     *
     * @return self
     */
    public function setSendDate($send_date)
    {
        if (is_null($send_date)) {
            throw new \InvalidArgumentException('non-nullable send_date cannot be null');
        }
        $this->container['send_date'] = $send_date;

        return $this;
    }

    /**
     * Gets sender_character_id
     *
     * @return int
     */
    public function getSenderCharacterId()
    {
        return $this->container['sender_character_id'];
    }

    /**
     * Sets sender_character_id
     *
     * @param int $sender_character_id sender_character_id integer
     *
     * @return self
     */
    public function setSenderCharacterId($sender_character_id)
    {
        if (is_null($sender_character_id)) {
            throw new \InvalidArgumentException('non-nullable sender_character_id cannot be null');
        }
        $this->container['sender_character_id'] = $sender_character_id;

        return $this;
    }

    /**
     * Gets standing_level
     *
     * @return float
     */
    public function getStandingLevel()
    {
        return $this->container['standing_level'];
    }

    /**
     * Sets standing_level
     *
     * @param float $standing_level A number representing the standing level the receiver has been added at by the sender. The standing levels are as follows: -10 -> Terrible | -5 -> Bad |  0 -> Neutral |  5 -> Good |  10 -> Excellent
     *
     * @return self
     */
    public function setStandingLevel($standing_level)
    {
        if (is_null($standing_level)) {
            throw new \InvalidArgumentException('non-nullable standing_level cannot be null');
        }
        $this->container['standing_level'] = $standing_level;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


