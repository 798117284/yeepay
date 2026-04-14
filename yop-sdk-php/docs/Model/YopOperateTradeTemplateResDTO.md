# YopOperateTradeTemplateResDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;00000表示成功，其他为错误返回&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息描述&lt;/p&gt; | [optional] 
**configMerchantNo** | **string** | &lt;p&gt;配置所属商编&lt;/p&gt; | [optional] 
**merchantRange** | **string** | &lt;p&gt;MERCHANT: 仅当前商户生效&lt;br /&gt;SUB_MERCHANT: 仅下级商户生效&lt;/p&gt; | [optional] 
**divideFlag** | **string** | &lt;p&gt;DELAY_SETTLE: 要分帐，延迟结算订单&lt;br /&gt;REAL_TIME: 不分账，实时订单&lt;/p&gt; | [optional] 
**payNotifyUrl** | **string** | &lt;p&gt;支付结果通知地址&lt;/p&gt; | [optional] 
**csNotifyUrl** | **string** | &lt;p&gt;清算结果通知地址&lt;/p&gt; | [optional] 
**refundNotifyUrl** | **string** | &lt;p&gt;退款结果通知地址&lt;/p&gt; | [optional] 
**ledgerNoNotifyUrl** | **string** | &lt;p&gt;接收分帐通知地址&lt;/p&gt; | [optional] 
**failNotify** | **string** | &lt;p&gt;NOTIFY: 支付失败需要通知&lt;br /&gt;UN_NOTIFY: 支付失败不需要通知&lt;/p&gt; | [optional] 
**timeOutNotify** | **string** | &lt;p&gt;NOTIFY: 订单过期需要通知&lt;br /&gt;UN_NOTIFY: 订单过期不需要通知&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


