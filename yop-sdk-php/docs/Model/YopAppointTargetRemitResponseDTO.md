# YopAppointTargetRemitResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;与返回码对应的说明信息&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝唯一单号&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: REQUEST_RECEIVE:请求已接收（易宝正在处理中，收到最终结果前请勿重复下单） REQUEST_ACCEPT:请求已受理（易宝正在处理中，收到最终结果前请勿重复下单） REMITING:银行处理中（银行正在处理中，收到最终结果前请勿重复下单） FAIL:失败 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


