# AccountBookPaymentRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | 商户编号收单主体商编 | 
**ypAccountBookNo** | **string** | 记账薄编号 | 
**orderInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OrderInfoDtoV2**](OrderInfoDtoV2.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


