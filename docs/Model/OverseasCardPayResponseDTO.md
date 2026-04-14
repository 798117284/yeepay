# OverseasCardPayResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码（必返回）&lt;br&gt;详见业务错误码 | [optional] 
**message** | **string** | 返回信息（必返回） | [optional] 
**merchantNo** | **string** |  | [optional] 
**orderId** | **string** |  | [optional] 
**requestId** | **string** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**status** | **string** | FAIL:支付失败&lt;br&gt;WAIT_CONFIRM:待确认&lt;br&gt;PROCESSING:处理中&lt;br&gt;SUCCESS:交易成功（已经支付成功重复请求的时候，可能出现） | [optional] 
**riskValidateUrl** | **string** | 当订单状态为WAIT_CONFIRM时，需解析此参数 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


