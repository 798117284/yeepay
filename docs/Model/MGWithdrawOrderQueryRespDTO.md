# MGWithdrawOrderQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝内部的唯一订单号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;提现金额&lt;/p&gt; | [optional] 
**receiveAmount** | **float** | 到账金额&lt;br&gt;返回提现银行账户入账金额 | [optional] 
**debitAmount** | **float** | 扣账金额&lt;br&gt;返回易宝账户扣账金额（包含提现金额和手续费（若有）） | [optional] 
**orderTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;提现下单时间&lt;br /&gt;返回易宝接收提现请求后创建订单时间&lt;/p&gt; | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;提现完成时间&lt;br /&gt;返回提现订单有明确结果（如订单状态为SUCCESS/FAIL）时的时间&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: REQUEST_RECEIVE:请求已接收（易宝正在处理中，收到最终结果前请勿重复下单） REQUEST_ACCEPT:请求已受理（易宝正在处理中，收到最终结果前请勿重复下单） SUCCESS:已到账 FAIL:失败（该笔订单付款失败,可重新发起付款） REMITING:银行处理中（银行正在处理中，收到最终结果前请勿重复下单） | [optional] 
**failReason** | **string** | &lt;p&gt;失败原因当提现失败时，会返回失败原因&lt;/p&gt; | [optional] 
**feeUndertakerMerchantNo** | **string** | &lt;p&gt;手续费承担方商编&lt;br /&gt;平台商承担时返回平台商商编商户承担时返回商户编号&lt;/p&gt; | [optional] 
**fee** | **float** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**receiveType** | **string** | 可选项如下: REAL_TIME:实时 TWO_HOUR:2小时到账 NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到提现银行账户中） | [optional] 
**accountName** | **string** | &lt;p&gt;&lt;span style&#x3D;\&quot;caret-color: #000000; font-family: Arial, sans-serif; white-space: pre-wrap; text-size-adjust: auto;\&quot;&gt;开户名&lt;/span&gt;&lt;br /&gt;返回商户的提现账户-开户名称&lt;/p&gt; | [optional] 
**accountNo** | **string** | &lt;p&gt;银行账号&lt;br /&gt;返回商户的提现账户-银行账号&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;开户行名称&lt;br /&gt;返回商户的提现账户-开户行名称&lt;/p&gt; | [optional] 
**bankCode** | **string** | &lt;p&gt;提现卡对应的银行编码&lt;/p&gt; | [optional] 
**branchBankCode** | **string** | &lt;p&gt;支行行号, 提现卡对应的支行的联行号&lt;/p&gt; | [optional] 
**isReversed** | **bool** | &lt;p&gt;冲退标识&lt;br /&gt;由于银行原因，会发生提现已到账后又通知冲退的情况（提现资金会原路退回到商户账户）&lt;/p&gt; | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;冲退时间&lt;br /&gt;返回银行通知冲退时的时间&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注&lt;/p&gt; | [optional] 
**withdrawModel** | **string** | 可选项如下: INNER_ACCOUNT_WITHDRAW:易宝内部账户模式 BANK_ACCOUNT_WITHDRAW:银行清分银行账户模式 | [optional] 
**debitBankAccountBookNo** | **string** | &lt;p&gt;银行清分模式银行账户提现的 扣款银行账户号&lt;/p&gt; | [optional] 
**debitBankCode** | **string** | &lt;p&gt;银行清分模式，扣款银行账户号的归属银行标识&lt;/p&gt; | [optional] 
**verifyType** | **string** | 可选项如下: PWD:密码核验 | [optional] 
**cardSelectModel** | **string** | 可选项如下: MANUAL:手动指定 SYS_ROUTE:系统路由 | [optional] 
**cardRouteModel** | **string** | 可选项如下: NEWEST:最新绑定卡 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


