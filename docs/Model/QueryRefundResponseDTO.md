# QueryRefundResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;结果码，OPR00000表示易宝受理成功，退款状态请以\&quot;status\&quot;为准&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;对应code的中文信息&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款请求号&lt;/p&gt; | [optional] 
**refundRequestId** | **string** | &lt;p&gt;商户退款请求号&lt;/p&gt; | [optional] 
**uniqueOrderNo** | **string** | &lt;p&gt;易宝收款订单号&lt;/p&gt; | [optional] 
**uniqueRefundNo** | **string** | &lt;p&gt;易宝退款订单号&lt;/p&gt; | [optional] 
**refundAmount** | **float** | &lt;p&gt;退款申请金额,单位:元&lt;/p&gt; | [optional] 
**returnMerchantFee** | **float** | &lt;p&gt;退回商户手续费金额,单位:元&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING：退款处理中&lt;br /&gt;SUCCESS：退款成功&lt;br /&gt;FAILED：退款失败&lt;br /&gt;CANCEL:退款关闭,商户通知易宝结束该笔退款后返回该状态&lt;br /&gt;SUSPEND:退款中断,如需继续退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;进行打款退款;如想结束退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__end\&quot;&gt;结束退款&lt;/a&gt;来关闭退款订单&lt;br /&gt;说明:调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__fast\&quot;&gt;申请极速退款&lt;/a&gt;、&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;、&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__end\&quot;&gt;结束退款&lt;/a&gt;前,请联系易宝提前开通相应的退款服务。&lt;/p&gt; | [optional] 
**description** | **string** | &lt;p&gt;退款原因的简要描述&lt;/p&gt; | [optional] 
**refundRequestDate** | **string** | &lt;p&gt;退款受理时间&lt;/p&gt; | [optional] 
**refundSuccessDate** | **string** | &lt;p&gt;退款成功时间&lt;/p&gt; | [optional] 
**failReason** | **string** | &lt;p&gt;退款失败原因&lt;/p&gt; | [optional] 
**realRefundAmount** | **float** | &lt;p&gt;用户付手续费场景下,实际退款金额即退款金额和退费金额之和&lt;/p&gt; | [optional] 
**cashRefundFee** | **float** | &lt;p&gt;用户实退金额&lt;/p&gt; | [optional] 
**bankPromotionInfoDTOList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\BankPromotionInfoDTO[]**](BankPromotionInfoDTO.md) | 渠道侧优惠退回列表 | [optional] 
**ypPromotionInfoDTOList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YpPromotionRefundInfoDTO[]**](YpPromotionRefundInfoDTO.md) | 易宝侧优惠退回列表 | [optional] 
**refundAccountDetail** | **string** | &lt;p&gt;debitAmount：扣账金额 &lt;br /&gt;accountType：扣账资金来源&lt;br /&gt;扣账资金来源枚举值：&lt;br /&gt;FUND_ACCOUNT：资金账户余额 &lt;br /&gt;DIVIDE_ACCOUNT：分账账户余额 &lt;br /&gt;SETTLE_ACCOUNT：待结算账户余额&lt;/p&gt; | [optional] 
**channelReceiverInfo** | **string** | &lt;p&gt;退款入账信息&lt;/p&gt; | [optional] 
**refundCsFinishDate** | **string** | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**bankRefundOrderNo** | **string** | &lt;p&gt;支付机构在渠道侧的外部商户订单号&lt;/p&gt; | [optional] 
**bankRefundOrderId** | **string** | &lt;p&gt;该笔订单在渠道侧的唯一订单号&lt;/p&gt; | [optional] 
**paymentMethod** | **string** | &lt;p&gt;支付方式: ACCOUNTBOOKPAY:记账簿支付 ALIPAY:支付宝 WECHAT:微信 UNIONPAY:云闪付 BANKACCOUNTPAY:银行账户支付 BANKTRANSFERPAY:银行转账支付 DCEP:数字人民币支付 E_BANK:网银支付 ENTERPRISEACCOUNTPAY:企业账户支付 INSTALLMENT:信用卡分期支付 MEMBERACCOUNTPAY:个人账户支付 NCPAY:快捷支付 OVERSEASCARDPAY:境外卡支付 POS:刷卡支付 YZS:一站式还款&lt;/p&gt; | [optional] 
**disAccountAmount** | **float** | &lt;p&gt;商户账户扣账金额&lt;/p&gt; | [optional] 
**orgFundControlCsStatus** | **string** | &lt;p&gt;FROZEN:已冻结&lt;/p&gt; &lt;p&gt;UN_FROZEN:已解冻&lt;/p&gt; | [optional] 
**orgCsUnFrozenCompleteDate** | **string** | &lt;p&gt;原单解冻完成时间&lt;/p&gt; | [optional] 
**orgBasicsProductFirst** | **string** | &lt;p&gt;原交易订单收方一级基础产品码&lt;/p&gt; | [optional] 
**orgBasicsProductSecond** | **string** | &lt;p&gt;原交易订单收方二级基础产品码&lt;/p&gt; | [optional] 
**orgBasicsProductThird** | **string** | &lt;p&gt;原交易订单收方三级基础产品码&lt;/p&gt; | [optional] 
**businessType** | **string** | &lt;p&gt;JOINT_OPERATION: 联营&lt;/p&gt; &lt;p&gt;DIRECT_OPERATION: 直营&lt;/p&gt; | [optional] 
**yopMerchantNo** | **string** |  | [optional] 
**yopMerchantName** | **string** |  | [optional] 
**creditOrderId** | **string** | &lt;p&gt;信用分单号&lt;/p&gt; | [optional] 
**returnFeeContributeInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\FeeContributeInfoDTO[]**](FeeContributeInfoDTO.md) |  | [optional] 
**settleRefundAmount** | **float** |  | [optional] 
**sumDiscountPromRefundAmount** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


