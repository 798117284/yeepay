# YopQueryCombineRefundResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subRefundOrderDTOs** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\QueryRefundResponseDTO[]**](QueryRefundResponseDTO.md) | &lt;p&gt;合单退款子单列表&lt;/p&gt; | [optional] 
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | 
**orderId** | **string** | &lt;p&gt;商户原交易订单号&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;退款失败原因&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息描述&lt;/p&gt; | [optional] 
**refundRequestId** | **string** | &lt;p&gt;商户退款请求号&lt;/p&gt; | [optional] 
**parentUniqueRefundNo** | **string** | &lt;p&gt;易宝合单批量退款流水号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING: 处理中&lt;/p&gt; &lt;p&gt;SUSPEND: 退款挂起状态，可联系易宝运营进行打款退款&lt;/p&gt; &lt;p&gt;FAILED: 退款失败&lt;/p&gt; &lt;p&gt;CANCEL: 退款撤销&lt;/p&gt; &lt;p&gt;SUCCESS: 退款成功&lt;/p&gt; | [optional] 
**creditOrderId** | **string** | &lt;p&gt;信用分单号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


