# YopDigitalInvoiceQueryListRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originalReqId** | **string** | &lt;p&gt;原开票请求流水号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;开票单号&lt;/p&gt; | [optional] 
**merchantNo** | **string** |  | [optional] 
**invoiceType** | **int** | &lt;p&gt;1-数电票（增值税专用发票） 2-数电票（普通发票）&lt;/p&gt; | 
**buyerAddress** | **string** |  | [optional] 
**buyerBankAccount** | **string** |  | [optional] 
**buyerBankName** | **string** |  | [optional] 
**buyerName** | **string** |  | [optional] 
**buyerNaturalPersonTag** | **string** | 可选项如下: 0:否 1:是 | [optional] 
**buyerTaxNo** | **string** |  | [optional] 
**buyerTel** | **string** |  | [optional] 
**sellerName** | **string** |  | 
**taxNo** | **string** |  | 
**sellerAddress** | **string** |  | [optional] 
**sellerPhone** | **string** |  | [optional] 
**sellerBankName** | **string** |  | [optional] 
**sellerBankNumber** | **string** |  | [optional] 
**invoiceTotalAmount** | **float** | &lt;p&gt;合计金额（含税）&lt;/p&gt; | 
**taxAmount** | **float** |  | [optional] 
**priceTaxMark** | **int** | &lt;p&gt;0-都不含税 1-都含税&lt;/p&gt; | [optional] 
**taxationType** | **string** | &lt;p&gt;仅支持1-差额征税-差额开票&lt;/p&gt; | [optional] 
**digitalAccount** | **string** | &lt;p&gt;电子税局手机号&lt;/p&gt; | [optional] 
**invoiceApplyStatus** | **string** | &lt;p&gt;开票状态&lt;/p&gt; 可选项如下: opening:开票中 success:开票完成 fail:开票失败 | 
**invoiceErrMsg** | **string** |  | [optional] 
**invoiceTime** | **string** | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**digitInvoiceNo** | **string** |  | [optional] 
**xmlUrl** | **string** | &lt;p&gt;数电发票版式文件xmlUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**pdfUrl** | **string** | &lt;p&gt;数电发票版式文件pdfUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**ofdUrl** | **string** | &lt;p&gt;数电发票版式文件ofdUrl地址，最大长度1000&lt;/p&gt; | [optional] 
**remarks** | **string** | &lt;p&gt;最大长度200&lt;/p&gt; | [optional] 
**invoiceDetailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryDetailRespDto[]**](YopDigitalInvoiceQueryDetailRespDto.md) | &lt;p&gt;开票明细行集合&lt;/p&gt; | [optional] 
**balanceInfoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitApplyRecordsBalanceInfoReqDto[]**](YopInvoiceDigitApplyRecordsBalanceInfoReqDto.md) |  | [optional] 
**redChong** | **string** | 可选项如下: unRed:未冲红 allRed:已冲红 reding:冲红中 | [optional] 
**openType** | **int** | &lt;p&gt;开票类型:1-蓝票,2-红票&lt;/p&gt; | [optional] 
**paymentMerchantId** | **string** | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WRl1dkAaYoMYLSxZQmfcpwefn9e\&quot;&gt;如支付信息列表超过2条，则需要传入微信商户号（需传入乐企授权过的微信商户号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OOnQdaM32oz26rxdHQycpOwOngc\&quot;&gt;注意：如支付信息列表中存在微信渠道，则微信支付商户号需与该渠道支付订单号有对应关系，且需完成乐企联用授权&lt;/div&gt; &lt;/div&gt; | [optional] 
**paymentList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoicePaymentInfoReqDto[]**](YopInvoicePaymentInfoReqDto.md) | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-TvBIdDkFqoy0W0xLSRTcI3qPnrd\&quot;&gt;使用乐企联用开票时必填&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


