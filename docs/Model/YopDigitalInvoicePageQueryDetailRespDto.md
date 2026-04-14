# YopDigitalInvoicePageQueryDetailRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**goodsTaxRate** | **float** | &lt;p&gt;最大长度10位，小数位最大三位&lt;/p&gt; | [optional] 
**goodsTotalPriceTax** | **float** | &lt;div&gt; &lt;pre&gt;含税金额，最大长度16位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsSimpleName** | **string** | &lt;div&gt; &lt;pre&gt;税收分类编码简称，最大长度100&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsTotalPrice** | **float** | &lt;div&gt; &lt;pre&gt;含税金额，最大长度16位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsLineNature** | **int** | &lt;div&gt; &lt;pre&gt;发票行性质，最大长度1，默认:0-正常行&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsSpecification** | **string** | &lt;div&gt; &lt;pre&gt;规格型号，最大长度40&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsPrice** | **string** | &lt;div&gt; &lt;pre&gt;单价，最大长度16位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**freeTaxMark** | **int** | &lt;div&gt; &lt;pre&gt;零税率标识，最大长度1位，枚举:空,非零税率,1-免税,2-不征税,3-普通零税率&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsQuantity** | **string** | &lt;div&gt; &lt;pre&gt;数量，最大长度16位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsUnit** | **string** | &lt;p&gt;最大长度20&lt;/p&gt; | [optional] 
**goodsTotalTax** | **float** | &lt;div&gt; &lt;pre&gt;税额，最大长度16位&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsCode** | **string** | &lt;div&gt; &lt;pre&gt;税收分类编码，最大长度20&lt;/pre&gt; &lt;/div&gt; | [optional] 
**preferentialMark** | **int** | &lt;div&gt; &lt;pre&gt;优惠政策标识，最大长度1，枚举 0：不使用 1：使用&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsName** | **string** | &lt;div&gt; &lt;pre&gt;商品名称，最大长度90&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsLineNo** | **string** | &lt;div&gt; &lt;pre&gt;发票明细行行号，从1开始的正整数&lt;/pre&gt; &lt;/div&gt; | [optional] 
**vatSpecialManagement** | **string** | &lt;div&gt; &lt;pre&gt;优惠政策名称，最大长度50位&lt;/pre&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


