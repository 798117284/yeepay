# SelfSettleQueryResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;成功：000000&lt;br /&gt;其他错误码参加错误码描述&lt;/p&gt; | [optional] 
**message** | **string** |  | [optional] 
**parentMerchantNo** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**settlableAmount** | **float** | &lt;p&gt;商户可结算但未结算的金额&lt;/p&gt; | [optional] 
**unsettledAmount** | **float** | &lt;p&gt;未结算金额&#x3D;可结算但未结算的金额+不可结算金额（未到结算周期的交易汇总金额）&lt;/p&gt; | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleQueryDetailDto[]**](SelfSettleQueryDetailDto.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


