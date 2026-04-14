# RechargeQueryApiRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | 
**createTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;下单时间&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;充值订单号&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: INIT:充值处理中-等待支付结果 ACCOUNTING:充值处理中-入账中 ACCOUNTING_EXCEPTION:充值处理中-入账异常 FAIL:充值失败 SUCCESS:充值成功 CANCELED:订单取消 | [optional] 
**merchantNo** | **string** | &lt;p&gt;充值商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;支付金额&lt;/p&gt; | [optional] 
**creditAmount** | **float** | &lt;p&gt;入账金额&lt;/p&gt; | [optional] 
**fee** | **float** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**payType** | **string** | 可选项如下: BANK_TRANSFER:银行汇款 B2C:个人网银 B2B:企业网银 | [optional] 
**remitComment** | **string** | &lt;p&gt;汇款备注码&lt;br /&gt;支付方式为BANK_TRASFER时返回&lt;/p&gt; | [optional] 
**bankCode** | **string** | &lt;p&gt;银行编码&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;银行名称&lt;/p&gt; | [optional] 
**payerAccountNo** | **string** | &lt;p&gt;付款方账号&lt;/p&gt; | [optional] 
**payerAccountName** | **string** | &lt;p&gt;付款方开户名&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注&lt;/p&gt; | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;充值完成时间&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;充值失败原因&lt;/p&gt; | [optional] 
**bankOrderNo** | **string** | &lt;p&gt;银行流水号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


