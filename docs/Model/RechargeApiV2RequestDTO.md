# RechargeApiV2RequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | 易宝支付分配的的商户唯一标识 | 
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**requestNo** | **string** |  | 
**payType** | **string** | 可选项如下:&lt;br&gt;BANK_TRANSFER:银行汇款&lt;br&gt;B2C:网银B2C&lt;br&gt;B2B:网银B2B&lt;br&gt;BANK_PAY:银行扣款&lt;br&gt;QUICK_PUBLIC:对公快捷 | 
**amount** | **float** |  | 
**accountType** | **string** | 默认为FUND_ACCOUNT&lt;br&gt;可选项如下:&lt;br&gt;FUND_ACCOUNT:资金账户&lt;br&gt;FEE_ACCOUNT:手续费账户&lt;br&gt;MARKET_ACCOUNT:营销账户 | [optional] [default to 'FUND_ACCOUNT']
**remark** | **string** |  | [optional] 
**notifyUrl** | **string** | 商户通知地址，不传则不通知回调内容请参看：&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;结果通知&lt;/a&gt; | [optional] 
**macAddress** | **string** | 设备mac地址 | [optional] 
**feeType** | **string** | 默认为OUTER&lt;br&gt;可选项如下:&lt;br&gt;OUTER:外扣&lt;br&gt;INTER:内扣 | [optional] [default to 'OUTER']
**requestExtParams4NetPay** | [**\Yeepay\Yop\Sdk\Service\Account\Model\EBankRequestDTO**](EBankRequestDTO.md) |  | [optional] 
**requestExtParams4BankPay** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankPayRequestDTO**](BankPayRequestDTO.md) |  | [optional] 
**quickPublicRequestDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\QuickPublicRequestDTO**](QuickPublicRequestDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


