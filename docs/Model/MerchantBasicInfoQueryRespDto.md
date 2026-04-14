# MerchantBasicInfoQueryRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;响应编码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;响应描述&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | 
**signName** | **string** | &lt;div&gt;商户名称&lt;/div&gt; | 
**shortName** | **string** | &lt;p&gt;商户简称&lt;/p&gt; | 
**signType** | **string** | &lt;p&gt;商户签约类型，枚举值如下：&lt;br /&gt;1、INDIVIDUAL:个体工商户&lt;br /&gt;2、ENTERPRISE:企业&lt;br /&gt;3、INSTITUTION:事业单位&lt;br /&gt;4、COMMUNITY:社会团体&lt;br /&gt;5、PEOPLE_RUN_NON_ENTERPRISE:民办非企业&lt;br /&gt;6、PERSON:小微&lt;/p&gt; | 
**businessRole** | **string** | &lt;p&gt;商户业务角色&lt;br /&gt;1、ORDINARY_MERCHANT:标准商户&lt;br /&gt;2、PLATFORM_MERCHANT:平台商&lt;br /&gt;3、SETTLED_MERCHANT:入驻商户&lt;br /&gt;4、SHARE_MERCHANT:分账接收方（仅允许开通结算产品，到银行账户）&lt;br /&gt;5、HEAD_CHAIN:连锁总店&lt;br /&gt;6、BRANCH_CHAIN:连锁分店&lt;/p&gt; | 
**registerTime** | [**\DateTime**](\DateTime.md) |  | 
**parentMerchantNo** | **string** | &lt;div data-page-id&#x3D;\&quot;NUoidlWFToPKRnxXTnecpTMbnGe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-G1XHdXMsLoL0aTx5VTGcs31Ense\&quot;&gt;1、入驻商户上级为平台商商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-ZYuidI8rXoVLhCx77kjckL7bnud\&quot;&gt;2、平台商上级为SAAS服务商/渠道服务商编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-B3JMd6e4poAa41xczbXcHOHyngc\&quot;&gt;3、连锁分店上级为连锁总店商户编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OJjNdmrTjo3XowxQB8gcGv4nntg\&quot;&gt;4、连锁总店上级为SAAS服务商/渠道服务商编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-EVCQdVS4KooZN3xVnz4cx6mknMe\&quot;&gt;5、分账接收方上级为平台商/连锁总店编号&lt;/div&gt; &lt;/div&gt; | 
**parentSignName** | **string** |  | 
**parentShortName** | **string** |  | 
**parentBusinessRole** | **string** | &lt;p&gt;1、PLATFORM_MERCHANT:平台商&lt;br /&gt;2、HEAD_CHAIN:连锁总店&lt;br /&gt;3、SAAS_SERVICE_PROVIDER:SaaS服务商&lt;br /&gt;4、ORGAN_SERVICE_PROVIDER:渠道服务商&lt;/p&gt; | 
**directAgentNo** | **string** | &lt;div data-page-id&#x3D;\&quot;NUoidlWFToPKRnxXTnecpTMbnGe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KBzkdaMbuoljhCxSMBQcWYaTnPc\&quot;&gt;1、商户直属代理为业务员，返回直属业务员编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-QeEBdvjjbo8Qwnx20Rwcyzpjn0f\&quot;&gt;2、商户直属代理为二级机构，返回二级机构编号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-U769d5UpcoHGa0xQNSfcDIdtnLl\&quot;&gt;3、若无代理，返回服务商编号&lt;/div&gt; &lt;/div&gt; | [optional] 
**directAgentName** | **string** | &lt;div data-page-id&#x3D;\&quot;NUoidlWFToPKRnxXTnecpTMbnGe\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-AoiPdSP4oo8b3Fx5tSscQ56vn0d\&quot;&gt;1、商户直属代理为业务员，返回直属业务员名称&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JKvfdk5vnomDw4xopHjc1GJ4nsl\&quot;&gt;2、商户直属代理为二级机构，返回二级机构名称&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IIvRduxYooFrLWxdYPRcM33pnjg\&quot;&gt;3、若无代理，返回服务商名称&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


