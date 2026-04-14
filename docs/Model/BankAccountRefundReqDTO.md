# BankAccountRefundReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**refundFlowNo** | **string** | &lt;p&gt;商户退回请求号&lt;br /&gt;由商户自定义生成&lt;/p&gt; | 
**bankSerialNo** | **string** | &lt;p&gt;银行流水号,入金通知里对应的银行流水号&lt;/p&gt; | 
**bankCode** | **string** | &lt;p&gt;开户银行编码&lt;/p&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;p&gt;SMB_LARGE&lt;/p&gt; | 
**bankAccountBookNo** | **string** | &lt;p&gt;缴费账户号&lt;/p&gt; | 
**refundAmount** | **float** | &lt;p&gt;退回金额&lt;br /&gt;单位：元（RMB）&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;p&gt;商户通知地址，不传则不通知回调内容请查看结果通知&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


