# AliPayParamsDTOExtUserInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certNo** | **string** | &lt;p&gt;注：need_check_info&#x3D;T时，该参数才有效&lt;/p&gt; | [optional] 
**minAge** | **string** | &lt;p&gt;【描述】允许的最小买家年龄。&lt;br /&gt;买家年龄必须大于等于所传数值&lt;br /&gt;注：&lt;br /&gt;1. need_check_info&#x3D;T时该参数才有效&lt;br /&gt;2. min_age为整数，必须大于等于0&lt;/p&gt; | [optional] 
**name** | **string** | &lt;p&gt;【描述】指定买家姓名。&lt;br /&gt;注： need_check_info&#x3D;T时该参数才有效&lt;/p&gt; | [optional] 
**mobile** | **string** | &lt;p&gt;【描述】指定买家手机号。&lt;br /&gt;注：该参数暂不校验&lt;/p&gt; | [optional] 
**certType** | **string** | &lt;p&gt;【描述】指定买家证件类型。&lt;/p&gt; 可选项如下: IDENTITY_CARD:身份证 PASSPORT:护照 OFFICER_CARD:军 官 证 SOLDIER_CARD:士 兵 证 HOKOU:户口本 | [optional] 
**needCheckInfo** | **string** | &lt;p&gt;【描述】是否强制校验买家信息；&lt;br /&gt;需要强制校验传：T;&lt;br /&gt;不需要强制校验传：F或者不传；&lt;br /&gt;当传T时，支付宝会校验支付买家的信息与接口上传递的cert_type、cert_no、name或age是否匹配，只有接口传递了信息才会进行对应项的校验；只要有任何一项信息校验不匹配交易都会失败。如果传递了need_check_info，但是没有传任何校验项，则不进行任何校验。&lt;br /&gt;默认为不校验。&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


