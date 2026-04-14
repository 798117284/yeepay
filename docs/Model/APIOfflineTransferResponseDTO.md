# APIOfflineTransferResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | [optional] 
**msg** | **string** |  | [optional] 
**payStatus** | **string** | 支付状态可选项如下:&lt;br&gt;WAIT_CHECK:等待付款方转账&lt;br&gt;FAIL:支付失败 | [optional] 
**remitRemarkCode** | **string** | 附言&lt;br&gt;校验模式为固定账户号+动态附言模式（REMARKCODE）时，该参数内容为10位小写英文字母+数字的附言码。&lt;br&gt;校验模式为动态账户号模式（ACCOUNTNO）时，该参数为空。 | [optional] 
**payerAccountName** | **string** |  | [optional] 
**receiveName** | **string** |  | [optional] 
**receiveAccountNo** | **string** |  | [optional] 
**accountName** | **string** |  | [optional] 
**areaInfo** | **string** |  | [optional] 
**amount** | **float** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**payerAccountNo** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


