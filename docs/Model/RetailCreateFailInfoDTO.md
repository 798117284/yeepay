# RetailCreateFailInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mobilePhone** | **string** | &lt;p&gt;手机号&lt;/p&gt; | [optional] 
**registrationNumber** | **string** | &lt;p&gt;营业执照注册号&lt;/p&gt; | [optional] 
**failCode** | **string** | &lt;p&gt;失败编码&lt;/p&gt; 可选项如下: 2:门店信息均为空or无效的手机号 3:无效的门店类型 4:地址解析失败 5:手机号已被录入门店信息 6:无效的门店名称（长度限制为1-30个字符，一个中文字等于2个字符） | [optional] 
**failMessage** | **string** | &lt;p&gt;失败原因，列举如下：&lt;/p&gt; &lt;ul&gt; &lt;li&gt;门店信息均为空&lt;/li&gt; &lt;li&gt;无效的手机号&lt;/li&gt; &lt;li&gt;无效的门店类型&lt;/li&gt; &lt;li&gt;一级门店类型为OTHER时，二级门店类型不能为空&lt;/li&gt; &lt;li&gt;地址解析失败&lt;/li&gt; &lt;li&gt;门店地址:省不能为空&lt;/li&gt; &lt;li&gt;门店地址:市不能为空&lt;/li&gt; &lt;li&gt;门店地址:区不能为空&lt;/li&gt; &lt;li&gt;门店地址:街道详细地址不能为空&lt;/li&gt; &lt;li&gt;手机号已被录入门店信息&lt;/li&gt; &lt;li&gt;无效的门店名称（长度限制为1-30个字符，一个中文字等于2个字符）&lt;/li&gt; &lt;/ul&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


