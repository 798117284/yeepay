# Yeepay\Yop\Sdk\Nccashierapi

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPay**](Nccashierapi.md#apiPay) | **POST** /rest/v1.0/nccashierapi/api/pay | 聚合API收银台
[**bindCardQuery**](Nccashierapi.md#bindCardQuery) | **POST** /rest/v1.0/nccashierapi/bindcard/query-request | 绑卡请求结果查询
[**bindCardRequest**](Nccashierapi.md#bindCardRequest) | **POST** /rest/v1.0/nccashierapi/bindcard/create-request | 绑卡请求
[**bindcardCreateRequest**](Nccashierapi.md#bindcardCreateRequest) | **POST** /rest/v1.0/nccashierapi/bindcard/create-request | 绑卡请求
[**bindcardQueryRequest**](Nccashierapi.md#bindcardQueryRequest) | **POST** /rest/v1.0/nccashierapi/bindcard/query-request | 绑卡请求结果查询
[**orderClose**](Nccashierapi.md#orderClose) | **POST** /rest/v1.0/nccashierapi/order/close | 关闭订单


# **apiPay**
ApiPayResponse apiPay(ApiPayRequest request)

聚合API收银台

<p>API收银台统一支付接口，支持主扫支付(微信/支付宝/京东)、被扫支付(微信/支付宝/京东)、微信公众号、小程序支付、微信SDK支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayRequest();
$request->setPayTool("SCCANPAY");
$request->setPayType("WECHAT");
$request->setToken("token_example");
$request->setAppId("appId_example");
$request->setOpenId("openId_example");
$request->setVersion("1.0");
$request->setPayEmpowerNo("payEmpowerNo_example");
$request->setMerchantTerminalId("merchantTerminalId_example");
$request->setMerchantStoreNo("merchantStoreNo_example");
$request->setUserIp("userIp_example");
$request->setExtParamMap("{\"reportFee\":\"XIANXIA\"}");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");

try {
    $response = $api_client->apiPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->apiPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payTool** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **payEmpowerNo** | **string**|  | [optional]
 **merchantTerminalId** | **string**|  | [optional]
 **merchantStoreNo** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayUnifiedAPICashierResponseDTOResult**](../Model/ApiPayUnifiedAPICashierResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindCardQuery**
BindCardQueryResponse bindCardQuery(BindCardQueryRequest request)

绑卡请求结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardRequestDTO());

try {
    $response = $api_client->bindCardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->bindCardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardRequestDTO**](../Model/QueryBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardResponseDTO**](../Model/QueryBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindCardRequest**
BindCardRequestResponse bindCardRequest(BindCardRequestRequest request)

绑卡请求

一键绑卡-页面版接口，跳转至H5/APP页面完成签约，无需再调用签约短验确认接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardRequestDTO());

try {
    $response = $api_client->bindCardRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->bindCardRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardRequestDTO**](../Model/BindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardResponseDTO**](../Model/BindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardCreateRequest**
BindcardCreateRequestResponse bindcardCreateRequest(BindcardCreateRequestRequest request)

绑卡请求

一键绑卡-页面版接口，跳转至H5/APP页面完成签约，无需再调用签约短验确认接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindcardCreateRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardRequestDTO());

try {
    $response = $api_client->bindcardCreateRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->bindcardCreateRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardRequestDTO**](../Model/BindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindCardResponseDTO**](../Model/BindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardQueryRequest**
BindcardQueryRequestResponse bindcardQueryRequest(BindcardQueryRequestRequest request)

绑卡请求结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\BindcardQueryRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardRequestDTO());

try {
    $response = $api_client->bindcardQueryRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->bindcardQueryRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardRequestDTO**](../Model/QueryBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardResponseDTO**](../Model/QueryBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **orderClose**
OrderCloseResponse orderClose(OrderCloseRequest request)

关闭订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\OrderCloseRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->orderClose($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->orderClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\OrderCloseCloseOrderResponseDTOResult**](../Model/OrderCloseCloseOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

