# AccountBookRechargeOrderApiDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createTime** | **string** | &lt;p&gt;创建时间&amp;nbsp;格式&amp;nbsp;yyyy-MM-dd&amp;nbsp;HH:mm:ss&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;可选项如下:&lt;/p&gt; &lt;p&gt;PAY_SUCCESS:支付成功&lt;/p&gt; &lt;p&gt;ACCOUNTING:入账中&lt;/p&gt; &lt;p&gt;ACCOUNTING_EXCEPTION:入账异常&lt;/p&gt; &lt;p&gt;FAIL:失败&lt;/p&gt; &lt;p&gt;SUCCESS:成功&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;收款商户编号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;订单金额&lt;/p&gt; | [optional] 
**creditAmount** | **float** | &lt;p&gt;入账金额&lt;/p&gt; | [optional] 
**fee** | **float** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**payType** | **string** | &lt;p&gt;支付方式&lt;br /&gt;可选项如下:&lt;br /&gt;BANK_TRANSFER_AUTO:银行汇款&lt;/p&gt; | [optional] 
**bankCode** | **string** | &lt;p&gt;银行编码&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;银行名称&lt;/p&gt; | [optional] 
**payerAccountNo** | **string** | &lt;p&gt;付款方账号&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注&lt;/p&gt; | [optional] 
**finishTime** | **string** | &lt;p&gt;完成时间,格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**reason** | **string** | &lt;p&gt;失败原因&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;记账薄编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


