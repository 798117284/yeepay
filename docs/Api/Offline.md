# Yeepay\Yop\Sdk\Offline

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bind**](Offline.md#bind) | **POST** /rest/v1.0/offline/bind | 绑机
[**createAuxiliaryTerminal**](Offline.md#createAuxiliaryTerminal) | **POST** /rest/v1.0/offline/create-auxiliary-terminal | 新增辅助终端信息
[**createQrCode**](Offline.md#createQrCode) | **POST** /rest/v1.0/offline/create-qrcode | 生成台牌
[**createQrcode**](Offline.md#createQrcode) | **POST** /rest/v1.0/offline/create-qrcode | 生成台牌
[**createShop**](Offline.md#createShop) | **POST** /rest/v1.0/offline/create-shop | 创建门店
[**downloadQrCode**](Offline.md#downloadQrCode) | **POST** /rest/v1.0/offline/download-qrcode | 下载台牌
[**downloadQrcode**](Offline.md#downloadQrcode) | **POST** /rest/v1.0/offline/download-qrcode | 下载台牌
[**getShop**](Offline.md#getShop) | **GET** /rest/v1.0/offline/get-shop | 查询门店
[**openQrCode**](Offline.md#openQrCode) | **POST** /rest/v1.0/offline/open-qrcode | 台牌绑定商户和网点
[**openQrcode**](Offline.md#openQrcode) | **POST** /rest/v1.0/offline/open-qrcode | 台牌绑定商户和网点
[**operateShop**](Offline.md#operateShop) | **POST** /rest/v1.0/offline/operate-shop | 关闭/启用门店
[**queryAgentList**](Offline.md#queryAgentList) | **GET** /rest/v1.0/offline/query-agent-list | 查询采购关系
[**queryAuxiliaryTerminal**](Offline.md#queryAuxiliaryTerminal) | **GET** /rest/v1.0/offline/query-auxiliary-terminal | 查询辅助终端信息
[**queryFanKeAccessToken**](Offline.md#queryFanKeAccessToken) | **POST** /rest/v1.0/offline/query-fanke-access-token | 查询凡科AccessToken
[**queryFankeAccessToken**](Offline.md#queryFankeAccessToken) | **POST** /rest/v1.0/offline/query-fanke-access-token | 查询凡科AccessToken
[**queryOrderInfo**](Offline.md#queryOrderInfo) | **POST** /rest/v1.0/offline/query-order-info | 查询POS交易信息
[**queryPosTrxInfo**](Offline.md#queryPosTrxInfo) | **POST** /rest/v1.0/offline/query-order-info | 查询POS交易信息
[**queryQrCodeList**](Offline.md#queryQrCodeList) | **GET** /rest/v1.0/offline/query-qrcode-list | 查询台牌列表
[**queryQrcodeList**](Offline.md#queryQrcodeList) | **GET** /rest/v1.0/offline/query-qrcode-list | 查询台牌列表
[**queryShopBindList**](Offline.md#queryShopBindList) | **GET** /rest/v1.0/offline/query-shop-bind-list | 查询绑机关系
[**relateBroadcastDevice**](Offline.md#relateBroadcastDevice) | **POST** /rest/v1.0/offline/relate-broadcast-device | 台牌关联播报设备
[**saveTerminalEmployee**](Offline.md#saveTerminalEmployee) | **POST** /rest/v1.0/offline/save-terminal-employee | 新增或修改操作员
[**unbind**](Offline.md#unbind) | **POST** /rest/v1.0/offline/unbind | 解绑
[**unbindQrCode**](Offline.md#unbindQrCode) | **POST** /rest/v1.0/offline/unbind-qrcode | 台牌解绑商户和网点
[**unbindQrcode**](Offline.md#unbindQrcode) | **POST** /rest/v1.0/offline/unbind-qrcode | 台牌解绑商户和网点
[**updateAuxiliaryTerminal**](Offline.md#updateAuxiliaryTerminal) | **POST** /rest/v1.0/offline/update-auxiliary-terminal | 修改辅助终端信息
[**updateQrCfg**](Offline.md#updateQrCfg) | **POST** /rest/v1.0/offline/update-qr-cfg | 更新台牌备注和台牌简称
[**updateQrCodeStatus**](Offline.md#updateQrCodeStatus) | **POST** /rest/v1.0/offline/update-qrcode-status | 修改台牌状态
[**updateQrcodeStatus**](Offline.md#updateQrcodeStatus) | **POST** /rest/v1.0/offline/update-qrcode-status | 修改台牌状态
[**updateShop**](Offline.md#updateShop) | **POST** /rest/v1.0/offline/update-shop | 修改门店信息
[**updateTerminalEmployee**](Offline.md#updateTerminalEmployee) | **POST** /rest/v1.0/offline/update-terminal-employee | 修改操作员密码


# **bind**
BindResponse bind(BindRequest request)

绑机

此接口提供给商户调用，用于终端绑机。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\BindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto());

try {
    $response = $api_client->bind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->bind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto**](../Model/YopBindTerminalRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalResponseDto**](../Model/YopBindTerminalResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **createAuxiliaryTerminal**
CreateAuxiliaryTerminalResponse createAuxiliaryTerminal(CreateAuxiliaryTerminalRequest request)

新增辅助终端信息

YOP辅助终端信息新增

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\CreateAuxiliaryTerminalRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSerialNo("serialNo_example");
$request->setShopNo("123122809003044");
$request->setTerminalName("terminalName_example");
$request->setTerminalType("terminalType_example");
$request->setCustomerTerminalNo("customerTerminalNo_example");
$request->setTerminalAddress("terminalAddress_example");
$request->setIsReport(true);

try {
    $response = $api_client->createAuxiliaryTerminal($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->createAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **serialNo** | **string**|  | [optional]
 **shopNo** | **string**|  | [optional]
 **terminalName** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **customerTerminalNo** | **string**|  | [optional]
 **terminalAddress** | **string**|  | [optional]
 **isReport** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\CreateAuxiliaryTerminalRespDTO**](../Model/CreateAuxiliaryTerminalRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **createQrCode**
CreateQrCodeResponse createQrCode(CreateQrCodeRequest request)

生成台牌

生成台牌

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\CreateQrCodeRequest();
$request->setCount(56);
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->createQrCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->createQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateQrCodeRespDTO**](../Model/YopCreateQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **createQrcode**
CreateQrcodeResponse createQrcode(CreateQrcodeRequest request)

生成台牌

生成台牌

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\CreateQrcodeRequest();
$request->setCount(56);
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->createQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->createQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateQrCodeRespDTO**](../Model/YopCreateQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **createShop**
CreateShopResponse createShop(CreateShopRequest request)

创建门店

此接口提供给商户调用，用于创建门店。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\CreateShopRequest();
$request->setAddress("address_example");
$request->setProvince("province_example");
$request->setCity("city_example");
$request->setDistrict("district_example");
$request->setMobile("mobile_example");
$request->setShopName("shopName_example");
$request->setLinkman("linkman_example");
$request->setMerchantNo("merchantNo_example");
$request->setCustomizeShopNo("customizeShopNo_example");
$request->setRealShop(true);

try {
    $response = $api_client->createShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->createShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  | [optional]
 **province** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **district** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **shopName** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **customizeShopNo** | **string**|  | [optional]
 **realShop** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateShopRspDTO**](../Model/YopCreateShopRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **downloadQrCode**
DownloadQrCodeResponse downloadQrCode(DownloadQrCodeRequest request)

下载台牌

下载台牌

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\DownloadQrCodeRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->downloadQrCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->downloadQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopDownloadQrCodeRspDTO**](../Model/YopDownloadQrCodeRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **downloadQrcode**
DownloadQrcodeResponse downloadQrcode(DownloadQrcodeRequest request)

下载台牌

下载台牌

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\DownloadQrcodeRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->downloadQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->downloadQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopDownloadQrCodeRspDTO**](../Model/YopDownloadQrCodeRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getShop**
GetShopResponse getShop(GetShopRequest request)

查询门店

此接口提供给商户调用，用于查询门店。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\GetShopRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setShopName("shopName_example");
$request->setShopNo("shopNo_example");
$request->setStatus("status_example");

try {
    $response = $api_client->getShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->getShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div&gt;发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; |
 **merchantNo** | **string**| &lt;pre&gt;收单商编&lt;/pre&gt; |
 **shopName** | **string**| &lt;pre&gt;门店名称&lt;/pre&gt; | [optional]
 **shopNo** | **string**| &lt;pre&gt;门店编号&lt;/pre&gt; | [optional]
 **status** | **string**| &lt;pre&gt;&amp;nbsp;&lt;/pre&gt; &lt;div&gt;门店状态：&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;枚举&lt;/span&gt;值：&lt;/span&gt;&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;7\&quot;&gt;&lt;em&gt;PERMIT&lt;/em&gt;：&lt;em&gt;活跃&lt;/em&gt;&lt;/span&gt;&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;9\&quot;&gt;&lt;em&gt;FORBID&lt;/em&gt;：&lt;em&gt;关闭&lt;/em&gt;&lt;/span&gt;&lt;/div&gt; &lt;pre&gt;&amp;nbsp;&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopGetShopRspDTO**](../Model/YopGetShopRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **openQrCode**
OpenQrCodeResponse openQrCode(OpenQrCodeRequest request)

台牌绑定商户和网点

台牌绑定商户和网点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\OpenQrCodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());

try {
    $response = $api_client->openQrCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->openQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO**](../Model/YopOpenQrCodeReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeRespDTO**](../Model/YopOpenQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openQrcode**
OpenQrcodeResponse openQrcode(OpenQrcodeRequest request)

台牌绑定商户和网点

台牌绑定商户和网点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\OpenQrcodeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());

try {
    $response = $api_client->openQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->openQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO**](../Model/YopOpenQrCodeReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeRespDTO**](../Model/YopOpenQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **operateShop**
OperateShopResponse operateShop(OperateShopRequest request)

关闭/启用门店

此接口提供给商户调用，用于关闭/启用门店。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\OperateShopRequest();
$request->setOperateType("operateType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShopNo("shopNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->operateShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->operateShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **shopNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBaseRspDTO**](../Model/YopBaseRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryAgentList**
QueryAgentListResponse queryAgentList(QueryAgentListRequest request)

查询采购关系

查询采购商已采购（购买）的终端。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryAgentListRequest();
$request->setAgentMerchantNo("agentMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTerminalNo("terminalNo_example");
$request->setSerialNo("serialNo_example");

try {
    $response = $api_client->queryAgentList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryAgentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentMerchantNo** | **string**| &lt;div&gt;采购商商编，指付款采购终端的商编&lt;/div&gt; |
 **parentMerchantNo** | **string**| &lt;div&gt;采购商上级商户编号 *标准商户收付款方案中此参数与代理商商户编号一致；*平台商户收付款方案中此参数为平台商商编；*服务商解决方案中，①采购商为标准商户时，该参数为标准商户商编 ②采购商为平台商收款或平台商入驻时，该参数为平台商商编&lt;/div&gt; |
 **terminalNo** | **string**| &lt;pre&gt;终端号&lt;/pre&gt; | [optional]
 **serialNo** | **string**| &lt;pre&gt;终端序列号&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryAgentRspDto**](../Model/YopQueryAgentRspDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryAuxiliaryTerminal**
QueryAuxiliaryTerminalResponse queryAuxiliaryTerminal(QueryAuxiliaryTerminalRequest request)

查询辅助终端信息

YOP辅助终端信息获取

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryAuxiliaryTerminalRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShop("shop_example");
$request->setTerminalNo("terminalNo_example");
$request->setCustomerTerminalNo("customerTerminalNo_example");
$request->setSerialNo("serialNo_example");

try {
    $response = $api_client->queryAuxiliaryTerminal($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Gi9fdy6lvoR50HxtBsrcdjQvnBd\&quot;&gt;收单商编&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-Sv54dhv19o0JzKx7PALcvBi2nqf\&quot;&gt;商编不能超过32位&lt;/div&gt; &lt;/div&gt; |
 **parentMerchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MhYcdK4MIoU3VAxtDD0cHeBQnKc\&quot;&gt; &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-NDE1dtQ1Joi86Jxda7QcMVkKnAe\&quot;&gt;采购商编&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt; | [optional]
 **shop** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BunFdCaPjoJpRhxTYC8cEASwnGe\&quot;&gt;网点编号&lt;/div&gt; &lt;/div&gt; | [optional]
 **terminalNo** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-IKwwdXvElolBq2xty5McIwNZnld\&quot;&gt;易宝终端号&lt;/div&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-BUKUdvhhEoBXdBxKvTScrGM3n6f\&quot;&gt;新增时易宝返回的唯一终端号&lt;/div&gt; &lt;/div&gt; | [optional]
 **customerTerminalNo** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-F0G3dI2pyoykomxLAwacM7conOe\&quot;&gt;自定义终端号&lt;/div&gt; &lt;/div&gt; | [optional]
 **serialNo** | **string**| &lt;div data-page-id&#x3D;\&quot;CR56dvi4IoXUwqxNtKzc9LGNn8c\&quot; data-lark-html-role&#x3D;\&quot;root\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-MhYcdK4MIoU3VAxtDD0cHeBQnKc\&quot;&gt;终端序列号&lt;/div&gt; &lt;/div&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\QueryAuxiliaryTerminalRespDTO**](../Model/QueryAuxiliaryTerminalRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryFanKeAccessToken**
QueryFanKeAccessTokenResponse queryFanKeAccessToken(QueryFanKeAccessTokenRequest request)

查询凡科AccessToken



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryFanKeAccessTokenRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->queryFanKeAccessToken($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryFanKeAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryFanKeTokenRspDTO**](../Model/YopQueryFanKeTokenRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryFankeAccessToken**
QueryFankeAccessTokenResponse queryFankeAccessToken(QueryFankeAccessTokenRequest request)

查询凡科AccessToken



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryFankeAccessTokenRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->queryFankeAccessToken($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryFankeAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryFanKeTokenRspDTO**](../Model/YopQueryFanKeTokenRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryOrderInfo**
QueryOrderInfoResponse queryOrderInfo(QueryOrderInfoRequest request)

查询POS交易信息

根据商编和商户订单号查询POS交易信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryOrderInfoRequest();
$request->setOrderId("customerReNo1666686514009");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryOrderInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryOrderInfoRespDTO**](../Model/YopQueryOrderInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryPosTrxInfo**
QueryPosTrxInfoResponse queryPosTrxInfo(QueryPosTrxInfoRequest request)

查询POS交易信息

根据商编和商户订单号查询POS交易信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryPosTrxInfoRequest();
$request->setOrderId("customerReNo1666686514009");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryPosTrxInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryPosTrxInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryOrderInfoRespDTO**](../Model/YopQueryOrderInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryQrCodeList**
QueryQrCodeListResponse queryQrCodeList(QueryQrCodeListRequest request)

查询台牌列表

查询台牌列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryQrCodeListRequest();
$request->setPageNo(56);
$request->setPageSize(56);
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setQrCodeNo("qrCodeNo_example");
$request->setShopNo("shopNo_example");
$request->setBindStatus("bindStatus_example");
$request->setMerchantNo("merchantNo_example");
$request->setStatus("status_example");

try {
    $response = $api_client->queryQrCodeList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryQrCodeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNo** | **int**| &lt;p&gt;页码&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;每页条数&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;采购商编，记录在易宝生成台牌的商编，该商编对台牌有管理权限&lt;/span&gt;&lt;/div&gt; |
 **qrCodeNo** | **string**| &lt;pre&gt;台牌序列号&lt;/pre&gt; | [optional]
 **shopNo** | **string**| &lt;pre&gt;网点编号&lt;/pre&gt; | [optional]
 **bindStatus** | **string**| &lt;pre&gt;绑定状态&lt;/pre&gt; | [optional]
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;绑定台牌真实收款的商编，该商编对台牌有使用权限&lt;/span&gt;&lt;/div&gt; | [optional]
 **status** | **string**| &lt;pre&gt;状态&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryQrCodeRespDTO**](../Model/YopQueryQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryQrcodeList**
QueryQrcodeListResponse queryQrcodeList(QueryQrcodeListRequest request)

查询台牌列表

查询台牌列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryQrcodeListRequest();
$request->setPageNo(56);
$request->setPageSize(56);
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setQrCodeNo("qrCodeNo_example");
$request->setShopNo("shopNo_example");
$request->setBindStatus("bindStatus_example");
$request->setMerchantNo("merchantNo_example");
$request->setStatus("status_example");

try {
    $response = $api_client->queryQrcodeList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryQrcodeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNo** | **int**| &lt;p&gt;页码&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;每页条数&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;采购商编，记录在易宝生成台牌的商编，该商编对台牌有管理权限&lt;/span&gt;&lt;/div&gt; |
 **qrCodeNo** | **string**| &lt;pre&gt;台牌序列号&lt;/pre&gt; | [optional]
 **shopNo** | **string**| &lt;pre&gt;网点编号&lt;/pre&gt; | [optional]
 **bindStatus** | **string**| &lt;pre&gt;绑定状态&lt;/pre&gt; | [optional]
 **merchantNo** | **string**| &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot;&gt;绑定台牌真实收款的商编，该商编对台牌有使用权限&lt;/span&gt;&lt;/div&gt; | [optional]
 **status** | **string**| &lt;pre&gt;状态&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryQrCodeRespDTO**](../Model/YopQueryQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryShopBindList**
QueryShopBindListResponse queryShopBindList(QueryShopBindListRequest request)

查询绑机关系

此接口提供给商户调用，用于查询已绑定的终端信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryShopBindListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setShopNo("shopNo_example");
$request->setTerminalType("POS");

try {
    $response = $api_client->queryShopBindList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryShopBindList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div&gt;发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; |
 **merchantNo** | **string**| &lt;pre&gt;收单商编&lt;/pre&gt; |
 **shopNo** | **string**| &lt;pre&gt;网点编号&lt;/pre&gt; | [optional]
 **terminalType** | **string**| &lt;p&gt;QRCODE（台牌）、POS（pos终端）、CLOUD_SPEAKER（云喇叭）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryShopBindRspDto**](../Model/YopQueryShopBindRspDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **relateBroadcastDevice**
RelateBroadcastDeviceResponse relateBroadcastDevice(RelateBroadcastDeviceRequest request)

台牌关联播报设备

台牌关联播报设备

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\RelateBroadcastDeviceRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setOperateType("operateType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSerialNo("serialNo_example");

try {
    $response = $api_client->relateBroadcastDevice($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->relateBroadcastDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **serialNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopRelateBroadcastDeviceRspDTO**](../Model/YopRelateBroadcastDeviceRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **saveTerminalEmployee**
SaveTerminalEmployeeResponse saveTerminalEmployee(SaveTerminalEmployeeRequest request)

新增或修改操作员

新增或修改操作员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\SaveTerminalEmployeeRequest();
$request->setEmployeeName("employeeName_example");
$request->setPassword("password_example");
$request->setOperatorType("operatorType_example");
$request->setEmployeeNo("employeeNo_example");
$request->setEmployeeStatus("employeeStatus_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->saveTerminalEmployee($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->saveTerminalEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employeeName** | **string**|  | [optional]
 **password** | **string**|  | [optional]
 **operatorType** | **string**|  | [optional]
 **employeeNo** | **string**|  | [optional]
 **employeeStatus** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\SaveTerminalEmployeeRespDTO**](../Model/SaveTerminalEmployeeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unbind**
UnbindResponse unbind(UnbindRequest request)

解绑

此接口提供给商户调用，用于终端解绑。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UnbindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto());

try {
    $response = $api_client->unbind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->unbind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto**](../Model/YopUnBindTerminalRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalResponseDto**](../Model/YopUnBindTerminalResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **unbindQrCode**
UnbindQrCodeResponse unbindQrCode(UnbindQrCodeRequest request)

台牌解绑商户和网点

台牌解绑商户和网点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UnbindQrCodeRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->unbindQrCode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->unbindQrCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnbindQrCodeRspDTO**](../Model/YopUnbindQrCodeRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unbindQrcode**
UnbindQrcodeResponse unbindQrcode(UnbindQrcodeRequest request)

台牌解绑商户和网点

台牌解绑商户和网点

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UnbindQrcodeRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->unbindQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->unbindQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnbindQrCodeRspDTO**](../Model/YopUnbindQrCodeRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateAuxiliaryTerminal**
UpdateAuxiliaryTerminalResponse updateAuxiliaryTerminal(UpdateAuxiliaryTerminalRequest request)

修改辅助终端信息

YOP辅助终端信息修改

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateAuxiliaryTerminalRequest();
$request->setMerchantNo("merchantNo_example");
$request->setSerialNo("serialNo_example");
$request->setTerminalName("terminalName_example");
$request->setCustomerTerminalNo("customerTerminalNo_example");
$request->setTerminalAddress("terminalAddress_example");
$request->setIsReport(true);

try {
    $response = $api_client->updateAuxiliaryTerminal($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **serialNo** | **string**|  | [optional]
 **terminalName** | **string**|  | [optional]
 **customerTerminalNo** | **string**|  | [optional]
 **terminalAddress** | **string**|  | [optional]
 **isReport** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\UpdateAuxiliaryTerminalRespDTO**](../Model/UpdateAuxiliaryTerminalRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateQrCfg**
UpdateQrCfgResponse updateQrCfg(UpdateQrCfgRequest request)

更新台牌备注和台牌简称

更新台牌备注和台牌简称

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateQrCfgRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeCfgReqDTO());

try {
    $response = $api_client->updateQrCfg($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateQrCfg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeCfgReqDTO**](../Model/YopUpdateQrCodeCfgReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeRespDTO**](../Model/YopOpenQrCodeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **updateQrCodeStatus**
UpdateQrCodeStatusResponse updateQrCodeStatus(UpdateQrCodeStatusRequest request)

修改台牌状态

修改台牌状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateQrCodeStatusRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setOperateType("operateType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->updateQrCodeStatus($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateQrCodeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeStatusRspDTO**](../Model/YopUpdateQrCodeStatusRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateQrcodeStatus**
UpdateQrcodeStatusResponse updateQrcodeStatus(UpdateQrcodeStatusRequest request)

修改台牌状态

修改台牌状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateQrcodeStatusRequest();
$request->setQrCodeNo("qrCodeNo_example");
$request->setOperateType("operateType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->updateQrcodeStatus($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateQrcodeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qrCodeNo** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeStatusRspDTO**](../Model/YopUpdateQrCodeStatusRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateShop**
UpdateShopResponse updateShop(UpdateShopRequest request)

修改门店信息

此接口提供给商户调用，用于修改门店，只支持修改联系人、手机号码和网点地址。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateShopRequest();
$request->setAddress("address_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShopNo("shopNo_example");
$request->setLinkman("linkman_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->updateShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **shopNo** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBaseRspDTO**](../Model/YopBaseRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **updateTerminalEmployee**
UpdateTerminalEmployeeResponse updateTerminalEmployee(UpdateTerminalEmployeeRequest request)

修改操作员密码

修改操作员密码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateTerminalEmployeeRequest();
$request->setResetPassword(56);
$request->setPassword("password_example");
$request->setOldPassword("oldPassword_example");
$request->setEmployeeNo("employeeNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->updateTerminalEmployee($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateTerminalEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resetPassword** | **int**|  | [optional]
 **password** | **string**|  | [optional]
 **oldPassword** | **string**|  | [optional]
 **employeeNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\UpdateTerminalEmployeeRespDTO**](../Model/UpdateTerminalEmployeeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

