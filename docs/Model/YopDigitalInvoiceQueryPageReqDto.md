# YopDigitalInvoiceQueryPageReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;div&gt; &lt;pre&gt;请求流水号，必填:最大长度 64&lt;/pre&gt; &lt;/div&gt; | 
**merchantNo** | **string** | &lt;div&gt; &lt;pre&gt;商户商编，长度11&lt;/pre&gt; &lt;/div&gt; | 
**applyNo** | **string** | &lt;div&gt; &lt;pre&gt;开票请求流水号:最大长度 64&lt;/pre&gt; &lt;/div&gt; | [optional] 
**orderNo** | **string** | &lt;div&gt; &lt;pre&gt;开票单号:最大长度 64&lt;/pre&gt; &lt;/div&gt; | [optional] 
**digitalAccount** | **string** | &lt;div&gt; &lt;pre&gt;数电账号:最大长度 11&lt;/pre&gt; &lt;/div&gt; | [optional] 
**digitInvoiceNo** | **string** | &lt;div&gt; &lt;pre&gt;数电发票号码&lt;/pre&gt; &lt;/div&gt; | [optional] 
**beginDate** | **string** | &lt;div&gt; &lt;pre&gt;开票时间-开始时间（yyyy-MM-dd HH:mm:ss）&lt;/pre&gt; &lt;/div&gt; | [optional] 
**endDate** | **string** | &lt;div&gt; &lt;pre&gt;开票时间-结束时间（yyyy-MM-dd HH:mm:ss）&lt;/pre&gt; &lt;/div&gt; | [optional] 
**pageSize** | **int** | &lt;div&gt; &lt;pre&gt;查询第几页数据,默认第一页&lt;/pre&gt; &lt;/div&gt; | [optional] 
**pageNum** | **int** | &lt;div&gt; &lt;pre&gt;每页多少条数据[1,100]，默认10条&lt;/pre&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


