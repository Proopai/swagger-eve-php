<?php
/**
 * GetCharactersCharacterIdClonesOk
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
 * GetCharactersCharacterIdClonesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdClonesOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_clones_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'home_location' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesHomeLocation',
        'jump_clones' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesJumpClone[]',
        'last_clone_jump_date' => '\DateTime',
        'last_station_change_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'home_location' => null,
        'jump_clones' => null,
        'last_clone_jump_date' => 'date-time',
        'last_station_change_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'home_location' => false,
		'jump_clones' => false,
		'last_clone_jump_date' => false,
		'last_station_change_date' => false
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
        'home_location' => 'home_location',
        'jump_clones' => 'jump_clones',
        'last_clone_jump_date' => 'last_clone_jump_date',
        'last_station_change_date' => 'last_station_change_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'home_location' => 'setHomeLocation',
        'jump_clones' => 'setJumpClones',
        'last_clone_jump_date' => 'setLastCloneJumpDate',
        'last_station_change_date' => 'setLastStationChangeDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'home_location' => 'getHomeLocation',
        'jump_clones' => 'getJumpClones',
        'last_clone_jump_date' => 'getLastCloneJumpDate',
        'last_station_change_date' => 'getLastStationChangeDate'
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
        $this->setIfExists('home_location', $data ?? [], null);
        $this->setIfExists('jump_clones', $data ?? [], null);
        $this->setIfExists('last_clone_jump_date', $data ?? [], null);
        $this->setIfExists('last_station_change_date', $data ?? [], null);
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

        if ($this->container['jump_clones'] === null) {
            $invalidProperties[] = "'jump_clones' can't be null";
        }
        if ((count($this->container['jump_clones']) > 64)) {
            $invalidProperties[] = "invalid value for 'jump_clones', number of items must be less than or equal to 64.";
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
     * Gets home_location
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesHomeLocation|null
     */
    public function getHomeLocation()
    {
        return $this->container['home_location'];
    }

    /**
     * Sets home_location
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesHomeLocation|null $home_location home_location
     *
     * @return self
     */
    public function setHomeLocation($home_location)
    {
        if (is_null($home_location)) {
            throw new \InvalidArgumentException('non-nullable home_location cannot be null');
        }
        $this->container['home_location'] = $home_location;

        return $this;
    }

    /**
     * Gets jump_clones
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesJumpClone[]
     */
    public function getJumpClones()
    {
        return $this->container['jump_clones'];
    }

    /**
     * Sets jump_clones
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdClonesJumpClone[] $jump_clones jump_clones array
     *
     * @return self
     */
    public function setJumpClones($jump_clones)
    {
        if (is_null($jump_clones)) {
            throw new \InvalidArgumentException('non-nullable jump_clones cannot be null');
        }

        if ((count($jump_clones) > 64)) {
            throw new \InvalidArgumentException('invalid value for $jump_clones when calling GetCharactersCharacterIdClonesOk., number of items must be less than or equal to 64.');
        }
        $this->container['jump_clones'] = $jump_clones;

        return $this;
    }

    /**
     * Gets last_clone_jump_date
     *
     * @return \DateTime|null
     */
    public function getLastCloneJumpDate()
    {
        return $this->container['last_clone_jump_date'];
    }

    /**
     * Sets last_clone_jump_date
     *
     * @param \DateTime|null $last_clone_jump_date last_clone_jump_date string
     *
     * @return self
     */
    public function setLastCloneJumpDate($last_clone_jump_date)
    {
        if (is_null($last_clone_jump_date)) {
            throw new \InvalidArgumentException('non-nullable last_clone_jump_date cannot be null');
        }
        $this->container['last_clone_jump_date'] = $last_clone_jump_date;

        return $this;
    }

    /**
     * Gets last_station_change_date
     *
     * @return \DateTime|null
     */
    public function getLastStationChangeDate()
    {
        return $this->container['last_station_change_date'];
    }

    /**
     * Sets last_station_change_date
     *
     * @param \DateTime|null $last_station_change_date last_station_change_date string
     *
     * @return self
     */
    public function setLastStationChangeDate($last_station_change_date)
    {
        if (is_null($last_station_change_date)) {
            throw new \InvalidArgumentException('non-nullable last_station_change_date cannot be null');
        }
        $this->container['last_station_change_date'] = $last_station_change_date;

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


