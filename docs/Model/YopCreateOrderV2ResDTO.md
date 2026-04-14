# YopCreateOrderV2ResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码,OPR00000 成功&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**token** | **string** | &lt;p&gt;支付授权token，用于调用支付&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;订单金额&lt;/p&gt; | [optional] 
**subOrderInfoList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YopSubOrderDetailDTO[]**](YopSubOrderDetailDTO.md) | &lt;p&gt;子单域信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


