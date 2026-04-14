# QueryBindCardResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;业务响应码&lt;br /&gt;0000表示成功&lt;/p&gt; | 
**message** | **string** |  | 
**parentMerchantNo** | **string** |  | 
**merchantNo** | **string** |  | 
**merchantFlowId** | **string** |  | 
**userNo** | **string** |  | 
**userType** | **string** | 可选项如下: USER_ID:用 ID WECHAT:微信号 PHONE:用户注册手机号 ID_CARD:用户身份证号 IMEI:imei MAC:网卡地址 EMAIL:用户注册email AGREEMENT_NO:用户纸质订单协议号 | 
**orderStatus** | **string** | &lt;p&gt;暂未支持查询失败的绑卡信息，绑卡请求为H5 形态，用户可以修改银行卡信息重新绑卡，所以默认会绑卡成功，如果在过期时间内没有绑定成功，则以超时处理。&lt;/p&gt; 可选项如下: BIND_SUCCESS:绑卡成功 BIND_PROCESSING:绑卡处理中 TIME_OUT:超时 | 
**bindRequestId** | **string** | &lt;p&gt;易宝内部绑卡请求号&lt;/p&gt; | 
**nopOrderId** | **string** | &lt;p&gt;易宝内部绑卡订单号，只有用户真正绑卡成功才有值&lt;/p&gt; | [optional] 
**bindId** | **string** | &lt;p&gt;绑卡成功返回绑卡id，支付时传递&lt;/p&gt; | [optional] 
**cardNo** | **float** | &lt;p&gt;绑卡银行卡号&lt;/p&gt; | [optional] 
**phone** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


