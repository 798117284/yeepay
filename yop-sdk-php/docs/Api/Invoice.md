# Yeepay\Yop\Sdk\Invoice

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**active_sms_code_check**](Invoice.md#active_sms_code_check) | **POST** /rest/v1.0/invoice/digit/active-sms-code-check | 【服务开通&amp;新增开票员】短信验证码发送
[**apply**](Invoice.md#apply) | **POST** /rest/v1.0/invoice/apply | 申请开票
[**apply_v1_0**](Invoice.md#apply_v1_0) | **POST** /rest/v1.0/invoice/apply | 申请开票
[**auto_goods_code_query**](Invoice.md#auto_goods_code_query) | **POST** /rest/v1.0/invoice/digit/auto-goods-code/query | 智能赋码
[**auto_title_query**](Invoice.md#auto_title_query) | **POST** /rest/v1.0/invoice/digit/auto-title/query | 智能抬头
[**cancel_order_qr_code**](Invoice.md#cancel_order_qr_code) | **POST** /rest/v1.0/invoice/digit/cancel-order-qr-code | 【发票开具】开票二维码作废
[**certify_result_get**](Invoice.md#certify_result_get) | **POST** /rest/v1.0/invoice/digit/certify-result-get | 查询税局人脸核验结果
[**delete_invoice**](Invoice.md#delete_invoice) | **POST** /rest/v1.0/invoice/digit/delete-invoice | 【发票开具】删除发票
[**digitAccountAddEdit**](Invoice.md#digitAccountAddEdit) | **POST** /rest/v1.0/invoice/digit/account-add-edit | 【开票员修改】开票员信息新增或修改接口
[**digitActiveSmsCodeCheck**](Invoice.md#digitActiveSmsCodeCheck) | **POST** /rest/v1.0/invoice/digit/active-sms-code-check | 【服务开通&amp;新增开票员】短信验证码发送
[**digitAutoGoodsCodeQuery**](Invoice.md#digitAutoGoodsCodeQuery) | **POST** /rest/v1.0/invoice/digit/auto-goods-code/query | 智能赋码
[**digitAutoTitleQuery**](Invoice.md#digitAutoTitleQuery) | **POST** /rest/v1.0/invoice/digit/auto-title/query | 智能抬头
[**digitCancelOrderQrCode**](Invoice.md#digitCancelOrderQrCode) | **POST** /rest/v1.0/invoice/digit/cancel-order-qr-code | 【发票开具】开票二维码作废
[**digitCertifyQrcodeGet**](Invoice.md#digitCertifyQrcodeGet) | **POST** /rest/v1.0/invoice/digit/certify-qrcode/get | 【开票员人脸核验】获取人脸核验二维码
[**digitCertifyResultGet**](Invoice.md#digitCertifyResultGet) | **POST** /rest/v1.0/invoice/digit/certify-result-get | 查询税局人脸核验结果
[**digitDeleteInvoice**](Invoice.md#digitDeleteInvoice) | **POST** /rest/v1.0/invoice/digit/delete-invoice | 【发票开具】删除发票
[**digitDigitalAccountQuery**](Invoice.md#digitDigitalAccountQuery) | **POST** /rest/v1.0/invoice/digit/digital-account-query | 【开票员修改】开票员信息查询接口
[**digitEnterpriseQuery**](Invoice.md#digitEnterpriseQuery) | **POST** /rest/v1.0/invoice/digit/enterprise-query | 【企业信息维护】企业信息查询
[**digitEnterpriseRegister**](Invoice.md#digitEnterpriseRegister) | **POST** /rest/v1.0/invoice/digit/enterprise-register | 【企业信息维护】企业信息注册
[**digitEnterpriseUpdate**](Invoice.md#digitEnterpriseUpdate) | **POST** /rest/v1.0/invoice/digit/enterprise-update | 【企业信息维护】 企业信息修改
[**digitFastRed**](Invoice.md#digitFastRed) | **POST** /rest/v1.0/invoice/digit/fast-red | 【发票开具】数电票红字发票开具
[**digitInvoicePageQuery**](Invoice.md#digitInvoicePageQuery) | **POST** /rest/v1.0/invoice/digit-invoice/page-query | 发票汇总查询
[**digitInvoicepdfResendemail**](Invoice.md#digitInvoicepdfResendemail) | **POST** /rest/v1.0/invoice/digit/invoicepdf-resendemail | 【发票发送】发票文件重新发送
[**digitIssueInvoice**](Invoice.md#digitIssueInvoice) | **POST** /rest/v1.0/invoice/digit/issue-invoice | 【发票开具】数电票蓝字发票开具
[**digitLoginResultQuery**](Invoice.md#digitLoginResultQuery) | **POST** /rest/v1.0/invoice/digit/login-result/query | 【开票员登录】开票员登录状态查询
[**digitOpenServer**](Invoice.md#digitOpenServer) | **POST** /rest/v1.0/invoice/digit/open-server | 【发票服务开通】数电票发票服务开通激活
[**digitOrderQrcodeGen**](Invoice.md#digitOrderQrcodeGen) | **POST** /rest/v1.0/invoice/digit/order/qrcode/gen | 【发票开具】开票二维码
[**digitOrderQrcodeStatusQuery**](Invoice.md#digitOrderQrcodeStatusQuery) | **POST** /rest/v1.0/invoice/digit/order/qrcode/status/query | 【发票开具】开票二维码状态查询
[**digitQrcodeCertifyResultGet**](Invoice.md#digitQrcodeCertifyResultGet) | **POST** /rest/v1.0/invoice/digit/qrcode-certify-result/get | 【开票员人脸核验】获取人脸核验结果
[**digitQueryInvoice**](Invoice.md#digitQueryInvoice) | **POST** /rest/v1.0/invoice/digit/query-invoice | 【开具结果】数电票开具结果查询
[**digitRetryInvoice**](Invoice.md#digitRetryInvoice) | **POST** /rest/v1.0/invoice/digit/retry-invoice | 【发票开具】数电票蓝字发票重试开具
[**digitUnifiedLogin**](Invoice.md#digitUnifiedLogin) | **POST** /rest/v1.0/invoice/digit/unified-login | 数电账号登录
[**digitUnifiedLoginCheck**](Invoice.md#digitUnifiedLoginCheck) | **POST** /rest/v1.0/invoice/digit/unified-login/check | 数电账号短信验证
[**digitUserLogin**](Invoice.md#digitUserLogin) | **POST** /rest/v1.0/invoice/digit/user/login | 【开票员登录】开票员登录
[**digit_user_login**](Invoice.md#digit_user_login) | **POST** /rest/v1.0/invoice/digit/user/login | 【开票员登录】开票员登录
[**digital_account_add_edit**](Invoice.md#digital_account_add_edit) | **POST** /rest/v1.0/invoice/digit/account-add-edit | 【开票员修改】开票员信息新增或修改接口
[**digital_account_query**](Invoice.md#digital_account_query) | **POST** /rest/v1.0/invoice/digit/digital-account-query | 【开票员修改】开票员信息查询接口
[**enterprise_query**](Invoice.md#enterprise_query) | **POST** /rest/v1.0/invoice/digit/enterprise-query | 【企业信息维护】企业信息查询
[**enterprise_register**](Invoice.md#enterprise_register) | **POST** /rest/v1.0/invoice/digit/enterprise-register | 【企业信息维护】企业信息注册
[**enterprise_update**](Invoice.md#enterprise_update) | **POST** /rest/v1.0/invoice/digit/enterprise-update | 【企业信息维护】 企业信息修改
[**fastRed**](Invoice.md#fastRed) | **POST** /rest/v1.0/invoice/digit/fast-red | 【发票开具】数电票红字发票开具
[**feeQuery**](Invoice.md#feeQuery) | **GET** /rest/v1.0/invoice/fee/query | 查询费用
[**fee_query_v1_0**](Invoice.md#fee_query_v1_0) | **GET** /rest/v1.0/invoice/fee/query | 查询费用
[**getCertifyQrcode**](Invoice.md#getCertifyQrcode) | **POST** /rest/v1.0/invoice/digit/certify-qrcode/get | 【开票员人脸核验】获取人脸核验二维码
[**getH5Url**](Invoice.md#getH5Url) | **POST** /rest/v1.0/invoice/get-h5-url | 获取 H5 页面地址
[**getLoginResult**](Invoice.md#getLoginResult) | **POST** /rest/v1.0/invoice/digit/login-result/query | 【开票员登录】开票员登录状态查询
[**getQrcodeCertifyResult**](Invoice.md#getQrcodeCertifyResult) | **POST** /rest/v1.0/invoice/digit/qrcode-certify-result/get | 【开票员人脸核验】获取人脸核验结果
[**infoModify**](Invoice.md#infoModify) | **POST** /rest/v1.0/invoice/info/modify | 维护发票信息
[**infoQuery**](Invoice.md#infoQuery) | **GET** /rest/v1.0/invoice/info/query | 查询发票信息
[**info_modify_v1_0**](Invoice.md#info_modify_v1_0) | **POST** /rest/v1.0/invoice/info/modify | 维护发票信息
[**info_query_v1_0**](Invoice.md#info_query_v1_0) | **GET** /rest/v1.0/invoice/info/query | 查询发票信息
[**invoicePdf_reSendEmail**](Invoice.md#invoicePdf_reSendEmail) | **POST** /rest/v1.0/invoice/digit/invoicepdf-resendemail | 【发票发送】发票文件重新发送
[**issue_invoice_v1**](Invoice.md#issue_invoice_v1) | **POST** /rest/v1.0/invoice/digit/issue-invoice | 【发票开具】数电票蓝字发票开具
[**open_server_v1**](Invoice.md#open_server_v1) | **POST** /rest/v1.0/invoice/digit/open-server | 【发票服务开通】数电票发票服务开通激活
[**order_qrcode_gen**](Invoice.md#order_qrcode_gen) | **POST** /rest/v1.0/invoice/digit/order/qrcode/gen | 【发票开具】开票二维码
[**order_qrcode_status_query**](Invoice.md#order_qrcode_status_query) | **POST** /rest/v1.0/invoice/digit/order/qrcode/status/query | 【发票开具】开票二维码状态查询
[**query_invoice_v1**](Invoice.md#query_invoice_v1) | **POST** /rest/v1.0/invoice/digit/query-invoice | 【开具结果】数电票开具结果查询
[**recordQuery**](Invoice.md#recordQuery) | **GET** /rest/v1.0/invoice/record/query | 查询开票记录
[**record_query_v1_0**](Invoice.md#record_query_v1_0) | **GET** /rest/v1.0/invoice/record/query | 查询开票记录
[**retry_invoice_v1**](Invoice.md#retry_invoice_v1) | **POST** /rest/v1.0/invoice/digit/retry-invoice | 【发票开具】数电票蓝字发票重试开具
[**unifiedLogin**](Invoice.md#unifiedLogin) | **POST** /rest/v1.0/invoice/digit/unified-login | 数电账号登录
[**unifiedLoginCheck**](Invoice.md#unifiedLoginCheck) | **POST** /rest/v1.0/invoice/digit/unified-login/check | 数电账号短信验证
[**userLogin**](Invoice.md#userLogin) | **POST** /rest/v1.0/invoice/user/login | 开票员登录
[**user_login**](Invoice.md#user_login) | **POST** /rest/v1.0/invoice/user/login | 开票员登录


# **active_sms_code_check**
ActiveSmsCodeCheckResponse active_sms_code_check(ActiveSmsCodeCheckRequest request)

【服务开通&新增开票员】短信验证码发送



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\ActiveSmsCodeCheckRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto());

try {
    $response = $api_client->active_sms_code_check($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->active_sms_code_check: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto**](../Model/YopInvoiceUploadSmsVerifyCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceUploadSmsVerifyCodeRespDto**](../Model/RespDto2YopInvoiceUploadSmsVerifyCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **apply**
ApplyResponse apply(ApplyRequest request)

申请开票

提供发票开具的能力

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\ApplyRequest();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("01e1c1a0509e435091e98fc99f11cb4b");
$request->setParentMerchantNo("10040040286");
$request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
$request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("http://172.19.100.117:8001/yop-boss/accept");
$request->setInvoiceMajor("invoiceMajor_example");

try {
    $response = $api_client->apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **chargingDateStart** | **\DateTime**|  | [optional]
 **chargingDateEnd** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **invoiceMajor** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopApplyInvoiceResponseDTO**](../Model/YopApplyInvoiceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **apply_v1_0**
ApplyV10Response apply_v1_0(ApplyV10Request request)

申请开票

提供发票开具的能力

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\ApplyV10Request();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("01e1c1a0509e435091e98fc99f11cb4b");
$request->setParentMerchantNo("10040040286");
$request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
$request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("http://172.19.100.117:8001/yop-boss/accept");
$request->setInvoiceMajor("invoiceMajor_example");

try {
    $response = $api_client->apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **chargingDateStart** | **\DateTime**|  | [optional]
 **chargingDateEnd** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **invoiceMajor** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopApplyInvoiceResponseDTO**](../Model/YopApplyInvoiceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_goods_code_query**
AutoGoodsCodeQueryResponse auto_goods_code_query(AutoGoodsCodeQueryRequest request)

智能赋码

获取开票品目税收分类编码等信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto());

try {
    $response = $api_client->auto_goods_code_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->auto_goods_code_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto**](../Model/AutoGoodsCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoGoodsCodeYopRespDto**](../Model/RespDto2AutoGoodsCodeYopRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **auto_title_query**
AutoTitleQueryResponse auto_title_query(AutoTitleQueryRequest request)

智能抬头

获取开票企业名称税号信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto());

try {
    $response = $api_client->auto_title_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->auto_title_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto**](../Model/AutoTitleReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoTitleRespDto**](../Model/RespDto2AutoTitleRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **cancel_order_qr_code**
CancelOrderQrCodeResponse cancel_order_qr_code(CancelOrderQrCodeRequest request)

【发票开具】开票二维码作废



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\CancelOrderQrCodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto());

try {
    $response = $api_client->cancel_order_qr_code($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->cancel_order_qr_code: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto**](../Model/YopDigitCancelOrderQrCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitCancelOrderQrCodeRespDto**](../Model/RespDto2YopDigitCancelOrderQrCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **certify_result_get**
CertifyResultGetResponse certify_result_get(CertifyResultGetRequest request)

查询税局人脸核验结果

开票员在电子税务局APP扫码后，可调用该接口获取人脸核验结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\CertifyResultGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto());

try {
    $response = $api_client->certify_result_get($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->certify_result_get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto**](../Model/YopDigitalGetCertifyResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyResultRespDto**](../Model/RespDto2YopDigitalGetCertifyResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **delete_invoice**
DeleteInvoiceResponse delete_invoice(DeleteInvoiceRequest request)

【发票开具】删除发票



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DeleteInvoiceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto());

try {
    $response = $api_client->delete_invoice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->delete_invoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto**](../Model/YopDigitalDeleteInvoiceReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalDeleteInvoiceRespDto**](../Model/RespDto2YopDigitalDeleteInvoiceRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitAccountAddEdit**
DigitAccountAddEditResponse digitAccountAddEdit(DigitAccountAddEditRequest request)

【开票员修改】开票员信息新增或修改接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitAccountAddEditRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto());

try {
    $response = $api_client->digitAccountAddEdit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitAccountAddEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto**](../Model/YopInvoiceDigitalAccountAddOrEditReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitalAccountAddOrEditRespDto**](../Model/RespDto2YopInvoiceDigitalAccountAddOrEditRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitActiveSmsCodeCheck**
DigitActiveSmsCodeCheckResponse digitActiveSmsCodeCheck(DigitActiveSmsCodeCheckRequest request)

【服务开通&新增开票员】短信验证码发送



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitActiveSmsCodeCheckRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto());

try {
    $response = $api_client->digitActiveSmsCodeCheck($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitActiveSmsCodeCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto**](../Model/YopInvoiceUploadSmsVerifyCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceUploadSmsVerifyCodeRespDto**](../Model/RespDto2YopInvoiceUploadSmsVerifyCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitAutoGoodsCodeQuery**
DigitAutoGoodsCodeQueryResponse digitAutoGoodsCodeQuery(DigitAutoGoodsCodeQueryRequest request)

智能赋码

获取开票品目税收分类编码等信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitAutoGoodsCodeQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto());

try {
    $response = $api_client->digitAutoGoodsCodeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitAutoGoodsCodeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto**](../Model/AutoGoodsCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoGoodsCodeYopRespDto**](../Model/RespDto2AutoGoodsCodeYopRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitAutoTitleQuery**
DigitAutoTitleQueryResponse digitAutoTitleQuery(DigitAutoTitleQueryRequest request)

智能抬头

获取开票企业名称税号信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitAutoTitleQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto());

try {
    $response = $api_client->digitAutoTitleQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitAutoTitleQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto**](../Model/AutoTitleReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2AutoTitleRespDto**](../Model/RespDto2AutoTitleRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitCancelOrderQrCode**
DigitCancelOrderQrCodeResponse digitCancelOrderQrCode(DigitCancelOrderQrCodeRequest request)

【发票开具】开票二维码作废



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitCancelOrderQrCodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto());

try {
    $response = $api_client->digitCancelOrderQrCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitCancelOrderQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto**](../Model/YopDigitCancelOrderQrCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitCancelOrderQrCodeRespDto**](../Model/RespDto2YopDigitCancelOrderQrCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitCertifyQrcodeGet**
DigitCertifyQrcodeGetResponse digitCertifyQrcodeGet(DigitCertifyQrcodeGetRequest request)

【开票员人脸核验】获取人脸核验二维码

完成开票员登录后，还需要完成实人认证。该接口用来获取人脸核验二维码。 获取后，开票员用电子税务局APP扫码，扫码完成后可以调用【获取人脸核验结果】接口核实认证状态。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitCertifyQrcodeGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto());

try {
    $response = $api_client->digitCertifyQrcodeGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitCertifyQrcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto**](../Model/YopDigitalGetCertifyQrcodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeRespDto**](../Model/RespDto2YopDigitalGetCertifyQrcodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitCertifyResultGet**
DigitCertifyResultGetResponse digitCertifyResultGet(DigitCertifyResultGetRequest request)

查询税局人脸核验结果

开票员在电子税务局APP扫码后，可调用该接口获取人脸核验结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitCertifyResultGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto());

try {
    $response = $api_client->digitCertifyResultGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitCertifyResultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto**](../Model/YopDigitalGetCertifyResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyResultRespDto**](../Model/RespDto2YopDigitalGetCertifyResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitDeleteInvoice**
DigitDeleteInvoiceResponse digitDeleteInvoice(DigitDeleteInvoiceRequest request)

【发票开具】删除发票



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitDeleteInvoiceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto());

try {
    $response = $api_client->digitDeleteInvoice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitDeleteInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto**](../Model/YopDigitalDeleteInvoiceReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalDeleteInvoiceRespDto**](../Model/RespDto2YopDigitalDeleteInvoiceRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitDigitalAccountQuery**
DigitDigitalAccountQueryResponse digitDigitalAccountQuery(DigitDigitalAccountQueryRequest request)

【开票员修改】开票员信息查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitDigitalAccountQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto());

try {
    $response = $api_client->digitDigitalAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitDigitalAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto**](../Model/YopInvoiceDigitalAccountQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitAccountQueryRespDto**](../Model/RespDto2YopInvoiceDigitAccountQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitEnterpriseQuery**
DigitEnterpriseQueryResponse digitEnterpriseQuery(DigitEnterpriseQueryRequest request)

【企业信息维护】企业信息查询

本接口用来查询开票时的销方信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitEnterpriseQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto());

try {
    $response = $api_client->digitEnterpriseQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitEnterpriseQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto**](../Model/YopDigitEnterpriseInfoQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoQueryRespDto**](../Model/RespDto2YopDigitEnterpriseInfoQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitEnterpriseRegister**
DigitEnterpriseRegisterResponse digitEnterpriseRegister(DigitEnterpriseRegisterRequest request)

【企业信息维护】企业信息注册

本接口用来注册企业信息。开票时，如开票接口未传入销方信息，则将展示注册时提供的信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitEnterpriseRegisterRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto());

try {
    $response = $api_client->digitEnterpriseRegister($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitEnterpriseRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto**](../Model/YopDigitEnterpriseInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoRespDto**](../Model/RespDto2YopDigitEnterpriseInfoRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitEnterpriseUpdate**
DigitEnterpriseUpdateResponse digitEnterpriseUpdate(DigitEnterpriseUpdateRequest request)

【企业信息维护】 企业信息修改

本接口用来修改开票时的销方信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitEnterpriseUpdateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto());

try {
    $response = $api_client->digitEnterpriseUpdate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitEnterpriseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto**](../Model/YopDigitEnterpriseInfoUpdateReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoUpdateRespDto**](../Model/RespDto2YopDigitEnterpriseInfoUpdateRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitFastRed**
DigitFastRedResponse digitFastRed(DigitFastRedRequest request)

【发票开具】数电票红字发票开具

已完成蓝字发票开具，如希望红冲，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitFastRedRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto());

try {
    $response = $api_client->digitFastRed($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitFastRed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto**](../Model/YopDigitalFastRedInvoiceReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalFastRedRespDto**](../Model/RespDto2YopDigitalFastRedRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitInvoicePageQuery**
DigitInvoicePageQueryResponse digitInvoicePageQuery(DigitInvoicePageQueryRequest request)

发票汇总查询

发票汇总查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitInvoicePageQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryPageReqDto());

try {
    $response = $api_client->digitInvoicePageQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitInvoicePageQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryPageReqDto**](../Model/YopDigitalInvoiceQueryPageReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto**](../Model/RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitInvoicepdfResendemail**
DigitInvoicepdfResendemailResponse digitInvoicepdfResendemail(DigitInvoicepdfResendemailRequest request)

【发票发送】发票文件重新发送



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitInvoicepdfResendemailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto());

try {
    $response = $api_client->digitInvoicepdfResendemail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitInvoicepdfResendemail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto**](../Model/YopReSendEmailInvoicePdfReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopReSendEmailInvoicePdfRespDto**](../Model/RespDto2YopReSendEmailInvoicePdfRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitIssueInvoice**
DigitIssueInvoiceResponse digitIssueInvoice(DigitIssueInvoiceRequest request)

【发票开具】数电票蓝字发票开具

已完成业务开通的商户如希望为消费者开具电子发票，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitIssueInvoiceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto());

try {
    $response = $api_client->digitIssueInvoice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitIssueInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto**](../Model/YopInvoiceMainInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalBlueInvoiceOpenRespDto**](../Model/RespDto2YopDigitalBlueInvoiceOpenRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitLoginResultQuery**
DigitLoginResultQueryResponse digitLoginResultQuery(DigitLoginResultQueryRequest request)

【开票员登录】开票员登录状态查询

商户完成开票员登录后，需要调用该接口查询开票员的登录状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitLoginResultQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto());

try {
    $response = $api_client->digitLoginResultQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitLoginResultQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto**](../Model/YopDigitalGetLoginResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetLoginResultRespDto**](../Model/RespDto2YopDigitalGetLoginResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitOpenServer**
DigitOpenServerResponse digitOpenServer(DigitOpenServerRequest request)

【发票服务开通】数电票发票服务开通激活

提供数电票发票服务激活接口，助力企业完成服务激活，开启数电票业务。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitOpenServerRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto());

try {
    $response = $api_client->digitOpenServer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitOpenServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto**](../Model/YopInvoiceOpenServerReqDto.md)| 数电发票开通激活请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceOpenServerRespDto**](../Model/RespDto2YopInvoiceOpenServerRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitOrderQrcodeGen**
DigitOrderQrcodeGenResponse digitOrderQrcodeGen(DigitOrderQrcodeGenRequest request)

【发票开具】开票二维码

已完成业务开通的商户如希望消费者扫码开票，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitOrderQrcodeGenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto());

try {
    $response = $api_client->digitOrderQrcodeGen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitOrderQrcodeGen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto**](../Model/YopGenOrderQrCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopGenOrderQrCodeRespDto**](../Model/RespDto2YopGenOrderQrCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitOrderQrcodeStatusQuery**
DigitOrderQrcodeStatusQueryResponse digitOrderQrcodeStatusQuery(DigitOrderQrcodeStatusQueryRequest request)

【发票开具】开票二维码状态查询

查询开票二维码扫码状态和开票状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitOrderQrcodeStatusQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto());

try {
    $response = $api_client->digitOrderQrcodeStatusQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitOrderQrcodeStatusQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto**](../Model/OrderQrCodeQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto**](../Model/RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitQrcodeCertifyResultGet**
DigitQrcodeCertifyResultGetResponse digitQrcodeCertifyResultGet(DigitQrcodeCertifyResultGetRequest request)

【开票员人脸核验】获取人脸核验结果

开票员在电子税务局APP扫码后，可调用该接口获取人脸核验结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitQrcodeCertifyResultGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto());

try {
    $response = $api_client->digitQrcodeCertifyResultGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitQrcodeCertifyResultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto**](../Model/YopDigitalGetCertifyQrcodeResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeResultRespDto**](../Model/RespDto2YopDigitalGetCertifyQrcodeResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitQueryInvoice**
DigitQueryInvoiceResponse digitQueryInvoice(DigitQueryInvoiceRequest request)

【开具结果】数电票开具结果查询

发票开具后，可通过该接口查询开具结果。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitQueryInvoiceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto());

try {
    $response = $api_client->digitQueryInvoice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitQueryInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto**](../Model/YopDigitalInvoiceQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalInvoiceQueryRespDto**](../Model/RespDto2YopDigitalInvoiceQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitRetryInvoice**
DigitRetryInvoiceResponse digitRetryInvoice(DigitRetryInvoiceRequest request)

【发票开具】数电票蓝字发票重试开具

如发票开具失败，可通过该接口重试开具

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitRetryInvoiceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto());

try {
    $response = $api_client->digitRetryInvoice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitRetryInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto**](../Model/YopDigitalRetryIOpenInvoiceReqDto.md)| 数电票蓝字发票重试开票接口请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalRetryOpenInvoiceRespDto**](../Model/RespDto2YopDigitalRetryOpenInvoiceRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitUnifiedLogin**
DigitUnifiedLoginResponse digitUnifiedLogin(DigitUnifiedLoginRequest request)

数电账号登录

数电账号登录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitUnifiedLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto());

try {
    $response = $api_client->digitUnifiedLogin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitUnifiedLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto**](../Model/YopDigitalUnifiedLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUnifiedLoginRespDto**](../Model/RespDto2YopDigitalUnifiedLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitUnifiedLoginCheck**
DigitUnifiedLoginCheckResponse digitUnifiedLoginCheck(DigitUnifiedLoginCheckRequest request)

数电账号短信验证

数电账号短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitUnifiedLoginCheckRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto());

try {
    $response = $api_client->digitUnifiedLoginCheck($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitUnifiedLoginCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto**](../Model/YopDigitalUnifiedLoginCheckReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto**](../Model/RespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digitUserLogin**
DigitUserLoginResponse digitUserLogin(DigitUserLoginRequest request)

【开票员登录】开票员登录

商户需要开数电票，需要先完成开票员的登录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitUserLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());

try {
    $response = $api_client->digitUserLogin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digitUserLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto**](../Model/YopDigitalUserLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUserLoginRespDto**](../Model/RespDto2YopDigitalUserLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digit_user_login**
DigitUserLoginResponse digit_user_login(DigitUserLoginRequest request)

【开票员登录】开票员登录

商户需要开数电票，需要先完成开票员的登录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitUserLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());

try {
    $response = $api_client->digit_user_login($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digit_user_login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto**](../Model/YopDigitalUserLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUserLoginRespDto**](../Model/RespDto2YopDigitalUserLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digital_account_add_edit**
DigitalAccountAddEditResponse digital_account_add_edit(DigitalAccountAddEditRequest request)

【开票员修改】开票员信息新增或修改接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitalAccountAddEditRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto());

try {
    $response = $api_client->digital_account_add_edit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digital_account_add_edit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto**](../Model/YopInvoiceDigitalAccountAddOrEditReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitalAccountAddOrEditRespDto**](../Model/RespDto2YopInvoiceDigitalAccountAddOrEditRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **digital_account_query**
DigitalAccountQueryResponse digital_account_query(DigitalAccountQueryRequest request)

【开票员修改】开票员信息查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\DigitalAccountQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto());

try {
    $response = $api_client->digital_account_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->digital_account_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto**](../Model/YopInvoiceDigitalAccountQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitAccountQueryRespDto**](../Model/RespDto2YopInvoiceDigitAccountQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_query**
EnterpriseQueryResponse enterprise_query(EnterpriseQueryRequest request)

【企业信息维护】企业信息查询

本接口用来查询开票时的销方信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\EnterpriseQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto());

try {
    $response = $api_client->enterprise_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->enterprise_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto**](../Model/YopDigitEnterpriseInfoQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoQueryRespDto**](../Model/RespDto2YopDigitEnterpriseInfoQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_register**
EnterpriseRegisterResponse enterprise_register(EnterpriseRegisterRequest request)

【企业信息维护】企业信息注册

本接口用来注册企业信息。开票时，如开票接口未传入销方信息，则将展示注册时提供的信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\EnterpriseRegisterRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto());

try {
    $response = $api_client->enterprise_register($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->enterprise_register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto**](../Model/YopDigitEnterpriseInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoRespDto**](../Model/RespDto2YopDigitEnterpriseInfoRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_update**
EnterpriseUpdateResponse enterprise_update(EnterpriseUpdateRequest request)

【企业信息维护】 企业信息修改

本接口用来修改开票时的销方信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\EnterpriseUpdateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto());

try {
    $response = $api_client->enterprise_update($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->enterprise_update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto**](../Model/YopDigitEnterpriseInfoUpdateReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitEnterpriseInfoUpdateRespDto**](../Model/RespDto2YopDigitEnterpriseInfoUpdateRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fastRed**
FastRedResponse fastRed(FastRedRequest request)

【发票开具】数电票红字发票开具

已完成蓝字发票开具，如希望红冲，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\FastRedRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto());

try {
    $response = $api_client->fastRed($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->fastRed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto**](../Model/YopDigitalFastRedInvoiceReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalFastRedRespDto**](../Model/RespDto2YopDigitalFastRedRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **feeQuery**
FeeQueryResponse feeQuery(FeeQueryRequest request)

查询费用

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\FeeQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
$request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
$request->setInvoiceMajor("invoiceMajor_example");

try {
    $response = $api_client->feeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->feeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 开票商编 |
 **parentMerchantNo** | **string**| 上级商编 |
 **chargingDateStart** | **\DateTime**| 收费开始日期 |
 **chargingDateEnd** | **\DateTime**| 收费结束日期 |
 **invoiceMajor** | **string**| &lt;div data-page-id&#x3D;\&quot;QnlZd5qvsogo1Axs1KUcziXYnAh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FBC3do1qDo1UQOxub6PcdiC9nTb\&quot;&gt;发票开具方（不填默认为YP）： &lt;br /&gt;YP-易宝支付;&lt;br /&gt;QQYX-麒麒远行&lt;/div&gt; &lt;/div&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopFeeResponseDTO**](../Model/YopFeeResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **fee_query_v1_0**
FeeQueryV10Response fee_query_v1_0(FeeQueryV10Request request)

查询费用

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\FeeQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
$request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
$request->setInvoiceMajor("invoiceMajor_example");

try {
    $response = $api_client->fee_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->fee_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 开票商编 |
 **parentMerchantNo** | **string**| 上级商编 |
 **chargingDateStart** | **\DateTime**| 收费开始日期 |
 **chargingDateEnd** | **\DateTime**| 收费结束日期 |
 **invoiceMajor** | **string**| &lt;div data-page-id&#x3D;\&quot;QnlZd5qvsogo1Axs1KUcziXYnAh\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FBC3do1qDo1UQOxub6PcdiC9nTb\&quot;&gt;发票开具方（不填默认为YP）： &lt;br /&gt;YP-易宝支付;&lt;br /&gt;QQYX-麒麒远行&lt;/div&gt; &lt;/div&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopFeeResponseDTO**](../Model/YopFeeResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getCertifyQrcode**
GetCertifyQrcodeResponse getCertifyQrcode(GetCertifyQrcodeRequest request)

【开票员人脸核验】获取人脸核验二维码

完成开票员登录后，还需要完成实人认证。该接口用来获取人脸核验二维码。 获取后，开票员用电子税务局APP扫码，扫码完成后可以调用【获取人脸核验结果】接口核实认证状态。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\GetCertifyQrcodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto());

try {
    $response = $api_client->getCertifyQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->getCertifyQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto**](../Model/YopDigitalGetCertifyQrcodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeRespDto**](../Model/RespDto2YopDigitalGetCertifyQrcodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **getH5Url**
GetH5UrlResponse getH5Url(GetH5UrlRequest request)

获取 H5 页面地址

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\GetH5UrlRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\InvoiceH5UrlRequest());

try {
    $response = $api_client->getH5Url($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->getH5Url: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\InvoiceH5UrlRequest**](../Model/InvoiceH5UrlRequest.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\InvoiceH5UrlResponse**](../Model/InvoiceH5UrlResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **getLoginResult**
GetLoginResultResponse getLoginResult(GetLoginResultRequest request)

【开票员登录】开票员登录状态查询

商户完成开票员登录后，需要调用该接口查询开票员的登录状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\GetLoginResultRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto());

try {
    $response = $api_client->getLoginResult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->getLoginResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto**](../Model/YopDigitalGetLoginResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetLoginResultRespDto**](../Model/RespDto2YopDigitalGetLoginResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **getQrcodeCertifyResult**
GetQrcodeCertifyResultResponse getQrcodeCertifyResult(GetQrcodeCertifyResultRequest request)

【开票员人脸核验】获取人脸核验结果

开票员在电子税务局APP扫码后，可调用该接口获取人脸核验结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\GetQrcodeCertifyResultRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto());

try {
    $response = $api_client->getQrcodeCertifyResult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->getQrcodeCertifyResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto**](../Model/YopDigitalGetCertifyQrcodeResultReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeResultRespDto**](../Model/RespDto2YopDigitalGetCertifyQrcodeResultRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **infoModify**
InfoModifyResponse infoModify(InfoModifyRequest request)

维护发票信息

商户通过此接口，可以维护发票信息，添加或修改发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoModifyRequest();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("8d697f55a80141e291d9cac2d444fb22");
$request->setParentMerchantNo("10040040286");
$request->setMode("mode_example");
$request->setInvoiceType("invoiceType_example");
$request->setInvoiceForm("invoiceForm_example");
$request->setLinkman("张三");
$request->setLinkmanPhone("13300976554");
$request->setPostalAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setPostalCode("100020");
$request->setTaxpayerId("91110000752646912Q");
$request->setInvoicePhone("010-57073962");
$request->setInvoiceAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setBankName("招商银行北京建国门支行");
$request->setAccountNo("110902081410707");
$request->setEmail("san.zhang@yeepay.com");
$request->setRemark("备注1");
$request->setStandardType("GGXH-001");
$request->setUnit("件");
$request->setQuantity(1);
$request->setInvoiceBusiness(array("invoiceBusiness_example"));

try {
    $response = $api_client->infoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->infoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **invoiceType** | **string**|  | [optional]
 **invoiceForm** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **linkmanPhone** | **string**|  | [optional]
 **postalAddress** | **string**|  | [optional]
 **postalCode** | **string**|  | [optional]
 **taxpayerId** | **string**|  | [optional]
 **invoicePhone** | **string**|  | [optional]
 **invoiceAddress** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **standardType** | **string**|  | [optional]
 **unit** | **string**|  | [optional]
 **quantity** | **int**|  | [optional]
 **invoiceBusiness** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\AddOrModifyInvoiceInfoResponseDto**](../Model/AddOrModifyInvoiceInfoResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **infoQuery**
InfoQueryResponse infoQuery(InfoQueryRequest request)

查询发票信息

商户通过接口可以查询发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->infoQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->infoQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 上级商编 |
 **merchantNo** | **string**| 开票商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryInvoiceInfoYOPResponseDto**](../Model/QueryInvoiceInfoYOPResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **info_modify_v1_0**
InfoModifyV10Response info_modify_v1_0(InfoModifyV10Request request)

维护发票信息

商户通过此接口，可以维护发票信息，添加或修改发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoModifyV10Request();
$request->setMerchantNo("10040040287");
$request->setCustomerRequestNo("8d697f55a80141e291d9cac2d444fb22");
$request->setParentMerchantNo("10040040286");
$request->setMode("mode_example");
$request->setInvoiceType("invoiceType_example");
$request->setInvoiceForm("invoiceForm_example");
$request->setLinkman("张三");
$request->setLinkmanPhone("13300976554");
$request->setPostalAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setPostalCode("100020");
$request->setTaxpayerId("91110000752646912Q");
$request->setInvoicePhone("010-57073962");
$request->setInvoiceAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
$request->setBankName("招商银行北京建国门支行");
$request->setAccountNo("110902081410707");
$request->setEmail("san.zhang@yeepay.com");
$request->setRemark("备注1");
$request->setStandardType("GGXH-001");
$request->setUnit("件");
$request->setQuantity(1);
$request->setInvoiceBusiness(array("invoiceBusiness_example"));

try {
    $response = $api_client->info_modify_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->info_modify_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **customerRequestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **invoiceType** | **string**|  | [optional]
 **invoiceForm** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **linkmanPhone** | **string**|  | [optional]
 **postalAddress** | **string**|  | [optional]
 **postalCode** | **string**|  | [optional]
 **taxpayerId** | **string**|  | [optional]
 **invoicePhone** | **string**|  | [optional]
 **invoiceAddress** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **standardType** | **string**|  | [optional]
 **unit** | **string**|  | [optional]
 **quantity** | **int**|  | [optional]
 **invoiceBusiness** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\AddOrModifyInvoiceInfoResponseDto**](../Model/AddOrModifyInvoiceInfoResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **info_query_v1_0**
InfoQueryV10Response info_query_v1_0(InfoQueryV10Request request)

查询发票信息

商户通过接口可以查询发票信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InfoQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->info_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->info_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 上级商编 |
 **merchantNo** | **string**| 开票商编 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryInvoiceInfoYOPResponseDto**](../Model/QueryInvoiceInfoYOPResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **invoicePdf_reSendEmail**
InvoicePdfReSendEmailResponse invoicePdf_reSendEmail(InvoicePdfReSendEmailRequest request)

【发票发送】发票文件重新发送



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\InvoicePdfReSendEmailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto());

try {
    $response = $api_client->invoicePdf_reSendEmail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->invoicePdf_reSendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto**](../Model/YopReSendEmailInvoicePdfReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopReSendEmailInvoicePdfRespDto**](../Model/RespDto2YopReSendEmailInvoicePdfRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **issue_invoice_v1**
IssueInvoiceV1Response issue_invoice_v1(IssueInvoiceV1Request request)

【发票开具】数电票蓝字发票开具

已完成业务开通的商户如希望为消费者开具电子发票，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\IssueInvoiceV1Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto());

try {
    $response = $api_client->issue_invoice_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->issue_invoice_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto**](../Model/YopInvoiceMainInfoReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalBlueInvoiceOpenRespDto**](../Model/RespDto2YopDigitalBlueInvoiceOpenRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **open_server_v1**
OpenServerV1Response open_server_v1(OpenServerV1Request request)

【发票服务开通】数电票发票服务开通激活

提供数电票发票服务激活接口，助力企业完成服务激活，开启数电票业务。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\OpenServerV1Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto());

try {
    $response = $api_client->open_server_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->open_server_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto**](../Model/YopInvoiceOpenServerReqDto.md)| 数电发票开通激活请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceOpenServerRespDto**](../Model/RespDto2YopInvoiceOpenServerRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **order_qrcode_gen**
OrderQrcodeGenResponse order_qrcode_gen(OrderQrcodeGenRequest request)

【发票开具】开票二维码

已完成业务开通的商户如希望消费者扫码开票，可调用该接口实现。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrcodeGenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto());

try {
    $response = $api_client->order_qrcode_gen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->order_qrcode_gen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto**](../Model/YopGenOrderQrCodeReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopGenOrderQrCodeRespDto**](../Model/RespDto2YopGenOrderQrCodeRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **order_qrcode_status_query**
OrderQrcodeStatusQueryResponse order_qrcode_status_query(OrderQrcodeStatusQueryRequest request)

【发票开具】开票二维码状态查询

查询开票二维码扫码状态和开票状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrcodeStatusQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto());

try {
    $response = $api_client->order_qrcode_status_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->order_qrcode_status_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto**](../Model/OrderQrCodeQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto**](../Model/RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_invoice_v1**
QueryInvoiceV1Response query_invoice_v1(QueryInvoiceV1Request request)

【开具结果】数电票开具结果查询

发票开具后，可通过该接口查询开具结果。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\QueryInvoiceV1Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto());

try {
    $response = $api_client->query_invoice_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->query_invoice_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto**](../Model/YopDigitalInvoiceQueryReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalInvoiceQueryRespDto**](../Model/RespDto2YopDigitalInvoiceQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **recordQuery**
RecordQueryResponse recordQuery(RecordQueryRequest request)

查询开票记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\RecordQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setCustomerRequestNo("customerRequestNo_example");

try {
    $response = $api_client->recordQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->recordQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **parentMerchantNo** | **string**| 上级商编 |
 **customerRequestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryApplyInvoiceResponseDTO**](../Model/QueryApplyInvoiceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **record_query_v1_0**
RecordQueryV10Response record_query_v1_0(RecordQueryV10Request request)

查询开票记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\RecordQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setCustomerRequestNo("customerRequestNo_example");

try {
    $response = $api_client->record_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->record_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **parentMerchantNo** | **string**| 上级商编 |
 **customerRequestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryApplyInvoiceResponseDTO**](../Model/QueryApplyInvoiceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **retry_invoice_v1**
RetryInvoiceV1Response retry_invoice_v1(RetryInvoiceV1Request request)

【发票开具】数电票蓝字发票重试开具

如发票开具失败，可通过该接口重试开具

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\RetryInvoiceV1Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto());

try {
    $response = $api_client->retry_invoice_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->retry_invoice_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto**](../Model/YopDigitalRetryIOpenInvoiceReqDto.md)| 数电票蓝字发票重试开票接口请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalRetryOpenInvoiceRespDto**](../Model/RespDto2YopDigitalRetryOpenInvoiceRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **unifiedLogin**
UnifiedLoginResponse unifiedLogin(UnifiedLoginRequest request)

数电账号登录

数电账号登录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\UnifiedLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto());

try {
    $response = $api_client->unifiedLogin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->unifiedLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto**](../Model/YopDigitalUnifiedLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUnifiedLoginRespDto**](../Model/RespDto2YopDigitalUnifiedLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **unifiedLoginCheck**
UnifiedLoginCheckResponse unifiedLoginCheck(UnifiedLoginCheckRequest request)

数电账号短信验证

数电账号短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\UnifiedLoginCheckRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto());

try {
    $response = $api_client->unifiedLoginCheck($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->unifiedLoginCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto**](../Model/YopDigitalUnifiedLoginCheckReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto**](../Model/RespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userLogin**
UserLoginResponse userLogin(UserLoginRequest request)

开票员登录



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\UserLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());

try {
    $response = $api_client->userLogin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->userLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto**](../Model/YopDigitalUserLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUserLoginRespDto**](../Model/RespDto2YopDigitalUserLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **user_login**
UserLoginResponse user_login(UserLoginRequest request)

开票员登录



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Invoice\InvoiceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Invoice\Model\UserLoginRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());

try {
    $response = $api_client->user_login($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InvoiceClient->user_login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto**](../Model/YopDigitalUserLoginReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUserLoginRespDto**](../Model/RespDto2YopDigitalUserLoginRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

