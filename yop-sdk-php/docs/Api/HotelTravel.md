# Yeepay\Yop\Sdk\HotelTravel

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderVerifySync**](HotelTravel.md#orderVerifySync) | **POST** /rest/v1.0/hotel-travel/order/verify-sync | 订单核验结果同步
[**order_result_query**](HotelTravel.md#order_result_query) | **POST** /rest/v1.0/hotel-travel/query/order-result | 订单核验结果查询
[**order_sync**](HotelTravel.md#order_sync) | **POST** /rest/v1.0/hotel-travel/order/verify-sync | 订单核验结果同步
[**queryOrderResult**](HotelTravel.md#queryOrderResult) | **POST** /rest/v1.0/hotel-travel/query/order-result | 订单核验结果查询


# **orderVerifySync**
OrderVerifySyncResponse orderVerifySync(OrderVerifySyncRequest request)

订单核验结果同步



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\HotelTravel\HotelTravelClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderVerifySyncRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckRequestDto());

try {
    $response = $api_client->orderVerifySync($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling HotelTravelClient->orderVerifySync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckRequestDto**](../Model/OrderInfoCheckRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckResponseDto**](../Model/OrderInfoCheckResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **order_result_query**
OrderResultQueryResponse order_result_query(OrderResultQueryRequest request)

订单核验结果查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\HotelTravel\HotelTravelClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderResultQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryRequestDto());

try {
    $response = $api_client->order_result_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling HotelTravelClient->order_result_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryRequestDto**](../Model/OrderCheckQueryRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryResponseDto**](../Model/OrderCheckQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **order_sync**
OrderSyncResponse order_sync(OrderSyncRequest request)

订单核验结果同步



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\HotelTravel\HotelTravelClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderSyncRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckRequestDto());

try {
    $response = $api_client->order_sync($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling HotelTravelClient->order_sync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckRequestDto**](../Model/OrderInfoCheckRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderInfoCheckResponseDto**](../Model/OrderInfoCheckResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryOrderResult**
QueryOrderResultResponse queryOrderResult(QueryOrderResultRequest request)

订单核验结果查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\HotelTravel\HotelTravelClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\HotelTravel\Model\QueryOrderResultRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryRequestDto());

try {
    $response = $api_client->queryOrderResult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling HotelTravelClient->queryOrderResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryRequestDto**](../Model/OrderCheckQueryRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\HotelTravel\Model\OrderCheckQueryResponseDto**](../Model/OrderCheckQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

