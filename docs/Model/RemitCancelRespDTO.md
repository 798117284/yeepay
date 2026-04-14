# RemitCancelRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;撤销结果&lt;br /&gt;可选项如下:&lt;br /&gt;SUCCESS:成功（该笔付款已经撤销）&lt;br /&gt;FAIL:失败（该笔订单会继续进行付款，请商户关注付款资金到账情况）&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


