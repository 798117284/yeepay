# MerchantSettleWayQueryYOPDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settleWay** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;BANKCARD:结算至银行卡&lt;br /&gt;ACCOUNT:结算至资金账户&lt;br /&gt;BANKACCOUNT:结算至合作银行&lt;/p&gt; | [optional] 
**settleRatio** | **double** | &lt;p&gt;该结算方向对应的结算比例。单位：%，两位小数。如返回80.00，则表示结算资金的80.00%（四舍五入后保留两位小数）将结算至相应结算方向。&lt;/p&gt; | [optional] 
**bankCardNo** | **string** | &lt;p&gt;结算方向为结算到银行卡/合作银行时返回&lt;/p&gt; | [optional] 
**accountName** | **string** | &lt;p&gt;结算方向为结算到银行卡/合作银行时返回&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


