# AliGoodsDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**goodsId** | **string** | &lt;p&gt;【描述】商品的编号，该参数传入支付券上绑定商品goods_id，倘若无支付券需要消费，该字段传入商品最小粒度的商品 ID（如：若商品有 sku 粒度，则传商户 sku 粒度的ID）。&lt;br /&gt;当前接口的extendParams.tradeComponentOrderId&lt;/p&gt; &lt;p&gt;字段不为空时，该字段需与交易组件订单参数保持一致&lt;/p&gt; | 
**goodsName** | **string** | &lt;div&gt; &lt;pre&gt;商品名称&lt;/pre&gt; &lt;/div&gt; | 
**price** | **string** | &lt;p&gt;【描述】商品单价，单位为元&lt;/p&gt; | 
**quantity** | **string** | &lt;p&gt;【描述】商品数量，支持小数，精确到小数点后两位&lt;/p&gt; | 
**alipayGoodsId** | **string** | &lt;p&gt;支付宝定义的统一商品编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


