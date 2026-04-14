# BindClearCardReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankAccountName** | **string** | &lt;p&gt;银行开户账户名称&lt;/p&gt; | 
**branchBankCode** | **string** | &lt;p&gt;开户支行&lt;br /&gt;&lt;a title&#x3D;\&quot;银行信息管理\&quot; href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83?sheet&#x3D;0Smsnm\&quot;&gt;银行信息管理&lt;/a&gt;&lt;/p&gt; | [optional] 
**bankCode** | **string** | &lt;p&gt;银行卡开户总行&lt;br /&gt;&lt;a title&#x3D;\&quot;银行信息管理\&quot; href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83?sheet&#x3D;Cn65To\&quot;&gt;银行信息管理&lt;/a&gt;&lt;/p&gt; | 
**bankCardNo** | **string** | &lt;p&gt;银行卡号&lt;/p&gt; | 
**bankCardType** | **string** | &lt;p&gt;卡类型&lt;br /&gt;PUBLIC_CARD：对公&lt;br /&gt;PRIVATE_CARD：对私&lt;/p&gt; | 
**bankAccountBookNo** | **string** | &lt;p&gt;开立银行清分业务的银行记账本编号 开户成功返回&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户唯一请求号&lt;/p&gt; | 
**bankReservePhone** | **string** | &lt;p&gt;银行开卡预留联系手机号&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;p&gt;回调商户地址&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商编&lt;/p&gt; | 
**openBankCode** | **string** | &lt;p&gt;开户银行编码&lt;/p&gt; &lt;p&gt;SUNINGBANK 苏宁&lt;/p&gt; &lt;p&gt;ECITIC&amp;nbsp; 中信&lt;/p&gt; | 
**protocolVersion** | **string** | &lt;p&gt;中信开户对私绑卡必填&lt;/p&gt; | [optional] 
**protocolVersionNo** | **string** | &lt;p&gt;中信开户对私绑卡必填&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


