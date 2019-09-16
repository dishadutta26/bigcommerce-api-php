<?php
/**
 * ScriptPost
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

class ScriptPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ScriptPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'html' => 'string',
        'src' => 'string',
        'auto_uninstall' => 'bool',
        'load_method' => 'string',
        'location' => 'string',
        'visibility' => 'string',
        'kind' => 'string'
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
        'name' => 'name',
        'description' => 'description',
        'html' => 'html',
        'src' => 'src',
        'auto_uninstall' => 'auto_uninstall',
        'load_method' => 'load_method',
        'location' => 'location',
        'visibility' => 'visibility',
        'kind' => 'kind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'html' => 'setHtml',
        'src' => 'setSrc',
        'auto_uninstall' => 'setAutoUninstall',
        'load_method' => 'setLoadMethod',
        'location' => 'setLocation',
        'visibility' => 'setVisibility',
        'kind' => 'setKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'html' => 'getHtml',
        'src' => 'getSrc',
        'auto_uninstall' => 'getAutoUninstall',
        'load_method' => 'getLoadMethod',
        'location' => 'getLocation',
        'visibility' => 'getVisibility',
        'kind' => 'getKind'
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

    const LOAD_METHOD_DEFAULT = 'default';
    const LOAD_METHOD_ASYNC = 'async';
    const LOAD_METHOD_DEFER = 'defer';
    const LOCATION_HEAD = 'head';
    const LOCATION_FOOTER = 'footer';
    const VISIBILITY_STOREFRONT = 'storefront';
    const VISIBILITY_ALL_PAGES = 'all_pages';
    const VISIBILITY_CHECKOUT = 'checkout';
    const VISIBILITY_ORDER_CONFIRMATION = 'order_confirmation';
    const KIND_SRC = 'src';
    const KIND_HTML = 'html';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLoadMethodAllowableValues()
    {
        return [
            self::LOAD_METHOD_DEFAULT,
            self::LOAD_METHOD_ASYNC,
            self::LOAD_METHOD_DEFER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_HEAD,
            self::LOCATION_FOOTER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_STOREFRONT,
            self::VISIBILITY_ALL_PAGES,
            self::VISIBILITY_CHECKOUT,
            self::VISIBILITY_ORDER_CONFIRMATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_SRC,
            self::KIND_HTML,
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
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['html'] = array_key_exists('html', $data) ? $data['html'] : null;
        $this->container['src'] = array_key_exists('src', $data) ? $data['src'] : null;
        $this->container['auto_uninstall'] = array_key_exists('auto_uninstall', $data) ? $data['auto_uninstall'] : true;
        $this->container['load_method'] = array_key_exists('load_method', $data) ? $data['load_method'] : 'defer';
        $this->container['location'] = array_key_exists('location', $data) ? $data['location'] : 'footer';
        $this->container['visibility'] = array_key_exists('visibility', $data) ? $data['visibility'] : 'storefront';
        $this->container['kind'] = array_key_exists('kind', $data) ? $data['kind'] : 'src';
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if (strlen($this->container['name']) > 255) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['name']) < 1) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['description']) > 255) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['html']) > 65535) {
            $invalid_properties[] = "invalid value for 'html', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['src']) > 255) {
            $invalid_properties[] = "invalid value for 'src', the character length must be smaller than or equal to 255.";
        }
        $allowed_values = ["default", "async", "defer"];
        if (!in_array($this->container['load_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'load_method', must be one of #{allowed_values}.";
        }
        $allowed_values = ["head", "footer"];
        if (!in_array($this->container['location'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'location', must be one of #{allowed_values}.";
        }
        $allowed_values = ["storefront", "all_pages", "checkout", "order_confirmation"];
        if (!in_array($this->container['visibility'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'visibility', must be one of #{allowed_values}.";
        }
        $allowed_values = ["src", "html"];
        if (!in_array($this->container['kind'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'kind', must be one of #{allowed_values}.";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        if (strlen($this->container['html']) > 65535) {
            return false;
        }
        if (strlen($this->container['src']) > 255) {
            return false;
        }
        $allowed_values = ["default", "async", "defer"];
        if (!in_array($this->container['load_method'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["head", "footer"];
        if (!in_array($this->container['location'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["storefront", "all_pages", "checkout", "order_confirmation"];
        if (!in_array($this->container['visibility'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["src", "html"];
        if (!in_array($this->container['kind'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $name The user-friendly name.
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 255) {
            throw new \InvalidArgumentException('invalid length for $name when calling ScriptPost., must be smaller than or equal to 255.');
        }
        if (strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling ScriptPost., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The user-friendly description.
     * @return $this
     */
    public function setDescription($description)
    {
        if (strlen($description) > 255) {
            throw new \InvalidArgumentException('invalid length for $description when calling ScriptPost., must be smaller than or equal to 255.');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets html
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     * @param string $html An html string containing exactly one `script` tag. Required if `kind` is `script_tag`.
     * @return $this
     */
    public function setHtml($html)
    {
        if (strlen($html) > 65535) {
            throw new \InvalidArgumentException('invalid length for $html when calling ScriptPost., must be smaller than or equal to 65535.');
        }
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets src
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     * @param string $src The `src` attribute of the script to load. Required if `kind` is `src`. Must be in `https` format.
     * @return $this
     */
    public function setSrc($src)
    {
        if (strlen($src) > 255) {
            throw new \InvalidArgumentException('invalid length for $src when calling ScriptPost., must be smaller than or equal to 255.');
        }
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets auto_uninstall
     * @return bool
     */
    public function getAutoUninstall()
    {
        return $this->container['auto_uninstall'];
    }

    /**
     * Sets auto_uninstall
     * @param bool $auto_uninstall Whether to uninstall this script when the app associated with it is removed.
     * @return $this
     */
    public function setAutoUninstall($auto_uninstall)
    {
        $this->container['auto_uninstall'] = $auto_uninstall;

        return $this;
    }

    /**
     * Gets load_method
     * @return string
     */
    public function getLoadMethod()
    {
        return $this->container['load_method'];
    }

    /**
     * Sets load_method
     * @param string $load_method The load method to use for the script. Acceptable values are `default`, `async`, or `defer`.
     * @return $this
     */
    public function setLoadMethod($load_method)
    {
        $allowed_values = ['default', 'async', 'defer'];
        if (!is_null($load_method) && (!in_array($load_method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'load_method', must be one of 'default', 'async', 'defer'");
        }
        $this->container['load_method'] = $load_method;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location Where on the page to place the script. Acceptable values are `head` or `footer`.
     * @return $this
     */
    public function setLocation($location)
    {
        $allowed_values = ['head', 'footer'];
        if (!is_null($location) && (!in_array($location, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'location', must be one of 'head', 'footer'");
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets visibility
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param string $visibility Which set of pages the script should load on. The values allowed for this parameter are `storefront`, `all_pages`, `checkout` and `order_confirmation`. Please note that you need to have `Checkout content` scope to use `all_pages` and `checkout`.
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowed_values = ['storefront', 'all_pages', 'checkout', 'order_confirmation'];
        if (!is_null($visibility) && (!in_array($visibility, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'visibility', must be one of 'storefront', 'all_pages', 'checkout', 'order_confirmation'");
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind What type of script this is. Acceptable values are `src` - a `script` tag will be generated with its `src` attribute set to the value of `src`; `script_tag` - The value of `html` (which must contain a single `script` tag) will be injected directly onto the page.
     * @return $this
     */
    public function setKind($kind)
    {
        $allowed_values = ['src', 'html'];
        if (!is_null($kind) && (!in_array($kind, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'kind', must be one of 'src', 'html'");
        }
        $this->container['kind'] = $kind;

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


