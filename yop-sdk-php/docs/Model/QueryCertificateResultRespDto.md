# QueryCertificateResultRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;&lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif;\&quot;&gt;响应code&lt;/span&gt;&lt;/p&gt; | 
**returnMsg** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif;\&quot;&gt;响应message&lt;/span&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;&lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif;\&quot;&gt;原申请请求号&lt;/span&gt;&lt;/p&gt; | [optional] 
**applymentId** | **string** | &lt;p&gt;&lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif;\&quot;&gt;申请单编号&lt;/span&gt;&lt;/p&gt; | [optional] 
**applymentState** | **string** | &lt;p&gt;实名认证审核状态&lt;/p&gt; 可选项如下: APPLYMENT_STATE_WAITTING_FOR_AUDIT:【审核中】 APPLYMENT_STATE_EDITTING:【编辑中】可用同一个业务申请编号重新提 APPLYMENT_STATE_WAITTING_FOR_CONFIRM_CONTACT:【待确认联系信息】扫描返回图片 APPLYMENT_STATE_WAITTING_FOR_CONFIRM_LEGALPERSON:【待账户验证】扫描完成验证 APPLYMENT_STATE_PASSED:【审核通过】扫描完成授权 APPLYMENT_STATE_REJECTED:【审核驳回】根据原因更换请求号，重新提交申请 APPLYMENT_STATE_FREEZED:【已冻结】查看驳回原因，扫描完成授权流程 APPLYMENT_STATE_CANCELED:【已作废】已被撤销，不可操作 | [optional] 
**qrcodeUrl** | **string** | &lt;p&gt;小程序码图片url当申请单状态为以下状态时会返回URL：&lt;/p&gt; &lt;ul&gt; &lt;li&gt;APPLYMENT_STATE_WAITTING_FOR_CONFIRM_CONTACT 【待确认联系信息】&lt;/li&gt; &lt;li&gt;APPLYMENT_STATE_WAITTING_FOR_CONFIRM_LEGALPERSON 【待账户验证】&lt;/li&gt; &lt;li&gt;APPLYMENT_STATE_PASSED 【审核通过】&lt;/li&gt; &lt;li&gt;APPLYMENT_STATE_FREEZED【已冻结】&lt;/li&gt; &lt;/ul&gt; | [optional] 
**rejectParam** | **string** | &lt;span style&#x3D;\&quot;color: #333333; font-family: Arial, sans-serif;\&quot;&gt;驳回参数&lt;/span&gt; | [optional] 
**rejectReason** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


