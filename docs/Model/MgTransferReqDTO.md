# MgTransferReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;由商户自定义生成&lt;/p&gt; | 
**fromMerchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**toMerchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**toAccountType** | **string** | 可选项如下: FUND_ACCOUNT:商户支付账户 MARKET_ACCOUNT:营销账户（当为此参数时，fromMerchantNo和toMerchantNo需要保持一致） FEE_ACCOUNT:手续费账户（当为此参数时，fromMerchantNo和toMerchantNo需要保持一致） SPECIAL_FUND_ACCOUNT:专款账户（当为此参数时，toAccountNo不能为空 | 
**orderAmount** | **string** | &lt;p&gt;转账金额&lt;/p&gt; | 
**usage** | **string** | &lt;p&gt;用途&lt;/p&gt; | 
**feeChargeSide** | **string** | &lt;p&gt;OUTSIDE:转出方承担,&lt;br /&gt;INSIDE:转入方承担(若不传默认转出方承担)&lt;/p&gt; 可选项如下: OUTSIDE:转出方承担 INSIDE:转入方承担(若不传默认转出方承担) | [optional] 
**notifyUrl** | **string** | &lt;p&gt;不传则不通知&lt;br /&gt;回调内容请参看：&lt;a href&#x3D;\&quot;https://boss3g.yeepay.com/yop-boss/api/edit?apiId&#x3D;3275#anchor7\&quot;&gt;结果通知&lt;/a&gt;&lt;/p&gt; | [optional] 
**riskInfo** | **string** | &lt;p&gt;请通过json格式传参&lt;/p&gt; | [optional] 
**toAccountNo** | **string** | &lt;p&gt;转入方账号&lt;/p&gt; | [optional] 
**auditorId** | **string** | &lt;p&gt;复核人编号&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


