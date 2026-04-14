# RemitOrderQueryDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;商户请求号&lt;/span&gt; | [optional] 
**orderNo** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;易宝流水号&lt;/span&gt; | [optional] 
**merchantNo** | **string** |  | [optional] 
**orderAmount** | **float** |  | [optional] 
**receiveAmount** | **float** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;收款金额&lt;/span&gt; | [optional] 
**debitAmount** | **float** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;扣账金额&lt;/span&gt; | [optional] 
**orderTime** | [**\DateTime**](\DateTime.md) | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;创建时间&lt;/span&gt; | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) |  | [optional] 
**fee** | **float** |  | [optional] 
**feeUndertakerMerchantNo** | **string** |  | [optional] 
**status** | **string** | 可选项如下:&lt;br&gt;REQUEST_RECEIVE:请求已接收&lt;br&gt;REQUEST_ACCEPT:请求已受理&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败&lt;br&gt;CANCELED:请求撤销&lt;br&gt;REMITING:打款中 | [optional] 
**failReason** | **string** |  | [optional] 
**receiveType** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;付款到账类型&lt;/span&gt;&lt;br&gt;可选项如下:&lt;br&gt;REAL_TIME:实时&lt;br&gt;TWO_HOUR:两小时&lt;br&gt;NEXT_DAY:次日 | [optional] 
**receiverAccountNo** | **string** |  | [optional] 
**receiverAccountName** | **string** |  | [optional] 
**receiverBankCode** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;收款方银行编码&lt;/span&gt; | [optional] 
**comments** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;银行附言&lt;/span&gt; | [optional] 
**isReversed** | **bool** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif; text-align: center;\&quot;&gt;冲退标识，true表示是冲退，false表示未发生冲退&lt;/span&gt; | [optional] 
**reverseTime** | [**\DateTime**](\DateTime.md) | 冲退时间，仅isReversed&#x3D;true时有值 | [optional] 
**batchNo** | **string** |  | [optional] 
**cancelReason** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


