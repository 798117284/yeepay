# AuthReportDetailResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tradeId** | **string** | 交易标识号 | [optional] 
**transactionType** | **string** | 可选项如下:&lt;br&gt;CONSUMPTION:消费&lt;br&gt;REFUND:退货&lt;br&gt;CONSUMPTION_FAIL:消费失败 | [optional] 
**transactionTime** | [**\DateTime**](\DateTime.md) | 交易时间 | [optional] 
**swipeCardAmount** | **float** | 刷卡金额 | [optional] 
**swipeCardCurrency** | **string** | 刷卡币种 | [optional] 
**transactionAmount** | **float** | 交易金额 | [optional] 
**transactionCurrency** | **string** | 交易币种 | [optional] 
**merchantName** | **string** | 收款商户名 | [optional] 
**merchantCity** | **string** | 收款方城市 | [optional] 
**merchantCountryName** | **string** | 收款方国家 | [optional] 
**mcc** | **string** | mcc | [optional] 
**status** | **string** | &lt;p&gt;描述：PROCESS处理中，SUCCESS处理成功&lt;/p&gt; | [optional] 
**configFee** | **float** | &lt;p&gt;商户配置手续费&lt;/p&gt; | [optional] 
**cnyAmount** | **float** | &lt;p&gt;人民币金额&lt;/p&gt; | [optional] 
**transOrderNo** | **string** | &lt;p&gt;交易订单号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


