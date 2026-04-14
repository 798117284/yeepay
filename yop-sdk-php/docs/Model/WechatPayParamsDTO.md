# WechatPayParamsDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subAppId** | **string** | &lt;div&gt; &lt;pre&gt;应用ID:subAppId 微信公众号/小程序支付必传&lt;br /&gt;子商户在微信申请的应用ID，全局唯一。&lt;/pre&gt; &lt;/div&gt; | 
**subOpenId** | **string** | &lt;div&gt; &lt;pre&gt;公众号和小程序场景必填。用户在子商户sub_appid下的唯一标识&lt;br /&gt;微信公众号/小程序支付必传&lt;/pre&gt; &lt;/div&gt; | 
**body** | **string** | &lt;p&gt;商品信息描述，用户微信账单的商品字段中可见&lt;/p&gt; | 
**identity** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatIdentityDTO**](WechatIdentityDTO.md) |  | [optional] 
**limitPayer** | **string** | &lt;div&gt; &lt;pre&gt;限制付款人 可限制用户只有是成年人才能支付，&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsTag** | **string** | &lt;div&gt; &lt;pre&gt; 代金券或立减优惠功能的参数；&lt;/pre&gt; &lt;/div&gt; | [optional] 
**sceneInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatSceneInfoDTO**](WechatSceneInfoDTO.md) |  | [optional] 
**subMerchantNo** | **string** | &lt;p&gt;【子商户号】由服务商为子商户进件后获取&lt;/p&gt; | [optional] 
**detail** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatGoodsDetail**](WechatGoodsDetail.md) |  | [optional] 
**deviceInfo** | **string** | &lt;p&gt;终端设备号(商户自定义，如门店编号)&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


