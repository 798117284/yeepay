# AccountBookCreateRequestDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;发起申请记账簿的商户编号&lt;/p&gt; | 
**merchantAccountBookNo** | **string** | &lt;p&gt;数字、字母、下划线组合&lt;/p&gt; | 
**merchantAccountBookName** | **string** | &lt;p&gt;非必填，字符长度须小于等于50(记账簿收款使用&amp;ldquo;记账薄预收款_银行汇款_标准版&amp;rdquo;时，开立记账簿时必须传入&amp;ldquo;记账簿名称&amp;rdquo;)&lt;/p&gt; | [optional] 
**accountBookType** | **string** | &lt;p&gt;记账薄类型（绑卡列表不为空时，该项必填 ）&lt;/p&gt; 可选项如下: BUSINESS:企业 PERSON:个人 | [optional] 
**certificateType** | **string** | &lt;p&gt;证件类型（绑卡列表不为空时，该项必填 ）&lt;/p&gt; 可选项如下: BIZ_LICENSEES:统一信用代码 ID_CARD:身份证 | [optional] 
**certificateNo** | **string** | &lt;p&gt;证件号（绑卡列表不为空时，该项必填 ）&lt;/p&gt; | [optional] 
**bindCardList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardDTO[]**](BindCardDTO.md) | &lt;p&gt;绑卡信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


