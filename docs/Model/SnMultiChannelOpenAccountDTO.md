# SnMultiChannelOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bindCardType** | **string** | &lt;pre&gt;openAccountType为ENTERPRISE时必填，&lt;/pre&gt; &lt;pre&gt;绑定卡类型，只支持对公银行账户：PUBLIC_CARD&lt;/pre&gt; | [optional] 
**bindCardNo** | **string** | &lt;p&gt;openAccountType为ENTERPRISE时必填，&lt;/p&gt; &lt;p&gt;绑定银行卡号&lt;/p&gt; | [optional] 
**bindBankCode** | **string** | &lt;p&gt;openAccountType为ENTERPRISE时必填，&lt;/p&gt; &lt;pre&gt;绑定银行编码,详见&lt;a href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83?sheet&#x3D;Cn65To\&quot; data-eleid&#x3D;\&quot;32\&quot; data-lark-is-custom&#x3D;\&quot;true\&quot; data-lark-link&#x3D;\&quot;true\&quot;&gt;【总行信息管理】&lt;/a&gt;&lt;/pre&gt; | [optional] 
**bindAccountName** | **string** | &lt;p&gt;openAccountType为ENTERPRISE时必填，&lt;/p&gt; &lt;pre&gt;绑定账户名称&lt;/pre&gt; | [optional] 
**branchBankNo** | **string** | &lt;p&gt;openAccountType为ENTERPRISE时必填，&lt;/p&gt; &lt;p&gt;支行行号&lt;/p&gt; | [optional] 
**socialCreditCodeImageUrl** | **string** | &lt;pre&gt;营业执照图片&lt;/pre&gt; | [optional] 
**legalMobileNo** | **string** | &lt;pre&gt;法人手机号&lt;/pre&gt; | 
**operatorName** | **string** | &lt;pre&gt;经办人姓名&lt;/pre&gt; | 
**mobileNo** | **string** | &lt;pre&gt;经办人手机号&lt;/pre&gt; | 
**legalCardImageFont** | **string** | &lt;pre&gt;法人证件照片正面&lt;/pre&gt; | [optional] 
**legalCardImageBack** | **string** | &lt;pre&gt;法人证件照片反面&lt;/pre&gt; | [optional] 
**benefitDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBenefitInfoSnDTO[]**](BankAccountBenefitInfoSnDTO.md) | &lt;p&gt;受益人信息&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


