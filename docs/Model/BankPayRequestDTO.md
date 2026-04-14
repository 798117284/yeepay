# BankPayRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankCode** | **string** | 银行编码.仅支付方式为BANK_PAY时必填&lt;br&gt;可选项如下:&lt;br&gt;XIB&lt;br&gt;BOL&lt;br&gt;FJHTB&lt;br&gt;WHZBB&lt;br&gt;XWB&lt;br&gt;HXBXB&lt;br&gt;SUNINGBANK&lt;br&gt;WHLHB | 
**bankPayCertificate** | **string** | 银行编码为BOL的时候必填 | [optional] 
**userRequestIP** | **string** | 用户发起请求的客户端ip（银行编码为BOL的时候必填） | [optional] 
**bankUsage** | **string** | 银行用途,仅支付方式为BANK_PAY且BANK_CODE为BOL时有效&lt;br&gt;可选项如下:&lt;br&gt;TRANSFER:转账&lt;br&gt;REFUND:退款&lt;br&gt;WITHDRAW:提现 | [optional] 
**bankAccountNo** | **string** | 银行编码为[XIB、FJHTB、WHZBB、XWB、HXBXB、SUNINGBANK、WHLHB]的时候必填 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


