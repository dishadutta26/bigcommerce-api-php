<?php
/**
 * Modifier
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

class Modifier extends ModifierBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Modifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'required' => 'bool',
        'sort_order' => 'int',
        'config' => '\BigCommerce\Api\Model\OptionConfig',
        'option_values' => '\BigCommerce\Api\Model\ModifierValue[]',
        'id' => 'int',
        'product_id' => 'int',
        'name' => 'string',
        'display_name' => 'string'
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
        'type' => 'type',
        'required' => 'required',
        'sort_order' => 'sort_order',
        'config' => 'config',
        'option_values' => 'option_values',
        'id' => 'id',
        'product_id' => 'product_id',
        'name' => 'name',
        'display_name' => 'display_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'required' => 'setRequired',
        'sort_order' => 'setSortOrder',
        'config' => 'setConfig',
        'option_values' => 'setOptionValues',
        'id' => 'setId',
        'product_id' => 'setProductId',
        'name' => 'setName',
        'display_name' => 'setDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'required' => 'getRequired',
        'sort_order' => 'getSortOrder',
        'config' => 'getConfig',
        'option_values' => 'getOptionValues',
        'id' => 'getId',
        'product_id' => 'getProductId',
        'name' => 'getName',
        'display_name' => 'getDisplayName'
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

    const TYPE_DATE = 'date';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_FILE = 'file';
    const TYPE_TEXT = 'text';
    const TYPE_MULTI_LINE_TEXT = 'multi_line_text';
    const TYPE_NUMBERS_ONLY_TEXT = 'numbers_only_text';
    const TYPE_RADIO_BUTTONS = 'radio_buttons';
    const TYPE_RECTANGLES = 'rectangles';
    const TYPE_DROPDOWN = 'dropdown';
    const TYPE_PRODUCT_LIST = 'product_list';
    const TYPE_PRODUCT_LIST_WITH_IMAGES = 'product_list_with_images';
    const TYPE_SWATCH = 'swatch';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DATE,
            self::TYPE_CHECKBOX,
            self::TYPE_FILE,
            self::TYPE_TEXT,
            self::TYPE_MULTI_LINE_TEXT,
            self::TYPE_NUMBERS_ONLY_TEXT,
            self::TYPE_RADIO_BUTTONS,
            self::TYPE_RECTANGLES,
            self::TYPE_DROPDOWN,
            self::TYPE_PRODUCT_LIST,
            self::TYPE_PRODUCT_LIST_WITH_IMAGES,
            self::TYPE_SWATCH,
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
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : null;
        $this->container['required'] = array_key_exists('required', $data) ? $data['required'] : null;
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : null;
        $this->container['config'] = array_key_exists('config', $data) ? $data['config'] : null;
        $this->container['option_values'] = array_key_exists('option_values', $data) ? $data['option_values'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['display_name'] = array_key_exists('display_name', $data) ? $data['display_name'] : null;
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
        $allowed_values = ["date", "checkbox", "file", "text", "multi_line_text", "numbers_only_text", "radio_buttons", "rectangles", "dropdown", "product_list", "product_list_with_images", "swatch"];
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
        $allowed_values = ["date", "checkbox", "file", "text", "multi_line_text", "numbers_only_text", "radio_buttons", "rectangles", "dropdown", "product_list", "product_list_with_images", "swatch"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $type BigCommerce API, which determines how it will display on the storefront. Acceptable values: `date`, `checkbox`, `file`, `text`, `multi_line_text`, `numbers_only_text`, `radio_buttons`, `rectangles`, `dropdown`, `product_list`, `product_list_with_images`, `swatch`. For reference, the former v2 API values are: D = date, C = checkbox, F = file, T = text, MT = multi_line_text, N = numbers_only_text, RB = radio_buttons, RT = rectangles, S = dropdown, P = product_list, PI = product_list_with_images, CS = swatch.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = ['date', 'checkbox', 'file', 'text', 'multi_line_text', 'numbers_only_text', 'radio_buttons', 'rectangles', 'dropdown', 'product_list', 'product_list_with_images', 'swatch'];
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'date', 'checkbox', 'file', 'text', 'multi_line_text', 'numbers_only_text', 'radio_buttons', 'rectangles', 'dropdown', 'product_list', 'product_list_with_images', 'swatch'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required Whether or not this modifer is required or not at checkout.
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order The order the modifiers display on the product detail page.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets config
     * @return \BigCommerce\Api\Model\OptionConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param \BigCommerce\Api\Model\OptionConfig $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets option_values
     * @return \BigCommerce\Api\Model\ModifierValue[]
     */
    public function getOptionValues()
    {
        return $this->container['option_values'];
    }

    /**
     * Sets option_values
     * @param \BigCommerce\Api\Model\ModifierValue[] $option_values
     * @return $this
     */
    public function setOptionValues($option_values)
    {
        $this->container['option_values'] = $option_values;

        return $this;
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
     * @param int $id The unique numeric ID of the modifier; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The unique numeric ID of the product to which the option belongs.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The unique option name. Auto-generated from the display name, a timestamp, and the product ID.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name The name of the option shown on the storefront.
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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


