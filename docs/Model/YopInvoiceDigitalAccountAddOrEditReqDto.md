# YopInvoiceDigitalAccountAddOrEditReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;div&gt; &lt;pre&gt;只能是大小写字母和数字,最小长度20位 最大长度 40位&lt;/pre&gt; &lt;/div&gt; | 
**merchantNo** | **string** | &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FshBdcwwdo5inJxdqfCcsHRnnLN\&quot;&gt;需要新增开票员的商户编号&lt;/div&gt; &lt;/div&gt; | 
**operationType** | **string** | 可选项如下: 0:新增 1:修改 | 
**digitalAccount** | **string** | &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-GF6KdrmYJoqAlDx9eFLcwmh6nre\&quot;&gt;新增时，开票员手机号如与易宝已有的手机号一致，则会报错：开票员已存在&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-GgyAdoky0oXhcJxPDsxc2jePnbc\&quot;&gt;修改时，如开票员手机号未在易宝已有的手机号中存在，则会报错：开票员不存在&lt;/div&gt; &lt;/div&gt; | 
**taxLoginPwd** | **string** |  | [optional] 
**taxLoginRole** | **string** | 可选项如下: 1:开票员 4:财务负责人 5:法定代表人 | [optional] 
**merchantDefaultFlag** | **string** | &lt;p&gt;如传【是】，则后续开票时，开票员不传入，取新增开票员信息&lt;br /&gt;当操作类型为1-修改时，仅支持传1，即只支持将非默认开票员修改为默认开票员&lt;/p&gt; 可选项如下: 1:是 0:否 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


