# ReceiptRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息 | [optional] 
**returnMsg** | **string** |  | [optional] 
**data** | **string** | 返回一个base64字符串数据;（示例：如果返回的fileTypeSuffix值为pdf,商户可通过Base64解码，将返回字符串转化为字节数组，并在本地新建以.pdf格式的文件(其他文件类型类似)，直接写入该文件即可） | [optional] 
**fileTypeSuffix** | **string** | 如果返回的是zip,则需解析为压缩包文件可选项如下:&lt;br&gt;pdf:pdf文件&lt;br&gt;zip:zip文件 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


