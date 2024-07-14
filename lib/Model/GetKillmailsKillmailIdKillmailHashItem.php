<?php
/**
 * GetKillmailsKillmailIdKillmailHashItem
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
 * The version of the OpenAPI document: 1.24
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * GetKillmailsKillmailIdKillmailHashItem Class Doc Comment
 *
 * @category Class
 * @description item object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetKillmailsKillmailIdKillmailHashItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_killmails_killmail_id_killmail_hash_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'flag' => 'int',
        'item_type_id' => 'int',
        'items' => '\Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItemsItem[]',
        'quantity_destroyed' => 'int',
        'quantity_dropped' => 'int',
        'singleton' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'flag' => 'int32',
        'item_type_id' => 'int32',
        'items' => null,
        'quantity_destroyed' => 'int64',
        'quantity_dropped' => 'int64',
        'singleton' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'flag' => false,
        'item_type_id' => false,
        'items' => false,
        'quantity_destroyed' => false,
        'quantity_dropped' => false,
        'singleton' => false
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
        'flag' => 'flag',
        'item_type_id' => 'item_type_id',
        'items' => 'items',
        'quantity_destroyed' => 'quantity_destroyed',
        'quantity_dropped' => 'quantity_dropped',
        'singleton' => 'singleton'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flag' => 'setFlag',
        'item_type_id' => 'setItemTypeId',
        'items' => 'setItems',
        'quantity_destroyed' => 'setQuantityDestroyed',
        'quantity_dropped' => 'setQuantityDropped',
        'singleton' => 'setSingleton'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flag' => 'getFlag',
        'item_type_id' => 'getItemTypeId',
        'items' => 'getItems',
        'quantity_destroyed' => 'getQuantityDestroyed',
        'quantity_dropped' => 'getQuantityDropped',
        'singleton' => 'getSingleton'
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
        $this->setIfExists('flag', $data ?? [], null);
        $this->setIfExists('item_type_id', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('quantity_destroyed', $data ?? [], null);
        $this->setIfExists('quantity_dropped', $data ?? [], null);
        $this->setIfExists('singleton', $data ?? [], null);
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

        if ($this->container['flag'] === null) {
            $invalidProperties[] = "'flag' can't be null";
        }
        if ($this->container['item_type_id'] === null) {
            $invalidProperties[] = "'item_type_id' can't be null";
        }
        if (!is_null($this->container['items']) && (count($this->container['items']) > 10000)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be less than or equal to 10000.";
        }

        if ($this->container['singleton'] === null) {
            $invalidProperties[] = "'singleton' can't be null";
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
     * Gets flag
     *
     * @return int
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param int $flag Flag for the location of the item
     *
     * @return self
     */
    public function setFlag($flag)
    {
        if (is_null($flag)) {
            throw new \InvalidArgumentException('non-nullable flag cannot be null');
        }
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets item_type_id
     *
     * @return int
     */
    public function getItemTypeId()
    {
        return $this->container['item_type_id'];
    }

    /**
     * Sets item_type_id
     *
     * @param int $item_type_id item_type_id integer
     *
     * @return self
     */
    public function setItemTypeId($item_type_id)
    {
        if (is_null($item_type_id)) {
            throw new \InvalidArgumentException('non-nullable item_type_id cannot be null');
        }
        $this->container['item_type_id'] = $item_type_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItemsItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItemsItem[]|null $items items array
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        /*if ((count($items) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $items when calling GetKillmailsKillmailIdKillmailHashItem., number of items must be less than or equal to 10000.');
        }*/
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets quantity_destroyed
     *
     * @return int|null
     */
    public function getQuantityDestroyed()
    {
        return $this->container['quantity_destroyed'];
    }

    /**
     * Sets quantity_destroyed
     *
     * @param int|null $quantity_destroyed How many of the item were destroyed if any
     *
     * @return self
     */
    public function setQuantityDestroyed($quantity_destroyed)
    {
        if (is_null($quantity_destroyed)) {
            throw new \InvalidArgumentException('non-nullable quantity_destroyed cannot be null');
        }
        $this->container['quantity_destroyed'] = $quantity_destroyed;

        return $this;
    }

    /**
     * Gets quantity_dropped
     *
     * @return int|null
     */
    public function getQuantityDropped()
    {
        return $this->container['quantity_dropped'];
    }

    /**
     * Sets quantity_dropped
     *
     * @param int|null $quantity_dropped How many of the item were dropped if any
     *
     * @return self
     */
    public function setQuantityDropped($quantity_dropped)
    {
        if (is_null($quantity_dropped)) {
            throw new \InvalidArgumentException('non-nullable quantity_dropped cannot be null');
        }
        $this->container['quantity_dropped'] = $quantity_dropped;

        return $this;
    }

    /**
     * Gets singleton
     *
     * @return int
     */
    public function getSingleton()
    {
        return $this->container['singleton'];
    }

    /**
     * Sets singleton
     *
     * @param int $singleton singleton integer
     *
     * @return self
     */
    public function setSingleton($singleton)
    {
        if (is_null($singleton)) {
            throw new \InvalidArgumentException('non-nullable singleton cannot be null');
        }
        $this->container['singleton'] = $singleton;

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


