# AccountBalanceQueryResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;该参数代表本次请求的处理结果&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;信息描述，对应returnCode的中文信息&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;记账簿所属的商户编号&lt;/p&gt; | [optional] 
**merchantAccountBookNo** | **string** | &lt;p&gt;商户侧记账簿编号&lt;/p&gt; | [optional] 
**merchantAccountBookName** | **string** | &lt;p&gt;商户侧记账簿名称&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;易宝记账薄编号&lt;/p&gt; | [optional] 
**balance** | **float** | 单位元，精确到两位小数 | [optional] 
**freezeBalance** | **float** | 单位元，精确到两位小数 | [optional] 
**accountBookType** | **string** | &lt;p&gt;记账簿类型&lt;br /&gt;BUSINESS 企业&lt;br /&gt;PERSON 个人&lt;/p&gt; | [optional] 
**certificateType** | **string** | &lt;p&gt;证件类型类型&lt;br /&gt;BIZ_LICENSEES 统一信信用代码&lt;br /&gt;ID_CARD 身份证&lt;/p&gt; | [optional] 
**certificateNo** | **string** | &lt;p&gt;证件号&lt;/p&gt; | [optional] 
**bindCardList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardDTO[]**](BindCardDTO.md) | &lt;p&gt;绑卡信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


