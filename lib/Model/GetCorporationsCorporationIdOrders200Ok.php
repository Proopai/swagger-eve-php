<?php
/**
 * GetCorporationsCorporationIdOrders200Ok
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.7.15
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * GetCorporationsCorporationIdOrders200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetCorporationsCorporationIdOrders200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_orders_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => 'int',
        'escrow' => 'double',
        'is_buy_order' => 'bool',
        'issued' => '\DateTime',
        'issued_by' => 'int',
        'location_id' => 'int',
        'min_volume' => 'int',
        'order_id' => 'int',
        'price' => 'double',
        'range' => 'string',
        'region_id' => 'int',
        'type_id' => 'int',
        'volume_remain' => 'int',
        'volume_total' => 'int',
        'wallet_division' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration' => 'int32',
        'escrow' => 'double',
        'is_buy_order' => null,
        'issued' => 'date-time',
        'issued_by' => 'int32',
        'location_id' => 'int64',
        'min_volume' => 'int32',
        'order_id' => 'int64',
        'price' => 'double',
        'range' => null,
        'region_id' => 'int32',
        'type_id' => 'int32',
        'volume_remain' => 'int32',
        'volume_total' => 'int32',
        'wallet_division' => 'int32'
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
        'duration' => 'duration',
        'escrow' => 'escrow',
        'is_buy_order' => 'is_buy_order',
        'issued' => 'issued',
        'issued_by' => 'issued_by',
        'location_id' => 'location_id',
        'min_volume' => 'min_volume',
        'order_id' => 'order_id',
        'price' => 'price',
        'range' => 'range',
        'region_id' => 'region_id',
        'type_id' => 'type_id',
        'volume_remain' => 'volume_remain',
        'volume_total' => 'volume_total',
        'wallet_division' => 'wallet_division'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'escrow' => 'setEscrow',
        'is_buy_order' => 'setIsBuyOrder',
        'issued' => 'setIssued',
        'issued_by' => 'setIssuedBy',
        'location_id' => 'setLocationId',
        'min_volume' => 'setMinVolume',
        'order_id' => 'setOrderId',
        'price' => 'setPrice',
        'range' => 'setRange',
        'region_id' => 'setRegionId',
        'type_id' => 'setTypeId',
        'volume_remain' => 'setVolumeRemain',
        'volume_total' => 'setVolumeTotal',
        'wallet_division' => 'setWalletDivision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'escrow' => 'getEscrow',
        'is_buy_order' => 'getIsBuyOrder',
        'issued' => 'getIssued',
        'issued_by' => 'getIssuedBy',
        'location_id' => 'getLocationId',
        'min_volume' => 'getMinVolume',
        'order_id' => 'getOrderId',
        'price' => 'getPrice',
        'range' => 'getRange',
        'region_id' => 'getRegionId',
        'type_id' => 'getTypeId',
        'volume_remain' => 'getVolumeRemain',
        'volume_total' => 'getVolumeTotal',
        'wallet_division' => 'getWalletDivision'
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

    const RANGE__1 = '1';
    const RANGE__10 = '10';
    const RANGE__2 = '2';
    const RANGE__20 = '20';
    const RANGE__3 = '3';
    const RANGE__30 = '30';
    const RANGE__4 = '4';
    const RANGE__40 = '40';
    const RANGE__5 = '5';
    const RANGE_REGION = 'region';
    const RANGE_SOLARSYSTEM = 'solarsystem';
    const RANGE_STATION = 'station';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRangeAllowableValues()
    {
        return [
            self::RANGE__1,
            self::RANGE__10,
            self::RANGE__2,
            self::RANGE__20,
            self::RANGE__3,
            self::RANGE__30,
            self::RANGE__4,
            self::RANGE__40,
            self::RANGE__5,
            self::RANGE_REGION,
            self::RANGE_SOLARSYSTEM,
            self::RANGE_STATION,
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
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['escrow'] = $data['escrow'] ?? null;
        $this->container['is_buy_order'] = $data['is_buy_order'] ?? null;
        $this->container['issued'] = $data['issued'] ?? null;
        $this->container['issued_by'] = $data['issued_by'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['min_volume'] = $data['min_volume'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['range'] = $data['range'] ?? null;
        $this->container['region_id'] = $data['region_id'] ?? null;
        $this->container['type_id'] = $data['type_id'] ?? null;
        $this->container['volume_remain'] = $data['volume_remain'] ?? null;
        $this->container['volume_total'] = $data['volume_total'] ?? null;
        $this->container['wallet_division'] = $data['wallet_division'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['issued'] === null) {
            $invalidProperties[] = "'issued' can't be null";
        }
        if ($this->container['issued_by'] === null) {
            $invalidProperties[] = "'issued_by' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        $allowedValues = $this->getRangeAllowableValues();
        if (!is_null($this->container['range']) && !in_array($this->container['range'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'range', must be one of '%s'",
                $this->container['range'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalidProperties[] = "'type_id' can't be null";
        }
        if ($this->container['volume_remain'] === null) {
            $invalidProperties[] = "'volume_remain' can't be null";
        }
        if ($this->container['volume_total'] === null) {
            $invalidProperties[] = "'volume_total' can't be null";
        }
        if ($this->container['wallet_division'] === null) {
            $invalidProperties[] = "'wallet_division' can't be null";
        }
        if (($this->container['wallet_division'] > 7)) {
            $invalidProperties[] = "invalid value for 'wallet_division', must be smaller than or equal to 7.";
        }

        if (($this->container['wallet_division'] < 1)) {
            $invalidProperties[] = "invalid value for 'wallet_division', must be bigger than or equal to 1.";
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
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Number of days for which order is valid (starting from the issued date). An order expires at time issued + duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets escrow
     *
     * @return double|null
     */
    public function getEscrow()
    {
        return $this->container['escrow'];
    }

    /**
     * Sets escrow
     *
     * @param double|null $escrow For buy orders, the amount of ISK in escrow
     *
     * @return self
     */
    public function setEscrow($escrow)
    {
        $this->container['escrow'] = $escrow;

        return $this;
    }

    /**
     * Gets is_buy_order
     *
     * @return bool|null
     */
    public function getIsBuyOrder()
    {
        return $this->container['is_buy_order'];
    }

    /**
     * Sets is_buy_order
     *
     * @param bool|null $is_buy_order True if the order is a bid (buy) order
     *
     * @return self
     */
    public function setIsBuyOrder($is_buy_order)
    {
        $this->container['is_buy_order'] = $is_buy_order;

        return $this;
    }

    /**
     * Gets issued
     *
     * @return \DateTime
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     *
     * @param \DateTime $issued Date and time when this order was issued
     *
     * @return self
     */
    public function setIssued($issued)
    {
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets issued_by
     *
     * @return int
     */
    public function getIssuedBy()
    {
        return $this->container['issued_by'];
    }

    /**
     * Sets issued_by
     *
     * @param int $issued_by The character who issued this order
     *
     * @return self
     */
    public function setIssuedBy($issued_by)
    {
        $this->container['issued_by'] = $issued_by;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id ID of the location where order was placed
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets min_volume
     *
     * @return int|null
     */
    public function getMinVolume()
    {
        return $this->container['min_volume'];
    }

    /**
     * Sets min_volume
     *
     * @param int|null $min_volume For buy orders, the minimum quantity that will be accepted in a matching sell order
     *
     * @return self
     */
    public function setMinVolume($min_volume)
    {
        $this->container['min_volume'] = $min_volume;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id Unique order ID
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Cost per unit for this order
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param string $range Valid order range, numbers are ranges in jumps
     *
     * @return self
     */
    public function setRange($range)
    {
        /*$allowedValues = $this->getRangeAllowableValues();
        if (!in_array($range, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'range', must be one of '%s'",
                    $range,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param int $region_id ID of the region where order was placed
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The type ID of the item transacted in this order
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets volume_remain
     *
     * @return int
     */
    public function getVolumeRemain()
    {
        return $this->container['volume_remain'];
    }

    /**
     * Sets volume_remain
     *
     * @param int $volume_remain Quantity of items still required or offered
     *
     * @return self
     */
    public function setVolumeRemain($volume_remain)
    {
        $this->container['volume_remain'] = $volume_remain;

        return $this;
    }

    /**
     * Gets volume_total
     *
     * @return int
     */
    public function getVolumeTotal()
    {
        return $this->container['volume_total'];
    }

    /**
     * Sets volume_total
     *
     * @param int $volume_total Quantity of items required or offered at time order was placed
     *
     * @return self
     */
    public function setVolumeTotal($volume_total)
    {
        $this->container['volume_total'] = $volume_total;

        return $this;
    }

    /**
     * Gets wallet_division
     *
     * @return int
     */
    public function getWalletDivision()
    {
        return $this->container['wallet_division'];
    }

    /**
     * Sets wallet_division
     *
     * @param int $wallet_division The corporation wallet division used for this order.
     *
     * @return self
     */
    public function setWalletDivision($wallet_division)
    {

        if (($wallet_division > 7)) {
            throw new \InvalidArgumentException('invalid value for $wallet_division when calling GetCorporationsCorporationIdOrders200Ok., must be smaller than or equal to 7.');
        }
        if (($wallet_division < 1)) {
            throw new \InvalidArgumentException('invalid value for $wallet_division when calling GetCorporationsCorporationIdOrders200Ok., must be bigger than or equal to 1.');
        }

        $this->container['wallet_division'] = $wallet_division;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


