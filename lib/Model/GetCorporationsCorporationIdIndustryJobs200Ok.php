<?php
/**
 * GetCorporationsCorporationIdIndustryJobs200Ok
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
 * GetCorporationsCorporationIdIndustryJobs200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCorporationsCorporationIdIndustryJobs200Ok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_corporations_corporation_id_industry_jobs_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_id' => 'int',
        'blueprint_id' => 'int',
        'blueprint_location_id' => 'int',
        'blueprint_type_id' => 'int',
        'completed_character_id' => 'int',
        'completed_date' => '\DateTime',
        'cost' => 'float',
        'duration' => 'int',
        'end_date' => '\DateTime',
        'facility_id' => 'int',
        'installer_id' => 'int',
        'job_id' => 'int',
        'licensed_runs' => 'int',
        'location_id' => 'int',
        'output_location_id' => 'int',
        'pause_date' => '\DateTime',
        'probability' => 'float',
        'product_type_id' => 'int',
        'runs' => 'int',
        'start_date' => '\DateTime',
        'status' => 'string',
        'successful_runs' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity_id' => 'int32',
        'blueprint_id' => 'int64',
        'blueprint_location_id' => 'int64',
        'blueprint_type_id' => 'int32',
        'completed_character_id' => 'int32',
        'completed_date' => 'date-time',
        'cost' => 'double',
        'duration' => 'int32',
        'end_date' => 'date-time',
        'facility_id' => 'int64',
        'installer_id' => 'int32',
        'job_id' => 'int32',
        'licensed_runs' => 'int32',
        'location_id' => 'int64',
        'output_location_id' => 'int64',
        'pause_date' => 'date-time',
        'probability' => 'float',
        'product_type_id' => 'int32',
        'runs' => 'int32',
        'start_date' => 'date-time',
        'status' => null,
        'successful_runs' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'activity_id' => false,
		'blueprint_id' => false,
		'blueprint_location_id' => false,
		'blueprint_type_id' => false,
		'completed_character_id' => false,
		'completed_date' => false,
		'cost' => false,
		'duration' => false,
		'end_date' => false,
		'facility_id' => false,
		'installer_id' => false,
		'job_id' => false,
		'licensed_runs' => false,
		'location_id' => false,
		'output_location_id' => false,
		'pause_date' => false,
		'probability' => false,
		'product_type_id' => false,
		'runs' => false,
		'start_date' => false,
		'status' => false,
		'successful_runs' => false
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
        'activity_id' => 'activity_id',
        'blueprint_id' => 'blueprint_id',
        'blueprint_location_id' => 'blueprint_location_id',
        'blueprint_type_id' => 'blueprint_type_id',
        'completed_character_id' => 'completed_character_id',
        'completed_date' => 'completed_date',
        'cost' => 'cost',
        'duration' => 'duration',
        'end_date' => 'end_date',
        'facility_id' => 'facility_id',
        'installer_id' => 'installer_id',
        'job_id' => 'job_id',
        'licensed_runs' => 'licensed_runs',
        'location_id' => 'location_id',
        'output_location_id' => 'output_location_id',
        'pause_date' => 'pause_date',
        'probability' => 'probability',
        'product_type_id' => 'product_type_id',
        'runs' => 'runs',
        'start_date' => 'start_date',
        'status' => 'status',
        'successful_runs' => 'successful_runs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_id' => 'setActivityId',
        'blueprint_id' => 'setBlueprintId',
        'blueprint_location_id' => 'setBlueprintLocationId',
        'blueprint_type_id' => 'setBlueprintTypeId',
        'completed_character_id' => 'setCompletedCharacterId',
        'completed_date' => 'setCompletedDate',
        'cost' => 'setCost',
        'duration' => 'setDuration',
        'end_date' => 'setEndDate',
        'facility_id' => 'setFacilityId',
        'installer_id' => 'setInstallerId',
        'job_id' => 'setJobId',
        'licensed_runs' => 'setLicensedRuns',
        'location_id' => 'setLocationId',
        'output_location_id' => 'setOutputLocationId',
        'pause_date' => 'setPauseDate',
        'probability' => 'setProbability',
        'product_type_id' => 'setProductTypeId',
        'runs' => 'setRuns',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'successful_runs' => 'setSuccessfulRuns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_id' => 'getActivityId',
        'blueprint_id' => 'getBlueprintId',
        'blueprint_location_id' => 'getBlueprintLocationId',
        'blueprint_type_id' => 'getBlueprintTypeId',
        'completed_character_id' => 'getCompletedCharacterId',
        'completed_date' => 'getCompletedDate',
        'cost' => 'getCost',
        'duration' => 'getDuration',
        'end_date' => 'getEndDate',
        'facility_id' => 'getFacilityId',
        'installer_id' => 'getInstallerId',
        'job_id' => 'getJobId',
        'licensed_runs' => 'getLicensedRuns',
        'location_id' => 'getLocationId',
        'output_location_id' => 'getOutputLocationId',
        'pause_date' => 'getPauseDate',
        'probability' => 'getProbability',
        'product_type_id' => 'getProductTypeId',
        'runs' => 'getRuns',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'successful_runs' => 'getSuccessfulRuns'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_PAUSED = 'paused';
    public const STATUS_READY = 'ready';
    public const STATUS_REVERTED = 'reverted';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CANCELLED,
            self::STATUS_DELIVERED,
            self::STATUS_PAUSED,
            self::STATUS_READY,
            self::STATUS_REVERTED,
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
        $this->setIfExists('activity_id', $data ?? [], null);
        $this->setIfExists('blueprint_id', $data ?? [], null);
        $this->setIfExists('blueprint_location_id', $data ?? [], null);
        $this->setIfExists('blueprint_type_id', $data ?? [], null);
        $this->setIfExists('completed_character_id', $data ?? [], null);
        $this->setIfExists('completed_date', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('facility_id', $data ?? [], null);
        $this->setIfExists('installer_id', $data ?? [], null);
        $this->setIfExists('job_id', $data ?? [], null);
        $this->setIfExists('licensed_runs', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('output_location_id', $data ?? [], null);
        $this->setIfExists('pause_date', $data ?? [], null);
        $this->setIfExists('probability', $data ?? [], null);
        $this->setIfExists('product_type_id', $data ?? [], null);
        $this->setIfExists('runs', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('successful_runs', $data ?? [], null);
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

        if ($this->container['activity_id'] === null) {
            $invalidProperties[] = "'activity_id' can't be null";
        }
        if ($this->container['blueprint_id'] === null) {
            $invalidProperties[] = "'blueprint_id' can't be null";
        }
        if ($this->container['blueprint_location_id'] === null) {
            $invalidProperties[] = "'blueprint_location_id' can't be null";
        }
        if ($this->container['blueprint_type_id'] === null) {
            $invalidProperties[] = "'blueprint_type_id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['facility_id'] === null) {
            $invalidProperties[] = "'facility_id' can't be null";
        }
        if ($this->container['installer_id'] === null) {
            $invalidProperties[] = "'installer_id' can't be null";
        }
        if ($this->container['job_id'] === null) {
            $invalidProperties[] = "'job_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['output_location_id'] === null) {
            $invalidProperties[] = "'output_location_id' can't be null";
        }
        if ($this->container['runs'] === null) {
            $invalidProperties[] = "'runs' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
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
     * Gets activity_id
     *
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param int $activity_id Job activity ID
     *
     * @return self
     */
    public function setActivityId($activity_id)
    {

        if (is_null($activity_id)) {
            throw new \InvalidArgumentException('non-nullable activity_id cannot be null');
        }

        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets blueprint_id
     *
     * @return int
     */
    public function getBlueprintId()
    {
        return $this->container['blueprint_id'];
    }

    /**
     * Sets blueprint_id
     *
     * @param int $blueprint_id blueprint_id integer
     *
     * @return self
     */
    public function setBlueprintId($blueprint_id)
    {

        if (is_null($blueprint_id)) {
            throw new \InvalidArgumentException('non-nullable blueprint_id cannot be null');
        }

        $this->container['blueprint_id'] = $blueprint_id;

        return $this;
    }

    /**
     * Gets blueprint_location_id
     *
     * @return int
     */
    public function getBlueprintLocationId()
    {
        return $this->container['blueprint_location_id'];
    }

    /**
     * Sets blueprint_location_id
     *
     * @param int $blueprint_location_id Location ID of the location from which the blueprint was installed. Normally a station ID, but can also be an asset (e.g. container) or corporation facility
     *
     * @return self
     */
    public function setBlueprintLocationId($blueprint_location_id)
    {

        if (is_null($blueprint_location_id)) {
            throw new \InvalidArgumentException('non-nullable blueprint_location_id cannot be null');
        }

        $this->container['blueprint_location_id'] = $blueprint_location_id;

        return $this;
    }

    /**
     * Gets blueprint_type_id
     *
     * @return int
     */
    public function getBlueprintTypeId()
    {
        return $this->container['blueprint_type_id'];
    }

    /**
     * Sets blueprint_type_id
     *
     * @param int $blueprint_type_id blueprint_type_id integer
     *
     * @return self
     */
    public function setBlueprintTypeId($blueprint_type_id)
    {

        if (is_null($blueprint_type_id)) {
            throw new \InvalidArgumentException('non-nullable blueprint_type_id cannot be null');
        }

        $this->container['blueprint_type_id'] = $blueprint_type_id;

        return $this;
    }

    /**
     * Gets completed_character_id
     *
     * @return int|null
     */
    public function getCompletedCharacterId()
    {
        return $this->container['completed_character_id'];
    }

    /**
     * Sets completed_character_id
     *
     * @param int|null $completed_character_id ID of the character which completed this job
     *
     * @return self
     */
    public function setCompletedCharacterId($completed_character_id)
    {

        if (is_null($completed_character_id)) {
            throw new \InvalidArgumentException('non-nullable completed_character_id cannot be null');
        }

        $this->container['completed_character_id'] = $completed_character_id;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime|null
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime|null $completed_date Date and time when this job was completed
     *
     * @return self
     */
    public function setCompletedDate($completed_date)
    {

        if (is_null($completed_date)) {
            throw new \InvalidArgumentException('non-nullable completed_date cannot be null');
        }

        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost The sume of job installation fee and industry facility tax
     *
     * @return self
     */
    public function setCost($cost)
    {

        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }

        $this->container['cost'] = $cost;

        return $this;
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
     * @param int $duration Job duration in seconds
     *
     * @return self
     */
    public function setDuration($duration)
    {

        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }

        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Date and time when this job finished
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets facility_id
     *
     * @return int
     */
    public function getFacilityId()
    {
        return $this->container['facility_id'];
    }

    /**
     * Sets facility_id
     *
     * @param int $facility_id ID of the facility where this job is running
     *
     * @return self
     */
    public function setFacilityId($facility_id)
    {

        if (is_null($facility_id)) {
            throw new \InvalidArgumentException('non-nullable facility_id cannot be null');
        }

        $this->container['facility_id'] = $facility_id;

        return $this;
    }

    /**
     * Gets installer_id
     *
     * @return int
     */
    public function getInstallerId()
    {
        return $this->container['installer_id'];
    }

    /**
     * Sets installer_id
     *
     * @param int $installer_id ID of the character which installed this job
     *
     * @return self
     */
    public function setInstallerId($installer_id)
    {

        if (is_null($installer_id)) {
            throw new \InvalidArgumentException('non-nullable installer_id cannot be null');
        }

        $this->container['installer_id'] = $installer_id;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int $job_id Unique job ID
     *
     * @return self
     */
    public function setJobId($job_id)
    {

        if (is_null($job_id)) {
            throw new \InvalidArgumentException('non-nullable job_id cannot be null');
        }

        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets licensed_runs
     *
     * @return int|null
     */
    public function getLicensedRuns()
    {
        return $this->container['licensed_runs'];
    }

    /**
     * Sets licensed_runs
     *
     * @param int|null $licensed_runs Number of runs blueprint is licensed for
     *
     * @return self
     */
    public function setLicensedRuns($licensed_runs)
    {

        if (is_null($licensed_runs)) {
            throw new \InvalidArgumentException('non-nullable licensed_runs cannot be null');
        }

        $this->container['licensed_runs'] = $licensed_runs;

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
     * @param int $location_id ID of the location for the industry facility
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
     * Gets output_location_id
     *
     * @return int
     */
    public function getOutputLocationId()
    {
        return $this->container['output_location_id'];
    }

    /**
     * Sets output_location_id
     *
     * @param int $output_location_id Location ID of the location to which the output of the job will be delivered. Normally a station ID, but can also be a corporation facility
     *
     * @return self
     */
    public function setOutputLocationId($output_location_id)
    {

        if (is_null($output_location_id)) {
            throw new \InvalidArgumentException('non-nullable output_location_id cannot be null');
        }

        $this->container['output_location_id'] = $output_location_id;

        return $this;
    }

    /**
     * Gets pause_date
     *
     * @return \DateTime|null
     */
    public function getPauseDate()
    {
        return $this->container['pause_date'];
    }

    /**
     * Sets pause_date
     *
     * @param \DateTime|null $pause_date Date and time when this job was paused (i.e. time when the facility where this job was installed went offline)
     *
     * @return self
     */
    public function setPauseDate($pause_date)
    {

        if (is_null($pause_date)) {
            throw new \InvalidArgumentException('non-nullable pause_date cannot be null');
        }

        $this->container['pause_date'] = $pause_date;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float|null $probability Chance of success for invention
     *
     * @return self
     */
    public function setProbability($probability)
    {

        if (is_null($probability)) {
            throw new \InvalidArgumentException('non-nullable probability cannot be null');
        }

        $this->container['probability'] = $probability;

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
     * @param int|null $product_type_id Type ID of product (manufactured, copied or invented)
     *
     * @return self
     */
    public function setProductTypeId($product_type_id)
    {

        if (is_null($product_type_id)) {
            throw new \InvalidArgumentException('non-nullable product_type_id cannot be null');
        }

        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets runs
     *
     * @return int
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     *
     * @param int $runs Number of runs for a manufacturing job, or number of copies to make for a blueprint copy
     *
     * @return self
     */
    public function setRuns($runs)
    {

        if (is_null($runs)) {
            throw new \InvalidArgumentException('non-nullable runs cannot be null');
        }

        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Date and time when this job started
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }

        $this->container['start_date'] = $start_date;

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
     * @param string $status status string
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
     * Gets successful_runs
     *
     * @return int|null
     */
    public function getSuccessfulRuns()
    {
        return $this->container['successful_runs'];
    }

    /**
     * Sets successful_runs
     *
     * @param int|null $successful_runs Number of successful runs for this job. Equal to runs unless this is an invention job
     *
     * @return self
     */
    public function setSuccessfulRuns($successful_runs)
    {

        if (is_null($successful_runs)) {
            throw new \InvalidArgumentException('non-nullable successful_runs cannot be null');
        }

        $this->container['successful_runs'] = $successful_runs;

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


