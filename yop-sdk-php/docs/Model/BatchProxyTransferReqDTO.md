# BatchProxyTransferReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商编&lt;/p&gt; | 
**batchNo** | **string** | &lt;p&gt;批次号&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户唯一请求号&lt;/p&gt; | 
**totalCount** | **int** | &lt;p&gt;总数&lt;/p&gt; | 
**title** | **string** | &lt;p&gt;标题&lt;/p&gt; | 
**url** | **string** | &lt;p&gt;回调地址&lt;/p&gt; | [optional] 
**channelBookId** | **string** | &lt;p&gt;记账本编号&lt;/p&gt; | 
**totalAmount** | **string** | &lt;p&gt;总金额&lt;/p&gt; | 
**batchProxList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferReqDTO[]**](SingleProxyTransferReqDTO.md) | &lt;p&gt;批次明细&lt;/p&gt; | 
**batchBusinessNo** | **string** | &lt;p&gt;商户批次业务订单号&lt;/p&gt; | [optional] 
**batchRemark** | **string** | &lt;p&gt;商户批次备注&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


