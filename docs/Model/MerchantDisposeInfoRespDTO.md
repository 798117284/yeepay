# MerchantDisposeInfoRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eventId** | **string** | &lt;p&gt;处置单号&lt;/p&gt; | [optional] 
**disposeTime** | **string** | &lt;p&gt;处置时间:&lt;/p&gt; &lt;p&gt;格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; &lt;p&gt;示例值:2025-12-02 22:50:50&lt;/p&gt; | [optional] 
**disposeReason** | **string** | &lt;p&gt;SILENT_MERCHANT：沉默商户&lt;br /&gt;INSPECTION_EXCEPTION：巡检异常&lt;br /&gt;SUPPLEMENTARY_MATERIAL_TIMEOUT：后补材料超时&lt;br /&gt;AGGREEMENT_NOT_RECEIVE：协议未回&lt;/p&gt; &lt;p&gt;MERCHANT_APPLY_DISPOSE：服务商申请关闭&lt;br /&gt;OTHER：其他&lt;/p&gt; &lt;p&gt;说明：&lt;/p&gt; &lt;p&gt;如果仅命中&amp;ldquo;沉默商户&amp;rdquo;，请调用&amp;ldquo;&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/fwssfk/options__rest__v1.0__mer__merchant__dispose__unfreeze\&quot;&gt;沉默商户解冻申请&lt;/a&gt;&amp;rdquo;接口进行解冻；&lt;/p&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;其他异常原因，请联系运营。&lt;/span&gt;&lt;/div&gt; | [optional] 
**disposeScope** | **string** | &lt;div data-page-id&#x3D;\&quot;Kyl2dmBq1o4eSGxeQ2ocN891n9c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-P4dudw543omPAQxVSIkc6lINnnd\&quot;&gt;STOP_RECEIPT:禁止收款&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-THIodb1rHorN91xhixUcXLkhnub\&quot;&gt;PAYMENT_SELF_CARD:禁止付款-但允许结算/提现至商户银行账户&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-HUWCde0IlozHtqxQvt0cN32Xnod\&quot;&gt;STOP_PAYMENT:禁止付款&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-INKRdPyb5o28tLxcUC4cF29znUd\&quot;&gt;OTHER:关闭部分产品&lt;/div&gt; &lt;/div&gt; | [optional] 
**disposeProducts** | **string[]** | &lt;div data-page-id&#x3D;\&quot;Kyl2dmBq1o4eSGxeQ2ocN891n9c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NIGndI369oVgLTxIWIvcBeZanbh\&quot;&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;返回productCode明细&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


