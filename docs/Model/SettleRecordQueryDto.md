# SettleRecordQueryDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summaryNo** | **string** |  | [optional] 
**settleAmount** | **float** |  | [optional] 
**status** | **string** | &lt;div&gt; &lt;pre&gt;SUCCESS:结算成功&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;BEFORE_REMIT:待出款&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;SETTLE_FAIL:结算异常&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMITTING:银行处理中&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**statusDesc** | **string** |  | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**settleType** | **string** |  | [optional] 
**realAmount** | **float** |  | [optional] 
**realFee** | **float** |  | [optional] 
**settleDateCfg** | **string** |  | [optional] 
**summaryOrderAmount** | **float** |  | [optional] 
**summaryOrderFee** | **float** |  | [optional] 
**settleRecordDetailsDtos** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordDetailsDto[]**](SettleRecordDetailsDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


