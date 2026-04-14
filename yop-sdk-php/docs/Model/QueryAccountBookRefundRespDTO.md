# QueryAccountBookRefundRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 详情查看下面的错误码信息 | [optional] 
**returnMsg** | **string** | 返回信息，订单失败的时候，内容为失败原因 | [optional] 
**refundStatus** | **string** | 可选项如下:&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败&lt;br&gt;CANCELED:撤销&lt;br&gt;REFUNDPROCESS:退款处理中 | [optional] 
**refundAmount** | **float** | 单位为元，精确到小数点后两位 | [optional] 
**merchantRefundRequestNo** | **string** | 商户退款请求号。可包含字母、数字、下划线；需保证在商户端不重复 | [optional] 
**merchantOriginalRequestNo** | **string** |  | [optional] 
**refundOrderNo** | **string** | 易宝退款单号，里面可以辨别到具体的时间，在易宝侧是唯一的 | [optional] 
**bankPostscrip** | **string** | 银行附言展示在收款银行系统中的附言，由数字、字母、汉字组成（最终附言内容以银行实际账单为准）示例值：xx平台退款 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


