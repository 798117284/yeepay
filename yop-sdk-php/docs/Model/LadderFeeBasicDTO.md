# LadderFeeBasicDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ladderMin** | **string** | &lt;p&gt;第一阶梯起始值为0，下一阶梯的起始值等于上一阶梯的结束值&lt;/p&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; | 
**ladderMax** | **string** | &lt;p&gt;除最后一阶阶梯外，结束值等于下一阶梯的起始值;&lt;br /&gt;若最后一阶阶梯结束值为空或&amp;ldquo;不限&amp;ldquo;，此字段不传&lt;/p&gt; | [optional] 
**rateType** | **string** | &lt;p&gt;阶梯计费策略，枚举值如下：&lt;br /&gt;1、SINGLE_PERCENT:单笔百分比&lt;br /&gt;2、SINGLE_FIXED:单笔固定值&lt;br /&gt;3、PERCENT_MIX_CAP:单笔百分比+封顶值&lt;br /&gt;4、PERCENT_MIX_GUARANTEED:单笔百分比+保底值&lt;br /&gt;5、PERCENT_MIX_GUARANTEED_CAP：单笔百分比+保底值+封顶值&lt;/p&gt; | 
**fixedRate** | **string** | &lt;p&gt;阶梯计费策略为以下枚举值时，&lt;strong&gt;必填费率值&lt;/strong&gt;&lt;br /&gt;SINGLE_FIXED:单笔固定值&lt;br /&gt;PERCENT_MIX_CAP:单笔百分比+封顶值&lt;br /&gt;PERCENT_MIX_GUARANTEED_CAP:单笔百分比+保底值+封顶值&lt;br /&gt;&lt;br /&gt;其他规则：&lt;br /&gt;1、单位：元/笔；如5元/笔，上传5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate,整数位最多14位，小数位最多保留2位&lt;br /&gt;3、如计费策略为PERCENT_MIX_GUARANTEED_CAP时，保底值必须小于封顶值&lt;/p&gt; | [optional] 
**minRate** | **string** | &lt;p&gt;计费策略为以下枚举值时，&lt;strong&gt;必填费率值&lt;/strong&gt;&lt;br /&gt;PERCENT_MIX_GUARANTEED:单笔百分比+保底值&lt;br /&gt;PERCENT_MIX_GUARANTEED_CAP:单笔百分比+保底值+封顶值&lt;br /&gt;其他规则：&lt;br /&gt;1、单位：元/笔；如5元/笔，上传5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate,整数位最多14位，小数位最多保留2位&lt;br /&gt;3、如计费策略为PERCENT_MIX_GUARANTEED_CAP时，保底值必须小于封顶值&lt;/p&gt; | [optional] 
**percentRate** | **string** | &lt;p&gt;阶梯计费策略为以下枚举值时，&lt;strong&gt;必填费率值&lt;/strong&gt;&lt;br /&gt;SINGLE_PERCENT:单笔百分比&lt;br /&gt;PERCENT_MIX_CAP:单笔百分比+封顶值&lt;br /&gt;PERCENT_MIX_GUARANTEED:单笔百分比+保底值&lt;br /&gt;PERCENT_MIX_GUARANTEED_CAP:单笔百分比+保底值+封顶值&lt;br /&gt;&lt;br /&gt;其他规则：&lt;br /&gt;1、该字段单位：%；如0.5%，上传0.5即可&lt;br /&gt;2、规则：0&amp;lt;&#x3D;rate&amp;lt;&#x3D;100,整数位最多3位，小数位最多保留4位&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


