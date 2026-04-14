# YopBalanceDivideBackReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batchNotifyUrl** | **string** | &lt;p&gt;分账退回通知地址。 每一个分账退回明细分账退回成功或失败后使用此地址通知分账退回结果且只通知一次&lt;/p&gt; | [optional] 
**divideBackRequestId** | **string** | &lt;p&gt;分账退回请求号&lt;/p&gt; | 
**divideRequestId** | **string** | &lt;p&gt;分账退回基于原分账请求做分账退回，所以需要分账请求号&lt;/p&gt; | 
**divideBackDetail** | **string** | &lt;p&gt;分账退回明细，jsonArray类型，可以传多个。&lt;br /&gt;参数名:&lt;br /&gt;detailNo:分账明细号，分账接口分账明细字段中返回的：detailNo&lt;br /&gt;&lt;br /&gt;amount:分账退回金额，需小于等于原分账单detailNo对应的分账金额&lt;br /&gt;&lt;br /&gt;divideBackReason:最多支持40个中文汉字&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;原分账的分账发起方商编&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


