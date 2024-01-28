<?php
/**
 * GetSovereigntyStructures200Ok
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
 * GetSovereigntyStructures200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSovereigntyStructures200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_sovereignty_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alliance_id' => 'int',
        'solar_system_id' => 'int',
        'structure_id' => 'int',
        'structure_type_id' => 'int',
        'vulnerability_occupancy_level' => 'float',
        'vulnerable_end_time' => '\DateTime',
        'vulnerable_start_time' => '\DateTime'
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
        'solar_system_id' => 'int32',
        'structure_id' => 'int64',
        'structure_type_id' => 'int32',
        'vulnerability_occupancy_level' => 'float',
        'vulnerable_end_time' => 'date-time',
        'vulnerable_start_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'alliance_id' => false,
        'solar_system_id' => false,
        'structure_id' => false,
        'structure_type_id' => false,
        'vulnerability_occupancy_level' => false,
        'vulnerable_end_time' => false,
        'vulnerable_start_time' => false
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
        'solar_system_id' => 'solar_system_id',
        'structure_id' => 'structure_id',
        'structure_type_id' => 'structure_type_id',
        'vulnerability_occupancy_level' => 'vulnerability_occupancy_level',
        'vulnerable_end_time' => 'vulnerable_end_time',
        'vulnerable_start_time' => 'vulnerable_start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'solar_system_id' => 'setSolarSystemId',
        'structure_id' => 'setStructureId',
        'structure_type_id' => 'setStructureTypeId',
        'vulnerability_occupancy_level' => 'setVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'setVulnerableEndTime',
        'vulnerable_start_time' => 'setVulnerableStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'solar_system_id' => 'getSolarSystemId',
        'structure_id' => 'getStructureId',
        'structure_type_id' => 'getStructureTypeId',
        'vulnerability_occupancy_level' => 'getVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'getVulnerableEndTime',
        'vulnerable_start_time' => 'getVulnerableStartTime'
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
        $this->setIfExists('solar_system_id', $data ?? [], null);
        $this->setIfExists('structure_id', $data ?? [], null);
        $this->setIfExists('structure_type_id', $data ?? [], null);
        $this->setIfExists('vulnerability_occupancy_level', $data ?? [], null);
        $this->setIfExists('vulnerable_end_time', $data ?? [], null);
        $this->setIfExists('vulnerable_start_time', $data ?? [], null);
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

        if ($this->container['alliance_id'] === null) {
            $invalidProperties[] = "'alliance_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if ($this->container['structure_type_id'] === null) {
            $invalidProperties[] = "'structure_type_id' can't be null";
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
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int $alliance_id The alliance that owns the structure.
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
     * @param int $solar_system_id Solar system in which the structure is located.
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
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id Unique item ID for this structure.
     *
     * @return self
     */
    public function setStructureId($structure_id)
    {
        if (is_null($structure_id)) {
            throw new \InvalidArgumentException('non-nullable structure_id cannot be null');
        }
        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets structure_type_id
     *
     * @return int
     */
    public function getStructureTypeId()
    {
        return $this->container['structure_type_id'];
    }

    /**
     * Sets structure_type_id
     *
     * @param int $structure_type_id A reference to the type of structure this is.
     *
     * @return self
     */
    public function setStructureTypeId($structure_type_id)
    {
        if (is_null($structure_type_id)) {
            throw new \InvalidArgumentException('non-nullable structure_type_id cannot be null');
        }
        $this->container['structure_type_id'] = $structure_type_id;

        return $this;
    }

    /**
     * Gets vulnerability_occupancy_level
     *
     * @return float|null
     */
    public function getVulnerabilityOccupancyLevel()
    {
        return $this->container['vulnerability_occupancy_level'];
    }

    /**
     * Sets vulnerability_occupancy_level
     *
     * @param float|null $vulnerability_occupancy_level The occupancy level for the next or current vulnerability window. This takes into account all development indexes and capital system bonuses. Also known as Activity Defense Multiplier from in the client. It increases the time that attackers must spend using their entosis links on the structure.
     *
     * @return self
     */
    public function setVulnerabilityOccupancyLevel($vulnerability_occupancy_level)
    {
        if (is_null($vulnerability_occupancy_level)) {
            throw new \InvalidArgumentException('non-nullable vulnerability_occupancy_level cannot be null');
        }
        $this->container['vulnerability_occupancy_level'] = $vulnerability_occupancy_level;

        return $this;
    }

    /**
     * Gets vulnerable_end_time
     *
     * @return \DateTime|null
     */
    public function getVulnerableEndTime()
    {
        return $this->container['vulnerable_end_time'];
    }

    /**
     * Sets vulnerable_end_time
     *
     * @param \DateTime|null $vulnerable_end_time The time at which the next or current vulnerability window ends. At the end of a vulnerability window the next window is recalculated and locked in along with the vulnerabilityOccupancyLevel. If the structure is not in 100% entosis control of the defender, it will go in to 'overtime' and stay vulnerable for as long as that situation persists. Only once the defenders have 100% entosis control and has the vulnerableEndTime passed does the vulnerability interval expire and a new one is calculated.
     *
     * @return self
     */
    public function setVulnerableEndTime($vulnerable_end_time)
    {
        if (is_null($vulnerable_end_time)) {
            throw new \InvalidArgumentException('non-nullable vulnerable_end_time cannot be null');
        }
        $this->container['vulnerable_end_time'] = $vulnerable_end_time;

        return $this;
    }

    /**
     * Gets vulnerable_start_time
     *
     * @return \DateTime|null
     */
    public function getVulnerableStartTime()
    {
        return $this->container['vulnerable_start_time'];
    }

    /**
     * Sets vulnerable_start_time
     *
     * @param \DateTime|null $vulnerable_start_time The next time at which the structure will become vulnerable. Or the start time of the current window if current time is between this and vulnerableEndTime.
     *
     * @return self
     */
    public function setVulnerableStartTime($vulnerable_start_time)
    {
        if (is_null($vulnerable_start_time)) {
            throw new \InvalidArgumentException('non-nullable vulnerable_start_time cannot be null');
        }
        $this->container['vulnerable_start_time'] = $vulnerable_start_time;

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


