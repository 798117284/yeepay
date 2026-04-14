# OpenAccountResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;00000 表示成功&lt;/p&gt; | 
**message** | **string** |  | 
**requestNo** | **string** |  | 
**orderNo** | **string** |  | [optional] 
**topAccountNo** | **string** | &lt;p&gt;HT 银行顶点账户号&lt;/p&gt; | [optional] 
**bankAccountNo** | **string** |  | [optional] 
**bankCode** | **string** | 可选项如下: FJHTB:HT银行 | [optional] 
**extParam** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FJHTRequestDTO**](FJHTRequestDTO.md) |  | [optional] 
**status** | **string** | 可选项如下: REQUEST_RECEIVE:接收开户请求 OPENING:开户处理中 SUCCESS:成功 FAIL:失败 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


