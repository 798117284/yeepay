# BankAccountPaymentRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;响应编码.&lt;br /&gt;UA00000 成功&lt;br /&gt;UA00001 系统异常&lt;br /&gt;其他错误码参考错误码列表&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回描述信息,可参考此信息判断请求失败原因.&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝唯一订单号&lt;br /&gt;成功时返回&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户订单号,同入参&lt;br /&gt;成功时返回&lt;/p&gt; | [optional] 
**orderStatus** | **string** | &lt;p&gt;订单状态-成功时返回可选项如下:&lt;br /&gt;ACCEPT:已受理&lt;br /&gt;PROCESSING:处理中&lt;br /&gt;SUCCESS:成功(本接口未异步接口,同步不会返回此状态)&lt;br /&gt;FAIL:失败&lt;/p&gt; | [optional] 
**paymentUniqueOrderNo** | **string** | &lt;p&gt;支付订单号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


