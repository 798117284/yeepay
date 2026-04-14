# AccountBookCreateResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;该参数代表本次请求的处理结果&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;信息描述，对应returnCode的中文信息&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;申请记账簿的商户编号&lt;/p&gt; | [optional] 
**merchantAccountBookNo** | **string** | &lt;p&gt;商户侧记账簿编号&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;易宝记账薄编号（用于汇款时填写的收款账号）&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;SUCCESS:成功&lt;br /&gt;PROCESSING:处理中,需要原参数重试&lt;br /&gt;FAIL:处理失败&lt;/p&gt; | [optional] 
**createTime** | **string** | &lt;p&gt;记账簿创建时间&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


