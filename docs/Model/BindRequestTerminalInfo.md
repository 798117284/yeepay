# BindRequestTerminalInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shopNo** | **string** | &lt;pre&gt;网点编号&lt;/pre&gt; | [optional] 
**serialNo** | **string** | &lt;p&gt;终端序列号&lt;/p&gt; | 
**materialNo** | **string** | &lt;p&gt;终端型号代码，自备机入网时必填，用于标识接入平台的终端设备类型，确保系统正确识别终端能力与适配参数。常见终端型号代码：&lt;/p&gt; &lt;ul&gt; &lt;li&gt;联迪A8:P00000011【tusn开头为&amp;ldquo;00000104&amp;rdquo;】&lt;/li&gt; &lt;li&gt;联迪A8S：P00000032【tusn开头为&amp;ldquo;00000104&amp;rdquo;】&lt;/li&gt; &lt;li&gt;商米P2：P00000001【tusn开头为&amp;ldquo;00004304&amp;rdquo;】&lt;/li&gt; &lt;li&gt;条码辅助受理终端：P00000023【不支持银行卡的辅助受理终端可使用此枚举值，例如收银软件类、扫码枪等。】&lt;/li&gt; &lt;li&gt;⚠️注意事项&lt;/li&gt; &lt;li&gt;支持银行卡的终端：请务必使用 &amp;lrm;tusn 作为 &amp;lrm;serialNo（终端序列号）字段的值。&lt;/li&gt; &lt;li&gt;不支持银行卡的辅助受理终端：可使用型号代码 &amp;lrm;P00000023，如扫码枪、收银软件等。&lt;/li&gt; &lt;li&gt;若设备型号未在上述列表中：请联系群内运营人员/技术支持获取对应的终端型号代码。&lt;/li&gt; &lt;/ul&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


