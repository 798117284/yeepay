# XwbOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notifySmsUrl** | **string** | &lt;p&gt;开户申请银行审核后通知到该地址，商户接收后发起申请短验，通知内容请参照页签&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;开立银行账户-申请短验通知&lt;/a&gt;&lt;/p&gt; | 
**bindCardType** | **string** | 可选项如下:&lt;br&gt;PUBLIC_CARD:对公卡&lt;br&gt;PRIVATE_CARD:对私卡 | 
**bindAccountName** | **string** | 绑卡银行账户名称 | 
**bindCardNo** | **string** | 绑定银行卡号 | 
**bindBankCode** | **string** | 绑定银行编码 | 
**bindCardMobileNo** | **string** | &lt;p&gt;绑定卡手机号&lt;/p&gt; | [optional] 
**businessScope** | **string** | 经营范围 | 
**businessValidStart** | **string** | &lt;p&gt;参数格式为yyyyMMdd&lt;/p&gt; | [optional] 
**businessValidEnd** | **string** | &lt;p&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | [optional] 
**legalMobile** | **string** | 法人手机号码 | 
**contactName** | **string** | &lt;p&gt;用于开户过程中做短验申请和确认使用&lt;/p&gt; | [optional] 
**contactMobile** | **string** | 法人和联系人非同一人时，手机号不能是同一个 | 
**contactCardNo** | **string** | 短验联系人证件号码 | 
**contactCardImageFont** | **string** | &lt;p&gt;短验联系人证件照片正面地址&lt;/p&gt; | [optional] 
**contactCardImageBack** | **string** | &lt;p&gt;短验联系人件照片反面地址&lt;/p&gt; | [optional] 
**contactCardType** | **string** | 可选项如下:&lt;br&gt;ID_CARD:身份证 | 
**magAddress** | **string** | 企业实际经营地址 | 
**caAuthorizationFile** | **string** | 企业CA证书及电子签名授权委托书路径 | 
**legalAuthorizationFile** | **string** | 法人委托授权书 | [optional] 
**address** | **string** | 办公地址 | 
**benefitInfoReqDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[]**](BenefitInfoReqDTO.md) | &lt;p&gt;不能超过4个&lt;/p&gt; | 
**shareHolderInfoList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[]**](ShareHolderInfoReqDTO.md) | 不能超过4个 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


