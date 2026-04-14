# OrderQrCodeQueryRespDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originalReqId** | **string** |  | [optional] 
**orderQrCode** | **string** |  | [optional] 
**createTime** | **string** | &lt;div&gt; &lt;pre&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/pre&gt; &lt;/div&gt; | [optional] 
**orderState** | **string** | 可选项如下: init:未开票 opening:开票中 success:开票完成 fail:开票失败 | [optional] 
**issueErrorMsg** | **string** |  | [optional] 
**scanCodeStatus** | **string** | 可选项如下: scaned:已扫码 unScan:未扫码 | [optional] 
**pdfUrl** | **string** |  | [optional] 
**ofdUrl** | **string** |  | [optional] 
**xmlUrl** | **string** |  | [optional] 
**orderQrCodeStatus** | **string** | 可选项如下: normal:正常 cancel:已作废 expired:已过期 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


