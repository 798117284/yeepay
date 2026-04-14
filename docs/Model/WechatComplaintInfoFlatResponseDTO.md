# WechatComplaintInfoFlatResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;返回码 00000：成功&lt;br /&gt;非00000：失败&lt;/p&gt; | [optional] 
**message** | **string** | &lt;p&gt;返回消息&lt;/p&gt; | [optional] 
**complaintNo** | **string** | &lt;p&gt;投诉单对应的投诉单号&lt;/p&gt; | [optional] 
**complaintTime** | **string** | &lt;p&gt;消费者投诉时间，格式为yyyy-MM-dd HH:mm:ss，&lt;br /&gt;yyyy-MM-dd表示年月日，HH:mm:ss表示时分秒。&lt;/p&gt; | [optional] 
**complaintDetail** | **string** | &lt;p&gt;投诉的具体描述&lt;/p&gt; | [optional] 
**complaintState** | **string** | &lt;p&gt;标识当前投诉单所处的处理阶段&lt;br /&gt;当投诉来源为微信账单时，枚举为：&lt;br /&gt;PENDING:待处理&lt;br /&gt;PROCESSING:处理中&lt;br /&gt;PROCESSED:已处理完成&lt;/p&gt; &lt;p&gt;当投诉来源为微信小程序时，枚举为:&lt;/p&gt; &lt;div&gt; &lt;div&gt;101:平台客服处理中&lt;/div&gt; &lt;div&gt;102:用户取消申请&lt;/div&gt; &lt;div&gt;103:平台客服处理中&lt;/div&gt; &lt;div&gt;104:平台客服处理中&lt;/div&gt; &lt;div&gt;105:平台客服处理中&lt;/div&gt; &lt;div&gt;106:待商家补充凭证&lt;/div&gt; &lt;div&gt;107:平台客服处理中&lt;/div&gt; &lt;div&gt;108:待双方补充凭证&lt;/div&gt; &lt;div&gt;109:平台客服处理中&lt;/div&gt; &lt;div&gt;112:投诉已完结&lt;/div&gt; &lt;div&gt;115:投诉已完结&lt;/div&gt; &lt;div&gt;116:投诉已完结&lt;/div&gt; &lt;div&gt;201:待处理&lt;/div&gt; &lt;div&gt;202:商家超时未回应，待用户确认&lt;/div&gt; &lt;div&gt;203:已回应,待用户确认&lt;/div&gt; &lt;div&gt;204:已回应,待用户确认&lt;/div&gt; &lt;div&gt;205:投诉已完结&lt;/div&gt; &lt;div&gt;206:平台已判定为商责，待上传处理凭证&lt;/div&gt; &lt;div&gt;207:平台客服核实凭证中&lt;/div&gt; &lt;div&gt;208:超时未上传凭证&lt;/div&gt; &lt;div&gt;209:投诉已关闭&lt;/div&gt; &lt;div&gt;305:平台客服处理中&lt;/div&gt; &lt;div&gt;307:平台客服处理中&lt;/div&gt; &lt;div&gt;308:平台已判定为商责，待用户退货中&lt;/div&gt; &lt;div&gt;309:平台已判定为商责，待用户退货中&lt;/div&gt; &lt;div&gt;310:平台客服处理中&lt;/div&gt; &lt;div&gt;311:签收异常&lt;/div&gt; &lt;div&gt;312:平台判定商家责任，平台退款中&lt;/div&gt; &lt;/div&gt; &lt;p&gt;当投诉来源为支付宝账单时，枚举为：&lt;br /&gt;DROP_COMPLAIN:用户撤诉&lt;br /&gt;DROP_OVERDUE_COMPLAIN:超时后用户撤诉&lt;br /&gt;DROP_OVERDUE_PROCESSED:超时处理完成用户撤诉&lt;br /&gt;DROP_PROCESSED:处理完成用户撤诉&lt;br /&gt;OVERDUE:超时未处理&lt;br /&gt;OVERDUE_PROCESSED:超时处理完成&lt;br /&gt;PART_OVERDUE:部分超时未处理&lt;br /&gt;PROCESSED:处理完成&lt;br /&gt;PROCESSING:处理中&lt;br /&gt;WAIT_PROCESS:待处理&lt;/p&gt; | [optional] 
**complaintOpenId** | **string** | &lt;p&gt;投诉人在微信商户appid下的唯一标识&lt;/p&gt; | [optional] 
**complaintContact** | **string** | &lt;p&gt;投诉人联系方式&lt;/p&gt; | [optional] 
**complaintCount** | **int** | 用户首次发起投诉记为1次，用户每有一次继续投诉就加1 | [optional] 
**wechatMerchantNo** | **string** | &lt;p&gt;被诉的微信商户号&lt;/p&gt; | [optional] 
**channelMerchantNo** | **string** | &lt;p&gt;渠道商户号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;被诉的易宝商户号&lt;/p&gt; | [optional] 
**isResponse** | **bool** | &lt;p&gt;投诉单是否有待回复的用户留言&lt;/p&gt; | [optional] 
**wechatOrderNo** | **string** | &lt;p&gt;投诉单关联的微信订单号&lt;/p&gt; | [optional] 
**channelOrderNo** | **string** | &lt;p&gt;渠道订单号&lt;/p&gt; | [optional] 
**merchantOrderNo** | **string** | &lt;p&gt;投诉单关联的易宝商户订单号&lt;/p&gt; | [optional] 
**amount** | **string** | &lt;p&gt;订单金额，单位（元）&lt;/p&gt; | [optional] 
**bankOrderNo** | **string** | &lt;p&gt;银行订单号&lt;/p&gt; | [optional] 
**isFullRefunded** | **bool** | 投诉单是否已全额退款 | [optional] 
**tradeTime** | **string** | &lt;p&gt;交易时间&lt;/p&gt; | [optional] 
**refundTime** | **string** | &lt;p&gt;退款时间&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;交易投诉状态&lt;br /&gt;可选项如下:&lt;br /&gt;DROP_COMPLAIN:用户撤诉&lt;br /&gt;OVERDUE:超时未处理&lt;br /&gt;PROCESSED:已退款&lt;br /&gt;REFUNDING:退款处理中&lt;br /&gt;WAIT_PROCESS:待处理&lt;/p&gt; | [optional] 
**complaintMediaDTOList** | **string** | &lt;p&gt;用户上传的投诉相关资料，此字段为 JsonArray格式&lt;/p&gt; | [optional] 
**processTime** | **string** | &lt;p&gt;处理时间&lt;/p&gt; | [optional] 
**processCode** | **string** | &lt;p&gt;商家处理结果码 枚举如下：&lt;br /&gt;CONSENSUS_WITH_CLIENT：已联系到用户，协商一致，无异议&lt;br /&gt;RECTIFICATION_NO_REFUND：不涉及退款，已针对投诉内容进行整改&lt;br /&gt;REFUND：已退款，用户无异议SUBMIT_PROOF_NOT_CONTACTED：已提交证明材料ORTHER：其他&lt;/p&gt; | [optional] 
**processRemark** | **string** | &lt;p&gt;商家处理备注例如：与客户进行对接，已完成处理，协商进行退款&lt;/p&gt; | [optional] 
**showNo** | **string** | &lt;p&gt;投诉展示单号&lt;/p&gt; | [optional] 
**userTagList** | **string** | &lt;p&gt;【用户标签列表】 用户标签列表可选取值：TRUSTED: 此类用户满足极速退款条件HIGH_RISK: 高风险投诉，请按照运营要求优先妥善处理&lt;/p&gt; | [optional] 
**problemDescription** | **string** | &lt;p&gt;用户发起投诉前选择的faq标题&lt;/p&gt; | [optional] 
**problemType** | **string** | &lt;p&gt;问题类型为申请退款的单据是需要最高优先处理的单据 &lt;br /&gt;可选取值：&lt;br /&gt;REFUND: 申请退款&lt;br /&gt;SERVICE_NOT_WORK: 服务权益未生效&lt;br /&gt;OTHERS: 其他类型&lt;/p&gt; | [optional] 
**applyRefundAmount** | **string** | &lt;p&gt;仅当问题类型为申请退款时, 有值, (单位:元)&lt;/p&gt; | [optional] 
**returnId** | **string** |  | [optional] 
**wechatMerchantName** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


