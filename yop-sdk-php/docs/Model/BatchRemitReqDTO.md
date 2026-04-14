# BatchRemitReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** |  | 
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**batchNo** | **string** | 批次号，由商户自定义生成，需保证唯一 | 
**receiveType** | **string** | 可选项如下:&lt;br&gt;REAL_TIME:实时&lt;br&gt;TWO_HOUR:两小时&lt;br&gt;NEXT_DAY:次日 | 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitDetailDTO[]**](RemitDetailDTO.md) |  | 
**notifyUrl** | **string** | 商户通知地址，不传则不通知回调内容请参看：&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/bzshsfk/spis/5f3a5d8d88ac9d001cb3aac8 \&quot;&gt;付款结果通知&lt;/a&gt; | [optional] 
**extInfoDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitExtInfoDTO**](BatchRemitExtInfoDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


