<?php
/**
 * OptionValueProductPost
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

class OptionValueProductPost extends OptionValueProductBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OptionValueProductPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'option_display_name' => 'string',
        'label' => 'string'
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
        'option_display_name' => 'option_display_name',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'option_display_name' => 'setOptionDisplayName',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'option_display_name' => 'getOptionDisplayName',
        'label' => 'getLabel'
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
        $this->container['option_display_name'] = array_key_exists('option_display_name', $data) ? $data['option_display_name'] : null;
        $this->container['label'] = array_key_exists('label', $data) ? $data['label'] : null;
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
        if (strlen($this->container['option_display_name']) > 255) {
            $invalid_properties[] = "invalid value for 'option_display_name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['option_display_name']) < 1) {
            $invalid_properties[] = "invalid value for 'option_display_name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['label']) > 255) {
            $invalid_properties[] = "invalid value for 'label', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['label']) < 1) {
            $invalid_properties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
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
        if (strlen($this->container['option_display_name']) > 255) {
            return false;
        }
        if (strlen($this->container['option_display_name']) < 1) {
            return false;
        }
        if (strlen($this->container['label']) > 255) {
            return false;
        }
        if (strlen($this->container['label']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets option_display_name
     * @return string
     */
    public function getOptionDisplayName()
    {
        return $this->container['option_display_name'];
    }

    /**
     * Sets option_display_name
     * @param string $option_display_name The name of the option.
     * @return $this
     */
    public function setOptionDisplayName($option_display_name)
    {
        if (strlen($option_display_name) > 255) {
            throw new \InvalidArgumentException('invalid length for $option_display_name when calling OptionValueProductPost., must be smaller than or equal to 255.');
        }
        if (strlen($option_display_name) < 1) {
            throw new \InvalidArgumentException('invalid length for $option_display_name when calling OptionValueProductPost., must be bigger than or equal to 1.');
        }
        $this->container['option_display_name'] = $option_display_name;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label The label of the option value.
     * @return $this
     */
    public function setLabel($label)
    {
        if (strlen($label) > 255) {
            throw new \InvalidArgumentException('invalid length for $label when calling OptionValueProductPost., must be smaller than or equal to 255.');
        }
        if (strlen($label) < 1) {
            throw new \InvalidArgumentException('invalid length for $label when calling OptionValueProductPost., must be bigger than or equal to 1.');
        }
        $this->container['label'] = $label;

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


