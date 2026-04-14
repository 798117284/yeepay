# AccountBookFreezeQueryResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码该参数代表本次请求的处理结果，AM00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | [optional] 
**returnMsg** | **string** | &lt;p&gt;返回描述&lt;/p&gt; | [optional] 
**merchantAccountBookNo** | **string** | &lt;p&gt;商户侧记账簿编号&lt;/p&gt; | [optional] 
**amount** | **float** | &lt;p&gt;冻结金额&lt;/p&gt; | [optional] 
**orderFlowNo** | **string** | &lt;p&gt;冻结流水编号&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;冻结请求号&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;商户编号&lt;/p&gt; | [optional] 
**ypAccountBookNo** | **string** | &lt;p&gt;冻结易宝侧记账簿编号&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;状态可选项如下： INIT：初始化&lt;/p&gt; &lt;p&gt;PROCESS：处理中&lt;/p&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;p&gt;SUCCESS：成功 FAIl：失败 &amp;nbsp;&lt;/p&gt; | [optional] 
**freezeFailMsg** | **string** | &lt;p&gt;冻结失败原因&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


