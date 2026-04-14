# FundRemitResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**message** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**requestNo** | **string** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**receiverCardInfo** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\ReceiverCardInfoDTO**](ReceiverCardInfoDTO.md) |  | [optional] 
**status** | **string** | 可选项如下: REQUEST_RECEIVE:请求已接收 REMITING:银行处理中 SUCCESS:成功 FAIL:失败 TIME_OUT:超时 | [optional] 
**orderAmount** | **float** |  | [optional] 
**clientIp** | **string** |  | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**requestTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reversed** | **bool** | &lt;p&gt;true/false&lt;/p&gt; | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**comments** | **string** |  | [optional] 
**receiptComments** | **string** |  | [optional] 
**remark** | **string** |  | [optional] 
**feeMerchant** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FeeMerchantDTO**](FeeMerchantDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


