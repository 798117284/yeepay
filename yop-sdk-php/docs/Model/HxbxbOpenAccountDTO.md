# HxbxbOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deviceIp** | **string** | &lt;p&gt;设备IP&lt;/p&gt; | [optional] 
**deviceMac** | **string** | &lt;p&gt;设备Mac地址&lt;/p&gt; | [optional] 
**businessScope** | **string** | &lt;p&gt;经营范围&lt;/p&gt; | 
**magAddress** | **string** | &lt;p&gt;企业实际经营地址&lt;/p&gt; | 
**contactName** | **string** | &lt;p&gt;联系人姓名&lt;/p&gt; | 
**contactMobile** | **string** | &lt;p&gt;联系人手机号&lt;/p&gt; | 
**contactCardType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;ID_CARD:身份证&lt;/p&gt; | 
**contactCardNo** | **string** | &lt;p&gt;联系人证件号码&lt;/p&gt; | 
**contactCardStartDate** | **string** | &lt;p&gt;参数格式为yyyyMMdd&lt;/p&gt; | [optional] 
**contactCardExpireDate** | **string** | &lt;p&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | [optional] 
**contactCardImageFont** | **string** | &lt;p&gt;联系人证件照片正面地址&lt;/p&gt; | [optional] 
**contactCardImageBack** | **string** | &lt;p&gt;联系人证件照片反面地址&lt;/p&gt; | [optional] 
**legalMobile** | **string** | &lt;p&gt;法人手机号码&lt;/p&gt; | 
**legalLicenceEffectiveDate** | **string** | &lt;p&gt;参数格式为yyyyMMdd&lt;/p&gt; | [optional] 
**legalLicenceExpirationDate** | **string** | &lt;p&gt;参数格式为yyyyMMdd或者forever&lt;/p&gt; | [optional] 
**legalContactAddress** | **string** | &lt;p&gt;法人联系地址&lt;/p&gt; | 
**legalCardImageFont** | **string** | &lt;p&gt;法人证件照片正面地址&lt;/p&gt; | [optional] 
**legalCardImageBack** | **string** | &lt;p&gt;法人证件照片反面地址&lt;/p&gt; | [optional] 
**benefitDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoHxbxbDTO[]**](BenefitInfoHxbxbDTO.md) | &lt;p&gt;开立账户类型为企业时必填且只能填写一个&lt;/p&gt; | [optional] 
**shareholderDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderHxbxbDTO[]**](ShareHolderHxbxbDTO.md) | &lt;p&gt;开立账户类型为企业时必填且只能填写一个&lt;/p&gt; &lt;p&gt;分公司、分店无股东场景下,传入总公司股东&lt;/p&gt; | [optional] 
**storeBusinessInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\StoreBusinessInfoHxbxbDTO**](StoreBusinessInfoHxbxbDTO.md) |  | 
**notifySmsUrl** | **string** | &lt;p&gt;短验通知路径&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


