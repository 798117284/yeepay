# YopDivideProtocolQueryReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiverNo** | **string** | &lt;p&gt;同签约申请入参：receiverNo&lt;/p&gt; | [optional] 
**signBizType** | **string** | &lt;p&gt;枚举值：&lt;/p&gt; &lt;div&gt; &lt;pre&gt;PROTOCOL_DIVIDE:协议分账&lt;/pre&gt; &lt;p&gt;同申请签约入参：signBizType&lt;/p&gt; &lt;/div&gt; | [optional] 
**uniqueSignNo** | **string** | &lt;p&gt;查询有两种方式：&lt;br /&gt;1.merchantNo + uniqueSignNo&amp;nbsp;&lt;/p&gt; &lt;p&gt;2.merchantNo + receiverNo + signBizType&lt;br /&gt;&lt;br /&gt;uniqueSignNo 和receiverNo，signBizType不能都为空&lt;/p&gt; &lt;div&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;/div&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;同签约申请入参：merchantNo&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


