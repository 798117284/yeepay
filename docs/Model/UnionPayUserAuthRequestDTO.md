# UnionPayUserAuthRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userAuthCode** | **string** | &lt;div data-page-id&#x3D;\&quot;MvsOdIVA9op3sTxHR9tcwhkknYf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Tn9UdhKhso6JNFx0I3xc3EFNnSh\&quot;&gt;云闪付获取userAuthCode方式:&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Rkicd2WXFoRZOFxHH34ctKRnnI9\&quot;&gt;1.调用云闪付获取授权码&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-ZJr2dx98aoi7CZxJdKHcEFZRnXf\&quot;&gt;https://qr.95516.com/qrcGtwWeb/api/userAuth?version&#x3D;1.0.0&amp;amp;redirectUrl&#x3D;回调接收userAuthCode地址(需URLEncode)&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-UDUjdUIkoozCSYxnVnTcGfyHnzh\&quot;&gt;2.接收code回调&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NwDIdpscuo0sHAxVVn5cpSonnzU\&quot;&gt;收到参数:respCode (00为成功)、userAuthCode&lt;/div&gt; &lt;/div&gt; | 
**merchantNo** | **string** | &lt;div data-page-id&#x3D;\&quot;MvsOdIVA9op3sTxHR9tcwhkknYf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NsmodEYgBoZwzDxHECXceZ6FnUh\&quot;&gt;商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Hj7adXnEJodbg4xcpZocawB4n4g\&quot;&gt;收单主体商编，平台商或服务商下的子商户，普通特约商&lt;/div&gt; &lt;/div&gt; | 
**appUpIdentifier** | **string** | &lt;div data-page-id&#x3D;\&quot;MvsOdIVA9op3sTxHR9tcwhkknYf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-YXNudil0votzhrxKiTAcWTLfnGu\&quot;&gt;银联支付标识&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


