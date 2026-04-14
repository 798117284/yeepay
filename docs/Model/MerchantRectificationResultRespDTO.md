# MerchantRectificationResultRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rejectReason** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户的整改协查意见，请根据整改意见进行资料的补充和修改。&lt;/span&gt;&lt;/div&gt; | [optional] 
**supplyEndDate** | [**\DateTime**](\DateTime.md) | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户的整改协查截止时间，请在截止时间前完成材料的补充。如果逾期未补充，审核会进行相应的处置措施。&lt;/span&gt;&lt;/div&gt; &lt;/div&gt; | [optional] 
**rectificationUrl** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户的整改协查链接。可以通过该链接，对商户需要整改的材料进行补充。&lt;/span&gt;&lt;/div&gt; | [optional] 
**qualificationList** | **string[]** | &lt;p&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户的整改协查资质列表，用于查询商户具体哪些资质需要进行补充和修改。&lt;/span&gt;&lt;/p&gt; | [optional] 
**requestNo** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**status** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;商户当前的整改协查状态。&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;待整改：代表商户需要进行材料的整改；&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;7\&quot;&gt;审核中：代表商户整改协查材料已经提交，等待审核完成；&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;9\&quot;&gt;审核完成：代表商户的整改协查已经完成，当前状态为业务&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;终态；&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;11\&quot;&gt;审核拒绝：代表商户的整改协查材料已经被审核拒绝，请联系运营。&lt;/span&gt;&lt;/div&gt; 可选项如下: WAITING_SUBMIT:待整改 PENDING:审核中 COMPLETE:审核完成 AUDIT_TERMINATED:审核拒绝 | [optional] 
**returnCode** | **string** |  | 
**returnMsg** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


