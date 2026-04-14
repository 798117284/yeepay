# BindCardRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;系统商或者平台商商编，如果是单商户，和收单商户商编保持一致&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;收单商户编号&lt;/p&gt; | 
**merchantFlowId** | **string** | &lt;p&gt;商户绑卡唯一流水号，需保证唯一&lt;/p&gt; | 
**userNo** | **string** | &lt;p&gt;必须保证每个支付用户唯一，绑卡的标识性数据。形成绑卡关系后，卡会绑定在这个用户标识下。&lt;br /&gt;如子商户性质为个人或个体工商户，则 userNo 必须与 merchantNo 一致。&lt;/p&gt; | 
**userType** | **string** | 可选项如下: USER_ID:用户ID WECHAT:微信号 PHONE:用户注册手机号 ID_CARD:用户身份证号 IMEI:imei MAC:网卡地址 EMAIL:用户注册email AGREEMENT_NO:用户纸质订单协议号 | 
**expireTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;请求过期时间，格式:yyyy-MM-dd HH:mm:ss&lt;/p&gt; | 
**pageReturnUrl** | **string** | &lt;p&gt;绑卡成功或失败后回跳商户应用的页面跳转地址&lt;/p&gt; | 
**bindNotifyUrl** | **string** | &lt;p&gt;用户绑卡成功或超时通知商户结果地址&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


