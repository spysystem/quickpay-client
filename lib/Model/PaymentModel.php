<?php
/**
 * PaymentModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuickPay
 *
 * QuickPay client to capture and refund payments
 *
 * OpenAPI spec version: v10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PaymentModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'merchant_id' => 'int',
        'order_id' => 'string',
        'accepted' => 'bool',
        'type' => 'string',
        'text_on_statement' => 'string',
        'branding_id' => 'int',
        'variables' => 'string',
        'currency' => 'string',
        'state' => 'string',
        'metadata' => '\Swagger\Client\Model\MetadataModel',
        'link' => '\Swagger\Client\Model\PaymentLinkModel',
        'shipping_address' => '\Swagger\Client\Model\AddressModel',
        'invoice_address' => '\Swagger\Client\Model\AddressModel',
        'basket' => '\Swagger\Client\Model\BasketModel',
        'shipping' => '\Swagger\Client\Model\ShippingModel',
        'operations' => '\Swagger\Client\Model\OperationModel[]',
        'test_mode' => 'bool',
        'acquirer' => 'string',
        'facilitator' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'balance' => 'float',
        'fee' => 'float',
        'subscription_id' => 'int'
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
        'merchant_id' => 'merchant_id',
        'order_id' => 'order_id',
        'accepted' => 'accepted',
        'type' => 'type',
        'text_on_statement' => 'text_on_statement',
        'branding_id' => 'branding_id',
        'variables' => 'variables',
        'currency' => 'currency',
        'state' => 'state',
        'metadata' => 'metadata',
        'link' => 'link',
        'shipping_address' => 'shipping_address',
        'invoice_address' => 'invoice_address',
        'basket' => 'basket',
        'shipping' => 'shipping',
        'operations' => 'operations',
        'test_mode' => 'test_mode',
        'acquirer' => 'acquirer',
        'facilitator' => 'facilitator',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'balance' => 'balance',
        'fee' => 'fee',
        'subscription_id' => 'subscription_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'order_id' => 'setOrderId',
        'accepted' => 'setAccepted',
        'type' => 'setType',
        'text_on_statement' => 'setTextOnStatement',
        'branding_id' => 'setBrandingId',
        'variables' => 'setVariables',
        'currency' => 'setCurrency',
        'state' => 'setState',
        'metadata' => 'setMetadata',
        'link' => 'setLink',
        'shipping_address' => 'setShippingAddress',
        'invoice_address' => 'setInvoiceAddress',
        'basket' => 'setBasket',
        'shipping' => 'setShipping',
        'operations' => 'setOperations',
        'test_mode' => 'setTestMode',
        'acquirer' => 'setAcquirer',
        'facilitator' => 'setFacilitator',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'balance' => 'setBalance',
        'fee' => 'setFee',
        'subscription_id' => 'setSubscriptionId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'order_id' => 'getOrderId',
        'accepted' => 'getAccepted',
        'type' => 'getType',
        'text_on_statement' => 'getTextOnStatement',
        'branding_id' => 'getBrandingId',
        'variables' => 'getVariables',
        'currency' => 'getCurrency',
        'state' => 'getState',
        'metadata' => 'getMetadata',
        'link' => 'getLink',
        'shipping_address' => 'getShippingAddress',
        'invoice_address' => 'getInvoiceAddress',
        'basket' => 'getBasket',
        'shipping' => 'getShipping',
        'operations' => 'getOperations',
        'test_mode' => 'getTestMode',
        'acquirer' => 'getAcquirer',
        'facilitator' => 'getFacilitator',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'balance' => 'getBalance',
        'fee' => 'getFee',
        'subscription_id' => 'getSubscriptionId'
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

    const STATE_INITIAL = 'initial';
    const STATE_PENDING = 'pending';
    const STATE_NEW = 'new';
    const STATE_REJECTED = 'rejected';
    const STATE_PROCESSED = 'processed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INITIAL,
            self::STATE_PENDING,
            self::STATE_NEW,
            self::STATE_REJECTED,
            self::STATE_PROCESSED,
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
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['text_on_statement'] = isset($data['text_on_statement']) ? $data['text_on_statement'] : null;
        $this->container['branding_id'] = isset($data['branding_id']) ? $data['branding_id'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['invoice_address'] = isset($data['invoice_address']) ? $data['invoice_address'] : null;
        $this->container['basket'] = isset($data['basket']) ? $data['basket'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
        $this->container['acquirer'] = isset($data['acquirer']) ? $data['acquirer'] : null;
        $this->container['facilitator'] = isset($data['facilitator']) ? $data['facilitator'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["initial", "pending", "new", "rejected", "processed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'initial', 'pending', 'new', 'rejected', 'processed'.";
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
        $allowed_values = ["initial", "pending", "new", "rejected", "processed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param int $merchant_id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets accepted
     * @return bool
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     * @param bool $accepted
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text_on_statement
     * @return string
     */
    public function getTextOnStatement()
    {
        return $this->container['text_on_statement'];
    }

    /**
     * Sets text_on_statement
     * @param string $text_on_statement
     * @return $this
     */
    public function setTextOnStatement($text_on_statement)
    {
        $this->container['text_on_statement'] = $text_on_statement;

        return $this;
    }

    /**
     * Gets branding_id
     * @return int
     */
    public function getBrandingId()
    {
        return $this->container['branding_id'];
    }

    /**
     * Sets branding_id
     * @param int $branding_id
     * @return $this
     */
    public function setBrandingId($branding_id)
    {
        $this->container['branding_id'] = $branding_id;

        return $this;
    }

    /**
     * Gets variables
     * @return string
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     * @param string $variables
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

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
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
        $allowed_values = array('initial', 'pending', 'new', 'rejected', 'processed');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'initial', 'pending', 'new', 'rejected', 'processed'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets metadata
     * @return \Swagger\Client\Model\MetadataModel
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \Swagger\Client\Model\MetadataModel $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets link
     * @return \Swagger\Client\Model\PaymentLinkModel
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param \Swagger\Client\Model\PaymentLinkModel $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets shipping_address
     * @return \Swagger\Client\Model\AddressModel
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \Swagger\Client\Model\AddressModel $shipping_address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets invoice_address
     * @return \Swagger\Client\Model\AddressModel
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }

    /**
     * Sets invoice_address
     * @param \Swagger\Client\Model\AddressModel $invoice_address
     * @return $this
     */
    public function setInvoiceAddress($invoice_address)
    {
        $this->container['invoice_address'] = $invoice_address;

        return $this;
    }

    /**
     * Gets basket
     * @return \Swagger\Client\Model\BasketModel
     */
    public function getBasket()
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     * @param \Swagger\Client\Model\BasketModel $basket
     * @return $this
     */
    public function setBasket($basket)
    {
        $this->container['basket'] = $basket;

        return $this;
    }

    /**
     * Gets shipping
     * @return \Swagger\Client\Model\ShippingModel
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     * @param \Swagger\Client\Model\ShippingModel $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets operations
     * @return \Swagger\Client\Model\OperationModel[]
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     * @param \Swagger\Client\Model\OperationModel[] $operations
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;

        return $this;
    }

    /**
     * Gets test_mode
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     * @param bool $test_mode
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets acquirer
     * @return string
     */
    public function getAcquirer()
    {
        return $this->container['acquirer'];
    }

    /**
     * Sets acquirer
     * @param string $acquirer
     * @return $this
     */
    public function setAcquirer($acquirer)
    {
        $this->container['acquirer'] = $acquirer;

        return $this;
    }

    /**
     * Gets facilitator
     * @return string
     */
    public function getFacilitator()
    {
        return $this->container['facilitator'];
    }

    /**
     * Sets facilitator
     * @param string $facilitator
     * @return $this
     */
    public function setFacilitator($facilitator)
    {
        $this->container['facilitator'] = $facilitator;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at ISO-8601 timestamp
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at ISO-8601 timestamp
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets balance
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param float $balance
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets fee
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     * @param float $fee
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets subscription_id
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     * @param int $subscription_id
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
