# YopDigitalInvoicePageQueryListRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoiceApplyStatus** | **string** | &lt;div&gt; &lt;pre&gt;开票状态:opening-开票中,success-开票完成,fail-开票失败,cancel-发票已作废,canceling-发票作废中&lt;/pre&gt; &lt;/div&gt; 可选项如下: opening:开票中 success:开票完成 fail:开票失败 cancel:发票已作废 canceling:发票作废中 | 
**buyerTelephone** | **string** | &lt;div&gt; &lt;pre&gt;购方电话，最大长度40&lt;/pre&gt; &lt;/div&gt; | [optional] 
**priceTaxMark** | **int** | &lt;div&gt; &lt;pre&gt;含税标志，长度1，枚举： 0：不含税 1 含税&lt;/pre&gt; &lt;/div&gt; | [optional] 
**code** | **string** | &lt;p&gt;详见结果码&lt;/p&gt; | [optional] 
**invoiceTime** | **string** | &lt;p&gt;长度20，格式：&lt;/p&gt; &lt;div&gt; &lt;pre&gt;yyyy-MM-dd HH:mm:ss&lt;/pre&gt; &lt;/div&gt; | [optional] 
**invoiceDetailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoicePageQueryDetailRespDto[]**](YopDigitalInvoicePageQueryDetailRespDto.md) | &lt;p&gt;开票明细行集合&lt;/p&gt; | [optional] 
**sellerName** | **string** | &lt;p&gt;最大长度100&lt;/p&gt; | [optional] 
**invoiceTotalTax** | **float** | &lt;div&gt; &lt;pre&gt;合计税额，最大长度16，(小数点后保留2位小数，以元为单位精确到分)&lt;/pre&gt; &lt;/div&gt; | [optional] 
**sellerAddress** | **string** | &lt;p&gt;最大长度100&lt;/p&gt; | [optional] 
**checker** | **string** | &lt;p&gt;最大长度20&lt;/p&gt; | [optional] 
**payee** | **string** | &lt;p&gt;最大长度20&lt;/p&gt; | [optional] 
**digitalAccount** | **string** | &lt;p&gt;长度11位的手机号&lt;/p&gt; | [optional] 
**pdfUrl** | **string** | &lt;p&gt;数电发票版式文件pdfUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**buyerAddress** | **string** | &lt;p&gt;最大长度80&lt;/p&gt; | [optional] 
**digitInvoiceNo** | **string** | &lt;p&gt;最大长度20&lt;/p&gt; | [optional] 
**taxationLabel** | **string** | &lt;div&gt; &lt;pre&gt;征方方式，长度2，枚举：01-全额开票，02-差额开票&lt;/pre&gt; &lt;/div&gt; 可选项如下: 01:全额开票 02:差额开票 | [optional] 
**buyerBankName** | **string** | &lt;p&gt;最大长度80&lt;/p&gt; | [optional] 
**invoiceType** | **int** | &lt;div&gt; &lt;pre&gt;发票类型发票种类编码，最大长度2，枚举:01-数电票(增值税专用发票),02-数电票(普通发票)&lt;/pre&gt; &lt;/div&gt; | [optional] 
**taxNo** | **string** | &lt;p&gt;15、17、18、20位 大写字母和数字&lt;/p&gt; | [optional] 
**orderDateTime** | [**\DateTime**](\DateTime.md) | &lt;div&gt; &lt;pre&gt;申请开票时间，最大长度20，格式：yyyy-MM-dd HH:mm:ss&lt;/pre&gt; &lt;/div&gt; | [optional] 
**serviceMerchantNo** | **string** | &lt;p&gt;最大长度32&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;最大长度64&lt;/p&gt; | [optional] 
**buyerTaxNo** | **string** | &lt;p&gt;15、17、18、20位 大写字母和数字&lt;/p&gt; | [optional] 
**sellerPhone** | **string** | &lt;p&gt;最大长度18&lt;/p&gt; | [optional] 
**drawer** | **string** | &lt;p&gt;最大长度20&lt;/p&gt; | [optional] 
**invoiceSpecialMark** | **string** | &lt;div&gt; &lt;pre&gt;特定要素类型，最大长度2，默认:00-普通发票&lt;/pre&gt; &lt;/div&gt; 可选项如下: 00:普通发票 | [optional] 
**msg** | **string** | &lt;p&gt;开票结果信息&lt;/p&gt; | [optional] 
**buyerName** | **string** | &lt;p&gt;最大长度100&lt;/p&gt; | [optional] 
**invoiceListMark** | **int** | &lt;div&gt; &lt;pre&gt;清单标志，最大长度1，枚举：(0-普通发票;1-普通发票(清单))&lt;/pre&gt; &lt;/div&gt; | [optional] 
**invoiceTotalPriceTax** | **float** | &lt;div&gt; &lt;pre&gt;合计金额，最大长度16，(小数点后保留2位小数，以元为单位精确到分)&lt;/pre&gt; &lt;/div&gt; | [optional] 
**xmlUrl** | **string** | &lt;p&gt;数电发票版式文件xmlUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**sellerBankNumber** | **string** | &lt;p&gt;最大长度50&lt;/p&gt; | [optional] 
**naturalMark** | **string** | &lt;div&gt; &lt;pre&gt;购方自然人标志，最大长度1，枚举:0-否(默认),1-是&lt;/pre&gt; &lt;/div&gt; 可选项如下: 0:否 1:是 | [optional] 
**ofdUrl** | **string** | &lt;p&gt;数电发票版式文件ofdUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**buyerBankNumber** | **string** | &lt;p&gt;最大长度50&lt;/p&gt; | [optional] 
**applyNo** | **string** | &lt;p&gt;最大长度64&lt;/p&gt; | [optional] 
**invoiceTypeCode** | **string** | &lt;div&gt; &lt;pre&gt;发票类型发票种类编码，最大长度2，枚举:01-数电票(增值税专用发票),02-数电票(普通发票)&lt;/pre&gt; &lt;/div&gt; 可选项如下: 01:数电票(增值税专用发票) 02:数电票(普通发票) | [optional] 
**sellerBankName** | **string** | &lt;div&gt; &lt;pre&gt;销方银行名称，最大长度80&lt;/pre&gt; &lt;/div&gt; | [optional] 
**statusUpdateTime** | **string** | &lt;div&gt; &lt;pre&gt;发票状态更新时间，最大长度20，格式：yyyy-MM-dd HH:mm:ss&lt;/pre&gt; &lt;/div&gt; | [optional] 
**remarks** | **string** | &lt;p&gt;最大长度200&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;最大长度32&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


