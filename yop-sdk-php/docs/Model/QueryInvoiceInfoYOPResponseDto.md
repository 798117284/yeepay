# QueryInvoiceInfoYOPResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;成功：000000&lt;/p&gt; | 
**message** | **string** | &lt;p&gt;返回信息&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;开票商编&lt;/p&gt; | [optional] 
**mode** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;REGULARLY:定期&lt;br /&gt;NO_REGULARLY:非定期&lt;/p&gt; | [optional] 
**invoiceType** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;SPECIAL_INVOICE:专票&lt;br /&gt;NORMAL_INVOICE:普票&lt;/p&gt; | [optional] 
**invoiceForm** | **string** | &lt;p&gt;可选项如下:&lt;br /&gt;E_INVOICE:电子发票&lt;br /&gt;P_INVOICE:纸质发票&lt;/p&gt; | [optional] 
**linkman** | **string** | &lt;p&gt;联系人姓名&lt;/p&gt; | [optional] 
**linkmanPhone** | **string** | &lt;p&gt;联系人电话&lt;/p&gt; | [optional] 
**postalAddress** | **string** | &lt;p&gt;发票邮寄地址&lt;/p&gt; | [optional] 
**postalCode** | **string** | &lt;p&gt;邮编&lt;/p&gt; | [optional] 
**invoiceName** | **string** | &lt;p&gt;发票抬头&lt;/p&gt; | [optional] 
**taxpayerId** | **string** | &lt;p&gt;纳税人标识&lt;/p&gt; | [optional] 
**invoicePhone** | **string** | &lt;p&gt;开票联系电话&lt;/p&gt; | [optional] 
**invoiceAddress** | **string** | &lt;p&gt;开票地址&lt;/p&gt; | [optional] 
**bankName** | **string** | &lt;p&gt;开户银行名称&lt;/p&gt; | [optional] 
**accountNo** | **string** | &lt;p&gt;账号信息&lt;/p&gt; | [optional] 
**email** | **string** | &lt;p&gt;邮箱&lt;/p&gt; | [optional] 
**needInvoice** | **string** | &lt;p&gt;默认为YES&lt;/p&gt; | [optional] 
**createTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**lastModifyTime** | [**\DateTime**](\DateTime.md) | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注&lt;/p&gt; | [optional] 
**standardType** | **string** | &lt;p&gt;规格型号&lt;/p&gt; | [optional] 
**unit** | **string** | &lt;p&gt;单位&lt;/p&gt; | [optional] 
**quantity** | **int** | &lt;p&gt;数量&lt;/p&gt; | [optional] 
**regularlyInvoiceMajor** | **string[]** | &lt;p&gt;YP-易宝支付_手续费; &lt;br /&gt;QQYX-麒麒远行_技术服务费&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


