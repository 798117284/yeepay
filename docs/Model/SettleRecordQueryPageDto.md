# SettleRecordQueryPageDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summaryNo** | **string** | 结算订单号 | [optional] 
**settleAmount** | **float** | 应结金额 | [optional] 
**status** | **string** | &lt;p&gt;SUCCESS:结算成功 PROCESS:处理中 SETTLE_FAIL:结算异常&lt;/p&gt; | [optional] 
**statusDesc** | **string** | 结算订单状态描述 | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) | 结算订单创建时间 | [optional] 
**settleType** | **string** | 结算产品 | [optional] 
**realAmount** | **float** | 结算到账金额 | [optional] 
**realFee** | **float** | 结算手续费 | [optional] 
**settleRecordDetailsDtos** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[]**](SettleRecordDetailsDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


