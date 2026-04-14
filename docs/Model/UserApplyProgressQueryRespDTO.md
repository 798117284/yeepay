# UserApplyProgressQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookInfo** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressBookInfoDTO**](UserApplyProgressBookInfoDTO.md) |  | [optional] 
**returnCode** | **string** | &lt;div data-page-id&#x3D;\&quot;R89UdQrldouzcAxzrVzcp7wLnLg\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-QmSCdK8P0oFOSpxTyhFcWbXEn3f\&quot;&gt;返回码&lt;/div&gt; &lt;/div&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | 
**auditOpinion** | **string** | &lt;p&gt;当status&#x3D;REVIEW_BACK时候，返回驳回原因&lt;/p&gt; | [optional] 
**intentionAuthUrl** | **string** | &lt;p&gt;当status&#x3D;AUTHENTICITY_VERIFYING且progressDescription&#x3D;INTENTION_AUTH时候，意愿认证链接&lt;/p&gt; | [optional] 
**userNo** | **string** | &lt;p&gt;当status&#x3D;COMPLETED时有返回&lt;/p&gt; | [optional] 
**progressDescription** | **string** | &lt;div data-page-id&#x3D;\&quot;R89UdQrldouzcAxzrVzcp7wLnLg\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Z9xMd1BYEoRdiDxOHEQcwX9VnVd\&quot;&gt;status&#x3D;AUTHENTICITY_VERIFYING时返回：[\&quot;INTENTION_AUTH\&quot;]&lt;br /&gt;INTENTION_AUTH：意愿认证，商户打开链接进行意愿认证&lt;/div&gt; &lt;/div&gt; | [optional] 
**signUrl** | **string** | &lt;div data-page-id&#x3D;\&quot;R89UdQrldouzcAxzrVzcp7wLnLg\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OkJEdynXHo7s73xdTjIcjE2zngf\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;R89UdQrldouzcAxzrVzcp7wLnLg\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;true\&quot;&gt; &lt;div&gt;status（申请状态）为AGREEMENT_SIGNING（确认书待签署）、BUSINESS_OPENING（业务开通中）、COMPLETED（申请已完成）时，会返回签约链接&lt;br /&gt;*说明：&lt;br /&gt;1.未完成签约时，返回的签约链接需要用户完成签约；&lt;br /&gt;2.已完成签约时，返回的签约链接可以查看协议签署内容。&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;请求号&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;用户归属商户&lt;/p&gt; | 
**status** | **string** | &lt;p&gt;PROCESSING:申请中&lt;br /&gt;REVIEW_BACK:审核驳回&lt;br /&gt;AUTHENTICITY_VERIFYING:真实性验证中&lt;br /&gt;AGREEMENT_SIGNING:确认书待签署&lt;br /&gt;BUSINESS_OPENING:业务开通中&lt;br /&gt;COMPLETED:申请已完成&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


