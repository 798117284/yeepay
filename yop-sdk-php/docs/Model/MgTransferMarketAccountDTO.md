# MgTransferMarketAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/span&gt;&lt;/div&gt; | 
**toMerchantNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;易宝支付分配的的商户唯一标识;&lt;/span&gt;&lt;/div&gt; | 
**orderAmount** | **string** | &lt;p&gt;小数位不得超过两位&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户唯一请求号&lt;/p&gt; | 
**fromMerchantNo** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;易宝支付分配的的商户唯一标识;&lt;/span&gt;&lt;/div&gt; | 
**usage** | **string** | &lt;p&gt;描述转账用途&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;19\&quot;&gt;转账接收方通知地址，不传则不通知，默认通知给转入方顶级（如转入方是标准商户则通知给自己）&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;回调&lt;/span&gt;内容请参看：&lt;/span&gt;&lt;/div&gt; | [optional] 
**feeChargeSide** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;3\&quot;&gt;手续费承担方&lt;/span&gt;&lt;/div&gt; 可选项如下: OUTSIDE:转出方承担(若不传默认转出方承担) INSIDE:转入方承担 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


