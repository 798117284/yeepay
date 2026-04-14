# QueryMerchantInfoModifyProgressRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;响应编码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;响应描述&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户信息变更请求号&lt;/p&gt; | 
**applicationNo** | **string** | &lt;p&gt;申请单编号&lt;/p&gt; | 
**applicationStatus** | **string** | 可选项如下: REVIEWING:申请审核中 REVIEW_BACK:申请已驳回 AGREEMENT_SIGNING:协议待签署 COMPLETED:申请已完成 | 
**auditOpinion** | **string** | &lt;p&gt;申请已驳回时，回传的审核意见&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; &lt;p&gt;接口响应成功时返回&lt;/p&gt; | [optional] 
**agreementSignUrl** | **string** | &lt;p&gt;电子签约地址:&lt;br /&gt;当申请状态为AGREEMENT_SIGNING(协议待签署)时返回&lt;/p&gt; | [optional] 
**channelReportResults** | **string** | &lt;p&gt;当申请状态为COMPLETED(申请已完成)时返回&lt;/p&gt; &lt;p&gt;channel：本次修改的报备渠道&lt;/p&gt; &lt;p&gt;reportMerchantNo：本次修改的报备商户号&lt;/p&gt; &lt;p&gt;status：本次修改结果（SUCCESS：成功，FAIL：失败，UNMODIFIED：未修改）&lt;/p&gt; &lt;p&gt;returnMsg：原因，status为失败或未修改时有值&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


