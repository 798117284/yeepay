# AccountTradeRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;由商户自定义生成&lt;/p&gt; | 
**orderAmount** | **float** | &lt;p&gt;单位：元（RMB）&lt;/p&gt; | 
**feeChargeSide** | **string** | &lt;p&gt;手续费承担方(若不传默认付款方)&lt;/p&gt; 可选项如下: PAYER:付款方 PAYEE:收款方 | [optional] 
**terminalType** | **string** | &lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; 可选项如下: PC:电脑 PHONE:手机 PAD:平板 NFC:可穿戴设备 DTV:数字电视 MPOS:条码支付受理终端 OTHER:其他 | [optional] 
**receiveType** | **string** | 可选项如下: REAL_TIME:实时 TWO_HOUR:两小时到账 NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到收款银行账户中） | 
**notifyUrl** | **string** | &lt;p&gt;不传则不通知&lt;/p&gt; | [optional] 
**remark** | **string** | &lt;p&gt;备注信息&lt;/p&gt; | [optional] 
**comments** | **string** | &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;展示在收款银行系统中的附言，由数字、字母、汉字组成（最终附言内容以银行实际账单为准）；不同收款行对附言长度限制不同，建议控制在32字符内&lt;/span&gt;&lt;/div&gt; | [optional] 
**receiptComments** | **string** | &lt;p&gt;此字段值用于显示在回单中&lt;/p&gt; | [optional] 
**riskInfo** | **string** | &lt;p&gt;透传风控标识json格式（&lt;span class&#x3D;\&quot;text-only\&quot;&gt;该&lt;/span&gt;&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;字段&lt;/span&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;仅限未来云平台商交易模式使用，其他业务无须&lt;/span&gt;&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;传参&lt;/span&gt;）&lt;br /&gt;replaceMerchantNo:代付方易宝商编&lt;br /&gt;replaceName:代付方名称&lt;br /&gt;jobType:职位类型&lt;br /&gt;格式如下：{\&quot;replaceMerchantNo\&quot;: \&quot;\&quot;, \&quot;replaceName\&quot;: \&quot;\&quot;,\&quot;jobType\&quot;: \&quot;\&quot;}&lt;/p&gt; | [optional] 
**receiverInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverInfoDTO**](ReceiverInfoDTO.md) |  | 
**enterpriseInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseInfoDTO**](EnterpriseInfoDTO.md) |  | [optional] 
**individualInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\IndividualInfoDTO**](IndividualInfoDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


