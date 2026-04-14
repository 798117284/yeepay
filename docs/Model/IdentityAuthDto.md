# IdentityAuthDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reportMerchantNo** | **string** |  | [optional] 
**feeType** | **string** |  | [optional] 
**authorizeState** | **string** | 可选项如下: AUTHORIZE_STATE_UNAUTHORIZED:未授权 AUTHORIZE_STATE_AUTHORIZED:已授权 CLOSED:已销户【支付宝特有】 SMID_NOT_EXIST:报备商户号不存在【支付宝特有】 | [optional] 
**returnCode** | **string** |  | [optional] 
**returnMsg** | **string** |  | [optional] 
**backUpFlag** | **string** | &lt;p&gt;返回规则：&lt;br /&gt;1、请求参数queryStrategy为BACKUP_PAGE 时，返回备份标签&lt;br /&gt;2、请求参数queryStrategy为PRIMARY 或不传时，不返回备份标签&lt;/p&gt; 可选项如下: BACKUP:备份 NO_BACKUP:非备份 | [optional] 
**promotionType** | **string** | 可选项如下: Normal:普通 BlueSea:支付宝蓝海 GreenIsland:微信绿洲 Institutional:支付宝 事业单位 PublicPay:支付宝公缴 education_001:微信教培 schoolcanteen_001:微信教育食堂 private_healthcare_001:微信商业医疗 parking_001:微信停车缴费 | [optional] 
**channelNo** | **string** |  | [optional] 
**open** | **string** | &lt;p&gt;返回规则：&lt;br /&gt;1、请求参数queryStrategy为BACKUP_PAGE 时，返回开关状态&lt;br /&gt;2、请求参数queryStrategy为PRIMARY 或不传时，不返回开关状态&lt;/p&gt; 可选项如下: OPEN:打开 CLOSE:关闭 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


