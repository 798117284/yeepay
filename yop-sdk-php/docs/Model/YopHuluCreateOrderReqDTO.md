# YopHuluCreateOrderReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settleId** | **string** |  | [optional] 
**orderId** | **string** | &lt;p&gt;商户订单号&lt;/p&gt; | 
**bankOrderId** | **string** |  | 
**feeSubsidyInfo** | **string** | &lt;p&gt;feeSubsidyAmount:补贴金额feeSubsidyMerchantNo:补贴商编示例值 {\&quot;feeSubsidyAmount\&quot;:10.00,\&quot;feeSubsidyMerchantNo\&quot;:\&quot;10080028707\&quot;}&lt;/p&gt; | [optional] 
**fee** | **string** | &lt;p&gt;应收手续费&lt;/p&gt; | 
**scene** | **string** | &lt;p&gt;支付场景：&lt;br /&gt;JSAPI:公众号(微信)&lt;/p&gt; &lt;p&gt;LN:生活号(支付宝)&lt;/p&gt; &lt;p&gt;JSPAY:js支付(银联)&lt;/p&gt; &lt;p&gt;PASSIVE: 被扫（银联、微信、支付宝、被扫）&lt;/p&gt; &lt;p&gt;ACTIVE:主扫（银联、支付宝原生正扫）&lt;/p&gt; &lt;p&gt;SDK:（微信APP）&lt;/p&gt; &lt;p&gt;H5（微信H5）&lt;/p&gt; | 
**payType** | **string** | &lt;p&gt;银联支付宝:UNION_ALIPAY&lt;/p&gt; &lt;p&gt;银联微信:UNION_WECHAT&lt;/p&gt; &lt;p&gt;银联二维码:OPEN_UPOP&lt;/p&gt; | 
**wxChannelId** | **string** |  | [optional] 
**orderAmount** | **string** |  | 
**csNotifyUrl** | **string** | &lt;p&gt;入账成功后通知使用&lt;/p&gt; | [optional] 
**channelSubMchName** | **string** | &lt;p&gt;渠道商户名称&lt;/p&gt; | [optional] 
**realPayAmount** | **string** |  | 
**goodsName** | **string** |  | 
**realFee** | **string** | &lt;p&gt;实收手续费&lt;/p&gt; | [optional] 
**payCardType** | **string** |  | [optional] 
**wxChannelName** | **string** |  | [optional] 
**paySuccessDate** | **string** | &lt;p&gt;格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | 
**wxAppId** | **string** |  | [optional] 
**basicProductCode** | **string** |  | 
**settlementAmount** | **string** |  | 
**channelSubMchId** | **string** |  | 
**orderDate** | **string** | &lt;p&gt;格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | 
**accountAmount** | **string** |  | 
**merchantNo** | **string** |  | [optional] 
**bankRefundOrderId** | **string** |  | [optional] 
**orderRefundDate** | **string** | &lt;p&gt;日期格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**businessInfo** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


