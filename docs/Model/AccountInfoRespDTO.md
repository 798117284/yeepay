# AccountInfoRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回码&lt;br&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息 | [optional] 
**returnMsg** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**accountNo** | **string** |  | [optional] 
**accountCreateTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**balance** | **float** |  | [optional] 
**accountStatus** | **string** | 账户状态&lt;br&gt;AVAILABLE：可用（账户状态可用，可使用余额进行交易）FROZEN：冻结（账户状态不可用，请勿发起交易）FROZEN_CREDIT：冻结止收（当前账户请勿发起资金入账交易）FROZEN_DEBIT：冻结止付（当前账户状态下请勿发起资金出款交易） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


