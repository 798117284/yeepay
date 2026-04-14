# BatchReceiptRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**data** | **string** | 返回一个base64字符串数据;（商户可通过Base64解码，将返回字符串转化为字节数组，并在本地新建以.pdf格式的文件，直接写入该pdf文件即可） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


