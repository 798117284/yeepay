# EnterpriseAuthResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | &lt;p&gt;请求号&lt;/p&gt; | 
**orderNo** | **string** | &lt;p&gt;订单号&lt;/p&gt; | 
**errorCode** | **string** | &lt;p&gt;错误码&lt;/p&gt; | 
**errorMsg** | **string** | &lt;p&gt;错误信息&lt;/p&gt; | 
**authStatus** | **string** | &lt;ol&gt; &lt;li data-zone-id&#x3D;\&quot;0\&quot; data-line-index&#x3D;\&quot;0\&quot; data-line&#x3D;\&quot;true\&quot;&gt;AUTH_SUCCESS&amp;nbsp;认证成功&lt;/li&gt; &lt;li&gt;AUTH_FAIL&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 认证失败&lt;/li&gt; &lt;li&gt;NOT_AUTH&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 未经认证&lt;/li&gt; &lt;/ol&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; | 
**feeFlag** | **string** | &lt;p&gt;NO_NEED 未收费&lt;/p&gt; &lt;p&gt;COLLECTED 已收费&lt;/p&gt; | 
**entBaseInfo** | [**\Yeepay\Yop\Sdk\Service\Auth\Model\EntBaseInfoDTO**](EntBaseInfoDTO.md) |  | [optional] 
**breakLaw** | [**\Yeepay\Yop\Sdk\Service\Auth\Model\BreakLawDTO[]**](BreakLawDTO.md) | &lt;p&gt;严重违法信息&lt;/p&gt; | [optional] 
**entException** | [**\Yeepay\Yop\Sdk\Service\Auth\Model\EntExceptionDTO[]**](EntExceptionDTO.md) | &lt;p&gt;经营异常信息&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


