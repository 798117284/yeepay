# QueryOpenSubBankAccountRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | &lt;p&gt;返回码&lt;br /&gt;该参数代表本次请求的处理结果，AM00000为请求成功 若请求失败参看对应错误码和错误信息&lt;/p&gt; | 
**returnMsg** | **string** | &lt;p&gt;响应信息&lt;/p&gt; | [optional] 
**status** | **string** | &lt;p&gt;开户状态&lt;br /&gt;可选项如下&lt;br /&gt;SUCCESS：成功&lt;br /&gt;FAIl：失败&lt;br /&gt;PROCESS：处理中&lt;/p&gt; | [optional] 
**bankAccountBookName** | **string** | &lt;p&gt;缴费账户名&lt;/p&gt; | [optional] 
**bankAccountBookNo** | **string** | &lt;p&gt;缴费账户号&lt;/p&gt; | [optional] 
**balance** | **float** | &lt;p&gt;余额&lt;br /&gt;单位：元（RMB）&lt;/p&gt; | [optional] 
**payerAccountName** | **string** | &lt;div data-page-id&#x3D;\&quot;ZhHRdb4xvo561Ux1800cwKQcnGj\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-VA5GdEJVqoeZMgxA8FQc5BKmnce\&quot;&gt;付款方账户名&lt;/div&gt; &lt;/div&gt; | [optional] 
**bindCardList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardInfoDTO[]**](SubBankAccountBindCardInfoDTO.md) | &lt;p&gt;绑定卡列表&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


