# Yeepay\Yop\Sdk\MonthDonate

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**change**](MonthDonate.md#change) | **POST** /rest/v1.0/month-donate/change | 修改月捐
[**close**](MonthDonate.md#close) | **POST** /rest/v1.0/month-donate/close | 关闭月捐
[**createUser**](MonthDonate.md#createUser) | **POST** /rest/v1.0/month-donate/create-user | 创建易宝公益账号
[**open**](MonthDonate.md#open) | **POST** /rest/v1.0/month-donate/open | 开通月捐
[**queryOrderInfo**](MonthDonate.md#queryOrderInfo) | **POST** /rest/v1.0/month-donate/query-order-info | 查询月捐订单
[**querySignInfo**](MonthDonate.md#querySignInfo) | **POST** /rest/v1.0/month-donate/query-sign-info | 查询签约信息
[**queryUserInfo**](MonthDonate.md#queryUserInfo) | **POST** /rest/v1.0/month-donate/query-user-info | 查询用户月捐信息


# **change**
ChangeResponse change(ChangeRequest request)

修改月捐

用户修改月捐接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\ChangeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\ChangeMonthDonateRequestDTO());

try {
    $response = $api_client->change($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->change: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\ChangeMonthDonateRequestDTO**](../Model/ChangeMonthDonateRequestDTO.md)| 客户修改月捐接口 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **close**
CloseResponse close(CloseRequest request)

关闭月捐

开放客户关闭月捐

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\CloseRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\CloseMonthDonateRequestDTO());

try {
    $response = $api_client->close($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->close: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\CloseMonthDonateRequestDTO**](../Model/CloseMonthDonateRequestDTO.md)| 开放客户关闭月捐 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\BaseResponseDTO**](../Model/BaseResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **createUser**
CreateUserResponse createUser(CreateUserRequest request)

创建易宝公益账号

用于创建易宝公益账号

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\CreateUserRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\CreateUserRequestDTO());

try {
    $response = $api_client->createUser($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\CreateUserRequestDTO**](../Model/CreateUserRequestDTO.md)| 用于创建易宝公益的账号 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\CreateUserResponseDTO**](../Model/CreateUserResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **open**
OpenResponse open(OpenRequest request)

开通月捐

外放客户开通月捐接口，支持微信公众号、微信小程序、绑定银行卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\OpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\OpenMonthDonateRequestDTO());

try {
    $response = $api_client->open($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->open: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\OpenMonthDonateRequestDTO**](../Model/OpenMonthDonateRequestDTO.md)| 外放开通月捐接口，支持微信公众号，微信小程序，绑定银行卡三种开通方式 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\OpenMonthDonateResponseDTO**](../Model/OpenMonthDonateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryOrderInfo**
QueryOrderInfoResponse queryOrderInfo(QueryOrderInfoRequest request)

查询月捐订单

查询月捐订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryOrderInfoRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryMonthDonateOrderRequestDTO());

try {
    $response = $api_client->queryOrderInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->queryOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryMonthDonateOrderRequestDTO**](../Model/QueryMonthDonateOrderRequestDTO.md)| 查询用户月捐订单 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateOrderListDTO**](../Model/MonthDonateOrderListDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **querySignInfo**
QuerySignInfoResponse querySignInfo(QuerySignInfoRequest request)

查询签约信息

查询签约信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\QuerySignInfoRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\QuerySignRequestDTO());

try {
    $response = $api_client->querySignInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->querySignInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\QuerySignRequestDTO**](../Model/QuerySignRequestDTO.md)| 查询签约信息 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateSignListDTO**](../Model/MonthDonateSignListDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryUserInfo**
QueryUserInfoResponse queryUserInfo(QueryUserInfoRequest request)

查询用户月捐信息

查询用户月捐信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MonthDonate\MonthDonateClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryUserInfoRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryMonthDonateInfoRequestDTO());

try {
    $response = $api_client->queryUserInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MonthDonateClient->queryUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\QueryMonthDonateInfoRequestDTO**](../Model/QueryMonthDonateInfoRequestDTO.md)| 查询用户下的月捐信息 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MonthDonate\Model\MonthDonateInfoListDTO**](../Model/MonthDonateInfoListDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

