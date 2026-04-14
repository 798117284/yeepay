# RemitDetailDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | 请求号，由商户自定义生成，需保证唯一 | 
**receiverAccountNo** | **string** |  | 
**receiverAccountName** | **string** |  | 
**receiverBankCode** | **string** | 收款方开户行&lt;br&gt;银行卡所在开户行编号，详见&lt;br&gt;&lt;a href&#x3D;\&quot;https://open.yeepay.com/attachments/access?fileId&#x3D;FFTv15d8TY\&quot;&gt;总行及支行编码表&lt;/a&gt; | 
**orderAmount** | **float** | 付款金额&lt;br&gt;单位：元（RMB） | 
**comments** | **string** | 银行附言&lt;br&gt;展示在收款银行系统中的附言，由数字、字母、汉字组成（能否成功展示依赖银行系统支持） | [optional] 
**bankAccountType** | **string** | 账户类型&lt;br&gt;可选项如下:&lt;br&gt;DEBIT_CARD:借记卡&lt;br&gt;CREDIT_CARD:贷记卡&lt;br&gt;QUASI_CREDIT_CARD:准贷卡&lt;br&gt;PASSBOOK:存折&lt;br&gt;UNIT_SETTLE_CARD:单位结算卡&lt;br&gt;PUBLIC_CARD:对公卡 | 
**branchBankCode** | **string** | 支行编码&lt;br&gt;银行卡所在支行编码，详见支行编码列表 | [optional] 
**feeChargeSide** | **string** | 手续费承担方(若不传默认付款方)&lt;br&gt;可选项如下:&lt;br&gt;PAYER:付款方&lt;br&gt;PAYEE:收款方 | [optional] 
**remark** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


