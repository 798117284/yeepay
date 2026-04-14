# BankAccountBindCardApply

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankAccountName** | **string** | &lt;p&gt;银行开户名称&lt;/p&gt; | 
**branchBankCode** | **string** |  | [optional] 
**bankCode** | **string** | &lt;p&gt;总行编码&lt;/p&gt; | 
**bankCardNo** | **string** | &lt;p&gt;银行卡号&lt;/p&gt; | 
**bankCardType** | **string** | &lt;div&gt; &lt;pre&gt;PUBLIC_CARD:对公&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;PRIVATE_CARD:对私&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; | 
**bankAccountBookNo** | **string** | &lt;p&gt;银行记账本编号&lt;/p&gt; | [optional] 
**requestNo** | **string** |  | 
**message** | **string** |  | [optional] 
**businessOrderNo** | **string** |  | 
**createTime** | [**\DateTime**](\DateTime.md) |  | 
**lastModifyTime** | [**\DateTime**](\DateTime.md) |  | 
**businessType** | **string** | &lt;pre&gt;BANK_CLEAR_WITHDRAW:银行清分提现&lt;/pre&gt; | [optional] 
**merchantNo** | **string** |  | 
**status** | **string** | &lt;p&gt;绑卡状态&lt;br /&gt;INIT：初始化&lt;br /&gt;PROCESS：处理中&lt;br /&gt;SUCCESS：成功&lt;br /&gt;FAIL：失败&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | 
**authType** | **string** | &lt;p&gt;OPEN_ACCOUNT_SMS_AUTH:短信验证&lt;br /&gt;OPEN_ACCOUNT_REMIT_AUTH:打款验证&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


