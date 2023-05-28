<?php
/**
 * GetDogmaEffectsEffectIdOk
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
 * GetDogmaEffectsEffectIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client\Eve
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetDogmaEffectsEffectIdOk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_dogma_effects_effect_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'disallow_auto_repeat' => 'bool',
        'discharge_attribute_id' => 'int',
        'display_name' => 'string',
        'duration_attribute_id' => 'int',
        'effect_category' => 'int',
        'effect_id' => 'int',
        'electronic_chance' => 'bool',
        'falloff_attribute_id' => 'int',
        'icon_id' => 'int',
        'is_assistance' => 'bool',
        'is_offensive' => 'bool',
        'is_warp_safe' => 'bool',
        'modifiers' => '\Swagger\Client\Eve\Model\GetDogmaEffectsEffectIdModifier[]',
        'name' => 'string',
        'post_expression' => 'int',
        'pre_expression' => 'int',
        'published' => 'bool',
        'range_attribute_id' => 'int',
        'range_chance' => 'bool',
        'tracking_speed_attribute_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'disallow_auto_repeat' => null,
        'discharge_attribute_id' => 'int32',
        'display_name' => null,
        'duration_attribute_id' => 'int32',
        'effect_category' => 'int32',
        'effect_id' => 'int32',
        'electronic_chance' => null,
        'falloff_attribute_id' => 'int32',
        'icon_id' => 'int32',
        'is_assistance' => null,
        'is_offensive' => null,
        'is_warp_safe' => null,
        'modifiers' => null,
        'name' => null,
        'post_expression' => 'int32',
        'pre_expression' => 'int32',
        'published' => null,
        'range_attribute_id' => 'int32',
        'range_chance' => null,
        'tracking_speed_attribute_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'disallow_auto_repeat' => false,
		'discharge_attribute_id' => false,
		'display_name' => false,
		'duration_attribute_id' => false,
		'effect_category' => false,
		'effect_id' => false,
		'electronic_chance' => false,
		'falloff_attribute_id' => false,
		'icon_id' => false,
		'is_assistance' => false,
		'is_offensive' => false,
		'is_warp_safe' => false,
		'modifiers' => false,
		'name' => false,
		'post_expression' => false,
		'pre_expression' => false,
		'published' => false,
		'range_attribute_id' => false,
		'range_chance' => false,
		'tracking_speed_attribute_id' => false
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
        'description' => 'description',
        'disallow_auto_repeat' => 'disallow_auto_repeat',
        'discharge_attribute_id' => 'discharge_attribute_id',
        'display_name' => 'display_name',
        'duration_attribute_id' => 'duration_attribute_id',
        'effect_category' => 'effect_category',
        'effect_id' => 'effect_id',
        'electronic_chance' => 'electronic_chance',
        'falloff_attribute_id' => 'falloff_attribute_id',
        'icon_id' => 'icon_id',
        'is_assistance' => 'is_assistance',
        'is_offensive' => 'is_offensive',
        'is_warp_safe' => 'is_warp_safe',
        'modifiers' => 'modifiers',
        'name' => 'name',
        'post_expression' => 'post_expression',
        'pre_expression' => 'pre_expression',
        'published' => 'published',
        'range_attribute_id' => 'range_attribute_id',
        'range_chance' => 'range_chance',
        'tracking_speed_attribute_id' => 'tracking_speed_attribute_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'disallow_auto_repeat' => 'setDisallowAutoRepeat',
        'discharge_attribute_id' => 'setDischargeAttributeId',
        'display_name' => 'setDisplayName',
        'duration_attribute_id' => 'setDurationAttributeId',
        'effect_category' => 'setEffectCategory',
        'effect_id' => 'setEffectId',
        'electronic_chance' => 'setElectronicChance',
        'falloff_attribute_id' => 'setFalloffAttributeId',
        'icon_id' => 'setIconId',
        'is_assistance' => 'setIsAssistance',
        'is_offensive' => 'setIsOffensive',
        'is_warp_safe' => 'setIsWarpSafe',
        'modifiers' => 'setModifiers',
        'name' => 'setName',
        'post_expression' => 'setPostExpression',
        'pre_expression' => 'setPreExpression',
        'published' => 'setPublished',
        'range_attribute_id' => 'setRangeAttributeId',
        'range_chance' => 'setRangeChance',
        'tracking_speed_attribute_id' => 'setTrackingSpeedAttributeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'disallow_auto_repeat' => 'getDisallowAutoRepeat',
        'discharge_attribute_id' => 'getDischargeAttributeId',
        'display_name' => 'getDisplayName',
        'duration_attribute_id' => 'getDurationAttributeId',
        'effect_category' => 'getEffectCategory',
        'effect_id' => 'getEffectId',
        'electronic_chance' => 'getElectronicChance',
        'falloff_attribute_id' => 'getFalloffAttributeId',
        'icon_id' => 'getIconId',
        'is_assistance' => 'getIsAssistance',
        'is_offensive' => 'getIsOffensive',
        'is_warp_safe' => 'getIsWarpSafe',
        'modifiers' => 'getModifiers',
        'name' => 'getName',
        'post_expression' => 'getPostExpression',
        'pre_expression' => 'getPreExpression',
        'published' => 'getPublished',
        'range_attribute_id' => 'getRangeAttributeId',
        'range_chance' => 'getRangeChance',
        'tracking_speed_attribute_id' => 'getTrackingSpeedAttributeId'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('disallow_auto_repeat', $data ?? [], null);
        $this->setIfExists('discharge_attribute_id', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('duration_attribute_id', $data ?? [], null);
        $this->setIfExists('effect_category', $data ?? [], null);
        $this->setIfExists('effect_id', $data ?? [], null);
        $this->setIfExists('electronic_chance', $data ?? [], null);
        $this->setIfExists('falloff_attribute_id', $data ?? [], null);
        $this->setIfExists('icon_id', $data ?? [], null);
        $this->setIfExists('is_assistance', $data ?? [], null);
        $this->setIfExists('is_offensive', $data ?? [], null);
        $this->setIfExists('is_warp_safe', $data ?? [], null);
        $this->setIfExists('modifiers', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('post_expression', $data ?? [], null);
        $this->setIfExists('pre_expression', $data ?? [], null);
        $this->setIfExists('published', $data ?? [], null);
        $this->setIfExists('range_attribute_id', $data ?? [], null);
        $this->setIfExists('range_chance', $data ?? [], null);
        $this->setIfExists('tracking_speed_attribute_id', $data ?? [], null);
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

        if ($this->container['effect_id'] === null) {
            $invalidProperties[] = "'effect_id' can't be null";
        }
        if (!is_null($this->container['modifiers']) && (count($this->container['modifiers']) > 100)) {
            $invalidProperties[] = "invalid value for 'modifiers', number of items must be less than or equal to 100.";
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description string
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disallow_auto_repeat
     *
     * @return bool|null
     */
    public function getDisallowAutoRepeat()
    {
        return $this->container['disallow_auto_repeat'];
    }

    /**
     * Sets disallow_auto_repeat
     *
     * @param bool|null $disallow_auto_repeat disallow_auto_repeat boolean
     *
     * @return self
     */
    public function setDisallowAutoRepeat($disallow_auto_repeat)
    {
        if (is_null($disallow_auto_repeat)) {
            throw new \InvalidArgumentException('non-nullable disallow_auto_repeat cannot be null');
        }
        $this->container['disallow_auto_repeat'] = $disallow_auto_repeat;

        return $this;
    }

    /**
     * Gets discharge_attribute_id
     *
     * @return int|null
     */
    public function getDischargeAttributeId()
    {
        return $this->container['discharge_attribute_id'];
    }

    /**
     * Sets discharge_attribute_id
     *
     * @param int|null $discharge_attribute_id discharge_attribute_id integer
     *
     * @return self
     */
    public function setDischargeAttributeId($discharge_attribute_id)
    {
        if (is_null($discharge_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable discharge_attribute_id cannot be null');
        }
        $this->container['discharge_attribute_id'] = $discharge_attribute_id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name string
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets duration_attribute_id
     *
     * @return int|null
     */
    public function getDurationAttributeId()
    {
        return $this->container['duration_attribute_id'];
    }

    /**
     * Sets duration_attribute_id
     *
     * @param int|null $duration_attribute_id duration_attribute_id integer
     *
     * @return self
     */
    public function setDurationAttributeId($duration_attribute_id)
    {
        if (is_null($duration_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable duration_attribute_id cannot be null');
        }
        $this->container['duration_attribute_id'] = $duration_attribute_id;

        return $this;
    }

    /**
     * Gets effect_category
     *
     * @return int|null
     */
    public function getEffectCategory()
    {
        return $this->container['effect_category'];
    }

    /**
     * Sets effect_category
     *
     * @param int|null $effect_category effect_category integer
     *
     * @return self
     */
    public function setEffectCategory($effect_category)
    {
        if (is_null($effect_category)) {
            throw new \InvalidArgumentException('non-nullable effect_category cannot be null');
        }
        $this->container['effect_category'] = $effect_category;

        return $this;
    }

    /**
     * Gets effect_id
     *
     * @return int
     */
    public function getEffectId()
    {
        return $this->container['effect_id'];
    }

    /**
     * Sets effect_id
     *
     * @param int $effect_id effect_id integer
     *
     * @return self
     */
    public function setEffectId($effect_id)
    {
        if (is_null($effect_id)) {
            throw new \InvalidArgumentException('non-nullable effect_id cannot be null');
        }
        $this->container['effect_id'] = $effect_id;

        return $this;
    }

    /**
     * Gets electronic_chance
     *
     * @return bool|null
     */
    public function getElectronicChance()
    {
        return $this->container['electronic_chance'];
    }

    /**
     * Sets electronic_chance
     *
     * @param bool|null $electronic_chance electronic_chance boolean
     *
     * @return self
     */
    public function setElectronicChance($electronic_chance)
    {
        if (is_null($electronic_chance)) {
            throw new \InvalidArgumentException('non-nullable electronic_chance cannot be null');
        }
        $this->container['electronic_chance'] = $electronic_chance;

        return $this;
    }

    /**
     * Gets falloff_attribute_id
     *
     * @return int|null
     */
    public function getFalloffAttributeId()
    {
        return $this->container['falloff_attribute_id'];
    }

    /**
     * Sets falloff_attribute_id
     *
     * @param int|null $falloff_attribute_id falloff_attribute_id integer
     *
     * @return self
     */
    public function setFalloffAttributeId($falloff_attribute_id)
    {
        if (is_null($falloff_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable falloff_attribute_id cannot be null');
        }
        $this->container['falloff_attribute_id'] = $falloff_attribute_id;

        return $this;
    }

    /**
     * Gets icon_id
     *
     * @return int|null
     */
    public function getIconId()
    {
        return $this->container['icon_id'];
    }

    /**
     * Sets icon_id
     *
     * @param int|null $icon_id icon_id integer
     *
     * @return self
     */
    public function setIconId($icon_id)
    {
        if (is_null($icon_id)) {
            throw new \InvalidArgumentException('non-nullable icon_id cannot be null');
        }
        $this->container['icon_id'] = $icon_id;

        return $this;
    }

    /**
     * Gets is_assistance
     *
     * @return bool|null
     */
    public function getIsAssistance()
    {
        return $this->container['is_assistance'];
    }

    /**
     * Sets is_assistance
     *
     * @param bool|null $is_assistance is_assistance boolean
     *
     * @return self
     */
    public function setIsAssistance($is_assistance)
    {
        if (is_null($is_assistance)) {
            throw new \InvalidArgumentException('non-nullable is_assistance cannot be null');
        }
        $this->container['is_assistance'] = $is_assistance;

        return $this;
    }

    /**
     * Gets is_offensive
     *
     * @return bool|null
     */
    public function getIsOffensive()
    {
        return $this->container['is_offensive'];
    }

    /**
     * Sets is_offensive
     *
     * @param bool|null $is_offensive is_offensive boolean
     *
     * @return self
     */
    public function setIsOffensive($is_offensive)
    {
        if (is_null($is_offensive)) {
            throw new \InvalidArgumentException('non-nullable is_offensive cannot be null');
        }
        $this->container['is_offensive'] = $is_offensive;

        return $this;
    }

    /**
     * Gets is_warp_safe
     *
     * @return bool|null
     */
    public function getIsWarpSafe()
    {
        return $this->container['is_warp_safe'];
    }

    /**
     * Sets is_warp_safe
     *
     * @param bool|null $is_warp_safe is_warp_safe boolean
     *
     * @return self
     */
    public function setIsWarpSafe($is_warp_safe)
    {
        if (is_null($is_warp_safe)) {
            throw new \InvalidArgumentException('non-nullable is_warp_safe cannot be null');
        }
        $this->container['is_warp_safe'] = $is_warp_safe;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return \Swagger\Client\Eve\Model\GetDogmaEffectsEffectIdModifier[]|null
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param \Swagger\Client\Eve\Model\GetDogmaEffectsEffectIdModifier[]|null $modifiers modifiers array
     *
     * @return self
     */
    public function setModifiers($modifiers)
    {
        if (is_null($modifiers)) {
            throw new \InvalidArgumentException('non-nullable modifiers cannot be null');
        }

        if ((count($modifiers) > 100)) {
            throw new \InvalidArgumentException('invalid value for $modifiers when calling GetDogmaEffectsEffectIdOk., number of items must be less than or equal to 100.');
        }
        $this->container['modifiers'] = $modifiers;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name string
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets post_expression
     *
     * @return int|null
     */
    public function getPostExpression()
    {
        return $this->container['post_expression'];
    }

    /**
     * Sets post_expression
     *
     * @param int|null $post_expression post_expression integer
     *
     * @return self
     */
    public function setPostExpression($post_expression)
    {
        if (is_null($post_expression)) {
            throw new \InvalidArgumentException('non-nullable post_expression cannot be null');
        }
        $this->container['post_expression'] = $post_expression;

        return $this;
    }

    /**
     * Gets pre_expression
     *
     * @return int|null
     */
    public function getPreExpression()
    {
        return $this->container['pre_expression'];
    }

    /**
     * Sets pre_expression
     *
     * @param int|null $pre_expression pre_expression integer
     *
     * @return self
     */
    public function setPreExpression($pre_expression)
    {
        if (is_null($pre_expression)) {
            throw new \InvalidArgumentException('non-nullable pre_expression cannot be null');
        }
        $this->container['pre_expression'] = $pre_expression;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published published boolean
     *
     * @return self
     */
    public function setPublished($published)
    {
        if (is_null($published)) {
            throw new \InvalidArgumentException('non-nullable published cannot be null');
        }
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets range_attribute_id
     *
     * @return int|null
     */
    public function getRangeAttributeId()
    {
        return $this->container['range_attribute_id'];
    }

    /**
     * Sets range_attribute_id
     *
     * @param int|null $range_attribute_id range_attribute_id integer
     *
     * @return self
     */
    public function setRangeAttributeId($range_attribute_id)
    {
        if (is_null($range_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable range_attribute_id cannot be null');
        }
        $this->container['range_attribute_id'] = $range_attribute_id;

        return $this;
    }

    /**
     * Gets range_chance
     *
     * @return bool|null
     */
    public function getRangeChance()
    {
        return $this->container['range_chance'];
    }

    /**
     * Sets range_chance
     *
     * @param bool|null $range_chance range_chance boolean
     *
     * @return self
     */
    public function setRangeChance($range_chance)
    {
        if (is_null($range_chance)) {
            throw new \InvalidArgumentException('non-nullable range_chance cannot be null');
        }
        $this->container['range_chance'] = $range_chance;

        return $this;
    }

    /**
     * Gets tracking_speed_attribute_id
     *
     * @return int|null
     */
    public function getTrackingSpeedAttributeId()
    {
        return $this->container['tracking_speed_attribute_id'];
    }

    /**
     * Sets tracking_speed_attribute_id
     *
     * @param int|null $tracking_speed_attribute_id tracking_speed_attribute_id integer
     *
     * @return self
     */
    public function setTrackingSpeedAttributeId($tracking_speed_attribute_id)
    {
        if (is_null($tracking_speed_attribute_id)) {
            throw new \InvalidArgumentException('non-nullable tracking_speed_attribute_id cannot be null');
        }
        $this->container['tracking_speed_attribute_id'] = $tracking_speed_attribute_id;

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


