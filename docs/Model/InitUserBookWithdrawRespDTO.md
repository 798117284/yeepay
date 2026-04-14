# InitUserBookWithdrawRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;div data-page-id&#x3D;\&quot;BZLqdgTycox7Ncx8wDncSXWwnbe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-H3D1dh6LDoNKiMxICsFcrpKcnmb\&quot;&gt;返回码 该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息示例值：UA00000&lt;/div&gt; &lt;/div&gt; | 
**returnMsg** | **string** | &lt;div data-page-id&#x3D;\&quot;BZLqdgTycox7Ncx8wDncSXWwnbe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-J7bFdBYKUoD2yjxiJUfc0EL0nPg\&quot;&gt;返回信息 与返回码对应的说明信息&lt;/div&gt; &lt;/div&gt; | [optional] 
**orderNo** | **string** | &lt;div data-page-id&#x3D;\&quot;BZLqdgTycox7Ncx8wDncSXWwnbe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-X1pHdmCIuoDY2nxMMmAchEqSnRd\&quot;&gt;易宝唯一单号&lt;/div&gt; &lt;/div&gt; | [optional] 
**requestNo** | **string** | &lt;div data-page-id&#x3D;\&quot;BZLqdgTycox7Ncx8wDncSXWwnbe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VsxedidGho7Uy7xSP9VcwjHZn0b\&quot;&gt;商户请求号&lt;/div&gt; &lt;/div&gt; | [optional] 
**status** | **string** | &lt;div data-page-id&#x3D;\&quot;BZLqdgTycox7Ncx8wDncSXWwnbe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-RD5rdFbJ0ozyNmx7ft6cBLAfnvd\&quot;&gt;状态 可选项如下: REQUEST_RECEIVE:请求已接收（易宝正在处理中，收到最终结果前请勿重复下单） REQUEST_ACCEPT:请求已受理（易宝正在处理中，收到最终结果前请勿重复下单） REMITING:银行处理中（银行正在处理中，收到最终结果前请勿重复下单） FAIL:失败&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


