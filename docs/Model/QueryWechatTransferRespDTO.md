# QueryWechatTransferRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回码该参数代表本次请求的处理结果，UA00000为请求成功 若请求失败参看对应错误码和错误信息 | [optional] 
**returnMsg** | **string** |  | [optional] 
**status** | **string** | 可选项如下:&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败&lt;br&gt;CLOSE:关闭&lt;br&gt;PROCESSING:处理中 | [optional] 
**requestNo** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**amount** | **float** |  | [optional] 
**orderNo** | **string** | 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号 | [optional] 
**openId** | **string** | openId是微信用户在公众号appId下的唯一用户标识 | [optional] 
**userName** | **string** |  | [optional] 
**remark** | **string** |  | [optional] 
**finishTime** | **string** | 只有成功，失败和关闭的时候才有完成时间 | [optional] 
**bankOrderNo** | **string** | 备注：只有status为SUCCESS有值 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


