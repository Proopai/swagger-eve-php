<?php
/**
 * GetCharactersCharacterIdAttributesOk
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
 * GetCharactersCharacterIdAttributesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdAttributesOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_attributes_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accrued_remap_cooldown_date' => '\DateTime',
        'bonus_remaps' => 'int',
        'charisma' => 'int',
        'intelligence' => 'int',
        'last_remap_date' => '\DateTime',
        'memory' => 'int',
        'perception' => 'int',
        'willpower' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accrued_remap_cooldown_date' => 'date-time',
        'bonus_remaps' => 'int32',
        'charisma' => 'int32',
        'intelligence' => 'int32',
        'last_remap_date' => 'date-time',
        'memory' => 'int32',
        'perception' => 'int32',
        'willpower' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accrued_remap_cooldown_date' => false,
		'bonus_remaps' => false,
		'charisma' => false,
		'intelligence' => false,
		'last_remap_date' => false,
		'memory' => false,
		'perception' => false,
		'willpower' => false
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
        'accrued_remap_cooldown_date' => 'accrued_remap_cooldown_date',
        'bonus_remaps' => 'bonus_remaps',
        'charisma' => 'charisma',
        'intelligence' => 'intelligence',
        'last_remap_date' => 'last_remap_date',
        'memory' => 'memory',
        'perception' => 'perception',
        'willpower' => 'willpower'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accrued_remap_cooldown_date' => 'setAccruedRemapCooldownDate',
        'bonus_remaps' => 'setBonusRemaps',
        'charisma' => 'setCharisma',
        'intelligence' => 'setIntelligence',
        'last_remap_date' => 'setLastRemapDate',
        'memory' => 'setMemory',
        'perception' => 'setPerception',
        'willpower' => 'setWillpower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accrued_remap_cooldown_date' => 'getAccruedRemapCooldownDate',
        'bonus_remaps' => 'getBonusRemaps',
        'charisma' => 'getCharisma',
        'intelligence' => 'getIntelligence',
        'last_remap_date' => 'getLastRemapDate',
        'memory' => 'getMemory',
        'perception' => 'getPerception',
        'willpower' => 'getWillpower'
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
        $this->setIfExists('accrued_remap_cooldown_date', $data ?? [], null);
        $this->setIfExists('bonus_remaps', $data ?? [], null);
        $this->setIfExists('charisma', $data ?? [], null);
        $this->setIfExists('intelligence', $data ?? [], null);
        $this->setIfExists('last_remap_date', $data ?? [], null);
        $this->setIfExists('memory', $data ?? [], null);
        $this->setIfExists('perception', $data ?? [], null);
        $this->setIfExists('willpower', $data ?? [], null);
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

        if ($this->container['charisma'] === null) {
            $invalidProperties[] = "'charisma' can't be null";
        }
        if ($this->container['intelligence'] === null) {
            $invalidProperties[] = "'intelligence' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['perception'] === null) {
            $invalidProperties[] = "'perception' can't be null";
        }
        if ($this->container['willpower'] === null) {
            $invalidProperties[] = "'willpower' can't be null";
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
     * Gets accrued_remap_cooldown_date
     *
     * @return \DateTime|null
     */
    public function getAccruedRemapCooldownDate()
    {
        return $this->container['accrued_remap_cooldown_date'];
    }

    /**
     * Sets accrued_remap_cooldown_date
     *
     * @param \DateTime|null $accrued_remap_cooldown_date Neural remapping cooldown after a character uses remap accrued over time
     *
     * @return self
     */
    public function setAccruedRemapCooldownDate($accrued_remap_cooldown_date)
    {
        if (is_null($accrued_remap_cooldown_date)) {
            throw new \InvalidArgumentException('non-nullable accrued_remap_cooldown_date cannot be null');
        }
        $this->container['accrued_remap_cooldown_date'] = $accrued_remap_cooldown_date;

        return $this;
    }

    /**
     * Gets bonus_remaps
     *
     * @return int|null
     */
    public function getBonusRemaps()
    {
        return $this->container['bonus_remaps'];
    }

    /**
     * Sets bonus_remaps
     *
     * @param int|null $bonus_remaps Number of available bonus character neural remaps
     *
     * @return self
     */
    public function setBonusRemaps($bonus_remaps)
    {
        if (is_null($bonus_remaps)) {
            throw new \InvalidArgumentException('non-nullable bonus_remaps cannot be null');
        }
        $this->container['bonus_remaps'] = $bonus_remaps;

        return $this;
    }

    /**
     * Gets charisma
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->container['charisma'];
    }

    /**
     * Sets charisma
     *
     * @param int $charisma charisma integer
     *
     * @return self
     */
    public function setCharisma($charisma)
    {
        if (is_null($charisma)) {
            throw new \InvalidArgumentException('non-nullable charisma cannot be null');
        }
        $this->container['charisma'] = $charisma;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param int $intelligence intelligence integer
     *
     * @return self
     */
    public function setIntelligence($intelligence)
    {
        if (is_null($intelligence)) {
            throw new \InvalidArgumentException('non-nullable intelligence cannot be null');
        }
        $this->container['intelligence'] = $intelligence;

        return $this;
    }

    /**
     * Gets last_remap_date
     *
     * @return \DateTime|null
     */
    public function getLastRemapDate()
    {
        return $this->container['last_remap_date'];
    }

    /**
     * Sets last_remap_date
     *
     * @param \DateTime|null $last_remap_date Datetime of last neural remap, including usage of bonus remaps
     *
     * @return self
     */
    public function setLastRemapDate($last_remap_date)
    {
        if (is_null($last_remap_date)) {
            throw new \InvalidArgumentException('non-nullable last_remap_date cannot be null');
        }
        $this->container['last_remap_date'] = $last_remap_date;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param int $memory memory integer
     *
     * @return self
     */
    public function setMemory($memory)
    {
        if (is_null($memory)) {
            throw new \InvalidArgumentException('non-nullable memory cannot be null');
        }
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets perception
     *
     * @return int
     */
    public function getPerception()
    {
        return $this->container['perception'];
    }

    /**
     * Sets perception
     *
     * @param int $perception perception integer
     *
     * @return self
     */
    public function setPerception($perception)
    {
        if (is_null($perception)) {
            throw new \InvalidArgumentException('non-nullable perception cannot be null');
        }
        $this->container['perception'] = $perception;

        return $this;
    }

    /**
     * Gets willpower
     *
     * @return int
     */
    public function getWillpower()
    {
        return $this->container['willpower'];
    }

    /**
     * Sets willpower
     *
     * @param int $willpower willpower integer
     *
     * @return self
     */
    public function setWillpower($willpower)
    {
        if (is_null($willpower)) {
            throw new \InvalidArgumentException('non-nullable willpower cannot be null');
        }
        $this->container['willpower'] = $willpower;

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


