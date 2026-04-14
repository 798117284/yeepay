# ApplyReceiverRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** |  | 
**returnMsg** | **string** |  | 
**requestNo** | **string** | &lt;p&gt;申请入账方时的请求号。&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;发起分账至入账方的商户的编号。&lt;/p&gt; | 
**receiverNo** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt;申请入账方后由系统创建的入账方编号。入账方申请状态为申请已完成时返回入账方编号。&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;1\&quot; data-line&#x3D;\&quot;true\&quot;&gt;入账方编号将会用于后续的信息变更、分账发起等环节，建议服务商存储该字段信息。&lt;/div&gt; | [optional] 
**status** | **string** | &lt;p&gt;入账方申请后，完成确认书签署和易宝系统业务开通，到达申请已完成状态即完成入账方申请。 申请已完成为业务终态，代表入账方已经添加完成。 审核已驳回时，需要更换请求号重新发起申请。其中审核驳回、确认书待签署、申请已完成会给商户发送回调通知。&lt;/p&gt; 可选项如下: PROCESSING:申请中 REVIEW_BACK:审核驳回 AGREEMENT_SIGNING:确认书待签署 BUSINESS_OPENING:业务开通中 COMPLETED:申请已完成 | 
**auditOpinion** | **string** | &lt;p&gt;申请已驳回时或者申请已完成时，回传的审核意见。&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


