# IssueInvoiceDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalPriceTax** | **float** | &lt;p&gt;异步返参，字段类型及长度：decimal(10,2)&lt;/p&gt; | [optional] 
**invoiceStatus** | **string** | &lt;p&gt;异步返参&lt;br /&gt;可选项如下:&lt;br /&gt;WAIT_REVIEW:待复核&lt;br /&gt;UNDERWAY:开票中&lt;br /&gt;SUCCESS:已成功&lt;br /&gt;FAIL:已失败&lt;br /&gt;CORRECT:已冲红&lt;br /&gt;WAIT_INVOICE:待开票&lt;br /&gt;RELATED:已关联&lt;/p&gt; | [optional] 
**isExpress** | **string** | &lt;p&gt;异步返参&lt;br /&gt;可选项如下:&lt;br /&gt;WAIT_MAILED:待邮寄&lt;br /&gt;MAILED:已邮寄&lt;br /&gt;NOTMAILED:未邮寄&lt;/p&gt; | [optional] 
**pdfUrl** | **string** | &lt;p&gt;已开发票url，异步返参&lt;/p&gt; | [optional] 
**pdfUrlCh** | **string** | &lt;p&gt;冲红发票url，异步返参&lt;/p&gt; | [optional] 
**log** | **string** | &lt;p&gt;异步返参（只有在取消开票的时候异步返参才会有值）&lt;/p&gt; | [optional] 
**expressCompany** | **string** | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 
**expressNumber** | **string** | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


