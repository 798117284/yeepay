# YopAppointTargetRemitRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;发起交易的请求号, 请务必确保请求号在您的系统中唯一&lt;/p&gt; | 
**orderAmount** | **float** | &lt;p&gt;订单金额&lt;/p&gt; | 
**receiverAccountNo** | **string** | &lt;p&gt;收款方银行账号:为了保证出款成功，建议或尽可能填写支行编码，尤其是各农信社卡或账号16位以下的农业银行卡；示例值：6212260200062388891&lt;/p&gt; | 
**receiverAccountName** | **string** | &lt;p&gt;收款方开户名&lt;/p&gt; | 
**bankAccountType** | **string** | 可选项如下: DEBIT_CARD:借记卡 CREDIT_CARD:贷记卡 QUASI_CREDIT_CARD:准贷卡 PASSBOOK:存折 UNIT_SETTLE_CARD:单位结算卡 PUBLIC_CARD:对公卡 | 
**notifyUrl** | **string** | &lt;p&gt;当订单终态, 我们会根据此地址进行回调通知&lt;/p&gt; &lt;p&gt;如果您未传入该参数, 则不会通知&lt;/p&gt; | [optional] 
**feeChargeSide** | **string** | &lt;p&gt;如果您未传入此参数, 则默认为付款方承担手续费&lt;/p&gt; &lt;p&gt;当商户承担且计费方式为预付实扣或后收时, 不支持收款方承担；&lt;/p&gt; &lt;p&gt;当平台商或服务商承担时无需指定此手续费承担方；&lt;/p&gt; 可选项如下: PAYER:付款方 PAYEE:收款方 | [optional] 
**comments** | **string** | &lt;p&gt;银行附言&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;订单备注&lt;/p&gt; | [optional] 
**receiptComments** | **string** | &lt;p&gt;回单备注，此字段值用于显示在回单中&lt;/p&gt; | [optional] 
**receiverBankCode** | **string** | &lt;p&gt;收款方银行卡对应的开户行的总行编码(对公账户类型，总行编码/支行编码不能同时为空)，详见 &lt;a href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83?sheet&#x3D;Cn65To\&quot; data-eleid&#x3D;\&quot;32\&quot; data-lark-is-custom&#x3D;\&quot;true\&quot; data-lark-link&#x3D;\&quot;true\&quot;&gt;【总行及支行明细】&lt;/a&gt;（总行信息管理）&lt;/p&gt; | [optional] 
**branchBankCode** | **string** | &lt;p&gt;支行编码(对公账户类型，总行编码/支行编码不能同时为空) 详见&lt;a href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83?sheet&#x3D;Cn65To\&quot; data-eleid&#x3D;\&quot;46\&quot; data-lark-is-custom&#x3D;\&quot;true\&quot; data-lark-link&#x3D;\&quot;true\&quot;&gt;《支行编码》&lt;/a&gt;（支行信息管理）&lt;/p&gt; | [optional] 
**terminalType** | **string** | 可选项如下: PC:电脑 PHONE:手机 PAD:平板 NFC:可穿戴设备 DTV:数字电视 MPOS:条码支付受理终端 OTHER:其他 | [optional] 
**macAddress** | **string** | &lt;p&gt;设备mac地址&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


