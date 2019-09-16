<?php
/**
 * ComplexRuleConditionPut
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 Catalog API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Model;

use \ArrayAccess;

class ComplexRuleConditionPut extends ComplexRuleConditionBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ComplexRuleConditionPut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'rule_id' => 'int',
        'modifier_id' => 'int',
        'modifier_value_id' => 'int',
        'variant_id' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'rule_id' => 'rule_id',
        'modifier_id' => 'modifier_id',
        'modifier_value_id' => 'modifier_value_id',
        'variant_id' => 'variant_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rule_id' => 'setRuleId',
        'modifier_id' => 'setModifierId',
        'modifier_value_id' => 'setModifierValueId',
        'variant_id' => 'setVariantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rule_id' => 'getRuleId',
        'modifier_id' => 'getModifierId',
        'modifier_value_id' => 'getModifierValueId',
        'variant_id' => 'getVariantId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['rule_id'] = array_key_exists('rule_id', $data) ? $data['rule_id'] : null;
        $this->container['modifier_id'] = array_key_exists('modifier_id', $data) ? $data['modifier_id'] : null;
        $this->container['modifier_value_id'] = array_key_exists('modifier_value_id', $data) ? $data['modifier_value_id'] : null;
        $this->container['variant_id'] = array_key_exists('variant_id', $data) ? $data['variant_id'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique numeric ID of the rule condition; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rule_id
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     * @param int $rule_id The unique numeric ID of the rule with which the condition is associated.
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets modifier_id
     * @return int
     */
    public function getModifierId()
    {
        return $this->container['modifier_id'];
    }

    /**
     * Sets modifier_id
     * @param int $modifier_id The unique numeric ID of the modifier with which the rule condition is associated.
     * @return $this
     */
    public function setModifierId($modifier_id)
    {
        $this->container['modifier_id'] = $modifier_id;

        return $this;
    }

    /**
     * Gets modifier_value_id
     * @return int
     */
    public function getModifierValueId()
    {
        return $this->container['modifier_value_id'];
    }

    /**
     * Sets modifier_value_id
     * @param int $modifier_value_id The unique numeric ID of the modifier value with which the rule condition is associated.
     * @return $this
     */
    public function setModifierValueId($modifier_value_id)
    {
        $this->container['modifier_value_id'] = $modifier_value_id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param int $variant_id The unique numeric ID of the variant with which the rule condition is associated.
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


