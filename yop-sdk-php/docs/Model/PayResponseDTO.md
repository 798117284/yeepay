# PayResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码（必返回）&lt;br&gt;详见业务错误码 | [optional] 
**message** | **string** | 返回信息（必返回） | [optional] 
**merchantNo** | **string** | 收单商户编号 | [optional] 
**orderId** | **string** | 商户请求号 | [optional] 
**uniqueOrderNo** | **string** | 易宝订单号（支付成功必返回） | [optional] 
**payerInfo** | [**\Yeepay\Yop\Sdk\Service\Cnppay\Model\PayerInfoDTO**](PayerInfoDTO.md) |  | [optional] 
**status** | **string** | 可选项如下:&lt;br&gt;PROCESSING:处理中&lt;br&gt;WAIT_CONFIRM:待确认&lt;br&gt;FAIL:失败&lt;br&gt;SUCCESS:成功 | [optional] 
**paySuccessDate** | **string** | 支付成功时间（支付成功必返回） | [optional] 
**bankPaySuccessDate** | **string** | 渠道支付完成时间 | [optional] 
**orderAmount** | **float** | 订单金额 | [optional] 
**realPayAmount** | **float** | 实付金额 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


