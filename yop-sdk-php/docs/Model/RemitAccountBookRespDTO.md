# RemitAccountBookRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | 
**orderNo** | **string** | &lt;p&gt;易宝支付系统生成的付款订单号&lt;/p&gt; | 
**status** | **string** | 可选项如下: REQUEST_RECEIVE:请求已接收（易宝正在处理中，收到最终结果前请勿重复下单） REQUEST_ACCEPT:请求已受理（易宝正在处理中，收到最终结果前请勿重复下单） REMITING:银行处理中（银行正在处理中，收到最终结果前请勿重复下单） FAIL:失败 | 
**receiverAccountName** | **string** | &lt;p&gt;收款方账户名&lt;/p&gt; | [optional] 
**receiverAccountNo** | **string** | &lt;p&gt;收款方账号&lt;/p&gt; | [optional] 
**receiverBankCode** | **string** | &lt;p&gt;收款方银行编码&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


