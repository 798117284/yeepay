# PassiveOrderResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;请求成功：00000 ；请求成功时请关注status（状态）&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;字段&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;请求处理中：00105；请调用订单查询接口查询支付结果&lt;br /&gt;&lt;/span&gt;&lt;/span&gt; &lt;div data-page-id&#x3D;\&quot;ZuHGdaChkosIONxuW1wcXRI5nwb\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-K6XTdnnZnorn4lxdal6c9phUnYb\&quot;&gt;其他为请求失败&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | 
**message** | **string** |  | 
**orderId** | **string** |  | [optional] 
**uniqueOrderNo** | **string** |  | [optional] 
**bankOrderId** | **string** |  | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING:处理中（内部系统处理超时会出现）&lt;br /&gt;WAITPAY:等待用户输入密码&lt;br /&gt;SUCCESS:支付成功&lt;br /&gt;FAIL:支付失败&lt;/p&gt; | [optional] 
**payType** | **string** | &lt;p&gt;MICROPAY：付款码支付&lt;br /&gt;FACEPAY：刷脸支付&lt;/p&gt; | [optional] 
**paySuccessTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;渠道的支付完成时间，同用户的支付账单显示完成时间一致&lt;/p&gt; | [optional] 
**userId** | **string** | &lt;p&gt;微信的openId、支付宝的userId&lt;/p&gt; | [optional] 
**payBank** | **string** | &lt;p&gt;CFT：微信零钱/零钱通&lt;br /&gt;ALIPAY：支付宝&lt;br /&gt;OPEN_UPOP：银联云闪付&lt;br /&gt;WECHAT：微信&lt;br /&gt;VISA：VISA卡&lt;br /&gt;ICBC:银行卡编码（以工行为例）&lt;/p&gt; | [optional] 
**transactionId** | **string** | &lt;p&gt;该笔订单在微信、支付宝生成的单号(经过银网联处理的微信/支付宝单号)&lt;/p&gt; | [optional] 
**channelPromotionInfo** | **string** | &lt;p&gt;详见&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/fwssfk/others/5f59fc1720289f001ba82528/69295bfb19f36d0001080110\&quot;&gt;优惠券信息json说明&lt;/a&gt;&lt;/p&gt; | [optional] 
**realPayAmount** | **float** |  | [optional] 
**channelTrxId** | **string** | &lt;p&gt;该笔订单在微信、支付宝生成的单号(微信/支付宝的真实单号)&lt;/p&gt; | [optional] 
**channel** | **string** |  | [optional] 
**payWay** | **string** |  | [optional] 
**orderAmount** | **float** |  | [optional] 
**cardType** | **string** | &lt;p&gt;DEBIT:借记卡&lt;br /&gt;CREDIT:贷记卡&lt;/p&gt; | [optional] 
**channelMerchantNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;代表聚合（ATU）渠道侧商户号&lt;/span&gt;&lt;/div&gt; | [optional] 
**channelSettleAmount** | **float** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;渠道实际结算给易宝的资金，用于核对渠道券&lt;/span&gt;&lt;/div&gt; | [optional] 
**buyerLogonId** | **string** | &lt;p&gt;支付宝支付返回buyerLogonId&lt;/p&gt; | [optional] 
**yeepayOpenId** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;此笔交易下用户在机构下的openid&lt;/span&gt;&lt;/div&gt; | [optional] 
**bankCardNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;云闪付支付场景下返回的用户支付卡号（前6后4）&lt;/span&gt;&lt;/div&gt; | [optional] 
**fundChannel** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5-0\&quot;&gt;支付宝交易使用的资金渠道，详见&amp;lt;ahref&#x3D;\&quot;&lt;/span&gt;&lt;a class&#x3D;\&quot;link rich-text-anchor __anchor-intercept-flag__\&quot; contenteditable&#x3D;\&quot;false\&quot; href&#x3D;\&quot;https://doc.open.alipay.com/doc2/detail?treeId&#x3D;26&amp;amp;articleId&#x3D;103259&amp;amp;docType&#x3D;1\&quot; target&#x3D;\&quot;_blank\&quot; rel&#x3D;\&quot;noopener noreferrer\&quot; data-eleid&#x3D;\&quot;5-1\&quot; data-lark-is-custom&#x3D;\&quot;false\&quot; data-lark-link&#x3D;\&quot;true\&quot;&gt;https://doc.open.alipay.com/doc2/detail?treeId&#x3D;26&amp;amp;articleId&#x3D;103259&amp;amp;docType&#x3D;1&lt;/a&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5-2\&quot;&gt;\&quot;&amp;gt;支付渠道列表&amp;lt;/a&amp;gt;&lt;/span&gt;&lt;/div&gt; | [optional] 
**enterprisePayInfo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;支付宝企业码支付相关&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;字段&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | [optional] 
**basicsProductFirst** | **string** | &lt;p&gt;收方一级基础产品码&lt;/p&gt; | [optional] 
**basicsProductSecond** | **string** | &lt;p&gt;收方二级基础产品码&lt;/p&gt; | [optional] 
**basicsProductThird** | **string** | &lt;p&gt;收方三级基础产品码&lt;/p&gt; | [optional] 
**memo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;商户自定义参数，会展示在交易对账单中,支持85个字符（中文或者英文字母）。&lt;/span&gt; &lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;7\&quot;&gt;商户使用易缴费支付时，多条对账备注，会以&#39;/&#39;的形式进行&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;拼接&lt;/span&gt;显示。&lt;/span&gt; &lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;9\&quot;&gt;商户使用台牌和&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;POS&lt;/span&gt;支付时，多条对账备注，会以&#39;:&#39;的形式进行拼接显示。&lt;/span&gt;&lt;/div&gt; | [optional] 
**terminalInfo** | **string** | &lt;p&gt;json格式&lt;br /&gt;notifyEquipmentNos:播报设备终端号列表&lt;br /&gt;请传入云喇叭SN号，多个SN号之间以逗号分隔；需确保云喇叭与收单商编已绑定，则此笔交易成功后，对应云喇叭将进行语音播报&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


