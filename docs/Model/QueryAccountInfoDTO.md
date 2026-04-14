# QueryAccountInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**elecAccount** | **string** | 账户账号 | [optional] 
**accountStatus** | **string** | 可选项如下:&lt;br&gt;UNACTIVED:未激活&lt;br&gt;USED:在用&lt;br&gt;FREEZE:冻结—止收止付&lt;br&gt;FREEZECOLLECT:冻结-止收&lt;br&gt;FREEZEPAY:冻结-止付&lt;br&gt;CANCELED:销户（账户注销了不能再用了)&lt;br&gt;SLEEPED:睡眠（长期无交易，不可用) | [optional] 
**balance** | **float** | 账户余额（如果账户销户，此字段为空） | [optional] 
**bankAccountNo** | **string** | 银行绑定的一类卡号 | [optional] 
**bankAccountLevel** | **string** | 账户等级（一类户，二类户，三类户)&lt;br&gt;可选项如下:&lt;br&gt;ONEACCOUNT:一类户&lt;br&gt;TWOACCOUNT:二类户&lt;br&gt;THREEACCOUNT:三类户 | [optional] 
**mobile** | **string** | 手机号 | [optional] 
**accountType** | **string** | 账户类型 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


