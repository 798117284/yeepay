# QueryMemberInfoResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**memberNo** | **string** | &lt;p&gt;会员编号&lt;/p&gt; | [optional] 
**externalUserId** | **string** | &lt;p&gt;用户在商户侧的用户ID&lt;/p&gt; | [optional] 
**walletStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;UNACTIVED:未激活&lt;br /&gt;AVAILABLY:正常&lt;br /&gt;FREEZE:冻结&lt;br /&gt;CANCEL:已注销&lt;/p&gt; | [optional] 
**walletAccountStatus** | **string** | &lt;p&gt;钱包账户状态，如果不是正常，则不允许发起钱包交易行为&lt;/p&gt; 可选项如下: ACCOUNT_AVAILABLE:账户正常 ACCOUNT_FROZEN:账户冻结 ACCOUNT_CANCELLED:账户注销 | [optional] 
**walletCategory** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;ONE_CATEGORY:一类&lt;br /&gt;TWO_CATEGORY:二类&lt;br /&gt;THREE_CATEGORY:三类&lt;/p&gt; | [optional] 
**renewStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;VALID:有效&lt;br /&gt;INVALID:失效&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


