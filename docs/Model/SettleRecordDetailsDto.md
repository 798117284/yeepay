# SettleRecordDetailsDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountNo** | **string** |  | [optional] 
**realAmount** | **float** |  | [optional] 
**status** | **string** | &lt;div&gt; &lt;pre&gt;INIT:待处理&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMIT_PROCESS:银行处理中&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;REMIT_FAIL:出款失败&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;ACCOUNTING_FAIL:出款失败&lt;/pre&gt; &lt;/div&gt; &lt;div&gt; &lt;pre&gt;REMIT_SUCCESS:已到账&lt;/pre&gt; &lt;/div&gt; &lt;div&gt; &lt;pre&gt;SUCCESS:已到账&lt;/pre&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**statusDesc** | **string** |  | [optional] 
**errorCode** | **string** |  | [optional] 
**errorMessage** | **string** |  | [optional] 
**correct** | **bool** |  | [optional] 
**channelRequestNo** | **string** |  | [optional] 
**accountType** | **string** | &lt;p&gt;账户类型&lt;/p&gt; &lt;p&gt;DEBIT_CARD:借记卡&lt;br /&gt;PUBLIC_CARD:对公账户&lt;br /&gt;PASSBOOK:存折&lt;br /&gt;UNIT_SETTLE_CARD:单位结算卡&lt;br /&gt;BANKACCOUNT:银行账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;ACCOUNT:支付账户&lt;/p&gt; | [optional] 
**accountTypeDesc** | **string** |  | [optional] 
**accountNameMast** | **string** |  | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**bankCode** | **string** | &lt;p&gt;银行编码&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;银行名称&lt;/p&gt; | [optional] 
**bankCardMast** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


