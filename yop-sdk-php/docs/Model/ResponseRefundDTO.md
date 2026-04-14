# ResponseRefundDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;OPR00000表示易宝受理成功，退款状态请以\&quot;status\&quot;为准&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;信息描述，对应code的中文信息&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;发起方商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**orderId** | **string** | &lt;p&gt;商户收款订单号&lt;/p&gt; | [optional] 
**refundRequestId** | **string** | &lt;p&gt;商户退款请求号&lt;/p&gt; | [optional] 
**uniqueRefundNo** | **string** | &lt;p&gt;商户退款请求对应在易宝的退款单号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;PROCESSING：退款处理中&lt;br /&gt;SUCCESS：退款成功&lt;br /&gt;FAILED：退款失败&lt;br /&gt;CANCEL:退款关闭,商户通知易宝结束该笔退款后返回该状态&lt;br /&gt;SUSPEND:退款中断,如需继续退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;进行打款退款;如想结束退款,请调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/ptssfk/jiaoyi/options__rest__v1.0__trade__refund__end\&quot;&gt;结束退款&lt;/a&gt;来关闭退款订单&lt;br /&gt;说明:调用&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__fast\&quot;&gt;申请极速退款&lt;/a&gt;、&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__supply\&quot;&gt;上送卡信息退款&lt;/a&gt;、&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/bzshsfk/jiaoyi/options__rest__v1.0__trade__refund__end\&quot;&gt;结束退款&lt;/a&gt;前,请联系易宝提前开通相应的退款服务。&lt;/p&gt; | [optional] 
**refundAmount** | **string** | &lt;p&gt;退款申请金额&lt;/p&gt; | [optional] 
**refundRequestDate** | **string** | &lt;p&gt;退款受理时间&lt;/p&gt; | [optional] 
**refundMerchantFee** | **string** | &lt;p&gt;在退款成功时返回&lt;/p&gt; | [optional] 
**refundAccountDetail** | **string** | &lt;p&gt;debitAmount：扣账金额&lt;br /&gt;accountType：扣账资金来源&lt;br /&gt;扣账资金来源枚举值：&lt;br /&gt;FUND_ACCOUNT：资金账户余额&lt;br /&gt;DIVIDE_ACCOUNT：分账账户余额&lt;br /&gt;SETTLE_ACCOUNT：待结算账户余额&lt;/p&gt; &lt;div&gt; &lt;pre&gt;HANDLE_ACCOUNT：后收手续费账户余额&lt;/pre&gt; &lt;/div&gt; | [optional] 
**refundCsFinishDate** | **string** | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**creditOrderId** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


