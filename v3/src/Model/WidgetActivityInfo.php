<?php
/**
 * WidgetActivityInfo
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
 * The version of the OpenAPI document: 2023-05-22
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
 * WidgetActivityInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WidgetActivityInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WidgetActivityInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityClickUrl' => 'string',
        'activityId' => 'string',
        'activityName' => 'string',
        'activityPictureUrls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityClickUrl' => null,
        'activityId' => null,
        'activityName' => null,
        'activityPictureUrls' => null
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
        'activityClickUrl' => 'activity_click_url',
        'activityId' => 'activity_id',
        'activityName' => 'activity_name',
        'activityPictureUrls' => 'activity_picture_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityClickUrl' => 'setActivityClickUrl',
        'activityId' => 'setActivityId',
        'activityName' => 'setActivityName',
        'activityPictureUrls' => 'setActivityPictureUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityClickUrl' => 'getActivityClickUrl',
        'activityId' => 'getActivityId',
        'activityName' => 'getActivityName',
        'activityPictureUrls' => 'getActivityPictureUrls'
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
        $this->container['activityClickUrl'] = $data['activityClickUrl'] ?? null;
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['activityName'] = $data['activityName'] ?? null;
        $this->container['activityPictureUrls'] = $data['activityPictureUrls'] ?? null;
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
     * Gets activityClickUrl
     *
     * @return string|null
     */
    public function getActivityClickUrl()
    {
        return $this->container['activityClickUrl'];
    }

    /**
     * Sets activityClickUrl
     *
     * @param string|null $activityClickUrl 活动点击跳转到小程序的链接地址
     *
     * @return self
     */
    public function setActivityClickUrl($activityClickUrl)
    {
        $this->container['activityClickUrl'] = $activityClickUrl;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动的唯一标识，同一个小程序橱窗下，该标识唯一，请开发者自行保证
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets activityName
     *
     * @return string|null
     */
    public function getActivityName()
    {
        return $this->container['activityName'];
    }

    /**
     * Sets activityName
     *
     * @param string|null $activityName 活动名称
     *
     * @return self
     */
    public function setActivityName($activityName)
    {
        $this->container['activityName'] = $activityName;

        return $this;
    }

    /**
     * Gets activityPictureUrls
     *
     * @return string[]|null
     */
    public function getActivityPictureUrls()
    {
        return $this->container['activityPictureUrls'];
    }

    /**
     * Sets activityPictureUrls
     *
     * @param string[]|null $activityPictureUrls 活动图片链接,最多不能超过5个
     *
     * @return self
     */
    public function setActivityPictureUrls($activityPictureUrls)
    {
        $this->container['activityPictureUrls'] = $activityPictureUrls;

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

