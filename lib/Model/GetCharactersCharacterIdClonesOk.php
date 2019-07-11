<?php
/**
 * GetCharactersCharacterIdClonesOk
 *
 * PHP version 5
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
 * The version of the OpenAPI document: 0.8.6
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
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
 */
class GetCharactersCharacterIdClonesOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
      */
    protected static $openAPIFormats = [
        'home_location' => null,
        'jump_clones' => null,
        'last_clone_jump_date' => 'date-time',
        'last_station_change_date' => 'date-time'
    ];

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
        $this->container['home_location'] = isset($data['home_location']) ? $data['home_location'] : null;
        $this->container['jump_clones'] = isset($data['jump_clones']) ? $data['jump_clones'] : null;
        $this->container['last_clone_jump_date'] = isset($data['last_clone_jump_date']) ? $data['last_clone_jump_date'] : null;
        $this->container['last_station_change_date'] = isset($data['last_station_change_date']) ? $data['last_station_change_date'] : null;
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
     * @return $this
     */
    public function setHomeLocation($home_location)
    {
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
     * @return $this
     */
    public function setJumpClones($jump_clones)
    {
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
     * @return $this
     */
    public function setLastCloneJumpDate($last_clone_jump_date)
    {
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
     * @return $this
     */
    public function setLastStationChangeDate($last_station_change_date)
    {
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
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}


