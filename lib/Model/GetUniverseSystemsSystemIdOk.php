<?php
/**
 * GetUniverseSystemsSystemIdOk
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
 * GetUniverseSystemsSystemIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetUniverseSystemsSystemIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_universe_systems_system_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'constellation_id' => 'int',
        'name' => 'string',
        'planets' => '\Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]',
        'position' => '\Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition',
        'security_class' => 'string',
        'security_status' => 'float',
        'star_id' => 'int',
        'stargates' => 'int[]',
        'stations' => 'int[]',
        'system_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'constellation_id' => 'int32',
        'name' => null,
        'planets' => null,
        'position' => null,
        'security_class' => null,
        'security_status' => 'float',
        'star_id' => 'int32',
        'stargates' => 'int32',
        'stations' => 'int32',
        'system_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'constellation_id' => false,
        'name' => false,
        'planets' => false,
        'position' => false,
        'security_class' => false,
        'security_status' => false,
        'star_id' => false,
        'stargates' => false,
        'stations' => false,
        'system_id' => false
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
        'constellation_id' => 'constellation_id',
        'name' => 'name',
        'planets' => 'planets',
        'position' => 'position',
        'security_class' => 'security_class',
        'security_status' => 'security_status',
        'star_id' => 'star_id',
        'stargates' => 'stargates',
        'stations' => 'stations',
        'system_id' => 'system_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'constellation_id' => 'setConstellationId',
        'name' => 'setName',
        'planets' => 'setPlanets',
        'position' => 'setPosition',
        'security_class' => 'setSecurityClass',
        'security_status' => 'setSecurityStatus',
        'star_id' => 'setStarId',
        'stargates' => 'setStargates',
        'stations' => 'setStations',
        'system_id' => 'setSystemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'constellation_id' => 'getConstellationId',
        'name' => 'getName',
        'planets' => 'getPlanets',
        'position' => 'getPosition',
        'security_class' => 'getSecurityClass',
        'security_status' => 'getSecurityStatus',
        'star_id' => 'getStarId',
        'stargates' => 'getStargates',
        'stations' => 'getStations',
        'system_id' => 'getSystemId'
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
        $this->setIfExists('constellation_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('planets', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('security_class', $data ?? [], null);
        $this->setIfExists('security_status', $data ?? [], null);
        $this->setIfExists('star_id', $data ?? [], null);
        $this->setIfExists('stargates', $data ?? [], null);
        $this->setIfExists('stations', $data ?? [], null);
        $this->setIfExists('system_id', $data ?? [], null);
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

        if ($this->container['constellation_id'] === null) {
            $invalidProperties[] = "'constellation_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['planets']) && (count($this->container['planets']) > 1000)) {
            $invalidProperties[] = "invalid value for 'planets', number of items must be less than or equal to 1000.";
        }

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['security_status'] === null) {
            $invalidProperties[] = "'security_status' can't be null";
        }
        if (!is_null($this->container['stargates']) && (count($this->container['stargates']) > 25)) {
            $invalidProperties[] = "invalid value for 'stargates', number of items must be less than or equal to 25.";
        }

        if (!is_null($this->container['stations']) && (count($this->container['stations']) > 25)) {
            $invalidProperties[] = "invalid value for 'stations', number of items must be less than or equal to 25.";
        }

        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
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
     * Gets constellation_id
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     *
     * @param int $constellation_id The constellation this solar system is in
     *
     * @return self
     */
    public function setConstellationId($constellation_id)
    {
        if (is_null($constellation_id)) {
            throw new \InvalidArgumentException('non-nullable constellation_id cannot be null');
        }
        $this->container['constellation_id'] = $constellation_id;

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
     * @param string $name name string
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets planets
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]|null
     */
    public function getPlanets()
    {
        return $this->container['planets'];
    }

    /**
     * Sets planets
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPlanet[]|null $planets planets array
     *
     * @return self
     */
    public function setPlanets($planets)
    {
        if (is_null($planets)) {
            throw new \InvalidArgumentException('non-nullable planets cannot be null');
        }

        if ((count($planets) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $planets when calling GetUniverseSystemsSystemIdOk., number of items must be less than or equal to 1000.');
        }
        $this->container['planets'] = $planets;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Swagger\Client\Eve\Model\GetUniverseSystemsSystemIdPosition $position position
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
     * Gets security_class
     *
     * @return string|null
     */
    public function getSecurityClass()
    {
        return $this->container['security_class'];
    }

    /**
     * Sets security_class
     *
     * @param string|null $security_class security_class string
     *
     * @return self
     */
    public function setSecurityClass($security_class)
    {
        if (is_null($security_class)) {
            throw new \InvalidArgumentException('non-nullable security_class cannot be null');
        }
        $this->container['security_class'] = $security_class;

        return $this;
    }

    /**
     * Gets security_status
     *
     * @return float
     */
    public function getSecurityStatus()
    {
        return $this->container['security_status'];
    }

    /**
     * Sets security_status
     *
     * @param float $security_status security_status number
     *
     * @return self
     */
    public function setSecurityStatus($security_status)
    {
        if (is_null($security_status)) {
            throw new \InvalidArgumentException('non-nullable security_status cannot be null');
        }
        $this->container['security_status'] = $security_status;

        return $this;
    }

    /**
     * Gets star_id
     *
     * @return int|null
     */
    public function getStarId()
    {
        return $this->container['star_id'];
    }

    /**
     * Sets star_id
     *
     * @param int|null $star_id star_id integer
     *
     * @return self
     */
    public function setStarId($star_id)
    {
        if (is_null($star_id)) {
            throw new \InvalidArgumentException('non-nullable star_id cannot be null');
        }
        $this->container['star_id'] = $star_id;

        return $this;
    }

    /**
     * Gets stargates
     *
     * @return int[]|null
     */
    public function getStargates()
    {
        return $this->container['stargates'];
    }

    /**
     * Sets stargates
     *
     * @param int[]|null $stargates stargates array
     *
     * @return self
     */
    public function setStargates($stargates)
    {
        if (is_null($stargates)) {
            throw new \InvalidArgumentException('non-nullable stargates cannot be null');
        }

        if ((count($stargates) > 25)) {
            throw new \InvalidArgumentException('invalid value for $stargates when calling GetUniverseSystemsSystemIdOk., number of items must be less than or equal to 25.');
        }
        $this->container['stargates'] = $stargates;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return int[]|null
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param int[]|null $stations stations array
     *
     * @return self
     */
    public function setStations($stations)
    {
        if (is_null($stations)) {
            throw new \InvalidArgumentException('non-nullable stations cannot be null');
        }

        if ((count($stations) > 25)) {
            throw new \InvalidArgumentException('invalid value for $stations when calling GetUniverseSystemsSystemIdOk., number of items must be less than or equal to 25.');
        }
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id system_id integer
     *
     * @return self
     */
    public function setSystemId($system_id)
    {
        if (is_null($system_id)) {
            throw new \InvalidArgumentException('non-nullable system_id cannot be null');
        }
        $this->container['system_id'] = $system_id;

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


