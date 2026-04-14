# PassiveGetAuthInfoResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**parentMerchantNo** | **string** | 发起方商编 | [optional] 
**merchantNo** | **string** | 收单商编 | [optional] 
**authInfo** | **string** | SDK调用凭证。用于调用SDK的人脸识别接口。 | [optional] 
**expireTime** | **int** | authinfo的有效时间, 单位秒。 例如: 3600 在有效时间内, 对于同一台终端设备，相同的参数的前提下(如：相同的公众号、商户号、 门店编号等），可以用同一个authinfo，多次调用SDK的getWxpayfaceCode接口。 | [optional] 
**yeepayMchId** | **string** | 调用SDK的getWxpayfaceCode接口时作为mch_id传入 | [optional] 
**yeepayAppId** | **string** | 调用SDK的getWxpayfaceCode接口时作为appid传入 | [optional] 
**appId** | **string** | 商户绑定的公众号/小程序的appId，调用SDK的getWxpayfaceCode接口时可作为sub_appid传入 | [optional] 
**reportMerchantNo** | **string** | 子商户号，调用SDK的getWxpayfaceCode接口时可作为sub_mch_id传入 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


