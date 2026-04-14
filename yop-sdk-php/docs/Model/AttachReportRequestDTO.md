# AttachReportRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mainMerchantNo** | **string** | &lt;p&gt;主商户号&lt;/p&gt; | 
**merchantNoList** | **string** | &lt;p&gt;从属商户列表&lt;/p&gt; &lt;p&gt;以英文逗号分隔&lt;/p&gt; | 
**authFileName** | **string** | &lt;p&gt;授权函文件名&lt;/p&gt; | [optional] 
**authFileUrl** | **string** | &lt;p&gt;授权函文件地址&lt;/p&gt; | [optional] 
**channel** | **string** | &lt;p&gt;WECHAT:微信&lt;/p&gt; &lt;p&gt;ALIPAY:支付宝&lt;/p&gt; | 
**payWayList** | **string** | &lt;div data-page-id&#x3D;\&quot;BRNmd6WIMoSTABx99W3ccVAwnZf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-KxKedSMLAonADhxgZLIca4Bdn1f\&quot;&gt;申请支付方式列表&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-ImY3du6YwoClofx6ihQcBx9SnZb\&quot;&gt;USER_SCAN:主扫支付&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-CUBXdmXAKogmzyxja65cLh3qngd\&quot;&gt;MERCHANT_SCAN:被扫支付&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-EvQPds8jBoTI9kxHMGkclpkInJf\&quot;&gt;MINI_PROGRAM:小程序支付&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-XJbrd5GUAoZ6hZx5CF4cap1DnLO\&quot;&gt;WECHAT_OFFIACCOUNT:公众号支付&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NEu8dgE8Wo5AeEx5UlEcVLyUnyd\&quot;&gt;ALIPAY_LIFE:支付宝生活号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OxcPdhtswoNrgWxcjC4ciTNcnve\&quot;&gt;支付方式以,分隔&lt;/div&gt; &lt;/div&gt; | [optional] 
**requestReasonType** | **string** | &lt;div data-page-id&#x3D;\&quot;BRNmd6WIMoSTABx99W3ccVAwnZf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VlUIdG6M5oyNQtxEfMmcip5Qnse\&quot;&gt;申请原因类型&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VlUIdG6M5oyNQtxEfMmcip5Qnse\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;BRNmd6WIMoSTABx99W3ccVAwnZf\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-TLJCdvI1Por5cHxolDZcOPlrnZb\&quot;&gt;FRANCHISE_RELATIONSHIP:与主商户/总店为连续/加盟/直营店，共用相同小程序/公众号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-OGKCdCjJGo8SIMxlt2gcc8GHnWh\&quot;&gt;BUSINESS_DISTRICT:商圈形式（商家联盟）型商户，主商户/总店为软件商/商城管理方等，为使用小程序/公众号交易&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JjhRdy5rMonNOtxJ7Dtc16sBnPd\&quot;&gt;COLLEGE_CANTEEN:高校食堂档口，因需要使用校方/食堂管理方小程序，并参加高校食堂活动&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BOqMdYkkpoCx1pxPLD5cLRzbnSg\&quot;&gt;OTHER:其他&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | 
**requestReason** | **string** | &lt;p&gt;申请原因&lt;/p&gt; &lt;p&gt;申请原因类型为OTHER时此字段必传&lt;/p&gt; | [optional] 
**groupName** | **string** | &lt;p&gt;集团名称&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;p&gt;通知地址&lt;/p&gt; &lt;p&gt;不传则无通知&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


