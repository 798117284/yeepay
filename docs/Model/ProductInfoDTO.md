# ProductInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productCode** | **string** |  | 
**rateType** | **string** | &lt;p&gt;计费策略，枚举值如下：&lt;br /&gt;1、SINGLE_PERCENT:单笔百分比&lt;br /&gt;2、SINGLE_FIXED:单笔固定值&lt;br /&gt;3、FIXED_MIX_PERCENT:单笔固定值+单笔百分比&lt;br /&gt;4、PERCENT_MIX_CAP:单笔百分比+封顶值&lt;br /&gt;5、PERCENT_MIX_GUARANTEED:单笔百分比+保底值&lt;br /&gt;6、PERCENT_MIX_GUARANTEED_CAP:单笔百分比+保底值+封顶值&lt;br /&gt;7、LADDER_NO_ACC:单笔金额阶梯&lt;/p&gt; | 
**ladderFeeList** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\LadderFeeDTO[]**](LadderFeeDTO.md) |  | [optional] 
**fixedRate** | **string** | &lt;p&gt;1、单位：元/笔；如5元/笔，上传5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate，整数位最多14位，小数位最多保留2位&lt;br /&gt;3、如计费策略为PERCENT_MIX_GUARANTEED_CAP时，保底值必须小于封顶值&lt;br /&gt;示例值：\&quot;5\&quot;&lt;/p&gt; | [optional] 
**paymentMethod** | **string** | &lt;p&gt;根据商户实际业务情况上送即可，具体分为：&lt;br /&gt;REAL_TIME:实收&lt;br /&gt;PREPAID_REAL:预付实扣&lt;br /&gt;UN_REAL_TIME:后收 (部分行业商户不支持，以跟商务约定的实际情况为准)；&lt;br /&gt;说明:&lt;br /&gt;1、手续费承担方undertaker传值USER时，手续费收取方式paymentMethod仅支持传REAL_TIME&lt;/p&gt; | [optional] 
**minRate** | **string** | &lt;p&gt;1、单位：元/笔；如5元/笔，上传5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate，整数位最多14位，小数位最多保留2位&lt;br /&gt;3、如计费策略为PERCENT_MIX_GUARANTEED_CAP时，保底值必须小于封顶值&lt;/p&gt; | [optional] 
**percentRate** | **string** | &lt;p&gt;1、该字段单位：%；如0.5%，上传0.5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate&amp;lt;&#x3D;100，整数位最多3位，小数位最多保留4位&lt;/p&gt; | [optional] 
**undertaker** | **string** | &lt;p&gt;需要承担该商户交易/结算等产品手续费的商户对应的角色。&lt;br /&gt;&lt;strong&gt;1.非必填&lt;/strong&gt;：&lt;br /&gt;按照产品默认承担方式或商户自行承担手续费且无需指定其他方承担时，入网开通产品可不传递手续费承担方参数&lt;br /&gt;&lt;strong&gt;2.必填&lt;/strong&gt;：&lt;br /&gt;商户需要指定手续费方时或产品信息变更的时候需要上传手续费承担方参数&lt;br /&gt;&lt;strong&gt;3.参数值&lt;/strong&gt;：&lt;br /&gt;标准商户-承担 请传参数:ORDINARY_MERCHANT&lt;br /&gt;入驻商户-承担 请传参数:SETTLED_MERCHANT&lt;br /&gt;用户-承担 请传参数:USER&lt;br /&gt;分账接收方-承担 请传参数:SHARE_MERCHANT&lt;br /&gt;平台商-承担 请传参数:PLATFORM_MERCHANT&lt;br /&gt;连锁总店-承担 请传参数：HEAD_CHAIN&lt;br /&gt;连锁分店-承担 请传参数：BRANCH_CHAIN&lt;br /&gt;服务商-承担 请传参数:SAAS_SERVICE_PROVIDER&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


