# YopQueryDivideBackResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码,OPR00000 成功&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息描述&lt;/p&gt; | [optional] 
**bizSystemNo** | **string** | &lt;p&gt;业务方标识&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**divideRequestId** | **string** | &lt;p&gt;商户分账请求号&lt;/p&gt; | [optional] 
**divideBackRequestId** | **string** | &lt;p&gt;商户分账资金归还请求号&lt;/p&gt; | [optional] 
**uniqueDivideBackNo** | **string** | &lt;p&gt;易宝分账资金归还订单号&lt;/p&gt; | [optional] 
**divideBackDetail** | **string** | &lt;p&gt;分账资金归还详情&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING 处理中&lt;br /&gt;SUCCESS 归还成功&lt;br /&gt;FAIL 归还失败&lt;/p&gt; | [optional] 
**createDate** | **string** | &lt;p&gt;分账申请时间&lt;/p&gt; | [optional] 
**errorMessage** | **string** | &lt;p&gt;分账退回失败原因&lt;/p&gt; | [optional] 
**divideBackAccountDetail** | **string** | &lt;p&gt;分账退回资金来源详情 JSON字符传 debitAmount：扣账金额 accountType：扣账账户类型 ledgerNo：分账接收方 扣账资金来源枚举值： FUND_ACCOUNT：资金账户 &amp;nbsp;SETTLE_ACCOUNT：待结算账户&lt;/p&gt; | [optional] 
**divideBackSuccessDate** | **string** | &lt;p&gt;分账完成时间&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


