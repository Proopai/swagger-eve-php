<?php
/**
 * GetCorporationsCorporationIdContainersLogs200Ok
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
 * GetCorporationsCorporationIdContainersLogs200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationsCorporationIdContainersLogs200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_containers_logs_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'character_id' => 'int',
        'container_id' => 'int',
        'container_type_id' => 'int',
        'location_flag' => 'string',
        'location_id' => 'int',
        'logged_at' => '\DateTime',
        'new_config_bitmask' => 'int',
        'old_config_bitmask' => 'int',
        'password_type' => 'string',
        'quantity' => 'int',
        'type_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action' => null,
        'character_id' => 'int32',
        'container_id' => 'int64',
        'container_type_id' => 'int32',
        'location_flag' => null,
        'location_id' => 'int64',
        'logged_at' => 'date-time',
        'new_config_bitmask' => 'int32',
        'old_config_bitmask' => 'int32',
        'password_type' => null,
        'quantity' => 'int32',
        'type_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action' => false,
        'character_id' => false,
        'container_id' => false,
        'container_type_id' => false,
        'location_flag' => false,
        'location_id' => false,
        'logged_at' => false,
        'new_config_bitmask' => false,
        'old_config_bitmask' => false,
        'password_type' => false,
        'quantity' => false,
        'type_id' => false
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
        'action' => 'action',
        'character_id' => 'character_id',
        'container_id' => 'container_id',
        'container_type_id' => 'container_type_id',
        'location_flag' => 'location_flag',
        'location_id' => 'location_id',
        'logged_at' => 'logged_at',
        'new_config_bitmask' => 'new_config_bitmask',
        'old_config_bitmask' => 'old_config_bitmask',
        'password_type' => 'password_type',
        'quantity' => 'quantity',
        'type_id' => 'type_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'character_id' => 'setCharacterId',
        'container_id' => 'setContainerId',
        'container_type_id' => 'setContainerTypeId',
        'location_flag' => 'setLocationFlag',
        'location_id' => 'setLocationId',
        'logged_at' => 'setLoggedAt',
        'new_config_bitmask' => 'setNewConfigBitmask',
        'old_config_bitmask' => 'setOldConfigBitmask',
        'password_type' => 'setPasswordType',
        'quantity' => 'setQuantity',
        'type_id' => 'setTypeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'character_id' => 'getCharacterId',
        'container_id' => 'getContainerId',
        'container_type_id' => 'getContainerTypeId',
        'location_flag' => 'getLocationFlag',
        'location_id' => 'getLocationId',
        'logged_at' => 'getLoggedAt',
        'new_config_bitmask' => 'getNewConfigBitmask',
        'old_config_bitmask' => 'getOldConfigBitmask',
        'password_type' => 'getPasswordType',
        'quantity' => 'getQuantity',
        'type_id' => 'getTypeId'
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

    public const ACTION_ADD = 'add';
    public const ACTION_ASSEMBLE = 'assemble';
    public const ACTION_CONFIGURE = 'configure';
    public const ACTION_ENTER_PASSWORD = 'enter_password';
    public const ACTION_LOCK = 'lock';
    public const ACTION_MOVE = 'move';
    public const ACTION_REPACKAGE = 'repackage';
    public const ACTION_SET_NAME = 'set_name';
    public const ACTION_SET_PASSWORD = 'set_password';
    public const ACTION_UNLOCK = 'unlock';
    public const LOCATION_FLAG_ASSET_SAFETY = 'AssetSafety';
    public const LOCATION_FLAG_AUTO_FIT = 'AutoFit';
    public const LOCATION_FLAG_BONUS = 'Bonus';
    public const LOCATION_FLAG_BOOSTER = 'Booster';
    public const LOCATION_FLAG_BOOSTER_BAY = 'BoosterBay';
    public const LOCATION_FLAG_CAPSULE = 'Capsule';
    public const LOCATION_FLAG_CARGO = 'Cargo';
    public const LOCATION_FLAG_CORP_DELIVERIES = 'CorpDeliveries';
    public const LOCATION_FLAG_CORP_SAG1 = 'CorpSAG1';
    public const LOCATION_FLAG_CORP_SAG2 = 'CorpSAG2';
    public const LOCATION_FLAG_CORP_SAG3 = 'CorpSAG3';
    public const LOCATION_FLAG_CORP_SAG4 = 'CorpSAG4';
    public const LOCATION_FLAG_CORP_SAG5 = 'CorpSAG5';
    public const LOCATION_FLAG_CORP_SAG6 = 'CorpSAG6';
    public const LOCATION_FLAG_CORP_SAG7 = 'CorpSAG7';
    public const LOCATION_FLAG_CRATE_LOOT = 'CrateLoot';
    public const LOCATION_FLAG_DELIVERIES = 'Deliveries';
    public const LOCATION_FLAG_DRONE_BAY = 'DroneBay';
    public const LOCATION_FLAG_DUST_BATTLE = 'DustBattle';
    public const LOCATION_FLAG_DUST_DATABANK = 'DustDatabank';
    public const LOCATION_FLAG_FIGHTER_BAY = 'FighterBay';
    public const LOCATION_FLAG_FIGHTER_TUBE0 = 'FighterTube0';
    public const LOCATION_FLAG_FIGHTER_TUBE1 = 'FighterTube1';
    public const LOCATION_FLAG_FIGHTER_TUBE2 = 'FighterTube2';
    public const LOCATION_FLAG_FIGHTER_TUBE3 = 'FighterTube3';
    public const LOCATION_FLAG_FIGHTER_TUBE4 = 'FighterTube4';
    public const LOCATION_FLAG_FLEET_HANGAR = 'FleetHangar';
    public const LOCATION_FLAG_FRIGATE_ESCAPE_BAY = 'FrigateEscapeBay';
    public const LOCATION_FLAG_HANGAR = 'Hangar';
    public const LOCATION_FLAG_HANGAR_ALL = 'HangarAll';
    public const LOCATION_FLAG_HI_SLOT0 = 'HiSlot0';
    public const LOCATION_FLAG_HI_SLOT1 = 'HiSlot1';
    public const LOCATION_FLAG_HI_SLOT2 = 'HiSlot2';
    public const LOCATION_FLAG_HI_SLOT3 = 'HiSlot3';
    public const LOCATION_FLAG_HI_SLOT4 = 'HiSlot4';
    public const LOCATION_FLAG_HI_SLOT5 = 'HiSlot5';
    public const LOCATION_FLAG_HI_SLOT6 = 'HiSlot6';
    public const LOCATION_FLAG_HI_SLOT7 = 'HiSlot7';
    public const LOCATION_FLAG_HIDDEN_MODIFIERS = 'HiddenModifiers';
    public const LOCATION_FLAG_IMPLANT = 'Implant';
    public const LOCATION_FLAG_IMPOUNDED = 'Impounded';
    public const LOCATION_FLAG_JUNKYARD_REPROCESSED = 'JunkyardReprocessed';
    public const LOCATION_FLAG_JUNKYARD_TRASHED = 'JunkyardTrashed';
    public const LOCATION_FLAG_LO_SLOT0 = 'LoSlot0';
    public const LOCATION_FLAG_LO_SLOT1 = 'LoSlot1';
    public const LOCATION_FLAG_LO_SLOT2 = 'LoSlot2';
    public const LOCATION_FLAG_LO_SLOT3 = 'LoSlot3';
    public const LOCATION_FLAG_LO_SLOT4 = 'LoSlot4';
    public const LOCATION_FLAG_LO_SLOT5 = 'LoSlot5';
    public const LOCATION_FLAG_LO_SLOT6 = 'LoSlot6';
    public const LOCATION_FLAG_LO_SLOT7 = 'LoSlot7';
    public const LOCATION_FLAG_LOCKED = 'Locked';
    public const LOCATION_FLAG_MED_SLOT0 = 'MedSlot0';
    public const LOCATION_FLAG_MED_SLOT1 = 'MedSlot1';
    public const LOCATION_FLAG_MED_SLOT2 = 'MedSlot2';
    public const LOCATION_FLAG_MED_SLOT3 = 'MedSlot3';
    public const LOCATION_FLAG_MED_SLOT4 = 'MedSlot4';
    public const LOCATION_FLAG_MED_SLOT5 = 'MedSlot5';
    public const LOCATION_FLAG_MED_SLOT6 = 'MedSlot6';
    public const LOCATION_FLAG_MED_SLOT7 = 'MedSlot7';
    public const LOCATION_FLAG_OFFICE_FOLDER = 'OfficeFolder';
    public const LOCATION_FLAG_PILOT = 'Pilot';
    public const LOCATION_FLAG_PLANET_SURFACE = 'PlanetSurface';
    public const LOCATION_FLAG_QUAFE_BAY = 'QuafeBay';
    public const LOCATION_FLAG_QUANTUM_CORE_ROOM = 'QuantumCoreRoom';
    public const LOCATION_FLAG_REWARD = 'Reward';
    public const LOCATION_FLAG_RIG_SLOT0 = 'RigSlot0';
    public const LOCATION_FLAG_RIG_SLOT1 = 'RigSlot1';
    public const LOCATION_FLAG_RIG_SLOT2 = 'RigSlot2';
    public const LOCATION_FLAG_RIG_SLOT3 = 'RigSlot3';
    public const LOCATION_FLAG_RIG_SLOT4 = 'RigSlot4';
    public const LOCATION_FLAG_RIG_SLOT5 = 'RigSlot5';
    public const LOCATION_FLAG_RIG_SLOT6 = 'RigSlot6';
    public const LOCATION_FLAG_RIG_SLOT7 = 'RigSlot7';
    public const LOCATION_FLAG_SECONDARY_STORAGE = 'SecondaryStorage';
    public const LOCATION_FLAG_SERVICE_SLOT0 = 'ServiceSlot0';
    public const LOCATION_FLAG_SERVICE_SLOT1 = 'ServiceSlot1';
    public const LOCATION_FLAG_SERVICE_SLOT2 = 'ServiceSlot2';
    public const LOCATION_FLAG_SERVICE_SLOT3 = 'ServiceSlot3';
    public const LOCATION_FLAG_SERVICE_SLOT4 = 'ServiceSlot4';
    public const LOCATION_FLAG_SERVICE_SLOT5 = 'ServiceSlot5';
    public const LOCATION_FLAG_SERVICE_SLOT6 = 'ServiceSlot6';
    public const LOCATION_FLAG_SERVICE_SLOT7 = 'ServiceSlot7';
    public const LOCATION_FLAG_SHIP_HANGAR = 'ShipHangar';
    public const LOCATION_FLAG_SHIP_OFFLINE = 'ShipOffline';
    public const LOCATION_FLAG_SKILL = 'Skill';
    public const LOCATION_FLAG_SKILL_IN_TRAINING = 'SkillInTraining';
    public const LOCATION_FLAG_SPECIALIZED_AMMO_HOLD = 'SpecializedAmmoHold';
    public const LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD = 'SpecializedCommandCenterHold';
    public const LOCATION_FLAG_SPECIALIZED_FUEL_BAY = 'SpecializedFuelBay';
    public const LOCATION_FLAG_SPECIALIZED_GAS_HOLD = 'SpecializedGasHold';
    public const LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD = 'SpecializedIndustrialShipHold';
    public const LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD = 'SpecializedLargeShipHold';
    public const LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY = 'SpecializedMaterialBay';
    public const LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD = 'SpecializedMediumShipHold';
    public const LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD = 'SpecializedMineralHold';
    public const LOCATION_FLAG_SPECIALIZED_ORE_HOLD = 'SpecializedOreHold';
    public const LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD = 'SpecializedPlanetaryCommoditiesHold';
    public const LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD = 'SpecializedSalvageHold';
    public const LOCATION_FLAG_SPECIALIZED_SHIP_HOLD = 'SpecializedShipHold';
    public const LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD = 'SpecializedSmallShipHold';
    public const LOCATION_FLAG_STRUCTURE_ACTIVE = 'StructureActive';
    public const LOCATION_FLAG_STRUCTURE_FUEL = 'StructureFuel';
    public const LOCATION_FLAG_STRUCTURE_INACTIVE = 'StructureInactive';
    public const LOCATION_FLAG_STRUCTURE_OFFLINE = 'StructureOffline';
    public const LOCATION_FLAG_SUB_SYSTEM_BAY = 'SubSystemBay';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT0 = 'SubSystemSlot0';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT1 = 'SubSystemSlot1';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT2 = 'SubSystemSlot2';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT3 = 'SubSystemSlot3';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT4 = 'SubSystemSlot4';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT5 = 'SubSystemSlot5';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT6 = 'SubSystemSlot6';
    public const LOCATION_FLAG_SUB_SYSTEM_SLOT7 = 'SubSystemSlot7';
    public const LOCATION_FLAG_UNLOCKED = 'Unlocked';
    public const LOCATION_FLAG_WALLET = 'Wallet';
    public const LOCATION_FLAG_WARDROBE = 'Wardrobe';
    public const PASSWORD_TYPE_CONFIG = 'config';
    public const PASSWORD_TYPE_GENERAL = 'general';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_ASSEMBLE,
            self::ACTION_CONFIGURE,
            self::ACTION_ENTER_PASSWORD,
            self::ACTION_LOCK,
            self::ACTION_MOVE,
            self::ACTION_REPACKAGE,
            self::ACTION_SET_NAME,
            self::ACTION_SET_PASSWORD,
            self::ACTION_UNLOCK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationFlagAllowableValues()
    {
        return [
            self::LOCATION_FLAG_ASSET_SAFETY,
            self::LOCATION_FLAG_AUTO_FIT,
            self::LOCATION_FLAG_BONUS,
            self::LOCATION_FLAG_BOOSTER,
            self::LOCATION_FLAG_BOOSTER_BAY,
            self::LOCATION_FLAG_CAPSULE,
            self::LOCATION_FLAG_CARGO,
            self::LOCATION_FLAG_CORP_DELIVERIES,
            self::LOCATION_FLAG_CORP_SAG1,
            self::LOCATION_FLAG_CORP_SAG2,
            self::LOCATION_FLAG_CORP_SAG3,
            self::LOCATION_FLAG_CORP_SAG4,
            self::LOCATION_FLAG_CORP_SAG5,
            self::LOCATION_FLAG_CORP_SAG6,
            self::LOCATION_FLAG_CORP_SAG7,
            self::LOCATION_FLAG_CRATE_LOOT,
            self::LOCATION_FLAG_DELIVERIES,
            self::LOCATION_FLAG_DRONE_BAY,
            self::LOCATION_FLAG_DUST_BATTLE,
            self::LOCATION_FLAG_DUST_DATABANK,
            self::LOCATION_FLAG_FIGHTER_BAY,
            self::LOCATION_FLAG_FIGHTER_TUBE0,
            self::LOCATION_FLAG_FIGHTER_TUBE1,
            self::LOCATION_FLAG_FIGHTER_TUBE2,
            self::LOCATION_FLAG_FIGHTER_TUBE3,
            self::LOCATION_FLAG_FIGHTER_TUBE4,
            self::LOCATION_FLAG_FLEET_HANGAR,
            self::LOCATION_FLAG_FRIGATE_ESCAPE_BAY,
            self::LOCATION_FLAG_HANGAR,
            self::LOCATION_FLAG_HANGAR_ALL,
            self::LOCATION_FLAG_HI_SLOT0,
            self::LOCATION_FLAG_HI_SLOT1,
            self::LOCATION_FLAG_HI_SLOT2,
            self::LOCATION_FLAG_HI_SLOT3,
            self::LOCATION_FLAG_HI_SLOT4,
            self::LOCATION_FLAG_HI_SLOT5,
            self::LOCATION_FLAG_HI_SLOT6,
            self::LOCATION_FLAG_HI_SLOT7,
            self::LOCATION_FLAG_HIDDEN_MODIFIERS,
            self::LOCATION_FLAG_IMPLANT,
            self::LOCATION_FLAG_IMPOUNDED,
            self::LOCATION_FLAG_JUNKYARD_REPROCESSED,
            self::LOCATION_FLAG_JUNKYARD_TRASHED,
            self::LOCATION_FLAG_LO_SLOT0,
            self::LOCATION_FLAG_LO_SLOT1,
            self::LOCATION_FLAG_LO_SLOT2,
            self::LOCATION_FLAG_LO_SLOT3,
            self::LOCATION_FLAG_LO_SLOT4,
            self::LOCATION_FLAG_LO_SLOT5,
            self::LOCATION_FLAG_LO_SLOT6,
            self::LOCATION_FLAG_LO_SLOT7,
            self::LOCATION_FLAG_LOCKED,
            self::LOCATION_FLAG_MED_SLOT0,
            self::LOCATION_FLAG_MED_SLOT1,
            self::LOCATION_FLAG_MED_SLOT2,
            self::LOCATION_FLAG_MED_SLOT3,
            self::LOCATION_FLAG_MED_SLOT4,
            self::LOCATION_FLAG_MED_SLOT5,
            self::LOCATION_FLAG_MED_SLOT6,
            self::LOCATION_FLAG_MED_SLOT7,
            self::LOCATION_FLAG_OFFICE_FOLDER,
            self::LOCATION_FLAG_PILOT,
            self::LOCATION_FLAG_PLANET_SURFACE,
            self::LOCATION_FLAG_QUAFE_BAY,
            self::LOCATION_FLAG_QUANTUM_CORE_ROOM,
            self::LOCATION_FLAG_REWARD,
            self::LOCATION_FLAG_RIG_SLOT0,
            self::LOCATION_FLAG_RIG_SLOT1,
            self::LOCATION_FLAG_RIG_SLOT2,
            self::LOCATION_FLAG_RIG_SLOT3,
            self::LOCATION_FLAG_RIG_SLOT4,
            self::LOCATION_FLAG_RIG_SLOT5,
            self::LOCATION_FLAG_RIG_SLOT6,
            self::LOCATION_FLAG_RIG_SLOT7,
            self::LOCATION_FLAG_SECONDARY_STORAGE,
            self::LOCATION_FLAG_SERVICE_SLOT0,
            self::LOCATION_FLAG_SERVICE_SLOT1,
            self::LOCATION_FLAG_SERVICE_SLOT2,
            self::LOCATION_FLAG_SERVICE_SLOT3,
            self::LOCATION_FLAG_SERVICE_SLOT4,
            self::LOCATION_FLAG_SERVICE_SLOT5,
            self::LOCATION_FLAG_SERVICE_SLOT6,
            self::LOCATION_FLAG_SERVICE_SLOT7,
            self::LOCATION_FLAG_SHIP_HANGAR,
            self::LOCATION_FLAG_SHIP_OFFLINE,
            self::LOCATION_FLAG_SKILL,
            self::LOCATION_FLAG_SKILL_IN_TRAINING,
            self::LOCATION_FLAG_SPECIALIZED_AMMO_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_COMMAND_CENTER_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_FUEL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_GAS_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_INDUSTRIAL_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_LARGE_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MATERIAL_BAY,
            self::LOCATION_FLAG_SPECIALIZED_MEDIUM_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_MINERAL_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_ORE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_PLANETARY_COMMODITIES_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SALVAGE_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SHIP_HOLD,
            self::LOCATION_FLAG_SPECIALIZED_SMALL_SHIP_HOLD,
            self::LOCATION_FLAG_STRUCTURE_ACTIVE,
            self::LOCATION_FLAG_STRUCTURE_FUEL,
            self::LOCATION_FLAG_STRUCTURE_INACTIVE,
            self::LOCATION_FLAG_STRUCTURE_OFFLINE,
            self::LOCATION_FLAG_SUB_SYSTEM_BAY,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT0,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT1,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT2,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT3,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT4,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT5,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT6,
            self::LOCATION_FLAG_SUB_SYSTEM_SLOT7,
            self::LOCATION_FLAG_UNLOCKED,
            self::LOCATION_FLAG_WALLET,
            self::LOCATION_FLAG_WARDROBE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPasswordTypeAllowableValues()
    {
        return [
            self::PASSWORD_TYPE_CONFIG,
            self::PASSWORD_TYPE_GENERAL,
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
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('character_id', $data ?? [], null);
        $this->setIfExists('container_id', $data ?? [], null);
        $this->setIfExists('container_type_id', $data ?? [], null);
        $this->setIfExists('location_flag', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('logged_at', $data ?? [], null);
        $this->setIfExists('new_config_bitmask', $data ?? [], null);
        $this->setIfExists('old_config_bitmask', $data ?? [], null);
        $this->setIfExists('password_type', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
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

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['container_id'] === null) {
            $invalidProperties[] = "'container_id' can't be null";
        }
        if ($this->container['container_type_id'] === null) {
            $invalidProperties[] = "'container_type_id' can't be null";
        }
        if ($this->container['location_flag'] === null) {
            $invalidProperties[] = "'location_flag' can't be null";
        }
        $allowedValues = $this->getLocationFlagAllowableValues();
        if (!is_null($this->container['location_flag']) && !in_array($this->container['location_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'location_flag', must be one of '%s'",
                $this->container['location_flag'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['logged_at'] === null) {
            $invalidProperties[] = "'logged_at' can't be null";
        }
        $allowedValues = $this->getPasswordTypeAllowableValues();
        if (!is_null($this->container['password_type']) && !in_array($this->container['password_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'password_type', must be one of '%s'",
                $this->container['password_type'],
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action string
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        /*$allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id ID of the character who performed the action.
     *
     * @return self
     */
    public function setCharacterId($character_id)
    {
        if (is_null($character_id)) {
            throw new \InvalidArgumentException('non-nullable character_id cannot be null');
        }
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets container_id
     *
     * @return int
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param int $container_id ID of the container
     *
     * @return self
     */
    public function setContainerId($container_id)
    {
        if (is_null($container_id)) {
            throw new \InvalidArgumentException('non-nullable container_id cannot be null');
        }
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets container_type_id
     *
     * @return int
     */
    public function getContainerTypeId()
    {
        return $this->container['container_type_id'];
    }

    /**
     * Sets container_type_id
     *
     * @param int $container_type_id Type ID of the container
     *
     * @return self
     */
    public function setContainerTypeId($container_type_id)
    {
        if (is_null($container_type_id)) {
            throw new \InvalidArgumentException('non-nullable container_type_id cannot be null');
        }
        $this->container['container_type_id'] = $container_type_id;

        return $this;
    }

    /**
     * Gets location_flag
     *
     * @return string
     */
    public function getLocationFlag()
    {
        return $this->container['location_flag'];
    }

    /**
     * Sets location_flag
     *
     * @param string $location_flag location_flag string
     *
     * @return self
     */
    public function setLocationFlag($location_flag)
    {
        if (is_null($location_flag)) {
            throw new \InvalidArgumentException('non-nullable location_flag cannot be null');
        }
        /*$allowedValues = $this->getLocationFlagAllowableValues();
        if (!in_array($location_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'location_flag', must be one of '%s'",
                    $location_flag,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['location_flag'] = $location_flag;

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
     * @param int $location_id location_id integer
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets logged_at
     *
     * @return \DateTime
     */
    public function getLoggedAt()
    {
        return $this->container['logged_at'];
    }

    /**
     * Sets logged_at
     *
     * @param \DateTime $logged_at Timestamp when this log was created
     *
     * @return self
     */
    public function setLoggedAt($logged_at)
    {
        if (is_null($logged_at)) {
            throw new \InvalidArgumentException('non-nullable logged_at cannot be null');
        }
        $this->container['logged_at'] = $logged_at;

        return $this;
    }

    /**
     * Gets new_config_bitmask
     *
     * @return int|null
     */
    public function getNewConfigBitmask()
    {
        return $this->container['new_config_bitmask'];
    }

    /**
     * Sets new_config_bitmask
     *
     * @param int|null $new_config_bitmask new_config_bitmask integer
     *
     * @return self
     */
    public function setNewConfigBitmask($new_config_bitmask)
    {
        if (is_null($new_config_bitmask)) {
            throw new \InvalidArgumentException('non-nullable new_config_bitmask cannot be null');
        }
        $this->container['new_config_bitmask'] = $new_config_bitmask;

        return $this;
    }

    /**
     * Gets old_config_bitmask
     *
     * @return int|null
     */
    public function getOldConfigBitmask()
    {
        return $this->container['old_config_bitmask'];
    }

    /**
     * Sets old_config_bitmask
     *
     * @param int|null $old_config_bitmask old_config_bitmask integer
     *
     * @return self
     */
    public function setOldConfigBitmask($old_config_bitmask)
    {
        if (is_null($old_config_bitmask)) {
            throw new \InvalidArgumentException('non-nullable old_config_bitmask cannot be null');
        }
        $this->container['old_config_bitmask'] = $old_config_bitmask;

        return $this;
    }

    /**
     * Gets password_type
     *
     * @return string|null
     */
    public function getPasswordType()
    {
        return $this->container['password_type'];
    }

    /**
     * Sets password_type
     *
     * @param string|null $password_type Type of password set if action is of type SetPassword or EnterPassword
     *
     * @return self
     */
    public function setPasswordType($password_type)
    {
        if (is_null($password_type)) {
            throw new \InvalidArgumentException('non-nullable password_type cannot be null');
        }
        /*$allowedValues = $this->getPasswordTypeAllowableValues();
        if (!in_array($password_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'password_type', must be one of '%s'",
                    $password_type,
                    implode("', '", $allowedValues)
                )
            );
        }*/
        $this->container['password_type'] = $password_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity of the item being acted upon
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id Type ID of the item being acted upon
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

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


