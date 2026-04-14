# AccountBookRefundRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码UA00000&amp;nbsp;成功&lt;br /&gt;示例值：UA00000&lt;/p&gt; | 
**returnMsg** | **string** |  | [optional] 
**refundStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;REFUNDPROCESS:退款处理中&lt;br /&gt;FAIL:退款失败&lt;/p&gt; | [optional] 
**refundAmount** | **float** | 退款金额。单位为元，精确到小数点后两位 | [optional] 
**merchantRefundRequestNo** | **string** | &lt;p&gt;商户退款请求号。可包含字母、数字、下划线；需保证在商户端不重复&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


