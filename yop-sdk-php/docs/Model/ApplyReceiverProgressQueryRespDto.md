# ApplyReceiverProgressQueryRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** |  | 
**returnMsg** | **string** |  | 
**requestNo** | **string** | &lt;p&gt;申请入账方时的请求号。&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;发起分账至入账方的商户的编号。&lt;/p&gt; | 
**receiverNo** | **string** | &lt;p&gt;申请入账方后由系统创建的入账方编号。入账方申请状态为申请已完成时返回入账方编号。&lt;/p&gt; | [optional] 
**status** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;17\&quot;&gt;入账方申请后，完成确认书签署和易宝系统业务开通，到达申请已完成状态即完成入账方申请。&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;19\&quot;&gt;申请已完成为业务&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;终态&lt;/span&gt;，代表入账方已经添加完成。&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;19\&quot;&gt;审核已驳回时，需要更换请求号重新发起申请。&lt;/span&gt;&lt;/div&gt; 可选项如下: PROCESSING:申请中 REVIEW_BACK:审核驳回 AGREEMENT_SIGNING:确认书待签署 BUSINESS_OPENING:业务开通中 COMPLETED:申请已完成 | 
**auditOpinion** | **string** | &lt;p&gt;申请已驳回时或者申请已完成时，回传的审核意见。&lt;/p&gt; | [optional] 
**receiverSignUrl** | **string** | &lt;p&gt;入账方申请状态为确认书待签署时返回。&lt;/p&gt; &lt;p&gt;入账方可通过此链接完成《付款确认书》签约，用于确认入账方接收分账意愿。&lt;/p&gt; | [optional] 
**merchantSignUrl** | **string** | &lt;p&gt;状态为确认书待签署时返回。&lt;/p&gt; &lt;p&gt;商户可通过此链接完成《付款确认书》签约，用于确认商户发起分账意愿。&lt;/p&gt; | [optional] 
**merchantBatchSignUrl** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;9\&quot;&gt;商户可以通过此链接批量完成入账方《付款确认书》签约，用于确认商户发起分账意愿。&lt;/span&gt;&lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


