# BatchRemitRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** |  | [optional] 
**returnMsg** | **string** |  | [optional] 
**batchNo** | **string** |  | [optional] 
**batchErrorDetailList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitDetailRespDTO[]**](RemitDetailRespDTO.md) |  | [optional] 
**batchAcceptDetailList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitDetailRespDTO[]**](RemitDetailRespDTO.md) | 受理明细:&lt;br&gt;只有在此list中存在的订单才代表已经进行付款处理，若该list为空代表此付款请求均未受理。商户可调用查询接口确认订单状态和付款结果。 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


