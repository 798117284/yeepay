# StandardOpenAccountQueryResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回状态码AM00000 成功，其他请参考错误码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | 
**merchantNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;universal-card-text\&quot;&gt;易宝支付分配的的商户唯一标识&lt;/span&gt;&lt;/div&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝内部生成的唯一单号&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: SUCCESS:成功 FAIL:失败 PROCESS:请求已受理 | [optional] 
**bankAccountNo** | **string** | &lt;p&gt;银行账户号(成功时返回)&lt;br /&gt;此字段为后续请求查询余额，资金划拨等服务接口时必须参数，请着重记录。&lt;/p&gt; | [optional] 
**bankCustomerNo** | **string** | &lt;p&gt;此字段已废弃&lt;/p&gt; | [optional] 
**openRequestTime** | **string** | &lt;p&gt;格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**openCompleteTime** | **string** | &lt;p&gt;开户完成时间(成功时返回)&lt;br /&gt;格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;失败原因(失败时返回)&lt;/p&gt; | [optional] 
**authType** | **string** | 可选项如下: NO_AUTH:无须认证 SHORT_MSG_AUTH:短信认证 | [optional] 
**accountStatus** | **string** | 可选项如下: NO_ACTIVATED:待激活 USING:可用 FROZEN:冻结 CLOSE:已销户 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


