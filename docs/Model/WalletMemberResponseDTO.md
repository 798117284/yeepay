# WalletMemberResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回码的详细说明&lt;/p&gt; | [optional] 
**walletUserNo** | **string** | &lt;p&gt;用户在易宝钱包生成的唯一编号&lt;/p&gt; | [optional] 
**walletStatus** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;AVAILABLY:正常&lt;br /&gt;UNACTIVED:未激活&lt;br /&gt;CANCAEL:已注销(注销会返回错误码)&lt;/p&gt; | [optional] 
**walletAccountStatus** | **string** | &lt;p&gt;钱包账户状态，如果不是正常，则不允许发起钱包交易行为&lt;/p&gt; 可选项如下: ACCOUNT_AVAILABLE:账户正常 ACCOUNT_FROZEN:账户冻结 ACCOUNT_CANCELLED:账户注销 | [optional] 
**balance** | **string** | &lt;p&gt;钱包账户当前总余额，单位元，精确到小数点后两位&lt;/p&gt; | [optional] 
**name** | **string** | &lt;p&gt;注册用户的名称&lt;/p&gt; | [optional] 
**certificateType** | **string** | &lt;p&gt;IDENTITY_CARD：身份证&lt;/p&gt; | [optional] 
**certificateNo** | **string** | &lt;p&gt;显示前6后2，中间为*&lt;/p&gt; | [optional] 
**walletCategory** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;ONE_CATEGORY:一类&lt;br /&gt;TWO_CATEGORY:二类 &lt;br /&gt;THREE_CATEGORY:三类&lt;/p&gt; | [optional] 
**tradePswdSet** | **bool** | TRUE：已设置 | [optional] 
**bindCardNums** | **string** | &lt;p&gt;已绑定卡数量&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


