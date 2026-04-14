# YopSupplyCardInfoRefundResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**yopMerchantNo** | **string** | &lt;p&gt;yop请求商编&lt;/p&gt; | [optional] 
**refundRequestId** | **string** | &lt;p&gt;商户退款请求号&lt;/p&gt; | [optional] 
**uniqueRefundNo** | **string** | &lt;p&gt;商户退款请求对应在易宝的退款单号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;PROCESSING:退款处理中&lt;br /&gt;SUCCESS:退款成功&lt;br /&gt;FAILED:退款失败&lt;br /&gt;CANCEL:退款关闭,商户通知易宝结束该笔退款后返回该状态&lt;br /&gt;SUSPEND:退款中断,如需继续退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;进行打款退款;如想结束退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__end\&quot;&gt;结束退款&lt;/a&gt;来关闭退款订单&lt;br /&gt;说明:调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;前,请联系易宝提前开通相应的退款服务。&lt;/p&gt; | [optional] 
**refundAmount** | **string** | &lt;p&gt;退款金额&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


