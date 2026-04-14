# ApplyInvoiceYOPResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | &lt;p&gt;同步返参、异步返参都有&lt;/p&gt; | 
**customerRequestNo** | **string** | &lt;p&gt;同步返参、异步返参都有&lt;/p&gt; | 
**code** | **string** | &lt;p&gt;同步返参&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;同步返参&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;同步返参。开票成功的情况下返回SUCCESS，开票失败或出现异常的情况下返回FAIL。&lt;/p&gt; | [optional] 
**createDate** | [**\DateTime**](\DateTime.md) | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 
**chargingDateStart** | [**\DateTime**](\DateTime.md) | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 
**chargingDateEnd** | [**\DateTime**](\DateTime.md) | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 
**chargingMode** | **string** | &lt;p&gt;异步返参&lt;br /&gt;可选项如下:&lt;br /&gt;REAL_TIME:实收&lt;br /&gt;UN_REAL_TIME:后收&lt;br /&gt;PREPAID_REAL:预付实扣&lt;/p&gt; | [optional] 
**invoiceForm** | **string** | &lt;p&gt;异步返参&lt;br /&gt;可选项如下:&lt;br /&gt;E_INVOICE:电子发票&lt;br /&gt;P_INVOICE:纸质发票&lt;/p&gt; | [optional] 
**amount** | **float** | &lt;p&gt;异步返参，字段类型及长度：decimal(12,2)&lt;/p&gt; | [optional] 
**notifyType** | **string** | &lt;p&gt;异步返参，用于区分异步返参，申请、冲红、或取消发票&lt;br /&gt;可选项如下:&lt;br /&gt;NOTIFY_APPLY:申请开票异步通知&lt;br /&gt;NOTIFY_CANCEL:取消开票异步通知&lt;br /&gt;NOTIFY_CORRECT:冲红发票异步通知&lt;br /&gt;NOTIFY_QUERY:查询开票记录&lt;/p&gt; | [optional] 
**invoiceMajor** | **string** | &lt;div data-page-id&#x3D;\&quot;QnlZd5qvsogo1Axs1KUcziXYnAh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;true\&quot;&gt; &lt;div&gt; &lt;table class&#x3D;\&quot;ace-table\&quot; data-ace-table-col-widths&#x3D;\&quot;321\&quot;&gt;&lt;colgroup&gt;&lt;col width&#x3D;\&quot;321\&quot; /&gt;&lt;/colgroup&gt; &lt;tbody&gt; &lt;tr&gt; &lt;td colspan&#x3D;\&quot;1\&quot; rowspan&#x3D;\&quot;1\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FjePdG23DoE4HSx4tnwcELcBnCd\&quot;&gt;发票开具方：&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FjePdG23DoE4HSx4tnwcELcBnCd\&quot;&gt;YP-易宝支付;&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FjePdG23DoE4HSx4tnwcELcBnCd\&quot;&gt;QQYX-麒麒远行&lt;/div&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/tbody&gt; &lt;/table&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**issueInvoiceDtoList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\IssueInvoiceDTO[]**](IssueInvoiceDTO.md) | &lt;p&gt;异步返参&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


