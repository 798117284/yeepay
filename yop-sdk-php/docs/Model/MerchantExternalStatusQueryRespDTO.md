# MerchantExternalStatusQueryRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;响应码&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;返回信息描述&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | 
**merchantStatus** | **string** | 可选项如下: ACTIVE:活跃中 FROZEN:已冻结 OPERATION_EXCEPTION:运营异常 | 
**reasonList** | **string[]** | &lt;p&gt;SILENT_MERCHANT：沉默商户&lt;br /&gt;INSPECTION_EXCEPTION：巡检异常&lt;br /&gt;SUPPLEMENTARY_MATERIAL_TIMEOUT：后补材料超时&lt;br /&gt;AGGREEMENT_NOT_RECEIVE：协议未回&lt;/p&gt; &lt;p&gt;MERCHANT_APPLY_DISPOSE：服务商申请关闭&lt;br /&gt;OTHER：其他&lt;/p&gt; &lt;p&gt;说明：&lt;/p&gt; &lt;p&gt;如果仅命中&amp;ldquo;沉默商户&amp;rdquo;，请调用&amp;ldquo;&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/fwssfk/options__rest__v1.0__mer__merchant__dispose__unfreeze\&quot;&gt;沉默商户解冻申请&lt;/a&gt;&amp;rdquo;接口进行解冻；&lt;/p&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;其他异常原因，请联系运营。&lt;/span&gt;&lt;/div&gt; | [optional] 
**receiptStatus** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;1\&quot; data-line&#x3D;\&quot;true\&quot;&gt;ALLOW_RECEIPT:允许收款&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;2\&quot; data-line&#x3D;\&quot;true\&quot;&gt;FORBID_RECEIPT:禁止收款&lt;/div&gt; | [optional] 
**paymentStatus** | **string** | &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;1\&quot; data-line&#x3D;\&quot;true\&quot;&gt;ALLOW_PAYMENT:允许付款&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;2\&quot; data-line&#x3D;\&quot;true\&quot;&gt;FORBID_PAYMENT:禁止付款&lt;/div&gt; &lt;div data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;3\&quot; data-line&#x3D;\&quot;true\&quot;&gt;ALLOW_PAYMENT_SELF:禁止付款-但允许结算/提现至商户银行账户&lt;/div&gt; | [optional] 
**abnormalInfoList** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeInfoRespDTO[]**](MerchantDisposeInfoRespDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


