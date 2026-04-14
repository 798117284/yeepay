# YopDivideProtocolRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** |  | [optional] 
**receiverNo** | **string** | &lt;p&gt;同入参receiverNo&lt;/p&gt; | [optional] 
**signBizType** | **string** | &lt;p&gt;同申请协议入参:signBizType&lt;/p&gt; | [optional] 
**signWay** | **string** | &lt;p&gt;同签约申请入参：signWay&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;枚举值：&lt;/p&gt; &lt;div&gt; &lt;pre&gt;INIT:申请中，此状态为为发送短信前的状态&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;WAIT_CERTIFIED:待认证，发送短信后待验证码确认的状态&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;SUCCESS:已生效&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;/div&gt; | [optional] 
**uniqueSignNo** | **string** | &lt;p&gt;签约记录唯一编号&lt;br /&gt;查询、验证码签约需要使用此字段&lt;/p&gt; | [optional] 
**applyDate** | **string** | &lt;p&gt;格式：&lt;br /&gt;yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**completeDate** | **string** | &lt;p&gt;格式：&lt;br /&gt;yyyy-MM-dd HH:mm:ss&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 
**lastSendTime** | **string** | &lt;p&gt;格式：&lt;br /&gt;yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


