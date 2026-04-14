# FundTransferOrderResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**message** | **string** |  | 
**parentMerchantNo** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**requestNo** | **string** |  | [optional] 
**amount** | **float** |  | [optional] 
**finishTime** | **string** |  | 
**uniqueOrderNo** | **string** |  | [optional] 
**status** | **string** | 可选项如下: REQUEST_RECEIVED:已接收请求 PROCESSING:划款中 SUCCESS:划拨成功 FAIL:失败 | [optional] 
**reverseTime** | **string** | &lt;p&gt;当冲正标记为true时，存在数据&lt;/p&gt; | [optional] 
**requestTime** | **string** |  | [optional] 
**reversed** | **bool** | &lt;p&gt;true/false&lt;/p&gt; | [optional] 
**remark** | **string** |  | [optional] 
**receiveInfo** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferReceiveInfoDTO**](FundTransferReceiveInfoDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


