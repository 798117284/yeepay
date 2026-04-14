<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model as Model;

class FrontcashierClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = FrontcashierClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = FrontcashierClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 到账信息确认接口(/rest/v1.0/frontcashier/account-confirm)
     *
     * @test
     */
    public function accountConfirmTest()
    {
        $request = new Model\AccountConfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIOfflineTransferAccountInfoConfirmRequestDTO());
        try{
            $response = self::$client->accountConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->accountConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 到账信息确认接口(/rest/v1.0/frontcashier/account-confirm)
     *
     * @test
     */
    public function accountInfoConfirmTest()
    {
        $request = new Model\AccountInfoConfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIOfflineTransferAccountInfoConfirmRequestDTO());
        try{
            $response = self::$client->accountInfoConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->accountInfoConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 存量签约(/rest/v1.0/frontcashier/agreement/nosmsbind)
     *
     * @test
     */
    public function agreementNosmsbindTest()
    {
        $request = new Model\AgreementNosmsbindRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setUserName("userName_example");
        $request->setPhone("159****8288");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreementNosmsbind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->agreementNosmsbind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行转账支付(/rest/v1.0/frontcashier/bank-transfer/pay)
     *
     * @test
     */
    public function bankTransferPayTest()
    {
        $request = new Model\BankTransferPayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime("2026-04-13 10:38:29");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setCsUrl("csUrl_example");
        $request->setPayerAccountName("payerAccountName_example");
        $request->setCheckType("checkType_example");
        $request->setToken("token_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setCustomerId("customerId_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setAccountNotifyUrl("accountNotifyUrl_example");
        $request->setBusinessInfo("{\"userIp\":\"127.0.0.1\"}");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        try{
            $response = self::$client->bankTransferPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bankTransferPay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行转账支付(/rest/v1.1/frontcashier/bank-transfer/pay)
     *
     * @test
     */
    public function bankTransferPayV1_1Test()
    {
        $request = new Model\BankTransferPayV11Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCheckType("checkType_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setCsUrl("csUrl_example");
        $request->setPayerAccountName("payerAccountName_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setCustomerId("customerId_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setAccountNotifyUrl("accountNotifyUrl_example");
        $request->setBusinessInfo("{\"userIp\":\"127.0.0.1\"}");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        try{
            $response = self::$client->bankTransferPayV1_1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bankTransferPayV1_1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行转账查询(/rest/v1.0/frontcashier/bank-transfer/query)
     *
     * @test
     */
    public function bankTransferQueryTest()
    {
        $request = new Model\BankTransferQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->bankTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bankTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行转账支付(/rest/v1.1/frontcashier/bank-transfer/pay)
     *
     * @test
     */
    public function bank_transfer_pay_v1_1Test()
    {
        $request = new Model\BankTransferPayV11Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCheckType("checkType_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setCsUrl("csUrl_example");
        $request->setPayerAccountName("payerAccountName_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setCustomerId("customerId_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setAccountNotifyUrl("accountNotifyUrl_example");
        $request->setBusinessInfo("{\"userIp\":\"127.0.0.1\"}");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        try{
            $response = self::$client->bank_transfer_pay_v1_1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bank_transfer_pay_v1_1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询签约/绑卡列表(/rest/v1.0/frontcashier/bindcard/bindcardlist)
     *
     * @test
     */
    public function bindcardBindcardlistTest()
    {
        $request = new Model\BindcardBindcardlistRequest();

        $request->setMerchantNo("10012345677");
        $request->setUserNo("13508881234");
        $request->setUserType("USER_ID");
        $request->setBindId("bindId_example");
        try{
            $response = self::$client->bindcardBindcardlist($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardBindcardlist: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡-短验确认(/rest/v1.0/frontcashier/bindcard/confirm)
     *
     * @test
     */
    public function bindcardConfirmTest()
    {
        $request = new Model\BindcardConfirmRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setEmpower(true);
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->bindcardConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-短验确认(/rest/v2.0/frontcashier/bindcard/confirm)
     *
     * @test
     */
    public function bindcardConfirmV2Test()
    {
        $request = new Model\BindcardConfirmV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->bindcardConfirmV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardConfirmV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行卡卡bin识别(/rest/v1.0/frontcashier/bindcard/getcardbin)
     *
     * @test
     */
    public function bindcardGetcardbinTest()
    {
        $request = new Model\BindcardGetcardbinRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setBankCardNo("688888888888");
        $request->setCardType("cardType_example");
        try{
            $response = self::$client->bindcardGetcardbin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardGetcardbin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方签约(/rest/v1.0/frontcashier/bindcard/payerrequest)
     *
     * @test
     */
    public function bindcardPayerrequestTest()
    {
        $request = new Model\BindcardPayerrequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("10012426723");
        $request->setMerchantFlowId("order123456789");
        $request->setUserNo("yibao88");
        $request->setUserType("USER_ID");
        $request->setBankCardNo("688888888888");
        $request->setCardType("cardType_example");
        $request->setUserName("易小宝");
        $request->setIdCardNo("110101199008085638");
        $request->setIdCardType("ID");
        $request->setPhone("18888888888");
        $request->setCvv2("007");
        $request->setValidthru("0722");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setEmpower(true);
        $request->setAuthScene("UPOP_PAGEVERIFY");
        $request->setPageNotifyUrl("pageNotifyUrl_example");
        $request->setBindCallBackUrl("bindCallBackUrl_example");
        $request->setSendSms(true);
        $request->setSmsTemplateId("smsTemplateId_example");
        $request->setSmsInfo("smsInfo_example");
        try{
            $response = self::$client->bindcardPayerrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardPayerrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询签约/绑卡请求(/rest/v1.0/frontcashier/bindcard/queryorder)
     *
     * @test
     */
    public function bindcardQueryorderTest()
    {
        $request = new Model\BindcardQueryorderRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setNopOrderId("nopOrderId_example");
        $request->setPhone("phone_example");
        $request->setCardInfoEncryptType("cardInfoEncryptType_example");
        try{
            $response = self::$client->bindcardQueryorder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardQueryorder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约/绑卡订单查询(/rest/v1.0/frontcashier/bindcard/queryorderinfo)
     *
     * @test
     */
    public function bindcardQueryorderinfoTest()
    {
        $request = new Model\BindcardQueryorderinfoRequest();

        $request->setMerchantNo("10012426723");
        $request->setMerchantFlowId("order123456789");
        $request->setNopOrderId("NOP123456");
        try{
            $response = self::$client->bindcardQueryorderinfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardQueryorderinfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡-绑卡请求(/rest/v1.0/frontcashier/bindcard/request)
     *
     * @test
     */
    public function bindcardRequestTest()
    {
        $request = new Model\BindcardRequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setPhone("phone_example");
        $request->setCvv2("cvv2_example");
        $request->setValidthru("validthru_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setEmpower(true);
        $request->setCardType("cardType_example");
        $request->setIsSMS(true);
        try{
            $response = self::$client->bindcardRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-绑卡请求(/rest/v2.0/frontcashier/bindcard/request)
     *
     * @test
     */
    public function bindcardRequestV2Test()
    {
        $request = new Model\BindcardRequestV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setPhone("phone_example");
        $request->setCvv2("cvv2_example");
        $request->setValidthru("validthru_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setCardType("cardType_example");
        $request->setIsSMS("isSMS_example");
        try{
            $response = self::$client->bindcardRequestV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequestV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-绑卡请求(/rest/v2.1/frontcashier/bindcard/request)
     *
     * @test
     */
    public function bindcardRequestV2_1Test()
    {
        $request = new Model\BindcardRequestV21Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setPhone("phone_example");
        $request->setCvv2("cvv2_example");
        $request->setValidthru("validthru_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setCardType("cardType_example");
        $request->setIsSMS(true);
        try{
            $response = self::$client->bindcardRequestV2_1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequestV2_1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-绑卡请求（支持接口、跳页签约）(/rest/v2.2/frontcashier/bindcard/request)
     *
     * @test
     */
    public function bindcardRequestV2_2Test()
    {
        $request = new Model\BindcardRequestV22Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\AgreementBindCardRequestDTO());
        try{
            $response = self::$client->bindcardRequestV2_2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequestV2_2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡-短验重发(/rest/v1.0/frontcashier/bindcard/resendsms)
     *
     * @test
     */
    public function bindcardResendsmsTest()
    {
        $request = new Model\BindcardResendsmsRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        try{
            $response = self::$client->bindcardResendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardResendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-短验重发(/rest/v2.0/frontcashier/bindcard/resendsms)
     *
     * @test
     */
    public function bindcardResendsmsV2Test()
    {
        $request = new Model\BindcardResendsmsV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        try{
            $response = self::$client->bindcardResendsmsV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardResendsmsV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解绑银行卡(/rest/v1.0/frontcashier/bindcard/unbindcard)
     *
     * @test
     */
    public function bindcardUnbindcardTest()
    {
        $request = new Model\BindcardUnbindcardRequest();

        $request->setMerchantNo("10012426723");
        $request->setUserNo("654321");
        $request->setUserType("USER_ID");
        $request->setBindId("123456");
        $request->setBankCardNoFirst6("bankCardNoFirst6_example");
        $request->setBankCardNoLast4("bankCardNoLast4_example");
        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->bindcardUnbindcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardUnbindcard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 中台绑卡-绑卡请求（支持接口、跳页签约）(/rest/v2.2/frontcashier/bindcard/request)
     *
     * @test
     */
    public function bindcard_request_v2_2Test()
    {
        $request = new Model\BindcardRequestV22Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\AgreementBindCardRequestDTO());
        try{
            $response = self::$client->bindcard_request_v2_2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcard_request_v2_2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡支付-确认支付(/rest/v1.0/frontcashier/bindpay/confirm)
     *
     * @test
     */
    public function bindpayConfirmTest()
    {
        $request = new Model\BindpayConfirmRequest();

        $request->setToken("token_example");
        $request->setVersion("version_example");
        $request->setVerifyCode("verifyCode_example");
        $request->setOwner("易小宝");
        $request->setIdno("110105198806300001");
        $request->setPhoneNo("18500000007");
        $request->setAvlidDate("avlidDate_example");
        $request->setCvv2("cvv2_example");
        $request->setIdCardType("idCardType_example");
        $request->setBankPWD("bankPWD_example");
        try{
            $response = self::$client->bindpayConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpayConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡支付-支付下单(/rest/v1.0/frontcashier/bindpay/request)
     *
     * @test
     */
    public function bindpayRequestTest()
    {
        $request = new Model\BindpayRequestRequest();

        $request->setToken("token_example");
        $request->setBindId("bindId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setVersion("version_example");
        $request->setExtParamMap("extParamMap_example");
        $request->setPayMerchantNo("payMerchantNo_example");
        try{
            $response = self::$client->bindpayRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpayRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑卡支付-请求发短验(/rest/v1.0/frontcashier/bindpay/sendsms)
     *
     * @test
     */
    public function bindpaySendsmsTest()
    {
        $request = new Model\BindpaySendsmsRequest();

        $request->setToken("token_example");
        $request->setVersion("version_example");
        $request->setCardno("6222081205246222007");
        $request->setOwner("易小宝");
        $request->setIdno("110105198806300001");
        $request->setPhoneNo("18500000007");
        $request->setAvlidDate("0722");
        $request->setCvv2("007");
        $request->setIdCardType("ID");
        $request->setBankPWD("000007");
        try{
            $response = self::$client->bindpaySendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpaySendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询本人银行卡并签约绑卡(/rest/v1.0/frontcashier/fastbindcard/request)
     *
     * @test
     */
    public function fastbindcardRequestTest()
    {
        $request = new Model\FastbindcardRequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserName("userName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setCardType("cardType_example");
        $request->setPageReturnUrl("pageReturnUrl_example");
        $request->setBindNotifyUrl("bindNotifyUrl_example");
        $request->setPhone("phone_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setOrderValidate(56);
        try{
            $response = self::$client->fastbindcardRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->fastbindcardRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行卡bin识别(/rest/v1.0/frontcashier/getcardbin)
     *
     * @test
     */
    public function getcardbinTest()
    {
        $request = new Model\GetcardbinRequest();

        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->getcardbin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->getcardbin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方主扫下单(/rest/v1.0/frontcashier/upop/activescan/pay)
     *
     * @test
     */
    public function upopActivescanPayTest()
    {
        $request = new Model\UpopActivescanPayRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setPaySerialNo("paySerialNo_example");
        $request->setCouponSerialNo("couponSerialNo_example");
        $request->setTradeAmount(1.2);
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBindId(789);
        $request->setCallBackUrl("callBackUrl_example");
        $request->setPayComments("payComments_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setUsrRgstrDt("2026-04-13");
        $request->setAccountEmailLife("accountEmailLife_example");
        $request->setDeviceLocation("deviceLocation_example");
        $request->setFullDeviceNumber("fullDeviceNumber_example");
        $request->setCaptureMethod("captureMethod_example");
        $request->setDeviceSimNumber("deviceSimNumber_example");
        $request->setDeviceName("deviceName_example");
        try{
            $response = self::$client->upopActivescanPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanPay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【NOP】银联主扫查询优惠信息(/rest/v1.0/frontcashier/upop/activescan/querycoupon)
     *
     * @test
     */
    public function upopActivescanQuerycouponTest()
    {
        $request = new Model\UpopActivescanQuerycouponRequest();

        $request->setMerchantFlowId("221007104428249784269");
        $request->setPaySerialNo("paySerialNo_example");
        $request->setTradeAmount(1.2);
        $request->setBindId(123456);
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setRiskInfoDeviceID("riskInfoDeviceID_example");
        $request->setRiskInfoDeviceType("riskInfoDeviceType_example");
        $request->setRiskInfoAccountIDHash("riskInfoAccountIDHash_example");
        $request->setRiskInfoSourceIP("riskInfoSourceIP_example");
        try{
            $response = self::$client->upopActivescanQuerycoupon($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerycoupon: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 收款方订单信息查询(/rest/v1.0/frontcashier/upop/activescan/querypayeeorder)
     *
     * @test
     */
    public function upopActivescanQuerypayeeorderTest()
    {
        $request = new Model\UpopActivescanQuerypayeeorderRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setQrCode("qrCode_example");
        try{
            $response = self::$client->upopActivescanQuerypayeeorder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayeeorder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款订单状态查询(/rest/v1.0/frontcashier/upop/activescan/querypayresult)
     *
     * @test
     */
    public function upopActivescanQuerypayresultTest()
    {
        $request = new Model\UpopActivescanQuerypayresultRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultRequestDTOParam());
        try{
            $response = self::$client->upopActivescanQuerypayresult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayresult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方虚拟卡主扫下单(/rest/v1.0/frontcashier/upop/activescan/vcc/pay)
     *
     * @test
     */
    public function upopActivescanVccPayTest()
    {
        $request = new Model\UpopActivescanVccPayRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setCardNo("cardNo_example");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setTradeAmount(1.2);
        $request->setPaySerialNo("paySerialNo_example");
        $request->setPayComments("payComments_example");
        $request->setCallBackUrl("callBackUrl_example");
        $request->setCouponSerialNo("couponSerialNo_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setUsrRgstrDt("usrRgstrDt_example");
        $request->setAccountEmailLife("accountEmailLife_example");
        $request->setDeviceLocation("deviceLocation_example");
        $request->setFullDeviceNumber("fullDeviceNumber_example");
        $request->setCaptureMethod("captureMethod_example");
        $request->setDeviceSimNumber("deviceSimNumber_example");
        $request->setDeviceName("deviceName_example");
        $request->setRiskInfoMobile("riskInfoMobile_example");
        try{
            $response = self::$client->upopActivescanVccPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanVccPay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方被扫申码(/rest/v1.0/frontcashier/upop/passivescan/bind/qrcode)
     *
     * @test
     */
    public function upopPassivescanBindQrcodeTest()
    {
        $request = new Model\UpopPassivescanBindQrcodeRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setPinFreeAmount(1.2);
        $request->setMaxAmont(1.2);
        $request->setNotifyUrl("notifyUrl_example");
        $request->setValidNotifyUrl("validNotifyUrl_example");
        $request->setExpireTime(56);
        $request->setBindId(789);
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setCouponInfo("couponInfo_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setRiskInfoMobile("riskInfoMobile_example");
        $request->setUsrRgstrDt("usrRgstrDt_example");
        $request->setAccountEmailLife("accountEmailLife_example");
        $request->setDeviceLocation("deviceLocation_example");
        $request->setFullDeviceNumber("fullDeviceNumber_example");
        $request->setCaptureMethod("captureMethod_example");
        $request->setDeviceSimNumber("deviceSimNumber_example");
        $request->setDeviceName("deviceName_example");
        try{
            $response = self::$client->upopPassivescanBindQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopPassivescanBindQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方验密回调(/rest/v1.0/frontcashier/upop/passivescan/validate)
     *
     * @test
     */
    public function upopPassivescanValidateTest()
    {
        $request = new Model\UpopPassivescanValidateRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setPayOrderNo("payOrderNo_example");
        $request->setCouponInfo("couponInfo_example");
        $request->setRealTradeAmount(1.2);
        try{
            $response = self::$client->upopPassivescanValidate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopPassivescanValidate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方被扫虚拟卡申码(/rest/v1.0/frontcashier/upop/passivescan/vcc/qrcode)
     *
     * @test
     */
    public function upopPassivescanVccQrcodeTest()
    {
        $request = new Model\UpopPassivescanVccQrcodeRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setCardNo("cardNo_example");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setPinFreeAmount(1.2);
        $request->setMaxAmont(1.2);
        $request->setExpireTime(56);
        $request->setNotifyUrl("notifyUrl_example");
        $request->setValidNotifyUrl("validNotifyUrl_example");
        $request->setCouponInfo("couponInfo_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setRiskInfoMobile("riskInfoMobile_example");
        $request->setUsrRgstrDt(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->upopPassivescanVccQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopPassivescanVccQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方虚拟卡主扫下单(/rest/v1.0/frontcashier/upop/activescan/vcc/pay)
     *
     * @test
     */
    public function upop_activescan_vccTest()
    {
        $request = new Model\UpopActivescanVccRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setCardNo("cardNo_example");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setTradeAmount(1.2);
        $request->setPaySerialNo("paySerialNo_example");
        $request->setPayComments("payComments_example");
        $request->setCallBackUrl("callBackUrl_example");
        $request->setCouponSerialNo("couponSerialNo_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setUsrRgstrDt("usrRgstrDt_example");
        $request->setAccountEmailLife("accountEmailLife_example");
        $request->setDeviceLocation("deviceLocation_example");
        $request->setFullDeviceNumber("fullDeviceNumber_example");
        $request->setCaptureMethod("captureMethod_example");
        $request->setDeviceSimNumber("deviceSimNumber_example");
        $request->setDeviceName("deviceName_example");
        $request->setRiskInfoMobile("riskInfoMobile_example");
        try{
            $response = self::$client->upop_activescan_vcc($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upop_activescan_vcc: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方被扫虚拟卡申码(/rest/v1.0/frontcashier/upop/passivescan/vcc/qrcode)
     *
     * @test
     */
    public function upop_passivescan_vccTest()
    {
        $request = new Model\UpopPassivescanVccRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setCardNo("cardNo_example");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setPinFreeAmount(1.2);
        $request->setMaxAmont(1.2);
        $request->setExpireTime(56);
        $request->setNotifyUrl("notifyUrl_example");
        $request->setValidNotifyUrl("validNotifyUrl_example");
        $request->setCouponInfo("couponInfo_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setRiskInfoMobile("riskInfoMobile_example");
        $request->setUsrRgstrDt(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->upop_passivescan_vcc($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upop_passivescan_vcc: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 一键支付-二次支付下单(/rest/v1.0/frontcashier/yjzf/bindpayrequest)
     *
     * @test
     */
    public function yjzfBindpayrequestTest()
    {
        $request = new Model\YjzfBindpayrequestRequest();

        $request->setBindId("bindId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfBindpayrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfBindpayrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 一键支付-首次支付下单(/rest/v1.0/frontcashier/yjzf/firstpayrequest)
     *
     * @test
     */
    public function yjzfFirstpayrequestTest()
    {
        $request = new Model\YjzfFirstpayrequestRequest();

        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setCardNo("cardNo_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfFirstpayrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfFirstpayrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 一键支付-确认支付(/rest/v1.0/frontcashier/yjzf/paymentconfirm)
     *
     * @test
     */
    public function yjzfPaymentconfirmTest()
    {
        $request = new Model\YjzfPaymentconfirmRequest();

        $request->setRecordId("recordId_example");
        $request->setVerifyCode("verifyCode_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setBankPWD("bankPWD_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfPaymentconfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfPaymentconfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 一键支付-请求发验证码(/rest/v1.0/frontcashier/yjzf/sendsms)
     *
     * @test
     */
    public function yjzfSendsmsTest()
    {
        $request = new Model\YjzfSendsmsRequest();

        $request->setRecordId("recordId_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setBankPWD("bankPWD_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfSendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfSendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
}
