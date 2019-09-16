<?php
/**
 * ProductImage
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

class ProductImage extends ProductImageBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_thumbnail' => 'bool',
        'sort_order' => 'int',
        'description' => 'string',
        'id' => 'int',
        'product_id' => 'int',
        'image_file' => 'string',
        'url_zoom' => 'string',
        'url_standard' => 'string',
        'url_thumbnail' => 'string',
        'url_tiny' => 'string',
        'date_modified' => '\DateTime'
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
        'is_thumbnail' => 'is_thumbnail',
        'sort_order' => 'sort_order',
        'description' => 'description',
        'id' => 'id',
        'product_id' => 'product_id',
        'image_file' => 'image_file',
        'url_zoom' => 'url_zoom',
        'url_standard' => 'url_standard',
        'url_thumbnail' => 'url_thumbnail',
        'url_tiny' => 'url_tiny',
        'date_modified' => 'date_modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'is_thumbnail' => 'setIsThumbnail',
        'sort_order' => 'setSortOrder',
        'description' => 'setDescription',
        'id' => 'setId',
        'product_id' => 'setProductId',
        'image_file' => 'setImageFile',
        'url_zoom' => 'setUrlZoom',
        'url_standard' => 'setUrlStandard',
        'url_thumbnail' => 'setUrlThumbnail',
        'url_tiny' => 'setUrlTiny',
        'date_modified' => 'setDateModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'is_thumbnail' => 'getIsThumbnail',
        'sort_order' => 'getSortOrder',
        'description' => 'getDescription',
        'id' => 'getId',
        'product_id' => 'getProductId',
        'image_file' => 'getImageFile',
        'url_zoom' => 'getUrlZoom',
        'url_standard' => 'getUrlStandard',
        'url_thumbnail' => 'getUrlThumbnail',
        'url_tiny' => 'getUrlTiny',
        'date_modified' => 'getDateModified'
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
        $this->container['is_thumbnail'] = array_key_exists('is_thumbnail', $data) ? $data['is_thumbnail'] : null;
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['image_file'] = array_key_exists('image_file', $data) ? $data['image_file'] : null;
        $this->container['url_zoom'] = array_key_exists('url_zoom', $data) ? $data['url_zoom'] : null;
        $this->container['url_standard'] = array_key_exists('url_standard', $data) ? $data['url_standard'] : null;
        $this->container['url_thumbnail'] = array_key_exists('url_thumbnail', $data) ? $data['url_thumbnail'] : null;
        $this->container['url_tiny'] = array_key_exists('url_tiny', $data) ? $data['url_tiny'] : null;
        $this->container['date_modified'] = array_key_exists('date_modified', $data) ? $data['date_modified'] : null;
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
        if ($this->container['sort_order'] > 2147483647) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }
        if ($this->container['sort_order'] < -2147483648) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
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
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_thumbnail
     * @return bool
     */
    public function getIsThumbnail()
    {
        return $this->container['is_thumbnail'];
    }

    /**
     * Sets is_thumbnail
     * @param bool $is_thumbnail Flag for identifying whether the image is used as the product's thumbnail.
     * @return $this
     */
    public function setIsThumbnail($is_thumbnail)
    {
        $this->container['is_thumbnail'] = $is_thumbnail;

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
     * @param int $sort_order The order in which the image will be displayed on the product page. Higher integers give the image a lower priority. When updating, if the image is given a lower priority, all images with a `sort_order` the same as or greater than the image's new `sort_order` value will have their `sort_order`s reordered.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductImage., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductImage., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

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
     * @param string $description The description for the image.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param int $id The unique numeric ID of the image; increments sequentially.
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
     * @param int $product_id The unique numeric identifier for the product with which the image is associated.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets image_file
     * @return string
     */
    public function getImageFile()
    {
        return $this->container['image_file'];
    }

    /**
     * Sets image_file
     * @param string $image_file The local path to the original image file uploaded to BigCommerce.
     * @return $this
     */
    public function setImageFile($image_file)
    {
        $this->container['image_file'] = $image_file;

        return $this;
    }

    /**
     * Gets url_zoom
     * @return string
     */
    public function getUrlZoom()
    {
        return $this->container['url_zoom'];
    }

    /**
     * Sets url_zoom
     * @param string $url_zoom The zoom URL for this image. By default, this is used as the zoom image on product pages when zoom images are enabled.
     * @return $this
     */
    public function setUrlZoom($url_zoom)
    {
        $this->container['url_zoom'] = $url_zoom;

        return $this;
    }

    /**
     * Gets url_standard
     * @return string
     */
    public function getUrlStandard()
    {
        return $this->container['url_standard'];
    }

    /**
     * Sets url_standard
     * @param string $url_standard The standard URL for this image. By default, this is used for product-page images.
     * @return $this
     */
    public function setUrlStandard($url_standard)
    {
        $this->container['url_standard'] = $url_standard;

        return $this;
    }

    /**
     * Gets url_thumbnail
     * @return string
     */
    public function getUrlThumbnail()
    {
        return $this->container['url_thumbnail'];
    }

    /**
     * Sets url_thumbnail
     * @param string $url_thumbnail The thumbnail URL for this image. By default, this is the image size used on the category page and in side panels.
     * @return $this
     */
    public function setUrlThumbnail($url_thumbnail)
    {
        $this->container['url_thumbnail'] = $url_thumbnail;

        return $this;
    }

    /**
     * Gets url_tiny
     * @return string
     */
    public function getUrlTiny()
    {
        return $this->container['url_tiny'];
    }

    /**
     * Sets url_tiny
     * @param string $url_tiny The tiny URL for this image. By default, this is the image size used for thumbnails beneath the product image on a product page.
     * @return $this
     */
    public function setUrlTiny($url_tiny)
    {
        $this->container['url_tiny'] = $url_tiny;

        return $this;
    }

    /**
     * Gets date_modified
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param \DateTime $date_modified The date on which the product image was modified.
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

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


