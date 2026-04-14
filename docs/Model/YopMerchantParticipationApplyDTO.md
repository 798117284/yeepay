# YopMerchantParticipationApplyDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankMarketingNo** | **string** |  | [optional] 
**bankMarketingName** | **string** |  | [optional] 
**applyStatus** | **string** | 可选项如下: WAIT_OPEN_CARD:待绑卡 WAIT_BANK_AUTH:待银行审核 BANK_AUTH_FAIL:报名失败 SUCCESS:报名成功 INTERRUPTION:中断退出 EXPIRED:已失效 | [optional] 
**signStatus** | **string** | 可选项如下: PROCESSING:处理中 WAIT_SIGN:待签署 FAIL:失败 SUCCESS:成功 | [optional] 
**signUrl** | **string** |  | [optional] 
**merchantNo** | **string** |  | [optional] 
**merchantName** | **string** |  | [optional] 
**cardOpenMode** | **string** | 可选项如下: BANK_DOORSTEP:银行上门 OFFLINE_CABINET:线下临柜 | [optional] 
**accountName** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**address** | **string** |  | [optional] 
**remark** | **string** |  | [optional] 
**branchBank** | **string** |  | [optional] 
**bankCardNo** | **string** | &lt;p&gt;前6后4脱敏&lt;/p&gt; | [optional] 
**applyDate** | **string** |  | [optional] 
**bindCardDate** | **string** |  | [optional] 
**finishDate** | **string** |  | [optional] 
**errorMessage** | **string** |  | [optional] 
**applySource** | **string** | &lt;p&gt;如是易宝运营通过易宝内部运营工具完成报名，则申请来源为运营报名。如是商户通过接口/商户后台发起报名，则申请来源为商户报名。&lt;/p&gt; 可选项如下: YEEPAY:运营报名 MERCHANT:商户报名 | [optional] 
**applyNo** | **string** | &lt;p&gt;子商户报名时生成的报名申请ID&lt;/p&gt; | [optional] 
**applyStatusChangeList** | [**\Yeepay\Yop\Sdk\Service\Promtion\Model\YopApplyStatusChangeDTO[]**](YopApplyStatusChangeDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


