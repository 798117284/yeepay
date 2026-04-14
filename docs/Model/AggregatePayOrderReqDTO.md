# AggregatePayOrderReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\MerchantDTO**](MerchantDTO.md) |  | 
**mchTransactionNo** | **string** | &lt;p&gt;由商户侧生成的唯一请求标识，用于标记一次支付交易请求。若同一笔订单更换支付方式或更换付款人，该商户请求流水号也许更换，否则会被幂等返回。&lt;/p&gt; | [optional] 
**mchOrderNo** | **string** | &lt;p&gt;交易时传入，原样返回&lt;/p&gt; | 
**amount** | **float** | &lt;p&gt;单位： 元， 两位小数， 最低 0.01&lt;/p&gt; | 
**payType** | **string** | &lt;div&gt; &lt;pre&gt;支付方式：&lt;/pre&gt; &lt;pre&gt;&amp;nbsp;&lt;/pre&gt; &lt;/div&gt; 可选项如下: WECHAT_JSAPI:微信公众号支付 WECHAT_APP:微信APP支付 WECHAT_APPLET:微信小程序支付 ALIPAY_LIFE:支付宝生活号支付 ALIPAY_APPLET:支付宝小程序支付 ALIPAY_NATIVE:支付宝主扫支付 | 
**payLimit** | **string** | &lt;p&gt;本次交易禁用的付款方式，默认不禁用；示例值：NO_CREDIT&lt;/p&gt; | [optional] 
**wechatPayParams** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatPayParamsDTO**](WechatPayParamsDTO.md) |  | [optional] 
**aliPayParams** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliPayParamsDTO**](AliPayParamsDTO.md) |  | [optional] 
**scene** | **string** | &lt;p&gt;场景支付方式为微信时，可选值ONLINE/OFFLINE/BAOXIAN/GONGYI/DC_SEPARATION/DIGITAL/REGISTRATION/PRIVATE_EDUCATION； 支付方式为支付宝支付时，可选值OFFLINE/LARGE/REGISTRATION&lt;/p&gt; | [optional] 
**remark** | **string** |  | [optional] 
**productCoupons** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ProductCouponDTO[]**](ProductCouponDTO.md) | &lt;p&gt;本次订单可用的单品券id列表&lt;/p&gt; | [optional] 
**ypPromotions** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\YpPromotionDTO[]**](YpPromotionDTO.md) | &lt;p&gt;amount:营销金额（自定义补贴商户时，不需要传参）&lt;br /&gt;type:营销类型&lt;/p&gt; &lt;p&gt;营销类型枚举值：&lt;br /&gt;CUSTOM_REDUCTION:自定义用户支付立减&lt;br /&gt;用户支付金额&#x3D;订单金额-自定义立减金额&lt;br /&gt;订单入账金额&#x3D;订单金额&lt;br /&gt;CUSTOM_ALLOWANCE:自定义补贴商户（自定义补贴商户需要在支付清算完成后，发起调用补贴申请）&lt;br /&gt;用户支付金额&#x3D;订单金额&lt;br /&gt;订单入账金额&#x3D;订单金额+自定义补贴金额&lt;/p&gt; | [optional] 
**expiredTime** | **string** | &lt;p&gt;该笔订单允许付款最晚时间，建议大于1分钟；注意：微信、支付宝交易有订单超时时间，默认两小时关单；请求格式：yyyy-MM-dd HH:mm:ss；&lt;/p&gt; | 
**riskInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\RiskInfoDTO**](RiskInfoDTO.md) |  | 
**terminalDevice** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\TerminalDeviceDTO**](TerminalDeviceDTO.md) |  | [optional] 
**notifyUrl** | **string** | &lt;p&gt;支付结果异步通知地址，http或https开头&lt;/p&gt; | 
**fundProcessType** | **string** | &lt;p&gt;需同时传入divideDetail&lt;/p&gt; 可选项如下: DELAY_SETTLE:需要分账 REAL_TIME:不需要分账 REAL_TIME_DIVIDE:实时分账 | [optional] 
**divideAccountInfo** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\DivideAccountInfoDTO**](DivideAccountInfoDTO.md) |  | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;记账簿编号&lt;br /&gt;支持收款至预收账户&lt;br /&gt;记账簿编号不为空时，fundProcessType必须上送REAL_TIM&lt;/p&gt; | [optional] 
**feeSubsidy** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\FeeSubsidyDTO**](FeeSubsidyDTO.md) |  | [optional] 
**csUrl** | **string** | &lt;p&gt;清算成功服务器回调地址，不传则不通知。详见&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/ptssfk/spis/5fc9ae6896818f001b300bce\&quot;&gt;清算结果通知&lt;/a&gt;&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


