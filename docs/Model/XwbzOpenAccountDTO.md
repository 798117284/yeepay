# XwbzOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notifySmsUrl** | **string** | &lt;p&gt;短验通知路径开户申请银行审核后通知到该地址，商户接收后发起申请短验, 通知内容请参照页签&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;开立银行账户-申请短验通知&lt;/a&gt;&lt;/p&gt; | 
**bindCardType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;PUBLIC_CARD:对公卡&lt;br /&gt;PRIVATE_CARD:对私卡&lt;/p&gt; | 
**bindAccountName** | **string** | &lt;p&gt;绑卡银行账户名称&lt;/p&gt; | 
**bindCardNo** | **string** | &lt;p&gt;绑定银行卡号&lt;/p&gt; | 
**bindBankCode** | **string** | &lt;p&gt;绑定银行编码&lt;/p&gt; | 
**businessScope** | **string** | &lt;p&gt;经营范围&lt;/p&gt; | [optional] 
**businessValidStart** | **string** | &lt;p&gt;参数格式为yyyyMMdd&lt;/p&gt; | 
**businessValidEnd** | **string** | &lt;p&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | 
**legalMobile** | **string** | &lt;p&gt;法人手机号码&lt;/p&gt; | 
**contactName** | **string** | &lt;p&gt;用于开户过程中做短验申请和确认使用&lt;/p&gt; | 
**contactMobile** | **string** | &lt;p&gt;法人和联系人非同一人时，手机号不能是同一个&lt;/p&gt; | 
**contactCardNo** | **string** | &lt;p&gt;短验联系人证件号码&lt;/p&gt; | 
**contactCardImageFont** | **string** | &lt;p&gt;短验联系人证件照片正面地址&lt;/p&gt; | 
**contactCardImageBack** | **string** | &lt;p&gt;短验联系人件照片反面地址&lt;/p&gt; | [optional] 
**contactCardType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;ID_CARD:身份证&lt;/p&gt; | 
**magAddress** | **string** | &lt;p&gt;企业实际经营地址&lt;/p&gt; | 
**caAuthorizationFile** | **string** | &lt;p&gt;企业CA证书及电子签名授权委托书路径&lt;/p&gt; | 
**legalAuthorizationFile** | **string** | &lt;p&gt;法人委托授权书&lt;/p&gt; | [optional] 
**address** | **string** | &lt;p&gt;办公地址&lt;/p&gt; | 
**benefitInfoReqDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[]**](BenefitInfoReqDTO.md) | &lt;p&gt;不能超过4个&lt;/p&gt; | 
**shareHolderInfoList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[]**](ShareHolderInfoReqDTO.md) | &lt;p&gt;不能超过4个&lt;/p&gt; | 
**bindCardMobileNo** | **string** | &lt;div&gt; &lt;pre&gt;绑定卡手机号&lt;/pre&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


