# Yeepay\Yop\Sdk\Mer

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add_user_bankcard**](Mer.md#add_user_bankcard) | **POST** /rest/v1.0/mer/user/bankcard/add | 用户银行卡新增
[**alipayauthApply**](Mer.md#alipayauthApply) | **POST** /rest/v1.0/mer/alipayauth/apply | 支付宝实名认证申请单申请
[**alipayauthCancel**](Mer.md#alipayauthCancel) | **POST** /rest/v1.0/mer/alipayauth/cancel | 撤销支付宝实名认证
[**alipayauthQuery**](Mer.md#alipayauthQuery) | **POST** /rest/v1.0/mer/alipayauth/query | 查询支付宝实名认证状态
[**applyReceiverProgressQuery**](Mer.md#applyReceiverProgressQuery) | **POST** /rest/v1.0/mer/receiver/apply-progress-query | 入账方申请进度查询
[**apply_user**](Mer.md#apply_user) | **POST** /rest/v1.0/mer/user/apply | 申请开通用户记账簿
[**areaQuery**](Mer.md#areaQuery) | **POST** /rest/v1.0/mer/area/query | 查询经营省市区编码
[**authStateQueryV2**](Mer.md#authStateQueryV2) | **GET** /rest/v2.0/mer/auth/state/query | 商户授权状态查询接口
[**auth_state_query_v2_0**](Mer.md#auth_state_query_v2_0) | **GET** /rest/v2.0/mer/auth/state/query | 商户授权状态查询接口
[**bind_user_bankcard**](Mer.md#bind_user_bankcard) | **POST** /rest/v1.0/mer/user/bankcard/bind | 绑定用户银行卡
[**bossRegisterQueryV2**](Mer.md#bossRegisterQueryV2) | **GET** /rest/v2.0/mer/boss/register/query | 老板管账商户入网进度查询
[**bossRegisterSaasDivideV2**](Mer.md#bossRegisterSaasDivideV2) | **POST** /rest/v2.0/mer/boss/register/saas/divide | 老板管账特约商户入网(企业/个体)-收单+分账
[**bossRegisterSaasStandardV2**](Mer.md#bossRegisterSaasStandardV2) | **POST** /rest/v2.0/mer/boss/register/saas/standard | 老板管账特约商户入网(企业/个体)-收单+结算
[**cardQuery**](Mer.md#cardQuery) | **POST** /rest/v1.0/mer/card/query | 查询商户银行卡信息
[**cloneMerchant**](Mer.md#cloneMerchant) | **POST** /rest/v1.0/mer/register/contribute/merchant/clone | 子商户新增ID
[**mer_card_query**](Mer.md#mer_card_query) | **POST** /rest/v1.0/mer/card/query | 查询商户银行卡信息
[**merchantBasicInfoQuery**](Mer.md#merchantBasicInfoQuery) | **POST** /rest/v1.0/mer/merchant-basic-info-query | 查询商户基础信息
[**merchantDisposeQuery**](Mer.md#merchantDisposeQuery) | **GET** /rest/v1.0/mer/merchant/dispose/query | 沉默商户解冻申请进度查询
[**merchantDisposeUnfreeze**](Mer.md#merchantDisposeUnfreeze) | **POST** /rest/v1.0/mer/merchant/dispose/unfreeze | 沉默商户解冻申请
[**merchantInfoModify**](Mer.md#merchantInfoModify) | **POST** /rest/v1.0/mer/merchant/info/modify | 商户信息变更
[**merchantInfoModifyQuery**](Mer.md#merchantInfoModifyQuery) | **GET** /rest/v1.0/mer/merchant/info/modify/query | 商户信息变更进度查询接口
[**merchantInfoVerifySubMerchantRelation**](Mer.md#merchantInfoVerifySubMerchantRelation) | **POST** /rest/v1.0/mer/merchant/info/verify-sub-merchant-relation | 子商户关系校验
[**merchantSupplementQualificationQuery**](Mer.md#merchantSupplementQualificationQuery) | **GET** /rest/v1.0/mer/merchant/supplement/qualification/query | 后补资质查询
[**merchantSupplementQualificationSubmit**](Mer.md#merchantSupplementQualificationSubmit) | **POST** /rest/v1.0/mer/merchant/supplement/qualification/submit | 后补资质提交
[**merchantWechatauthApply**](Mer.md#merchantWechatauthApply) | **POST** /rest/v1.0/mer/merchant/wechatauth/apply | 微信实名认证申请单申请
[**merchantWechatauthCancel**](Mer.md#merchantWechatauthCancel) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchantWechatauthQuery**](Mer.md#merchantWechatauthQuery) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态
[**merchant_adapter_read_h5_net_in**](Mer.md#merchant_adapter_read_h5_net_in) | **POST** /rest/v1.0/mer/netin/h5/index | 获取H5入网链接
[**merchant_adapter_read_h5_query**](Mer.md#merchant_adapter_read_h5_query) | **POST** /rest/v1.0/mer/netin/h5/query | H5入网进度查询
[**merchant_alipayauth_apply_v1_0**](Mer.md#merchant_alipayauth_apply_v1_0) | **POST** /rest/v1.0/mer/alipayauth/apply | 支付宝实名认证申请单申请
[**merchant_alipayauth_cancel_v1_0**](Mer.md#merchant_alipayauth_cancel_v1_0) | **POST** /rest/v1.0/mer/alipayauth/cancel | 撤销支付宝实名认证
[**merchant_alipayauth_query_v1_0**](Mer.md#merchant_alipayauth_query_v1_0) | **POST** /rest/v1.0/mer/alipayauth/query | 查询支付宝实名认证状态
[**merchant_dispose_unfreeze_v1_0**](Mer.md#merchant_dispose_unfreeze_v1_0) | **POST** /rest/v1.0/mer/merchant/dispose/unfreeze | 沉默商户解冻申请
[**merchant_info_modify_v1_0**](Mer.md#merchant_info_modify_v1_0) | **POST** /rest/v1.0/mer/merchant/info/modify | 商户信息变更
[**merchant_rectification_result_query**](Mer.md#merchant_rectification_result_query) | **POST** /rest/v1.0/mer/rectification/result/query | 查询整改协查结果
[**merchant_supplement_qualification_submit_v1_0**](Mer.md#merchant_supplement_qualification_submit_v1_0) | **POST** /rest/v1.0/mer/merchant/supplement/qualification/submit | 后补资质提交
[**merchant_wechatauth_apply_v1_0**](Mer.md#merchant_wechatauth_apply_v1_0) | **POST** /rest/v1.0/mer/merchant/wechatauth/apply | 微信实名认证申请单申请
[**merchant_wechatauth_cancel_v1_0**](Mer.md#merchant_wechatauth_cancel_v1_0) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchant_wechatauth_query_v1_0**](Mer.md#merchant_wechatauth_query_v1_0) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态
[**mpSendSmsVerifyCode**](Mer.md#mpSendSmsVerifyCode) | **POST** /rest/v1.0/mer/mp/send-sms-verify-code | 发送短信验证码
[**mpSetTradePassword**](Mer.md#mpSetTradePassword) | **POST** /rest/v1.0/mer/mp/set-trade-password | 设置交易密码
[**mpVerifyTradePassword**](Mer.md#mpVerifyTradePassword) | **POST** /rest/v1.0/mer/mp/verify-trade-password | 验证交易密码
[**netInProgressQueryByName**](Mer.md#netInProgressQueryByName) | **POST** /rest/v1.0/mer/register/query-by-name | 根据商户名称和简称查询入网进度
[**netinH5Index**](Mer.md#netinH5Index) | **POST** /rest/v1.0/mer/netin/h5/index | 获取H5入网链接
[**netinH5Query**](Mer.md#netinH5Query) | **POST** /rest/v1.0/mer/netin/h5/query | H5入网进度查询
[**notifyRepeatV2**](Mer.md#notifyRepeatV2) | **POST** /rest/v2.0/mer/notify/repeat | 重复获取(短验/邮件/电子签章)
[**notify_repeat_v2_0**](Mer.md#notify_repeat_v2_0) | **POST** /rest/v2.0/mer/notify/repeat | 重复获取(短验/邮件/电子签章)
[**productFeeModifyV2**](Mer.md#productFeeModifyV2) | **POST** /rest/v2.0/mer/product/fee/modify | 商户产品变更
[**productFeeQueryV2**](Mer.md#productFeeQueryV2) | **GET** /rest/v2.0/mer/product/fee/query | 商户产品费率查询
[**productIncrementSettleOpenV2**](Mer.md#productIncrementSettleOpenV2) | **POST** /rest/v2.0/mer/product/increment-settle/open | 增值结算产品开通
[**productModifyQueryV2**](Mer.md#productModifyQueryV2) | **GET** /rest/v2.0/mer/product/modify/query | 商户产品变更进度查询接口
[**product_fee_modify_v2_0**](Mer.md#product_fee_modify_v2_0) | **POST** /rest/v2.0/mer/product/fee/modify | 商户产品变更
[**product_increment_settle_open_v2_0**](Mer.md#product_increment_settle_open_v2_0) | **POST** /rest/v2.0/mer/product/increment-settle/open | 增值结算产品开通
[**queryArea**](Mer.md#queryArea) | **POST** /rest/v1.0/mer/area/query | 查询经营省市区编码
[**queryMerchantInfoModifyProgress**](Mer.md#queryMerchantInfoModifyProgress) | **GET** /rest/v1.0/mer/merchant/info/modify/query | 商户信息变更进度查询接口
[**queryMerchantStatus**](Mer.md#queryMerchantStatus) | **GET** /rest/v1.0/mer/status/query | 商户状态查询
[**query_book_info**](Mer.md#query_book_info) | **POST** /rest/v1.0/mer/user/book/query | 查询记账簿信息
[**query_merchant_basic_info**](Mer.md#query_merchant_basic_info) | **POST** /rest/v1.0/mer/merchant-basic-info-query | 查询商户基础信息
[**receiverApply**](Mer.md#receiverApply) | **POST** /rest/v1.0/mer/receiver/apply | 申请入账方
[**receiverApplyProgressQuery**](Mer.md#receiverApplyProgressQuery) | **POST** /rest/v1.0/mer/receiver/apply-progress-query | 入账方申请进度查询
[**receiverUpdate**](Mer.md#receiverUpdate) | **POST** /rest/v1.0/mer/receiver/update | 修改入账方信息
[**rectificationResultQuery**](Mer.md#rectificationResultQuery) | **POST** /rest/v1.0/mer/rectification/result/query | 查询整改协查结果
[**registerContributeMerchantClone**](Mer.md#registerContributeMerchantClone) | **POST** /rest/v1.0/mer/register/contribute/merchant/clone | 子商户新增ID
[**registerQueryByName**](Mer.md#registerQueryByName) | **POST** /rest/v1.0/mer/register/query-by-name | 根据商户名称和简称查询入网进度
[**registerQueryV2**](Mer.md#registerQueryV2) | **GET** /rest/v2.0/mer/register/query | 商户入网进度查询接口
[**registerSaasIndexV2**](Mer.md#registerSaasIndexV2) | **POST** /rest/v2.0/mer/register/saas/index | 特约商户H5页面入网（小微）
[**registerSaasMerchantV2**](Mer.md#registerSaasMerchantV2) | **POST** /rest/v2.0/mer/register/saas/merchant | 特约商户入网(企业/个体)
[**registerSaasMicroV2**](Mer.md#registerSaasMicroV2) | **POST** /rest/v2.0/mer/register/saas/micro | 特约商户入网(小微)
[**registerSaasWebIndexV2**](Mer.md#registerSaasWebIndexV2) | **POST** /rest/v2.0/mer/register/saas/web/index | 特约商户WEB页面入网（企业/个体）
[**rest_v2_mer_boss_register_query**](Mer.md#rest_v2_mer_boss_register_query) | **GET** /rest/v2.0/mer/boss/register/query | 老板管账商户入网进度查询
[**rest_v2_mer_boss_register_saas_standard**](Mer.md#rest_v2_mer_boss_register_saas_standard) | **POST** /rest/v2.0/mer/boss/register/saas/standard | 老板管账特约商户入网(企业/个体)-收单+结算
[**rest_v2_mer_boss_register_sass_divide**](Mer.md#rest_v2_mer_boss_register_sass_divide) | **POST** /rest/v2.0/mer/boss/register/saas/divide | 老板管账特约商户入网(企业/个体)-收单+分账
[**sendSmsVerifyCode**](Mer.md#sendSmsVerifyCode) | **POST** /rest/v1.0/mer/mp/send-sms-verify-code | 发送短信验证码
[**setTradePassword**](Mer.md#setTradePassword) | **POST** /rest/v1.0/mer/mp/set-trade-password | 设置交易密码
[**statusQuery**](Mer.md#statusQuery) | **GET** /rest/v1.0/mer/status/query | 商户状态查询
[**updateReceiver**](Mer.md#updateReceiver) | **POST** /rest/v1.0/mer/receiver/update | 修改入账方信息
[**userApply**](Mer.md#userApply) | **POST** /rest/v1.0/mer/user/apply | 申请开通用户记账簿
[**userApplyProgressQuery**](Mer.md#userApplyProgressQuery) | **POST** /rest/v1.0/mer/user/apply-progress/query | 查询用户创建进度
[**userBankcardAdd**](Mer.md#userBankcardAdd) | **POST** /rest/v1.0/mer/user/bankcard/add | 用户银行卡新增
[**userBankcardBind**](Mer.md#userBankcardBind) | **POST** /rest/v1.0/mer/user/bankcard/bind | 绑定用户银行卡
[**userBookQuery**](Mer.md#userBookQuery) | **POST** /rest/v1.0/mer/user/book/query | 查询记账簿信息
[**user_apply_progress_query**](Mer.md#user_apply_progress_query) | **POST** /rest/v1.0/mer/user/apply-progress/query | 查询用户创建进度
[**verify_merchant_relation**](Mer.md#verify_merchant_relation) | **POST** /rest/v1.0/mer/merchant/info/verify-sub-merchant-relation | 子商户关系校验
[**yOPVerifyTradePassword**](Mer.md#yOPVerifyTradePassword) | **POST** /rest/v1.0/mer/mp/verify-trade-password | 验证交易密码


# **add_user_bankcard**
AddUserBankcardResponse add_user_bankcard(AddUserBankcardRequest request)

用户银行卡新增



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AddUserBankcardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO());

try {
    $response = $api_client->add_user_bankcard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->add_user_bankcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO**](../Model/BankCardAddReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddRespDTO**](../Model/BankCardAddRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **alipayauthApply**
AlipayauthApplyResponse alipayauthApply(AlipayauthApplyRequest request)

支付宝实名认证申请单申请

支付宝实名认证申请单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AlipayauthApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto());

try {
    $response = $api_client->alipayauthApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->alipayauthApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto**](../Model/IdentityAuthApplymentReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentRespDto**](../Model/IdentityAuthApplymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **alipayauthCancel**
AlipayauthCancelResponse alipayauthCancel(AlipayauthCancelRequest request)

撤销支付宝实名认证

撤销支付宝实名认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AlipayauthCancelRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());

try {
    $response = $api_client->alipayauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->alipayauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto**](../Model/IdentityAuthInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BusinessManageBaseRespDto**](../Model/BusinessManageBaseRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **alipayauthQuery**
AlipayauthQueryResponse alipayauthQuery(AlipayauthQueryRequest request)

查询支付宝实名认证状态

查询支付宝实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AlipayauthQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());

try {
    $response = $api_client->alipayauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->alipayauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto**](../Model/IdentityAuthInfoReqDto.md)| 查询支付宝实名认证状态 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryIdentityAuthResultRespDto**](../Model/QueryIdentityAuthResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **applyReceiverProgressQuery**
ApplyReceiverProgressQueryResponse applyReceiverProgressQuery(ApplyReceiverProgressQueryRequest request)

入账方申请进度查询

入账方申请进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverProgressQueryRequest();
$request->setRequestNo("YBXZRZFQQH2024050XXXXXX");

try {
    $response = $api_client->applyReceiverProgressQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->applyReceiverProgressQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverProgressQueryRespDto**](../Model/ApplyReceiverProgressQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **apply_user**
ApplyUserResponse apply_user(ApplyUserRequest request)

申请开通用户记账簿



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ApplyUserRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO());

try {
    $response = $api_client->apply_user($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->apply_user: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO**](../Model/UserApplyReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyRespDTO**](../Model/UserApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **areaQuery**
AreaQueryResponse areaQuery(AreaQueryRequest request)

查询经营省市区编码

商户可以通过该接口，查询最新的全量地区码。支持传上级编码返回下级的全量省市区编码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AreaQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO());

try {
    $response = $api_client->areaQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->areaQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO**](../Model/QueryAreaReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AreaRespDTO**](../Model/AreaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **authStateQueryV2**
AuthStateQueryV2Response authStateQueryV2(AuthStateQueryV2Request request)

商户授权状态查询接口

商户授权状态查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2Request();
$request->setMerchantNo("merchantNo_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setFeeType("feeType_example");
$request->setQueryStrategy("queryStrategy_example");
$request->setPageNum("pageNum_example");
$request->setPageSize("pageSize_example");

try {
    $response = $api_client->authStateQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 易宝商户编号 |
 **reportMerchantNo** | **string**| 报备商户编号 | [optional]
 **feeType** | **string**| 可选项如下: GONGYI:微信公益 GONGJIAO:微信公缴 XIANXIA:微信线下 BAOXIAN:微信保险 XIANSHANG:微信线上 OLDLVZHOU:微信老绿洲 LVZHOU:微信绿洲 XIAOYUAN:微信校园 JIEDAIFENLI:微信借贷分离 SHUYU:微信数娱 ALIPUTONG:支付宝普通 | [optional]
 **queryStrategy** | **string**| PRIMARY ：仅查询主号 &lt;br&gt;BACKUP_PAGE ： 分页查主备（分页查询时必须传分页参数）&lt;br&gt;不传默认仅查主号 | [optional]
 **pageNum** | **string**|  | [optional]
 **pageSize** | **string**| 每页最多10条，支持1-10之间的正整数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthStateResDto**](../Model/IdentityAuthStateResDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auth_state_query_v2_0**
AuthStateQueryV20Response auth_state_query_v2_0(AuthStateQueryV20Request request)

商户授权状态查询接口

商户授权状态查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV20Request();
$request->setMerchantNo("merchantNo_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setFeeType("feeType_example");
$request->setQueryStrategy("queryStrategy_example");
$request->setPageNum("pageNum_example");
$request->setPageSize("pageSize_example");

try {
    $response = $api_client->auth_state_query_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->auth_state_query_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 易宝商户编号 |
 **reportMerchantNo** | **string**| 报备商户编号 | [optional]
 **feeType** | **string**| 可选项如下: GONGYI:微信公益 GONGJIAO:微信公缴 XIANXIA:微信线下 BAOXIAN:微信保险 XIANSHANG:微信线上 OLDLVZHOU:微信老绿洲 LVZHOU:微信绿洲 XIAOYUAN:微信校园 JIEDAIFENLI:微信借贷分离 SHUYU:微信数娱 ALIPUTONG:支付宝普通 | [optional]
 **queryStrategy** | **string**| PRIMARY ：仅查询主号 &lt;br&gt;BACKUP_PAGE ： 分页查主备（分页查询时必须传分页参数）&lt;br&gt;不传默认仅查主号 | [optional]
 **pageNum** | **string**|  | [optional]
 **pageSize** | **string**| 每页最多10条，支持1-10之间的正整数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthStateResDto**](../Model/IdentityAuthStateResDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bind_user_bankcard**
BindUserBankcardResponse bind_user_bankcard(BindUserBankcardRequest request)

绑定用户银行卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BindUserBankcardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO());

try {
    $response = $api_client->bind_user_bankcard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bind_user_bankcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO**](../Model/BankCardBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindRespDTO**](../Model/BankCardBindRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bossRegisterQueryV2**
BossRegisterQueryV2Response bossRegisterQueryV2(BossRegisterQueryV2Request request)

老板管账商户入网进度查询

老板管账子商户入网进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterQueryV2Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bossRegisterQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;div data-page-id&#x3D;\&quot;OY64dHLw1o1F9Ex1aTIcfgg5nHf\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号与商户编号二选一必传&lt;/div&gt; &lt;/div&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; &lt;p&gt;商户编号与入网请求号二选一必传&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInProgressQueryApiRespDTO**](../Model/BossMerchantNetInProgressQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bossRegisterSaasDivideV2**
BossRegisterSaasDivideV2Response bossRegisterSaasDivideV2(BossRegisterSaasDivideV2Request request)

老板管账特约商户入网(企业/个体)-收单+分账

老板管账特约商户入网(企业/个体)-收单+分账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterSaasDivideV2Request();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
$request->setSellerNo("SE20230627XXXXXX");

try {
    $response = $api_client->bossRegisterSaasDivideV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterSaasDivideV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **divideConfigInfo** | **string**|  | [optional]
 **sellerNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInDivideApiRespDTO**](../Model/BossMerchantNetInDivideApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bossRegisterSaasStandardV2**
BossRegisterSaasStandardV2Response bossRegisterSaasStandardV2(BossRegisterSaasStandardV2Request request)

老板管账特约商户入网(企业/个体)-收单+结算

老板管账特约商户入网(企业/个体)-收单+结算

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\BossRegisterSaasStandardV2Request();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\",\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setSellerNo("SE20230627XXXXXX");

try {
    $response = $api_client->bossRegisterSaasStandardV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->bossRegisterSaasStandardV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **sellerNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInStandardApiRespDTO**](../Model/BossMerchantNetInStandardApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **cardQuery**
CardQueryResponse cardQuery(CardQueryRequest request)

查询商户银行卡信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\CardQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto());

try {
    $response = $api_client->cardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->cardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto**](../Model/MerchantBankCardQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryRespDto**](../Model/MerchantBankCardQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **cloneMerchant**
CloneMerchantResponse cloneMerchant(CloneMerchantRequest request)

子商户新增ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\CloneMerchantRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO());

try {
    $response = $api_client->cloneMerchant($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->cloneMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO**](../Model/MerchantCloneReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\CloneMerchantNetInRespDto**](../Model/CloneMerchantNetInRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **mer_card_query**
MerCardQueryResponse mer_card_query(MerCardQueryRequest request)

查询商户银行卡信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerCardQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto());

try {
    $response = $api_client->mer_card_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->mer_card_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto**](../Model/MerchantBankCardQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryRespDto**](../Model/MerchantBankCardQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchantBasicInfoQuery**
MerchantBasicInfoQueryResponse merchantBasicInfoQuery(MerchantBasicInfoQueryRequest request)

查询商户基础信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto());

try {
    $response = $api_client->merchantBasicInfoQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantBasicInfoQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto**](../Model/MerchantBasicInfoQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryRespDto**](../Model/MerchantBasicInfoQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchantDisposeQuery**
MerchantDisposeQueryResponse merchantDisposeQuery(MerchantDisposeQueryRequest request)

沉默商户解冻申请进度查询

查询沉默商户解冻申请单进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");

try {
    $response = $api_client->merchantDisposeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 请求号与工单号二选一必填 | [optional]
 **applicationNo** | **string**| 请求号与工单号二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult**](../Model/MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeUnfreeze**
MerchantDisposeUnfreezeResponse merchantDisposeUnfreeze(MerchantDisposeUnfreezeRequest request)

沉默商户解冻申请

支持自助发起沉默商户解冻

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeRequest();
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantDisposeUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeRespDto**](../Model/MerchantDisposeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantInfoModify**
MerchantInfoModifyResponse merchantInfoModify(MerchantInfoModifyRequest request)

商户信息变更

商户信息变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRequest();
$request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\",\"defaultSettleCard\":false}");
$request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
$request->setQualificationInfo("{\"businessPlacePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\", \"scenePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setMerchantReportConfig("{\"modifyReport\":true,\"reportChannels\": [\"WECHAT\",\"ALIPAY\"]}");
$request->setMerchantExtraInfo("{\"customAttrs\":{\"subsideFlag\":\"1245\"}}");
$request->setSettleConfig("{\"settleTarget\":\"HEAD_CHAIN\"}");
$request->setUboInfoList("uboInfoList_example");

try {
    $response = $api_client->merchantInfoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **bankToken** | **string**|  | [optional]
 **qualificationInfo** | **string**|  | [optional]
 **merchantReportConfig** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]
 **settleConfig** | **string**|  | [optional]
 **uboInfoList** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRespDTO**](../Model/MerchantInfoModifyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantInfoModifyQuery**
MerchantInfoModifyQueryResponse merchantInfoModifyQuery(MerchantInfoModifyQueryRequest request)

商户信息变更进度查询接口

商户信息变更进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyQueryRequest();
$request->setRequestNo("7973679854dc48949adfd0a57418dedb");

try {
    $response = $api_client->merchantInfoModifyQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantInfoModifyQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;p&gt;商户信息变更请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantInfoModifyProgressRespDTO**](../Model/QueryMerchantInfoModifyProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantInfoVerifySubMerchantRelation**
MerchantInfoVerifySubMerchantRelationResponse merchantInfoVerifySubMerchantRelation(MerchantInfoVerifySubMerchantRelationRequest request)

子商户关系校验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoVerifySubMerchantRelationRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNoList(array("merchantNoList_example"));

try {
    $response = $api_client->merchantInfoVerifySubMerchantRelation($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantInfoVerifySubMerchantRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNoList** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SubMerchantRelationRespDto**](../Model/SubMerchantRelationRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationQuery**
MerchantSupplementQualificationQueryResponse merchantSupplementQualificationQuery(MerchantSupplementQualificationQueryRequest request)

后补资质查询

后补资质查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantSupplementQualificationQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult**](../Model/MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationSubmit**
MerchantSupplementQualificationSubmitResponse merchantSupplementQualificationSubmit(MerchantSupplementQualificationSubmitRequest request)

后补资质提交

后补资质提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitRequest();
$request->setMerchantNo("1234567890");
$request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");

try {
    $response = $api_client->merchantSupplementQualificationSubmit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SubmitMopQuaInfoRespDTO**](../Model/SubmitMopQuaInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthApply**
MerchantWechatauthApplyResponse merchantWechatauthApply(MerchantWechatauthApplyRequest request)

微信实名认证申请单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthApplyRequest();
$request->setRequestNo("YBWXSMRZSQ20220620XXXXXX");
$request->setSubMerchantNo("10084321321");
$request->setApplicantType("applicantType_example");
$request->setApplicantName("张三");
$request->setApplicantPhone("18876543210");
$request->setApplicantIdCard("220000000000000001");
$request->setTransactorInfo("{ \"businessAuthorizationLetter\": \"业务办理授权函\", \"transactorIdentificationBackCopy\": \"申请人证件反面照片\", \"transactorIdentificationFrontCopy\": \"申请人证件正面照片\", \"transactorIdentificationType\": \"申请人证件类型\", \"transactorIdentificationValidDate\": [\"1970-01-01\",\"forever\"] }");
$request->setIdentificationType("identificationType_example");
$request->setIdentificationFrontCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setIdentificationBackCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setIdentificationValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
$request->setIdentificationAddress("广东省深圳市南山区xx路xx号xx室");
$request->setCertCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setCompanyAddress("广东省深圳市南山区xx路xx号xx室");
$request->setLicenceValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
$request->setIsFinanceInstitution(true);
$request->setFinanceInstitutionInfo("{ \"financeLicensePics\": [  \"金融机构许可证图片1\",    \"金融机构许可证图片2\",    \"金融机构许可证图片3\"  ],  \"financeType\": \"金融机构类型\" }");
$request->setCertType("CERTIFICATE_TYPE_2388");
$request->setCertNumber("111111111111");
$request->setCompanyProveCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setOwner(true);
$request->setUboInfoList("[{ \"uboIdDocAddress\": \"证件居住地址\", \"uboIdDocCopy\": \"证件正面照片\", \"uboIdDocCopyBack\": \"证件反面照片\", \"uboIdDocName\": \"受益人姓名\", \"uboIdDocNumber\": \"证件号码\", \"uboIdDocType\": \"证件类型\", \"uboIdValidDate\": \"证件有效期\" }]");
$request->setReportFee("reportFee_example");
$request->setChannelId("39231134");
$request->setMicroBizType("microBizType_example");
$request->setStoreName("大郎烧饼");
$request->setStoreAddressCode("440305");
$request->setStoreHeaderCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setStoreIndoorCopy("https://staticres.yeepay.com/xxx.文件后缀");

try {
    $response = $api_client->merchantWechatauthApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **applicantType** | **string**|  | [optional]
 **applicantName** | **string**|  | [optional]
 **applicantPhone** | **string**|  | [optional]
 **applicantIdCard** | **string**|  | [optional]
 **transactorInfo** | **string**|  | [optional]
 **identificationType** | **string**|  | [optional]
 **identificationFrontCopy** | **string**|  | [optional]
 **identificationBackCopy** | **string**|  | [optional]
 **identificationValidDate** | **string**|  | [optional]
 **identificationAddress** | **string**|  | [optional]
 **certCopy** | **string**|  | [optional]
 **companyAddress** | **string**|  | [optional]
 **licenceValidDate** | **string**|  | [optional]
 **isFinanceInstitution** | **bool**|  | [optional]
 **financeInstitutionInfo** | **string**|  | [optional]
 **certType** | **string**|  | [optional]
 **certNumber** | **string**|  | [optional]
 **companyProveCopy** | **string**|  | [optional]
 **owner** | **bool**|  | [optional]
 **uboInfoList** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]
 **microBizType** | **string**|  | [optional]
 **storeName** | **string**|  | [optional]
 **storeAddressCode** | **string**|  | [optional]
 **storeHeaderCopy** | **string**|  | [optional]
 **storeIndoorCopy** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentRespDto**](../Model/ApplymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthCancel**
MerchantWechatauthCancelResponse merchantWechatauthCancel(MerchantWechatauthCancelRequest request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelRequest();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setChannelId("39231134");

try {
    $response = $api_client->merchantWechatauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentCancelRespDto**](../Model/ApplymentCancelRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthQuery**
MerchantWechatauthQueryResponse merchantWechatauthQuery(MerchantWechatauthQueryRequest request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryRequest();
$request->setApplymentId("applymentId_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setRequestNo("requestNo_example");
$request->setCustomQrcode(true);
$request->setChannelId("channelId_example");

try {
    $response = $api_client->merchantWechatauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  |
 **subMerchantNo** | **string**|  |
 **reportFee** | **string**| 可选项如下: GONGYI:微信公益 GONGJIAO:微信公缴 XIANXIA:微信线下 BAOXIAN:微信保险 XIANSHANG:微信线上 OLDLVZHOU:微信老绿洲 LVZHOU:微信绿洲 XIAOYUAN:微信校园 JIEDAIFENLI:微信借贷分离 SHUYU:微信数娱 |
 **requestNo** | **string**|  | [optional]
 **customQrcode** | **bool**| ture：返回携带商户信息的二维码 &lt;br&gt;false：返回裸码 | [optional]
 **channelId** | **string**| &lt;p&gt;渠道编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryCertificateResultRespDto**](../Model/QueryCertificateResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_adapter_read_h5_net_in**
MerchantAdapterReadH5NetInResponse merchant_adapter_read_h5_net_in(MerchantAdapterReadH5NetInRequest request)

获取H5入网链接



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAdapterReadH5NetInRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO());

try {
    $response = $api_client->merchant_adapter_read_h5_net_in($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_adapter_read_h5_net_in: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO**](../Model/ApplyH5NetInRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRespDTO**](../Model/ApplyH5NetInRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_adapter_read_h5_query**
MerchantAdapterReadH5QueryResponse merchant_adapter_read_h5_query(MerchantAdapterReadH5QueryRequest request)

H5入网进度查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAdapterReadH5QueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto());

try {
    $response = $api_client->merchant_adapter_read_h5_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_adapter_read_h5_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto**](../Model/QueryNetInProgressReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressRespDto**](../Model/QueryNetInProgressRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_alipayauth_apply_v1_0**
MerchantAlipayauthApplyV10Response merchant_alipayauth_apply_v1_0(MerchantAlipayauthApplyV10Request request)

支付宝实名认证申请单申请

支付宝实名认证申请单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAlipayauthApplyV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto());

try {
    $response = $api_client->merchant_alipayauth_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_alipayauth_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto**](../Model/IdentityAuthApplymentReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentRespDto**](../Model/IdentityAuthApplymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_alipayauth_cancel_v1_0**
MerchantAlipayauthCancelV10Response merchant_alipayauth_cancel_v1_0(MerchantAlipayauthCancelV10Request request)

撤销支付宝实名认证

撤销支付宝实名认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAlipayauthCancelV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());

try {
    $response = $api_client->merchant_alipayauth_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_alipayauth_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto**](../Model/IdentityAuthInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BusinessManageBaseRespDto**](../Model/BusinessManageBaseRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_alipayauth_query_v1_0**
MerchantAlipayauthQueryV10Response merchant_alipayauth_query_v1_0(MerchantAlipayauthQueryV10Request request)

查询支付宝实名认证状态

查询支付宝实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantAlipayauthQueryV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());

try {
    $response = $api_client->merchant_alipayauth_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_alipayauth_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto**](../Model/IdentityAuthInfoReqDto.md)| 查询支付宝实名认证状态 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryIdentityAuthResultRespDto**](../Model/QueryIdentityAuthResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_dispose_unfreeze_v1_0**
MerchantDisposeUnfreezeV10Response merchant_dispose_unfreeze_v1_0(MerchantDisposeUnfreezeV10Request request)

沉默商户解冻申请

支持自助发起沉默商户解冻

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeV10Request();
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchant_dispose_unfreeze_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_dispose_unfreeze_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeRespDto**](../Model/MerchantDisposeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_info_modify_v1_0**
MerchantInfoModifyV10Response merchant_info_modify_v1_0(MerchantInfoModifyV10Request request)

商户信息变更

商户信息变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyV10Request();
$request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\",\"defaultSettleCard\":false}");
$request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
$request->setQualificationInfo("{\"businessPlacePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\", \"scenePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setMerchantReportConfig("{\"modifyReport\":true,\"reportChannels\": [\"WECHAT\",\"ALIPAY\"]}");
$request->setMerchantExtraInfo("{\"customAttrs\":{\"subsideFlag\":\"1245\"}}");
$request->setSettleConfig("{\"settleTarget\":\"HEAD_CHAIN\"}");
$request->setUboInfoList("uboInfoList_example");

try {
    $response = $api_client->merchant_info_modify_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_info_modify_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **bankToken** | **string**|  | [optional]
 **qualificationInfo** | **string**|  | [optional]
 **merchantReportConfig** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]
 **settleConfig** | **string**|  | [optional]
 **uboInfoList** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRespDTO**](../Model/MerchantInfoModifyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_rectification_result_query**
MerchantRectificationResultQueryResponse merchant_rectification_result_query(MerchantRectificationResultQueryRequest request)

查询整改协查结果



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantRectificationResultQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO());

try {
    $response = $api_client->merchant_rectification_result_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_rectification_result_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO**](../Model/QueryMerchantRectificationResultReqDTO.md)| 查询商户整改协查结果 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantRectificationResultRespDTO**](../Model/MerchantRectificationResultRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **merchant_supplement_qualification_submit_v1_0**
MerchantSupplementQualificationSubmitV10Response merchant_supplement_qualification_submit_v1_0(MerchantSupplementQualificationSubmitV10Request request)

后补资质提交

后补资质提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitV10Request();
$request->setMerchantNo("1234567890");
$request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");

try {
    $response = $api_client->merchant_supplement_qualification_submit_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_supplement_qualification_submit_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SubmitMopQuaInfoRespDTO**](../Model/SubmitMopQuaInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_wechatauth_apply_v1_0**
MerchantWechatauthApplyV10Response merchant_wechatauth_apply_v1_0(MerchantWechatauthApplyV10Request request)

微信实名认证申请单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthApplyV10Request();
$request->setRequestNo("YBWXSMRZSQ20220620XXXXXX");
$request->setSubMerchantNo("10084321321");
$request->setApplicantType("applicantType_example");
$request->setApplicantName("张三");
$request->setApplicantPhone("18876543210");
$request->setApplicantIdCard("220000000000000001");
$request->setTransactorInfo("{ \"businessAuthorizationLetter\": \"业务办理授权函\", \"transactorIdentificationBackCopy\": \"申请人证件反面照片\", \"transactorIdentificationFrontCopy\": \"申请人证件正面照片\", \"transactorIdentificationType\": \"申请人证件类型\", \"transactorIdentificationValidDate\": [\"1970-01-01\",\"forever\"] }");
$request->setIdentificationType("identificationType_example");
$request->setIdentificationFrontCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setIdentificationBackCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setIdentificationValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
$request->setIdentificationAddress("广东省深圳市南山区xx路xx号xx室");
$request->setCertCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setCompanyAddress("广东省深圳市南山区xx路xx号xx室");
$request->setLicenceValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
$request->setIsFinanceInstitution(true);
$request->setFinanceInstitutionInfo("{ \"financeLicensePics\": [  \"金融机构许可证图片1\",    \"金融机构许可证图片2\",    \"金融机构许可证图片3\"  ],  \"financeType\": \"金融机构类型\" }");
$request->setCertType("CERTIFICATE_TYPE_2388");
$request->setCertNumber("111111111111");
$request->setCompanyProveCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setOwner(true);
$request->setUboInfoList("[{ \"uboIdDocAddress\": \"证件居住地址\", \"uboIdDocCopy\": \"证件正面照片\", \"uboIdDocCopyBack\": \"证件反面照片\", \"uboIdDocName\": \"受益人姓名\", \"uboIdDocNumber\": \"证件号码\", \"uboIdDocType\": \"证件类型\", \"uboIdValidDate\": \"证件有效期\" }]");
$request->setReportFee("reportFee_example");
$request->setChannelId("39231134");
$request->setMicroBizType("microBizType_example");
$request->setStoreName("大郎烧饼");
$request->setStoreAddressCode("440305");
$request->setStoreHeaderCopy("https://staticres.yeepay.com/xxx.文件后缀");
$request->setStoreIndoorCopy("https://staticres.yeepay.com/xxx.文件后缀");

try {
    $response = $api_client->merchant_wechatauth_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_wechatauth_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **applicantType** | **string**|  | [optional]
 **applicantName** | **string**|  | [optional]
 **applicantPhone** | **string**|  | [optional]
 **applicantIdCard** | **string**|  | [optional]
 **transactorInfo** | **string**|  | [optional]
 **identificationType** | **string**|  | [optional]
 **identificationFrontCopy** | **string**|  | [optional]
 **identificationBackCopy** | **string**|  | [optional]
 **identificationValidDate** | **string**|  | [optional]
 **identificationAddress** | **string**|  | [optional]
 **certCopy** | **string**|  | [optional]
 **companyAddress** | **string**|  | [optional]
 **licenceValidDate** | **string**|  | [optional]
 **isFinanceInstitution** | **bool**|  | [optional]
 **financeInstitutionInfo** | **string**|  | [optional]
 **certType** | **string**|  | [optional]
 **certNumber** | **string**|  | [optional]
 **companyProveCopy** | **string**|  | [optional]
 **owner** | **bool**|  | [optional]
 **uboInfoList** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]
 **microBizType** | **string**|  | [optional]
 **storeName** | **string**|  | [optional]
 **storeAddressCode** | **string**|  | [optional]
 **storeHeaderCopy** | **string**|  | [optional]
 **storeIndoorCopy** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentRespDto**](../Model/ApplymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_wechatauth_cancel_v1_0**
MerchantWechatauthCancelV10Response merchant_wechatauth_cancel_v1_0(MerchantWechatauthCancelV10Request request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelV10Request();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setChannelId("39231134");

try {
    $response = $api_client->merchant_wechatauth_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_wechatauth_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentCancelRespDto**](../Model/ApplymentCancelRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchant_wechatauth_query_v1_0**
MerchantWechatauthQueryV10Response merchant_wechatauth_query_v1_0(MerchantWechatauthQueryV10Request request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryV10Request();
$request->setApplymentId("applymentId_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setRequestNo("requestNo_example");
$request->setCustomQrcode(true);
$request->setChannelId("channelId_example");

try {
    $response = $api_client->merchant_wechatauth_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchant_wechatauth_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  |
 **subMerchantNo** | **string**|  |
 **reportFee** | **string**| 可选项如下: GONGYI:微信公益 GONGJIAO:微信公缴 XIANXIA:微信线下 BAOXIAN:微信保险 XIANSHANG:微信线上 OLDLVZHOU:微信老绿洲 LVZHOU:微信绿洲 XIAOYUAN:微信校园 JIEDAIFENLI:微信借贷分离 SHUYU:微信数娱 |
 **requestNo** | **string**|  | [optional]
 **customQrcode** | **bool**| ture：返回携带商户信息的二维码 &lt;br&gt;false：返回裸码 | [optional]
 **channelId** | **string**| &lt;p&gt;渠道编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryCertificateResultRespDto**](../Model/QueryCertificateResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **mpSendSmsVerifyCode**
MpSendSmsVerifyCodeResponse mpSendSmsVerifyCode(MpSendSmsVerifyCodeRequest request)

发送短信验证码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MpSendSmsVerifyCodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO());

try {
    $response = $api_client->mpSendSmsVerifyCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->mpSendSmsVerifyCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO**](../Model/SendSmsVerifyCodeReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeRespDTO**](../Model/SendSmsVerifyCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **mpSetTradePassword**
MpSetTradePasswordResponse mpSetTradePassword(MpSetTradePasswordRequest request)

设置交易密码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MpSetTradePasswordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO());

try {
    $response = $api_client->mpSetTradePassword($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->mpSetTradePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO**](../Model/SetTradePasswordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **mpVerifyTradePassword**
MpVerifyTradePasswordResponse mpVerifyTradePassword(MpVerifyTradePasswordRequest request)

验证交易密码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MpVerifyTradePasswordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO());

try {
    $response = $api_client->mpVerifyTradePassword($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->mpVerifyTradePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO**](../Model/YOPVerifyTradePasswordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **netInProgressQueryByName**
NetInProgressQueryByNameResponse netInProgressQueryByName(NetInProgressQueryByNameRequest request)

根据商户名称和简称查询入网进度

三只羊定制根据商户名称和简称查询入网进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto());

try {
    $response = $api_client->netInProgressQueryByName($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->netInProgressQueryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto**](../Model/NetInProgressQueryByNameReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameRespDto**](../Model/NetInProgressQueryByNameRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **netinH5Index**
NetinH5IndexResponse netinH5Index(NetinH5IndexRequest request)

获取H5入网链接



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NetinH5IndexRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO());

try {
    $response = $api_client->netinH5Index($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->netinH5Index: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO**](../Model/ApplyH5NetInRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRespDTO**](../Model/ApplyH5NetInRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **netinH5Query**
NetinH5QueryResponse netinH5Query(NetinH5QueryRequest request)

H5入网进度查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NetinH5QueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto());

try {
    $response = $api_client->netinH5Query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->netinH5Query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto**](../Model/QueryNetInProgressReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressRespDto**](../Model/QueryNetInProgressRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **notifyRepeatV2**
NotifyRepeatV2Response notifyRepeatV2(NotifyRepeatV2Request request)

重复获取(短验/邮件/电子签章)

重复获取(短验/邮件/电子签章)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2Request();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");
$request->setType("type_example");

try {
    $response = $api_client->notifyRepeatV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **applicationNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantNetInRepeatNotifyRespDto**](../Model/MerchantNetInRepeatNotifyRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **notify_repeat_v2_0**
NotifyRepeatV20Response notify_repeat_v2_0(NotifyRepeatV20Request request)

重复获取(短验/邮件/电子签章)

重复获取(短验/邮件/电子签章)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV20Request();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");
$request->setType("type_example");

try {
    $response = $api_client->notify_repeat_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->notify_repeat_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **applicationNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantNetInRepeatNotifyRespDto**](../Model/MerchantNetInRepeatNotifyRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeModifyV2**
ProductFeeModifyV2Response productFeeModifyV2(ProductFeeModifyV2Request request)

商户产品变更

商户产品变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessNotifyUrl("businessNotifyUrl_example");
$request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
$request->setMerchantCorporationInfo("{   \"startDate\": \"2010-06-18\",   \"legalAddress\": \"辽宁省抚顺市东洲区煤都路东段72-1栋11号\",   \"expired\": \"2030-06-18\" }");
$request->setProductConfigInfo("{\"productModifyValidDate\": \"2021-01-01\"}");
$request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"10080029355\",\"scene\":\"OFFLINE\"}]}}");
$request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
$request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantExtraInfo("{\"businessMode\":\"STORE_GROUP\",\"onlineWebsite\":\"线上网址\",\"authorizationUrl\":\"http://staticres.yeepay.com/test12345678.jpeg\",\"oldMerchantNo\":\"10012345678\"}");

try {
    $response = $api_client->productFeeModifyV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessNotifyUrl** | **string**|  | [optional]
 **uboInfoList** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **productConfigInfo** | **string**|  | [optional]
 **businessConfig** | **string**|  | [optional]
 **merchantAgreementInfo** | **string**|  | [optional]
 **bankOpenAccountInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ModifyProductFeeRespDto**](../Model/ModifyProductFeeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeQueryV2**
ProductFeeQueryV2Response productFeeQueryV2(ProductFeeQueryV2Request request)

商户产品费率查询

商户产品费率查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2Request();
$request->setMerchantNo("merchantNo_example");
$request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->productFeeQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 需要查询产品的商户编号 |
 **productCode** | **string**|  | [optional]
 **parentMerchantNo** | **string**| 上级商户编号（此接口可以不用上送此字段） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2QueryProductFeeRespDtoResult**](../Model/ProductFeeQueryV2QueryProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productIncrementSettleOpenV2**
ProductIncrementSettleOpenV2Response productIncrementSettleOpenV2(ProductIncrementSettleOpenV2Request request)

增值结算产品开通

增值结算产品开通

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->productIncrementSettleOpenV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AddIncrementSettleProductRespDto**](../Model/AddIncrementSettleProductRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productModifyQueryV2**
ProductModifyQueryV2Response productModifyQueryV2(ProductModifyQueryV2Request request)

商户产品变更进度查询接口

商户产品变更进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->productModifyQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult**](../Model/ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **product_fee_modify_v2_0**
ProductFeeModifyV20Response product_fee_modify_v2_0(ProductFeeModifyV20Request request)

商户产品变更

商户产品变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV20Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessNotifyUrl("businessNotifyUrl_example");
$request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
$request->setMerchantCorporationInfo("{   \"startDate\": \"2010-06-18\",   \"legalAddress\": \"辽宁省抚顺市东洲区煤都路东段72-1栋11号\",   \"expired\": \"2030-06-18\" }");
$request->setProductConfigInfo("{\"productModifyValidDate\": \"2021-01-01\"}");
$request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"10080029355\",\"scene\":\"OFFLINE\"}]}}");
$request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
$request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantExtraInfo("{\"businessMode\":\"STORE_GROUP\",\"onlineWebsite\":\"线上网址\",\"authorizationUrl\":\"http://staticres.yeepay.com/test12345678.jpeg\",\"oldMerchantNo\":\"10012345678\"}");

try {
    $response = $api_client->product_fee_modify_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->product_fee_modify_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessNotifyUrl** | **string**|  | [optional]
 **uboInfoList** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **productConfigInfo** | **string**|  | [optional]
 **businessConfig** | **string**|  | [optional]
 **merchantAgreementInfo** | **string**|  | [optional]
 **bankOpenAccountInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ModifyProductFeeRespDto**](../Model/ModifyProductFeeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **product_increment_settle_open_v2_0**
ProductIncrementSettleOpenV20Response product_increment_settle_open_v2_0(ProductIncrementSettleOpenV20Request request)

增值结算产品开通

增值结算产品开通

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV20Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->product_increment_settle_open_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->product_increment_settle_open_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AddIncrementSettleProductRespDto**](../Model/AddIncrementSettleProductRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryArea**
QueryAreaResponse queryArea(QueryAreaRequest request)

查询经营省市区编码

商户可以通过该接口，查询最新的全量地区码。支持传上级编码返回下级的全量省市区编码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO());

try {
    $response = $api_client->queryArea($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->queryArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO**](../Model/QueryAreaReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AreaRespDTO**](../Model/AreaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryMerchantInfoModifyProgress**
QueryMerchantInfoModifyProgressResponse queryMerchantInfoModifyProgress(QueryMerchantInfoModifyProgressRequest request)

商户信息变更进度查询接口

商户信息变更进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantInfoModifyProgressRequest();
$request->setRequestNo("7973679854dc48949adfd0a57418dedb");

try {
    $response = $api_client->queryMerchantInfoModifyProgress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->queryMerchantInfoModifyProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;p&gt;商户信息变更请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantInfoModifyProgressRespDTO**](../Model/QueryMerchantInfoModifyProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryMerchantStatus**
QueryMerchantStatusResponse queryMerchantStatus(QueryMerchantStatusRequest request)

商户状态查询

查询商户的状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantStatusRequest();
$request->setMerchantNo("10080011235");

try {
    $response = $api_client->queryMerchantStatus($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->queryMerchantStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantExternalStatusQueryRespDTO**](../Model/MerchantExternalStatusQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **query_book_info**
QueryBookInfoResponse query_book_info(QueryBookInfoRequest request)

查询记账簿信息

查询记账簿信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QueryBookInfoRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO());

try {
    $response = $api_client->query_book_info($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->query_book_info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO**](../Model/BookQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryRespDTO**](../Model/BookQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_merchant_basic_info**
QueryMerchantBasicInfoResponse query_merchant_basic_info(QueryMerchantBasicInfoRequest request)

查询商户基础信息



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantBasicInfoRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto());

try {
    $response = $api_client->query_merchant_basic_info($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->query_merchant_basic_info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto**](../Model/MerchantBasicInfoQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryRespDto**](../Model/MerchantBasicInfoQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **receiverApply**
ReceiverApplyResponse receiverApply(ReceiverApplyRequest request)

申请入账方



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ReceiverApplyRequest();
$request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantNo("merchantNo_example");
$request->setType("type_example");
$request->setReceiverName("receiverName_example");
$request->setLabel("label_example");
$request->setLicenceNo("licenceNo_example");
$request->setMobile("mobile_example");
$request->setLegalName("legalName_example");
$request->setLegalLicenceNo("legalLicenceNo_example");
$request->setBankCode("bankCode_example");
$request->setBankCardNo("bankCardNo_example");
$request->setSettlementProduct("settlementProduct_example");
$request->setSettlementDate("06:00");

try {
    $response = $api_client->receiverApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->receiverApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **receiverName** | **string**|  | [optional]
 **label** | **string**|  | [optional]
 **licenceNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **legalName** | **string**|  | [optional]
 **legalLicenceNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **settlementProduct** | **string**|  | [optional]
 **settlementDate** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverRespDto**](../Model/ApplyReceiverRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiverApplyProgressQuery**
ReceiverApplyProgressQueryResponse receiverApplyProgressQuery(ReceiverApplyProgressQueryRequest request)

入账方申请进度查询

入账方申请进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ReceiverApplyProgressQueryRequest();
$request->setRequestNo("YBXZRZFQQH2024050XXXXXX");

try {
    $response = $api_client->receiverApplyProgressQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->receiverApplyProgressQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ApplyReceiverProgressQueryRespDto**](../Model/ApplyReceiverProgressQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiverUpdate**
ReceiverUpdateResponse receiverUpdate(ReceiverUpdateRequest request)

修改入账方信息

修改入账方信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ReceiverUpdateRequest();
$request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
$request->setMerchantNo("merchantNo_example");
$request->setReceiverNo("receiverNo_example");
$request->setBankCode("bankCode_example");
$request->setBankCardNo("bankCardNo_example");
$request->setLabel("label_example");

try {
    $response = $api_client->receiverUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->receiverUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **receiverNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **label** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseRespDto**](../Model/BaseRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rectificationResultQuery**
RectificationResultQueryResponse rectificationResultQuery(RectificationResultQueryRequest request)

查询整改协查结果



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RectificationResultQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO());

try {
    $response = $api_client->rectificationResultQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rectificationResultQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO**](../Model/QueryMerchantRectificationResultReqDTO.md)| 查询商户整改协查结果 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantRectificationResultRespDTO**](../Model/MerchantRectificationResultRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **registerContributeMerchantClone**
RegisterContributeMerchantCloneResponse registerContributeMerchantClone(RegisterContributeMerchantCloneRequest request)

子商户新增ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterContributeMerchantCloneRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO());

try {
    $response = $api_client->registerContributeMerchantClone($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerContributeMerchantClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO**](../Model/MerchantCloneReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\CloneMerchantNetInRespDto**](../Model/CloneMerchantNetInRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **registerQueryByName**
RegisterQueryByNameResponse registerQueryByName(RegisterQueryByNameRequest request)

根据商户名称和简称查询入网进度

三只羊定制根据商户名称和简称查询入网进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryByNameRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto());

try {
    $response = $api_client->registerQueryByName($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerQueryByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto**](../Model/NetInProgressQueryByNameReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameRespDto**](../Model/NetInProgressQueryByNameRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **registerQueryV2**
RegisterQueryV2Response registerQueryV2(RegisterQueryV2Request request)

商户入网进度查询接口

商户入网进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->registerQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 入网请求号，请上传入网时的requestNo&lt;br&gt;入网请求号与商户编号二选一必传 | [optional]
 **merchantNo** | **string**| 商户编号&lt;br&gt;商户编号与入网请求号二选一必传 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2NetInProgressQueryRespDtoResult**](../Model/RegisterQueryV2NetInProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasIndexV2**
RegisterSaasIndexV2Response registerSaasIndexV2(RegisterSaasIndexV2Request request)

特约商户H5页面入网（小微）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasIndexV2Request();
$request->setRequestNo("示例值：REQ6437657876");
$request->setParentMerchantNo("示例值：10080000001");
$request->setNotifyUrl("示例值：http://www.shili111.com");
$request->setReturnUrl("示例值：http://www.shili.com");
$request->setMobile("159****8288");
$request->setName("示例值：张三");
$request->setIdCardNo("示例值：430422199001236704");
$request->setWalletUserNo("示例值：User89849");

try {
    $response = $api_client->registerSaasIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **walletUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasIndexV2UserPreRegisterRespDtoResult**](../Model/RegisterSaasIndexV2UserPreRegisterRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMerchantV2**
RegisterSaasMerchantV2Response registerSaasMerchantV2(RegisterSaasMerchantV2Request request)

特约商户入网(企业/个体)

特约商户入网(企业/个体)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
$request->setMerchantCorporationInfo("{\"legalName\":\"法人名称\",\"legalLicenceType\":\"法人证件类型\",\"legalLicenceNo\":\"法人证件编号\",\"legalLicenceFrontUrl\":\"法人证件照人像面地址\",\"legalLicenceBackUrl\":\"法人证件照非人像面地址\"}");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
$request->setDirectAgentNo("SA202506122153410012");
$request->setMerchantExtraInfo("{\"groupNo\":\"集团编号\",\"groupName\":\"集团编号\"}");
$request->setBusinessNotifyUrl("businessNotifyUrl_example");
$request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
$request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"100800295\",\"scene\":\"OFFLINE\"}]}}");
$request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
$request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");

try {
    $response = $api_client->registerSaasMerchantV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMerchantV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessScene** | **string**|  | [optional]
 **directAgentNo** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]
 **businessNotifyUrl** | **string**|  | [optional]
 **uboInfoList** | **string**|  | [optional]
 **businessConfig** | **string**|  | [optional]
 **merchantAgreementInfo** | **string**|  | [optional]
 **bankOpenAccountInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult**](../Model/RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMicroV2**
RegisterSaasMicroV2Response registerSaasMicroV2(RegisterSaasMicroV2Request request)

特约商户入网(小微)

SaaS服务商下特约商户入网(小微)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCode\":\"开户总行编码\"}");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
$request->setDirectAgentNo("directAgentNo_example");
$request->setMerchantExtraInfo("{\"groupNo\":\"集团编号\",\"groupName\":\"集团编号\"}");
$request->setBusinessConfig("上送渠道标识：{\"channelConfigs\":[{\"channelIdentifier\":\"渠道号配置-渠道标识1\",\"scene\":\"渠道号配置-场景1\"},{\"channelIdentifier\":\"渠道号配置-渠道标识2\",\"scene\":\"渠道号配置-场景2\"}]}; 上送渠道号示例值：{\"channelConfigs\":[{\"channelNo\":\"渠道号1\"},{\"channelNo\":\"渠道号2\"}]}");
$request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");

try {
    $response = $api_client->registerSaasMicroV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMicroV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **businessScene** | **string**|  | [optional]
 **directAgentNo** | **string**|  | [optional]
 **merchantExtraInfo** | **string**|  | [optional]
 **businessConfig** | **string**|  | [optional]
 **bankOpenAccountInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult**](../Model/RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasWebIndexV2**
RegisterSaasWebIndexV2Response registerSaasWebIndexV2(RegisterSaasWebIndexV2Request request)

特约商户WEB页面入网（企业/个体）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasWebIndexV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("fba1dd39fd3846b4901f5a833fa3baa3");
$request->setSignType("ENTERPRISE");
$request->setNotifyUrl("http://www.yeepay.com/merchant/notify");
$request->setReturnUrl("http://www.yeepay.com");
$request->setProductTemplateNo("CP166748***3516");
$request->setMerchantBaseInfo("{ \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\"}");
$request->setCorporationInfo("{ \"legalName\":\"法人名称\",  \"legalLicenceNo\":\"法人证件编号\"}");
$request->setContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setBusinessAddressInfo("{ \"address\":\"商户实际经营地址\"}");

try {
    $response = $api_client->registerSaasWebIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasWebIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **signType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productTemplateNo** | **string**|  | [optional]
 **merchantBaseInfo** | **string**|  | [optional]
 **corporationInfo** | **string**|  | [optional]
 **contactInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult**](../Model/RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_query**
RestV2MerBossRegisterQueryResponse rest_v2_mer_boss_register_query(RestV2MerBossRegisterQueryRequest request)

老板管账商户入网进度查询

老板管账子商户入网进度查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->rest_v2_mer_boss_register_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;div data-page-id&#x3D;\&quot;OY64dHLw1o1F9Ex1aTIcfgg5nHf\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-JUtZdd26ioBCyoxDsKdcKHC8nnd\&quot;&gt;入网请求号与商户编号二选一必传&lt;/div&gt; &lt;/div&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; &lt;p&gt;商户编号与入网请求号二选一必传&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInProgressQueryApiRespDTO**](../Model/BossMerchantNetInProgressQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_saas_standard**
RestV2MerBossRegisterSaasStandardResponse rest_v2_mer_boss_register_saas_standard(RestV2MerBossRegisterSaasStandardRequest request)

老板管账特约商户入网(企业/个体)-收单+结算

老板管账特约商户入网(企业/个体)-收单+结算

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterSaasStandardRequest();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\",\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setSellerNo("SE20230627XXXXXX");

try {
    $response = $api_client->rest_v2_mer_boss_register_saas_standard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_saas_standard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **sellerNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInStandardApiRespDTO**](../Model/BossMerchantNetInStandardApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rest_v2_mer_boss_register_sass_divide**
RestV2MerBossRegisterSassDivideResponse rest_v2_mer_boss_register_sass_divide(RestV2MerBossRegisterSassDivideRequest request)

老板管账特约商户入网(企业/个体)-收单+分账

老板管账特约商户入网(企业/个体)-收单+分账

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RestV2MerBossRegisterSassDivideRequest();
$request->setRequestNo("YBRWQQH20231113XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
$request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"BACKUP\"]");
$request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
$request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
$request->setSellerNo("SE20230627XXXXXX");

try {
    $response = $api_client->rest_v2_mer_boss_register_sass_divide($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->rest_v2_mer_boss_register_sass_divide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]
 **divideConfigInfo** | **string**|  | [optional]
 **sellerNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BossMerchantNetInDivideApiRespDTO**](../Model/BossMerchantNetInDivideApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **sendSmsVerifyCode**
SendSmsVerifyCodeResponse sendSmsVerifyCode(SendSmsVerifyCodeRequest request)

发送短信验证码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO());

try {
    $response = $api_client->sendSmsVerifyCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->sendSmsVerifyCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO**](../Model/SendSmsVerifyCodeReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeRespDTO**](../Model/SendSmsVerifyCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **setTradePassword**
SetTradePasswordResponse setTradePassword(SetTradePasswordRequest request)

设置交易密码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO());

try {
    $response = $api_client->setTradePassword($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->setTradePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO**](../Model/SetTradePasswordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **statusQuery**
StatusQueryResponse statusQuery(StatusQueryRequest request)

商户状态查询

查询商户的状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\StatusQueryRequest();
$request->setMerchantNo("10080011235");

try {
    $response = $api_client->statusQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->statusQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantExternalStatusQueryRespDTO**](../Model/MerchantExternalStatusQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateReceiver**
UpdateReceiverResponse updateReceiver(UpdateReceiverRequest request)

修改入账方信息

修改入账方信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UpdateReceiverRequest();
$request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
$request->setMerchantNo("merchantNo_example");
$request->setReceiverNo("receiverNo_example");
$request->setBankCode("bankCode_example");
$request->setBankCardNo("bankCardNo_example");
$request->setLabel("label_example");

try {
    $response = $api_client->updateReceiver($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->updateReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **receiverNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **label** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseRespDto**](../Model/BaseRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **userApply**
UserApplyResponse userApply(UserApplyRequest request)

申请开通用户记账簿



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO());

try {
    $response = $api_client->userApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->userApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO**](../Model/UserApplyReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyRespDTO**](../Model/UserApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userApplyProgressQuery**
UserApplyProgressQueryResponse userApplyProgressQuery(UserApplyProgressQueryRequest request)

查询用户创建进度



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO());

try {
    $response = $api_client->userApplyProgressQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->userApplyProgressQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO**](../Model/UserApplyProgressQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryRespDTO**](../Model/UserApplyProgressQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userBankcardAdd**
UserBankcardAddResponse userBankcardAdd(UserBankcardAddRequest request)

用户银行卡新增



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserBankcardAddRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO());

try {
    $response = $api_client->userBankcardAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->userBankcardAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO**](../Model/BankCardAddReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddRespDTO**](../Model/BankCardAddRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userBankcardBind**
UserBankcardBindResponse userBankcardBind(UserBankcardBindRequest request)

绑定用户银行卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserBankcardBindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO());

try {
    $response = $api_client->userBankcardBind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->userBankcardBind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO**](../Model/BankCardBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindRespDTO**](../Model/BankCardBindRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userBookQuery**
UserBookQueryResponse userBookQuery(UserBookQueryRequest request)

查询记账簿信息

查询记账簿信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserBookQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO());

try {
    $response = $api_client->userBookQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->userBookQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO**](../Model/BookQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryRespDTO**](../Model/BookQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **user_apply_progress_query**
UserApplyProgressQueryResponse user_apply_progress_query(UserApplyProgressQueryRequest request)

查询用户创建进度



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO());

try {
    $response = $api_client->user_apply_progress_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->user_apply_progress_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO**](../Model/UserApplyProgressQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryRespDTO**](../Model/UserApplyProgressQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **verify_merchant_relation**
VerifyMerchantRelationResponse verify_merchant_relation(VerifyMerchantRelationRequest request)

子商户关系校验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\VerifyMerchantRelationRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNoList(array("merchantNoList_example"));

try {
    $response = $api_client->verify_merchant_relation($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->verify_merchant_relation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNoList** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\SubMerchantRelationRespDto**](../Model/SubMerchantRelationRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yOPVerifyTradePassword**
YOPVerifyTradePasswordResponse yOPVerifyTradePassword(YOPVerifyTradePasswordRequest request)

验证交易密码



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO());

try {
    $response = $api_client->yOPVerifyTradePassword($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->yOPVerifyTradePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO**](../Model/YOPVerifyTradePasswordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

