# OrderInfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **string** | &lt;p&gt;订单号,商户下唯一&lt;/p&gt; | 
**orderAmount** | **float** | 订单金额 | 
**fundProcessType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;DELAY_SETTLE:分账订单&lt;br /&gt;REAL_TIME:普通订单&lt;/p&gt; 可选项如下: DELAY_SETTLE:分账订单 REAL_TIME:普通订单 | [optional] 
**goodsName** | **string** | &lt;p&gt;简单描述订单信息或商品简介，用于展示在收银台页面或者支付明细中。单笔收款必传，合单收款场景中请在子单域信息subOrderDetail里提供(*当商品名称超过85个字符时，易宝会默认保留前85个字符)&lt;/p&gt; | 
**expiredTime** | **string** | &lt;p&gt;订单过期时间，格式为yyyy-MM-dd HH:mm:ss&lt;br /&gt;为空时，默认在请求下单120分钟后失效&lt;br /&gt;最大30天&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;p&gt;接收支付结果的通知地址&lt;/p&gt; | [optional] 
**memo** | **string** | &lt;p&gt;对账备注。商户自定义参数，会展示在交易对账单中，支持85个字符（中文或者英文字母）&lt;/p&gt; | [optional] 
**ypPromotionInfo** | **string** | &lt;p&gt;json格式；需要参加易宝营销活动的可传入此值；如需参加营销活动，请先联系易宝运营进行配置，否则传入不生效，按无营销活动支付&lt;br /&gt;type:营销类型营销类型枚举值：CUSTOM_ALLOWANCE:自定义补贴商户（自定义补贴商户需要在支付清算完成后，发起调用补贴申请）用户支付金额&#x3D;订单金额订单入账金额&#x3D;订单金额+自定义补贴金额示例值：自定义补贴商户[{\&quot;type\&quot;:\&quot;CUSTOM_ALLOWANCE\&quot;}]&lt;/p&gt; | [optional] 
**businessInfo** | **string** | &lt;p&gt;自定义参数。使用外卡支付的订单，需要传入此值(JSON格式)&lt;/p&gt; | [optional] 
**csNotifyUrl** | **string** | &lt;p&gt;接收清算结果的通知地址，清算成功后会发送通知.&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


