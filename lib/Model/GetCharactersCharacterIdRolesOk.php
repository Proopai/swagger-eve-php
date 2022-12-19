<?php
/**
 * GetCharactersCharacterIdRolesOk
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
 * GetCharactersCharacterIdRolesOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCharactersCharacterIdRolesOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_characters_character_id_roles_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'roles' => 'string[]',
        'roles_at_base' => 'string[]',
        'roles_at_hq' => 'string[]',
        'roles_at_other' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'roles' => null,
        'roles_at_base' => null,
        'roles_at_hq' => null,
        'roles_at_other' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'roles' => false,
		'roles_at_base' => false,
		'roles_at_hq' => false,
		'roles_at_other' => false
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
        'roles' => 'roles',
        'roles_at_base' => 'roles_at_base',
        'roles_at_hq' => 'roles_at_hq',
        'roles_at_other' => 'roles_at_other'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roles' => 'setRoles',
        'roles_at_base' => 'setRolesAtBase',
        'roles_at_hq' => 'setRolesAtHq',
        'roles_at_other' => 'setRolesAtOther'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roles' => 'getRoles',
        'roles_at_base' => 'getRolesAtBase',
        'roles_at_hq' => 'getRolesAtHq',
        'roles_at_other' => 'getRolesAtOther'
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

    public const ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const ROLES_ACCOUNTANT = 'Accountant';
    public const ROLES_AUDITOR = 'Auditor';
    public const ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    public const ROLES_DIPLOMAT = 'Diplomat';
    public const ROLES_DIRECTOR = 'Director';
    public const ROLES_FACTORY_MANAGER = 'Factory_Manager';
    public const ROLES_FITTING_MANAGER = 'Fitting_Manager';
    public const ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const ROLES_RENT_OFFICE = 'Rent_Office';
    public const ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const ROLES_SECURITY_OFFICER = 'Security_Officer';
    public const ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const ROLES_STATION_MANAGER = 'Station_Manager';
    public const ROLES_TRADER = 'Trader';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const ROLES_AT_BASE_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const ROLES_AT_BASE_ACCOUNTANT = 'Accountant';
    public const ROLES_AT_BASE_AUDITOR = 'Auditor';
    public const ROLES_AT_BASE_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const ROLES_AT_BASE_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const ROLES_AT_BASE_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const ROLES_AT_BASE_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const ROLES_AT_BASE_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const ROLES_AT_BASE_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const ROLES_AT_BASE_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const ROLES_AT_BASE_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const ROLES_AT_BASE_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const ROLES_AT_BASE_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const ROLES_AT_BASE_CONTRACT_MANAGER = 'Contract_Manager';
    public const ROLES_AT_BASE_DIPLOMAT = 'Diplomat';
    public const ROLES_AT_BASE_DIRECTOR = 'Director';
    public const ROLES_AT_BASE_FACTORY_MANAGER = 'Factory_Manager';
    public const ROLES_AT_BASE_FITTING_MANAGER = 'Fitting_Manager';
    public const ROLES_AT_BASE_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const ROLES_AT_BASE_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const ROLES_AT_BASE_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const ROLES_AT_BASE_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const ROLES_AT_BASE_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const ROLES_AT_BASE_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const ROLES_AT_BASE_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const ROLES_AT_BASE_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const ROLES_AT_BASE_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const ROLES_AT_BASE_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const ROLES_AT_BASE_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const ROLES_AT_BASE_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const ROLES_AT_BASE_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const ROLES_AT_BASE_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const ROLES_AT_BASE_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const ROLES_AT_BASE_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const ROLES_AT_BASE_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const ROLES_AT_BASE_RENT_OFFICE = 'Rent_Office';
    public const ROLES_AT_BASE_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const ROLES_AT_BASE_SECURITY_OFFICER = 'Security_Officer';
    public const ROLES_AT_BASE_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const ROLES_AT_BASE_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const ROLES_AT_BASE_STATION_MANAGER = 'Station_Manager';
    public const ROLES_AT_BASE_TRADER = 'Trader';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const ROLES_AT_HQ_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const ROLES_AT_HQ_ACCOUNTANT = 'Accountant';
    public const ROLES_AT_HQ_AUDITOR = 'Auditor';
    public const ROLES_AT_HQ_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const ROLES_AT_HQ_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const ROLES_AT_HQ_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const ROLES_AT_HQ_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const ROLES_AT_HQ_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const ROLES_AT_HQ_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const ROLES_AT_HQ_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const ROLES_AT_HQ_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const ROLES_AT_HQ_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const ROLES_AT_HQ_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const ROLES_AT_HQ_CONTRACT_MANAGER = 'Contract_Manager';
    public const ROLES_AT_HQ_DIPLOMAT = 'Diplomat';
    public const ROLES_AT_HQ_DIRECTOR = 'Director';
    public const ROLES_AT_HQ_FACTORY_MANAGER = 'Factory_Manager';
    public const ROLES_AT_HQ_FITTING_MANAGER = 'Fitting_Manager';
    public const ROLES_AT_HQ_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const ROLES_AT_HQ_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const ROLES_AT_HQ_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const ROLES_AT_HQ_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const ROLES_AT_HQ_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const ROLES_AT_HQ_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const ROLES_AT_HQ_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const ROLES_AT_HQ_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const ROLES_AT_HQ_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const ROLES_AT_HQ_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const ROLES_AT_HQ_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const ROLES_AT_HQ_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const ROLES_AT_HQ_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const ROLES_AT_HQ_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const ROLES_AT_HQ_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const ROLES_AT_HQ_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const ROLES_AT_HQ_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const ROLES_AT_HQ_RENT_OFFICE = 'Rent_Office';
    public const ROLES_AT_HQ_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const ROLES_AT_HQ_SECURITY_OFFICER = 'Security_Officer';
    public const ROLES_AT_HQ_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const ROLES_AT_HQ_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const ROLES_AT_HQ_STATION_MANAGER = 'Station_Manager';
    public const ROLES_AT_HQ_TRADER = 'Trader';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_1 = 'Account_Take_1';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_2 = 'Account_Take_2';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_3 = 'Account_Take_3';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_4 = 'Account_Take_4';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_5 = 'Account_Take_5';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_6 = 'Account_Take_6';
    public const ROLES_AT_OTHER_ACCOUNT_TAKE_7 = 'Account_Take_7';
    public const ROLES_AT_OTHER_ACCOUNTANT = 'Accountant';
    public const ROLES_AT_OTHER_AUDITOR = 'Auditor';
    public const ROLES_AT_OTHER_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    public const ROLES_AT_OTHER_CONFIG_EQUIPMENT = 'Config_Equipment';
    public const ROLES_AT_OTHER_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_1 = 'Container_Take_1';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_2 = 'Container_Take_2';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_3 = 'Container_Take_3';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_4 = 'Container_Take_4';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_5 = 'Container_Take_5';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_6 = 'Container_Take_6';
    public const ROLES_AT_OTHER_CONTAINER_TAKE_7 = 'Container_Take_7';
    public const ROLES_AT_OTHER_CONTRACT_MANAGER = 'Contract_Manager';
    public const ROLES_AT_OTHER_DIPLOMAT = 'Diplomat';
    public const ROLES_AT_OTHER_DIRECTOR = 'Director';
    public const ROLES_AT_OTHER_FACTORY_MANAGER = 'Factory_Manager';
    public const ROLES_AT_OTHER_FITTING_MANAGER = 'Fitting_Manager';
    public const ROLES_AT_OTHER_HANGAR_QUERY_1 = 'Hangar_Query_1';
    public const ROLES_AT_OTHER_HANGAR_QUERY_2 = 'Hangar_Query_2';
    public const ROLES_AT_OTHER_HANGAR_QUERY_3 = 'Hangar_Query_3';
    public const ROLES_AT_OTHER_HANGAR_QUERY_4 = 'Hangar_Query_4';
    public const ROLES_AT_OTHER_HANGAR_QUERY_5 = 'Hangar_Query_5';
    public const ROLES_AT_OTHER_HANGAR_QUERY_6 = 'Hangar_Query_6';
    public const ROLES_AT_OTHER_HANGAR_QUERY_7 = 'Hangar_Query_7';
    public const ROLES_AT_OTHER_HANGAR_TAKE_1 = 'Hangar_Take_1';
    public const ROLES_AT_OTHER_HANGAR_TAKE_2 = 'Hangar_Take_2';
    public const ROLES_AT_OTHER_HANGAR_TAKE_3 = 'Hangar_Take_3';
    public const ROLES_AT_OTHER_HANGAR_TAKE_4 = 'Hangar_Take_4';
    public const ROLES_AT_OTHER_HANGAR_TAKE_5 = 'Hangar_Take_5';
    public const ROLES_AT_OTHER_HANGAR_TAKE_6 = 'Hangar_Take_6';
    public const ROLES_AT_OTHER_HANGAR_TAKE_7 = 'Hangar_Take_7';
    public const ROLES_AT_OTHER_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    public const ROLES_AT_OTHER_PERSONNEL_MANAGER = 'Personnel_Manager';
    public const ROLES_AT_OTHER_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    public const ROLES_AT_OTHER_RENT_OFFICE = 'Rent_Office';
    public const ROLES_AT_OTHER_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    public const ROLES_AT_OTHER_SECURITY_OFFICER = 'Security_Officer';
    public const ROLES_AT_OTHER_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    public const ROLES_AT_OTHER_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    public const ROLES_AT_OTHER_STATION_MANAGER = 'Station_Manager';
    public const ROLES_AT_OTHER_TRADER = 'Trader';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAllowableValues()
    {
        return [
            self::ROLES_ACCOUNT_TAKE_1,
            self::ROLES_ACCOUNT_TAKE_2,
            self::ROLES_ACCOUNT_TAKE_3,
            self::ROLES_ACCOUNT_TAKE_4,
            self::ROLES_ACCOUNT_TAKE_5,
            self::ROLES_ACCOUNT_TAKE_6,
            self::ROLES_ACCOUNT_TAKE_7,
            self::ROLES_ACCOUNTANT,
            self::ROLES_AUDITOR,
            self::ROLES_COMMUNICATIONS_OFFICER,
            self::ROLES_CONFIG_EQUIPMENT,
            self::ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_CONTAINER_TAKE_1,
            self::ROLES_CONTAINER_TAKE_2,
            self::ROLES_CONTAINER_TAKE_3,
            self::ROLES_CONTAINER_TAKE_4,
            self::ROLES_CONTAINER_TAKE_5,
            self::ROLES_CONTAINER_TAKE_6,
            self::ROLES_CONTAINER_TAKE_7,
            self::ROLES_CONTRACT_MANAGER,
            self::ROLES_DIPLOMAT,
            self::ROLES_DIRECTOR,
            self::ROLES_FACTORY_MANAGER,
            self::ROLES_FITTING_MANAGER,
            self::ROLES_HANGAR_QUERY_1,
            self::ROLES_HANGAR_QUERY_2,
            self::ROLES_HANGAR_QUERY_3,
            self::ROLES_HANGAR_QUERY_4,
            self::ROLES_HANGAR_QUERY_5,
            self::ROLES_HANGAR_QUERY_6,
            self::ROLES_HANGAR_QUERY_7,
            self::ROLES_HANGAR_TAKE_1,
            self::ROLES_HANGAR_TAKE_2,
            self::ROLES_HANGAR_TAKE_3,
            self::ROLES_HANGAR_TAKE_4,
            self::ROLES_HANGAR_TAKE_5,
            self::ROLES_HANGAR_TAKE_6,
            self::ROLES_HANGAR_TAKE_7,
            self::ROLES_JUNIOR_ACCOUNTANT,
            self::ROLES_PERSONNEL_MANAGER,
            self::ROLES_RENT_FACTORY_FACILITY,
            self::ROLES_RENT_OFFICE,
            self::ROLES_RENT_RESEARCH_FACILITY,
            self::ROLES_SECURITY_OFFICER,
            self::ROLES_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_STATION_MANAGER,
            self::ROLES_TRADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtBaseAllowableValues()
    {
        return [
            self::ROLES_AT_BASE_ACCOUNT_TAKE_1,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_2,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_3,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_4,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_5,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_6,
            self::ROLES_AT_BASE_ACCOUNT_TAKE_7,
            self::ROLES_AT_BASE_ACCOUNTANT,
            self::ROLES_AT_BASE_AUDITOR,
            self::ROLES_AT_BASE_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_BASE_CONFIG_EQUIPMENT,
            self::ROLES_AT_BASE_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_BASE_CONTAINER_TAKE_1,
            self::ROLES_AT_BASE_CONTAINER_TAKE_2,
            self::ROLES_AT_BASE_CONTAINER_TAKE_3,
            self::ROLES_AT_BASE_CONTAINER_TAKE_4,
            self::ROLES_AT_BASE_CONTAINER_TAKE_5,
            self::ROLES_AT_BASE_CONTAINER_TAKE_6,
            self::ROLES_AT_BASE_CONTAINER_TAKE_7,
            self::ROLES_AT_BASE_CONTRACT_MANAGER,
            self::ROLES_AT_BASE_DIPLOMAT,
            self::ROLES_AT_BASE_DIRECTOR,
            self::ROLES_AT_BASE_FACTORY_MANAGER,
            self::ROLES_AT_BASE_FITTING_MANAGER,
            self::ROLES_AT_BASE_HANGAR_QUERY_1,
            self::ROLES_AT_BASE_HANGAR_QUERY_2,
            self::ROLES_AT_BASE_HANGAR_QUERY_3,
            self::ROLES_AT_BASE_HANGAR_QUERY_4,
            self::ROLES_AT_BASE_HANGAR_QUERY_5,
            self::ROLES_AT_BASE_HANGAR_QUERY_6,
            self::ROLES_AT_BASE_HANGAR_QUERY_7,
            self::ROLES_AT_BASE_HANGAR_TAKE_1,
            self::ROLES_AT_BASE_HANGAR_TAKE_2,
            self::ROLES_AT_BASE_HANGAR_TAKE_3,
            self::ROLES_AT_BASE_HANGAR_TAKE_4,
            self::ROLES_AT_BASE_HANGAR_TAKE_5,
            self::ROLES_AT_BASE_HANGAR_TAKE_6,
            self::ROLES_AT_BASE_HANGAR_TAKE_7,
            self::ROLES_AT_BASE_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_BASE_PERSONNEL_MANAGER,
            self::ROLES_AT_BASE_RENT_FACTORY_FACILITY,
            self::ROLES_AT_BASE_RENT_OFFICE,
            self::ROLES_AT_BASE_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_BASE_SECURITY_OFFICER,
            self::ROLES_AT_BASE_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_BASE_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_BASE_STATION_MANAGER,
            self::ROLES_AT_BASE_TRADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtHqAllowableValues()
    {
        return [
            self::ROLES_AT_HQ_ACCOUNT_TAKE_1,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_2,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_3,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_4,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_5,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_6,
            self::ROLES_AT_HQ_ACCOUNT_TAKE_7,
            self::ROLES_AT_HQ_ACCOUNTANT,
            self::ROLES_AT_HQ_AUDITOR,
            self::ROLES_AT_HQ_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_HQ_CONFIG_EQUIPMENT,
            self::ROLES_AT_HQ_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_HQ_CONTAINER_TAKE_1,
            self::ROLES_AT_HQ_CONTAINER_TAKE_2,
            self::ROLES_AT_HQ_CONTAINER_TAKE_3,
            self::ROLES_AT_HQ_CONTAINER_TAKE_4,
            self::ROLES_AT_HQ_CONTAINER_TAKE_5,
            self::ROLES_AT_HQ_CONTAINER_TAKE_6,
            self::ROLES_AT_HQ_CONTAINER_TAKE_7,
            self::ROLES_AT_HQ_CONTRACT_MANAGER,
            self::ROLES_AT_HQ_DIPLOMAT,
            self::ROLES_AT_HQ_DIRECTOR,
            self::ROLES_AT_HQ_FACTORY_MANAGER,
            self::ROLES_AT_HQ_FITTING_MANAGER,
            self::ROLES_AT_HQ_HANGAR_QUERY_1,
            self::ROLES_AT_HQ_HANGAR_QUERY_2,
            self::ROLES_AT_HQ_HANGAR_QUERY_3,
            self::ROLES_AT_HQ_HANGAR_QUERY_4,
            self::ROLES_AT_HQ_HANGAR_QUERY_5,
            self::ROLES_AT_HQ_HANGAR_QUERY_6,
            self::ROLES_AT_HQ_HANGAR_QUERY_7,
            self::ROLES_AT_HQ_HANGAR_TAKE_1,
            self::ROLES_AT_HQ_HANGAR_TAKE_2,
            self::ROLES_AT_HQ_HANGAR_TAKE_3,
            self::ROLES_AT_HQ_HANGAR_TAKE_4,
            self::ROLES_AT_HQ_HANGAR_TAKE_5,
            self::ROLES_AT_HQ_HANGAR_TAKE_6,
            self::ROLES_AT_HQ_HANGAR_TAKE_7,
            self::ROLES_AT_HQ_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_HQ_PERSONNEL_MANAGER,
            self::ROLES_AT_HQ_RENT_FACTORY_FACILITY,
            self::ROLES_AT_HQ_RENT_OFFICE,
            self::ROLES_AT_HQ_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_HQ_SECURITY_OFFICER,
            self::ROLES_AT_HQ_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_HQ_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_HQ_STATION_MANAGER,
            self::ROLES_AT_HQ_TRADER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRolesAtOtherAllowableValues()
    {
        return [
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_1,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_2,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_3,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_4,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_5,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_6,
            self::ROLES_AT_OTHER_ACCOUNT_TAKE_7,
            self::ROLES_AT_OTHER_ACCOUNTANT,
            self::ROLES_AT_OTHER_AUDITOR,
            self::ROLES_AT_OTHER_COMMUNICATIONS_OFFICER,
            self::ROLES_AT_OTHER_CONFIG_EQUIPMENT,
            self::ROLES_AT_OTHER_CONFIG_STARBASE_EQUIPMENT,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_1,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_2,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_3,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_4,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_5,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_6,
            self::ROLES_AT_OTHER_CONTAINER_TAKE_7,
            self::ROLES_AT_OTHER_CONTRACT_MANAGER,
            self::ROLES_AT_OTHER_DIPLOMAT,
            self::ROLES_AT_OTHER_DIRECTOR,
            self::ROLES_AT_OTHER_FACTORY_MANAGER,
            self::ROLES_AT_OTHER_FITTING_MANAGER,
            self::ROLES_AT_OTHER_HANGAR_QUERY_1,
            self::ROLES_AT_OTHER_HANGAR_QUERY_2,
            self::ROLES_AT_OTHER_HANGAR_QUERY_3,
            self::ROLES_AT_OTHER_HANGAR_QUERY_4,
            self::ROLES_AT_OTHER_HANGAR_QUERY_5,
            self::ROLES_AT_OTHER_HANGAR_QUERY_6,
            self::ROLES_AT_OTHER_HANGAR_QUERY_7,
            self::ROLES_AT_OTHER_HANGAR_TAKE_1,
            self::ROLES_AT_OTHER_HANGAR_TAKE_2,
            self::ROLES_AT_OTHER_HANGAR_TAKE_3,
            self::ROLES_AT_OTHER_HANGAR_TAKE_4,
            self::ROLES_AT_OTHER_HANGAR_TAKE_5,
            self::ROLES_AT_OTHER_HANGAR_TAKE_6,
            self::ROLES_AT_OTHER_HANGAR_TAKE_7,
            self::ROLES_AT_OTHER_JUNIOR_ACCOUNTANT,
            self::ROLES_AT_OTHER_PERSONNEL_MANAGER,
            self::ROLES_AT_OTHER_RENT_FACTORY_FACILITY,
            self::ROLES_AT_OTHER_RENT_OFFICE,
            self::ROLES_AT_OTHER_RENT_RESEARCH_FACILITY,
            self::ROLES_AT_OTHER_SECURITY_OFFICER,
            self::ROLES_AT_OTHER_STARBASE_DEFENSE_OPERATOR,
            self::ROLES_AT_OTHER_STARBASE_FUEL_TECHNICIAN,
            self::ROLES_AT_OTHER_STATION_MANAGER,
            self::ROLES_AT_OTHER_TRADER,
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
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('roles_at_base', $data ?? [], null);
        $this->setIfExists('roles_at_hq', $data ?? [], null);
        $this->setIfExists('roles_at_other', $data ?? [], null);
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

        if (!is_null($this->container['roles']) && (count($this->container['roles']) > 50)) {
            $invalidProperties[] = "invalid value for 'roles', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['roles_at_base']) && (count($this->container['roles_at_base']) > 50)) {
            $invalidProperties[] = "invalid value for 'roles_at_base', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['roles_at_hq']) && (count($this->container['roles_at_hq']) > 50)) {
            $invalidProperties[] = "invalid value for 'roles_at_hq', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['roles_at_other']) && (count($this->container['roles_at_other']) > 50)) {
            $invalidProperties[] = "invalid value for 'roles_at_other', number of items must be less than or equal to 50.";
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
     * Gets roles
     *
     * @return string[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles roles array
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $allowedValues = $this->getRolesAllowableValues();
        if (!is_null($roles) && array_diff($roles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($roles) && (count($roles) > 50)) {
            throw new \InvalidArgumentException('invalid value for $roles when calling GetCharactersCharacterIdRolesOk., number of items must be less than or equal to 50.');
        }

        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }

        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets roles_at_base
     *
     * @return string[]|null
     */
    public function getRolesAtBase()
    {
        return $this->container['roles_at_base'];
    }

    /**
     * Sets roles_at_base
     *
     * @param string[]|null $roles_at_base roles_at_base array
     *
     * @return self
     */
    public function setRolesAtBase($roles_at_base)
    {
        $allowedValues = $this->getRolesAtBaseAllowableValues();
        if (!is_null($roles_at_base) && array_diff($roles_at_base, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_base', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($roles_at_base) && (count($roles_at_base) > 50)) {
            throw new \InvalidArgumentException('invalid value for $roles_at_base when calling GetCharactersCharacterIdRolesOk., number of items must be less than or equal to 50.');
        }

        if (is_null($roles_at_base)) {
            throw new \InvalidArgumentException('non-nullable roles_at_base cannot be null');
        }

        $this->container['roles_at_base'] = $roles_at_base;

        return $this;
    }

    /**
     * Gets roles_at_hq
     *
     * @return string[]|null
     */
    public function getRolesAtHq()
    {
        return $this->container['roles_at_hq'];
    }

    /**
     * Sets roles_at_hq
     *
     * @param string[]|null $roles_at_hq roles_at_hq array
     *
     * @return self
     */
    public function setRolesAtHq($roles_at_hq)
    {
        $allowedValues = $this->getRolesAtHqAllowableValues();
        if (!is_null($roles_at_hq) && array_diff($roles_at_hq, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_hq', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($roles_at_hq) && (count($roles_at_hq) > 50)) {
            throw new \InvalidArgumentException('invalid value for $roles_at_hq when calling GetCharactersCharacterIdRolesOk., number of items must be less than or equal to 50.');
        }

        if (is_null($roles_at_hq)) {
            throw new \InvalidArgumentException('non-nullable roles_at_hq cannot be null');
        }

        $this->container['roles_at_hq'] = $roles_at_hq;

        return $this;
    }

    /**
     * Gets roles_at_other
     *
     * @return string[]|null
     */
    public function getRolesAtOther()
    {
        return $this->container['roles_at_other'];
    }

    /**
     * Sets roles_at_other
     *
     * @param string[]|null $roles_at_other roles_at_other array
     *
     * @return self
     */
    public function setRolesAtOther($roles_at_other)
    {
        $allowedValues = $this->getRolesAtOtherAllowableValues();
        if (!is_null($roles_at_other) && array_diff($roles_at_other, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'roles_at_other', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($roles_at_other) && (count($roles_at_other) > 50)) {
            throw new \InvalidArgumentException('invalid value for $roles_at_other when calling GetCharactersCharacterIdRolesOk., number of items must be less than or equal to 50.');
        }

        if (is_null($roles_at_other)) {
            throw new \InvalidArgumentException('non-nullable roles_at_other cannot be null');
        }

        $this->container['roles_at_other'] = $roles_at_other;

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


