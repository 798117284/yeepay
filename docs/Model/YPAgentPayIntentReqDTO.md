# YPAgentPayIntentReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agentId** | **string** | &lt;p&gt;商户的智能体机构代码，需前置由银联报备&lt;/p&gt; | 
**intentOrderInfo** | [**\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPIntentOrderInfoDTO[]**](YPIntentOrderInfoDTO.md) | &lt;p&gt;转为json字符串以后的字符总长度不可大于4096&lt;/p&gt; | 
**intentExpireTm** | **string** | &lt;p&gt;需大于等于当前时间。格式 yyyy-MM-dd HH:mm:ss，北京时间&lt;/p&gt; | [optional] 
**intentScene** | **string** | &lt;p&gt;01-人在场场景&lt;/p&gt; | 
**intentSummary** | **string** | &lt;p&gt;由智能体总结的非结构化的用户意图文字描述，包含商品信息等常规描述，客户透传&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;标准商户收付款方案中与收款商户编号一致；&lt;/p&gt; &lt;p&gt;平台商户收付款方案中为平台商商户编号；&lt;/p&gt; &lt;p&gt;服务商方案中标准商户收款时为标准商户商编，平台商收款或平台商入驻商户收款时为平台商商编。&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户系统内部生成的请求号，同一商户下需唯一&lt;/p&gt; | 
**agentUsrId** | **string** | &lt;p&gt;智能体识别的用户标识&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;收单主体商编，平台商或服务商下的子商户、普通特约商户&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


