# OnlineBankRechargeApiRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码 | &lt;strong&gt;请留意, 该接口在成功返回时, 此字段返回为 null&lt;/strong&gt;&lt;/p&gt; | [optional] 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | [optional] 
**orderNo** | **string** | &lt;p&gt;易宝生成的唯一订单号&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;充值商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | [optional] 
**status** | **string** | 可选项如下: INIT:处理中 FAIL:失败 | [optional] 
**orderAmount** | **float** | &lt;p&gt;支付金额&lt;/p&gt; | [optional] 
**payUrl** | **string** | &lt;p&gt;收银台链接，跳转到银行页面的支付url&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


