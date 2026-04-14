# AuthReportQueryResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retCode** | **string** | 返回码 | [optional] 
**retMsg** | **string** | 返回信息 | [optional] 
**requestNo** | **string** | 商户申卡请求号 | [optional] 
**customerNo** | **string** | 商户编号 | [optional] 
**cardNo** | **string** | 卡号 | [optional] 
**extInfo** | **string** | 关联信息 | [optional] 
**cardUseType** | **string** | 可选项如下:&lt;br&gt;SINGLE:单次卡&lt;br&gt;MULTIPLE:多次卡 | [optional] 
**openCardTime** | [**\DateTime**](\DateTime.md) | 开卡时间 | [optional] 
**cardUseOutTime** | [**\DateTime**](\DateTime.md) | 关闭时间 | [optional] 
**cardOrganization** | **string** | 卡组织 | [optional] 
**details** | [**\Yeepay\Yop\Sdk\Service\AtVcc\Model\AuthReportDetailResponseDTO[]**](AuthReportDetailResponseDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


