<?php
/**
 * GetFwLeaderboardsCharactersKills
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
 * GetFwLeaderboardsCharactersKills Class Doc Comment
 *
 * @category Class
 * @description Top 100 rankings of pilots by number of kills from yesterday, last week and in total
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFwLeaderboardsCharactersKills implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_fw_leaderboards_characters_kills';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_total' => '\Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersActiveTotalActiveTotal[]',
        'last_week' => '\Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersLastWeekLastWeek[]',
        'yesterday' => '\Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersYesterdayYesterday[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active_total' => null,
        'last_week' => null,
        'yesterday' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'active_total' => false,
        'last_week' => false,
        'yesterday' => false
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
        'active_total' => 'active_total',
        'last_week' => 'last_week',
        'yesterday' => 'yesterday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_total' => 'setActiveTotal',
        'last_week' => 'setLastWeek',
        'yesterday' => 'setYesterday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_total' => 'getActiveTotal',
        'last_week' => 'getLastWeek',
        'yesterday' => 'getYesterday'
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
        $this->setIfExists('active_total', $data ?? [], null);
        $this->setIfExists('last_week', $data ?? [], null);
        $this->setIfExists('yesterday', $data ?? [], null);
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

        if ($this->container['active_total'] === null) {
            $invalidProperties[] = "'active_total' can't be null";
        }
        if ((count($this->container['active_total']) > 100)) {
            $invalidProperties[] = "invalid value for 'active_total', number of items must be less than or equal to 100.";
        }

        if ($this->container['last_week'] === null) {
            $invalidProperties[] = "'last_week' can't be null";
        }
        if ((count($this->container['last_week']) > 100)) {
            $invalidProperties[] = "invalid value for 'last_week', number of items must be less than or equal to 100.";
        }

        if ($this->container['yesterday'] === null) {
            $invalidProperties[] = "'yesterday' can't be null";
        }
        if ((count($this->container['yesterday']) > 100)) {
            $invalidProperties[] = "invalid value for 'yesterday', number of items must be less than or equal to 100.";
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
     * Gets active_total
     *
     * @return \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersActiveTotalActiveTotal[]
     */
    public function getActiveTotal()
    {
        return $this->container['active_total'];
    }

    /**
     * Sets active_total
     *
     * @param \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersActiveTotalActiveTotal[] $active_total Top 100 ranking of pilots active in faction warfare by total kills. A pilot is considered \"active\" if they have participated in faction warfare in the past 14 days
     *
     * @return self
     */
    public function setActiveTotal($active_total)
    {
        if (is_null($active_total)) {
            throw new \InvalidArgumentException('non-nullable active_total cannot be null');
        }

        /*if ((count($active_total) > 100)) {
            throw new \InvalidArgumentException('invalid value for $active_total when calling GetFwLeaderboardsCharactersKills., number of items must be less than or equal to 100.');
        }*/
        $this->container['active_total'] = $active_total;

        return $this;
    }

    /**
     * Gets last_week
     *
     * @return \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersLastWeekLastWeek[]
     */
    public function getLastWeek()
    {
        return $this->container['last_week'];
    }

    /**
     * Sets last_week
     *
     * @param \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersLastWeekLastWeek[] $last_week Top 100 ranking of pilots by kills in the past week
     *
     * @return self
     */
    public function setLastWeek($last_week)
    {
        if (is_null($last_week)) {
            throw new \InvalidArgumentException('non-nullable last_week cannot be null');
        }

        /*if ((count($last_week) > 100)) {
            throw new \InvalidArgumentException('invalid value for $last_week when calling GetFwLeaderboardsCharactersKills., number of items must be less than or equal to 100.');
        }*/
        $this->container['last_week'] = $last_week;

        return $this;
    }

    /**
     * Gets yesterday
     *
     * @return \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersYesterdayYesterday[]
     */
    public function getYesterday()
    {
        return $this->container['yesterday'];
    }

    /**
     * Sets yesterday
     *
     * @param \Swagger\Client\Eve\Model\GetFwLeaderboardsCharactersYesterdayYesterday[] $yesterday Top 100 ranking of pilots by kills in the past day
     *
     * @return self
     */
    public function setYesterday($yesterday)
    {
        if (is_null($yesterday)) {
            throw new \InvalidArgumentException('non-nullable yesterday cannot be null');
        }

        /*if ((count($yesterday) > 100)) {
            throw new \InvalidArgumentException('invalid value for $yesterday when calling GetFwLeaderboardsCharactersKills., number of items must be less than or equal to 100.');
        }*/
        $this->container['yesterday'] = $yesterday;

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


