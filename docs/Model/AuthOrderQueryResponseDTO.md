# AuthOrderQueryResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**ybOrderId** | **string** | &lt;p&gt;易宝流水号&lt;/p&gt; | [optional] 
**authType** | **string** | &lt;p&gt;身份信息二要素:FastRealIdName&lt;/p&gt; &lt;p&gt;银行卡二要素认证:FastRealCardNameAuth&lt;/p&gt; &lt;p&gt;银行卡三要素认证:FastRealNameAuth&lt;/p&gt; &lt;p&gt;银行卡四要素认证:FastRealNameVerify&lt;/p&gt; &lt;p&gt;银行卡五要素认证:FastRealNameCardAuth&lt;/p&gt; &lt;p&gt;运营商认证:PhoneAuth&lt;/p&gt; | [optional] 
**collectedFee** | **string** | &lt;p&gt;&lt;/p&gt; &lt;div&gt; &lt;pre&gt;NO_NEED: 不计费&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;COLLECTED: 计费&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**carrierType** | **string** | &lt;div data-page-id&#x3D;\&quot;ChmRdcXFNo3TmpxThWrcjlKyn4e\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-YhIndirZHoGZnGxpLegcrvginlf\&quot;&gt;运营商&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UVqkdBdKcoQo6bx6tCJc3JnHnDd\&quot;&gt;YD:移动&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UVqkdBdKcoQo6bx6tCJc3JnHnDd\&quot;&gt;LT:联通&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UVqkdBdKcoQo6bx6tCJc3JnHnDd\&quot;&gt;DX:电信&lt;/div&gt; &lt;/div&gt; | [optional] 
**authStatus** | **string** | &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;认证成功:SUCCESS&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;认证失败:FAIL&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;7\&quot;&gt;未经认证：NOT_AUTH (未能拿到实际结果, 这个状态不能完全判定为信息有误)&lt;/span&gt;&lt;/div&gt; | [optional] 
**customerNumber** | **string** | &lt;p&gt;易宝商户号&lt;/p&gt; | [optional] 
**errorCode** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**errorMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


