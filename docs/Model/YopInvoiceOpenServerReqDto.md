# YopInvoiceOpenServerReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;p&gt;只能是大小写字母和数字，最小长度：20&lt;br /&gt;位，最大长度：40位。&lt;br /&gt;示例值：requestld100666001370197734&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;开票企业在易宝侧进件时的商编，开票税号为进件时的税号&lt;/p&gt; | 
**areaCode** | **string** | &lt;p&gt;大连、青岛、宁波、厦门、深圳有独立的省市区编码，不要选到所属省&lt;/p&gt; 可选项如下: 1100:北京市 1200:天津市 1300:河北省 1400:山西省 1500:内蒙古自治区 2100:辽宁省 2102:大连市 2200:吉林省 2300:黑龙江省 3100:上海市 3200:江苏省 3300:浙江省 3302:宁波市 3400:安徽省 3500:福建省 3502:厦门市 3600:江西省 3700:山东省 3702:青岛市 4100:河南省 4200:湖北省 4300:湖南省 4400:广东省 4403:深圳市 4500:广西壮族自治区 4600:海南省 5000:重庆市 5100:四川省 5200:贵州省 5300:云南省 5400:西藏自治区 6100:陕西省 6200:甘肃省 6300:青海省 6400:宁夏回族自治区 6500:新疆维吾尔自治区 | 
**digitalAccount** | **string** | &lt;p&gt;开票员/财务在电子税务局预留的手机号，该账号需要已经在电子税局成为开票员&lt;/p&gt; | [optional] 
**taxLoginRole** | **string** | &lt;p&gt;选择登录账号所属的身份&lt;/p&gt; 可选项如下: 1:开票员 4:财务负责人 5:法定代表人 | [optional] 
**taxLoginPwd** | **string** | &lt;p&gt;开票员/财务在电子税务局的登录密码&lt;/p&gt; | [optional] 
**contactEmail** | **string** | &lt;p&gt;该邮箱将用来接收渠道登录的账号密码。如已调用企业信息注册接口，并传入联系人邮箱信息，将取注册时信息。如未调用企业信息注册接口，且未传入联系人邮箱信息，将取商编进件时的联系人邮箱。&lt;/p&gt; | [optional] 
**callBackIUrl** | **string** |  | [optional] 
**loginMobile** | **string** | &lt;div data-page-id&#x3D;\&quot;VRQOdouzjoCpmJxdIcVcPEBInyF\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-AJ9eds6SCof2fYxPOYuc30tlnUe\&quot;&gt;渠道后台登陆手机号，后续需用该手机号完成渠道系列验证&lt;/div&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


