<?php
/**
 * GetKillmailsKillmailIdKillmailHashVictim
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
 * GetKillmailsKillmailIdKillmailHashVictim Class Doc Comment
 *
 * @category Class
 * @description victim object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetKillmailsKillmailIdKillmailHashVictim implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_killmails_killmail_id_killmail_hash_victim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_id' => 'int',
        'character_id' => 'int',
        'corporation_id' => 'int',
        'damage_taken' => 'int',
        'faction_id' => 'int',
        'items' => '\Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItem[]',
        'position' => '\Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashPosition',
        'ship_type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alliance_id' => 'int32',
        'character_id' => 'int32',
        'corporation_id' => 'int32',
        'damage_taken' => 'int32',
        'faction_id' => 'int32',
        'items' => null,
        'position' => null,
        'ship_type_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'alliance_id' => false,
        'character_id' => false,
        'corporation_id' => false,
        'damage_taken' => false,
        'faction_id' => false,
        'items' => false,
        'position' => false,
        'ship_type_id' => false
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
        'alliance_id' => 'alliance_id',
        'character_id' => 'character_id',
        'corporation_id' => 'corporation_id',
        'damage_taken' => 'damage_taken',
        'faction_id' => 'faction_id',
        'items' => 'items',
        'position' => 'position',
        'ship_type_id' => 'ship_type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'character_id' => 'setCharacterId',
        'corporation_id' => 'setCorporationId',
        'damage_taken' => 'setDamageTaken',
        'faction_id' => 'setFactionId',
        'items' => 'setItems',
        'position' => 'setPosition',
        'ship_type_id' => 'setShipTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'character_id' => 'getCharacterId',
        'corporation_id' => 'getCorporationId',
        'damage_taken' => 'getDamageTaken',
        'faction_id' => 'getFactionId',
        'items' => 'getItems',
        'position' => 'getPosition',
        'ship_type_id' => 'getShipTypeId'
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
        $this->setIfExists('alliance_id', $data ?? [], null);
        $this->setIfExists('character_id', $data ?? [], null);
        $this->setIfExists('corporation_id', $data ?? [], null);
        $this->setIfExists('damage_taken', $data ?? [], null);
        $this->setIfExists('faction_id', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('ship_type_id', $data ?? [], null);
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

        if ($this->container['damage_taken'] === null) {
            $invalidProperties[] = "'damage_taken' can't be null";
        }
        if (!is_null($this->container['items']) && (count($this->container['items']) > 10000)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be less than or equal to 10000.";
        }

        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
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
     * Gets alliance_id
     *
     * @return int|null
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int|null $alliance_id alliance_id integer
     *
     * @return self
     */
    public function setAllianceId($alliance_id)
    {
        if (is_null($alliance_id)) {
            throw new \InvalidArgumentException('non-nullable alliance_id cannot be null');
        }
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int|null $character_id character_id integer
     *
     * @return self
     */
    public function setCharacterId($character_id)
    {
        if (is_null($character_id)) {
            throw new \InvalidArgumentException('non-nullable character_id cannot be null');
        }
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int|null
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int|null $corporation_id corporation_id integer
     *
     * @return self
     */
    public function setCorporationId($corporation_id)
    {
        if (is_null($corporation_id)) {
            throw new \InvalidArgumentException('non-nullable corporation_id cannot be null');
        }
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets damage_taken
     *
     * @return int
     */
    public function getDamageTaken()
    {
        return $this->container['damage_taken'];
    }

    /**
     * Sets damage_taken
     *
     * @param int $damage_taken How much total damage was taken by the victim
     *
     * @return self
     */
    public function setDamageTaken($damage_taken)
    {
        if (is_null($damage_taken)) {
            throw new \InvalidArgumentException('non-nullable damage_taken cannot be null');
        }
        $this->container['damage_taken'] = $damage_taken;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int|null
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int|null $faction_id faction_id integer
     *
     * @return self
     */
    public function setFactionId($faction_id)
    {
        if (is_null($faction_id)) {
            throw new \InvalidArgumentException('non-nullable faction_id cannot be null');
        }
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashItem[]|null $items items array
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        if ((count($items) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $items when calling GetKillmailsKillmailIdKillmailHashVictim., number of items must be less than or equal to 10000.');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashPosition|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Swagger\Client\Eve\Model\GetKillmailsKillmailIdKillmailHashPosition|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets ship_type_id
     *
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     *
     * @param int $ship_type_id The ship that the victim was piloting and was destroyed
     *
     * @return self
     */
    public function setShipTypeId($ship_type_id)
    {
        if (is_null($ship_type_id)) {
            throw new \InvalidArgumentException('non-nullable ship_type_id cannot be null');
        }
        $this->container['ship_type_id'] = $ship_type_id;

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


