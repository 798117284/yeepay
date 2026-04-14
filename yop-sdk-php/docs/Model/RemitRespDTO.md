# RemitRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝付款订单号&lt;br /&gt;易宝支付系统生成的付款订单号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;REQUEST_RECEIVE:请求已接收&lt;br /&gt;REQUEST_ACCEPT:请求已受理&lt;br /&gt;SUCCESS:成功&lt;br /&gt;FAIL:失败&lt;br /&gt;CANCELED:撤销&lt;br /&gt;REMITING:银行处理中&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


