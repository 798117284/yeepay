# TransferAuditQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | [optional] 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;由商户自定义生成&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝支付系统生成的转账订单号&lt;/p&gt; | [optional] 
**orderAmount** | **string** | &lt;p&gt;转账金额&lt;/p&gt; | [optional] 
**transferType** | **string** | 可选项如下: B2B:公对公 B2C:公对私 | [optional] 
**fromMerchantNo** | **string** | &lt;p&gt;转出方商户编号&lt;/p&gt; | [optional] 
**toMerchantNo** | **string** | &lt;p&gt;转入方商户编号&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: WAIT_AUDIT:待复核 AUDIT_PASS:复核通过 AUDIT_REFUSED:复核拒绝 | [optional] 
**auditorId** | **string** | &lt;p&gt;复核人编号&lt;/p&gt; | [optional] 
**auditMethod** | **string** | 可选项如下: SMS:短信验证码 | [optional] 
**usage** | **string** | &lt;p&gt;用途&lt;/p&gt; | [optional] 
**fee** | **string** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**createTime** | **string** | &lt;p&gt;转账下单时间&lt;/p&gt; | [optional] 
**debitAmount** | **string** | &lt;p&gt;返回转出方易宝账户扣账金额（包含转账金额和手续费（若有））&lt;/p&gt; | [optional] 
**receiveAmount** | **string** | &lt;p&gt;入账金额&lt;/p&gt; | [optional] 
**feeMerchantNo** | **string** | &lt;p&gt;手续费承担方&lt;/p&gt; | [optional] 
**capitalInfo** | **string** | &lt;p&gt;资方信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


