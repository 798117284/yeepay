# YopBalanceBatchDivideRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;同入参parentMerchantNo&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;同入参&lt;/p&gt; | 
**divideRequestId** | **string** | &lt;p&gt;同入参&lt;/p&gt; | 
**divideDetail** | **string** | &lt;p&gt;JSON集合格式&lt;/p&gt; &lt;p&gt;1.receiverNo：分账接收方，同申请分账入参ledgerNo&lt;br /&gt;2.receiverType：分账接收方类型，同申请分账入参ledgerType&lt;br /&gt;3.divideAmount：分账金额&lt;br /&gt;4.remark：附言，同申请分账入参remark&lt;br /&gt;5.feeChargeSide：手续费承担方，同申请分账入参feeChargeSide&lt;br /&gt;6.divideReason：分账说明，同申请分账入参divideReason&lt;br /&gt;7.status：分账状态：枚举值:&lt;br /&gt;&amp;nbsp; &amp;nbsp; PROCESSING：处理中,收到最终结果前请勿换分账请求号请求&lt;br /&gt;&amp;nbsp; &amp;nbsp; SUCCESS：分账成功&lt;br /&gt;&amp;nbsp; &amp;nbsp; FAIL：分账失败&lt;br /&gt;8.finishTime：完成时间&lt;br /&gt;9.receiveAmount：分账接收方入账金额(分账成功时返)&lt;br /&gt;10.feeAmount：手续费金额(分账成功且收费时返)&lt;br /&gt;11.debitAmount：分账发起方扣账金额(分账成功且收费时返)&lt;br /&gt;12.failReason:分账失败原因，分账失败时会返回&lt;br /&gt;13.detailNo:易宝分账明细号,明细唯一&lt;/p&gt; | [optional] 
**accountType** | **string** | &lt;p&gt;枚举值：&lt;br /&gt;YEEPAY_ACCOUNT：易宝账户BANK_ACCOUNT:银行账户DIVIDE_FUND_ACCOUNT:分账资金账户&lt;/p&gt; &lt;p&gt;同申请分账入参：accountType&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;批次状态&lt;br /&gt;枚举值：PROCESSING:处理中&lt;/p&gt; &lt;p&gt;SUCCESS:成功&lt;/p&gt; &lt;p&gt;FAIL:失败&lt;/p&gt; &lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


