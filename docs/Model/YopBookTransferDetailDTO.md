# YopBookTransferDetailDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiverBookNo** | **string** | &lt;div&gt; &lt;pre&gt;接收方用户编号&lt;/pre&gt; &lt;/div&gt; | 
**divideAmount** | **string** | &lt;p&gt;单位：元，最大支持两位小数&lt;/p&gt; | 
**feeChargeSide** | **string** | &lt;p&gt;手续费承担方，非必填，&lt;/p&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;接口的手续费承担方&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;字段&lt;/span&gt;仅在入网开通产品时配置手续费收取方式是&amp;ldquo;实收&amp;rdquo;并且配置该商户承担时生效&lt;/span&gt;&lt;/div&gt; &lt;p&gt;枚举值:&lt;br /&gt;&amp;nbsp; &amp;nbsp; OUTSIDE：分出方承担手续费&lt;br /&gt;&amp;nbsp; &amp;nbsp; INSIDE：接收方承担手续费&lt;br /&gt;&amp;nbsp; &amp;nbsp; 不传默认:OUTSIDE&lt;/p&gt; | [optional] 
**divideReason** | **string** | &lt;p&gt;划拨说明&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


