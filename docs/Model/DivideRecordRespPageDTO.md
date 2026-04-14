# DivideRecordRespPageDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码 OPR00000表示成功&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息 结果信息描述&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**divideRequestId** | **string** | &lt;p&gt;商户分账请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING:处理中（正常情况下不会出现，如长期状态未闭环，可联系易宝人工介入处理）&lt;br /&gt;SUCCESS:成功&lt;br /&gt;FAIL:失败&lt;/p&gt; | [optional] 
**divideDetail** | **string** | &lt;p&gt;JSON字符串；&lt;br /&gt;divideDetailNo:易宝分账明细单号&lt;br /&gt;ledgerNo&amp;nbsp; 分账接收方编号&lt;br /&gt;amount&amp;nbsp;分账金额&lt;br /&gt;divideDetailDesc 分账说明&lt;/p&gt; &lt;div&gt; &lt;pre&gt;ledgerType:分账类型&lt;br /&gt;invoice: 是否开票  默认 false&lt;br /&gt;分账类型枚举值：&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;MERCHANT2MERCHANT：商户分账给商户&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;MERCHANT2MEMBER：商户分账会员&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;MERCHANT2RECEIVER：商户分账至入账方&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**createDate** | **string** | &lt;p&gt;分账申请时间&lt;/p&gt; | [optional] 
**divideSuccessDate** | **string** | &lt;p&gt;分账完成时间&lt;/p&gt; | [optional] 
**divideType** | **string** | &lt;p&gt;DIVIDE：分账 BACK：分账退回&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


