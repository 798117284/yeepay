# YopBalanceDivideBackRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**divideRequestId** | **string** | &lt;p&gt;分账请求号&lt;/p&gt; | 
**divideBackRequestId** | **string** | &lt;p&gt;分账退回请求号&lt;/p&gt; | 
**batchNotifyUrl** | **string** | &lt;p&gt;通知地址，同入参&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;分账退回商编，原分账商编&lt;/p&gt; | 
**bankAccountNo** | **string** | &lt;p&gt;原来的分账接收方的钱分账退回到此账户，&lt;br /&gt;同原分账的出资方银行账户号&lt;/p&gt; | [optional] 
**accountType** | **string** | &lt;p&gt;账户类型，同分账入参账户类型&lt;/p&gt; | [optional] 
**divideBackDetail** | **string** | &lt;p&gt;分账退回明细，JSON数组类型。&lt;br /&gt;1.detailNo:原分账明细号&lt;/p&gt; &lt;p&gt;2.amount：分账退回金额&lt;br /&gt;3.divideBackReason：分账退回原因&lt;br /&gt;4.detailBackNo：分账退回明细号&lt;br /&gt;5.status：分账退回状态：&lt;/p&gt; &lt;p&gt;PROCESSING:处理中、&lt;/p&gt; &lt;p&gt;SUCCESS：分账退回成功、&lt;/p&gt; &lt;p&gt;FAIL：分账退回失败&lt;br /&gt;6.returnBankAccountBookNo：分账退回发起方银行账户号，原来的分账接收方银行账户号&lt;br /&gt;7.receiverNo:原来的分账接收方商编&lt;br /&gt;8.finishTime:完成时间，status&#x3D;成功、失败是有值，处理中时为空&lt;br /&gt;9.returnFeeAmount:退回手续费金额&lt;br /&gt;10.returnDebitAmount：原分账接受方分账退回时扣账金额&lt;br /&gt;11.returnReceiveAmount：原分账发起方分账退回时到账金额&lt;br /&gt;12.failReason：失败原因，status&#x3D;FAIL时有值&lt;br /&gt;13.receiverType:分账接收方类型,同分账明细入参：ledgerType&lt;br /&gt;14.accountType：分账退回扣账账户类型&lt;/p&gt; &lt;div&gt; &lt;pre&gt;YEEPAY_ACCOUNT:易宝账户&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;BANK_ACCOUNT:银行账户&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | 
**divideBackScope** | **string** | &lt;p&gt;分账退回范围&lt;/p&gt; | [optional] 
**fundProcessStrategy** | **string** | &lt;p&gt;资金处理策略&lt;/p&gt; &lt;div&gt; &lt;pre&gt;FULL_ORDER:整单处理，分给多人时要么全成功要么全失败&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;SINGLE:单笔处理,分给多人时可以部分成功，部分失败&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**status** | **string** | &lt;p&gt;状态&lt;br /&gt;枚举值：&lt;/p&gt; &lt;div&gt; &lt;pre&gt;PROCESSING：处理中&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;SUCCESS:成功&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;FAIL：失败&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


