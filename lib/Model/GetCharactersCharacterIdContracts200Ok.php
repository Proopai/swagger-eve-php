<?php
/**
 * GetCharactersCharacterIdContracts200Ok
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
 * GetCharactersCharacterIdContracts200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdContracts200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_contracts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acceptor_id' => 'int',
        'assignee_id' => 'int',
        'availability' => 'string',
        'buyout' => 'float',
        'collateral' => 'float',
        'contract_id' => 'int',
        'date_accepted' => '\DateTime',
        'date_completed' => '\DateTime',
        'date_expired' => '\DateTime',
        'date_issued' => '\DateTime',
        'days_to_complete' => 'int',
        'end_location_id' => 'int',
        'for_corporation' => 'bool',
        'issuer_corporation_id' => 'int',
        'issuer_id' => 'int',
        'price' => 'float',
        'reward' => 'float',
        'start_location_id' => 'int',
        'status' => 'string',
        'title' => 'string',
        'type' => 'string',
        'volume' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acceptor_id' => 'int32',
        'assignee_id' => 'int32',
        'availability' => null,
        'buyout' => 'double',
        'collateral' => 'double',
        'contract_id' => 'int32',
        'date_accepted' => 'date-time',
        'date_completed' => 'date-time',
        'date_expired' => 'date-time',
        'date_issued' => 'date-time',
        'days_to_complete' => 'int32',
        'end_location_id' => 'int64',
        'for_corporation' => null,
        'issuer_corporation_id' => 'int32',
        'issuer_id' => 'int32',
        'price' => 'double',
        'reward' => 'double',
        'start_location_id' => 'int64',
        'status' => null,
        'title' => null,
        'type' => null,
        'volume' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'acceptor_id' => false,
		'assignee_id' => false,
		'availability' => false,
		'buyout' => false,
		'collateral' => false,
		'contract_id' => false,
		'date_accepted' => false,
		'date_completed' => false,
		'date_expired' => false,
		'date_issued' => false,
		'days_to_complete' => false,
		'end_location_id' => false,
		'for_corporation' => false,
		'issuer_corporation_id' => false,
		'issuer_id' => false,
		'price' => false,
		'reward' => false,
		'start_location_id' => false,
		'status' => false,
		'title' => false,
		'type' => false,
		'volume' => false
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
        'acceptor_id' => 'acceptor_id',
        'assignee_id' => 'assignee_id',
        'availability' => 'availability',
        'buyout' => 'buyout',
        'collateral' => 'collateral',
        'contract_id' => 'contract_id',
        'date_accepted' => 'date_accepted',
        'date_completed' => 'date_completed',
        'date_expired' => 'date_expired',
        'date_issued' => 'date_issued',
        'days_to_complete' => 'days_to_complete',
        'end_location_id' => 'end_location_id',
        'for_corporation' => 'for_corporation',
        'issuer_corporation_id' => 'issuer_corporation_id',
        'issuer_id' => 'issuer_id',
        'price' => 'price',
        'reward' => 'reward',
        'start_location_id' => 'start_location_id',
        'status' => 'status',
        'title' => 'title',
        'type' => 'type',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptor_id' => 'setAcceptorId',
        'assignee_id' => 'setAssigneeId',
        'availability' => 'setAvailability',
        'buyout' => 'setBuyout',
        'collateral' => 'setCollateral',
        'contract_id' => 'setContractId',
        'date_accepted' => 'setDateAccepted',
        'date_completed' => 'setDateCompleted',
        'date_expired' => 'setDateExpired',
        'date_issued' => 'setDateIssued',
        'days_to_complete' => 'setDaysToComplete',
        'end_location_id' => 'setEndLocationId',
        'for_corporation' => 'setForCorporation',
        'issuer_corporation_id' => 'setIssuerCorporationId',
        'issuer_id' => 'setIssuerId',
        'price' => 'setPrice',
        'reward' => 'setReward',
        'start_location_id' => 'setStartLocationId',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'type' => 'setType',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptor_id' => 'getAcceptorId',
        'assignee_id' => 'getAssigneeId',
        'availability' => 'getAvailability',
        'buyout' => 'getBuyout',
        'collateral' => 'getCollateral',
        'contract_id' => 'getContractId',
        'date_accepted' => 'getDateAccepted',
        'date_completed' => 'getDateCompleted',
        'date_expired' => 'getDateExpired',
        'date_issued' => 'getDateIssued',
        'days_to_complete' => 'getDaysToComplete',
        'end_location_id' => 'getEndLocationId',
        'for_corporation' => 'getForCorporation',
        'issuer_corporation_id' => 'getIssuerCorporationId',
        'issuer_id' => 'getIssuerId',
        'price' => 'getPrice',
        'reward' => 'getReward',
        'start_location_id' => 'getStartLocationId',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'type' => 'getType',
        'volume' => 'getVolume'
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

    public const AVAILABILITY__PUBLIC = 'public';
    public const AVAILABILITY_PERSONAL = 'personal';
    public const AVAILABILITY_CORPORATION = 'corporation';
    public const AVAILABILITY_ALLIANCE = 'alliance';
    public const STATUS_OUTSTANDING = 'outstanding';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_FINISHED_ISSUER = 'finished_issuer';
    public const STATUS_FINISHED_CONTRACTOR = 'finished_contractor';
    public const STATUS_FINISHED = 'finished';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_FAILED = 'failed';
    public const STATUS_DELETED = 'deleted';
    public const STATUS_REVERSED = 'reversed';
    public const TYPE_UNKNOWN = 'unknown';
    public const TYPE_ITEM_EXCHANGE = 'item_exchange';
    public const TYPE_AUCTION = 'auction';
    public const TYPE_COURIER = 'courier';
    public const TYPE_LOAN = 'loan';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY__PUBLIC,
            self::AVAILABILITY_PERSONAL,
            self::AVAILABILITY_CORPORATION,
            self::AVAILABILITY_ALLIANCE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUTSTANDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_FINISHED_ISSUER,
            self::STATUS_FINISHED_CONTRACTOR,
            self::STATUS_FINISHED,
            self::STATUS_CANCELLED,
            self::STATUS_REJECTED,
            self::STATUS_FAILED,
            self::STATUS_DELETED,
            self::STATUS_REVERSED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_ITEM_EXCHANGE,
            self::TYPE_AUCTION,
            self::TYPE_COURIER,
            self::TYPE_LOAN,
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
        $this->setIfExists('acceptor_id', $data ?? [], null);
        $this->setIfExists('assignee_id', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('buyout', $data ?? [], null);
        $this->setIfExists('collateral', $data ?? [], null);
        $this->setIfExists('contract_id', $data ?? [], null);
        $this->setIfExists('date_accepted', $data ?? [], null);
        $this->setIfExists('date_completed', $data ?? [], null);
        $this->setIfExists('date_expired', $data ?? [], null);
        $this->setIfExists('date_issued', $data ?? [], null);
        $this->setIfExists('days_to_complete', $data ?? [], null);
        $this->setIfExists('end_location_id', $data ?? [], null);
        $this->setIfExists('for_corporation', $data ?? [], null);
        $this->setIfExists('issuer_corporation_id', $data ?? [], null);
        $this->setIfExists('issuer_id', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('start_location_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
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

        if ($this->container['acceptor_id'] === null) {
            $invalidProperties[] = "'acceptor_id' can't be null";
        }
        if ($this->container['assignee_id'] === null) {
            $invalidProperties[] = "'assignee_id' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($this->container['availability']) && !in_array($this->container['availability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability', must be one of '%s'",
                $this->container['availability'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contract_id'] === null) {
            $invalidProperties[] = "'contract_id' can't be null";
        }
        if ($this->container['date_expired'] === null) {
            $invalidProperties[] = "'date_expired' can't be null";
        }
        if ($this->container['date_issued'] === null) {
            $invalidProperties[] = "'date_issued' can't be null";
        }
        if ($this->container['for_corporation'] === null) {
            $invalidProperties[] = "'for_corporation' can't be null";
        }
        if ($this->container['issuer_corporation_id'] === null) {
            $invalidProperties[] = "'issuer_corporation_id' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalidProperties[] = "'issuer_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets acceptor_id
     *
     * @return int
     */
    public function getAcceptorId()
    {
        return $this->container['acceptor_id'];
    }

    /**
     * Sets acceptor_id
     *
     * @param int $acceptor_id Who will accept the contract
     *
     * @return self
     */
    public function setAcceptorId($acceptor_id)
    {

        if (is_null($acceptor_id)) {
            throw new \InvalidArgumentException('non-nullable acceptor_id cannot be null');
        }

        $this->container['acceptor_id'] = $acceptor_id;

        return $this;
    }

    /**
     * Gets assignee_id
     *
     * @return int
     */
    public function getAssigneeId()
    {
        return $this->container['assignee_id'];
    }

    /**
     * Sets assignee_id
     *
     * @param int $assignee_id ID to whom the contract is assigned, can be alliance, corporation or character ID
     *
     * @return self
     */
    public function setAssigneeId($assignee_id)
    {

        if (is_null($assignee_id)) {
            throw new \InvalidArgumentException('non-nullable assignee_id cannot be null');
        }

        $this->container['assignee_id'] = $assignee_id;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability To whom the contract is available
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($availability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availability', must be one of '%s'",
                    $availability,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }

        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets buyout
     *
     * @return float|null
     */
    public function getBuyout()
    {
        return $this->container['buyout'];
    }

    /**
     * Sets buyout
     *
     * @param float|null $buyout Buyout price (for Auctions only)
     *
     * @return self
     */
    public function setBuyout($buyout)
    {

        if (is_null($buyout)) {
            throw new \InvalidArgumentException('non-nullable buyout cannot be null');
        }

        $this->container['buyout'] = $buyout;

        return $this;
    }

    /**
     * Gets collateral
     *
     * @return float|null
     */
    public function getCollateral()
    {
        return $this->container['collateral'];
    }

    /**
     * Sets collateral
     *
     * @param float|null $collateral Collateral price (for Couriers only)
     *
     * @return self
     */
    public function setCollateral($collateral)
    {

        if (is_null($collateral)) {
            throw new \InvalidArgumentException('non-nullable collateral cannot be null');
        }

        $this->container['collateral'] = $collateral;

        return $this;
    }

    /**
     * Gets contract_id
     *
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param int $contract_id contract_id integer
     *
     * @return self
     */
    public function setContractId($contract_id)
    {

        if (is_null($contract_id)) {
            throw new \InvalidArgumentException('non-nullable contract_id cannot be null');
        }

        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets date_accepted
     *
     * @return \DateTime|null
     */
    public function getDateAccepted()
    {
        return $this->container['date_accepted'];
    }

    /**
     * Sets date_accepted
     *
     * @param \DateTime|null $date_accepted Date of confirmation of contract
     *
     * @return self
     */
    public function setDateAccepted($date_accepted)
    {

        if (is_null($date_accepted)) {
            throw new \InvalidArgumentException('non-nullable date_accepted cannot be null');
        }

        $this->container['date_accepted'] = $date_accepted;

        return $this;
    }

    /**
     * Gets date_completed
     *
     * @return \DateTime|null
     */
    public function getDateCompleted()
    {
        return $this->container['date_completed'];
    }

    /**
     * Sets date_completed
     *
     * @param \DateTime|null $date_completed Date of completed of contract
     *
     * @return self
     */
    public function setDateCompleted($date_completed)
    {

        if (is_null($date_completed)) {
            throw new \InvalidArgumentException('non-nullable date_completed cannot be null');
        }

        $this->container['date_completed'] = $date_completed;

        return $this;
    }

    /**
     * Gets date_expired
     *
     * @return \DateTime
     */
    public function getDateExpired()
    {
        return $this->container['date_expired'];
    }

    /**
     * Sets date_expired
     *
     * @param \DateTime $date_expired Expiration date of the contract
     *
     * @return self
     */
    public function setDateExpired($date_expired)
    {

        if (is_null($date_expired)) {
            throw new \InvalidArgumentException('non-nullable date_expired cannot be null');
        }

        $this->container['date_expired'] = $date_expired;

        return $this;
    }

    /**
     * Gets date_issued
     *
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     *
     * @param \DateTime $date_issued Сreation date of the contract
     *
     * @return self
     */
    public function setDateIssued($date_issued)
    {

        if (is_null($date_issued)) {
            throw new \InvalidArgumentException('non-nullable date_issued cannot be null');
        }

        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets days_to_complete
     *
     * @return int|null
     */
    public function getDaysToComplete()
    {
        return $this->container['days_to_complete'];
    }

    /**
     * Sets days_to_complete
     *
     * @param int|null $days_to_complete Number of days to perform the contract
     *
     * @return self
     */
    public function setDaysToComplete($days_to_complete)
    {

        if (is_null($days_to_complete)) {
            throw new \InvalidArgumentException('non-nullable days_to_complete cannot be null');
        }

        $this->container['days_to_complete'] = $days_to_complete;

        return $this;
    }

    /**
     * Gets end_location_id
     *
     * @return int|null
     */
    public function getEndLocationId()
    {
        return $this->container['end_location_id'];
    }

    /**
     * Sets end_location_id
     *
     * @param int|null $end_location_id End location ID (for Couriers contract)
     *
     * @return self
     */
    public function setEndLocationId($end_location_id)
    {

        if (is_null($end_location_id)) {
            throw new \InvalidArgumentException('non-nullable end_location_id cannot be null');
        }

        $this->container['end_location_id'] = $end_location_id;

        return $this;
    }

    /**
     * Gets for_corporation
     *
     * @return bool
     */
    public function getForCorporation()
    {
        return $this->container['for_corporation'];
    }

    /**
     * Sets for_corporation
     *
     * @param bool $for_corporation true if the contract was issued on behalf of the issuer's corporation
     *
     * @return self
     */
    public function setForCorporation($for_corporation)
    {

        if (is_null($for_corporation)) {
            throw new \InvalidArgumentException('non-nullable for_corporation cannot be null');
        }

        $this->container['for_corporation'] = $for_corporation;

        return $this;
    }

    /**
     * Gets issuer_corporation_id
     *
     * @return int
     */
    public function getIssuerCorporationId()
    {
        return $this->container['issuer_corporation_id'];
    }

    /**
     * Sets issuer_corporation_id
     *
     * @param int $issuer_corporation_id Character's corporation ID for the issuer
     *
     * @return self
     */
    public function setIssuerCorporationId($issuer_corporation_id)
    {

        if (is_null($issuer_corporation_id)) {
            throw new \InvalidArgumentException('non-nullable issuer_corporation_id cannot be null');
        }

        $this->container['issuer_corporation_id'] = $issuer_corporation_id;

        return $this;
    }

    /**
     * Gets issuer_id
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     *
     * @param int $issuer_id Character ID for the issuer
     *
     * @return self
     */
    public function setIssuerId($issuer_id)
    {

        if (is_null($issuer_id)) {
            throw new \InvalidArgumentException('non-nullable issuer_id cannot be null');
        }

        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price of contract (for ItemsExchange and Auctions)
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return float|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param float|null $reward Remuneration for contract (for Couriers only)
     *
     * @return self
     */
    public function setReward($reward)
    {

        if (is_null($reward)) {
            throw new \InvalidArgumentException('non-nullable reward cannot be null');
        }

        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets start_location_id
     *
     * @return int|null
     */
    public function getStartLocationId()
    {
        return $this->container['start_location_id'];
    }

    /**
     * Sets start_location_id
     *
     * @param int|null $start_location_id Start location ID (for Couriers contract)
     *
     * @return self
     */
    public function setStartLocationId($start_location_id)
    {

        if (is_null($start_location_id)) {
            throw new \InvalidArgumentException('non-nullable start_location_id cannot be null');
        }

        $this->container['start_location_id'] = $start_location_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the the contract
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the contract
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the contract
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float|null
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float|null $volume Volume of items in the contract
     *
     * @return self
     */
    public function setVolume($volume)
    {

        if (is_null($volume)) {
            throw new \InvalidArgumentException('non-nullable volume cannot be null');
        }

        $this->container['volume'] = $volume;

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


