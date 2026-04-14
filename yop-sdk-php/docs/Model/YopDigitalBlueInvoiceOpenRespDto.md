# YopDigitalBlueInvoiceOpenRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** |  | 
**orderNo** | **string** | &lt;div data-page-id&#x3D;\&quot;Yk5UdC2OgoOZWJxqBuCcw7CSnub\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-HIFldj39GoucegxFENeccwMFnEg\&quot;&gt;易宝侧生成的开票单号&lt;/div&gt; &lt;/div&gt; | 
**merchantNo** | **string** |  | 
**invoiceType** | **int** | &lt;p&gt;枚举：1-数电票(增值税专用发票),2-数电票(普通发票)&lt;/p&gt; | 
**buyerAddress** | **string** |  | [optional] 
**buyerBankAccount** | **string** |  | [optional] 
**buyerBankName** | **string** |  | [optional] 
**buyerName** | **string** |  | [optional] 
**buyerNaturalPersonTag** | **string** | 可选项如下: 0:否 1:是 | 
**buyerTaxNo** | **string** |  | [optional] 
**buyerTel** | **string** |  | [optional] 
**priceTaxMark** | **int** | &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-C4xedoCGToyvzwxIIVFcKdHFnVg\&quot;&gt;&amp;nbsp;0：不含税 1 含税&lt;/div&gt; &lt;/div&gt; | [optional] 
**taxationType** | **string** | &lt;p&gt;仅支持1-差额征税-差额开票&lt;/p&gt; | [optional] 
**digitalAccount** | **string** | &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-F39sdbrABomRdox6yR0c3B4pnDc\&quot;&gt;电子税局手机号&lt;/div&gt; &lt;/div&gt; | [optional] 
**remarks** | **string** |  | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDetailInfoRespDto[]**](YopInvoiceDetailInfoRespDto.md) |  | 
**balanceInfoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitApplyRecordsBalanceInfoReqDto[]**](YopInvoiceDigitApplyRecordsBalanceInfoReqDto.md) |  | [optional] 
**sellerAddress** | **string** |  | [optional] 
**sellerTel** | **string** |  | [optional] 
**sellerBankName** | **string** |  | [optional] 
**sellerBankAccount** | **string** |  | [optional] 
**callBackUrl** | **string** |  | [optional] 
**invoiceSpecialMark** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-RAS0duUp1oTvX9xlxT6cFX1nnWg\&quot;&gt;枚举值： &lt;em&gt;00-普通发票,01-成品油，不传默认00-普通发票&lt;/em&gt;&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerBankInfo** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-R4wWdJSH6oS6WixNgJkcAwCHnCe\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerAddTel** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BM6Xd1DZjoMcosxonF0cwBKanAj\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerBankInfo** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VzsHd3ItLo0ieHxpcIHcaCpNnKc\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerAddTel** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-W258dGWQtoj7jAxJ2EGcqiEGnye\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**paymentMerchantId** | **string** | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;true\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Q1lddBxDTovWdUxupGtcqmXinAc\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WRl1dkAaYoMYLSxZQmfcpwefn9e\&quot;&gt;如支付信息列表超过2条，则需要传入微信商户号（需传入乐企授权过的微信商户号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OOnQdaM32oz26rxdHQycpOwOngc\&quot;&gt;注意：如支付信息列表中存在微信渠道，则微信支付商户号需与该渠道支付订单号有对应关系，且需完成乐企联用授权&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**paymentList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoicePaymentInfoReqDto[]**](YopInvoicePaymentInfoReqDto.md) | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-TvBIdDkFqoy0W0xLSRTcI3qPnrd\&quot;&gt;使用乐企联用开票时必填&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


