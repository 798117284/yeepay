# SettleWayRatioDetailDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settleWay** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;BANKCARD:结算至银行卡&lt;br /&gt;ACCOUNT:结算至资金账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;BANKACCOUNT:结算至合作银行&lt;/p&gt; | 
**settleRatio** | **float** | &lt;p&gt;该结算方向对应的结算比例。单位：%，两位小数。最小值：0.00，最大值：100.00。&lt;/p&gt; &lt;p&gt;单一方向到账时，该字段传入100.00;&lt;/p&gt; &lt;p&gt;多方向到账时，传入各结算比例之和需为100.00。&lt;/p&gt; &lt;p&gt;如传入80.00，则表示结算资金的80.00%（四舍五入后保留两位小数）将结算至相应结算方向&lt;/p&gt; | 
**bankCardNo** | **string** | &lt;p&gt;结算方向为结算到银行卡/合作银行时必填。该结算方向需已经添加为结算卡。&lt;/p&gt; &lt;p&gt;结算到银行卡时，填绑定的银行卡号。&lt;/p&gt; &lt;p&gt;结算到合作银行时，填商户的合作银行账号（开户成功后返回的bankAccountBookNo）。&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


