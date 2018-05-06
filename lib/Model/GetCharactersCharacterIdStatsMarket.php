<?php
/**
 * GetCharactersCharacterIdStatsMarket
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Eve\Model;

use \ArrayAccess;
use \Swagger\Client\Eve\ObjectSerializer;

/**
 * GetCharactersCharacterIdStatsMarket Class Doc Comment
 *
 * @category Class
 * @description market object
 * @package  Swagger\Client\Eve
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsMarket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_market';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_contracts_courier' => 'int',
        'accept_contracts_item_exchange' => 'int',
        'buy_orders_placed' => 'int',
        'cancel_market_order' => 'int',
        'create_contracts_auction' => 'int',
        'create_contracts_courier' => 'int',
        'create_contracts_item_exchange' => 'int',
        'deliver_courier_contract' => 'int',
        'isk_gained' => 'int',
        'isk_spent' => 'int',
        'modify_market_order' => 'int',
        'search_contracts' => 'int',
        'sell_orders_placed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_contracts_courier' => 'int64',
        'accept_contracts_item_exchange' => 'int64',
        'buy_orders_placed' => 'int64',
        'cancel_market_order' => 'int64',
        'create_contracts_auction' => 'int64',
        'create_contracts_courier' => 'int64',
        'create_contracts_item_exchange' => 'int64',
        'deliver_courier_contract' => 'int64',
        'isk_gained' => 'int64',
        'isk_spent' => 'int64',
        'modify_market_order' => 'int64',
        'search_contracts' => 'int64',
        'sell_orders_placed' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_contracts_courier' => 'accept_contracts_courier',
        'accept_contracts_item_exchange' => 'accept_contracts_item_exchange',
        'buy_orders_placed' => 'buy_orders_placed',
        'cancel_market_order' => 'cancel_market_order',
        'create_contracts_auction' => 'create_contracts_auction',
        'create_contracts_courier' => 'create_contracts_courier',
        'create_contracts_item_exchange' => 'create_contracts_item_exchange',
        'deliver_courier_contract' => 'deliver_courier_contract',
        'isk_gained' => 'isk_gained',
        'isk_spent' => 'isk_spent',
        'modify_market_order' => 'modify_market_order',
        'search_contracts' => 'search_contracts',
        'sell_orders_placed' => 'sell_orders_placed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_contracts_courier' => 'setAcceptContractsCourier',
        'accept_contracts_item_exchange' => 'setAcceptContractsItemExchange',
        'buy_orders_placed' => 'setBuyOrdersPlaced',
        'cancel_market_order' => 'setCancelMarketOrder',
        'create_contracts_auction' => 'setCreateContractsAuction',
        'create_contracts_courier' => 'setCreateContractsCourier',
        'create_contracts_item_exchange' => 'setCreateContractsItemExchange',
        'deliver_courier_contract' => 'setDeliverCourierContract',
        'isk_gained' => 'setIskGained',
        'isk_spent' => 'setIskSpent',
        'modify_market_order' => 'setModifyMarketOrder',
        'search_contracts' => 'setSearchContracts',
        'sell_orders_placed' => 'setSellOrdersPlaced'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_contracts_courier' => 'getAcceptContractsCourier',
        'accept_contracts_item_exchange' => 'getAcceptContractsItemExchange',
        'buy_orders_placed' => 'getBuyOrdersPlaced',
        'cancel_market_order' => 'getCancelMarketOrder',
        'create_contracts_auction' => 'getCreateContractsAuction',
        'create_contracts_courier' => 'getCreateContractsCourier',
        'create_contracts_item_exchange' => 'getCreateContractsItemExchange',
        'deliver_courier_contract' => 'getDeliverCourierContract',
        'isk_gained' => 'getIskGained',
        'isk_spent' => 'getIskSpent',
        'modify_market_order' => 'getModifyMarketOrder',
        'search_contracts' => 'getSearchContracts',
        'sell_orders_placed' => 'getSellOrdersPlaced'
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
        return self::$swaggerModelName;
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
        $this->container['accept_contracts_courier'] = isset($data['accept_contracts_courier']) ? $data['accept_contracts_courier'] : null;
        $this->container['accept_contracts_item_exchange'] = isset($data['accept_contracts_item_exchange']) ? $data['accept_contracts_item_exchange'] : null;
        $this->container['buy_orders_placed'] = isset($data['buy_orders_placed']) ? $data['buy_orders_placed'] : null;
        $this->container['cancel_market_order'] = isset($data['cancel_market_order']) ? $data['cancel_market_order'] : null;
        $this->container['create_contracts_auction'] = isset($data['create_contracts_auction']) ? $data['create_contracts_auction'] : null;
        $this->container['create_contracts_courier'] = isset($data['create_contracts_courier']) ? $data['create_contracts_courier'] : null;
        $this->container['create_contracts_item_exchange'] = isset($data['create_contracts_item_exchange']) ? $data['create_contracts_item_exchange'] : null;
        $this->container['deliver_courier_contract'] = isset($data['deliver_courier_contract']) ? $data['deliver_courier_contract'] : null;
        $this->container['isk_gained'] = isset($data['isk_gained']) ? $data['isk_gained'] : null;
        $this->container['isk_spent'] = isset($data['isk_spent']) ? $data['isk_spent'] : null;
        $this->container['modify_market_order'] = isset($data['modify_market_order']) ? $data['modify_market_order'] : null;
        $this->container['search_contracts'] = isset($data['search_contracts']) ? $data['search_contracts'] : null;
        $this->container['sell_orders_placed'] = isset($data['sell_orders_placed']) ? $data['sell_orders_placed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets accept_contracts_courier
     *
     * @return int
     */
    public function getAcceptContractsCourier()
    {
        return $this->container['accept_contracts_courier'];
    }

    /**
     * Sets accept_contracts_courier
     *
     * @param int $accept_contracts_courier accept_contracts_courier integer
     *
     * @return $this
     */
    public function setAcceptContractsCourier($accept_contracts_courier)
    {
        $this->container['accept_contracts_courier'] = $accept_contracts_courier;

        return $this;
    }

    /**
     * Gets accept_contracts_item_exchange
     *
     * @return int
     */
    public function getAcceptContractsItemExchange()
    {
        return $this->container['accept_contracts_item_exchange'];
    }

    /**
     * Sets accept_contracts_item_exchange
     *
     * @param int $accept_contracts_item_exchange accept_contracts_item_exchange integer
     *
     * @return $this
     */
    public function setAcceptContractsItemExchange($accept_contracts_item_exchange)
    {
        $this->container['accept_contracts_item_exchange'] = $accept_contracts_item_exchange;

        return $this;
    }

    /**
     * Gets buy_orders_placed
     *
     * @return int
     */
    public function getBuyOrdersPlaced()
    {
        return $this->container['buy_orders_placed'];
    }

    /**
     * Sets buy_orders_placed
     *
     * @param int $buy_orders_placed buy_orders_placed integer
     *
     * @return $this
     */
    public function setBuyOrdersPlaced($buy_orders_placed)
    {
        $this->container['buy_orders_placed'] = $buy_orders_placed;

        return $this;
    }

    /**
     * Gets cancel_market_order
     *
     * @return int
     */
    public function getCancelMarketOrder()
    {
        return $this->container['cancel_market_order'];
    }

    /**
     * Sets cancel_market_order
     *
     * @param int $cancel_market_order cancel_market_order integer
     *
     * @return $this
     */
    public function setCancelMarketOrder($cancel_market_order)
    {
        $this->container['cancel_market_order'] = $cancel_market_order;

        return $this;
    }

    /**
     * Gets create_contracts_auction
     *
     * @return int
     */
    public function getCreateContractsAuction()
    {
        return $this->container['create_contracts_auction'];
    }

    /**
     * Sets create_contracts_auction
     *
     * @param int $create_contracts_auction create_contracts_auction integer
     *
     * @return $this
     */
    public function setCreateContractsAuction($create_contracts_auction)
    {
        $this->container['create_contracts_auction'] = $create_contracts_auction;

        return $this;
    }

    /**
     * Gets create_contracts_courier
     *
     * @return int
     */
    public function getCreateContractsCourier()
    {
        return $this->container['create_contracts_courier'];
    }

    /**
     * Sets create_contracts_courier
     *
     * @param int $create_contracts_courier create_contracts_courier integer
     *
     * @return $this
     */
    public function setCreateContractsCourier($create_contracts_courier)
    {
        $this->container['create_contracts_courier'] = $create_contracts_courier;

        return $this;
    }

    /**
     * Gets create_contracts_item_exchange
     *
     * @return int
     */
    public function getCreateContractsItemExchange()
    {
        return $this->container['create_contracts_item_exchange'];
    }

    /**
     * Sets create_contracts_item_exchange
     *
     * @param int $create_contracts_item_exchange create_contracts_item_exchange integer
     *
     * @return $this
     */
    public function setCreateContractsItemExchange($create_contracts_item_exchange)
    {
        $this->container['create_contracts_item_exchange'] = $create_contracts_item_exchange;

        return $this;
    }

    /**
     * Gets deliver_courier_contract
     *
     * @return int
     */
    public function getDeliverCourierContract()
    {
        return $this->container['deliver_courier_contract'];
    }

    /**
     * Sets deliver_courier_contract
     *
     * @param int $deliver_courier_contract deliver_courier_contract integer
     *
     * @return $this
     */
    public function setDeliverCourierContract($deliver_courier_contract)
    {
        $this->container['deliver_courier_contract'] = $deliver_courier_contract;

        return $this;
    }

    /**
     * Gets isk_gained
     *
     * @return int
     */
    public function getIskGained()
    {
        return $this->container['isk_gained'];
    }

    /**
     * Sets isk_gained
     *
     * @param int $isk_gained isk_gained integer
     *
     * @return $this
     */
    public function setIskGained($isk_gained)
    {
        $this->container['isk_gained'] = $isk_gained;

        return $this;
    }

    /**
     * Gets isk_spent
     *
     * @return int
     */
    public function getIskSpent()
    {
        return $this->container['isk_spent'];
    }

    /**
     * Sets isk_spent
     *
     * @param int $isk_spent isk_spent integer
     *
     * @return $this
     */
    public function setIskSpent($isk_spent)
    {
        $this->container['isk_spent'] = $isk_spent;

        return $this;
    }

    /**
     * Gets modify_market_order
     *
     * @return int
     */
    public function getModifyMarketOrder()
    {
        return $this->container['modify_market_order'];
    }

    /**
     * Sets modify_market_order
     *
     * @param int $modify_market_order modify_market_order integer
     *
     * @return $this
     */
    public function setModifyMarketOrder($modify_market_order)
    {
        $this->container['modify_market_order'] = $modify_market_order;

        return $this;
    }

    /**
     * Gets search_contracts
     *
     * @return int
     */
    public function getSearchContracts()
    {
        return $this->container['search_contracts'];
    }

    /**
     * Sets search_contracts
     *
     * @param int $search_contracts search_contracts integer
     *
     * @return $this
     */
    public function setSearchContracts($search_contracts)
    {
        $this->container['search_contracts'] = $search_contracts;

        return $this;
    }

    /**
     * Gets sell_orders_placed
     *
     * @return int
     */
    public function getSellOrdersPlaced()
    {
        return $this->container['sell_orders_placed'];
    }

    /**
     * Sets sell_orders_placed
     *
     * @param int $sell_orders_placed sell_orders_placed integer
     *
     * @return $this
     */
    public function setSellOrdersPlaced($sell_orders_placed)
    {
        $this->container['sell_orders_placed'] = $sell_orders_placed;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


