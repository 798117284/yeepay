# RemitOrderQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝唯一单号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;付款金额&lt;/p&gt; | [optional] 
**receiveAmount** | **float** | 到账金额&lt;br&gt;返回收款银行账户入账金额 | [optional] 
**debitAmount** | **float** | 扣账金额&lt;br&gt;返回易宝账户扣账金额（包含付款金额和手续费（若有）） | [optional] 
**orderTime** | [**\DateTime**](\DateTime.md) | 付款下单时间&lt;br&gt;返回易宝接收付款请求后创建订单时间 | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | 付款完成时间 &lt;br&gt;返回付款订单有明确结果（如订单状态为SUCCESS/FAIL）时的时间 | [optional] 
**fee** | **float** | &lt;p&gt;手续费金额&lt;/p&gt; | [optional] 
**feeUndertakerMerchantNo** | **string** | &lt;p&gt;手续费承担方商编&lt;br /&gt;平台商承担时返回平台商商编商户承担时返回商户编号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;订单状态&lt;br /&gt;可选项如下:&lt;br /&gt;REQUEST_RECEIVE:请求已接收（易宝正在处理中，收到最终结果前请勿重复下单）&lt;br /&gt;REQUEST_ACCEPT:请求已受理（易宝正在处理中，收到最终结果前请勿重复下单）&lt;br /&gt;SUCCESS:已到账&lt;br /&gt;REMITING:银行处理中（银行正在处理中，收到最终结果前请勿重复下单）&lt;br /&gt;FAIL:失败（该笔订单付款失败,可重新发起付款）&lt;br /&gt;CANCELED:订单已撤销&lt;/p&gt; | [optional] 
**failCode** | **string** | &lt;p&gt;所查询的订单的错误码&lt;/p&gt; &lt;p&gt;失败错误码，当付款失败时，会返回失败错误码&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;所查询的订单的失败原因&lt;/p&gt; &lt;p&gt;当付款失败时，会返回失败原因&lt;/p&gt; | [optional] 
**receiveType** | **string** | &lt;p&gt;到账类型&lt;br /&gt;可选项如下:&lt;br /&gt;REAL_TIME:实时&lt;br /&gt;TWO_HOUR:2小时到账&lt;br /&gt;NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到收款银行账户中）&lt;/p&gt; | [optional] 
**receiverAccountNo** | **string** | &lt;p&gt;收款方银行账号&lt;br /&gt;返回收款账户-银行账号&lt;/p&gt; | [optional] 
**receiverAccountName** | **string** | &lt;p&gt;收款方开户名&lt;br /&gt;返回收款账户-开户名称&lt;/p&gt; | [optional] 
**receiverBankCode** | **string** | &lt;p&gt;收款方开户行编码&lt;br /&gt;返回收款账户-开户行编码&lt;/p&gt; | [optional] 
**branchBankCode** | **string** | &lt;p&gt;支行编码, 也叫做联行号&lt;/p&gt; | [optional] 
**comments** | **string** | &lt;p&gt;银行附言&lt;/p&gt; | [optional] 
**isReversed** | **bool** | 冲退标识&lt;br&gt;由于银行原因，会发生付款已到账又通知冲退的情况（付款资金会原路退回到商户账户） | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) | 冲退时间&lt;br&gt;返回银行通知冲退时的时间 | [optional] 
**bankOrderNo** | **string** | &lt;p&gt;请求银网联侧的银行订单号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


