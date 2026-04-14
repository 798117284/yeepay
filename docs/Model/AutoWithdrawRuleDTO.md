# AutoWithdrawRuleDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ruleId** | **string** | &lt;p&gt;规则id&lt;/p&gt; | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;规则创建时间&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;交易主体商编&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;规则状态，可选项如下:&lt;br /&gt;EFFECTIVE: 生效&lt;br /&gt;CANCEL:&amp;nbsp;失效&lt;/p&gt; | [optional] 
**receiveType** | **string** | &lt;p&gt;提现到账类型，可选项如下:&lt;br /&gt;REAL_TIME: 实时&lt;br /&gt;TWO_HOUR: 两小时&lt;br /&gt;NEXT_DAY: 次日&lt;/p&gt; | [optional] 
**bindId** | **string** | &lt;p&gt;提现卡id&lt;/p&gt; | [optional] 
**bankAccountNo** | **string** | &lt;p&gt;银行卡号&lt;/p&gt; | [optional] 
**triggerTime** | **string** | &lt;p&gt;触发时间，格式： HH:mm&lt;/p&gt; | [optional] 
**remainAmount** | **float** | 保留金额，提现发起后的账户余额 | [optional] 
**remark** | **string** | &lt;p&gt;银行附言 发送给银行的银行附言&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


