# WeComRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | &lt;p&gt;收单主体商编，平台商或服务商下的子商户，普通特约商户&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&amp;nbsp;&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户系统内部生成的订单号，需要保持在同一个商户下唯一&lt;/p&gt; | 
**orderAmount** | **float** | &lt;p&gt;业务上是必须参数，单位： 元， 两位小数， 最低 0.01&lt;/p&gt; | 
**goodsName** | **string** | &lt;p&gt;商品名称，简单描述订单信息或商品简介，用于展示在收银台页面或者支付明细中&lt;br /&gt;特殊说明：&lt;br /&gt;1、当商品名称超过85个字符时，易宝会默认保留前85个字符&lt;br /&gt;2、由于微信渠道侧限制，如微信支付时该字段将自动截取前42个字符送渠道&lt;/p&gt; | 
**expiredTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot;，默认 1 小时&lt;/p&gt; | [optional] 
**notifyUrl** | **string** | &lt;p&gt;接收支付结果的通知地址&lt;br /&gt;详见&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;支付结果通知&lt;/a&gt;&lt;/p&gt; | 
**redirectUrl** | **string** |  | [optional] 
**memo** | **string** | &lt;p&gt;商户自定义参数，会展示在交易对账单中，支持85个字符（中文或者英文字母）&lt;/p&gt; | [optional] 
**csUrl** | **string** | &lt;p&gt;清算成功服务器回调地址，不传则不通知。详见&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/ptssfk/spis/5fc9ae6896818f001b300bce\&quot;&gt;清算结果通知&lt;/a&gt;&lt;/p&gt; | [optional] 
**fundProcessType** | **string** | &lt;p&gt;分账订单标记&lt;br /&gt;DELAY_SETTLE:需要分账&lt;br /&gt;REAL_TIME:不需要分账&lt;br /&gt;REAL_TIME_DIVIDE:实时分账；需同时传入divideDetail&lt;/p&gt; | [optional] 
**limitCredit** | **string** | &lt;p&gt;是否限制贷记卡&lt;br /&gt;Y:仅借记卡可以支付&lt;br /&gt;N:借贷记卡均可支付&lt;br /&gt;不传默认为N&lt;/p&gt; | [optional] 
**scene** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;ONLINE:线上&lt;br /&gt;OFFLINE:线下&lt;br /&gt;BAOXIAN:保险&lt;br /&gt;GONGYI:公益&lt;br /&gt;DC_SEPARATION:借贷分离&lt;br /&gt;DIGITAL:数娱&lt;br /&gt;REGISTRATION:报名(需要先优惠费率报名成功，否则会阻断交易)&lt;br /&gt;PRIVATE_EDUCATION:民办教育&lt;br /&gt;DIRECT:直连&lt;br /&gt;LARGE:特殊&lt;/p&gt; | 
**appId** | **string** |  | [optional] 
**merchantUserNo** | **string** | &lt;div data-page-id&#x3D;\&quot;PDYZdkQWSotBlgxDFrcc6R7bnDS\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DLyRdYpJmoux8nxikAacHT7MnWh\&quot;&gt;商户侧自定义用户唯一标识&lt;/div&gt; &lt;/div&gt; | 
**channelSpecifiedInfo** | **string** | &lt;p&gt;渠道指定支付信息&amp;nbsp;&lt;br /&gt;1、限制未成年人支付&lt;br /&gt;isAdultPay：限制未成年人支付，对微信交易生效；商户需事先在微信侧申请相应权限（联系易宝进行申请）&lt;br /&gt;枚举：true：表示要限制未成年人&lt;/p&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt; &lt;div class&#x3D;\&quot;richTextContainer text-align-left\&quot; dir&#x3D;\&quot;auto\&quot; data-partial-quote-enabled&#x3D;\&quot;true\&quot; data-lark-html-role&#x3D;\&quot;root\&quot;&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;2、支持透传微信设备号&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;merchantDeviceInfo：微信设备号；对应微信的device_info&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;字段&lt;/span&gt;（微信自定义参数,可以为终端设备号(门店号或收银设备ID),PC网页或公众号内支付可以传\&quot;WEB\&quot;）&lt;/span&gt;&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**channelPromotionInfo** | **string** | &lt;p&gt;渠道优惠信息&lt;br /&gt;订单需参与渠道指定优惠时传入，如微信单品券&lt;br /&gt;&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/v2/products/fwssfk/others/5f59fc1720289f001ba82528/5fed4bc56d313b001b79abfd/index.html\&quot;&gt;渠道优惠信息json说明&lt;/a&gt;&lt;/p&gt; | [optional] 
**identityInfo** | **string** | &lt;p&gt;特殊行业需要支付实名场景下使用，如保险的特殊险种需要付款人和投保人实名。支持微信、支付宝，详见：&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/bzshsfk/others/5f3cefa0a92810001be76426/63a1b711f9a122006f1b5379\&quot;&gt;聚合限制付款人信息json说明&lt;/a&gt;&lt;/p&gt; | [optional] 
**businessInfo** | **string** | &lt;p&gt;&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/ptssfk/others/5f3cef4420289f001ba82523/64d5e1de964ee6006f0bfdd0\&quot;&gt;业务自定义信息json说明&lt;/a&gt;&lt;/p&gt; | [optional] 
**terminalInfo** | **string** | &lt;p&gt;需要在商户后台查询网点信息和交易账单上需要展示网点信息的商户，需要传入此值，否则请勿传值！！！&lt;br /&gt;shopName：网点名称&lt;br /&gt;shopCustomerNumber：网点编号&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;支持收款至预收账户记账簿编号不为空时，fundProcessType必须上送REAL_TIME&lt;/p&gt; | [optional] 
**productInfo** | **string** | &lt;p&gt;易宝营销产品信息&lt;br /&gt;本次订单可用的单品券id列表，最大长度512&lt;/p&gt; | [optional] 
**divideDetail** | **string** | &lt;p&gt;实时分账的情况下，分账商编无需传入收单商编，除去分给他人的金额，订单剩余可分账金额均会分账给收单商户。&lt;/p&gt; | [optional] 
**divideNotifyUrl** | **string** | &lt;p&gt;分账成功服务器回调地址，不传则不通知&lt;/p&gt; | [optional] 
**feeSubsidyInfo** | **string** | &lt;p&gt;JSON ARRAY格式，只支持上传1条&lt;br /&gt;&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/ptssfk/others/5f3cef4420289f001ba82523/656ed87c9a76e60072dd728b\&quot;&gt;手续费补贴信息json说明&lt;/a&gt;&lt;/p&gt; | [optional] 
**ypPromotionInfo** | **string** | &lt;p&gt;json格式；需要参加易宝营销活动的可传入此值；如需参加营销活动，请先联系易宝运营进行配置，否则传入不生效，按无营销活动支付&lt;br /&gt;&lt;br /&gt;amount:营销金额（自定义补贴商户时，不需要传参）&lt;br /&gt;type:营销类型&lt;br /&gt;&lt;br /&gt;营销类型枚举值：&lt;br /&gt;CUSTOM_REDUCTION:自定义用户支付立减&lt;br /&gt;用户支付金额&#x3D;订单金额-自定义立减金额&lt;br /&gt;订单入账金额&#x3D;订单金额&lt;br /&gt;CUSTOM_ALLOWANCE:自定义补贴商户（自定义补贴商户需要在支付清算完成后，发起调用补贴申请）&lt;br /&gt;用户支付金额&#x3D;订单金额&lt;br /&gt;订单入账金额&#x3D;订单金额+自定义补贴金额&lt;/p&gt; | [optional] 
**receiverAccountType** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


