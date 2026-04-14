# YopDigitEnterpriseInfoReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;p&gt;只能是大小写字母和数字,最小长度20位 最大长度 40位&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;开票企业在易宝侧进件时的商编，开票税号为进件时的税号&lt;/p&gt; | 
**sellerName** | **string** | &lt;p&gt;如不传，则取商编进件时的签约名称&lt;/p&gt; | [optional] 
**contactsName** | **string** | &lt;p&gt;如不传，则取商编进件时的联系人姓名&lt;/p&gt; | [optional] 
**contactsPhone** | **string** | &lt;p&gt;如不传，则取商编进件时的联系人手机号&lt;/p&gt; | [optional] 
**contactsEmail** | **string** | &lt;p&gt;如不传，则取商编进件时的联系人邮箱。该邮箱将用来接收渠道登录的账号密码。&lt;/p&gt; | [optional] 
**addressAndBankList** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\SellerAddressAndBankInfoReqDto[]**](SellerAddressAndBankInfoReqDto.md) | &lt;p&gt;当前仅支持一组信息，该信息后续会展示在数电发票票面上&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


