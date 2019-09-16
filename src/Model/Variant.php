<?php
/**
 * Variant
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

class Variant extends VariantBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Variant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost_price' => 'double',
        'price' => 'double',
        'sale_price' => 'double',
        'retail_price' => 'double',
        'weight' => 'double',
        'width' => 'double',
        'height' => 'double',
        'depth' => 'double',
        'is_free_shipping' => 'bool',
        'fixed_cost_shipping_price' => 'double',
        'purchasing_disabled' => 'bool',
        'purchasing_disabled_message' => 'string',
        'image_url' => 'string',
        'upc' => 'string',
        'inventory_level' => 'int',
        'inventory_warning_level' => 'int',
        'bin_picking_number' => 'string',
        'id' => 'int',
        'product_id' => 'int',
        'sku' => 'string',
        'sku_id' => 'int',
        'option_values' => '\BigCommerce\Api\Model\OptionValueVariant[]',
        'calculated_price' => 'double'
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
        'cost_price' => 'cost_price',
        'price' => 'price',
        'sale_price' => 'sale_price',
        'retail_price' => 'retail_price',
        'weight' => 'weight',
        'width' => 'width',
        'height' => 'height',
        'depth' => 'depth',
        'is_free_shipping' => 'is_free_shipping',
        'fixed_cost_shipping_price' => 'fixed_cost_shipping_price',
        'purchasing_disabled' => 'purchasing_disabled',
        'purchasing_disabled_message' => 'purchasing_disabled_message',
        'image_url' => 'image_url',
        'upc' => 'upc',
        'inventory_level' => 'inventory_level',
        'inventory_warning_level' => 'inventory_warning_level',
        'bin_picking_number' => 'bin_picking_number',
        'id' => 'id',
        'product_id' => 'product_id',
        'sku' => 'sku',
        'sku_id' => 'sku_id',
        'option_values' => 'option_values',
        'calculated_price' => 'calculated_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cost_price' => 'setCostPrice',
        'price' => 'setPrice',
        'sale_price' => 'setSalePrice',
        'retail_price' => 'setRetailPrice',
        'weight' => 'setWeight',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'depth' => 'setDepth',
        'is_free_shipping' => 'setIsFreeShipping',
        'fixed_cost_shipping_price' => 'setFixedCostShippingPrice',
        'purchasing_disabled' => 'setPurchasingDisabled',
        'purchasing_disabled_message' => 'setPurchasingDisabledMessage',
        'image_url' => 'setImageUrl',
        'upc' => 'setUpc',
        'inventory_level' => 'setInventoryLevel',
        'inventory_warning_level' => 'setInventoryWarningLevel',
        'bin_picking_number' => 'setBinPickingNumber',
        'id' => 'setId',
        'product_id' => 'setProductId',
        'sku' => 'setSku',
        'sku_id' => 'setSkuId',
        'option_values' => 'setOptionValues',
        'calculated_price' => 'setCalculatedPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cost_price' => 'getCostPrice',
        'price' => 'getPrice',
        'sale_price' => 'getSalePrice',
        'retail_price' => 'getRetailPrice',
        'weight' => 'getWeight',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'depth' => 'getDepth',
        'is_free_shipping' => 'getIsFreeShipping',
        'fixed_cost_shipping_price' => 'getFixedCostShippingPrice',
        'purchasing_disabled' => 'getPurchasingDisabled',
        'purchasing_disabled_message' => 'getPurchasingDisabledMessage',
        'image_url' => 'getImageUrl',
        'upc' => 'getUpc',
        'inventory_level' => 'getInventoryLevel',
        'inventory_warning_level' => 'getInventoryWarningLevel',
        'bin_picking_number' => 'getBinPickingNumber',
        'id' => 'getId',
        'product_id' => 'getProductId',
        'sku' => 'getSku',
        'sku_id' => 'getSkuId',
        'option_values' => 'getOptionValues',
        'calculated_price' => 'getCalculatedPrice'
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
        $this->container['cost_price'] = array_key_exists('cost_price', $data) ? $data['cost_price'] : null;
        $this->container['price'] = array_key_exists('price', $data) ? $data['price'] : null;
        $this->container['sale_price'] = array_key_exists('sale_price', $data) ? $data['sale_price'] : null;
        $this->container['retail_price'] = array_key_exists('retail_price', $data) ? $data['retail_price'] : null;
        $this->container['weight'] = array_key_exists('weight', $data) ? $data['weight'] : null;
        $this->container['width'] = array_key_exists('width', $data) ? $data['width'] : null;
        $this->container['height'] = array_key_exists('height', $data) ? $data['height'] : null;
        $this->container['depth'] = array_key_exists('depth', $data) ? $data['depth'] : null;
        $this->container['is_free_shipping'] = array_key_exists('is_free_shipping', $data) ? $data['is_free_shipping'] : null;
        $this->container['fixed_cost_shipping_price'] = array_key_exists('fixed_cost_shipping_price', $data) ? $data['fixed_cost_shipping_price'] : null;
        $this->container['purchasing_disabled'] = array_key_exists('purchasing_disabled', $data) ? $data['purchasing_disabled'] : null;
        $this->container['purchasing_disabled_message'] = array_key_exists('purchasing_disabled_message', $data) ? $data['purchasing_disabled_message'] : null;
        $this->container['image_url'] = array_key_exists('image_url', $data) ? $data['image_url'] : null;
        $this->container['upc'] = array_key_exists('upc', $data) ? $data['upc'] : null;
        $this->container['inventory_level'] = array_key_exists('inventory_level', $data) ? $data['inventory_level'] : null;
        $this->container['inventory_warning_level'] = array_key_exists('inventory_warning_level', $data) ? $data['inventory_warning_level'] : null;
        $this->container['bin_picking_number'] = array_key_exists('bin_picking_number', $data) ? $data['bin_picking_number'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['sku'] = array_key_exists('sku', $data) ? $data['sku'] : null;
        $this->container['sku_id'] = array_key_exists('sku_id', $data) ? $data['sku_id'] : null;
        $this->container['option_values'] = array_key_exists('option_values', $data) ? $data['option_values'] : null;
        $this->container['calculated_price'] = array_key_exists('calculated_price', $data) ? $data['calculated_price'] : null;
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
        if ($this->container['cost_price'] < 0) {
            $invalid_properties[] = "invalid value for 'cost_price', must be bigger than or equal to 0.";
        }
        if ($this->container['price'] < 0) {
            $invalid_properties[] = "invalid value for 'price', must be bigger than or equal to 0.";
        }
        if ($this->container['sale_price'] < 0) {
            $invalid_properties[] = "invalid value for 'sale_price', must be bigger than or equal to 0.";
        }
        if ($this->container['retail_price'] < 0) {
            $invalid_properties[] = "invalid value for 'retail_price', must be bigger than or equal to 0.";
        }
        if ($this->container['weight'] < 0) {
            $invalid_properties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
        }
        if ($this->container['width'] < 0) {
            $invalid_properties[] = "invalid value for 'width', must be bigger than or equal to 0.";
        }
        if ($this->container['height'] < 0) {
            $invalid_properties[] = "invalid value for 'height', must be bigger than or equal to 0.";
        }
        if ($this->container['depth'] < 0) {
            $invalid_properties[] = "invalid value for 'depth', must be bigger than or equal to 0.";
        }
        if ($this->container['fixed_cost_shipping_price'] < 0) {
            $invalid_properties[] = "invalid value for 'fixed_cost_shipping_price', must be bigger than or equal to 0.";
        }
        if (strlen($this->container['purchasing_disabled_message']) > 255) {
            $invalid_properties[] = "invalid value for 'purchasing_disabled_message', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['purchasing_disabled_message']) < 0) {
            $invalid_properties[] = "invalid value for 'purchasing_disabled_message', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['bin_picking_number']) > 255) {
            $invalid_properties[] = "invalid value for 'bin_picking_number', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['bin_picking_number']) < 0) {
            $invalid_properties[] = "invalid value for 'bin_picking_number', the character length must be bigger than or equal to 0.";
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
        if ($this->container['cost_price'] < 0) {
            return false;
        }
        if ($this->container['price'] < 0) {
            return false;
        }
        if ($this->container['sale_price'] < 0) {
            return false;
        }
        if ($this->container['retail_price'] < 0) {
            return false;
        }
        if ($this->container['weight'] < 0) {
            return false;
        }
        if ($this->container['width'] < 0) {
            return false;
        }
        if ($this->container['height'] < 0) {
            return false;
        }
        if ($this->container['depth'] < 0) {
            return false;
        }
        if ($this->container['fixed_cost_shipping_price'] < 0) {
            return false;
        }
        if (strlen($this->container['purchasing_disabled_message']) > 255) {
            return false;
        }
        if (strlen($this->container['purchasing_disabled_message']) < 0) {
            return false;
        }
        if (strlen($this->container['bin_picking_number']) > 255) {
            return false;
        }
        if (strlen($this->container['bin_picking_number']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets cost_price
     * @return double
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     * @param double $cost_price The cost price of the variant. Not affected by Price List prices.
     * @return $this
     */
    public function setCostPrice($cost_price)
    {

        if ($cost_price < 0) {
            throw new \InvalidArgumentException('invalid value for $cost_price when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price This variant's base price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is `null`, the product's default price (set in the Product resource's `price` field) will be used as the base price.
     * @return $this
     */
    public function setPrice($price)
    {

        if ($price < 0) {
            throw new \InvalidArgumentException('invalid value for $price when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets sale_price
     * @return double
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     * @param double $sale_price This variant's sale price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is null, the product's sale price (set in the Product resource's `price` field) will be used as the sale price.
     * @return $this
     */
    public function setSalePrice($sale_price)
    {

        if ($sale_price < 0) {
            throw new \InvalidArgumentException('invalid value for $sale_price when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets retail_price
     * @return double
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     * @param double $retail_price This variant's retail price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is null, the product's retail price (set in the Product resource's `price` field) will be used as the retail price.
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {

        if ($retail_price < 0) {
            throw new \InvalidArgumentException('invalid value for $retail_price when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets weight
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param double $weight This variant's base weight on the storefront. If this value is null, the product's default weight (set in the Product resource's weight field) will be used as the base weight.
     * @return $this
     */
    public function setWeight($weight)
    {

        if ($weight < 0) {
            throw new \InvalidArgumentException('invalid value for $weight when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param double $width Width of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default width (set in the Product resource's `width` field) will be used as the base width.
     * @return $this
     */
    public function setWidth($width)
    {

        if ($width < 0) {
            throw new \InvalidArgumentException('invalid value for $width when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param double $height Height of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default height (set in the Product resource's `height` field) will be used as the base height.
     * @return $this
     */
    public function setHeight($height)
    {

        if ($height < 0) {
            throw new \InvalidArgumentException('invalid value for $height when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets depth
     * @return double
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     * @param double $depth Depth of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default depth (set in the Product resource's `depth` field) will be used as the base depth.
     * @return $this
     */
    public function setDepth($depth)
    {

        if ($depth < 0) {
            throw new \InvalidArgumentException('invalid value for $depth when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets is_free_shipping
     * @return bool
     */
    public function getIsFreeShipping()
    {
        return $this->container['is_free_shipping'];
    }

    /**
     * Sets is_free_shipping
     * @param bool $is_free_shipping Flag used to indicate whether the variant has free shipping. If `true`, the shipping cost for the variant will be zero.
     * @return $this
     */
    public function setIsFreeShipping($is_free_shipping)
    {
        $this->container['is_free_shipping'] = $is_free_shipping;

        return $this;
    }

    /**
     * Gets fixed_cost_shipping_price
     * @return double
     */
    public function getFixedCostShippingPrice()
    {
        return $this->container['fixed_cost_shipping_price'];
    }

    /**
     * Sets fixed_cost_shipping_price
     * @param double $fixed_cost_shipping_price A fixed shipping cost for the variant. If defined, this value will be used during checkout instead of normal shipping-cost calculation.
     * @return $this
     */
    public function setFixedCostShippingPrice($fixed_cost_shipping_price)
    {

        if ($fixed_cost_shipping_price < 0) {
            throw new \InvalidArgumentException('invalid value for $fixed_cost_shipping_price when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['fixed_cost_shipping_price'] = $fixed_cost_shipping_price;

        return $this;
    }

    /**
     * Gets purchasing_disabled
     * @return bool
     */
    public function getPurchasingDisabled()
    {
        return $this->container['purchasing_disabled'];
    }

    /**
     * Sets purchasing_disabled
     * @param bool $purchasing_disabled If `true`, this variant will not be purchasable on the storefront.
     * @return $this
     */
    public function setPurchasingDisabled($purchasing_disabled)
    {
        $this->container['purchasing_disabled'] = $purchasing_disabled;

        return $this;
    }

    /**
     * Gets purchasing_disabled_message
     * @return string
     */
    public function getPurchasingDisabledMessage()
    {
        return $this->container['purchasing_disabled_message'];
    }

    /**
     * Sets purchasing_disabled_message
     * @param string $purchasing_disabled_message If `purchasing_disabled` is `true`, this message should show on the storefront when the variant is selected.
     * @return $this
     */
    public function setPurchasingDisabledMessage($purchasing_disabled_message)
    {
        if (strlen($purchasing_disabled_message) > 255) {
            throw new \InvalidArgumentException('invalid length for $purchasing_disabled_message when calling Variant., must be smaller than or equal to 255.');
        }
        if (strlen($purchasing_disabled_message) < 0) {
            throw new \InvalidArgumentException('invalid length for $purchasing_disabled_message when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['purchasing_disabled_message'] = $purchasing_disabled_message;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url The image that will be displayed when this variant is selected on the storefront. When updating a SKU image, send the publicly accessible URL. Supported image formats are JPEG, PNG, and GIF. Generic product images not specific to the variant should be stored on the product.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets upc
     * @return string
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     * @param string $upc The UPC code used in feeds for shopping comparison sites and external channel integrations.
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets inventory_level
     * @return int
     */
    public function getInventoryLevel()
    {
        return $this->container['inventory_level'];
    }

    /**
     * Sets inventory_level
     * @param int $inventory_level Inventory level for the variant, which is used when the product's inventory_tracking is set to `variant`.
     * @return $this
     */
    public function setInventoryLevel($inventory_level)
    {
        $this->container['inventory_level'] = $inventory_level;

        return $this;
    }

    /**
     * Gets inventory_warning_level
     * @return int
     */
    public function getInventoryWarningLevel()
    {
        return $this->container['inventory_warning_level'];
    }

    /**
     * Sets inventory_warning_level
     * @param int $inventory_warning_level When the variant hits this inventory level, it is considered low stock.
     * @return $this
     */
    public function setInventoryWarningLevel($inventory_warning_level)
    {
        $this->container['inventory_warning_level'] = $inventory_warning_level;

        return $this;
    }

    /**
     * Gets bin_picking_number
     * @return string
     */
    public function getBinPickingNumber()
    {
        return $this->container['bin_picking_number'];
    }

    /**
     * Sets bin_picking_number
     * @param string $bin_picking_number Identifies where in a warehouse the variant is located.
     * @return $this
     */
    public function setBinPickingNumber($bin_picking_number)
    {
        if (strlen($bin_picking_number) > 255) {
            throw new \InvalidArgumentException('invalid length for $bin_picking_number when calling Variant., must be smaller than or equal to 255.');
        }
        if (strlen($bin_picking_number) < 0) {
            throw new \InvalidArgumentException('invalid length for $bin_picking_number when calling Variant., must be bigger than or equal to 0.');
        }
        $this->container['bin_picking_number'] = $bin_picking_number;

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
     * @param int $id
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
     * @param int $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets sku_id
     * @return int
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     * @param int $sku_id Read-only reference to v2 API's SKU ID. Null if it is a base variant.
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets option_values
     * @return \BigCommerce\Api\Model\OptionValueVariant[]
     */
    public function getOptionValues()
    {
        return $this->container['option_values'];
    }

    /**
     * Sets option_values
     * @param \BigCommerce\Api\Model\OptionValueVariant[] $option_values Array of option and option values IDs that make up this variant. Will be empty if the variant is the product's base variant.
     * @return $this
     */
    public function setOptionValues($option_values)
    {
        $this->container['option_values'] = $option_values;

        return $this;
    }

    /**
     * Gets calculated_price
     * @return double
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     * @param double $calculated_price The price of the variant as seen on the storefront. This price takes into account `sale_price` and any price adjustment rules that are applicable to this variant.
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

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


