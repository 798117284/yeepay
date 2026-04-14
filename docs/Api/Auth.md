# Yeepay\Yop\Sdk\Auth

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eNTERPRISE_AUTH**](Auth.md#eNTERPRISE_AUTH) | **POST** /rest/v1.0/auth/enterprise/auth | 企业信息认证
[**enterpriseAuth**](Auth.md#enterpriseAuth) | **POST** /rest/v1.0/auth/enterprise/auth | 企业信息认证
[**faceAuth**](Auth.md#faceAuth) | **POST** /rest/v1.0/auth/face-auth | 人脸核验
[**faceAuthKyc**](Auth.md#faceAuthKyc) | **POST** /rest/v1.0/auth/face-auth-kyc | 身份核验
[**faceAuthKycQuery**](Auth.md#faceAuthKycQuery) | **GET** /rest/v1.0/auth/face-auth-kyc-query | 身份核验结果查询
[**faceAuthResultQuery**](Auth.md#faceAuthResultQuery) | **GET** /rest/v1.0/auth/face-auth-result-query | 人脸核验结果查询
[**multipleAuth**](Auth.md#multipleAuth) | **POST** /rest/v1.0/auth/multiple-auth | 新信息认证
[**pERSONAL_INFORMATION_AUTH**](Auth.md#pERSONAL_INFORMATION_AUTH) | **POST** /rest/v1.0/auth/person/auth | 个人信息认证
[**personAuth**](Auth.md#personAuth) | **POST** /rest/v1.0/auth/person/auth | 个人信息认证
[**personQuery**](Auth.md#personQuery) | **GET** /rest/v1.0/auth/person/query | 查询认证结果


# **eNTERPRISE_AUTH**
ENTERPRISEAUTHResponse eNTERPRISE_AUTH(ENTERPRISEAUTHRequest request)

企业信息认证



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\ENTERPRISEAUTHRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO());

try {
    $response = $api_client->eNTERPRISE_AUTH($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->eNTERPRISE_AUTH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO**](../Model/EnterpriseAuthRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthResponseDTO**](../Model/EnterpriseAuthResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAuth**
EnterpriseAuthResponse enterpriseAuth(EnterpriseAuthRequest request)

企业信息认证



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO());

try {
    $response = $api_client->enterpriseAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->enterpriseAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO**](../Model/EnterpriseAuthRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthResponseDTO**](../Model/EnterpriseAuthResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **faceAuth**
FaceAuthResponse faceAuth(FaceAuthRequest request)

人脸核验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthRequest();
$request->setRequestNo("REQ6437657876");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345679");
$request->setName("张三");
$request->setCardNo("cardNo_example");
$request->setCardType("cardType_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setExtraData("extraData_example");

try {
    $response = $api_client->faceAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **extraData** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthFaceAuthResponseDTOResult**](../Model/FaceAuthFaceAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthKyc**
FaceAuthKycResponse faceAuthKyc(FaceAuthKycRequest request)

身份核验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycRequest();
$request->setRequestNo("REQ6437657876");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345679");
$request->setName("张三");
$request->setCardNo("cardNo_example");
$request->setCardType("cardType_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setExtraData("extraData_example");

try {
    $response = $api_client->faceAuthKyc($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthKyc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **extraData** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycFaceAuthResponseDTOResult**](../Model/FaceAuthKycFaceAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthKycQuery**
FaceAuthKycQueryResponse faceAuthKycQuery(FaceAuthKycQueryRequest request)

身份核验结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->faceAuthKycQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthKycQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult**](../Model/FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **faceAuthResultQuery**
FaceAuthResultQueryResponse faceAuthResultQuery(FaceAuthResultQueryRequest request)

人脸核验结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthResultQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->faceAuthResultQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->faceAuthResultQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult**](../Model/FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **multipleAuth**
MultipleAuthResponse multipleAuth(MultipleAuthRequest request)

新信息认证



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\MultipleAuthRequest();
$request->setMerchantNo("100000000000");
$request->setAuthType("authType_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardNo("230231199510101010");
$request->setUsername("易小宝");
$request->setBankCardNo("6217876555556554324");
$request->setRemark("remark_example");
$request->setMobile("mobile_example");
$request->setIdCardType("idCardType_example");
$request->setClientSource("clientSource_example");
$request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");

try {
    $response = $api_client->multipleAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->multipleAuth: ', $e->getMessage(), PHP_EOL;
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
 **username** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **clientSource** | **string**|  | [optional]
 **extMap** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\MultipleAuthAuthResponseDTOResult**](../Model/MultipleAuthAuthResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pERSONAL_INFORMATION_AUTH**
PERSONALINFORMATIONAUTHResponse pERSONAL_INFORMATION_AUTH(PERSONALINFORMATIONAUTHRequest request)

个人信息认证

指个人信息项是否一致的认证,包括:个人身份信息二要素、个人银行卡二要素、个人银行卡三要素、个人银行卡四要素、个人银行卡五要素认证、运营商认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\PERSONALINFORMATIONAUTHRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardType("idCardType_example");
$request->setIdCardNo("idCardNo_example");
$request->setName("name_example");
$request->setMobile("mobile_example");
$request->setBankCardNo("bankCardNo_example");
$request->setAccountLevel("accountLevel_example");
$request->setAuthType("authType_example");

try {
    $response = $api_client->pERSONAL_INFORMATION_AUTH($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->pERSONAL_INFORMATION_AUTH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **accountLevel** | **string**|  | [optional]
 **authType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\PersonalInformationAuthResponseDTO**](../Model/PersonalInformationAuthResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **personAuth**
PersonAuthResponse personAuth(PersonAuthRequest request)

个人信息认证

指个人信息项是否一致的认证,包括:个人身份信息二要素、个人银行卡二要素、个人银行卡三要素、个人银行卡四要素、个人银行卡五要素认证、运营商认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\PersonAuthRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setIdCardType("idCardType_example");
$request->setIdCardNo("idCardNo_example");
$request->setName("name_example");
$request->setMobile("mobile_example");
$request->setBankCardNo("bankCardNo_example");
$request->setAccountLevel("accountLevel_example");
$request->setAuthType("authType_example");

try {
    $response = $api_client->personAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->personAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **accountLevel** | **string**|  | [optional]
 **authType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\PersonalInformationAuthResponseDTO**](../Model/PersonalInformationAuthResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **personQuery**
PersonQueryResponse personQuery(PersonQueryRequest request)

查询认证结果

通过认证查询接口,可查询个人身份信息二要素、个人银行卡二要素、个人银行卡三要素、个人银行卡四要素、个人银行卡五要素认证、运营商认证接口的认证结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Auth\AuthClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Auth\Model\PersonQueryRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setRequestNo("YB113202411291827514720558981");
$request->setYbOrderId("CFC10000001");

try {
    $response = $api_client->personQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AuthClient->personQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;父商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;子商编&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;/p&gt; | [optional]
 **ybOrderId** | **string**| &lt;p&gt;易宝流水号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Auth\Model\AuthOrderQueryResponseDTO**](../Model/AuthOrderQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

