<?php
/**
 * InteligentVoucher
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
 * InteligentVoucher Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteligentVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteligentVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandName' => 'string',
        'desc' => 'string',
        'donateFlag' => 'string',
        'effectType' => 'string',
        'endTime' => 'string',
        'extInfo' => 'string',
        'inteligentClauseTerms' => '\Alipay\OpenAPISDK\Model\InteligentClauseTerm[]',
        'inteligentDelayInfo' => '\Alipay\OpenAPISDK\Model\InteligentDelayInfo',
        'inteligentDescDetailList' => '\Alipay\OpenAPISDK\Model\InteligentVoucherDescDetail[]',
        'inteligentDisplayConfig' => '\Alipay\OpenAPISDK\Model\InteligentDisplayConfig',
        'inteligentItemInfo' => '\Alipay\OpenAPISDK\Model\InteligentItemInfo',
        'inteligentUseRule' => '\Alipay\OpenAPISDK\Model\InteligentUseRule',
        'logo' => 'string',
        'maxAmount' => 'string',
        'multiUseMode' => 'string',
        'name' => 'string',
        'rate' => 'string',
        'relativeTime' => 'string',
        'roundingRule' => 'string',
        'startTime' => 'string',
        'type' => 'string',
        'useInstructions' => 'string[]',
        'validateType' => 'string',
        'verifyMode' => 'string',
        'voucherImg' => 'string',
        'voucherNote' => 'string',
        'worthValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brandName' => null,
        'desc' => null,
        'donateFlag' => null,
        'effectType' => null,
        'endTime' => null,
        'extInfo' => null,
        'inteligentClauseTerms' => null,
        'inteligentDelayInfo' => null,
        'inteligentDescDetailList' => null,
        'inteligentDisplayConfig' => null,
        'inteligentItemInfo' => null,
        'inteligentUseRule' => null,
        'logo' => null,
        'maxAmount' => null,
        'multiUseMode' => null,
        'name' => null,
        'rate' => null,
        'relativeTime' => null,
        'roundingRule' => null,
        'startTime' => null,
        'type' => null,
        'useInstructions' => null,
        'validateType' => null,
        'verifyMode' => null,
        'voucherImg' => null,
        'voucherNote' => null,
        'worthValue' => null
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
        'brandName' => 'brand_name',
        'desc' => 'desc',
        'donateFlag' => 'donate_flag',
        'effectType' => 'effect_type',
        'endTime' => 'end_time',
        'extInfo' => 'ext_info',
        'inteligentClauseTerms' => 'inteligent_clause_terms',
        'inteligentDelayInfo' => 'inteligent_delay_info',
        'inteligentDescDetailList' => 'inteligent_desc_detail_list',
        'inteligentDisplayConfig' => 'inteligent_display_config',
        'inteligentItemInfo' => 'inteligent_item_info',
        'inteligentUseRule' => 'inteligent_use_rule',
        'logo' => 'logo',
        'maxAmount' => 'max_amount',
        'multiUseMode' => 'multi_use_mode',
        'name' => 'name',
        'rate' => 'rate',
        'relativeTime' => 'relative_time',
        'roundingRule' => 'rounding_rule',
        'startTime' => 'start_time',
        'type' => 'type',
        'useInstructions' => 'use_instructions',
        'validateType' => 'validate_type',
        'verifyMode' => 'verify_mode',
        'voucherImg' => 'voucher_img',
        'voucherNote' => 'voucher_note',
        'worthValue' => 'worth_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandName' => 'setBrandName',
        'desc' => 'setDesc',
        'donateFlag' => 'setDonateFlag',
        'effectType' => 'setEffectType',
        'endTime' => 'setEndTime',
        'extInfo' => 'setExtInfo',
        'inteligentClauseTerms' => 'setInteligentClauseTerms',
        'inteligentDelayInfo' => 'setInteligentDelayInfo',
        'inteligentDescDetailList' => 'setInteligentDescDetailList',
        'inteligentDisplayConfig' => 'setInteligentDisplayConfig',
        'inteligentItemInfo' => 'setInteligentItemInfo',
        'inteligentUseRule' => 'setInteligentUseRule',
        'logo' => 'setLogo',
        'maxAmount' => 'setMaxAmount',
        'multiUseMode' => 'setMultiUseMode',
        'name' => 'setName',
        'rate' => 'setRate',
        'relativeTime' => 'setRelativeTime',
        'roundingRule' => 'setRoundingRule',
        'startTime' => 'setStartTime',
        'type' => 'setType',
        'useInstructions' => 'setUseInstructions',
        'validateType' => 'setValidateType',
        'verifyMode' => 'setVerifyMode',
        'voucherImg' => 'setVoucherImg',
        'voucherNote' => 'setVoucherNote',
        'worthValue' => 'setWorthValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandName' => 'getBrandName',
        'desc' => 'getDesc',
        'donateFlag' => 'getDonateFlag',
        'effectType' => 'getEffectType',
        'endTime' => 'getEndTime',
        'extInfo' => 'getExtInfo',
        'inteligentClauseTerms' => 'getInteligentClauseTerms',
        'inteligentDelayInfo' => 'getInteligentDelayInfo',
        'inteligentDescDetailList' => 'getInteligentDescDetailList',
        'inteligentDisplayConfig' => 'getInteligentDisplayConfig',
        'inteligentItemInfo' => 'getInteligentItemInfo',
        'inteligentUseRule' => 'getInteligentUseRule',
        'logo' => 'getLogo',
        'maxAmount' => 'getMaxAmount',
        'multiUseMode' => 'getMultiUseMode',
        'name' => 'getName',
        'rate' => 'getRate',
        'relativeTime' => 'getRelativeTime',
        'roundingRule' => 'getRoundingRule',
        'startTime' => 'getStartTime',
        'type' => 'getType',
        'useInstructions' => 'getUseInstructions',
        'validateType' => 'getValidateType',
        'verifyMode' => 'getVerifyMode',
        'voucherImg' => 'getVoucherImg',
        'voucherNote' => 'getVoucherNote',
        'worthValue' => 'getWorthValue'
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
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['donateFlag'] = $data['donateFlag'] ?? null;
        $this->container['effectType'] = $data['effectType'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['inteligentClauseTerms'] = $data['inteligentClauseTerms'] ?? null;
        $this->container['inteligentDelayInfo'] = $data['inteligentDelayInfo'] ?? null;
        $this->container['inteligentDescDetailList'] = $data['inteligentDescDetailList'] ?? null;
        $this->container['inteligentDisplayConfig'] = $data['inteligentDisplayConfig'] ?? null;
        $this->container['inteligentItemInfo'] = $data['inteligentItemInfo'] ?? null;
        $this->container['inteligentUseRule'] = $data['inteligentUseRule'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['maxAmount'] = $data['maxAmount'] ?? null;
        $this->container['multiUseMode'] = $data['multiUseMode'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['relativeTime'] = $data['relativeTime'] ?? null;
        $this->container['roundingRule'] = $data['roundingRule'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['useInstructions'] = $data['useInstructions'] ?? null;
        $this->container['validateType'] = $data['validateType'] ?? null;
        $this->container['verifyMode'] = $data['verifyMode'] ?? null;
        $this->container['voucherImg'] = $data['voucherImg'] ?? null;
        $this->container['voucherNote'] = $data['voucherNote'] ?? null;
        $this->container['worthValue'] = $data['worthValue'] ?? null;
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
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 品牌名称
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 券详细说明  最多包含500个字符
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets donateFlag
     *
     * @return string|null
     */
    public function getDonateFlag()
    {
        return $this->container['donateFlag'];
    }

    /**
     * Sets donateFlag
     *
     * @param string|null $donateFlag 券是否可转赠，默认为可转赠
     *
     * @return self
     */
    public function setDonateFlag($donateFlag)
    {
        $this->container['donateFlag'] = $donateFlag;

        return $this;
    }

    /**
     * Gets effectType
     *
     * @return string|null
     */
    public function getEffectType()
    {
        return $this->container['effectType'];
    }

    /**
     * Sets effectType
     *
     * @param string|null $effectType 券生效的方式，目前支持以下方式  立即生效：IMMEDIATELY  延迟生效：DELAY  仅在券有效期类型为相对有效期时生效
     *
     * @return self
     */
    public function setEffectType($effectType)
    {
        $this->container['effectType'] = $effectType;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 券有效期的结束时间  仅在券有效期类型为绝对有效期时生效  必须晚于活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 券的扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets inteligentClauseTerms
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentClauseTerm[]|null
     */
    public function getInteligentClauseTerms()
    {
        return $this->container['inteligentClauseTerms'];
    }

    /**
     * Sets inteligentClauseTerms
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentClauseTerm[]|null $inteligentClauseTerms 券的说明条款
     *
     * @return self
     */
    public function setInteligentClauseTerms($inteligentClauseTerms)
    {
        $this->container['inteligentClauseTerms'] = $inteligentClauseTerms;

        return $this;
    }

    /**
     * Gets inteligentDelayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentDelayInfo|null
     */
    public function getInteligentDelayInfo()
    {
        return $this->container['inteligentDelayInfo'];
    }

    /**
     * Sets inteligentDelayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentDelayInfo|null $inteligentDelayInfo inteligentDelayInfo
     *
     * @return self
     */
    public function setInteligentDelayInfo($inteligentDelayInfo)
    {
        $this->container['inteligentDelayInfo'] = $inteligentDelayInfo;

        return $this;
    }

    /**
     * Gets inteligentDescDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentVoucherDescDetail[]|null
     */
    public function getInteligentDescDetailList()
    {
        return $this->container['inteligentDescDetailList'];
    }

    /**
     * Sets inteligentDescDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentVoucherDescDetail[]|null $inteligentDescDetailList 券使用说明描述列表
     *
     * @return self
     */
    public function setInteligentDescDetailList($inteligentDescDetailList)
    {
        $this->container['inteligentDescDetailList'] = $inteligentDescDetailList;

        return $this;
    }

    /**
     * Gets inteligentDisplayConfig
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentDisplayConfig|null
     */
    public function getInteligentDisplayConfig()
    {
        return $this->container['inteligentDisplayConfig'];
    }

    /**
     * Sets inteligentDisplayConfig
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentDisplayConfig|null $inteligentDisplayConfig inteligentDisplayConfig
     *
     * @return self
     */
    public function setInteligentDisplayConfig($inteligentDisplayConfig)
    {
        $this->container['inteligentDisplayConfig'] = $inteligentDisplayConfig;

        return $this;
    }

    /**
     * Gets inteligentItemInfo
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentItemInfo|null
     */
    public function getInteligentItemInfo()
    {
        return $this->container['inteligentItemInfo'];
    }

    /**
     * Sets inteligentItemInfo
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentItemInfo|null $inteligentItemInfo inteligentItemInfo
     *
     * @return self
     */
    public function setInteligentItemInfo($inteligentItemInfo)
    {
        $this->container['inteligentItemInfo'] = $inteligentItemInfo;

        return $this;
    }

    /**
     * Gets inteligentUseRule
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentUseRule|null
     */
    public function getInteligentUseRule()
    {
        return $this->container['inteligentUseRule'];
    }

    /**
     * Sets inteligentUseRule
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentUseRule|null $inteligentUseRule inteligentUseRule
     *
     * @return self
     */
    public function setInteligentUseRule($inteligentUseRule)
    {
        $this->container['inteligentUseRule'] = $inteligentUseRule;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo 券LOGO文件ID，调用图片上传接口alipay.offline.material.image.upload获得
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets maxAmount
     *
     * @return string|null
     */
    public function getMaxAmount()
    {
        return $this->container['maxAmount'];
    }

    /**
     * Sets maxAmount
     *
     * @param string|null $maxAmount 最高优惠金额，单位元  指用券最高可以优惠的金额  必须为合法金额类型字符串仅当券类型为折扣券（RATE），每满减券（PER_FULL_CUT）有效
     *
     * @return self
     */
    public function setMaxAmount($maxAmount)
    {
        $this->container['maxAmount'] = $maxAmount;

        return $this;
    }

    /**
     * Gets multiUseMode
     *
     * @return string|null
     */
    public function getMultiUseMode()
    {
        return $this->container['multiUseMode'];
    }

    /**
     * Sets multiUseMode
     *
     * @param string|null $multiUseMode 券叠加的属性，  仅全场券可设置该选项；  NO_MULTI:不可与其他全场券和单品券叠加;  MULTI_USE_WITH_SINGLE:  该全场优惠和单品优惠的叠加  ；MULTI_USE_WITH_OTHE  RS:该全场优惠和其他所有优惠都可以叠加
     *
     * @return self
     */
    public function setMultiUseMode($multiUseMode)
    {
        $this->container['multiUseMode'] = $multiUseMode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 券名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate 折扣率  仅当券类型为折扣券时有效  有效折扣率取值范围0.11-0.99  仅允许保留小数点后两位
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets relativeTime
     *
     * @return string|null
     */
    public function getRelativeTime()
    {
        return $this->container['relativeTime'];
    }

    /**
     * Sets relativeTime
     *
     * @param string|null $relativeTime 券相对有效期，单位天  仅在券有效期类型为相对有效期时生效  如，设5表示领券领取后5日内有效
     *
     * @return self
     */
    public function setRelativeTime($relativeTime)
    {
        $this->container['relativeTime'] = $relativeTime;

        return $this;
    }

    /**
     * Gets roundingRule
     *
     * @return string|null
     */
    public function getRoundingRule()
    {
        return $this->container['roundingRule'];
    }

    /**
     * Sets roundingRule
     *
     * @param string|null $roundingRule 券核销时，抹零方式，目前支持：  NOT_AUTO_ROUNDING:不自动抹零  AUTO_ROUNDING_YUAN:自动抹零到元  AUTO_ROUNDING_JIAO:自动抹零到角  ROUNDING_UP_YUAN:四舍五入到元  ROUNDING_UP_JIAO:四舍五入到角
     *
     * @return self
     */
    public function setRoundingRule($roundingRule)
    {
        $this->container['roundingRule'] = $roundingRule;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 券有效期的开始时间  仅在券有效期类型为绝对有效期时生效
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 券类型，目前支持以下类型：  MONEY：代金券；  PER_FULL_CUT：每满减券
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useInstructions
     *
     * @return string[]|null
     */
    public function getUseInstructions()
    {
        return $this->container['useInstructions'];
    }

    /**
     * Sets useInstructions
     *
     * @param string[]|null $useInstructions 券的使用说明  使用须知最多6条，且每条最多100字
     *
     * @return self
     */
    public function setUseInstructions($useInstructions)
    {
        $this->container['useInstructions'] = $useInstructions;

        return $this;
    }

    /**
     * Gets validateType
     *
     * @return string|null
     */
    public function getValidateType()
    {
        return $this->container['validateType'];
    }

    /**
     * Sets validateType
     *
     * @param string|null $validateType 券有效期类型，目前支持以下类型：  RELATIVE：相对有效期  FIXED：绝对有效期
     *
     * @return self
     */
    public function setValidateType($validateType)
    {
        $this->container['validateType'] = $validateType;

        return $this;
    }

    /**
     * Gets verifyMode
     *
     * @return string|null
     */
    public function getVerifyMode()
    {
        return $this->container['verifyMode'];
    }

    /**
     * Sets verifyMode
     *
     * @param string|null $verifyMode 该字段仅在兑换券条件下(即券类型为EXCHANGE)，用于设置兑换券的核销方式  USER_CLICK:用户自己点击券上的按钮核销  MERCHANT_SCAN：商户通过APP扫码核销  其他情况下此字段为空
     *
     * @return self
     */
    public function setVerifyMode($verifyMode)
    {
        $this->container['verifyMode'] = $verifyMode;

        return $this;
    }

    /**
     * Gets voucherImg
     *
     * @return string|null
     */
    public function getVoucherImg()
    {
        return $this->container['voucherImg'];
    }

    /**
     * Sets voucherImg
     *
     * @param string|null $voucherImg 券图片文件ID,调用上传图片接口alipay.offline.material.image.upload获得
     *
     * @return self
     */
    public function setVoucherImg($voucherImg)
    {
        $this->container['voucherImg'] = $voucherImg;

        return $this;
    }

    /**
     * Gets voucherNote
     *
     * @return string|null
     */
    public function getVoucherNote()
    {
        return $this->container['voucherNote'];
    }

    /**
     * Sets voucherNote
     *
     * @param string|null $voucherNote 券的备注    用于收银系统识别指定券使用；如备注中传入“123”，券发出后核销时将在当面付接口将该值传回，供收银系统识别
     *
     * @return self
     */
    public function setVoucherNote($voucherNote)
    {
        $this->container['voucherNote'] = $voucherNote;

        return $this;
    }

    /**
     * Gets worthValue
     *
     * @return string|null
     */
    public function getWorthValue()
    {
        return $this->container['worthValue'];
    }

    /**
     * Sets worthValue
     *
     * @param string|null $worthValue 券面额，单位元必须为合法金额类型字符串券类型为代金券（MONEY）、减至券（REDUCETO）、每满减券（PER_FULL_CUT）时必填  如：  代金券：10元代金券中的10为券面额；  每满减券：毎满100减10元，其中的10为券面额；  减至券：单品原价100，现价10元，其中10为券面额，单品减至券的券面额必须低于单品原价
     *
     * @return self
     */
    public function setWorthValue($worthValue)
    {
        $this->container['worthValue'] = $worthValue;

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


