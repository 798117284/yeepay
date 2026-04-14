# BatchRemitQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** |  | [optional] 
**returnMsg** | **string** |  | [optional] 
**batchNo** | **string** | 批次号，同入参 | [optional] 
**batchStatus** | **string** | 批次状态&lt;br&gt;可选项如下:&lt;br&gt;INIT:处理中&lt;br&gt;ACCEPT:已受理 | [optional] 
**remitOrderQueryDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryDTO[]**](RemitOrderQueryDTO.md) | 受理的批次明细列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


