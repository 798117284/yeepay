# UnifiedOrderResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | &lt;p&gt;交易金额&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝支付单号&lt;/p&gt; | [optional] 
**mchOrderNo** | **string** | &lt;p&gt;商户支付单号&lt;/p&gt; | [optional] 
**prePayParams** | **string** | &lt;p&gt;唤起支付参数&lt;/p&gt; | [optional] 
**merchantInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\MerchantDTO**](MerchantDTO.md) |  | [optional] 
**requestGatewayOrderNo** | **string** | &lt;p&gt;请求渠道交易单号&lt;/p&gt; | 
**status** | **string** | &lt;p&gt;支付状态&lt;/p&gt; 可选项如下: PROCESSING:处理中 SUCCESS:支付成功 FAILED:支付失败 CLOSED:支付超时或取消订单 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


