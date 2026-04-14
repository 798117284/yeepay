# YopQueryCombineOrderResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码,OPR00000 成功&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;交易发起方商编&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户合单收款请求号&lt;/p&gt; | [optional] 
**token** | **string** | &lt;p&gt;支付token&lt;/p&gt; | [optional] 
**subOrderInfoList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\SubOrderInfoDTO[]**](SubOrderInfoDTO.md) | &lt;p&gt;子单信息&lt;/p&gt; | [optional] 
**payerInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\PayerInfo**](PayerInfo.md) |  | [optional] 
**terminalInfo** | **string** | &lt;p&gt;终端信息&lt;/p&gt; | [optional] 
**creditOrderId** | **string** | &lt;p&gt;信用分单号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


