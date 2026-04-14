# AutoPaymentRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 响应编码UA00000成功&lt;br&gt;需要结合orderStatus状态进行处理当orderStatus 为ACCEPT时需要延迟10秒后调用查询接口确认订单是否成功 | [optional] 
**message** | **string** |  | [optional] 
**orderId** | **string** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**orderStatus** | **string** | 订单状态-成功时返回可选项如下:&lt;br&gt;ACCEPT:已受理&lt;br&gt;PROCESSING:处理中&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


