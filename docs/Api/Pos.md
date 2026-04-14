# Yeepay\Yop\Sdk\Pos

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPosInfoDtos**](Pos.md#getPosInfoDtos) | **POST** /rest/v1.0/pos/get-pos-info-dtos | 机具信息查询
[**getPosInfoDtosTest1**](Pos.md#getPosInfoDtosTest1) | **POST** /rest/v1.0/pos/get-pos-info-dtos-test1 | 机具信息查询
[**installPosWithProduct**](Pos.md#installPosWithProduct) | **POST** /rest/v1.0/pos/install-pos-with-product | 老POS系统商绑机
[**installPosWithProductTest1**](Pos.md#installPosWithProductTest1) | **POST** /rest/v1.0/pos/install-pos-with-product-test1 | 老POS系统商绑机
[**unSynBindPos**](Pos.md#unSynBindPos) | **POST** /rest/v1.0/pos/un-syn-bind-pos | 代理商解绑接口
[**unSynBindPosTest1**](Pos.md#unSynBindPosTest1) | **POST** /rest/v1.0/pos/un-syn-bind-pos-test1 | 代理商解绑接口


# **getPosInfoDtos**
GetPosInfoDtosResponse getPosInfoDtos(GetPosInfoDtosRequest request)

机具信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosRequest();
$request->setCustomerNumber("customerNumber_example");
$request->setPosCati("0000010484250011");
$request->setSerialNumber("15706413");
$request->setShopName("shopName_example");

try {
    $response = $api_client->getPosInfoDtos($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->getPosInfoDtos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **posCati** | **string**|  | [optional]
 **serialNumber** | **string**|  | [optional]
 **shopName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosOldPosYopQueryPosRspDTOResult**](../Model/GetPosInfoDtosOldPosYopQueryPosRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getPosInfoDtosTest1**
GetPosInfoDtosTest1Response getPosInfoDtosTest1(GetPosInfoDtosTest1Request request)

机具信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosTest1Request();
$request->setCustomerNumber("customerNumber_example");
$request->setPosCati("0000010484250011");
$request->setSerialNumber("15706413");
$request->setShopName("shopName_example");

try {
    $response = $api_client->getPosInfoDtosTest1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->getPosInfoDtosTest1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **posCati** | **string**|  | [optional]
 **serialNumber** | **string**|  | [optional]
 **shopName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult**](../Model/GetPosInfoDtosTest1OldPosYopQueryPosRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installPosWithProduct**
InstallPosWithProductResponse installPosWithProduct(InstallPosWithProductRequest request)

老POS系统商绑机

系统商绑机

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\InstallPosWithProductRequest();
$request->setCustomerNumber("customerNumber_example");
$request->setShopStr("{     \"shopStr\": \"[{\"linkman\":\"XX联系人\",\"name\":\"测试商户A网点\",\"province\":\"北京\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"朝外大街XXX号\"}]\" }");
$request->setPosStr("posStr_example");
$request->setProductCode("productCode_example");
$request->setExternalMcc("externalMcc_example");
$request->setCustomerType("customerType_example");
$request->setShopList(array("shopList_example"));
$request->setPosList(array("posList_example"));

try {
    $response = $api_client->installPosWithProduct($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->installPosWithProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **shopStr** | **string**|  | [optional]
 **posStr** | **string**|  | [optional]
 **productCode** | **string**|  | [optional]
 **externalMcc** | **string**|  | [optional]
 **customerType** | **string**|  | [optional]
 **shopList** | [**string[]**](../Model/string.md)|  | [optional]
 **posList** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installPosWithProductTest1**
InstallPosWithProductTest1Response installPosWithProductTest1(InstallPosWithProductTest1Request request)

老POS系统商绑机

系统商绑机

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\InstallPosWithProductTest1Request();
$request->setCustomerNumber("customerNumber_example");
$request->setShopStr("{     \"shopStr\": \"[{\"linkman\":\"XX联系人\",\"name\":\"测试商户A网点\",\"province\":\"北京\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"朝外大街XXX号\"}]\" }");
$request->setPosStr("posStr_example");
$request->setProductCode("productCode_example");
$request->setExternalMcc("externalMcc_example");
$request->setCustomerType("customerType_example");
$request->setShopList(array("shopList_example"));
$request->setPosList(array("posList_example"));

try {
    $response = $api_client->installPosWithProductTest1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->installPosWithProductTest1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerNumber** | **string**|  | [optional]
 **shopStr** | **string**|  | [optional]
 **posStr** | **string**|  | [optional]
 **productCode** | **string**|  | [optional]
 **externalMcc** | **string**|  | [optional]
 **customerType** | **string**|  | [optional]
 **shopList** | [**string[]**](../Model/string.md)|  | [optional]
 **posList** | [**string[]**](../Model/string.md)|  | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unSynBindPos**
UnSynBindPosResponse unSynBindPos(UnSynBindPosRequest request)

代理商解绑接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\UnSynBindPosRequest();
$request->setPoscati("0000010484250011");
$request->setCustomerNumber("customerNumber_example");

try {
    $response = $api_client->unSynBindPos($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->unSynBindPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poscati** | **string**|  | [optional]
 **customerNumber** | **string**|  | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unSynBindPosTest1**
UnSynBindPosTest1Response unSynBindPosTest1(UnSynBindPosTest1Request request)

代理商解绑接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Pos\PosClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Pos\Model\UnSynBindPosTest1Request();
$request->setPoscati("0000010484250011");
$request->setCustomerNumber("customerNumber_example");

try {
    $response = $api_client->unSynBindPosTest1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PosClient->unSynBindPosTest1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poscati** | **string**|  | [optional]
 **customerNumber** | **string**|  | [optional]

### Return type
**string**
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

