# TransferAuditVerifySmsRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**fromMerchantNo** | **string** | &lt;p&gt;转出方商户编号&lt;/p&gt; | 
**requestNo** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt;商户请求号&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;1\&quot; data-line&#x3D;\&quot;true\&quot;&gt;商户请求号和易宝转账订单号二选一必填&lt;/div&gt; | [optional] 
**orderNo** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt;易宝转账订单号&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;1\&quot; data-line&#x3D;\&quot;true\&quot;&gt;商户请求号和易宝转账订单号二选一必填&lt;/div&gt; | [optional] 
**smsCode** | **string** | &lt;p&gt;短信验证码&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


