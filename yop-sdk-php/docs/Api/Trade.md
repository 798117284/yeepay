# Yeepay\Yop\Sdk\Trade

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentrefund**](Trade.md#agentrefund) | **POST** /rest/v1.0/trade/agentrefund | 代理退款
[**agentrefund_v1_0**](Trade.md#agentrefund_v1_0) | **POST** /rest/v1.0/trade/agentrefund | 代理退款
[**batch_order_refund_query_v1_0**](Trade.md#batch_order_refund_query_v1_0) | **GET** /rest/v1.0/trade/refund/combine-query | 查询合单退款
[**batch_order_refund_v1_0**](Trade.md#batch_order_refund_v1_0) | **POST** /rest/v1.0/trade/refund/combine | 申请合单退款
[**combineRefundDownload**](Trade.md#combineRefundDownload) | **POST** /rest/v1.0/trade/combine-refund-download | 合并订单退款回单
[**combine_refund_receipt_download_v1_0**](Trade.md#combine_refund_receipt_download_v1_0) | **POST** /rest/v1.0/trade/combine-refund-download | 合并订单退款回单
[**configLimitAlertOperate**](Trade.md#configLimitAlertOperate) | **POST** /rest/v1.0/trade/config/limit/alert/operate | 操作交易限额预警
[**configLimitOperate**](Trade.md#configLimitOperate) | **POST** /rest/v1.0/trade/config/limit/operate | 操作限额配置
[**configLimitQuery**](Trade.md#configLimitQuery) | **GET** /rest/v1.0/trade/config/limit/query | 查询限额配置
[**configTemplateDelete**](Trade.md#configTemplateDelete) | **POST** /rest/v1.0/trade/config/template/delete | 删除商户交易服务配置
[**configTemplateOperate**](Trade.md#configTemplateOperate) | **POST** /rest/v1.0/trade/config/template/operate | 操作商户交易服务配置
[**configTemplateQuery**](Trade.md#configTemplateQuery) | **GET** /rest/v1.0/trade/config/template/query | 查询商户交易服务配置
[**huluOrderCreate**](Trade.md#huluOrderCreate) | **POST** /rest/v1.0/trade/hulu/order-create | 葫芦商户交易下单
[**huluRefundCreate**](Trade.md#huluRefundCreate) | **POST** /rest/v1.0/trade/hulu/refund-create | 葫芦商户退款下单
[**hulu_order_create**](Trade.md#hulu_order_create) | **POST** /rest/v1.0/trade/hulu/order-create | 葫芦商户交易下单
[**hulu_refund_create**](Trade.md#hulu_refund_create) | **POST** /rest/v1.0/trade/hulu/refund-create | 葫芦商户退款下单
[**order**](Trade.md#order) | **POST** /rest/v1.0/trade/order | 交易下单
[**orderClose**](Trade.md#orderClose) | **POST** /rest/v1.0/trade/order/close | 关闭订单
[**orderCombineQuery**](Trade.md#orderCombineQuery) | **GET** /rest/v1.0/trade/order/combine-query | 查询合并订单
[**orderQuery**](Trade.md#orderQuery) | **GET** /rest/v1.0/trade/order/query | 查询订单
[**order_close_v1_0**](Trade.md#order_close_v1_0) | **POST** /rest/v1.0/trade/order/close | 关闭订单
[**order_combine_query_v1_0**](Trade.md#order_combine_query_v1_0) | **GET** /rest/v1.0/trade/order/combine-query | 查询合并订单
[**order_query_v1_0**](Trade.md#order_query_v1_0) | **GET** /rest/v1.0/trade/order/query | 查询订单
[**order_v1_0**](Trade.md#order_v1_0) | **POST** /rest/v1.0/trade/order | 交易下单
[**receiptCombineDownload**](Trade.md#receiptCombineDownload) | **GET** /rest/v1.0/trade/receipt/combine-download | 合并订单回单
[**receiptDownload**](Trade.md#receiptDownload) | **GET** /yos/v1.0/trade/receipt/download | 交易回单
[**receipt_combine_download**](Trade.md#receipt_combine_download) | **GET** /rest/v1.0/trade/receipt/combine-download | 合并订单回单
[**receipt_download_v1_0**](Trade.md#receipt_download_v1_0) | **GET** /yos/v1.0/trade/receipt/download | 交易回单
[**refund**](Trade.md#refund) | **POST** /rest/v1.0/trade/refund | 申请退款
[**refundCombine**](Trade.md#refundCombine) | **POST** /rest/v1.0/trade/refund/combine | 申请合单退款
[**refundCombineQuery**](Trade.md#refundCombineQuery) | **GET** /rest/v1.0/trade/refund/combine-query | 查询合单退款
[**refundEnd**](Trade.md#refundEnd) | **POST** /rest/v1.0/trade/refund/end | 结束退款
[**refundFast**](Trade.md#refundFast) | **POST** /rest/v1.0/trade/refund/fast | 申请极速退款
[**refundQuery**](Trade.md#refundQuery) | **GET** /rest/v1.0/trade/refund/query | 查询退款
[**refundReceiptDownload**](Trade.md#refundReceiptDownload) | **GET** /yos/v1.0/trade/refund/receipt/download | 退款回单
[**refundSupply**](Trade.md#refundSupply) | **POST** /rest/v1.0/trade/refund/supply | 上送卡信息退款
[**refund_end_v1_0**](Trade.md#refund_end_v1_0) | **POST** /rest/v1.0/trade/refund/end | 结束退款
[**refund_fast_v1_0**](Trade.md#refund_fast_v1_0) | **POST** /rest/v1.0/trade/refund/fast | 申请极速退款
[**refund_query_v1_0**](Trade.md#refund_query_v1_0) | **GET** /rest/v1.0/trade/refund/query | 查询退款
[**refund_receipt_download_v1_0**](Trade.md#refund_receipt_download_v1_0) | **GET** /yos/v1.0/trade/refund/receipt/download | 退款回单
[**refund_supply_v1_0**](Trade.md#refund_supply_v1_0) | **POST** /rest/v1.0/trade/refund/supply | 上送卡信息退款
[**refund_v1_0**](Trade.md#refund_v1_0) | **POST** /rest/v1.0/trade/refund | 申请退款
[**trade_config_limit_alert_operate_v1_0**](Trade.md#trade_config_limit_alert_operate_v1_0) | **POST** /rest/v1.0/trade/config/limit/alert/operate | 操作交易限额预警
[**trade_config_limit_operate_v1_0**](Trade.md#trade_config_limit_operate_v1_0) | **POST** /rest/v1.0/trade/config/limit/operate | 操作限额配置
[**trade_config_limit_query_v1_0**](Trade.md#trade_config_limit_query_v1_0) | **GET** /rest/v1.0/trade/config/limit/query | 查询限额配置
[**trade_config_template_delete_v1_0**](Trade.md#trade_config_template_delete_v1_0) | **POST** /rest/v1.0/trade/config/template/delete | 删除商户交易服务配置
[**trade_config_template_operate_v1_0**](Trade.md#trade_config_template_operate_v1_0) | **POST** /rest/v1.0/trade/config/template/operate | 操作商户交易服务配置
[**trade_config_template_query_v1_0**](Trade.md#trade_config_template_query_v1_0) | **GET** /rest/v1.0/trade/config/template/query | 查询商户交易服务配置


# **agentrefund**
AgentrefundResponse agentrefund(AgentrefundRequest request)

代理退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\AgentrefundRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO());

try {
    $response = $api_client->agentrefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->agentrefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO**](../Model/RequestAgentRefundDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **agentrefund_v1_0**
AgentrefundV10Response agentrefund_v1_0(AgentrefundV10Request request)

代理退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\AgentrefundV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO());

try {
    $response = $api_client->agentrefund_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->agentrefund_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO**](../Model/RequestAgentRefundDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **batch_order_refund_query_v1_0**
BatchOrderRefundQueryV10Response batch_order_refund_query_v1_0(BatchOrderRefundQueryV10Request request)

查询合单退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\BatchOrderRefundQueryV10Request();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRefundRequestId("refundRequestId_example");

try {
    $response = $api_client->batch_order_refund_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->batch_order_refund_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| &lt;p&gt;商户原交易订单号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;/p&gt; &lt;p&gt;*服务商解决方案中，平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;商户退款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineRefundResDTO**](../Model/YopQueryCombineRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **batch_order_refund_v1_0**
BatchOrderRefundV10Response batch_order_refund_v1_0(BatchOrderRefundV10Request request)

申请合单退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\BatchOrderRefundV10Request();
$request->setOrderId("orderId_example");
$request->setDescription("description_example");
$request->setMemo("memo_example");
$request->setSubRefundOrders("[{\"merchantNo\":\"000001\",\"orderId\":\"000001\",\"refundRequestId\":\"000001\",\"refundAmount\":\"1.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"},{\"merchantNo\":\"000002\",\"orderId\":\"000002\",\"refundRequestId\":\"000002\",\"refundAmount\":\"2.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"}]");
$request->setRefundRequestId("refundRequestId_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRefundAmount("refundAmount_example");

try {
    $response = $api_client->batch_order_refund_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->batch_order_refund_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **subRefundOrders** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCombineRefundResDTO**](../Model/YopCombineRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **combineRefundDownload**
CombineRefundDownloadResponse combineRefundDownload(CombineRefundDownloadRequest request)

合并订单退款回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\CombineRefundDownloadRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO());

try {
    $response = $api_client->combineRefundDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->combineRefundDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO**](../Model/CombineOrderRefundReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **combine_refund_receipt_download_v1_0**
CombineRefundReceiptDownloadV10Response combine_refund_receipt_download_v1_0(CombineRefundReceiptDownloadV10Request request)

合并订单退款回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\CombineRefundReceiptDownloadV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO());

try {
    $response = $api_client->combine_refund_receipt_download_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->combine_refund_receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO**](../Model/CombineOrderRefundReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **configLimitAlertOperate**
ConfigLimitAlertOperateResponse configLimitAlertOperate(ConfigLimitAlertOperateRequest request)

操作交易限额预警

操作交易限额预警，预警金额和预警地址必须同时存在或者同时为空。 不能只修改预警金额或者只修改预警通知地址

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigLimitAlertOperateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLimitConfigId(1.2);
$request->setAlertAmount(1.2);
$request->setAlertNotifyUrl("alertNotifyUrl_example");

try {
    $response = $api_client->configLimitAlertOperate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configLimitAlertOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **limitConfigId** | **float**|  | [optional]
 **alertAmount** | **float**|  | [optional]
 **alertNotifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitQueryResDTO**](../Model/TradeLimitQueryResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **configLimitOperate**
ConfigLimitOperateResponse configLimitOperate(ConfigLimitOperateRequest request)

操作限额配置

此接口支持对交易限额的增删改操作。 通过入参：operateType区分操作类型。 operateType的取值：INSERT、UPDATE、DELETE INSERT:新增限额配置 UPDATE:修改限额配置 DELETE:删除限额配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigLimitOperateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperateType("operateType_example");
$request->setLimitCycleType("limitCycleType_example");
$request->setLimitStartDate("2023-12-12");
$request->setLimitAmount(1.2);
$request->setLimitConfigId(1.2);

try {
    $response = $api_client->configLimitOperate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configLimitOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **limitCycleType** | **string**|  | [optional]
 **limitStartDate** | **string**|  | [optional]
 **limitAmount** | **float**|  | [optional]
 **limitConfigId** | **float**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitOperateResDTO**](../Model/TradeLimitOperateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **configLimitQuery**
ConfigLimitQueryResponse configLimitQuery(ConfigLimitQueryRequest request)

查询限额配置

查询限额配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigLimitQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLimitConfigId(1.2);

try {
    $response = $api_client->configLimitQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configLimitQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;收单商商编&lt;/p&gt; |
 **limitConfigId** | **float**| &lt;p&gt;限额配置id&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitQueryResDTO**](../Model/TradeLimitQueryResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **configTemplateDelete**
ConfigTemplateDeleteResponse configTemplateDelete(ConfigTemplateDeleteRequest request)

删除商户交易服务配置

删除商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigTemplateDeleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRange("merchantRange_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->configTemplateDelete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configTemplateDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantRange** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopDeleteTradeTemplateResDTO**](../Model/YopDeleteTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **configTemplateOperate**
ConfigTemplateOperateResponse configTemplateOperate(ConfigTemplateOperateRequest request)

操作商户交易服务配置

新增、修改商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigTemplateOperateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantRange("merchantRange_example");
$request->setOperateType("operateType_example");
$request->setDivideFlag("divideFlag_example");
$request->setPayNotifyUrl("payNotifyUrl_example");
$request->setCsNotifyUrl("csNotifyUrl_example");
$request->setRefundNotifyUrl("refundNotifyUrl_example");
$request->setLedgerNoNotifyUrl("ledgerNoNotifyUrl_example");
$request->setFailNotify("failNotify_example");
$request->setTimeOutNotify("timeOutNotify_example");
$request->setPreAuthProcessType("DELAY_ACCOUNT");

try {
    $response = $api_client->configTemplateOperate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configTemplateOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantRange** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **divideFlag** | **string**|  | [optional]
 **payNotifyUrl** | **string**|  | [optional]
 **csNotifyUrl** | **string**|  | [optional]
 **refundNotifyUrl** | **string**|  | [optional]
 **ledgerNoNotifyUrl** | **string**|  | [optional]
 **failNotify** | **string**|  | [optional]
 **timeOutNotify** | **string**|  | [optional]
 **preAuthProcessType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopOperateTradeTemplateResDTO**](../Model/YopOperateTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **configTemplateQuery**
ConfigTemplateQueryResponse configTemplateQuery(ConfigTemplateQueryRequest request)

查询商户交易服务配置

查询商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ConfigTemplateQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->configTemplateQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->configTemplateQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryTradeTemplateResDTO**](../Model/YopQueryTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **huluOrderCreate**
HuluOrderCreateResponse huluOrderCreate(HuluOrderCreateRequest request)

葫芦商户交易下单

葫芦商户交易下单专用接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\HuluOrderCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO());

try {
    $response = $api_client->huluOrderCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->huluOrderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO**](../Model/YopHuluCreateOrderReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluOrderResDTO**](../Model/YopCreateHuluOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **huluRefundCreate**
HuluRefundCreateResponse huluRefundCreate(HuluRefundCreateRequest request)

葫芦商户退款下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\HuluRefundCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO());

try {
    $response = $api_client->huluRefundCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->huluRefundCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO**](../Model/YopCreateHuluRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundResDTO**](../Model/YopCreateHuluRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **hulu_order_create**
HuluOrderCreateResponse hulu_order_create(HuluOrderCreateRequest request)

葫芦商户交易下单

葫芦商户交易下单专用接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\HuluOrderCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO());

try {
    $response = $api_client->hulu_order_create($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->hulu_order_create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO**](../Model/YopHuluCreateOrderReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluOrderResDTO**](../Model/YopCreateHuluOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **hulu_refund_create**
HuluRefundCreateResponse hulu_refund_create(HuluRefundCreateRequest request)

葫芦商户退款下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\HuluRefundCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO());

try {
    $response = $api_client->hulu_refund_create($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->hulu_refund_create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO**](../Model/YopCreateHuluRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundResDTO**](../Model/YopCreateHuluRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **order**
OrderResponse order(OrderRequest request)

交易下单

交易下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("100.50");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setSubOrderDetail("subOrderDetail_example");
$request->setExpiredTime("expiredTime_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setCsUrl("csUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"payWay\":\"POS\"}");
$request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setPayerInfo("{\"bankCardNo\":\"6225750005831234\",\"cardName\":\"爱丽丝\",\"idCardNo\":\"130225199006093323\",\"mobilePhoneNo\":\"13902092131\",\"userID\":\"20056788\"}");
$request->setPayMerchantNo("payMerchantNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
$request->setTradeType("tradeType_example");
$request->setFeeSubsidyInfo("feeSubsidyInfo_example");
$request->setPreAuthNotifyUrl("http://xxx.xxx.com/xxx");
$request->setReceiverAccountType("receiverAccountType_example");

try {
    $response = $api_client->order($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **subOrderDetail** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **payerInfo** | **string**|  | [optional]
 **payMerchantNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **tradeType** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]
 **preAuthNotifyUrl** | **string**|  | [optional]
 **receiverAccountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateOrderV2ResDTO**](../Model/YopCreateOrderV2ResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderClose**
OrderCloseResponse orderClose(OrderCloseRequest request)

关闭订单

关闭订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->orderClose($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseOrderCloseDTO**](../Model/ResponseOrderCloseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderCombineQuery**
OrderCombineQueryResponse orderCombineQuery(OrderCombineQueryRequest request)

查询合并订单

查询合并订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCombineQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->orderCombineQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderCombineQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;此处为平台商商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;交易下单时传入的合单收款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineOrderResDTO**](../Model/YopQueryCombineOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderQuery**
OrderQueryResponse orderQuery(OrderQueryRequest request)

查询订单

查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->orderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;收款商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;(合单收款场景请传入子单的商户收款请求号)&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商户编号。与交易下单传入的保持一致&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryOrderResDTO**](../Model/YopQueryOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **order_close_v1_0**
OrderCloseV10Response order_close_v1_0(OrderCloseV10Request request)

关闭订单

关闭订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseV10Request();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->order_close_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order_close_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseOrderCloseDTO**](../Model/ResponseOrderCloseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **order_combine_query_v1_0**
OrderCombineQueryV10Response order_combine_query_v1_0(OrderCombineQueryV10Request request)

查询合并订单

查询合并订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCombineQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->order_combine_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order_combine_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;此处为平台商商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;交易下单时传入的合单收款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineOrderResDTO**](../Model/YopQueryCombineOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **order_query_v1_0**
OrderQueryV10Response order_query_v1_0(OrderQueryV10Request request)

查询订单

查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->order_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;收款商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;(合单收款场景请传入子单的商户收款请求号)&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商户编号。与交易下单传入的保持一致&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryOrderResDTO**](../Model/YopQueryOrderResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **order_v1_0**
OrderV10Response order_v1_0(OrderV10Request request)

交易下单

交易下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("100.50");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setSubOrderDetail("subOrderDetail_example");
$request->setExpiredTime("expiredTime_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setCsUrl("csUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"payWay\":\"POS\"}");
$request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
$request->setPayerInfo("{\"bankCardNo\":\"6225750005831234\",\"cardName\":\"爱丽丝\",\"idCardNo\":\"130225199006093323\",\"mobilePhoneNo\":\"13902092131\",\"userID\":\"20056788\"}");
$request->setPayMerchantNo("payMerchantNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
$request->setTradeType("tradeType_example");
$request->setFeeSubsidyInfo("feeSubsidyInfo_example");
$request->setPreAuthNotifyUrl("http://xxx.xxx.com/xxx");
$request->setReceiverAccountType("receiverAccountType_example");

try {
    $response = $api_client->order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **subOrderDetail** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]
 **payerInfo** | **string**|  | [optional]
 **payMerchantNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **tradeType** | **string**|  | [optional]
 **feeSubsidyInfo** | **string**|  | [optional]
 **preAuthNotifyUrl** | **string**|  | [optional]
 **receiverAccountType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateOrderV2ResDTO**](../Model/YopCreateOrderV2ResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptCombineDownload**
ReceiptCombineDownloadResponse receiptCombineDownload(ReceiptCombineDownloadRequest request)

合并订单回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptCombineDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->receiptCombineDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->receiptCombineDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;此处为平台商商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;div class&#x3D;\&quot;width-50-perc ivu-form-item\&quot; data-v-000a4208&#x3D;\&quot;\&quot;&gt; &lt;div class&#x3D;\&quot;ivu-form-item-content\&quot;&gt; &lt;p data-v-000a4208&#x3D;\&quot;\&quot;&gt;商户收款请求号交易下单时传入的合单收款请求号&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptDownload**
ReceiptDownloadResponse receiptDownload(ReceiptDownloadRequest request)

交易回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->receiptDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;商户收款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receipt_combine_download**
ReceiptCombineDownloadResponse receipt_combine_download(ReceiptCombineDownloadRequest request)

合并订单回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptCombineDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->receipt_combine_download($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->receipt_combine_download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;此处为平台商商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;div class&#x3D;\&quot;width-50-perc ivu-form-item\&quot; data-v-000a4208&#x3D;\&quot;\&quot;&gt; &lt;div class&#x3D;\&quot;ivu-form-item-content\&quot;&gt; &lt;p data-v-000a4208&#x3D;\&quot;\&quot;&gt;商户收款请求号交易下单时传入的合单收款请求号&lt;/p&gt; &lt;/div&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receipt_download_v1_0**
ReceiptDownloadV10Response receipt_download_v1_0(ReceiptDownloadV10Request request)

交易回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->receipt_download_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;商户收款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund**
RefundResponse refund(RefundRequest request)

申请退款

订单状态为“SUCCESS”时才能发起退款。 退款支持单笔交易分多次退款，多次退款需要提交原支付订单的商户订单号和不同的商户退款请求号，总退款金额不能超过用户实际支付金额。 一笔退款失败后重新提交，请不要更换商户退款请求号，请使用相同的商户退款请求号请求退款。 申请退款接口的响应参数code仅代表业务的受理情况，具体退款是否成功，需要通过申请退款或查询退款接口返回的status获取退款结果。 （1）当响应参数code=OPR00000时,说明易宝已受理该笔退款,此时需要根据status来判断退款状态； （2）当响应参数code≠OPR00000时,说明易宝没有受理该笔退款，可根据返回的message进行相应处理。 

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("100000000187142947011");
$request->setRefundRequestId("refundorder987654");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setRefundAmount("88.88");
$request->setDescription("用户申请退货并退款");
$request->setMemo("退款");
$request->setRefundAccountType("FUND_ACCOUNT");
$request->setNotifyUrl("notifyUrl_example");
$request->setDivideBackDetail("[{\"ledgerNo\":\"10080028707\",\"amount\":1.20,\"divideDetailNo\":\"1010202408010000013288965686\"},{\"ledgerNo\":\"10080028770\",\"divBackAccountType\":\"DIVIDE_ACCOUNT\"}]");
$request->setTerminalInfo("{\"notifyEquipmentNos\":\"97002100231636\"}");
$request->setYpPromotionRefundInfo("[{\"ypRefundAmount\":\"0.02\"}]");
$request->setBankOrderId("bankOrderId_example");

try {
    $response = $api_client->refund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]
 **ypPromotionRefundInfo** | **string**|  | [optional]
 **bankOrderId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundCombine**
RefundCombineResponse refundCombine(RefundCombineRequest request)

申请合单退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundCombineRequest();
$request->setOrderId("orderId_example");
$request->setDescription("description_example");
$request->setMemo("memo_example");
$request->setSubRefundOrders("[{\"merchantNo\":\"000001\",\"orderId\":\"000001\",\"refundRequestId\":\"000001\",\"refundAmount\":\"1.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"},{\"merchantNo\":\"000002\",\"orderId\":\"000002\",\"refundRequestId\":\"000002\",\"refundAmount\":\"2.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"}]");
$request->setRefundRequestId("refundRequestId_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRefundAmount("refundAmount_example");

try {
    $response = $api_client->refundCombine($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundCombine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **subRefundOrders** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopCombineRefundResDTO**](../Model/YopCombineRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundCombineQuery**
RefundCombineQueryResponse refundCombineQuery(RefundCombineQueryRequest request)

查询合单退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundCombineQueryRequest();
$request->setOrderId("orderId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRefundRequestId("refundRequestId_example");

try {
    $response = $api_client->refundCombineQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundCombineQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| &lt;p&gt;商户原交易订单号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;/p&gt; &lt;p&gt;*服务商解决方案中，平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;商户退款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineRefundResDTO**](../Model/YopQueryCombineRefundResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundEnd**
RefundEndResponse refundEnd(RefundEndRequest request)

结束退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundEndRequest();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refundEnd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundEnd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopEndRefundResponseDTO**](../Model/YopEndRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundFast**
RefundFastResponse refundFast(RefundFastRequest request)

申请极速退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastRequest();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setRefundAmount("refundAmount_example");
$request->setDescription("description_example");
$request->setRefundAccountType("refundAccountType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setCardInfo("cardInfo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refundFast($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundFast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopFastRefundResponseDTO**](../Model/YopFastRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundQuery**
RefundQueryResponse refundQuery(RefundQueryRequest request)

查询退款

提交退款申请后，调用该接口可查询退款状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");

try {
    $response = $api_client->refundQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;原收款商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;原收款交易对应的商户收款请求号&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;请传入申请退款时生成的退款请求号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **uniqueRefundNo** | **string**| &lt;p&gt;商户退款请求对应在易宝的退款单号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\QueryRefundResponseDTO**](../Model/QueryRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundReceiptDownload**
RefundReceiptDownloadResponse refundReceiptDownload(RefundReceiptDownloadRequest request)

退款回单

退款回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundReceiptDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");

try {
    $response = $api_client->refundReceiptDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundReceiptDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;收款交易对应的商户收款请求号&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;商户退款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundSupply**
RefundSupplyResponse refundSupply(RefundSupplyRequest request)

上送卡信息退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyRequest();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setCardInfo("cardInfo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refundSupply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundSupply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopSupplyCardInfoRefundResponseDTO**](../Model/YopSupplyCardInfoRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_end_v1_0**
RefundEndV10Response refund_end_v1_0(RefundEndV10Request request)

结束退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundEndV10Request();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refund_end_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_end_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopEndRefundResponseDTO**](../Model/YopEndRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_fast_v1_0**
RefundFastV10Response refund_fast_v1_0(RefundFastV10Request request)

申请极速退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastV10Request();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setRefundAmount("refundAmount_example");
$request->setDescription("description_example");
$request->setRefundAccountType("refundAccountType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setCardInfo("cardInfo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refund_fast_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_fast_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopFastRefundResponseDTO**](../Model/YopFastRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_query_v1_0**
RefundQueryV10Response refund_query_v1_0(RefundQueryV10Request request)

查询退款

提交退款申请后，调用该接口可查询退款状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");

try {
    $response = $api_client->refund_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;原收款商户编号&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;原收款交易对应的商户收款请求号&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;请传入申请退款时生成的退款请求号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **uniqueRefundNo** | **string**| &lt;p&gt;商户退款请求对应在易宝的退款单号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\QueryRefundResponseDTO**](../Model/QueryRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_receipt_download_v1_0**
RefundReceiptDownloadV10Response refund_receipt_download_v1_0(RefundReceiptDownloadV10Request request)

退款回单

退款回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundReceiptDownloadV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");

try {
    $response = $api_client->refund_receipt_download_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo&lt;/p&gt; |
 **orderId** | **string**| &lt;p&gt;收款交易对应的商户收款请求号&lt;/p&gt; |
 **refundRequestId** | **string**| &lt;p&gt;商户退款请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_supply_v1_0**
RefundSupplyV10Response refund_supply_v1_0(RefundSupplyV10Request request)

上送卡信息退款



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyV10Request();
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setCardInfo("cardInfo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->refund_supply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_supply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopSupplyCardInfoRefundResponseDTO**](../Model/YopSupplyCardInfoRefundResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund_v1_0**
RefundV10Response refund_v1_0(RefundV10Request request)

申请退款

订单状态为“SUCCESS”时才能发起退款。 退款支持单笔交易分多次退款，多次退款需要提交原支付订单的商户订单号和不同的商户退款请求号，总退款金额不能超过用户实际支付金额。 一笔退款失败后重新提交，请不要更换商户退款请求号，请使用相同的商户退款请求号请求退款。 申请退款接口的响应参数code仅代表业务的受理情况，具体退款是否成功，需要通过申请退款或查询退款接口返回的status获取退款结果。 （1）当响应参数code=OPR00000时,说明易宝已受理该笔退款,此时需要根据status来判断退款状态； （2）当响应参数code≠OPR00000时,说明易宝没有受理该笔退款，可根据返回的message进行相应处理。 

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundV10Request();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("100000000187142947011");
$request->setRefundRequestId("refundorder987654");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setRefundAmount("88.88");
$request->setDescription("用户申请退货并退款");
$request->setMemo("退款");
$request->setRefundAccountType("FUND_ACCOUNT");
$request->setNotifyUrl("notifyUrl_example");
$request->setDivideBackDetail("[{\"ledgerNo\":\"10080028707\",\"amount\":1.20,\"divideDetailNo\":\"1010202408010000013288965686\"},{\"ledgerNo\":\"10080028770\",\"divBackAccountType\":\"DIVIDE_ACCOUNT\"}]");
$request->setTerminalInfo("{\"notifyEquipmentNos\":\"97002100231636\"}");
$request->setYpPromotionRefundInfo("[{\"ypRefundAmount\":\"0.02\"}]");
$request->setBankOrderId("bankOrderId_example");

try {
    $response = $api_client->refund_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **divideBackDetail** | **string**|  | [optional]
 **terminalInfo** | **string**|  | [optional]
 **ypPromotionRefundInfo** | **string**|  | [optional]
 **bankOrderId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ResponseRefundDTO**](../Model/ResponseRefundDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_limit_alert_operate_v1_0**
TradeConfigLimitAlertOperateV10Response trade_config_limit_alert_operate_v1_0(TradeConfigLimitAlertOperateV10Request request)

操作交易限额预警

操作交易限额预警，预警金额和预警地址必须同时存在或者同时为空。 不能只修改预警金额或者只修改预警通知地址

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigLimitAlertOperateV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLimitConfigId(1.2);
$request->setAlertAmount(1.2);
$request->setAlertNotifyUrl("alertNotifyUrl_example");

try {
    $response = $api_client->trade_config_limit_alert_operate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_limit_alert_operate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **limitConfigId** | **float**|  | [optional]
 **alertAmount** | **float**|  | [optional]
 **alertNotifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitQueryResDTO**](../Model/TradeLimitQueryResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_limit_operate_v1_0**
TradeConfigLimitOperateV10Response trade_config_limit_operate_v1_0(TradeConfigLimitOperateV10Request request)

操作限额配置

此接口支持对交易限额的增删改操作。 通过入参：operateType区分操作类型。 operateType的取值：INSERT、UPDATE、DELETE INSERT:新增限额配置 UPDATE:修改限额配置 DELETE:删除限额配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigLimitOperateV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperateType("operateType_example");
$request->setLimitCycleType("limitCycleType_example");
$request->setLimitStartDate("2023-12-12");
$request->setLimitAmount(1.2);
$request->setLimitConfigId(1.2);

try {
    $response = $api_client->trade_config_limit_operate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_limit_operate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **limitCycleType** | **string**|  | [optional]
 **limitStartDate** | **string**|  | [optional]
 **limitAmount** | **float**|  | [optional]
 **limitConfigId** | **float**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitOperateResDTO**](../Model/TradeLimitOperateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_limit_query_v1_0**
TradeConfigLimitQueryV10Response trade_config_limit_query_v1_0(TradeConfigLimitQueryV10Request request)

查询限额配置

查询限额配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigLimitQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLimitConfigId(1.2);

try {
    $response = $api_client->trade_config_limit_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_limit_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;。&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;收单商商编&lt;/p&gt; |
 **limitConfigId** | **float**| &lt;p&gt;限额配置id&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\TradeLimitQueryResDTO**](../Model/TradeLimitQueryResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_template_delete_v1_0**
TradeConfigTemplateDeleteV10Response trade_config_template_delete_v1_0(TradeConfigTemplateDeleteV10Request request)

删除商户交易服务配置

删除商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigTemplateDeleteV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRange("merchantRange_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->trade_config_template_delete_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_template_delete_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantRange** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopDeleteTradeTemplateResDTO**](../Model/YopDeleteTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_template_operate_v1_0**
TradeConfigTemplateOperateV10Response trade_config_template_operate_v1_0(TradeConfigTemplateOperateV10Request request)

操作商户交易服务配置

新增、修改商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigTemplateOperateV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantRange("merchantRange_example");
$request->setOperateType("operateType_example");
$request->setDivideFlag("divideFlag_example");
$request->setPayNotifyUrl("payNotifyUrl_example");
$request->setCsNotifyUrl("csNotifyUrl_example");
$request->setRefundNotifyUrl("refundNotifyUrl_example");
$request->setLedgerNoNotifyUrl("ledgerNoNotifyUrl_example");
$request->setFailNotify("failNotify_example");
$request->setTimeOutNotify("timeOutNotify_example");
$request->setPreAuthProcessType("DELAY_ACCOUNT");

try {
    $response = $api_client->trade_config_template_operate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_template_operate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantRange** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **divideFlag** | **string**|  | [optional]
 **payNotifyUrl** | **string**|  | [optional]
 **csNotifyUrl** | **string**|  | [optional]
 **refundNotifyUrl** | **string**|  | [optional]
 **ledgerNoNotifyUrl** | **string**|  | [optional]
 **failNotify** | **string**|  | [optional]
 **timeOutNotify** | **string**|  | [optional]
 **preAuthProcessType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopOperateTradeTemplateResDTO**](../Model/YopOperateTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_config_template_query_v1_0**
TradeConfigTemplateQueryV10Response trade_config_template_query_v1_0(TradeConfigTemplateQueryV10Request request)

查询商户交易服务配置

查询商户交易服务配置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\TradeConfigTemplateQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->trade_config_template_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->trade_config_template_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryTradeTemplateResDTO**](../Model/YopQueryTradeTemplateResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

