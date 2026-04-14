# WalletQueryWithdrawResultDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**businessNo** | **string** | &lt;p&gt;易宝订单号&lt;/p&gt; | [optional] 
**amount** | **float** | &lt;p&gt;提现金额&lt;/p&gt; | [optional] 
**bindId** | **string** | &lt;p&gt;绑卡ID&lt;/p&gt; | [optional] 
**cardNo** | **string** | &lt;p&gt;显示前4后2，中间*&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;银行名称&lt;/p&gt; | [optional] 
**bankCode** | **string** | &lt;p&gt;银行编码&lt;/p&gt; | [optional] 
**tradeStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;SUCCESS:成功&lt;br /&gt;FAIL:失败&lt;br /&gt;ACCEPTED:打款中&lt;/p&gt; | [optional] 
**acceptTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;受理时间&lt;/p&gt; | [optional] 
**completeTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;完成时间&lt;/p&gt; | [optional] 
**userFee** | **float** | &lt;p&gt;用户手续费&lt;/p&gt; | [optional] 
**withdrawType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;0:提现实时到账&lt;br /&gt;1:提现2小时到账&lt;br /&gt;2:次日到账&lt;/p&gt; | [optional] 
**deductionAmount** | **float** | &lt;p&gt;实际扣款金额&lt;/p&gt; | [optional] 
**arrivalAmount** | **float** | &lt;p&gt;到账金额&lt;/p&gt; | [optional] 
**feeInnerType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;INNER:内扣&lt;br /&gt;OUTER:外扣&lt;br /&gt;OUTER_TO_INNER:外扣转内扣&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


