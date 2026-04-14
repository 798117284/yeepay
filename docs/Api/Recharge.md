# Yeepay\Yop\Sdk\Recharge

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountQuery**](Recharge.md#bankAccountQuery) | **GET** /rest/v1.0/recharge/bank-account/query | 银行账户查询余额
[**bank_account_query_v1_0**](Recharge.md#bank_account_query_v1_0) | **GET** /rest/v1.0/recharge/bank-account/query | 银行账户查询余额


# **bankAccountQuery**
BankAccountQueryResponse bankAccountQuery(BankAccountQueryRequest request)

银行账户查询余额



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Recharge\RechargeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Recharge\Model\BankAccountQueryRequest();
$request->setBankCode("bankCode_example");
$request->setAccountNo("accountNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->bankAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RechargeClient->bankAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCode** | **string**| &lt;p&gt;可选项如下:&lt;br /&gt;FJHTB&lt;br /&gt;XIB&lt;br /&gt;WHZBB&lt;br /&gt;XWB&lt;br /&gt;HXBXB&lt;br /&gt;SUNINGBANK&lt;br /&gt;WHLHB&lt;/p&gt; |
 **accountNo** | **string**| &lt;p&gt;账号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;需查询余额的银行账号对应的易宝商编&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为服务商商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Recharge\Model\QueryBankAccountRespDTO**](../Model/QueryBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_v1_0**
BankAccountQueryV10Response bank_account_query_v1_0(BankAccountQueryV10Request request)

银行账户查询余额



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Recharge\RechargeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Recharge\Model\BankAccountQueryV10Request();
$request->setBankCode("bankCode_example");
$request->setAccountNo("accountNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->bank_account_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling RechargeClient->bank_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCode** | **string**| &lt;p&gt;可选项如下:&lt;br /&gt;FJHTB&lt;br /&gt;XIB&lt;br /&gt;WHZBB&lt;br /&gt;XWB&lt;br /&gt;HXBXB&lt;br /&gt;SUNINGBANK&lt;br /&gt;WHLHB&lt;/p&gt; |
 **accountNo** | **string**| &lt;p&gt;账号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;需查询余额的银行账号对应的易宝商编&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br /&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br /&gt;*服务商解决方案中，①标准商户收款时，该参数为服务商商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Recharge\Model\QueryBankAccountRespDTO**](../Model/QueryBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

