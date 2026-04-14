# PersonalInformationAuthResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**ybOrderId** | **string** | &lt;p&gt;易宝单号&lt;/p&gt; | [optional] 
**authStatus** | **string** | &lt;p&gt;&amp;nbsp;&lt;/p&gt; 可选项如下: SUCCESS:认证通过 FAILURE:认证未通过 NOT_AUTH:未经认证 (业务流转过程失败, 未能拿到实际结果, 这个状态不能完全判定为信息有误) | 
**code** | **string** | &lt;p&gt;返回码, 00000: 成功, 其他请参照码表&lt;/p&gt; &lt;div data-page-id&#x3D;\&quot;LdaBdyEC8oDqJkxQAjyc3nd7nXf\&quot; data-docx-has-block-data&#x3D;\&quot;true\&quot;&gt;&amp;nbsp;&lt;/div&gt; | 
**message** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | [optional] 
**collectedFee** | **string** | &lt;p&gt;&lt;/p&gt; &lt;div&gt; &lt;pre&gt;NO_NEED: 不计费&lt;/pre&gt; &lt;div&gt; &lt;pre&gt;COLLECTED: 计费&lt;/pre&gt; &lt;/div&gt; &lt;/div&gt; | [optional] 
**carrierType** | **string** | &lt;div data-page-id&#x3D;\&quot;GCpHdnygLo9MyjxPUnNcAQsun5b\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IA2FdTJKTof0EvxvUZ9cAEycned\&quot;&gt;运营商类型：YD：移动 、LT：联通、DX：电信&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


