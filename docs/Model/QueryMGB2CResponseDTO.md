# QueryMGB2CResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回码的详细说明&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**businessNo** | **string** | &lt;p&gt;易宝订单号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;转账订单金额&lt;/p&gt; | [optional] 
**orderStatus** | **string** | &lt;p&gt;转账订单的4个状态&lt;br /&gt;可选项如下:&lt;br /&gt;UNCREDITED:已受理-处理中&lt;br /&gt;NOT_VERIFIED:待确认&lt;br /&gt;CREDITED:转账成功&lt;br /&gt;COMMIT_FAILURE:转账失败&lt;/p&gt; | [optional] 
**fromMerchantNo** | **string** | &lt;p&gt;转出方商户编号&lt;/p&gt; | [optional] 
**toMerchantNo** | **string** | &lt;p&gt;转帐接收方用户所在平台商编&lt;/p&gt; | [optional] 
**toMemberNo** | **string** | &lt;p&gt;转入方易宝用户编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


