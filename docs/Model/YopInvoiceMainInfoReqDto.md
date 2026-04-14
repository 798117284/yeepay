# YopInvoiceMainInfoReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;p&gt;只能是大小写字母和数字，最小长度：20位，最大长度：40位。&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;开票企业在易宝侧进件时的商编，开票税号为进件时的税号&lt;/p&gt; | 
**invoiceType** | **int** | &lt;p&gt;1-数电票（增值税专用发票） 2-数电票（普通发票）&lt;/p&gt; | 
**buyerName** | **string** |  | 
**buyerTaxNo** | **string** |  | [optional] 
**buyerAddress** | **string** |  | [optional] 
**buyerTel** | **string** |  | [optional] 
**buyerBankName** | **string** |  | [optional] 
**buyerBankAccount** | **string** |  | [optional] 
**buyerNaturalPersonTag** | **string** | &lt;p&gt;建议开具界面提供勾选框，让用户选择是否开具给自然人。勾选开具给自然人时，购方名称、税号应为自然人的姓名、身份证号，并置为 1。&lt;/p&gt; 可选项如下: 0:否 1:是 | 
**priceTaxMark** | **int** | &lt;p&gt;0-都不含税 1-都含税，&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Oddndmq0noammpxtoP9cbnx0nAv\&quot;&gt;TaxationType为1，即差额征税，此处传1&lt;/div&gt; &lt;/div&gt; | 
**taxationType** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;仅支持传1，即差额征税-差额开票&lt;/span&gt;&lt;/div&gt; | [optional] 
**digitalAccount** | **string** | &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-BCildOeHBoW1zYxnA0ScR6UNndc\&quot;&gt;电子税局手机号，不传取数电发票服务激活时预留的手机号&lt;/div&gt; &lt;/div&gt; | [optional] 
**remarks** | **string** |  | [optional] 
**sendEmail** | **string** |  | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDetailInfoReqDto[]**](YopInvoiceDetailInfoReqDto.md) | &lt;p&gt;支持传入多行&lt;br /&gt;TaxationType为1，即差额征税-差额开票，则仅支持一行明细&lt;/p&gt; | 
**balanceInfoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitApplyRecordsBalanceInfoReqDto[]**](YopInvoiceDigitApplyRecordsBalanceInfoReqDto.md) |  | [optional] 
**sellerAddress** | **string** |  | [optional] 
**sellerTel** | **string** |  | [optional] 
**sellerBankName** | **string** |  | [optional] 
**sellerBankAccount** | **string** |  | [optional] 
**callBackUrl** | **string** |  | [optional] 
**invoiceSpecialMark** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-RAS0duUp1oTvX9xlxT6cFX1nnWg\&quot;&gt;&lt;em&gt;枚举值：00-普通发票,01-成品油，不传默认00-普通发票&lt;/em&gt;&lt;/div&gt; &lt;/div&gt; 可选项如下: 00:普通发票 01:成品油 | [optional] 
**displaySellerBankInfo** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-LgQsd9dFUokMp8xHH0Tc3mBWnSB\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerAddTel** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-LgQsd9dFUokMp8xHH0Tc3mBWnSB\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerBankInfo** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VzsHd3ItLo0ieHxpcIHcaCpNnKc\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerAddTel** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-W258dGWQtoj7jAxJ2EGcqiEGnye\&quot;&gt;枚举值：N-不展示,Y-展示&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**paymentMerchantId** | **string** | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-WRl1dkAaYoMYLSxZQmfcpwefn9e\&quot;&gt;如支付信息列表超过2条，则需要传入微信商户号（需传入乐企授权过的微信商户号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OOnQdaM32oz26rxdHQycpOwOngc\&quot;&gt;注意：如支付信息列表中存在微信渠道，则微信支付商户号需与该渠道支付订单号有对应关系，且需完成乐企联用授权&lt;/div&gt; &lt;/div&gt; | [optional] 
**paymentList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoicePaymentInfoReqDto[]**](YopInvoicePaymentInfoReqDto.md) | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-TvBIdDkFqoy0W0xLSRTcI3qPnrd\&quot;&gt;使用乐企联用开票时必填&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


