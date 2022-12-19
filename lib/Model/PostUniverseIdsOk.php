<?php
/**
 * PostUniverseIdsOk
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
 * The version of the OpenAPI document: 1.12
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * PostUniverseIdsOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostUniverseIdsOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_universe_ids_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agents' => '\Swagger\Client\Eve\Model\PostUniverseIdsAgent[]',
        'alliances' => '\Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]',
        'characters' => '\Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]',
        'constellations' => '\Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]',
        'corporations' => '\Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]',
        'factions' => '\Swagger\Client\Eve\Model\PostUniverseIdsFaction[]',
        'inventory_types' => '\Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]',
        'regions' => '\Swagger\Client\Eve\Model\PostUniverseIdsRegion[]',
        'stations' => '\Swagger\Client\Eve\Model\PostUniverseIdsStation[]',
        'systems' => '\Swagger\Client\Eve\Model\PostUniverseIdsSystem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agents' => null,
        'alliances' => null,
        'characters' => null,
        'constellations' => null,
        'corporations' => null,
        'factions' => null,
        'inventory_types' => null,
        'regions' => null,
        'stations' => null,
        'systems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agents' => false,
		'alliances' => false,
		'characters' => false,
		'constellations' => false,
		'corporations' => false,
		'factions' => false,
		'inventory_types' => false,
		'regions' => false,
		'stations' => false,
		'systems' => false
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
        'agents' => 'agents',
        'alliances' => 'alliances',
        'characters' => 'characters',
        'constellations' => 'constellations',
        'corporations' => 'corporations',
        'factions' => 'factions',
        'inventory_types' => 'inventory_types',
        'regions' => 'regions',
        'stations' => 'stations',
        'systems' => 'systems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agents' => 'setAgents',
        'alliances' => 'setAlliances',
        'characters' => 'setCharacters',
        'constellations' => 'setConstellations',
        'corporations' => 'setCorporations',
        'factions' => 'setFactions',
        'inventory_types' => 'setInventoryTypes',
        'regions' => 'setRegions',
        'stations' => 'setStations',
        'systems' => 'setSystems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agents' => 'getAgents',
        'alliances' => 'getAlliances',
        'characters' => 'getCharacters',
        'constellations' => 'getConstellations',
        'corporations' => 'getCorporations',
        'factions' => 'getFactions',
        'inventory_types' => 'getInventoryTypes',
        'regions' => 'getRegions',
        'stations' => 'getStations',
        'systems' => 'getSystems'
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
        $this->setIfExists('agents', $data ?? [], null);
        $this->setIfExists('alliances', $data ?? [], null);
        $this->setIfExists('characters', $data ?? [], null);
        $this->setIfExists('constellations', $data ?? [], null);
        $this->setIfExists('corporations', $data ?? [], null);
        $this->setIfExists('factions', $data ?? [], null);
        $this->setIfExists('inventory_types', $data ?? [], null);
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('stations', $data ?? [], null);
        $this->setIfExists('systems', $data ?? [], null);
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

        if (!is_null($this->container['agents']) && (count($this->container['agents']) > 500)) {
            $invalidProperties[] = "invalid value for 'agents', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['alliances']) && (count($this->container['alliances']) > 500)) {
            $invalidProperties[] = "invalid value for 'alliances', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['characters']) && (count($this->container['characters']) > 500)) {
            $invalidProperties[] = "invalid value for 'characters', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['constellations']) && (count($this->container['constellations']) > 500)) {
            $invalidProperties[] = "invalid value for 'constellations', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['corporations']) && (count($this->container['corporations']) > 500)) {
            $invalidProperties[] = "invalid value for 'corporations', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['factions']) && (count($this->container['factions']) > 500)) {
            $invalidProperties[] = "invalid value for 'factions', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['inventory_types']) && (count($this->container['inventory_types']) > 500)) {
            $invalidProperties[] = "invalid value for 'inventory_types', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['regions']) && (count($this->container['regions']) > 500)) {
            $invalidProperties[] = "invalid value for 'regions', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['stations']) && (count($this->container['stations']) > 500)) {
            $invalidProperties[] = "invalid value for 'stations', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['systems']) && (count($this->container['systems']) > 500)) {
            $invalidProperties[] = "invalid value for 'systems', number of items must be less than or equal to 500.";
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
     * Gets agents
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAgent[]|null
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAgent[]|null $agents agents array
     *
     * @return self
     */
    public function setAgents($agents)
    {

        if (!is_null($agents) && (count($agents) > 500)) {
            throw new \InvalidArgumentException('invalid value for $agents when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($agents)) {
            throw new \InvalidArgumentException('non-nullable agents cannot be null');
        }

        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets alliances
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]|null
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsAlliance[]|null $alliances alliances array
     *
     * @return self
     */
    public function setAlliances($alliances)
    {

        if (!is_null($alliances) && (count($alliances) > 500)) {
            throw new \InvalidArgumentException('invalid value for $alliances when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($alliances)) {
            throw new \InvalidArgumentException('non-nullable alliances cannot be null');
        }

        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]|null
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCharacter[]|null $characters characters array
     *
     * @return self
     */
    public function setCharacters($characters)
    {

        if (!is_null($characters) && (count($characters) > 500)) {
            throw new \InvalidArgumentException('invalid value for $characters when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($characters)) {
            throw new \InvalidArgumentException('non-nullable characters cannot be null');
        }

        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets constellations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]|null
     */
    public function getConstellations()
    {
        return $this->container['constellations'];
    }

    /**
     * Sets constellations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsConstellation[]|null $constellations constellations array
     *
     * @return self
     */
    public function setConstellations($constellations)
    {

        if (!is_null($constellations) && (count($constellations) > 500)) {
            throw new \InvalidArgumentException('invalid value for $constellations when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($constellations)) {
            throw new \InvalidArgumentException('non-nullable constellations cannot be null');
        }

        $this->container['constellations'] = $constellations;

        return $this;
    }

    /**
     * Gets corporations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]|null
     */
    public function getCorporations()
    {
        return $this->container['corporations'];
    }

    /**
     * Sets corporations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsCorporation[]|null $corporations corporations array
     *
     * @return self
     */
    public function setCorporations($corporations)
    {

        if (!is_null($corporations) && (count($corporations) > 500)) {
            throw new \InvalidArgumentException('invalid value for $corporations when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($corporations)) {
            throw new \InvalidArgumentException('non-nullable corporations cannot be null');
        }

        $this->container['corporations'] = $corporations;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsFaction[]|null
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsFaction[]|null $factions factions array
     *
     * @return self
     */
    public function setFactions($factions)
    {

        if (!is_null($factions) && (count($factions) > 500)) {
            throw new \InvalidArgumentException('invalid value for $factions when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($factions)) {
            throw new \InvalidArgumentException('non-nullable factions cannot be null');
        }

        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets inventory_types
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]|null
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsInventoryType[]|null $inventory_types inventory_types array
     *
     * @return self
     */
    public function setInventoryTypes($inventory_types)
    {

        if (!is_null($inventory_types) && (count($inventory_types) > 500)) {
            throw new \InvalidArgumentException('invalid value for $inventory_types when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($inventory_types)) {
            throw new \InvalidArgumentException('non-nullable inventory_types cannot be null');
        }

        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsRegion[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsRegion[]|null $regions regions array
     *
     * @return self
     */
    public function setRegions($regions)
    {

        if (!is_null($regions) && (count($regions) > 500)) {
            throw new \InvalidArgumentException('invalid value for $regions when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }

        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsStation[]|null
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsStation[]|null $stations stations array
     *
     * @return self
     */
    public function setStations($stations)
    {

        if (!is_null($stations) && (count($stations) > 500)) {
            throw new \InvalidArgumentException('invalid value for $stations when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($stations)) {
            throw new \InvalidArgumentException('non-nullable stations cannot be null');
        }

        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets systems
     *
     * @return \Swagger\Client\Eve\Model\PostUniverseIdsSystem[]|null
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param \Swagger\Client\Eve\Model\PostUniverseIdsSystem[]|null $systems systems array
     *
     * @return self
     */
    public function setSystems($systems)
    {

        if (!is_null($systems) && (count($systems) > 500)) {
            throw new \InvalidArgumentException('invalid value for $systems when calling PostUniverseIdsOk., number of items must be less than or equal to 500.');
        }

        if (is_null($systems)) {
            throw new \InvalidArgumentException('non-nullable systems cannot be null');
        }

        $this->container['systems'] = $systems;

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


