# ReceiptResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;00000表示成功&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**data** | **string** | &lt;p&gt;返回一个base64字符串数据,大小不限制;（商户可通过Base64解码将返回的字符串转换为字节数组，并在本地新建以.pdf格式的文件，直接写入该PDF文件。在解码过程中，请注意选择适当的解码器。因为返回的Base64字符串会包含换行符，请确保使用支持解析换行符的解码器如new BASE64Decoder()，以避免解码错误）&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


