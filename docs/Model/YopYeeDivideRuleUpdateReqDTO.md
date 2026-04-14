# YopYeeDivideRuleUpdateReqDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** |  | 
**ruleNo** | **string** | &lt;p&gt;添加规则返参中的规则编号&lt;/p&gt; | 
**fundType** | **string** | &lt;p&gt;枚举值：&lt;br /&gt;&lt;em&gt;PROPORTION&lt;/em&gt;(\&quot;按比例分账\&quot;),&lt;br /&gt;&lt;em&gt;AMOUNT&lt;/em&gt;(\&quot;按固定金额分账\&quot;);&lt;/p&gt; | 
**executeTime** | **string** | &lt;div data-page-id&#x3D;\&quot;JlnbduLJso7HCAxb0hLc9ZZWnbh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-SjCGdDiIvoabRPxpbI4ct5FhnLc\&quot;&gt;HH:mm 类型。&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-SjCGdDiIvoabRPxpbI4ct5FhnLc\&quot;&gt;执行日什么时间点执行规则。&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-SjCGdDiIvoabRPxpbI4ct5FhnLc\&quot;&gt;同一个分账方下同一时间点只能有一个规则。&lt;/div&gt; &lt;/div&gt; | 
**batchNotifyUrl** | **string** | &lt;p&gt;需要修改通知地址时需要传值，如果不修改，则使用原来的。&lt;br /&gt;&lt;br /&gt;&lt;/p&gt; | [optional] 
**divideDetail** | [**\Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleDetailDTO[]**](YopYeeDivideRuleDetailDTO.md) | &lt;div data-page-id&#x3D;\&quot;JlnbduLJso7HCAxb0hLc9ZZWnbh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot; old-record-id-WFNUd2f8woCuonxTjn7c3cj1nxe\&quot;&gt;最多30个分账接收方。&lt;/div&gt; &lt;div class&#x3D;\&quot; old-record-id-WFNUd2f8woCuonxTjn7c3cj1nxe\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;JlnbduLJso7HCAxb0hLc9ZZWnbh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VAPndgluGovuhHxSw4NcLWFznih\&quot;&gt;修改规则时需要给完整的分账接收方信息。 比如原来有10个接收方，现在需要改成9个，那就需要把这九个的所有信息都给一遍&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


