<?php
/**
 * GetWarsWarIdOk
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
 * GetWarsWarIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetWarsWarIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_wars_war_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aggressor' => '\Swagger\Client\Eve\Model\GetWarsWarIdAggressor',
        'allies' => '\Swagger\Client\Eve\Model\GetWarsWarIdAlly[]',
        'declared' => '\DateTime',
        'defender' => '\Swagger\Client\Eve\Model\GetWarsWarIdDefender',
        'finished' => '\DateTime',
        'id' => 'int',
        'mutual' => 'bool',
        'open_for_allies' => 'bool',
        'retracted' => '\DateTime',
        'started' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aggressor' => null,
        'allies' => null,
        'declared' => 'date-time',
        'defender' => null,
        'finished' => 'date-time',
        'id' => 'int32',
        'mutual' => null,
        'open_for_allies' => null,
        'retracted' => 'date-time',
        'started' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aggressor' => false,
        'allies' => false,
        'declared' => false,
        'defender' => false,
        'finished' => false,
        'id' => false,
        'mutual' => false,
        'open_for_allies' => false,
        'retracted' => false,
        'started' => false
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
        'aggressor' => 'aggressor',
        'allies' => 'allies',
        'declared' => 'declared',
        'defender' => 'defender',
        'finished' => 'finished',
        'id' => 'id',
        'mutual' => 'mutual',
        'open_for_allies' => 'open_for_allies',
        'retracted' => 'retracted',
        'started' => 'started'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggressor' => 'setAggressor',
        'allies' => 'setAllies',
        'declared' => 'setDeclared',
        'defender' => 'setDefender',
        'finished' => 'setFinished',
        'id' => 'setId',
        'mutual' => 'setMutual',
        'open_for_allies' => 'setOpenForAllies',
        'retracted' => 'setRetracted',
        'started' => 'setStarted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggressor' => 'getAggressor',
        'allies' => 'getAllies',
        'declared' => 'getDeclared',
        'defender' => 'getDefender',
        'finished' => 'getFinished',
        'id' => 'getId',
        'mutual' => 'getMutual',
        'open_for_allies' => 'getOpenForAllies',
        'retracted' => 'getRetracted',
        'started' => 'getStarted'
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
        $this->setIfExists('aggressor', $data ?? [], null);
        $this->setIfExists('allies', $data ?? [], null);
        $this->setIfExists('declared', $data ?? [], null);
        $this->setIfExists('defender', $data ?? [], null);
        $this->setIfExists('finished', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('mutual', $data ?? [], null);
        $this->setIfExists('open_for_allies', $data ?? [], null);
        $this->setIfExists('retracted', $data ?? [], null);
        $this->setIfExists('started', $data ?? [], null);
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

        if ($this->container['aggressor'] === null) {
            $invalidProperties[] = "'aggressor' can't be null";
        }
        if (!is_null($this->container['allies']) && (count($this->container['allies']) > 10000)) {
            $invalidProperties[] = "invalid value for 'allies', number of items must be less than or equal to 10000.";
        }

        if ($this->container['declared'] === null) {
            $invalidProperties[] = "'declared' can't be null";
        }
        if ($this->container['defender'] === null) {
            $invalidProperties[] = "'defender' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['mutual'] === null) {
            $invalidProperties[] = "'mutual' can't be null";
        }
        if ($this->container['open_for_allies'] === null) {
            $invalidProperties[] = "'open_for_allies' can't be null";
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
     * Gets aggressor
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdAggressor
     */
    public function getAggressor()
    {
        return $this->container['aggressor'];
    }

    /**
     * Sets aggressor
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdAggressor $aggressor aggressor
     *
     * @return self
     */
    public function setAggressor($aggressor)
    {
        if (is_null($aggressor)) {
            throw new \InvalidArgumentException('non-nullable aggressor cannot be null');
        }
        $this->container['aggressor'] = $aggressor;

        return $this;
    }

    /**
     * Gets allies
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdAlly[]|null
     */
    public function getAllies()
    {
        return $this->container['allies'];
    }

    /**
     * Sets allies
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdAlly[]|null $allies allied corporations or alliances, each object contains either corporation_id or alliance_id
     *
     * @return self
     */
    public function setAllies($allies)
    {
        if (is_null($allies)) {
            throw new \InvalidArgumentException('non-nullable allies cannot be null');
        }

        if ((count($allies) > 10000)) {
            throw new \InvalidArgumentException('invalid value for $allies when calling GetWarsWarIdOk., number of items must be less than or equal to 10000.');
        }
        $this->container['allies'] = $allies;

        return $this;
    }

    /**
     * Gets declared
     *
     * @return \DateTime
     */
    public function getDeclared()
    {
        return $this->container['declared'];
    }

    /**
     * Sets declared
     *
     * @param \DateTime $declared Time that the war was declared
     *
     * @return self
     */
    public function setDeclared($declared)
    {
        if (is_null($declared)) {
            throw new \InvalidArgumentException('non-nullable declared cannot be null');
        }
        $this->container['declared'] = $declared;

        return $this;
    }

    /**
     * Gets defender
     *
     * @return \Swagger\Client\Eve\Model\GetWarsWarIdDefender
     */
    public function getDefender()
    {
        return $this->container['defender'];
    }

    /**
     * Sets defender
     *
     * @param \Swagger\Client\Eve\Model\GetWarsWarIdDefender $defender defender
     *
     * @return self
     */
    public function setDefender($defender)
    {
        if (is_null($defender)) {
            throw new \InvalidArgumentException('non-nullable defender cannot be null');
        }
        $this->container['defender'] = $defender;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return \DateTime|null
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param \DateTime|null $finished Time the war ended and shooting was no longer allowed
     *
     * @return self
     */
    public function setFinished($finished)
    {
        if (is_null($finished)) {
            throw new \InvalidArgumentException('non-nullable finished cannot be null');
        }
        $this->container['finished'] = $finished;

        return $this;
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
     * @param int $id ID of the specified war
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mutual
     *
     * @return bool
     */
    public function getMutual()
    {
        return $this->container['mutual'];
    }

    /**
     * Sets mutual
     *
     * @param bool $mutual Was the war declared mutual by both parties
     *
     * @return self
     */
    public function setMutual($mutual)
    {
        if (is_null($mutual)) {
            throw new \InvalidArgumentException('non-nullable mutual cannot be null');
        }
        $this->container['mutual'] = $mutual;

        return $this;
    }

    /**
     * Gets open_for_allies
     *
     * @return bool
     */
    public function getOpenForAllies()
    {
        return $this->container['open_for_allies'];
    }

    /**
     * Sets open_for_allies
     *
     * @param bool $open_for_allies Is the war currently open for allies or not
     *
     * @return self
     */
    public function setOpenForAllies($open_for_allies)
    {
        if (is_null($open_for_allies)) {
            throw new \InvalidArgumentException('non-nullable open_for_allies cannot be null');
        }
        $this->container['open_for_allies'] = $open_for_allies;

        return $this;
    }

    /**
     * Gets retracted
     *
     * @return \DateTime|null
     */
    public function getRetracted()
    {
        return $this->container['retracted'];
    }

    /**
     * Sets retracted
     *
     * @param \DateTime|null $retracted Time the war was retracted but both sides could still shoot each other
     *
     * @return self
     */
    public function setRetracted($retracted)
    {
        if (is_null($retracted)) {
            throw new \InvalidArgumentException('non-nullable retracted cannot be null');
        }
        $this->container['retracted'] = $retracted;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime|null $started Time when the war started and both sides could shoot each other
     *
     * @return self
     */
    public function setStarted($started)
    {
        if (is_null($started)) {
            throw new \InvalidArgumentException('non-nullable started cannot be null');
        }
        $this->container['started'] = $started;

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


