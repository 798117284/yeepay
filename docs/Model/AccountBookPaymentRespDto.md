# AccountBookPaymentRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 响应编码&lt;br&gt;UA00000成功，需要结合orderStatus状态进行处理&lt;br&gt;当orderStatus 为ACCEPT时需要延迟10秒后调用查询接口确认订单是否成功 | [optional] 
**message** | **string** | 响应描述信息 | [optional] 
**uniqueOrderNo** | **string** | 易宝唯一订单号 | [optional] 
**orderId** | **string** | 商户请求号 | [optional] 
**orderStatus** | **string** | 可选项如下:&lt;br&gt;ACCEPT:已受理（易宝正在处理中，最终结果请以支付结果回调为准）&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


