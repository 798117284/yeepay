# AgreementBindCardRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;业务发起方商户编号。业务上为必填参数*对于标准商户，此参数与收款商户编号一致；*对于平台商或入驻商户，此参数为平台商商户编号；&lt;/p&gt; | 
**merchantNo** | **string** |  | 
**merchantFlowId** | **string** |  | 
**userNo** | **string** | &lt;p&gt;用户标识：用于在易宝侧唯一标识一个用户，银行卡绑定即是基于用户进行的&lt;/p&gt; | 
**userType** | **string** | &lt;p&gt;用户标识类型&lt;/p&gt; &lt;p&gt;可选项如下:&lt;br /&gt;IMEI：imei&lt;br /&gt;MAC：网卡地址&lt;br /&gt;USER_ID：用户ID&lt;br /&gt;EMAIL：用户注册地址&lt;br /&gt;PHONE：用户注册手机号&lt;/p&gt; &lt;p&gt;ID_CARD：用户身份证号&lt;/p&gt; | 
**bankCardNo** | **string** |  | 
**cardType** | **string** | &lt;p&gt;&lt;span class&#x3D;\&quot;tag\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;支持卡类型&lt;/span&gt;&lt;/p&gt; &lt;p&gt;&lt;span class&#x3D;\&quot;tag\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;可选项如下:&lt;/span&gt;&lt;/p&gt; &lt;p&gt;&lt;span class&#x3D;\&quot;tag\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;OC&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;:&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;仅贷记卡支持&lt;/span&gt;&lt;/p&gt; &lt;p&gt;&lt;span class&#x3D;\&quot;tag\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;OD&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;:&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;仅借记卡支持&lt;/span&gt;&lt;/p&gt; &lt;p&gt;&lt;span class&#x3D;\&quot;tag\&quot; data-v-07c52057&#x3D;\&quot;\&quot;&gt;DC&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;:&lt;/span&gt;&lt;span data-v-07c52057&#x3D;\&quot;\&quot;&gt;借记卡、贷记卡均支持，默认值&lt;/span&gt;&lt;/p&gt; | [optional] 
**idCardNo** | **string** |  | 
**idCardType** | **string** | &lt;p&gt;证件类型&lt;/p&gt; &lt;p&gt;可选项如下:&lt;br /&gt;ID:身份证&lt;br /&gt;OFFICERS:军官证&lt;br /&gt;PASSPORT:护照&lt;br /&gt;REENTRY:回乡证&lt;br /&gt;TAIWAN:台胞证&lt;br /&gt;POLICE:警官证&lt;br /&gt;SOLDIER:士兵证&lt;br /&gt;HM_VISITORPASS:港澳居民往来内地通行证&lt;br /&gt;RESIDENCEBOOKLET:户口薄&lt;br /&gt;TEMPIDCARD:临时身份证&lt;br /&gt;FR_CARD:外国人居留证&lt;br /&gt;OTHER:其他证件&lt;/p&gt; | 
**userName** | **string** |  | 
**phone** | **string** |  | 
**cvv** | **string** | &lt;p&gt;当为信用卡时必填&lt;/p&gt; | [optional] 
**validthru** | **string** | &lt;p&gt;信用卡有效期， 格式： 月月年年， 如： 0722&lt;br /&gt;当为信用卡时必填&lt;/p&gt; | [optional] 
**pageVerify** | **bool** | &lt;p&gt;是否接受跳页签约&lt;/p&gt; &lt;p&gt;true:接受跳页签约&lt;/p&gt; &lt;p&gt;false:不接受跳页签约&lt;/p&gt; | [optional] 
**pageNotifyUrl** | **string** | &lt;p&gt;当pageVerify为true时必填&lt;/p&gt; | [optional] 
**bindNotifyUrl** | **string** | &lt;p&gt;当需要接收绑卡后端结果通知时，需要传入此值&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


