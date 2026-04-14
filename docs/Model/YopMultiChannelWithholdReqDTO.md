# YopMultiChannelWithholdReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiveMerchantNo** | **string** | &lt;p&gt;抽佣接收方商编&lt;/p&gt; | 
**withholdRatio** | **float** | &lt;p&gt;抽佣比例,单位%&lt;br /&gt;&lt;br /&gt;示例：10，代表10%&lt;/p&gt; | 
**userNo** | **string** | &lt;p&gt;用户标识&lt;/p&gt; | 
**contributeMerchantNo** | **string** | &lt;p&gt;被抽佣方商编&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;请求号&lt;/p&gt; | 
**bindId** | **int** | &lt;p&gt;绑卡id&lt;/p&gt; | 
**withHoldId** | **string** | &lt;p&gt;提现id&lt;/p&gt; | 
**fundProcessType** | **string** | &lt;p&gt;资金处理类型&lt;/p&gt; &lt;p&gt;REAL_TIME(\&quot;实时订单,不需要分账(默认值)\&quot;)&lt;br /&gt;DELAY_SETTLE(\&quot;延迟分账\&quot;)&lt;/p&gt; | [optional] 
**notifyUrl** | **string** | &lt;p&gt;通知地址&lt;/p&gt; | 
**userType** | **string** | &lt;p&gt;用户标识类型&lt;/p&gt; &lt;p&gt;USER_ID:用户ID(默认值)&lt;/p&gt; &lt;p&gt;IMEI:imei MAC:网卡地址&lt;/p&gt; &lt;p&gt;EMAIL:用户注册email&lt;/p&gt; &lt;p&gt;PHONE:用户注册手机号&lt;/p&gt; &lt;p&gt;ID_CARD:用户身份证号&lt;/p&gt; &lt;p&gt;AGREEMENT_NO:用户纸质订单协议号&lt;/p&gt; &lt;p&gt;WECHAT:微信号&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


