# Yeepay\Yop\Sdk\Cashier

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payLinkOrder**](Cashier.md#payLinkOrder) | **POST** /rest/v1.0/cashier/pay-link/order | 生成聚合订单码
[**unifiedOrder**](Cashier.md#unifiedOrder) | **POST** /rest/v1.0/cashier/unified/order | 收银台统一下单


# **payLinkOrder**
PayLinkOrderResponse payLinkOrder(PayLinkOrderRequest request)

生成聚合订单码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cashier\CashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setGoodsName("goodsName_example");
$request->setAmount(1.2);
$request->setExpiredTime("2026-04-13 10:38:31");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setScene("scene_example");
$request->setFundProcessType("fundProcessType_example");
$request->setAppId("appId_example");

try {
    $response = $api_client->payLinkOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CashierClient->payLinkOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **appId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderAggregationPayLinkResponseDTOResult**](../Model/PayLinkOrderAggregationPayLinkResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unifiedOrder**
UnifiedOrderResponse unifiedOrder(UnifiedOrderRequest request)

收银台统一下单

为商户提供收银台服务，支持多种支付方式。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cashier\CashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cashier\Model\UnifiedOrderRequest();
$request->setParentMerchantNo("10012426765");
$request->setMerchantNo("10012426765");
$request->setOrderId("ORDER202401010515217305372872");
$request->setOrderAmount(100.50);
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setExpiredTime("2026-04-13 10:38:31");
$request->setReturnUrl("https://notify.merchant.com/xxx");
$request->setCsNotifyUrl("csNotifyUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setPayerInfo("{\"bankCardNo\":\"6225750005882152077\",\"cardName\":\"爱丽丝\",\"idCardNo\":\"130225199006093323\",\"mobilePhoneNo\":\"13902092131\",\"userID\":\"200578\"}");
$request->setLimitPayType("YJZF,EBANK_B2B,BANK_TRANSFER_PAY");
$request->setCardType("DEBIT");
$request->setAggParam("{\"appId\":\"wx9e13bd68a8f1921e\",\"openId\":\"zml_wechat\",\"scene\":{\"WECHAT\":\"XIANXIA\",\"ALIPAY\":\"XIANXIA\"}}");
$request->setNoCardParam("{\"userNo\":\"111\",\"userType\":\"USER_ID\"}");
$request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
$request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
$request->setDivideNotifyUrl("divideNotifyUrl_example");
$request->setOtherTypeParam("{\"checkType\":\"ACCOUNTNO_BANK\",\"customerId\":\"请填客户号\",\"bankAccountNo\":\"请填银行账户号\"}");

try {
    $response = $api_client->unifiedOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CashierClient->unifiedOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **csNotifyUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **payerInfo** | **string**|  | [optional]
 **limitPayType** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **aggParam** | **string**|  | [optional]
 **noCardParam** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **divideDetail** | **string**|  | [optional]
 **divideNotifyUrl** | **string**|  | [optional]
 **otherTypeParam** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cashier\Model\UnifiedOrderUnifiedCashierOrderResponseDTOResult**](../Model/UnifiedOrderUnifiedCashierOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

