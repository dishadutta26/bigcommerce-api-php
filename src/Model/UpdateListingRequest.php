<?php
/**
 * UpdateListingRequest
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
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

class UpdateListingRequest extends Listing implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateListingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => 'int',
        'listing_id' => 'int',
        'product_id' => 'int',
        'state' => 'string',
        'name' => 'string',
        'description' => 'string',
        'external_id' => 'string',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'variants' => '\BigCommerce\Api\Model\ListingVariant[]'
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
        'channel_id' => 'channel_id',
        'listing_id' => 'listing_id',
        'product_id' => 'product_id',
        'state' => 'state',
        'name' => 'name',
        'description' => 'description',
        'external_id' => 'external_id',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'variants' => 'variants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'listing_id' => 'setListingId',
        'product_id' => 'setProductId',
        'state' => 'setState',
        'name' => 'setName',
        'description' => 'setDescription',
        'external_id' => 'setExternalId',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'variants' => 'setVariants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'listing_id' => 'getListingId',
        'product_id' => 'getProductId',
        'state' => 'getState',
        'name' => 'getName',
        'description' => 'getDescription',
        'external_id' => 'getExternalId',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'variants' => 'getVariants'
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

    const STATE_ACTIVE = 'active';
    const STATE_DISABLED = 'disabled';
    const STATE_ERROR = 'error';
    const STATE_PENDING = 'pending';
    const STATE_PENDING_DISABLE = 'pending_disable';
    const STATE_PENDING_DELETE = 'pending_delete';
    const STATE_QUEUED = 'queued';
    const STATE_REJECTED = 'rejected';
    const STATE_SUBMITTED = 'submitted';
    const STATE_DELETED = 'deleted';
    const STATE_UNKNOWN = 'unknown';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_DISABLED,
            self::STATE_ERROR,
            self::STATE_PENDING,
            self::STATE_PENDING_DISABLE,
            self::STATE_PENDING_DELETE,
            self::STATE_QUEUED,
            self::STATE_REJECTED,
            self::STATE_SUBMITTED,
            self::STATE_DELETED,
            self::STATE_UNKNOWN,
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
        $this->container['channel_id'] = array_key_exists('channel_id', $data) ? $data['channel_id'] : null;
        $this->container['listing_id'] = array_key_exists('listing_id', $data) ? $data['listing_id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['state'] = array_key_exists('state', $data) ? $data['state'] : null;
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['external_id'] = array_key_exists('external_id', $data) ? $data['external_id'] : null;
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : null;
        $this->container['date_modified'] = array_key_exists('date_modified', $data) ? $data['date_modified'] : null;
        $this->container['variants'] = array_key_exists('variants', $data) ? $data['variants'] : null;
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
        if ($this->container['channel_id'] === null) {
            $invalid_properties[] = "'channel_id' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["active", "disabled", "error", "pending", "pending_disable", "pending_delete", "queued", "rejected", "submitted", "deleted", "unknown"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
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
        if ($this->container['channel_id'] === null) {
            return false;
        }
        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["active", "disabled", "error", "pending", "pending_disable", "pending_delete", "queued", "rejected", "submitted", "deleted", "unknown"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param int $channel_id
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets listing_id
     * @return int
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     * @param int $listing_id
     * @return $this
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

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
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = ['active', 'disabled', 'error', 'pending', 'pending_disable', 'pending_delete', 'queued', 'rejected', 'submitted', 'deleted', 'unknown'];
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'disabled', 'error', 'pending', 'pending_disable', 'pending_delete', 'queued', 'rejected', 'submitted', 'deleted', 'unknown'");
        }
        $this->container['state'] = $state;

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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
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
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

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
     * @param \DateTime $date_modified
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets variants
     * @return \BigCommerce\Api\Model\ListingVariant[]
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     * @param \BigCommerce\Api\Model\ListingVariant[] $variants
     * @return $this
     */
    public function setVariants($variants)
    {
        $this->container['variants'] = $variants;

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


