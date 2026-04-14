# OrderInfoDtoV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | &lt;p&gt;商户请求号，需要保持在商户下唯一&lt;/p&gt; | 
**orderAmount** | **float** | &lt;p&gt;订单金额&lt;/p&gt; | 
**fundProcessType** | **string** | &lt;p&gt;分账标识,默认不分账&lt;br /&gt;可选项如下:&lt;br /&gt;DELAY_SETTLE:分账&lt;br /&gt;REAL_TIME:不分账&lt;/p&gt; 可选项如下: DELAY_SETTLE:分账 REAL_TIME:不分账 | [optional] 
**goodsName** | **string** | &lt;p&gt;商品名称&lt;/p&gt; | 
**expiredTime** | **string** | &lt;p&gt;订单有效期-截止时间 格式yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**notifyUrl** | **string** | &lt;p&gt;接收支付结果通知的服务器地址，不传则不通知&lt;/p&gt; | [optional] 
**memo** | **string** | &lt;p&gt;自定义对账备注&lt;/p&gt; | [optional] 
**ypPromotionInfo** | **string** | &lt;p&gt;json格式；需要参加易宝营销活动的可传入此值；如需参加营销活动，请先联系易宝运营进行配置，否则传入不生效，按无营销活动支付 type:营销类型营销类型枚举值：CUSTOM_ALLOWANCE:自定义补贴商户（自定义补贴商户需要在支付清算完成后，发起调用补贴申请） 用户支付金额&#x3D;订单金额 订单入账金额&#x3D;订单金额+自定义补贴金额 示例值：自定义补贴商户[{\&quot;type\&quot;:\&quot;CUSTOM_ALLOWANCE\&quot;}]&lt;/p&gt; | [optional] 
**csUrl** | **string** | &lt;p&gt;接收清算结果通知的服务器地址，不传则不通知&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;收款方记账薄编号&lt;br /&gt;支持收款至预收账户记账簿编号不为空时，fundProcessType必须上送REAL_TIME&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


