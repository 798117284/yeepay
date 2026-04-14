# AgreementBindCardResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | [optional] 
**message** | **string** |  | [optional] 
**orderStatus** | **string** | &lt;p&gt;订单状态&lt;/p&gt; &lt;p&gt;可选项如下：&lt;br /&gt;INIT:初始化&lt;br /&gt;DOING:待短验/待跳页，需判断签约模式signMode以确认下一步骤&lt;br /&gt;BIND_SUCCESS:成功&lt;br /&gt;BIND_FAILURE:失败&lt;br /&gt;TIME_OUT:已过期&lt;/p&gt; | [optional] 
**signMode** | **string** | &lt;p&gt;签约模式&lt;br /&gt;API:api接口&lt;br /&gt;PAGE:跳页签约&lt;/p&gt; | [optional] 
**submitUrl** | **string** | &lt;p&gt;当返回签约模式为跳页签约时，需解析此参数，作为跳转银行时的地址&lt;/p&gt; | [optional] 
**submitMethod** | **string** | &lt;p&gt;当返回签约模式为跳页签约时，需解析此参数，作为跳转银行时传递的参数的方式get或post&lt;/p&gt; | [optional] 
**submitParams** | **map[string,string]** | &lt;p&gt;当返回签约模式为跳页签约时，需解析此参数，作为跳转银行时传递的参数&lt;/p&gt; | [optional] 
**encoding** | **string** | &lt;p&gt;当返回签约模式为跳页签约时，需解析此参数，作为跳转银行时传递参数的编码&lt;/p&gt; | [optional] 
**pageVerifyStatus** | **string** | &lt;p&gt;当返回签约模式为跳页签约时，需解析此参数&lt;br /&gt;跳页签约状态&lt;br /&gt;PROCESSING:签约处理中&lt;br /&gt;SUCCESS:成功&lt;br /&gt;FAIL:失败&lt;/p&gt; | [optional] 
**merchantNo** | **string** |  | [optional] 
**bindId** | **string** | &lt;p&gt;当返回订单状态为BIND_SUCCESS时返回此值&lt;/p&gt; | [optional] 
**merchantFlowId** | **string** |  | [optional] 
**nopOrderId** | **string** |  | [optional] 
**bankCardNoFirst6** | **string** |  | [optional] 
**bankCardNoLast4** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


