# YopActivityBudgetControlDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** |  | [optional] 
**merchantName** | **string** |  | [optional] 
**subsidyMethod** | **string** | 可选项如下: REAL_TIME:实时 UN_REAL_TIME:后返 | [optional] 
**subsidyStatus** | **string** | 可选项如下: NOT_EFFECTIVE:未生效 EFFECTIVE:生效中 EXPIRED:已失效 INTERRUPTION:中断 | [optional] 
**bankMarketingNo** | **string** |  | [optional] 
**bankMarketingName** | **string** |  | [optional] 
**activityStartTime** | **string** | &lt;p&gt;当补贴方式为后返时，该字段为空&lt;/p&gt; | [optional] 
**activityEndTime** | **string** | &lt;p&gt;当补贴方式为后返时，该字段为空&lt;/p&gt; | [optional] 
**budgetAmount** | **string** | &lt;p&gt;单位元&lt;/p&gt; | [optional] 
**balanceAmount** | **string** | &lt;p&gt;单位元&lt;/p&gt; | [optional] 
**verifyAmount** | **string** | &lt;p&gt;单位元&lt;/p&gt; | [optional] 
**refundAmount** | **string** | &lt;p&gt;单位元&lt;/p&gt; | [optional] 
**applyNo** | **string** |  | [optional] 
**budgetNo** | **string** |  | [optional] 
**budgetModel** | **string** | &lt;pre&gt;SHARE:共享&lt;br /&gt;UN_SHARE:非共享&lt;/pre&gt; | [optional] 
**budgetCycle** | **string** |  | [optional] 
**reason** | **string** |  | [optional] 
**shareBudgetDetailList** | [**\Yeepay\Yop\Sdk\Service\Promtion\Model\ShareBudgetDetailDTO[]**](ShareBudgetDetailDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


