# YopInvoiceDetailInfoRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**goodsLineNature** | **int** |  | 
**goodsTaxName** | **string** |  | 
**goodsTaxCode** | **string** |  | 
**goodsSpecification** | **string** |  | [optional] 
**goodsUnit** | **string** |  | [optional] 
**goodsQuantity** | **float** |  | [optional] 
**unitPrice** | **float** |  | [optional] 
**goodsTotalAmount** | **float** |  | 
**goodsTaxRate** | **float** |  | 
**freeTaxMark** | **int** |  | [optional] 
**favorablePolicySign** | **int** | &lt;p&gt;0：不使用 1：使用&lt;/p&gt; | [optional] 
**favorablePolicy** | **string** | &lt;p&gt;枚举：简易征收、稀土产品、免税、不征税、先征后退、100%先征后退、50%先征后退、按3%简易征收、按5%简易征收、按5%简易征收减按1.5%计征、即征即退30%、即征即退50%、即征即退70%、即征即退100%、超税负3%即征即退、超和免费8%即征即退、超税负12%即征即退、超税负6%即征即退(当favorablePolicySign为1时,此项有值)&lt;/p&gt; | [optional] 
**refinedOilInfo** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\RefinedOilInfo**](RefinedOilInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


