# AccountPaymentRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;span style&#x3D;\&quot;caret-color: #000000; text-size-adjust: auto;\&quot;&gt;响应编码&lt;/span&gt;&lt;br&gt;&lt;span style&#x3D;\&quot;caret-color: #000000; text-size-adjust: auto;\&quot;&gt;UA00000成功，需要结合orderStatus状态进行处理&lt;/span&gt;&lt;br&gt;&lt;span style&#x3D;\&quot;caret-color: #000000; text-size-adjust: auto;\&quot;&gt;当orderStatus 为ACCEPT时需要延迟10秒后调用查询接口确认订单是否成功&lt;/span&gt; | [optional] 
**message** | **string** | &lt;span style&#x3D;\&quot;caret-color: #000000; text-size-adjust: auto;\&quot;&gt;响应描述信息&lt;/span&gt; | [optional] 
**uniqueOrderNo** | **string** | 易宝唯一订单号 | [optional] 
**orderId** | **string** | 商户请求号 | [optional] 
**orderStatus** | **string** | 可选项如下:&lt;br&gt;ACCEPT:已受理（易宝正在处理中，最终结果请以支付结果回调为准）&lt;br&gt;SUCCESS:成功 （此状态仅供参考，最终结果请以支付结果回调为准）&lt;br&gt;FAIL:失败,失败（此状态仅供参考，最终结果请以支付结果回调为准） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


