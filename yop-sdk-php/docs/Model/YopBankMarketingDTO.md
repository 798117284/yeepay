# YopBankMarketingDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankMarketingNo** | **string** |  | [optional] 
**bankMarketingName** | **string** |  | [optional] 
**startDate** | **string** |  | [optional] 
**endDate** | **string** |  | [optional] 
**activityStatus** | **string** | &lt;p&gt;ACTIVE：生效&lt;br /&gt;EXPIRED：失效&lt;br /&gt;NOT_EFFECTIVE：未生效&lt;/p&gt; | [optional] 
**bankName** | **string** |  | [optional] 
**sponsor** | **string** |  | [optional] 
**marketingIntroduction** | **string** |  | [optional] 
**applicationZoneList** | [**\Yeepay\Yop\Sdk\Service\Promtion\Model\AreaInfoDTO[]**](AreaInfoDTO.md) | &lt;p&gt;银行活动的适用范围，&lt;/p&gt; &lt;p&gt;全国默认为如下格式:[{\&quot;code\&quot;:\&quot;ALL\&quot;,\&quot;name\&quot;:\&quot;全国\&quot;,\&quot;subAreaInfoList\&quot;:[],\&quot;excludeAreaInfoList\&quot;:[]}]&lt;/p&gt; &lt;p&gt;其他为（例）：[{\&quot;code\&quot;:\&quot;500000\&quot;,\&quot;name\&quot;:\&quot;重庆\&quot;,\&quot;subAreaInfoList\&quot;:[],\&quot;excludeAreaInfoList\&quot;:[]}]&lt;/p&gt; &lt;p&gt;&lt;/p&gt; | [optional] 
**supportMultipleCard** | **string** | &lt;p&gt;即是否支持分账业务，部分银行活动不支持分账业务，仅支持一个商编一张卡报名一次&lt;/p&gt; 可选项如下: REPEATABLE:多次报名 ONLY_ONCE:最多一次报名 | [optional] 
**subAuthenticationMode** | **string** | 可选项如下: SIGNATURE:需要电签 NONE:无 | [optional] 
**accountType** | **string** | 可选项如下: PUBLIC:对公 PRIVATE:对私 | [optional] 
**subsidyMode** | **string** | &lt;p&gt;补贴方式为实时补贴时，补贴类型均为手续费补贴。补贴方式为后返时，补贴类型可为手续费补贴/现金补贴&lt;/p&gt; 可选项如下: FEE:手续费补贴 REBATE:现金 | [optional] 
**subsidyMethod** | **string** | &lt;p&gt;易宝支付支持实时补贴以及按周期后返&lt;/p&gt; 可选项如下: REAL_TIME:实时 UN_REAL_TIME:后返 | [optional] 
**paymentPeriodType** | **string** | 可选项如下: MONTH:月度 QUARTER:季度 | [optional] 
**belongType** | **string** | &lt;p&gt;银行活动补贴对象，如补贴对象为服务商，则补贴归属至服务商。如补贴对象为商户，则补贴归属至商户&lt;/p&gt; 可选项如下: SASS_MERCHANT:服务商 MERCHANT:商户 | [optional] 
**bankMarketingEventPolicyDTO** | [**\Yeepay\Yop\Sdk\Service\Promtion\Model\YopBankMarketingEventPolicyDTO**](YopBankMarketingEventPolicyDTO.md) |  | [optional] 
**bankMarketingSubsidyRuleInfoDTO** | [**\Yeepay\Yop\Sdk\Service\Promtion\Model\YopBankMarketingSubsidyRuleInfoDTO**](YopBankMarketingSubsidyRuleInfoDTO.md) |  | [optional] 
**subsidyRegulationContent** | **string** | &lt;p&gt;富文本返回，展示银行活动的补贴细则&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


