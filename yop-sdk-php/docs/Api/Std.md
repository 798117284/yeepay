# Yeepay\Yop\Sdk\Std

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billBillDownload**](Std.md#billBillDownload) | **GET** /yos/v1.0/std/bill/bill-download | 账单下载
[**billDivideReceiverDownload**](Std.md#billDivideReceiverDownload) | **GET** /yos/v1.0/std/bill/divide-receiver-download | 分账接收方账单下载
[**billDividedaydownload**](Std.md#billDividedaydownload) | **GET** /yos/v1.0/std/bill/dividedaydownload | 分账日对账下载
[**billFundbillApply**](Std.md#billFundbillApply) | **POST** /rest/v1.0/std/bill/fundbill/apply | 资金账单申请
[**billFundbillDownload**](Std.md#billFundbillDownload) | **GET** /yos/v1.0/std/bill/fundbill/download | 资金账单下载
[**billFundbillEndbalanceApply**](Std.md#billFundbillEndbalanceApply) | **POST** /rest/v1.0/std/bill/fundbill-endbalance/apply | 日终余额账单申请
[**billFundbillFlowQuery**](Std.md#billFundbillFlowQuery) | **GET** /rest/v1.0/std/bill/fundbill/flow/query | 资金流水明细查询
[**billFundbillFlowSum**](Std.md#billFundbillFlowSum) | **GET** /rest/v1.0/std/bill/fundbill/flow/sum | 资金流水汇总查询
[**billSettlebillDownload**](Std.md#billSettlebillDownload) | **GET** /yos/v1.0/std/bill/settlebill/download | 下载结算账单
[**billTradedaydownload**](Std.md#billTradedaydownload) | **POST** /yos/v1.0/std/bill/tradedaydownload | 交易日对账下载
[**bill_divide_receiver_download**](Std.md#bill_divide_receiver_download) | **GET** /yos/v1.0/std/bill/divide-receiver-download | 分账接收方账单下载
[**bill_fundbill_apply_v1_0**](Std.md#bill_fundbill_apply_v1_0) | **POST** /rest/v1.0/std/bill/fundbill/apply | 资金账单申请
[**bill_fundbill_flow_query_v1_0**](Std.md#bill_fundbill_flow_query_v1_0) | **GET** /rest/v1.0/std/bill/fundbill/flow/query | 资金流水明细查询
[**bill_fundbill_flow_sum_v1_0**](Std.md#bill_fundbill_flow_sum_v1_0) | **GET** /rest/v1.0/std/bill/fundbill/flow/sum | 资金流水汇总查询
[**certOrder**](Std.md#certOrder) | **POST** /rest/v1.0/std/cert/order | 新信息认证系统-认证请求
[**endBalanceQuery**](Std.md#endBalanceQuery) | **GET** /rest/v1.0/std/end-balance/query | 日终余额查询
[**end_balance_query_v1_0**](Std.md#end_balance_query_v1_0) | **GET** /rest/v1.0/std/end-balance/query | 日终余额查询
[**orca_bill_download**](Std.md#orca_bill_download) | **GET** /yos/v1.0/std/bill/bill-download | 账单下载
[**voucherAssetApply**](Std.md#voucherAssetApply) | **POST** /rest/v1.0/std/voucher/asset-apply | 资金证明申请
[**voucherDownload**](Std.md#voucherDownload) | **GET** /yos/v1.0/std/voucher/download | 资金证明等凭证下载


# **billBillDownload**
YosDownloadResponse billBillDownload(BillBillDownloadRequest request)

账单下载



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillBillDownloadRequest();
$request->setBillDate("billDate_example");
$request->setBillCode("billCode_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billBillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billBillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billDate** | **string**| &lt;p&gt;格式:yyyy-MM-dd&lt;/p&gt; |
 **billCode** | **string**| &lt;ul&gt; &lt;li&gt;SETTLE_DAILY:结算明细账单&lt;/li&gt; &lt;li&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;10\&quot;&gt;TRADE_PRE_AUTH:交易和预授权账单&lt;/span&gt;&lt;/div&gt; &lt;/li&gt; &lt;/ul&gt; |
 **merchantNo** | **string**| &lt;p&gt;账单所属商编&lt;/p&gt; |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billDivideReceiverDownload**
YosDownloadResponse billDivideReceiverDownload(BillDivideReceiverDownloadRequest request)

分账接收方账单下载

申请下载分账接收方账单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillDivideReceiverDownloadRequest();
$request->setDayString("2024-09-01");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billDivideReceiverDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billDivideReceiverDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dayString** | **string**| &lt;p&gt;账单日期&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;账单所属商编&lt;/p&gt; |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billDividedaydownload**
YosDownloadResponse billDividedaydownload(BillDividedaydownloadRequest request)

分账日对账下载

强调：获取对账文件时请以行号来获取对账文件信息，后期易宝可能在后追加参表头参数分账日对账下载，9点后下载前一天的对账文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillDividedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");

try {
    $response = $api_client->billDividedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billDividedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 标准商户:标准商户编号&lt;br&gt;平台商:平台商商户编号, 文件包含平台商及平台商下所有入驻商户的交易信息 |
 **dayString** | **string**| e.g.: 2017-09-09 |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billFundbillApply**
BillFundbillApplyResponse billFundbillApply(BillFundbillApplyRequest request)

资金账单申请

商户可以通过该接口申请资金账单，生成的账单默认压缩为zip格式，若无需压缩，可在商户后台进行账单格式配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setAccountType("accountType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setBillFormat("billFormat_example");

try {
    $response = $api_client->billFundbillApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **billFormat** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\ManualGenerationResponseDTO**](../Model/ManualGenerationResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillDownload**
YosDownloadResponse billFundbillDownload(BillFundbillDownloadRequest request)

资金账单下载

通过该接口下载生成成功的资金账单或日终余额账单，成功返回一个文件流，没有响应 体，异常会返回对应错误码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillDownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setFileId("fileId_example");

try {
    $response = $api_client->billFundbillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **fileId** | **string**|  |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billFundbillEndbalanceApply**
BillFundbillEndbalanceApplyResponse billFundbillEndbalanceApply(BillFundbillEndbalanceApplyRequest request)

日终余额账单申请

日终余额账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillEndbalanceApplyRequest();
$request->setBookDate("bookDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setSubMerchantNo("subMerchantNo_example");

try {
    $response = $api_client->billFundbillEndbalanceApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillEndbalanceApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bookDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult**](../Model/BillFundbillEndbalanceApplyManualGenerationEndBalanceResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillFlowQuery**
BillFundbillFlowQueryResponse billFundbillFlowQuery(BillFundbillFlowQueryRequest request)

资金流水明细查询

资金流水明细查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPage(56);
$request->setSize(56);
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billFundbillFlowQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillFlowQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd&lt;/p&gt; |
 **endDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,与startDate最大日期间隔为40天&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;1.父商编与子商户一致查父商编自己流水; 2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）; 3.子商户编号为空，查父商编下所有流水&lt;/p&gt; |
 **page** | **int**| &lt;p&gt;默认1，最小为1&lt;/p&gt; |
 **size** | **int**| &lt;p&gt;默认20,最小为1,最大100&lt;/p&gt; |
 **trxCode** | **string**| &lt;p&gt;业务类型 全部类型见 &lt;a title&#x3D;\&quot;资金账单业务类型编码\&quot; href&#x3D;\&quot;https://open.yeepay.com/docs/products/fwssfk/others/5f59fc1720289f001ba82528/675a8b7aba3dfe000102825d\&quot;&gt;资金账单业务类型编码&lt;/a&gt;。&lt;br /&gt;商户传入1001,接口返回中文收单。&lt;br /&gt;业务类型可选项如下,&lt;br /&gt;1001:收单&lt;br /&gt;1002:分账&lt;br /&gt;1003:分账退回&lt;br /&gt;1004:退款&lt;br /&gt;1005:充值&lt;br /&gt;1006:转账&lt;br /&gt;1010:退款撤销&lt;br /&gt;2004:提现&lt;br /&gt;2005:企业付款&lt;br /&gt;2006:收费(鉴权)&lt;br /&gt;2007:收费撤销&lt;br /&gt;2009:支付账户支付&lt;br /&gt;2011:日结通&lt;br /&gt;2012:快速实名认证&lt;br /&gt;2026:划拨&lt;br /&gt;2027:资金归集&lt;br /&gt;2028:营销账户退款&lt;br /&gt;2029:营销账户支付&lt;br /&gt;2035:补贴商户入账&lt;br /&gt;2037:OCR识别&lt;br /&gt;2038:OCR识别撤销&lt;br /&gt;4001:结算&lt;br /&gt;2099:余额分账&lt;/p&gt; | [optional]
 **accountType** | **string**| &lt;p&gt;不填默认为全部,若传一次支持传一个,可选项如下:&lt;br /&gt;FUND_ACCOUNT:资金账户&lt;br /&gt;SETTLE_ACCOUNT:待结算账户&lt;br /&gt;DIVIDE_ACCOUNT:待分账账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;BASIC_ACCOUNT:基本账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br /&gt;ADVANCE_ACCOUNT:预收账户&lt;br /&gt;UNDERWRITTEN_ACCOUNT:垫付账户&lt;br /&gt;VCC_ACCOUNT:VCC账户&lt;br /&gt;DIVIDE_TRANSIT_ACCOUNT:入账方在途账户&lt;br /&gt;V_CHANNEL_TRANSIT_ACCOUNT:渠道在途账户&lt;br /&gt;BANK_ACCOUNT:银行账户&lt;br /&gt;OVERSEAS_ACCOUNT:海外账户&lt;br /&gt;DIVIDE_PENDING_ACCOUNT:分账在途账户&lt;br /&gt;DIVIDE_FUND_ACCOUNT:分账资金账户&lt;br /&gt;REMIT_TRANSITION_ACCOUNT:订单付款过渡户&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;子商户编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillFlowResponseDTO**](../Model/YopQueryFundBillFlowResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillFlowSum**
BillFundbillFlowSumResponse billFundbillFlowSum(BillFundbillFlowSumRequest request)

资金流水汇总查询

资金流水汇总查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowSumRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->billFundbillFlowSum($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillFlowSum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd&lt;/p&gt; |
 **endDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,与startDate最大日期间隔为40天&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;1.父商编与子商户一致查父商编自己流水; 2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）; 3.子商户编号为空，查父商编下所有流水&lt;/p&gt; |
 **trxCode** | **string**| &lt;p&gt;业务类型 全部类型见 &lt;a title&#x3D;\&quot;资金账单业务类型编码\&quot; href&#x3D;\&quot;https://open.yeepay.com/docs/products/fwssfk/others/5f59fc1720289f001ba82528/675a8b7aba3dfe000102825d\&quot;&gt;资金账单业务类型编码。&lt;/a&gt;商户传入1001,接口返回中文收单。&lt;br /&gt;业务类型可选项如下,&lt;br /&gt;1001:收单&lt;br /&gt;1002:分账&lt;br /&gt;1003:分账退回&lt;br /&gt;1004:退款&lt;br /&gt;1005:充值&lt;br /&gt;1006:转账&lt;br /&gt;1010:退款撤销&lt;br /&gt;2004:提现&lt;br /&gt;2005:企业付款&lt;br /&gt;2006:收费(鉴权)&lt;br /&gt;2007:收费撤销&lt;br /&gt;2009:支付账户支付&lt;br /&gt;2011:日结通&lt;br /&gt;2012:快速实名认证&lt;br /&gt;2026:划拨&lt;br /&gt;2027:资金归集&lt;br /&gt;2028:营销账户退款&lt;br /&gt;2029:营销账户支付&lt;br /&gt;2035:补贴商户入账&lt;br /&gt;2037:OCR识别&lt;br /&gt;2038:OCR识别撤销&lt;br /&gt;4001:结算&lt;br /&gt;2099:余额分账&lt;/p&gt; | [optional]
 **accountType** | **string**| &lt;p&gt;不填默认为全部,若传一次支持传一个,可选项如下:&lt;br /&gt;FUND_ACCOUNT:资金账户&lt;br /&gt;SETTLE_ACCOUNT:待结算账户&lt;br /&gt;DIVIDE_ACCOUNT:待分账账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;BASIC_ACCOUNT:基本账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br /&gt;ADVANCE_ACCOUNT:预收账户&lt;br /&gt;UNDERWRITTEN_ACCOUNT:垫付账户&lt;br /&gt;VCC_ACCOUNT:VCC账户&lt;br /&gt;DIVIDE_TRANSIT_ACCOUNT:入账方在途账户&lt;br /&gt;V_CHANNEL_TRANSIT_ACCOUNT:渠道在途账户&lt;br /&gt;BANK_ACCOUNT:银行账户&lt;br /&gt;OVERSEAS_ACCOUNT:海外账户&lt;br /&gt;DIVIDE_PENDING_ACCOUNT:分账在途账户&lt;br /&gt;DIVIDE_FUND_ACCOUNT:分账资金账户&lt;br /&gt;REMIT_TRANSITION_ACCOUNT:订单付款过渡户&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;子商户编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillSumResponseDTO**](../Model/YopQueryFundBillSumResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billSettlebillDownload**
YosDownloadResponse billSettlebillDownload(BillSettlebillDownloadRequest request)

下载结算账单

下载结算账单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillSettlebillDownloadRequest();
$request->setSettleDate("settleDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleBatchNo("settleBatchNo_example");

try {
    $response = $api_client->billSettlebillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billSettlebillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settleDate** | **string**| 格式yyyy-mm-dd |
 **merchantNo** | **string**|  |
 **settleBatchNo** | **string**|  | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billTradedaydownload**
YosDownloadResponse billTradedaydownload(BillTradedaydownloadRequest request)

交易日对账下载

交易日对账下载，具体请参考对账文件说明

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillTradedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");
$request->setDataType("dataType_example");

try {
    $response = $api_client->billTradedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billTradedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **dayString** | **string**|  | [optional]
 **dataType** | **string**|  | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **bill_divide_receiver_download**
YosDownloadResponse bill_divide_receiver_download(BillDivideReceiverDownloadRequest request)

分账接收方账单下载

申请下载分账接收方账单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillDivideReceiverDownloadRequest();
$request->setDayString("2024-09-01");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bill_divide_receiver_download($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->bill_divide_receiver_download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dayString** | **string**| &lt;p&gt;账单日期&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;账单所属商编&lt;/p&gt; |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **bill_fundbill_apply_v1_0**
BillFundbillApplyV10Response bill_fundbill_apply_v1_0(BillFundbillApplyV10Request request)

资金账单申请

商户可以通过该接口申请资金账单，生成的账单默认压缩为zip格式，若无需压缩，可在商户后台进行账单格式配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyV10Request();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setAccountType("accountType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setBillFormat("billFormat_example");

try {
    $response = $api_client->bill_fundbill_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->bill_fundbill_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **billFormat** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\ManualGenerationResponseDTO**](../Model/ManualGenerationResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bill_fundbill_flow_query_v1_0**
BillFundbillFlowQueryV10Response bill_fundbill_flow_query_v1_0(BillFundbillFlowQueryV10Request request)

资金流水明细查询

资金流水明细查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryV10Request();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPage(56);
$request->setSize(56);
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bill_fundbill_flow_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->bill_fundbill_flow_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd&lt;/p&gt; |
 **endDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,与startDate最大日期间隔为40天&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;1.父商编与子商户一致查父商编自己流水; 2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）; 3.子商户编号为空，查父商编下所有流水&lt;/p&gt; |
 **page** | **int**| &lt;p&gt;默认1，最小为1&lt;/p&gt; |
 **size** | **int**| &lt;p&gt;默认20,最小为1,最大100&lt;/p&gt; |
 **trxCode** | **string**| &lt;p&gt;业务类型 全部类型见 &lt;a title&#x3D;\&quot;资金账单业务类型编码\&quot; href&#x3D;\&quot;https://open.yeepay.com/docs/products/fwssfk/others/5f59fc1720289f001ba82528/675a8b7aba3dfe000102825d\&quot;&gt;资金账单业务类型编码&lt;/a&gt;。&lt;br /&gt;商户传入1001,接口返回中文收单。&lt;br /&gt;业务类型可选项如下,&lt;br /&gt;1001:收单&lt;br /&gt;1002:分账&lt;br /&gt;1003:分账退回&lt;br /&gt;1004:退款&lt;br /&gt;1005:充值&lt;br /&gt;1006:转账&lt;br /&gt;1010:退款撤销&lt;br /&gt;2004:提现&lt;br /&gt;2005:企业付款&lt;br /&gt;2006:收费(鉴权)&lt;br /&gt;2007:收费撤销&lt;br /&gt;2009:支付账户支付&lt;br /&gt;2011:日结通&lt;br /&gt;2012:快速实名认证&lt;br /&gt;2026:划拨&lt;br /&gt;2027:资金归集&lt;br /&gt;2028:营销账户退款&lt;br /&gt;2029:营销账户支付&lt;br /&gt;2035:补贴商户入账&lt;br /&gt;2037:OCR识别&lt;br /&gt;2038:OCR识别撤销&lt;br /&gt;4001:结算&lt;br /&gt;2099:余额分账&lt;/p&gt; | [optional]
 **accountType** | **string**| &lt;p&gt;不填默认为全部,若传一次支持传一个,可选项如下:&lt;br /&gt;FUND_ACCOUNT:资金账户&lt;br /&gt;SETTLE_ACCOUNT:待结算账户&lt;br /&gt;DIVIDE_ACCOUNT:待分账账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;BASIC_ACCOUNT:基本账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br /&gt;ADVANCE_ACCOUNT:预收账户&lt;br /&gt;UNDERWRITTEN_ACCOUNT:垫付账户&lt;br /&gt;VCC_ACCOUNT:VCC账户&lt;br /&gt;DIVIDE_TRANSIT_ACCOUNT:入账方在途账户&lt;br /&gt;V_CHANNEL_TRANSIT_ACCOUNT:渠道在途账户&lt;br /&gt;BANK_ACCOUNT:银行账户&lt;br /&gt;OVERSEAS_ACCOUNT:海外账户&lt;br /&gt;DIVIDE_PENDING_ACCOUNT:分账在途账户&lt;br /&gt;DIVIDE_FUND_ACCOUNT:分账资金账户&lt;br /&gt;REMIT_TRANSITION_ACCOUNT:订单付款过渡户&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;子商户编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillFlowResponseDTO**](../Model/YopQueryFundBillFlowResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bill_fundbill_flow_sum_v1_0**
BillFundbillFlowSumV10Response bill_fundbill_flow_sum_v1_0(BillFundbillFlowSumV10Request request)

资金流水汇总查询

资金流水汇总查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowSumV10Request();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTrxCode("trxCode_example");
$request->setAccountType("accountType_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bill_fundbill_flow_sum_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->bill_fundbill_flow_sum_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd&lt;/p&gt; |
 **endDate** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,与startDate最大日期间隔为40天&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;1.父商编与子商户一致查父商编自己流水; 2.父商编与子商户不一致，查子商户流水（服务商解决方案下，查平台下的入驻商户时,父商编传平台商商编）; 3.子商户编号为空，查父商编下所有流水&lt;/p&gt; |
 **trxCode** | **string**| &lt;p&gt;业务类型 全部类型见 &lt;a title&#x3D;\&quot;资金账单业务类型编码\&quot; href&#x3D;\&quot;https://open.yeepay.com/docs/products/fwssfk/others/5f59fc1720289f001ba82528/675a8b7aba3dfe000102825d\&quot;&gt;资金账单业务类型编码。&lt;/a&gt;商户传入1001,接口返回中文收单。&lt;br /&gt;业务类型可选项如下,&lt;br /&gt;1001:收单&lt;br /&gt;1002:分账&lt;br /&gt;1003:分账退回&lt;br /&gt;1004:退款&lt;br /&gt;1005:充值&lt;br /&gt;1006:转账&lt;br /&gt;1010:退款撤销&lt;br /&gt;2004:提现&lt;br /&gt;2005:企业付款&lt;br /&gt;2006:收费(鉴权)&lt;br /&gt;2007:收费撤销&lt;br /&gt;2009:支付账户支付&lt;br /&gt;2011:日结通&lt;br /&gt;2012:快速实名认证&lt;br /&gt;2026:划拨&lt;br /&gt;2027:资金归集&lt;br /&gt;2028:营销账户退款&lt;br /&gt;2029:营销账户支付&lt;br /&gt;2035:补贴商户入账&lt;br /&gt;2037:OCR识别&lt;br /&gt;2038:OCR识别撤销&lt;br /&gt;4001:结算&lt;br /&gt;2099:余额分账&lt;/p&gt; | [optional]
 **accountType** | **string**| &lt;p&gt;不填默认为全部,若传一次支持传一个,可选项如下:&lt;br /&gt;FUND_ACCOUNT:资金账户&lt;br /&gt;SETTLE_ACCOUNT:待结算账户&lt;br /&gt;DIVIDE_ACCOUNT:待分账账户&lt;br /&gt;FEE_ACCOUNT:手续费账户&lt;br /&gt;BASIC_ACCOUNT:基本账户&lt;br /&gt;MARKET_ACCOUNT:营销账户&lt;br /&gt;SPECIAL_FUND_ACCOUNT:专款账户&lt;br /&gt;ADVANCE_ACCOUNT:预收账户&lt;br /&gt;UNDERWRITTEN_ACCOUNT:垫付账户&lt;br /&gt;VCC_ACCOUNT:VCC账户&lt;br /&gt;DIVIDE_TRANSIT_ACCOUNT:入账方在途账户&lt;br /&gt;V_CHANNEL_TRANSIT_ACCOUNT:渠道在途账户&lt;br /&gt;BANK_ACCOUNT:银行账户&lt;br /&gt;OVERSEAS_ACCOUNT:海外账户&lt;br /&gt;DIVIDE_PENDING_ACCOUNT:分账在途账户&lt;br /&gt;DIVIDE_FUND_ACCOUNT:分账资金账户&lt;br /&gt;REMIT_TRANSITION_ACCOUNT:订单付款过渡户&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;子商户编号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryFundBillSumResponseDTO**](../Model/YopQueryFundBillSumResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **certOrder**
CertOrderResponse certOrder(CertOrderRequest request)

新信息认证系统-认证请求



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\CertOrderRequest();
$request->setMerchantNo("100000000000");
$request->setAuthType("authType_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardNo("230231199510101010");
$request->setUserName("易小宝");
$request->setBankCardNo("6217876555556554324");
$request->setRequestTime("2019-09-09 00:00:00");
$request->setRemark("remark_example");
$request->setMobilePhone("mobilePhone_example");
$request->setIdCardType("idCardType_example");
$request->setClientSource("clientSource_example");
$request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");

try {
    $response = $api_client->certOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->certOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **authType** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **requestTime** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **mobilePhone** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **clientSource** | **string**|  | [optional]
 **extMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\CertOrderAuthResponseDTOResult**](../Model/CertOrderAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **endBalanceQuery**
EndBalanceQueryResponse endBalanceQuery(EndBalanceQueryRequest request)

日终余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\EndBalanceQueryRequest();
$request->setDate("2025-03-01");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->endBalanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->endBalanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,账单日期需小于今天。若查昨日的余额请在今日05点以后查询。昨日往前的余额，查询时限不受限制。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div&gt;查询余额的商户编号&lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryBalanceResponseDTO**](../Model/YopQueryBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **end_balance_query_v1_0**
EndBalanceQueryV10Response end_balance_query_v1_0(EndBalanceQueryV10Request request)

日终余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\EndBalanceQueryV10Request();
$request->setDate("2025-03-01");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->end_balance_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->end_balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| &lt;p&gt;格式应为yyyy-MM-dd,账单日期需小于今天。若查昨日的余额请在今日05点以后查询。昨日往前的余额，查询时限不受限制。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div&gt;查询余额的商户编号&lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryBalanceResponseDTO**](../Model/YopQueryBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orca_bill_download**
YosDownloadResponse orca_bill_download(OrcaBillDownloadRequest request)

账单下载



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\OrcaBillDownloadRequest();
$request->setBillDate("billDate_example");
$request->setBillCode("billCode_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->orca_bill_download($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->orca_bill_download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billDate** | **string**| &lt;p&gt;格式:yyyy-MM-dd&lt;/p&gt; |
 **billCode** | **string**| &lt;ul&gt; &lt;li&gt;SETTLE_DAILY:结算明细账单&lt;/li&gt; &lt;li&gt; &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;10\&quot;&gt;TRADE_PRE_AUTH:交易和预授权账单&lt;/span&gt;&lt;/div&gt; &lt;/li&gt; &lt;/ul&gt; |
 **merchantNo** | **string**| &lt;p&gt;账单所属商编&lt;/p&gt; |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **voucherAssetApply**
VoucherAssetApplyResponse voucherAssetApply(VoucherAssetApplyRequest request)

资金证明申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\VoucherAssetApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Std\Model\YopGenerationAssetVoucherRequestDTO());

try {
    $response = $api_client->voucherAssetApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->voucherAssetApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Std\Model\YopGenerationAssetVoucherRequestDTO**](../Model/YopGenerationAssetVoucherRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\YopGenerationAssetVoucherRespDTO**](../Model/YopGenerationAssetVoucherRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **voucherDownload**
YosDownloadResponse voucherDownload(VoucherDownloadRequest request)

资金证明等凭证下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\VoucherDownloadRequest();
$request->setVoucherNo("voucherNo_example");

try {
    $response = $api_client->voucherDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->voucherDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucherNo** | **string**| &lt;p&gt;凭证编号&lt;/p&gt; |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

