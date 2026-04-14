# CreditScoreAuthorizationRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;br /&gt;如果商户使用先下单再支付模式，已传入token，则本字段可以不传值，否则必须传值&lt;/p&gt; | 
**merchantNo** | **string** |  | 
**authorizationId** | **string** |  | 
**channel** | **string** | 可选项如下: WECHAT:微信 | 
**payWay** | **string** | 可选项如下: CREDIT_PAY:信用分 | 
**scene** | **string** | 可选项如下: ONLINE:线上 | 
**invokeScene** | **string** | 可选项如下: WECHAT_OFFIACCOUNT:微信公众号 WECHAT_MINI_PROGRAM:微信小程序 SDK:SDK | 
**appId** | **string** |  | 
**serviceId** | **string** |  | 
**notifyUrl** | **string** | &lt;p&gt;接收授权结果通知&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


