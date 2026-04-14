# Yeepay\Yop\Sdk\Financial

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalacneQuery**](Financial.md#accountBalacneQuery) | **POST** /rest/v1.0/financial/account/balacne-query | 余额查询(HT银行)
[**fundBalanceQuery**](Financial.md#fundBalanceQuery) | **POST** /rest/v1.0/financial/account/balacne-query | 余额查询(HT银行)
[**fundRemit**](Financial.md#fundRemit) | **POST** /rest/v1.0/financial/fund-remit/request | 代付下单(HT银行)
[**fundRemitQuery**](Financial.md#fundRemitQuery) | **POST** /rest/v1.0/financial/fund-remit/query | 代付订单查询(HT银行)
[**fundRemitRequest**](Financial.md#fundRemitRequest) | **POST** /rest/v1.0/financial/fund-remit/request | 代付下单(HT银行)
[**fundRemitRequestQuery**](Financial.md#fundRemitRequestQuery) | **POST** /rest/v1.0/financial/fund-remit/query | 代付订单查询(HT银行)
[**fundTransferQuery**](Financial.md#fundTransferQuery) | **POST** /rest/v1.0/financial/fund-transfer/query | HT银行资金调拨查询
[**fundTransferRequest**](Financial.md#fundTransferRequest) | **POST** /rest/v1.0/financial/fund-transfer/request | HT银行资金挑拨申请
[**fundTransferRequest_0**](Financial.md#fundTransferRequest_0) | **POST** /rest/v1.0/financial/fund-transfer/request | HT银行资金挑拨申请
[**fundTransferReuestQuery**](Financial.md#fundTransferReuestQuery) | **POST** /rest/v1.0/financial/fund-transfer/query | HT银行资金调拨查询
[**getReceipt**](Financial.md#getReceipt) | **POST** /rest/v1.0/financial/receipt/get | 获取电子回单
[**openAccountQuery**](Financial.md#openAccountQuery) | **POST** /rest/v1.0/financial/open-account/query | HT银行开户申请查询
[**openAccountRequest**](Financial.md#openAccountRequest) | **POST** /rest/v1.0/financial/open-account/request | HT银行开户申请
[**openAccountRequestQuery**](Financial.md#openAccountRequestQuery) | **POST** /rest/v1.0/financial/open-account/query | HT银行开户申请查询
[**openAccountRequest_0**](Financial.md#openAccountRequest_0) | **POST** /rest/v1.0/financial/open-account/request | HT银行开户申请
[**receiptGet**](Financial.md#receiptGet) | **POST** /rest/v1.0/financial/receipt/get | 获取电子回单


# **accountBalacneQuery**
AccountBalacneQueryResponse accountBalacneQuery(AccountBalacneQueryRequest request)

余额查询(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\AccountBalacneQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO());

try {
    $response = $api_client->accountBalacneQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->accountBalacneQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO**](../Model/QueryBankBalanceRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceResponseDTO**](../Model/QueryBankBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundBalanceQuery**
FundBalanceQueryResponse fundBalanceQuery(FundBalanceQueryRequest request)

余额查询(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundBalanceQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO());

try {
    $response = $api_client->fundBalanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundBalanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO**](../Model/QueryBankBalanceRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceResponseDTO**](../Model/QueryBankBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundRemit**
FundRemitResponse fundRemit(FundRemitRequest request)

代付下单(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO());

try {
    $response = $api_client->fundRemit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundRemit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO**](../Model/FundRemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitResponseDTO**](../Model/FundRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundRemitQuery**
FundRemitQueryResponse fundRemitQuery(FundRemitQueryRequest request)

代付订单查询(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO());

try {
    $response = $api_client->fundRemitQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundRemitQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO**](../Model/QueryFundRemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitResponseDTO**](../Model/FundRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundRemitRequest**
FundRemitRequestResponse fundRemitRequest(FundRemitRequestRequest request)

代付下单(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO());

try {
    $response = $api_client->fundRemitRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundRemitRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO**](../Model/FundRemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitResponseDTO**](../Model/FundRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundRemitRequestQuery**
FundRemitRequestQueryResponse fundRemitRequestQuery(FundRemitRequestQueryRequest request)

代付订单查询(HT银行)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO());

try {
    $response = $api_client->fundRemitRequestQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundRemitRequestQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO**](../Model/QueryFundRemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitResponseDTO**](../Model/FundRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundTransferQuery**
FundTransferQueryResponse fundTransferQuery(FundTransferQueryRequest request)

HT银行资金调拨查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO());

try {
    $response = $api_client->fundTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO**](../Model/QueryFundTransferOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderResponseDTO**](../Model/FundTransferOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundTransferRequest**
FundTransferRequestResponse fundTransferRequest(FundTransferRequestRequest request)

HT银行资金挑拨申请



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO());

try {
    $response = $api_client->fundTransferRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundTransferRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO**](../Model/FundTransferOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderResponseDTO**](../Model/FundTransferOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundTransferRequest_0**
FundTransferRequest0Response fundTransferRequest_0(FundTransferRequest0Request request)

HT银行资金挑拨申请



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferRequest0Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO());

try {
    $response = $api_client->fundTransferRequest_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundTransferRequest_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO**](../Model/FundTransferOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderResponseDTO**](../Model/FundTransferOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **fundTransferReuestQuery**
FundTransferReuestQueryResponse fundTransferReuestQuery(FundTransferReuestQueryRequest request)

HT银行资金调拨查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferReuestQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO());

try {
    $response = $api_client->fundTransferReuestQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->fundTransferReuestQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO**](../Model/QueryFundTransferOrderRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderResponseDTO**](../Model/FundTransferOrderResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **getReceipt**
GetReceiptResponse getReceipt(GetReceiptRequest request)

获取电子回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\GetReceiptRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO());

try {
    $response = $api_client->getReceipt($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->getReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO**](../Model/ReceiptRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openAccountQuery**
OpenAccountQueryResponse openAccountQuery(OpenAccountQueryRequest request)

HT银行开户申请查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO());

try {
    $response = $api_client->openAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->openAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO**](../Model/QueryOpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountResponseDTO**](../Model/OpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openAccountRequest**
OpenAccountRequestResponse openAccountRequest(OpenAccountRequestRequest request)

HT银行开户申请

开户申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO());

try {
    $response = $api_client->openAccountRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->openAccountRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO**](../Model/OpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountResponseDTO**](../Model/OpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openAccountRequestQuery**
OpenAccountRequestQueryResponse openAccountRequestQuery(OpenAccountRequestQueryRequest request)

HT银行开户申请查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO());

try {
    $response = $api_client->openAccountRequestQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->openAccountRequestQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO**](../Model/QueryOpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountResponseDTO**](../Model/OpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openAccountRequest_0**
OpenAccountRequest0Response openAccountRequest_0(OpenAccountRequest0Request request)

HT银行开户申请

开户申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequest0Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO());

try {
    $response = $api_client->openAccountRequest_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->openAccountRequest_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO**](../Model/OpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountResponseDTO**](../Model/OpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **receiptGet**
ReceiptGetResponse receiptGet(ReceiptGetRequest request)

获取电子回单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Financial\FinancialClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO());

try {
    $response = $api_client->receiptGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FinancialClient->receiptGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO**](../Model/ReceiptRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptResponseDTO**](../Model/ReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

