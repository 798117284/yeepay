# BankCardAddReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankCode** | **string** | &lt;div data-page-id&#x3D;\&quot;R89UdQrldouzcAxzrVzcp7wLnLg\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-TKC2dzu0ZoMWI1xuTT8cwRygn3g\&quot;&gt;编码请参考&lt;a href&#x3D;\&quot;https://yeepay.feishu.cn/sheets/MmMfsrTbnhn744tjYdEcvoNmn83\&quot; data-lark-is-custom&#x3D;\&quot;true\&quot;&gt;易宝支付总行编码&lt;/a&gt;&lt;strong&gt;（总行信息管理）&lt;/strong&gt;&lt;/div&gt; &lt;/div&gt; | 
**businessNo** | **string** | &lt;p&gt;businessType&#x3D;ACCOUNT_BOOK时，填写记账簿编号（bookNo）&lt;/p&gt; | 
**bankAccountType** | **string** | &lt;p&gt;枚举值如下:&lt;br /&gt;UNIT_SETTLEMENT_CARD：单位结算卡&lt;br /&gt;ENTERPRISE_ACCOUNT：对公账户&lt;br /&gt;DEBIT_CARD：借记卡&lt;/p&gt; | 
**bankCardNo** | **string** | &lt;p&gt;银行卡号&lt;/p&gt; | 
**cardRole** | **string** | &lt;p&gt;PRIMARY:主卡(默认卡)&lt;br /&gt;SECONDARY:备卡(非默认)&lt;br /&gt;*说明：&lt;br /&gt;1.用户业务编号下存在银行卡时，不传默认「备卡」&lt;br /&gt;2.用户业务编号下首次添加银行卡，自动设置为「主卡」&lt;br /&gt;3.同一业务下只允许存在一张主卡&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;请求号&lt;/p&gt; | 
**businessType** | **string** | &lt;p&gt;目前仅支持ACCOUNT_BOOK：记账簿业务&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


