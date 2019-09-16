<?php
/**
 * TransactionPost
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

class TransactionPost implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TransactionPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'event' => 'string',
        'method' => 'string',
        'amount' => 'float',
        'currency' => 'string',
        'gateway' => 'string',
        'gateway_transaction_id' => 'string',
        'date_created' => '\DateTime',
        'test' => 'bool',
        'status' => 'string',
        'fraud_review' => 'bool',
        'reference_transaction_id' => 'int',
        'offline' => '\BigCommerce\Api\Model\Offline',
        'custom' => '\BigCommerce\Api\Model\Custom'
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
        'event' => 'event',
        'method' => 'method',
        'amount' => 'amount',
        'currency' => 'currency',
        'gateway' => 'gateway',
        'gateway_transaction_id' => 'gateway_transaction_id',
        'date_created' => 'date_created',
        'test' => 'test',
        'status' => 'status',
        'fraud_review' => 'fraud_review',
        'reference_transaction_id' => 'reference_transaction_id',
        'offline' => 'offline',
        'custom' => 'custom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'event' => 'setEvent',
        'method' => 'setMethod',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'gateway' => 'setGateway',
        'gateway_transaction_id' => 'setGatewayTransactionId',
        'date_created' => 'setDateCreated',
        'test' => 'setTest',
        'status' => 'setStatus',
        'fraud_review' => 'setFraudReview',
        'reference_transaction_id' => 'setReferenceTransactionId',
        'offline' => 'setOffline',
        'custom' => 'setCustom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'event' => 'getEvent',
        'method' => 'getMethod',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'gateway' => 'getGateway',
        'gateway_transaction_id' => 'getGatewayTransactionId',
        'date_created' => 'getDateCreated',
        'test' => 'getTest',
        'status' => 'getStatus',
        'fraud_review' => 'getFraudReview',
        'reference_transaction_id' => 'getReferenceTransactionId',
        'offline' => 'getOffline',
        'custom' => 'getCustom'
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

    const EVENT_PURCHASE = 'purchase';
    const EVENT_AUTHORIZATION = 'authorization';
    const EVENT_CAPTURE = 'capture';
    const EVENT_REFUND = 'refund';
    const EVENT_VOID = 'void';
    const EVENT_PENDING = 'pending';
    const EVENT_SETTLED = 'settled';
    const METHOD_CREDIT_CARD = 'credit_card';
    const METHOD_ELECTRONIC_WALLET = 'electronic_wallet';
    const METHOD_GIFT_CERTIFICATE = 'gift_certificate';
    const METHOD_STORE_CREDIT = 'store_credit';
    const METHOD_APPLE_PAY_CARD = 'apple_pay_card';
    const METHOD_APPLE_PAY_TOKEN = 'apple_pay_token';
    const METHOD_TOKEN = 'token';
    const METHOD_CUSTOM = 'custom';
    const METHOD_OFFSITE = 'offsite';
    const METHOD_OFFLINE = 'offline';
    const METHOD_NONCE = 'nonce';
    const GATEWAY__2CHECKOUT = '2checkout';
    const GATEWAY_ADYEN = 'adyen';
    const GATEWAY_AMAZON = 'amazon';
    const GATEWAY_AUTHORIZENET = 'authorizenet';
    const GATEWAY_BANKDEPOSIT = 'bankdeposit';
    const GATEWAY_BRAINTREE = 'braintree';
    const GATEWAY_CHEQUE = 'cheque';
    const GATEWAY_COD = 'cod';
    const GATEWAY_CUSTOM = 'custom';
    const GATEWAY_FIRSTDATAGGE4 = 'firstdatagge4';
    const GATEWAY_GIFTCERTIFICATE = 'giftcertificate';
    const GATEWAY_HPS = 'hps';
    const GATEWAY_INSTORE = 'instore';
    const GATEWAY_KLARNA = 'klarna';
    const GATEWAY_MIGS = 'migs';
    const GATEWAY_MONEYORDER = 'moneyorder';
    const GATEWAY_NMI = 'nmi';
    const GATEWAY_PAYPALEXPRESS = 'paypalexpress';
    const GATEWAY_PAYPALPAYMENTSPROUS = 'paypalpaymentsprous';
    const GATEWAY_PAYPALPAYMENTSPROUK = 'paypalpaymentsprouk';
    const GATEWAY_PLUGNPAY = 'plugnpay';
    const GATEWAY_QBMSV2 = 'qbmsv2';
    const GATEWAY_SECURENET = 'securenet';
    const GATEWAY_SQUARE = 'square';
    const GATEWAY_STORECREDIT = 'storecredit';
    const GATEWAY_STRIPE = 'stripe';
    const GATEWAY_TESTGATEWAY = 'testgateway';
    const GATEWAY_USAEPAY = 'usaepay';
    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_PURCHASE,
            self::EVENT_AUTHORIZATION,
            self::EVENT_CAPTURE,
            self::EVENT_REFUND,
            self::EVENT_VOID,
            self::EVENT_PENDING,
            self::EVENT_SETTLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_CREDIT_CARD,
            self::METHOD_ELECTRONIC_WALLET,
            self::METHOD_GIFT_CERTIFICATE,
            self::METHOD_STORE_CREDIT,
            self::METHOD_APPLE_PAY_CARD,
            self::METHOD_APPLE_PAY_TOKEN,
            self::METHOD_TOKEN,
            self::METHOD_CUSTOM,
            self::METHOD_OFFSITE,
            self::METHOD_OFFLINE,
            self::METHOD_NONCE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGatewayAllowableValues()
    {
        return [
            self::GATEWAY__2CHECKOUT,
            self::GATEWAY_ADYEN,
            self::GATEWAY_AMAZON,
            self::GATEWAY_AUTHORIZENET,
            self::GATEWAY_BANKDEPOSIT,
            self::GATEWAY_BRAINTREE,
            self::GATEWAY_CHEQUE,
            self::GATEWAY_COD,
            self::GATEWAY_CUSTOM,
            self::GATEWAY_FIRSTDATAGGE4,
            self::GATEWAY_GIFTCERTIFICATE,
            self::GATEWAY_HPS,
            self::GATEWAY_INSTORE,
            self::GATEWAY_KLARNA,
            self::GATEWAY_MIGS,
            self::GATEWAY_MONEYORDER,
            self::GATEWAY_NMI,
            self::GATEWAY_PAYPALEXPRESS,
            self::GATEWAY_PAYPALPAYMENTSPROUS,
            self::GATEWAY_PAYPALPAYMENTSPROUK,
            self::GATEWAY_PLUGNPAY,
            self::GATEWAY_QBMSV2,
            self::GATEWAY_SECURENET,
            self::GATEWAY_SQUARE,
            self::GATEWAY_STORECREDIT,
            self::GATEWAY_STRIPE,
            self::GATEWAY_TESTGATEWAY,
            self::GATEWAY_USAEPAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ERROR,
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
        $this->container['event'] = array_key_exists('event', $data) ? $data['event'] : null;
        $this->container['method'] = array_key_exists('method', $data) ? $data['method'] : null;
        $this->container['amount'] = array_key_exists('amount', $data) ? $data['amount'] : null;
        $this->container['currency'] = array_key_exists('currency', $data) ? $data['currency'] : null;
        $this->container['gateway'] = array_key_exists('gateway', $data) ? $data['gateway'] : null;
        $this->container['gateway_transaction_id'] = array_key_exists('gateway_transaction_id', $data) ? $data['gateway_transaction_id'] : null;
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : null;
        $this->container['test'] = array_key_exists('test', $data) ? $data['test'] : null;
        $this->container['status'] = array_key_exists('status', $data) ? $data['status'] : null;
        $this->container['fraud_review'] = array_key_exists('fraud_review', $data) ? $data['fraud_review'] : null;
        $this->container['reference_transaction_id'] = array_key_exists('reference_transaction_id', $data) ? $data['reference_transaction_id'] : null;
        $this->container['offline'] = array_key_exists('offline', $data) ? $data['offline'] : null;
        $this->container['custom'] = array_key_exists('custom', $data) ? $data['custom'] : null;
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
        if ($this->container['event'] === null) {
            $invalid_properties[] = "'event' can't be null";
        }
        $allowed_values = ["purchase", "authorization", "capture", "refund", "void", "pending", "settled"];
        if (!in_array($this->container['event'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'event', must be one of #{allowed_values}.";
        }
        if ($this->container['method'] === null) {
            $invalid_properties[] = "'method' can't be null";
        }
        $allowed_values = ["credit_card", "electronic_wallet", "gift_certificate", "store_credit", "apple_pay_card", "apple_pay_token", "token", "custom", "offsite", "offline", "nonce"];
        if (!in_array($this->container['method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'method', must be one of #{allowed_values}.";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['gateway'] === null) {
            $invalid_properties[] = "'gateway' can't be null";
        }
        $allowed_values = ["2checkout", "adyen", "amazon", "authorizenet", "bankdeposit", "braintree", "cheque", "cod", "custom", "firstdatagge4", "giftcertificate", "hps", "instore", "klarna", "migs", "moneyorder", "nmi", "paypalexpress", "paypalpaymentsprous", "paypalpaymentsprouk", "plugnpay", "qbmsv2", "securenet", "square", "storecredit", "stripe", "testgateway", "usaepay"];
        if (!in_array($this->container['gateway'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gateway', must be one of #{allowed_values}.";
        }
        $allowed_values = ["ok", "error"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        if ($this->container['event'] === null) {
            return false;
        }
        $allowed_values = ["purchase", "authorization", "capture", "refund", "void", "pending", "settled"];
        if (!in_array($this->container['event'], $allowed_values)) {
            return false;
        }
        if ($this->container['method'] === null) {
            return false;
        }
        $allowed_values = ["credit_card", "electronic_wallet", "gift_certificate", "store_credit", "apple_pay_card", "apple_pay_token", "token", "custom", "offsite", "offline", "nonce"];
        if (!in_array($this->container['method'], $allowed_values)) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['gateway'] === null) {
            return false;
        }
        $allowed_values = ["2checkout", "adyen", "amazon", "authorizenet", "bankdeposit", "braintree", "cheque", "cod", "custom", "firstdatagge4", "giftcertificate", "hps", "instore", "klarna", "migs", "moneyorder", "nmi", "paypalexpress", "paypalpaymentsprous", "paypalpaymentsprouk", "plugnpay", "qbmsv2", "securenet", "square", "storecredit", "stripe", "testgateway", "usaepay"];
        if (!in_array($this->container['gateway'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["ok", "error"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets event
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     * @param string $event Store event that created the transaction.
     * @return $this
     */
    public function setEvent($event)
    {
        $allowed_values = ['purchase', 'authorization', 'capture', 'refund', 'void', 'pending', 'settled'];
        if (!is_null($event) && (!in_array($event, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'event', must be one of 'purchase', 'authorization', 'capture', 'refund', 'void', 'pending', 'settled'");
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets method
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     * @param string $method The payment method: `credit_card` - a credit-card transaction; `electronic_wallet` - an online wallet; `store_credit` - a transaction using store credit; `gift_certificate` - a transaction using a gift certificate; `custom` - manual payment methods; `token` - payment token; `nonce` - temporary payment token; `offsite` - online payment off the site (e.g., PayPal); `offline` - payment method that takes place offline.
     * @return $this
     */
    public function setMethod($method)
    {
        $allowed_values = ['credit_card', 'electronic_wallet', 'gift_certificate', 'store_credit', 'apple_pay_card', 'apple_pay_token', 'token', 'custom', 'offsite', 'offline', 'nonce'];
        if (!is_null($method) && (!in_array($method, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'method', must be one of 'credit_card', 'electronic_wallet', 'gift_certificate', 'store_credit', 'apple_pay_card', 'apple_pay_token', 'token', 'custom', 'offsite', 'offline', 'nonce'");
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount Amount of money in the transaction.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the transaction.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets gateway
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     * @param string $gateway The payment gateway, where applicable.
     * @return $this
     */
    public function setGateway($gateway)
    {
        $allowed_values = ['2checkout', 'adyen', 'amazon', 'authorizenet', 'bankdeposit', 'braintree', 'cheque', 'cod', 'custom', 'firstdatagge4', 'giftcertificate', 'hps', 'instore', 'klarna', 'migs', 'moneyorder', 'nmi', 'paypalexpress', 'paypalpaymentsprous', 'paypalpaymentsprouk', 'plugnpay', 'qbmsv2', 'securenet', 'square', 'storecredit', 'stripe', 'testgateway', 'usaepay'];
        if (!is_null($gateway) && (!in_array($gateway, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'gateway', must be one of '2checkout', 'adyen', 'amazon', 'authorizenet', 'bankdeposit', 'braintree', 'cheque', 'cod', 'custom', 'firstdatagge4', 'giftcertificate', 'hps', 'instore', 'klarna', 'migs', 'moneyorder', 'nmi', 'paypalexpress', 'paypalpaymentsprous', 'paypalpaymentsprouk', 'plugnpay', 'qbmsv2', 'securenet', 'square', 'storecredit', 'stripe', 'testgateway', 'usaepay'");
        }
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets gateway_transaction_id
     * @return string
     */
    public function getGatewayTransactionId()
    {
        return $this->container['gateway_transaction_id'];
    }

    /**
     * Sets gateway_transaction_id
     * @param string $gateway_transaction_id The transaction ID returned by the payment gateway for this transaction item.
     * @return $this
     */
    public function setGatewayTransactionId($gateway_transaction_id)
    {
        $this->container['gateway_transaction_id'] = $gateway_transaction_id;

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
     * @param \DateTime $date_created The datetime of the transaction.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets test
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     * @param bool $test True if the transaction performed was a test, or if the gateway is in test mode.
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the transaction.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = ['ok', 'error'];
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ok', 'error'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fraud_review
     * @return bool
     */
    public function getFraudReview()
    {
        return $this->container['fraud_review'];
    }

    /**
     * Sets fraud_review
     * @param bool $fraud_review Result of gateway fraud review, if any. Default is `false`.
     * @return $this
     */
    public function setFraudReview($fraud_review)
    {
        $this->container['fraud_review'] = $fraud_review;

        return $this;
    }

    /**
     * Gets reference_transaction_id
     * @return int
     */
    public function getReferenceTransactionId()
    {
        return $this->container['reference_transaction_id'];
    }

    /**
     * Sets reference_transaction_id
     * @param int $reference_transaction_id Identifier for an existing transaction upon which this transaction acts.
     * @return $this
     */
    public function setReferenceTransactionId($reference_transaction_id)
    {
        $this->container['reference_transaction_id'] = $reference_transaction_id;

        return $this;
    }

    /**
     * Gets offline
     * @return \BigCommerce\Api\Model\Offline
     */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
     * Sets offline
     * @param \BigCommerce\Api\Model\Offline $offline
     * @return $this
     */
    public function setOffline($offline)
    {
        $this->container['offline'] = $offline;

        return $this;
    }

    /**
     * Gets custom
     * @return \BigCommerce\Api\Model\Custom
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     * @param \BigCommerce\Api\Model\Custom $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

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


