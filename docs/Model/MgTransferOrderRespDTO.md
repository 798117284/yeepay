# MgTransferOrderRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | 
**transferStatus** | **string** | 可选项如下: REQUEST_RECEIVE:请求已接收(易宝正在处理中，请勿重复下单) SUCCESS:转账成功 FAIL:失败(该笔订单转账失败，请更换商户请求号后重新发起转账) WAIT_AUDIT:已受理,待复核 | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝内部系统生成的唯一订单号&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderAmount** | **string** | &lt;p&gt;转账金额&lt;/p&gt; | [optional] 
**fromMerchantNo** | **string** | &lt;p&gt;转出方商户编号&lt;/p&gt; | [optional] 
**toMerchantNo** | **string** | &lt;p&gt;转入方商户编号&lt;/p&gt; | [optional] 
**usage** | **string** | &lt;p&gt;用途&lt;/p&gt; | [optional] 
**fee** | **string** | &lt;p&gt;手续费&lt;/p&gt; | [optional] 
**createTime** | **string** | &lt;p&gt;返回易宝接收转账请求后创建订单时间&lt;/p&gt; | [optional] 
**finishTime** | **string** | &lt;p&gt;返回转账订单有明确结果（如订单状态为SUCCESS/FAIL）时的时间&lt;/p&gt; | [optional] 
**debitAmount** | **string** | &lt;p&gt;返回转出方易宝账户扣账金额（包含转账金额和手续费（若有））&lt;/p&gt; | [optional] 
**receiveAmount** | **string** | &lt;p&gt;入账金额&lt;/p&gt; | [optional] 
**feeMerchantNo** | **string** | &lt;p&gt;手续费承担方商户编号&lt;/p&gt; | [optional] 
**capitalInfo** | **string** | &lt;p&gt;资方信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


