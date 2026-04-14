# WechatConfigFlatRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tradeAuthDirList** | **string** | &lt;p&gt;支付授权目录列表&lt;/p&gt; | [optional] 
**appIdList** | **string** | &lt;p&gt;JSON字符串；&lt;/p&gt; &lt;p&gt;appId(必填) 支付appId&lt;br /&gt;appIdType(必填) appId类型&lt;br /&gt;&amp;nbsp; OFFICIAL_ACCOUNT:公众号&lt;br /&gt;&amp;nbsp; MINI_PROGRAM:小程序&lt;br /&gt;appSecret(条件必填) 支付appSecret&lt;br /&gt;&amp;nbsp; 备注：微信小程序不用配置appsecret；微信公众号、微信用户扫码都需要配置appSecret；但商户仅对接聚合统一下单时，使用微信公众号支付可不用配置appSecret&lt;/p&gt; | [optional] 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号。&lt;br /&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;不指定报备商户号时，将对该商编下的所有报备商户号进行配置&lt;/p&gt; | 
**reportMerchantNo** | **string** | &lt;p&gt;若指定报备商户号，则仅针对此报备商户号进行配置。需确保该报备商户号属于此商编&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


