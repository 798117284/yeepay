# QueryNetInProgressRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**msg** | **string** | &lt;p&gt;当code！&#x3D;MAS000000,返回具体失败原因&lt;/p&gt; | 
**requestNo** | **string** |  | [optional] 
**applicationStatus** | **string** | &lt;div data-page-id&#x3D;\&quot;ThBzde76xoUmVhxQNPGcYPQJnYZ\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Ggp6d69eDo1BDExKzgucLTltndd\&quot;&gt;WAIT_SIGN：编辑中&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-S7F8dgihdoAFIhxPdGScryZMn6c\&quot;&gt;REVIEWING:申请审核中&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-L3iYddl8co87kJxzTxZcN7b8n93\&quot;&gt;REVIEW_BACK:申请已驳回&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KI7OdUNcFodjXRxsHkycpOgCn2K\&quot;&gt;AUTHENTICITY_VERIFYING:真实性验证中&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NSBIdnWV1otWVqx4WrDcn78TnXc\&quot;&gt;AGREEMENT_SIGNING:协议待签署&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-URjrdRBWioZzfIxfhJVcYT9onrf\&quot;&gt;BUSINESS_OPENING:业务开通中&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-F6rKddGt6o5HItxrWK2cKTeOnff\&quot;&gt;COMPLETED:申请已完成&lt;/div&gt; &lt;/div&gt; | 
**applicationNo** | **string** | &lt;div class&#x3D;\&quot;width-50-perc ivu-form-item\&quot; data-v-69445fd2&#x3D;\&quot;\&quot;&gt; &lt;div class&#x3D;\&quot;ivu-form-item-content\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;ThBzde76xoUmVhxQNPGcYPQJnYZ\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IunQdSjbpoJgaaxIHFQcH5oKnkf\&quot;&gt;生成入网单成功后返回&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**merchantNo** | **string** | &lt;div data-page-id&#x3D;\&quot;ThBzde76xoUmVhxQNPGcYPQJnYZ\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-H5COdOBJJoWRLYxT1SQcnJ34nCf\&quot;&gt;商编生成后返回&lt;/div&gt; &lt;/div&gt; | [optional] 
**auditOpinion** | **string** | &lt;p&gt;&amp;ldquo;申请已驳回&amp;rdquo;或者&amp;ldquo;业务开通中&amp;rdquo;或者&amp;ldquo;申请已完成&amp;rdquo;时，回传的原因&lt;br /&gt;1.\&quot;申请已驳回\&quot;时返回驳回原因；&lt;br /&gt;2.\&quot;业务开通中\&quot;时，如果报备失败返回原因；&lt;br /&gt;3.\&quot;申请已完成\&quot;时，如果存在资质缺失，返回资质缺失说明；&lt;/p&gt; | [optional] 
**progressDescription** | **string** | &lt;div class&#x3D;\&quot;params-content\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;当申请状态为&amp;ldquo;真实性验证中&amp;rdquo;时返回，其中\&quot;REMIT_AUTH\&quot; 代表&amp;ldquo;待意愿认证&amp;rdquo;&lt;/div&gt; | [optional] 
**intentionAuthUrl** | **string** | &lt;div class&#x3D;\&quot;width-50-perc ivu-form-item\&quot; data-v-69445fd2&#x3D;\&quot;\&quot;&gt; &lt;div class&#x3D;\&quot;ivu-form-item-content\&quot;&gt; &lt;p data-v-69445fd2&#x3D;\&quot;\&quot;&gt;当进度说明中返回有REMIT_AUTH时返回链接&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**elecSignUrl** | **string** |  | [optional] 
**netInUrl** | **string** | &lt;p&gt;H5入网链接地址&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


