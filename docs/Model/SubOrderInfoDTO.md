# SubOrderInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | &lt;p&gt;收款商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**bankOrderId** | **string** | &lt;p&gt;支付机构在渠道侧的外部商户订单号，微信商户单号/支付宝商家订单号&lt;/p&gt; | [optional] 
**channelOrderId** | **string** | &lt;p&gt;该笔订单银网联生成的唯一订单号&lt;/p&gt; | [optional] 
**orderAmount** | **float** | 订单金额 | [optional] 
**payAmount** | **float** | 支付金额 | [optional] 
**unSplitAmount** | **float** | 剩余可分账金额(用于分账场景) | [optional] 
**goodsName** | **string** | &lt;p&gt;商品描述&lt;/p&gt; | [optional] 
**merchantFee** | **float** | 商户手续费 | [optional] 
**customerFee** | **float** | 用户手续费 | [optional] 
**memo** | **string** | &lt;p&gt;自定义参数，展示在交易对账单中&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING：订单待支付&lt;br /&gt;SUCCESS：订单支付成功&lt;br /&gt;TIME_OUT：订单已过期&lt;/p&gt; | [optional] 
**payWay** | **string** | &lt;p&gt;USER_SCAN：用户扫码 MERCHANT_SCAN：商家扫码 JS_PAY：JS支付 MINI_PROGRAM：小程序支付 WECHAT_OFFIACCOUNT：微信公众号支付 ALIPAY_LIFE：生活号支付 FACE_SCAN_PAY：刷脸支付 SDK_PAY：SDK支付 H5_PAY：H5支付 ONEKEYPAY：一键支付 BINDCARDPAY：绑卡支付 E_BANK：网银支付 ENTERPRISE_ACCOUNT_PAY：企业账户支付 ACCOUNT_BOOK_PAY: 记帐簿支付 BANKACCOUNT_PAY：银行账户支付 EASYPAY：易缴费 H5_PAY_M：H5支付 CREDIT_PAY：信用分 EASYSHARE：易分账 DIRECT_PAY：云微直接支付 UNCONSCIOUS_PAY：云微无感支付 STATICQR：静态台牌 INSTALLMENT：信用卡分期 WALLET_PAY：易宝钱包支付 OVERSEASCARDPAY：境外卡支付 COMPREHENSIVE_SDK：网银B2C移动端 BATCHPAY：批量支付 SBKPAY：社保卡支付 BANKTRANSFERPAY：银行转账支付 POS：刷卡支付 FACEPAY：刷脸付 AGREEMENTPAY：协议支付&lt;/p&gt; | [optional] 
**paySuccessDate** | **string** | &lt;p&gt;支付成功时间&lt;/p&gt; | [optional] 
**fundProcessType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;DELAY_SETTLE:分账&lt;br /&gt;REAL_TIME:不分账&lt;/p&gt; | [optional] 
**channel** | **string** | &lt;p&gt;WECHAT：微信ALIPAY：支付宝UNIONPAY：银联APPLEPAY：苹果支付&amp;nbsp;DCEP:数字人民币&lt;/p&gt; | [optional] 
**ypPromotionInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YpPromotionInfoDTO[]**](YpPromotionInfoDTO.md) |  | [optional] 
**outClearChannel** | **string** | &lt;p&gt;清算核验渠道:&lt;br /&gt;NUCC：网联&lt;br /&gt;UP : 银联&lt;br /&gt;OTHER : 三方&lt;/p&gt; | [optional] 
**fundControlCsStatus** | **string** | &lt;p&gt;INIT:处理中&lt;/p&gt; &lt;p&gt;FROZEN:已冻结&lt;/p&gt; &lt;p&gt;UN_FROZEN:已解冻&lt;/p&gt; | [optional] 
**csUnFrozenCompleteDate** | **string** | &lt;p&gt;管控订单解冻时间&lt;/p&gt; | [optional] 
**receiverAccountType** | **string** | &lt;p&gt;DIVIDE_PENDING_ACCOUNT: 分账在途账户&lt;/p&gt; | [optional] 
**channelPromotionInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\ChannelPromotionInfoDTO[]**](ChannelPromotionInfoDTO.md) |  | [optional] 
**realPayAmount** | **float** |  | [optional] 
**channelSettleAmount** | **float** |  | [optional] 
**settleAmount** | **float** |  | [optional] 
**sumDiscountPromotionAmount** | **float** | &lt;p&gt;渠道免充值卡券金额之和&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


