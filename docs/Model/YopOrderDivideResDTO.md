# YopOrderDivideResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码,OPR00000 成功&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**divideRequestId** | **string** | &lt;p&gt;商户分账请求号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING:处理中（正常情况下不会出现，如长期状态未闭环，可联系易宝人工介入处理）&lt;br /&gt;SUCCESS:分账成功&lt;br /&gt;FAIL:分账失败&amp;nbsp;&lt;/p&gt; | [optional] 
**divideDetail** | **string** | &lt;div data-page-id&#x3D;\&quot;Tw6cdAXtsoriwcxQisxcGbxJnnf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Wt4Gd4Ifqo0Bd7xvjtjc314nnGe\&quot;&gt;JSON字符串；&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BIbKd3n4DoUGR1xQoi8c8wpNn9d\&quot;&gt;divideDetailNo: 易宝分账明细单号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-DiHXdw9EMob4oZx8wjCccwaknne\&quot;&gt;ledgerNo: 分账接收方编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-TcwCdab42o5iJ2xzDDmcfvXzn2d\&quot;&gt;amount: 分账金额&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-L0o5dF0ooorHRFxW4WwcToFXnqd\&quot;&gt;divideDetailDesc: 分账说明&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-W3x3dP5MTo85NvxFskQcLAvBnTg\&quot;&gt;fee: 分账手续费&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KG1yd6hZoohfqxxm73EcwKqhnxf\&quot;&gt;accountAmount: 入账金额&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CqZedb6pro9PXGxBOobc0Ic8nae\&quot;&gt;proportion: 分账比例&lt;/div&gt; &lt;/div&gt; | [optional] 
**createDate** | **string** | &lt;p&gt;分账申请时间&lt;/p&gt; | [optional] 
**divideSuccessDate** | **string** | &lt;p&gt;分账完成时间&lt;/p&gt; | [optional] 
**uniqueDivideNo** | **string** | &lt;p&gt;易宝分账流水号&lt;/p&gt; | [optional] 
**divideAmount** | **string** | &lt;div data-page-id&#x3D;\&quot;Tw6cdAXtsoriwcxQisxcGbxJnnf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WBAqdYquvoStcFxObBxcz9XanRd\&quot;&gt;分账总金额&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UJVId3uU1oemEFx3hMGcJpArnz4\&quot;&gt;基于此金额按商户传入比例计算接收方应分金额。&lt;/div&gt; &lt;/div&gt; | [optional] 
**divideRule** | **string** | &lt;div data-page-id&#x3D;\&quot;HFh5dZzExoqsKFxTu2BcbxKEn4i\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-G4UGd5A40oJJK7xntwqcWUVznVd\&quot;&gt;分账规则&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IafcdS1XqosBZ6xkGgccJ7sAnYd\&quot;&gt;AMOUNT：指定金额分账&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-N0GMdwMRAotpThxMLO3cv1gKnTb\&quot;&gt;PROPORTION：指定比例分账&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


