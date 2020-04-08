<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails
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
 * The version of the OpenAPI document: 1.3.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
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
 * GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails Class Doc Comment
 *
 * @category Class
 * @description extractor_details object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCharactersCharacterIdPlanetsPlanetIdExtractorDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_planets_planet_id_extractor_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cycle_time' => 'int',
        'head_radius' => 'float',
        'heads' => '\Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdHead[]',
        'product_type_id' => 'int',
        'qty_per_cycle' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cycle_time' => 'int32',
        'head_radius' => 'float',
        'heads' => null,
        'product_type_id' => 'int32',
        'qty_per_cycle' => 'int32'
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
        'cycle_time' => 'cycle_time',
        'head_radius' => 'head_radius',
        'heads' => 'heads',
        'product_type_id' => 'product_type_id',
        'qty_per_cycle' => 'qty_per_cycle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cycle_time' => 'setCycleTime',
        'head_radius' => 'setHeadRadius',
        'heads' => 'setHeads',
        'product_type_id' => 'setProductTypeId',
        'qty_per_cycle' => 'setQtyPerCycle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cycle_time' => 'getCycleTime',
        'head_radius' => 'getHeadRadius',
        'heads' => 'getHeads',
        'product_type_id' => 'getProductTypeId',
        'qty_per_cycle' => 'getQtyPerCycle'
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
        $this->container['cycle_time'] = isset($data['cycle_time']) ? $data['cycle_time'] : null;
        $this->container['head_radius'] = isset($data['head_radius']) ? $data['head_radius'] : null;
        $this->container['heads'] = isset($data['heads']) ? $data['heads'] : null;
        $this->container['product_type_id'] = isset($data['product_type_id']) ? $data['product_type_id'] : null;
        $this->container['qty_per_cycle'] = isset($data['qty_per_cycle']) ? $data['qty_per_cycle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['heads'] === null) {
            $invalidProperties[] = "'heads' can't be null";
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
     * Gets cycle_time
     *
     * @return int|null
     */
    public function getCycleTime()
    {
        return $this->container['cycle_time'];
    }

    /**
     * Sets cycle_time
     *
     * @param int|null $cycle_time in seconds
     *
     * @return $this
     */
    public function setCycleTime($cycle_time)
    {
        $this->container['cycle_time'] = $cycle_time;

        return $this;
    }

    /**
     * Gets head_radius
     *
     * @return float|null
     */
    public function getHeadRadius()
    {
        return $this->container['head_radius'];
    }

    /**
     * Sets head_radius
     *
     * @param float|null $head_radius head_radius number
     *
     * @return $this
     */
    public function setHeadRadius($head_radius)
    {
        $this->container['head_radius'] = $head_radius;

        return $this;
    }

    /**
     * Gets heads
     *
     * @return \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdHead[]
     */
    public function getHeads()
    {
        return $this->container['heads'];
    }

    /**
     * Sets heads
     *
     * @param \Swagger\Client\Eve\Model\GetCharactersCharacterIdPlanetsPlanetIdHead[] $heads heads array
     *
     * @return $this
     */
    public function setHeads($heads)
    {
        $this->container['heads'] = $heads;

        return $this;
    }

    /**
     * Gets product_type_id
     *
     * @return int|null
     */
    public function getProductTypeId()
    {
        return $this->container['product_type_id'];
    }

    /**
     * Sets product_type_id
     *
     * @param int|null $product_type_id product_type_id integer
     *
     * @return $this
     */
    public function setProductTypeId($product_type_id)
    {
        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets qty_per_cycle
     *
     * @return int|null
     */
    public function getQtyPerCycle()
    {
        return $this->container['qty_per_cycle'];
    }

    /**
     * Sets qty_per_cycle
     *
     * @param int|null $qty_per_cycle qty_per_cycle integer
     *
     * @return $this
     */
    public function setQtyPerCycle($qty_per_cycle)
    {
        $this->container['qty_per_cycle'] = $qty_per_cycle;

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


