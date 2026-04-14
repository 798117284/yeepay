# SettleRecordPageQueryRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** |  | 
**receiverMerchantNo** | **string** | &lt;p&gt;用于查询入账方的结算情况，如果merchantno传入了入账方id，需要传入入账方的归属商编&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;SUCCESS:结算成功&lt;/p&gt; &lt;p&gt;PROCESS:处理中&lt;/p&gt; &lt;p&gt;SETTLE_FAIL:结算异常&lt;/p&gt; | [optional] 
**settleRequestBeginTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;查询时间范围最大不超过31天&lt;/p&gt; | 
**settleRequestEndTime** | [**\DateTime**](\DateTime.md) |  | 
**pageSize** | **int** | &lt;p&gt;分页条数最大不超过50条&lt;/p&gt; | 
**pageNum** | **int** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


