# RemitAuditQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝付款订单号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;付款金额&lt;/p&gt; | [optional] 
**receiveAmount** | **float** | &lt;p&gt;返回收款银行账户入账金额&lt;/p&gt; | [optional] 
**orderTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;返回易宝接收付款请求后创建订单时间&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: WAIT_AUDIT:待复核 AUDIT_PASS:复核通过 AUDIT_REFUSED:复核拒绝 | [optional] 
**auditMethod** | **string** | 可选项如下: SMS:短信验证码 | [optional] 
**auditorId** | **string** | &lt;p&gt;复核人编号&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;复核失败原因&lt;/p&gt; | [optional] 
**receiveType** | **string** | 可选项如下: REAL_TIME:实时 TWO_HOUR:2小时到账 NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到收款银行账户中） | [optional] 
**receiverAccountNo** | **string** | &lt;p&gt;收款方银行账号&lt;/p&gt; | [optional] 
**receiverAccountName** | **string** | &lt;p&gt;收款方开户名&lt;/p&gt; | [optional] 
**receiverBankCode** | **string** | &lt;p&gt;收款方开户行编码&lt;/p&gt; | [optional] 
**branchBankCode** | **string** | &lt;p&gt;支行编码&lt;/p&gt; | [optional] 
**comments** | **string** | &lt;p&gt;银行附言&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


