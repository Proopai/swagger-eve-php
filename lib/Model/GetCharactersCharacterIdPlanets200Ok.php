<?php
/**
 * GetCharactersCharacterIdPlanets200Ok
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
 * OpenAPI Generator version: 7.2.0
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
 * GetCharactersCharacterIdPlanets200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdPlanets200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_planets_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'last_update' => '\DateTime',
        'num_pins' => 'int',
        'owner_id' => 'int',
        'planet_id' => 'int',
        'planet_type' => 'string',
        'solar_system_id' => 'int',
        'upgrade_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'last_update' => 'date-time',
        'num_pins' => 'int32',
        'owner_id' => 'int32',
        'planet_id' => 'int32',
        'planet_type' => null,
        'solar_system_id' => 'int32',
        'upgrade_level' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'last_update' => false,
        'num_pins' => false,
        'owner_id' => false,
        'planet_id' => false,
        'planet_type' => false,
        'solar_system_id' => false,
        'upgrade_level' => false
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
        'last_update' => 'last_update',
        'num_pins' => 'num_pins',
        'owner_id' => 'owner_id',
        'planet_id' => 'planet_id',
        'planet_type' => 'planet_type',
        'solar_system_id' => 'solar_system_id',
        'upgrade_level' => 'upgrade_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_update' => 'setLastUpdate',
        'num_pins' => 'setNumPins',
        'owner_id' => 'setOwnerId',
        'planet_id' => 'setPlanetId',
        'planet_type' => 'setPlanetType',
        'solar_system_id' => 'setSolarSystemId',
        'upgrade_level' => 'setUpgradeLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_update' => 'getLastUpdate',
        'num_pins' => 'getNumPins',
        'owner_id' => 'getOwnerId',
        'planet_id' => 'getPlanetId',
        'planet_type' => 'getPlanetType',
        'solar_system_id' => 'getSolarSystemId',
        'upgrade_level' => 'getUpgradeLevel'
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

    public const PLANET_TYPE_TEMPERATE = 'temperate';
    public const PLANET_TYPE_BARREN = 'barren';
    public const PLANET_TYPE_OCEANIC = 'oceanic';
    public const PLANET_TYPE_ICE = 'ice';
    public const PLANET_TYPE_GAS = 'gas';
    public const PLANET_TYPE_LAVA = 'lava';
    public const PLANET_TYPE_STORM = 'storm';
    public const PLANET_TYPE_PLASMA = 'plasma';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlanetTypeAllowableValues()
    {
        return [
            self::PLANET_TYPE_TEMPERATE,
            self::PLANET_TYPE_BARREN,
            self::PLANET_TYPE_OCEANIC,
            self::PLANET_TYPE_ICE,
            self::PLANET_TYPE_GAS,
            self::PLANET_TYPE_LAVA,
            self::PLANET_TYPE_STORM,
            self::PLANET_TYPE_PLASMA,
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
        $this->setIfExists('last_update', $data ?? [], null);
        $this->setIfExists('num_pins', $data ?? [], null);
        $this->setIfExists('owner_id', $data ?? [], null);
        $this->setIfExists('planet_id', $data ?? [], null);
        $this->setIfExists('planet_type', $data ?? [], null);
        $this->setIfExists('solar_system_id', $data ?? [], null);
        $this->setIfExists('upgrade_level', $data ?? [], null);
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

        if ($this->container['last_update'] === null) {
            $invalidProperties[] = "'last_update' can't be null";
        }
        if ($this->container['num_pins'] === null) {
            $invalidProperties[] = "'num_pins' can't be null";
        }
        if (($this->container['num_pins'] < 1)) {
            $invalidProperties[] = "invalid value for 'num_pins', must be bigger than or equal to 1.";
        }

        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['planet_id'] === null) {
            $invalidProperties[] = "'planet_id' can't be null";
        }
        if ($this->container['planet_type'] === null) {
            $invalidProperties[] = "'planet_type' can't be null";
        }
        $allowedValues = $this->getPlanetTypeAllowableValues();
        if (!is_null($this->container['planet_type']) && !in_array($this->container['planet_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'planet_type', must be one of '%s'",
                $this->container['planet_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['upgrade_level'] === null) {
            $invalidProperties[] = "'upgrade_level' can't be null";
        }
        if (($this->container['upgrade_level'] > 5)) {
            $invalidProperties[] = "invalid value for 'upgrade_level', must be smaller than or equal to 5.";
        }

        if (($this->container['upgrade_level'] < 0)) {
            $invalidProperties[] = "invalid value for 'upgrade_level', must be bigger than or equal to 0.";
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
     * Gets last_update
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime $last_update last_update string
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        if (is_null($last_update)) {
            throw new \InvalidArgumentException('non-nullable last_update cannot be null');
        }
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets num_pins
     *
     * @return int
     */
    public function getNumPins()
    {
        return $this->container['num_pins'];
    }

    /**
     * Sets num_pins
     *
     * @param int $num_pins num_pins integer
     *
     * @return self
     */
    public function setNumPins($num_pins)
    {
        if (is_null($num_pins)) {
            throw new \InvalidArgumentException('non-nullable num_pins cannot be null');
        }

        if (($num_pins < 1)) {
            throw new \InvalidArgumentException('invalid value for $num_pins when calling GetCharactersCharacterIdPlanets200Ok., must be bigger than or equal to 1.');
        }

        $this->container['num_pins'] = $num_pins;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int $owner_id owner_id integer
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        if (is_null($owner_id)) {
            throw new \InvalidArgumentException('non-nullable owner_id cannot be null');
        }
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets planet_id
     *
     * @return int
     */
    public function getPlanetId()
    {
        return $this->container['planet_id'];
    }

    /**
     * Sets planet_id
     *
     * @param int $planet_id planet_id integer
     *
     * @return self
     */
    public function setPlanetId($planet_id)
    {
        if (is_null($planet_id)) {
            throw new \InvalidArgumentException('non-nullable planet_id cannot be null');
        }
        $this->container['planet_id'] = $planet_id;

        return $this;
    }

    /**
     * Gets planet_type
     *
     * @return string
     */
    public function getPlanetType()
    {
        return $this->container['planet_type'];
    }

    /**
     * Sets planet_type
     *
     * @param string $planet_type planet_type string
     *
     * @return self
     */
    public function setPlanetType($planet_type)
    {
        if (is_null($planet_type)) {
            throw new \InvalidArgumentException('non-nullable planet_type cannot be null');
        }
        /*$allowedValues = $this->getPlanetTypeAllowableValues();
        if (!in_array($planet_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'planet_type', must be one of '%s'",
                    $planet_type,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['planet_type'] = $planet_type;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id solar_system_id integer
     *
     * @return self
     */
    public function setSolarSystemId($solar_system_id)
    {
        if (is_null($solar_system_id)) {
            throw new \InvalidArgumentException('non-nullable solar_system_id cannot be null');
        }
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets upgrade_level
     *
     * @return int
     */
    public function getUpgradeLevel()
    {
        return $this->container['upgrade_level'];
    }

    /**
     * Sets upgrade_level
     *
     * @param int $upgrade_level upgrade_level integer
     *
     * @return self
     */
    public function setUpgradeLevel($upgrade_level)
    {
        if (is_null($upgrade_level)) {
            throw new \InvalidArgumentException('non-nullable upgrade_level cannot be null');
        }

        if (($upgrade_level > 5)) {
            throw new \InvalidArgumentException('invalid value for $upgrade_level when calling GetCharactersCharacterIdPlanets200Ok., must be smaller than or equal to 5.');
        }
        if (($upgrade_level < 0)) {
            throw new \InvalidArgumentException('invalid value for $upgrade_level when calling GetCharactersCharacterIdPlanets200Ok., must be bigger than or equal to 0.');
        }

        $this->container['upgrade_level'] = $upgrade_level;

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


