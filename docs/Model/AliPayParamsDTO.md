# AliPayParamsDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**opAppId** | **string** | &lt;div&gt; &lt;pre&gt;小程序支付中，商户实际经营主体的小程序应用的opAppId&lt;/pre&gt; &lt;/div&gt; | [optional] 
**buyerId** | **string** | &lt;div&gt; &lt;pre&gt;买家的支付宝唯一用户号 &lt;/pre&gt; &lt;/div&gt; | [optional] 
**subject** | **string** | &lt;p&gt;【描述】订单标题。&lt;br /&gt;注意：不可使用特殊字符，如 /，&#x3D;，&amp;amp; 等。&lt;/p&gt; | 
**goodsDetails** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliGoodsDetail[]**](AliGoodsDetail.md) | &lt;p&gt;【描述】订单包含的商品列表信息，json格式。&lt;/p&gt; | [optional] 
**extendParams** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliPayParamsDTOExtendParams**](AliPayParamsDTOExtendParams.md) |  | [optional] 
**aliBusinessParams** | **string** | &lt;p&gt;商户传入业务信息，具体值要和支付宝约定，应用于安全，营销等参数直传场景&lt;/p&gt; | [optional] 
**extUserInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliPayParamsDTOExtUserInfo**](AliPayParamsDTOExtUserInfo.md) |  | [optional] 
**promoParams** | **string** | &lt;p&gt;优惠明细参数，通过此属性补充营销参数。注：仅与支付宝协商后可用。&lt;/p&gt; | [optional] 
**alipayStoreId** | **string** | &lt;p&gt;指商户创建门店后支付宝生成的门店ID&lt;/p&gt; | [optional] 
**storeId** | **string** | &lt;p&gt;指商户创建门店时输入的门店编号&lt;/p&gt; | [optional] 
**merchantOrderNo** | **string** | &lt;p&gt;商户原始订单号&lt;/p&gt; | [optional] 
**areaCode** | **string** |  | [optional] 
**operatorId** | **string** | &lt;p&gt;商户操作员编号&lt;/p&gt; | [optional] 
**subMerchantNo** | **string** | &lt;p&gt;指定报备商户号&lt;/p&gt; | [optional] 
**isEnterprisePay** | **string** | &lt;p&gt;是否企业支付&lt;br /&gt;如需要返回支付宝企业支付信息时传入&lt;/p&gt; 可选项如下: Y:是 N:否 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


