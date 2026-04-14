# GroupAccountTransferQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;由商户自定义生成&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝支付系统生成的订单号&lt;/p&gt; | [optional] 
**orderAmount** | **string** | &lt;p&gt;转账金额&lt;/p&gt; | [optional] 
**fromMerchantNo** | **string** | &lt;p&gt;转出方商户编号&lt;/p&gt; | [optional] 
**toMerchantNo** | **string** | &lt;p&gt;转入方商户编号&lt;/p&gt; | [optional] 
**transferStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;REQUEST_RECEIVE:请求已接收(易宝正在处理中,收到最终结果前请勿重复下单)&lt;br /&gt;SUCCESS:成功&lt;br /&gt;FAIL:失败(该笔订单失败,可重新发起)&lt;/p&gt; | [optional] 
**usage** | **string** | &lt;p&gt;用途&lt;/p&gt; | [optional] 
**fee** | **string** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**createTime** | **string** | &lt;p&gt;返回易宝接收请求后创建订单时间&lt;/p&gt; | [optional] 
**finishTime** | **string** | &lt;p&gt;返回订单有明确结果（如订单状态为SUCCESS/FAIL）时的时间&lt;/p&gt; | [optional] 
**debitAmount** | **string** | &lt;p&gt;返回转出方易宝账户扣账金额（包含转账金额和手续费（若有））&lt;/p&gt; | [optional] 
**receiveAmount** | **string** | &lt;p&gt;入账金额&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;状态为FAIL返回&lt;/p&gt; | [optional] 
**feeMerchantNo** | **string** | &lt;p&gt;手续费承担方商户编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


