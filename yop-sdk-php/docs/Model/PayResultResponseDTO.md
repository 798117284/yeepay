# PayResultResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码（必返回） | [optional] 
**message** | **string** | 返回信息(必返回) | [optional] 
**merchantNo** | **string** |  | [optional] 
**orderId** | **string** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**requestId** | **string** |  | [optional] 
**payerInfo** | [**\Yeepay\Yop\Sdk\Service\Cnppay\Model\PayerInfoDTO**](PayerInfoDTO.md) |  | [optional] 
**status** | **string** | SUCCESS—交易成功&lt;br&gt;FAIL—支付失败&lt;br&gt;TIME_OUT—订单超时过期 | [optional] 
**bankPaySuccessDate** | **string** |  | [optional] 
**tradeSerialNo** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


