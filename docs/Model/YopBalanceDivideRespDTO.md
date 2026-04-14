# YopBalanceDivideRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;同入参parentMerchantNo&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;同入参&lt;/p&gt; | 
**divideRequestId** | **string** | &lt;p&gt;同入参&lt;/p&gt; | 
**divideDetail** | **string** | &lt;p&gt;JSON集合格式&lt;/p&gt; &lt;p&gt;1.receiverNo：分账接收方，同申请分账入参ledgerNo&lt;br /&gt;2.receiverType：分账接收方类型，同申请分账入参ledgerType&lt;br /&gt;3.divideAmount：分账金额&lt;br /&gt;4.remark：附言，同申请分账入参remark&lt;br /&gt;5.feeChargeSide：手续费承担方，同申请分账入参feeChargeSide&lt;br /&gt;6.divideReason：分账说明，同申请分账入参divideReason&lt;br /&gt;7.status：分账状态：枚举值:&lt;br /&gt;&amp;nbsp; &amp;nbsp; PROCESSING：处理中,收到最终结果前请勿换分账请求号请求&lt;br /&gt;&amp;nbsp; &amp;nbsp; SUCCESS：分账成功&lt;br /&gt;&amp;nbsp; &amp;nbsp; FAIL：分账失败&lt;br /&gt;8.receiverAccountName：分账接收方卡户名，有掩码，例如：李明-&amp;gt;*明&lt;br /&gt;9.receiverAccountNo：分账接收方卡号，有掩码， 掩码规则：展示卡号前六位、后四位，中间使用****代替&lt;br /&gt;10.finishTime：完成时间&lt;br /&gt;11.receiveAmount：分账接收方入账金额(分账成功时返)&lt;br /&gt;12.feeAmount：手续费金额(分账成功且收费时返)&lt;br /&gt;13.debitAmount：分账发起方扣账金额(分账成功且收费时返)&lt;br /&gt;14.failReason:分账失败原因，分账失败时会返回&lt;br /&gt;15.detailNo:易宝分账明细号,明细唯一&lt;/p&gt; | [optional] 
**accountType** | **string** | &lt;p&gt;枚举值：&lt;br /&gt;YEEPAY_ACCOUNT：&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;易宝-资金账户&lt;/span&gt;&lt;/p&gt; &lt;p&gt;BANK_ACCOUNT:银行账户&lt;/p&gt; &lt;div&gt; &lt;pre&gt;DIVIDE_FUND_ACCOUNT:&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;易宝-分账资金账户&lt;/span&gt;&lt;/pre&gt; &lt;/div&gt; &lt;p&gt;&lt;br /&gt;同申请分账入参：accountType&lt;/p&gt; | [optional] 
**bankAccountBookNo** | **string** | &lt;p&gt;分账方账户类型为银行账户时有值&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 
**fundType** | **string** | &lt;p&gt;中信银行时资金类型有值，英文枚举值:&lt;br /&gt;&lt;br /&gt;营收结算款: REVENUE_SETTLEMENT&lt;/p&gt; &lt;p&gt;采购款: PURCHASE_PAYMENT&lt;/p&gt; &lt;p&gt;分润: PROFIT_SHARING&lt;/p&gt; &lt;p&gt;服务费: SERVICE_FEE&lt;/p&gt; &lt;p&gt;营销补贴: MARKETING_SUBSIDY&lt;/p&gt; &lt;p&gt;奖励款: REWARD_PAYMENT&lt;/p&gt; &lt;p&gt;罚款: FINE&lt;/p&gt; &lt;p&gt;担保登记簿: GUARANTEE_REGISTER&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;批次状态&lt;br /&gt;枚举值：PROCESSING:处理中&lt;/p&gt; &lt;p&gt;SUCCESS:成功&lt;/p&gt; &lt;p&gt;FAIL:失败&lt;/p&gt; &lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


