# RechargeOrderApiDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createTime** | **string** | &lt;p&gt;创建时间 格式 yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝唯一单号&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: PAY_SUCCESS:支付成功 ACCOUNTING:入账中 ACCOUNTING_EXCEPTION:入账异常 FAIL:失败 SUCCESS:成功 | [optional] 
**merchantNo** | **string** | &lt;p&gt;收款商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | 订单金额 | [optional] 
**creditAmount** | **float** | 入账金额 | [optional] 
**fee** | **float** | 手续费 | [optional] 
**payType** | **string** | 可选项如下: BANK_TRANSFER_AUTO:银行汇款2.0 B2C:个人网银 B2B:企业网银 BANK_TRANSFER:银行汇款 | [optional] 
**bankCode** | **string** | &lt;p&gt;银行编码&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;银行名称&lt;/p&gt; | [optional] 
**payerAccountNo** | **string** | &lt;p&gt;付款方账号&lt;/p&gt; | [optional] 
**payerAccountName** | **string** | &lt;p&gt;付款方账户名称&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注&lt;/p&gt; | [optional] 
**finishTime** | **string** | &lt;p&gt;完成时间,格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**reason** | **string** | &lt;p&gt;失败原因&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;记账薄编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


