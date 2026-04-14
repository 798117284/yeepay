# MarketingConsultResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**message** | **string** |  | [optional] 
**preConsultId** | **string** |  | [optional] 
**channelInfoList** | **string** | &lt;p&gt;JSONARRAY格式&lt;/p&gt; &lt;p&gt;channelCode(String):渠道编码&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;渠道编码包含枚举值：&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;ALICREDITFQG：花呗分期&amp;nbsp;&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;ALICREDIT_CC_INSTAL：信用卡分期&lt;/p&gt; &lt;p&gt;channelName(String):渠道名称&lt;/p&gt; &lt;p&gt;channelEnable(Boolean)：渠道可用性&lt;/p&gt; &lt;p&gt;channelLogo(String)：渠道logo&lt;/p&gt; &lt;p&gt;operationList：渠道运营信息 ARRAY格式&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;installCount(String)：期数&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;operationList(Array)：子渠道运营信息&lt;/p&gt; &lt;p&gt;installmentInfoList：分期信息 ARRAY格式&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;installCount(String)：期数&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp;operationList(Array)：子渠道运营信息&lt;/p&gt; &lt;p&gt;&lt;/p&gt; &lt;p&gt;子渠道运营信息包含如下信息：&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; sceneCode(String)：运营场景码&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; promoPrice(String)：运营定价（立减优惠金额枚举下立减3元时，值为3；分期手续费折扣比例枚举下手续费3折时，值为3;免息时，值为0）&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; payOperationInfo(String)：运营信息&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; viewData(Object)：营销表达数据&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; 营销表达数据包含如下信息：&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;operationTip(String)：表达立减的辅助提示&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;operationDesc(String)：表达运营主体信息&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;promoType(String)：运营类型&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;运营类型包含枚举：&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 定额金额类优惠：fixedAmountCashAsset&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 随机金额类优惠:randomAmountCashAsset&lt;/p&gt; &lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 手续费率折扣：feeRatioNonCashAsset&lt;/p&gt; &lt;p&gt;&lt;/p&gt; | [optional] 
**bizTagList** | **string** | &lt;p&gt;人群标签列表 JSONARRAY格式&lt;/p&gt; &lt;p&gt;FQ_AVAILABLE: 花呗分期和信用卡分期都可用FQ_AVAILABLE_24: 花呗分期24期可用FQ_AMOUNT_PROMOTE：随机专享提额&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


