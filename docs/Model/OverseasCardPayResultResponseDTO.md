# OverseasCardPayResultResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码（必返回） | [optional] 
**message** | **string** | 返回信息（必返回） | [optional] 
**merchantNo** | **string** |  | [optional] 
**orderId** | **string** |  | [optional] 
**uniqueOrderNo** | **string** | 易宝订单号（支付成功必返回） | [optional] 
**payerInfo** | [**\Yeepay\Yop\Sdk\Service\Cnppay\Model\PayerInfoDTO**](PayerInfoDTO.md) |  | [optional] 
**status** | **string** | PROCESSING—支付中&lt;br&gt;SUCCESS–交易成功&lt;br&gt;FAIL—支付失败&lt;br&gt;WAIT_CONFIRM—待风控验证 | [optional] 
**bankPaySuccessDate** | **string** |  | [optional] 
**riskValidateUrl** | **string** | 订单状态为待确认时需解析该字段 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


