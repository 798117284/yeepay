# Yeepay\Yop\Sdk\AgencyOperation

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_shop**](AgencyOperation.md#create_shop) | **POST** /rest/v1.0/agency-operation/oc/shop/create | 门店创建
[**initiate_commission**](AgencyOperation.md#initiate_commission) | **POST** /rest/v1.0/agency-operation/oc/commission/request | 发起抽佣
[**ocCommissionQuery**](AgencyOperation.md#ocCommissionQuery) | **POST** /rest/v1.0/agency-operation/oc/commission/query | 抽佣查询
[**ocCommissionRequest**](AgencyOperation.md#ocCommissionRequest) | **POST** /rest/v1.0/agency-operation/oc/commission/request | 发起抽佣
[**ocShopAuth**](AgencyOperation.md#ocShopAuth) | **POST** /rest/v1.0/agency-operation/oc/shop/auth | 门店授权
[**ocShopBindCard**](AgencyOperation.md#ocShopBindCard) | **POST** /rest/v1.0/agency-operation/oc/shop/bind-card | 门店绑卡
[**ocShopCreate**](AgencyOperation.md#ocShopCreate) | **POST** /rest/v1.0/agency-operation/oc/shop/create | 门店创建
[**ocShopQuery**](AgencyOperation.md#ocShopQuery) | **POST** /rest/v1.0/agency-operation/oc/shop/query | 门店查询
[**ocShopUnbindCard**](AgencyOperation.md#ocShopUnbindCard) | **POST** /rest/v1.0/agency-operation/oc/shop/unbind-card | 门店解绑
[**query_commission_record**](AgencyOperation.md#query_commission_record) | **POST** /rest/v1.0/agency-operation/oc/commission/query | 抽佣查询
[**shopBind**](AgencyOperation.md#shopBind) | **POST** /rest/v1.0/agency-operation/shop/bind | 代运营服务商抽佣绑定门店
[**shopBindQuery**](AgencyOperation.md#shopBindQuery) | **POST** /rest/v1.0/agency-operation/shop/bind-query | 代运营服务商抽佣绑定门店结果查询
[**shop_authorize**](AgencyOperation.md#shop_authorize) | **POST** /rest/v1.0/agency-operation/oc/shop/auth | 门店授权
[**shop_bind_card**](AgencyOperation.md#shop_bind_card) | **POST** /rest/v1.0/agency-operation/oc/shop/bind-card | 门店绑卡
[**shop_query**](AgencyOperation.md#shop_query) | **POST** /rest/v1.0/agency-operation/oc/shop/query | 门店查询
[**shop_unbind_card**](AgencyOperation.md#shop_unbind_card) | **POST** /rest/v1.0/agency-operation/oc/shop/unbind-card | 门店解绑
[**withhold**](AgencyOperation.md#withhold) | **POST** /rest/v1.0/agency-operation/withhold | 代运营服务商抽佣
[**withholdQuery**](AgencyOperation.md#withholdQuery) | **POST** /rest/v1.0/agency-operation/withhold/query | 代运营服务商抽佣记录查询
[**withhold_record_query_v1_0**](AgencyOperation.md#withhold_record_query_v1_0) | **POST** /rest/v1.0/agency-operation/withhold/query | 代运营服务商抽佣记录查询
[**withhold_shop_bind_query_v1_0**](AgencyOperation.md#withhold_shop_bind_query_v1_0) | **POST** /rest/v1.0/agency-operation/shop/bind-query | 代运营服务商抽佣绑定门店结果查询
[**withhold_shop_bind_v1_0**](AgencyOperation.md#withhold_shop_bind_v1_0) | **POST** /rest/v1.0/agency-operation/shop/bind | 代运营服务商抽佣绑定门店
[**withhold_v1_0**](AgencyOperation.md#withhold_v1_0) | **POST** /rest/v1.0/agency-operation/withhold | 代运营服务商抽佣


# **create_shop**
CreateShopResponse create_shop(CreateShopRequest request)

门店创建

创建门店，门店需是在平台的真实门店

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CreateShopRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO());

try {
    $response = $api_client->create_shop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->create_shop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO**](../Model/ShopCreateRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateResponseDTO**](../Model/ShopCreateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **initiate_commission**
InitiateCommissionResponse initiate_commission(InitiateCommissionRequest request)

发起抽佣

发起佣金收取，从绑定银行卡进行扣款，绑定卡需是门店在抖音绑定的法人对私结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\InitiateCommissionRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO());

try {
    $response = $api_client->initiate_commission($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->initiate_commission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO**](../Model/YopCommissionRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionResponseDTO**](../Model/CommissionResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocCommissionQuery**
OcCommissionQueryResponse ocCommissionQuery(OcCommissionQueryRequest request)

抽佣查询

查询佣金收取订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcCommissionQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO());

try {
    $response = $api_client->ocCommissionQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocCommissionQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO**](../Model/CommissionQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryResponseDTO**](../Model/CommissionQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocCommissionRequest**
OcCommissionRequestResponse ocCommissionRequest(OcCommissionRequestRequest request)

发起抽佣

发起佣金收取，从绑定银行卡进行扣款，绑定卡需是门店在抖音绑定的法人对私结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcCommissionRequestRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO());

try {
    $response = $api_client->ocCommissionRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocCommissionRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO**](../Model/YopCommissionRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionResponseDTO**](../Model/CommissionResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocShopAuth**
OcShopAuthResponse ocShopAuth(OcShopAuthRequest request)

门店授权

发起门店授权

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcShopAuthRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO());

try {
    $response = $api_client->ocShopAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocShopAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO**](../Model/AccountApplyRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyResponseDTO**](../Model/AccountApplyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocShopBindCard**
OcShopBindCardResponse ocShopBindCard(OcShopBindCardRequest request)

门店绑卡

在易宝提供的绑卡页面完成绑卡，绑定卡需是门店在抖音绑定的法人对私结算卡，绑卡环节需短验，需要绑定在代运营的商编上

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcShopBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO());

try {
    $response = $api_client->ocShopBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocShopBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO**](../Model/ApplyBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardResponseDTO**](../Model/ApplyBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocShopCreate**
OcShopCreateResponse ocShopCreate(OcShopCreateRequest request)

门店创建

创建门店，门店需是在平台的真实门店

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcShopCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO());

try {
    $response = $api_client->ocShopCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocShopCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO**](../Model/ShopCreateRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateResponseDTO**](../Model/ShopCreateResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocShopQuery**
OcShopQueryResponse ocShopQuery(OcShopQueryRequest request)

门店查询

查询门店的信息和绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcShopQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO());

try {
    $response = $api_client->ocShopQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocShopQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO**](../Model/ShopQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryShopResponseDTO**](../Model/YopQueryShopResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **ocShopUnbindCard**
OcShopUnbindCardResponse ocShopUnbindCard(OcShopUnbindCardRequest request)

门店解绑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\OcShopUnbindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO());

try {
    $response = $api_client->ocShopUnbindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->ocShopUnbindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO**](../Model/ApplyUnBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardResponseDTO**](../Model/ApplyUnBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_commission_record**
QueryCommissionRecordResponse query_commission_record(QueryCommissionRecordRequest request)

抽佣查询

查询佣金收取订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\QueryCommissionRecordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO());

try {
    $response = $api_client->query_commission_record($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->query_commission_record: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO**](../Model/CommissionQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryResponseDTO**](../Model/CommissionQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shopBind**
ShopBindResponse shopBind(ShopBindRequest request)

代运营服务商抽佣绑定门店



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopBindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO());

try {
    $response = $api_client->shopBind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shopBind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO**](../Model/YopMerchantShopBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMerchantShopBindResDTO**](../Model/BaseResultYopMerchantShopBindResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shopBindQuery**
ShopBindQueryResponse shopBindQuery(ShopBindQueryRequest request)

代运营服务商抽佣绑定门店结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopBindQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO());

try {
    $response = $api_client->shopBindQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shopBindQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO**](../Model/YopQueryMerchantShopBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopQueryMerchantShopBindResDTO**](../Model/BaseResultYopQueryMerchantShopBindResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shop_authorize**
ShopAuthorizeResponse shop_authorize(ShopAuthorizeRequest request)

门店授权

发起门店授权

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopAuthorizeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO());

try {
    $response = $api_client->shop_authorize($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shop_authorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO**](../Model/AccountApplyRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyResponseDTO**](../Model/AccountApplyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shop_bind_card**
ShopBindCardResponse shop_bind_card(ShopBindCardRequest request)

门店绑卡

在易宝提供的绑卡页面完成绑卡，绑定卡需是门店在抖音绑定的法人对私结算卡，绑卡环节需短验，需要绑定在代运营的商编上

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO());

try {
    $response = $api_client->shop_bind_card($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shop_bind_card: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO**](../Model/ApplyBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardResponseDTO**](../Model/ApplyBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shop_query**
ShopQueryResponse shop_query(ShopQueryRequest request)

门店查询

查询门店的信息和绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO());

try {
    $response = $api_client->shop_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shop_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO**](../Model/ShopQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryShopResponseDTO**](../Model/YopQueryShopResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **shop_unbind_card**
ShopUnbindCardResponse shop_unbind_card(ShopUnbindCardRequest request)

门店解绑

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopUnbindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO());

try {
    $response = $api_client->shop_unbind_card($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->shop_unbind_card: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO**](../Model/ApplyUnBindCardRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardResponseDTO**](../Model/ApplyUnBindCardResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withhold**
WithholdResponse withhold(WithholdRequest request)

代运营服务商抽佣



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO());

try {
    $response = $api_client->withhold($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withhold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO**](../Model/YopMultiChannelWithholdReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelWithholdResDTO**](../Model/BaseResultYopMultiChannelWithholdResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withholdQuery**
WithholdQueryResponse withholdQuery(WithholdQueryRequest request)

代运营服务商抽佣记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO());

try {
    $response = $api_client->withholdQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withholdQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO**](../Model/YopMultiChannelQueryWithholdRecordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelQueryWithholdRecordResDTO**](../Model/BaseResultYopMultiChannelQueryWithholdRecordResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withhold_record_query_v1_0**
WithholdRecordQueryV10Response withhold_record_query_v1_0(WithholdRecordQueryV10Request request)

代运营服务商抽佣记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdRecordQueryV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO());

try {
    $response = $api_client->withhold_record_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withhold_record_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO**](../Model/YopMultiChannelQueryWithholdRecordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelQueryWithholdRecordResDTO**](../Model/BaseResultYopMultiChannelQueryWithholdRecordResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withhold_shop_bind_query_v1_0**
WithholdShopBindQueryV10Response withhold_shop_bind_query_v1_0(WithholdShopBindQueryV10Request request)

代运营服务商抽佣绑定门店结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdShopBindQueryV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO());

try {
    $response = $api_client->withhold_shop_bind_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withhold_shop_bind_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO**](../Model/YopQueryMerchantShopBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopQueryMerchantShopBindResDTO**](../Model/BaseResultYopQueryMerchantShopBindResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withhold_shop_bind_v1_0**
WithholdShopBindV10Response withhold_shop_bind_v1_0(WithholdShopBindV10Request request)

代运营服务商抽佣绑定门店



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdShopBindV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO());

try {
    $response = $api_client->withhold_shop_bind_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withhold_shop_bind_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO**](../Model/YopMerchantShopBindReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMerchantShopBindResDTO**](../Model/BaseResultYopMerchantShopBindResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withhold_v1_0**
WithholdV10Response withhold_v1_0(WithholdV10Request request)

代运营服务商抽佣



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AgencyOperation\AgencyOperationClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AgencyOperation\Model\WithholdV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO());

try {
    $response = $api_client->withhold_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgencyOperationClient->withhold_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO**](../Model/YopMultiChannelWithholdReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\BaseResultYopMultiChannelWithholdResDTO**](../Model/BaseResultYopMultiChannelWithholdResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

