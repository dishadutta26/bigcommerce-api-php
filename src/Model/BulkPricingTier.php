<?php
/**
 * BulkPricingTier
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
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

class BulkPricingTier implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BulkPricingTier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity_min' => 'int',
        'quantity_max' => 'int',
        'type' => 'string',
        'amount' => 'double'
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
        'quantity_min' => 'quantity_min',
        'quantity_max' => 'quantity_max',
        'type' => 'type',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'quantity_min' => 'setQuantityMin',
        'quantity_max' => 'setQuantityMax',
        'type' => 'setType',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'quantity_min' => 'getQuantityMin',
        'quantity_max' => 'getQuantityMax',
        'type' => 'getType',
        'amount' => 'getAmount'
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

    const TYPE_FIXED = 'fixed';
    const TYPE_PRICE = 'price';
    const TYPE_PERCENT = 'percent';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FIXED,
            self::TYPE_PRICE,
            self::TYPE_PERCENT,
        ];
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
        $this->container['quantity_min'] = array_key_exists('quantity_min', $data) ? $data['quantity_min'] : null;
        $this->container['quantity_max'] = array_key_exists('quantity_max', $data) ? $data['quantity_max'] : null;
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : null;
        $this->container['amount'] = array_key_exists('amount', $data) ? $data['amount'] : null;
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
        $allowed_values = ["fixed", "price", "percent"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }
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
        $allowed_values = ["fixed", "price", "percent"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets quantity_min
     * @return int
     */
    public function getQuantityMin()
    {
        return $this->container['quantity_min'];
    }

    /**
     * Sets quantity_min
     * @param int $quantity_min The minimum quantity of associated variant in the cart needed to qualify for this tiers pricing.
     * @return $this
     */
    public function setQuantityMin($quantity_min)
    {
        $this->container['quantity_min'] = $quantity_min;

        return $this;
    }

    /**
     * Gets quantity_max
     * @return int
     */
    public function getQuantityMax()
    {
        return $this->container['quantity_max'];
    }

    /**
     * Sets quantity_max
     * @param int $quantity_max The maximum allowed quantity of associated variant in the cart to qualify for this tiers pricing.
     * @return $this
     */
    public function setQuantityMax($quantity_max)
    {
        $this->container['quantity_max'] = $quantity_max;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of adjustment that is made. Acceptable values: price – the adjustment amount per product; percent – the adjustment as a percentage of the original price; fixed – the adjusted absolute price of the product.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = ['fixed', 'price', 'percent'];
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'fixed', 'price', 'percent'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount The price adjustment amount. This value along with the type will decide the price per variant for the pricing tier.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


