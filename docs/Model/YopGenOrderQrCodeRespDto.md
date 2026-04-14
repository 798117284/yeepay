# YopGenOrderQrCodeRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** |  | [optional] 
**orderNo** | **string** |  | [optional] 
**merchantNo** | **string** |  | 
**orderQrCode** | **string** |  | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoiceType** | **int** | &lt;div&gt; &lt;pre&gt;发票类型:1-数电票(增值税专用发票),2-数电票(普通发票)&lt;/pre&gt; &lt;/div&gt; | 
**priceTaxMark** | **int** | &lt;p&gt;0-都不含税 1-都含税&lt;/p&gt; | 
**taxationType** | **string** | &lt;p&gt;仅支持1-差额征税-差额开票&lt;/p&gt; | [optional] 
**digitalAccount** | **string** | &lt;div&gt; &lt;pre&gt;电子税局登录账号格式：必填且长度不能超过11位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**remarks** | **string** |  | [optional] 
**contactPhone** | **string** |  | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeDetailRespDto[]**](YopGenOrderQrCodeDetailRespDto.md) |  | 
**balanceInfoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitApplyRecordsBalanceInfoReqDto[]**](YopInvoiceDigitApplyRecordsBalanceInfoReqDto.md) |  | [optional] 
**sellerAddress** | **string** |  | [optional] 
**sellerTel** | **string** |  | [optional] 
**sellerBankName** | **string** |  | [optional] 
**sellerBankAccount** | **string** |  | [optional] 
**callBackUrl** | **string** |  | [optional] 
**invoiceSpecialMark** | **string** | &lt;p&gt;枚举值：00-普通发票,01-成品油，不传默认00-普通发票&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerBankInfo** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerAddTel** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerBankInfo** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerAddTel** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


