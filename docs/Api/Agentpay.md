# Yeepay\Yop\Sdk\Agentpay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**intentRegister**](Agentpay.md#intentRegister) | **POST** /rest/v1.0/agentpay/intent/register | 智能体支付意图注册
[**intent_register_v1**](Agentpay.md#intent_register_v1) | **POST** /rest/v1.0/agentpay/intent/register | 智能体支付意图注册


# **intentRegister**
IntentRegisterResponse intentRegister(IntentRegisterRequest request)

智能体支付意图注册



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Agentpay\AgentpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Agentpay\Model\IntentRegisterRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentReqDTO());

try {
    $response = $api_client->intentRegister($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgentpayClient->intentRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentReqDTO**](../Model/YPAgentPayIntentReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentResDTO**](../Model/YPAgentPayIntentResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **intent_register_v1**
IntentRegisterV1Response intent_register_v1(IntentRegisterV1Request request)

智能体支付意图注册



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Agentpay\AgentpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Agentpay\Model\IntentRegisterV1Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentReqDTO());

try {
    $response = $api_client->intent_register_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AgentpayClient->intent_register_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentReqDTO**](../Model/YPAgentPayIntentReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Agentpay\Model\YPAgentPayIntentResDTO**](../Model/YPAgentPayIntentResDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

