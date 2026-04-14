# StandardOpenAccountRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**merchantName** | **string** | &lt;p&gt;请传商户编号对应的商户签约名，与营业执照保持一致&lt;/p&gt; | 
**openBankCode** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;具体中文释义可联系相关技术支持&lt;br /&gt;&lt;/span&gt;支持选项:&lt;br /&gt;FJHTB&lt;br /&gt;SZPA&lt;br /&gt;JSBCHINA&lt;br /&gt;HXBXB_GATHER&lt;br /&gt;XWB&lt;br /&gt;SUNINGBANK_MULTICHANNEL&lt;br /&gt;SMB_LARGE&lt;br /&gt;WHLHB&lt;br /&gt;XIBX&lt;/div&gt; | 
**openAccountType** | **string** | &lt;p&gt;不送默认为企业，银行编码为HXBXB_GATHER、XWB、SUNINGBANK_MULTICHANNEL、WHLHB时支持个体工商户&lt;/p&gt; 可选项如下: ENTERPRISE:企业 INDIVIDUAL_BUSINESS_TYPE:个体工商户 | [optional] 
**certificateType** | **string** | 可选项如下: BUSINESS_LICENCE:统一社会信用代码（三证合一） NOT_THREE_IN_ONE:非三证合一（营业执照 组织机构代码 税务登记证） | [optional] 
**certificateNo** | **string** | &lt;p&gt;证件号&lt;/p&gt; | [optional] 
**notifyUrl** | **string** | &lt;p&gt;回调内容请参看：&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;开立银行账户结果通知&lt;/a&gt;&lt;/p&gt; | 
**xibOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XibOpenAccountDTO**](XibOpenAccountDTO.md) |  | [optional] 
**htbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\HtbOpenAccountDTO**](HtbOpenAccountDTO.md) |  | [optional] 
**whzbbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\WhzbbOpenAccountDTO**](WhzbbOpenAccountDTO.md) |  | [optional] 
**xwbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XwbOpenAccountDTO**](XwbOpenAccountDTO.md) |  | [optional] 
**hxbxbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\HxbxbOpenAccountDTO**](HxbxbOpenAccountDTO.md) |  | [optional] 
**snMultiChannelOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SnMultiChannelOpenAccountDTO**](SnMultiChannelOpenAccountDTO.md) |  | [optional] 
**smbLargeOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SmbLargeOpenAccountDTO**](SmbLargeOpenAccountDTO.md) |  | [optional] 
**whlhbBankAccountOpenDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountOpenWhlhbDTO**](BankAccountOpenWhlhbDTO.md) |  | [optional] 
**xwbzOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XwbzOpenAccountDTO**](XwbzOpenAccountDTO.md) |  | [optional] 
**xibMultiChannelOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountOpenXibMultiChannelDTO**](BankAccountOpenXibMultiChannelDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


