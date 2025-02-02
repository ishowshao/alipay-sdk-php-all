<?php
/**
 * KoubeiTradeOrderConsultModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-12-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * KoubeiTradeOrderConsultModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class KoubeiTradeOrderConsultModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KoubeiTradeOrderConsultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apdidToken' => 'string',
        'goodsInfo' => '\Alipay\OpenAPISDK\Model\GoodsInfo[]',
        'requestId' => 'string',
        'shopId' => 'string',
        'totalAmount' => 'string',
        'undiscountableAmount' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apdidToken' => null,
        'goodsInfo' => null,
        'requestId' => null,
        'shopId' => null,
        'totalAmount' => null,
        'undiscountableAmount' => null,
        'userId' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apdidToken' => 'apdid_token',
        'goodsInfo' => 'goods_info',
        'requestId' => 'request_id',
        'shopId' => 'shop_id',
        'totalAmount' => 'total_amount',
        'undiscountableAmount' => 'undiscountable_amount',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apdidToken' => 'setApdidToken',
        'goodsInfo' => 'setGoodsInfo',
        'requestId' => 'setRequestId',
        'shopId' => 'setShopId',
        'totalAmount' => 'setTotalAmount',
        'undiscountableAmount' => 'setUndiscountableAmount',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apdidToken' => 'getApdidToken',
        'goodsInfo' => 'getGoodsInfo',
        'requestId' => 'getRequestId',
        'shopId' => 'getShopId',
        'totalAmount' => 'getTotalAmount',
        'undiscountableAmount' => 'getUndiscountableAmount',
        'userId' => 'getUserId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['apdidToken'] = $data['apdidToken'] ?? null;
        $this->container['goodsInfo'] = $data['goodsInfo'] ?? null;
        $this->container['requestId'] = $data['requestId'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['undiscountableAmount'] = $data['undiscountableAmount'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets apdidToken
     *
     * @return string|null
     */
    public function getApdidToken()
    {
        return $this->container['apdidToken'];
    }

    /**
     * Sets apdidToken
     *
     * @param string|null $apdidToken 用户设备信息,通过钱包容器提供的JSAPI接口获取，  一、接口使用方法：  AlipayJSBridge.call('getO2ODeviceToken', {                  appName: 'kb_isv_110229',                  appKey:'98y6VvdaDLpoqWZw'              },              function (result) {                   }          );      });  二、result数据结构：   1、调用失败： {\"error\":xxx,\"errorMessage\":\"xxx\"}     2、调用成功： {'appToken':'xxxssajkjkjkxdkwqkqwb'}
     *
     * @return self
     */
    public function setApdidToken($apdidToken)
    {
        $this->container['apdidToken'] = $apdidToken;

        return $this;
    }

    /**
     * Gets goodsInfo
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsInfo[]|null
     */
    public function getGoodsInfo()
    {
        return $this->container['goodsInfo'];
    }

    /**
     * Sets goodsInfo
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsInfo[]|null $goodsInfo 商品明细列表。注意：单品总金额不能大于订单金额
     *
     * @return self
     */
    public function setGoodsInfo($goodsInfo)
    {
        $this->container['goodsInfo'] = $goodsInfo;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId 唯一请求id，开放者请确保每次请求的唯一性。
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 支付宝门店编号
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount 订单总金额，单位元，精确到小数点后两位，取值范围[0.01,999999999]。 注意：如果同时传入了【不可打折金额】，【订单总金额】两者，则必须满足【不可打折金额】<=【订单总金额】。
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets undiscountableAmount
     *
     * @return string|null
     */
    public function getUndiscountableAmount()
    {
        return $this->container['undiscountableAmount'];
    }

    /**
     * Sets undiscountableAmount
     *
     * @param string|null $undiscountableAmount 不参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0,999999999]。 注意：如果同时传入了【不可打折金额】、【订单总金额】，则必须满足【不可打折金额】<=【订单总金额】。
     *
     * @return self
     */
    public function setUndiscountableAmount($undiscountableAmount)
    {
        $this->container['undiscountableAmount'] = $undiscountableAmount;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 支付宝用户 Id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


