# WechatGoodsDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**goodsDetails** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatGoodsDetailGoodsDetail[]**](WechatGoodsDetailGoodsDetail.md) | &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;【单品列表】&amp;nbsp;单品列表信息&lt;/p&gt; &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;&amp;nbsp;&lt;/p&gt; | [optional] 
**costPrice** | **string** | &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;【订单原价】&lt;/p&gt; &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;1、商户侧一张小票订单可能被分多次支付，订单原价用于记录整张小票的交易金额。&lt;/p&gt; &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;2、当订单原价与支付金额不相等，则不享受优惠。&lt;/p&gt; &lt;p class&#x3D;\&quot;iwiki-p\&quot;&gt;3、该字段主要用于防止同一张小票分多次支付，以享受多次优惠的情况，正常支付订单不必上传此参数。&lt;/p&gt; | [optional] 
**receiptId** | **string** | &lt;p&gt;商家小票 ID&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


