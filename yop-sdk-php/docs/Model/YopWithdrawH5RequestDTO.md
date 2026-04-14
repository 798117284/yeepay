# YopWithdrawH5RequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional] 
**merchantNo** | **string** | &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; | [optional] 
**requestNo** | **string** | &lt;p&gt;由商户自定义生成，请求号唯一&lt;/p&gt; | 
**accountType** | **string** | 可选项如下: FUND_ACCOUNT:资金账户 | 
**bankCardId** | **string** | &lt;p&gt;添加提现账户时易宝生成的提现卡ID&lt;/p&gt; &lt;p&gt;如指定提现卡ID，则页面展示此提现卡，且不可更改&lt;/p&gt; | [optional] 
**bankAccountNo** | **string** | &lt;p&gt;如指定提现账号，则页面展示此提现卡，且不可更改&lt;/p&gt; | [optional] 
**receiveType** | **string** | &lt;p&gt;如指定到账类型，则页面展示此到账类型，且不可更改&lt;/p&gt; 可选项如下: REAL_TIME:实时到账 TWO_HOUR:2小时到账 NEXT_DAY:次日到账（无特殊情况资金于次日上午7点左右到提现银行账户中） | [optional] 
**notifyUrl** | **string** | &lt;p&gt;商户通知地址，不传则不通知 回调内容请参看：&lt;a href&#x3D;\&quot;https://open.yeepay.com/docs/apis/fwssfk/options__rest__v1.0__account__withdraw__order#anchor7\&quot; data-lark-is-custom&#x3D;\&quot;true\&quot;&gt;结果通知&lt;/a&gt;&lt;/p&gt; | [optional] 
**returnUrl** | **string** | &lt;p&gt;用户完成提现或取消提现后回跳此地址。注:回调returnUrl后追加requestNo(商户请求号)，提现结果以回调或主动查询为主&lt;/p&gt; | 
**terminalType** | **string** | 可选项如下: PC:电脑 PHONE:手机 PAD:平板 NFC:可穿戴设备 DTV:数字电视 MPOS:条码支付受理终端 OTHER:其他 | [optional] 
**feeDeductType** | **string** | &lt;p&gt;默认外扣&lt;/p&gt; 可选项如下: OUTSIDE:外扣 INSIDE:内扣 | [optional] 
**macAddress** | **string** | &lt;p&gt;设备mac地址&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


