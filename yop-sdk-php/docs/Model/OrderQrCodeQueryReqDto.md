# OrderQrCodeQueryReqDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reqId** | **string** | &lt;div&gt; &lt;pre&gt;请求流水号格式，只能是大小写字母和数字,最小长度20位 最大长度 40位&lt;/pre&gt; &lt;/div&gt; | 
**merchantNo** | **string** | &lt;p&gt;开票企业在易宝侧进件时的商编，开票税号为进件时的税号&lt;/p&gt; | 
**originalReqId** | **string** | &lt;p&gt;开票二维码生成开票时间和开票二维码生成结束时间为空时，必填&lt;/p&gt; | [optional] 
**createTimeStart** | **string** | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;br /&gt;开票二维码请求号不传时，必填&lt;/p&gt; | [optional] 
**createTimeEnd** | **string** | &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;br /&gt;开票二维码请求号不传时，必填&lt;/p&gt; | [optional] 
**orderState** | **string** | 可选项如下: init:未开票 opening:开票中 success:开票完成 fail:开票失败 cancel:发票已作废 canceling:发票作废中 | [optional] 
**scanCodeStatus** | **string** | 可选项如下: scaned:已扫码 unScan:未扫码 | [optional] 
**pageSize** | **string** | &lt;div&gt; &lt;pre&gt;条数只能为大于0，小于等于100的整数&lt;/pre&gt; &lt;/div&gt; | [optional] 
**pageNum** | **string** | &lt;div&gt; &lt;pre&gt;页数只能为大于0的整数&lt;/pre&gt; &lt;/div&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


