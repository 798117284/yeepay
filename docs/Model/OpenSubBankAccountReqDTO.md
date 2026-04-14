# OpenSubBankAccountReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**merchantAccountUid** | **string** | &lt;p&gt;商户侧记账簿编号，数字、字母、下划线组合&lt;/p&gt; | 
**bankCode** | **string** | &lt;p&gt;开户银行编码&lt;/p&gt; &lt;p&gt;可选项如下：&lt;/p&gt; &lt;p&gt;SMB_LARGE&lt;/p&gt; | 
**bankAccountNo** | **string** | &lt;p&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/p&gt; | 
**payerAccountName** | **string** | &lt;p&gt;付款方账户名称（开通标准版产品时，该字段必填）&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


