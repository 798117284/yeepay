# YopInvoiceDetailInfoReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**goodsLineNature** | **int** | &lt;div&gt; &lt;pre&gt;默认值0-正常行:最大长度 1&lt;/pre&gt; &lt;/div&gt; | 
**goodsTaxName** | **string** |  | 
**goodsTaxCode** | **string** |  | 
**goodsSpecification** | **string** |  | [optional] 
**goodsUnit** | **string** | &lt;div&gt; &lt;pre&gt;最大长度 20&lt;/pre&gt; &lt;/div&gt; | [optional] 
**goodsQuantity** | **float** |  | [optional] 
**unitPrice** | **float** | &lt;p&gt;单价：元&lt;/p&gt; &lt;p&gt;如含税标志为0，则此处传入单价（含税）&lt;/p&gt; &lt;p&gt;如含税标志为1，则此处传入单价（不含税）&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;G4pad3lLUopAGuxTyyfcfJuRnIh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CG8jdn7uGocRL3xSKwdcjXuYnmf\&quot;&gt;TaxationType为1，即差额征税，该字段以易宝计算为准，当数量非空时，易宝会为您计算该字段值&lt;/div&gt; &lt;/div&gt; | [optional] 
**goodsTotalAmount** | **float** | &lt;p&gt;最多支持2位小数&lt;/p&gt; &lt;p&gt;含税标志为0，则此处应传入金额（不含税）。此时如单价和数量均有值，则会校验金额（不含税）&#x3D;单价*数量。&lt;/p&gt; &lt;p&gt;含税标志为1，则此处应传入金额（含税）。此时如单价和数量均有值，则会校验金额（含税）&#x3D;单价*数量。&lt;/p&gt; &lt;p&gt;金额（不含税）&#x3D;金额（含税）/（1+税率）&lt;/p&gt; | 
**goodsTaxRate** | **float** | &lt;p&gt;最大长度10，最大支持3位小数&lt;/p&gt; | 
**freeTaxMark** | **int** | &lt;p&gt;默认为空，&lt;/p&gt; &lt;p&gt;如需传非零税率，则参考以下枚举值：1-免税、2-不征税、3-普通零税率&lt;/p&gt; | [optional] 
**favorablePolicySign** | **int** | &lt;div&gt; &lt;pre&gt; 0：不使用 1：使用&lt;/pre&gt; &lt;/div&gt; | [optional] 
**favorablePolicy** | **string** | &lt;p&gt;枚举：简易征收、稀土产品、免税、不征税、先征后退、100%先征后退、50%先征后退、按3%简易征收、按5%简易征收、按5%简易征收减按1.5%计征、即征即退30%、即征即退50%、即征即退70%、即征即退100%、超税负3%即征即退、超和免费8%即征即退、超税负12%即征即退、超税负6%即征即退(当favorablePolicySign为1时,此项必填)&lt;/p&gt; | [optional] 
**refinedOilInfo** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\RefinedOilInfo**](RefinedOilInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


