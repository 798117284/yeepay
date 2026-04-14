# ApplySupplierRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | 
**supplierAccountInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierAccountInfo**](SupplierAccountInfo.md) |  | 
**supplierQualInfo** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQualInfo**](SupplierQualInfo.md) |  | 
**notifyUrl** | **string** | 商户通知地址，不传则不通知&lt;br&gt;该地址将用来接受商户签章地址以及供应商添加结果通知&lt;br&gt;回调内容请参看：&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/products/bzshsfk/spis/60d1a00b45dd2a001b68665d\&quot;&gt;供应商添加结果通知&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;/a&gt; | [optional] 
**reason** | **string** | &lt;p&gt;付款原因&lt;/p&gt; | [optional] 
**reasonType** | **string** | &lt;p&gt;默认为 GYSDK&lt;/p&gt; 可选项如下: SHFY:商户返佣 GYSDK:供应商打款 XJDWDK:下级单位打款 QT:其他 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


