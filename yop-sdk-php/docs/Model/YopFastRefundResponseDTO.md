# YopFastRefundResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;OPR00000表示成功&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;信息描述，对应code的中文信息&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;收款商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;收款交易对应的商户收款请求号&lt;/p&gt; | [optional] 
**yopMerchantNo** | **string** | &lt;p&gt;技术发起方商编&lt;/p&gt; | [optional] 
**refundRequestId** | **string** | &lt;p&gt;商户退款请求号&lt;/p&gt; | [optional] 
**uniqueRefundNo** | **string** | &lt;p&gt;商户退款请求时对应在易宝的退款单号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;PROCESSING:处理中&lt;br /&gt;SUCCESS:退款成功&lt;br /&gt;FAILED:退款失败&lt;br /&gt;CANCEL:退款关闭,商户线下通知易宝结束该笔退款后返回该状态&lt;/p&gt; | [optional] 
**refundAmount** | **string** | &lt;p&gt;退款申请金额&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


