# RechargeApiV2ResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;UA00000 成功,其他请参考错误码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;对于返回码的描述信息&lt;/p&gt; | 
**orderNo** | **string** | &lt;p&gt;此订单在易宝的订单号&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户订单号 同入参&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;业务主体商编&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;INIT:已受理&lt;br /&gt;PAY_SUCCESS:支付成功&lt;br /&gt;FAIL:失败&lt;br /&gt;SUCCESS: 充值成功&lt;/p&gt; | [optional] 
**orderAmount** | **float** | &lt;p&gt;充值金额&lt;/p&gt; | [optional] 
**remitComment** | **string** | &lt;p&gt;打款附言- 仅银行转账方式会返回&lt;/p&gt; | [optional] 
**payUrl** | **string** | &lt;p&gt;收银台链接地址,仅限B2B,B2C方式会返回&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


