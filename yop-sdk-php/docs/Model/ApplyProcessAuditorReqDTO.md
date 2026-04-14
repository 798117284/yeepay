# ApplyProcessAuditorReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auditMethod** | **string** | &lt;p&gt;SMS: 短信验证码&lt;/p&gt; | 
**auditBiz** | **string** | &lt;p&gt;REMIT: 付款&lt;/p&gt; &lt;p&gt;TRANSFER: 转账&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**auditType** | **string** | &lt;div&gt; &lt;pre&gt;INTERFACE: 接口&lt;/pre&gt; &lt;/div&gt; | 
**processType** | **string** | &lt;div&gt; &lt;pre&gt;OPEN: 开启&lt;br /&gt;CLOSE: 关闭&lt;/pre&gt; &lt;/div&gt; | 
**merchantNo** | **string** | &lt;p&gt;交易发起主体商编&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


