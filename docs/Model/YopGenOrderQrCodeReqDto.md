# YopGenOrderQrCodeReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;p&gt;只能是大小写字母和数字，最小长度：20位，最大长度：40位。&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;开票企业在易宝侧进件时的商编，开票税号为进件时的税号&lt;/p&gt; | 
**invoiceType** | **int** | &lt;p&gt;1-数电票（增值税专用发票） 2-数电票（普通发票）&lt;/p&gt; | [optional] 
**priceTaxMark** | **int** | &lt;p&gt;0-都不含税 1-都含税&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Oddndmq0noammpxtoP9cbnx0nAv\&quot;&gt;TaxationType为1，即差额征税，此处传1&lt;/div&gt; &lt;/div&gt; | 
**taxationType** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;仅支持传1，即差额征税-差额开票&lt;/span&gt;&lt;/div&gt; | [optional] 
**digitalAccount** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt; &lt;div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt;电子税局手机号，不传取数电发票服务激活时预留的手机号&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**remarks** | **string** |  | [optional] 
**contactPhone** | **string** | &lt;p&gt;填写后，将展示在开票失败结果页及开票二维码失效页面下方&lt;/p&gt; | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeDetailReqDto[]**](YopGenOrderQrCodeDetailReqDto.md) | &lt;p&gt;支持传入多行&lt;br /&gt;TaxationType为1，即差额征税-差额开票，则仅支持一行明细&lt;/p&gt; | 
**balanceInfoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitApplyRecordsBalanceInfoReqDto[]**](YopInvoiceDigitApplyRecordsBalanceInfoReqDto.md) |  | [optional] 
**sellerAddress** | **string** |  | [optional] 
**sellerTel** | **string** |  | [optional] 
**sellerBankName** | **string** |  | [optional] 
**sellerBankAccount** | **string** |  | [optional] 
**callBackUrl** | **string** |  | [optional] 
**invoiceSpecialMark** | **string** | &lt;div data-page-id&#x3D;\&quot;YRVWdk667ouqtuxhz7fcwNXznQe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BdujdJlKyone2PxWBUIcNdedn8c\&quot;&gt;&lt;em&gt;枚举值，&lt;/em&gt; &lt;em&gt;00-普通发票,01-成品油，不传默认00-普通发票&lt;/em&gt;&lt;/div&gt; &lt;/div&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerBankInfo** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displaySellerAddTel** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerBankInfo** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 
**displayBuyerAddTel** | **string** | &lt;p&gt;枚举值：N-不展示,Y-展示&lt;/p&gt; 可选项如下: Y:展示 N:不展示 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


