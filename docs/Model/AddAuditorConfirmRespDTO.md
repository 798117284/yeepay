# AddAuditorConfirmRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;接口返回码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;接口返回描述&lt;/p&gt; | [optional] 
**applyStatus** | **string** | &lt;p&gt;WAIT_VERIFY: 待审核人验证(一般是验证码错误时返回，可以继续验证码确认)&lt;br /&gt;SUCCESS: 成功&lt;br /&gt;FAIL: 失败(原因不确定，比如验证码校验通过，但是发现有重复手机号时会出现，不可继续验证码确认)&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


