<?php


namespace Yeepay\Yop\Sdk\Service\MWallet;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MWallet\Model as Model;

class MWalletClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = MWalletClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = MWalletClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 开立钱包账户(支持人脸识别)(/rest/v1.0/m-wallet/account/face-certify-open)
     *
     * @test
     */
    public function accountFaceCertifyOpenTest()
    {
        $request = new Model\AccountFaceCertifyOpenRequest();

        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->accountFaceCertifyOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountFaceCertifyOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立钱包账户(/rest/v1.0/m-wallet/account/open)
     *
     * @test
     */
    public function accountOpenTest()
    {
        $request = new Model\AccountOpenRequest();

        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->accountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包开户成功通知(/rest/v1.0/m-wallet/account/open/notify)
     *
     * @test
     */
    public function accountOpenNotifyTest()
    {
        $request = new Model\AccountOpenNotifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setWalletUserNo("walletUserNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->accountOpenNotify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountOpenNotify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询钱包账户信息(/rest/v1.0/m-wallet/account/query)
     *
     * @test
     */
    public function accountQueryTest()
    {
        $request = new Model\AccountQueryRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->accountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户余额查询(/rest/v1.0/m-wallet/account/query-balance)
     *
     * @test
     */
    public function accountQueryBalanceTest()
    {
        $request = new Model\AccountQueryBalanceRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setElecAccount("elecAccount_example");
        try{
            $response = self::$client->accountQueryBalance($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountQueryBalance: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员账户限额查询(/rest/v1.0/m-wallet/account/query-quota)
     *
     * @test
     */
    public function accountQueryQuotaTest()
    {
        $request = new Model\AccountQueryQuotaRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->accountQueryQuota($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->accountQueryQuota: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立钱包账户(支持人脸识别)(/rest/v1.0/m-wallet/account/face-certify-open)
     *
     * @test
     */
    public function account_face_certify_openTest()
    {
        $request = new Model\AccountFaceCertifyOpenRequest();

        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->account_face_certify_open($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_face_certify_open: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包开户成功通知(/rest/v1.0/m-wallet/account/open/notify)
     *
     * @test
     */
    public function account_open_notifyTest()
    {
        $request = new Model\AccountOpenNotifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setWalletUserNo("walletUserNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->account_open_notify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_open_notify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立钱包账户(/rest/v1.0/m-wallet/account/open)
     *
     * @test
     */
    public function account_open_v1_0Test()
    {
        $request = new Model\AccountOpenV10Request();

        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->account_open_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_open_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户余额查询(/rest/v1.0/m-wallet/account/query-balance)
     *
     * @test
     */
    public function account_query_balance_v1_0Test()
    {
        $request = new Model\AccountQueryBalanceV10Request();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setElecAccount("elecAccount_example");
        try{
            $response = self::$client->account_query_balance_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_query_balance_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员账户限额查询(/rest/v1.0/m-wallet/account/query-quota)
     *
     * @test
     */
    public function account_query_quotaTest()
    {
        $request = new Model\AccountQueryQuotaRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->account_query_quota($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_query_quota: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询钱包账户信息(/rest/v1.0/m-wallet/account/query)
     *
     * @test
     */
    public function account_query_v1_0Test()
    {
        $request = new Model\AccountQueryV10Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->account_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->account_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起免密支付解约(/rest/v1.0/m-wallet/agreement/payment-cancel)
     *
     * @test
     */
    public function agreementPaymentCancelTest()
    {
        $request = new Model\AgreementPaymentCancelRequest();

        $request->setOperateReason("operateReason_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreementPaymentCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreementPaymentCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包免密支付协议查询接口(/rest/v1.0/m-wallet/agreement/payment-query)
     *
     * @test
     */
    public function agreementPaymentQueryTest()
    {
        $request = new Model\AgreementPaymentQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->agreementPaymentQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreementPaymentQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包免密支付协议请求接口(/rest/v1.0/m-wallet/agreement/payment-request)
     *
     * @test
     */
    public function agreementPaymentRequestTest()
    {
        $request = new Model\AgreementPaymentRequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->agreementPaymentRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreementPaymentRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起免密支付签约(/rest/v1.0/m-wallet/agreement/payment-sign)
     *
     * @test
     */
    public function agreementPaymentSignTest()
    {
        $request = new Model\AgreementPaymentSignRequest();

        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreementPaymentSign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreementPaymentSign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起免密支付解约(/rest/v1.0/m-wallet/agreement/payment-cancel)
     *
     * @test
     */
    public function agreement_payment_cancel_v1_0Test()
    {
        $request = new Model\AgreementPaymentCancelV10Request();

        $request->setOperateReason("operateReason_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreement_payment_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3发起免密支付解约(/rest/v1.0/m-wallet/web3/agreement/payment-cancel)
     *
     * @test
     */
    public function agreement_payment_cancel_web3_v1_0Test()
    {
        $request = new Model\AgreementPaymentCancelWeb3V10Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperateReason("operateReason_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->agreement_payment_cancel_web3_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_cancel_web3_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 协议通知商户(/rest/v1.0/m-wallet/web3/agreement/notify)
     *
     * @test
     */
    public function agreement_payment_notify_web3Test()
    {
        $request = new Model\AgreementPaymentNotifyWeb3Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperateTime("operateTime_example");
        $request->setOperateType("operateType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setEndTime("endTime_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->agreement_payment_notify_web3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_notify_web3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包免密支付协议查询接口(/rest/v1.0/m-wallet/agreement/payment-query)
     *
     * @test
     */
    public function agreement_payment_queryTest()
    {
        $request = new Model\AgreementPaymentQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->agreement_payment_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3钱包免密支付协议查询接口(/rest/v1.0/m-wallet/web3/agreement/payment-query)
     *
     * @test
     */
    public function agreement_payment_query_web3_v1_0Test()
    {
        $request = new Model\AgreementPaymentQueryWeb3V10Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        try{
            $response = self::$client->agreement_payment_query_web3_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_query_web3_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包免密支付协议请求接口(/rest/v1.0/m-wallet/agreement/payment-request)
     *
     * @test
     */
    public function agreement_payment_request_v1Test()
    {
        $request = new Model\AgreementPaymentRequestV1Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->agreement_payment_request_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_request_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起免密支付签约(/rest/v1.0/m-wallet/agreement/payment-sign)
     *
     * @test
     */
    public function agreement_payment_sign_v1_0Test()
    {
        $request = new Model\AgreementPaymentSignV10Request();

        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreement_payment_sign_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_sign_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3发起免密支付签约(/rest/v1.0/m-wallet/web3/agreement/payment-sign)
     *
     * @test
     */
    public function agreement_payment_sign_web3_v1_0Test()
    {
        $request = new Model\AgreementPaymentSignWeb3V10Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementAmount("agreementAmount_example");
        try{
            $response = self::$client->agreement_payment_sign_web3_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->agreement_payment_sign_web3_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起会员自动提现(/rest/v1.0/m-wallet/auto-withdraw)
     *
     * @test
     */
    public function autoWithdrawTest()
    {
        $request = new Model\AutoWithdrawRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("User8232");
        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->autoWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->autoWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现查询(/rest/v1.0/m-wallet/auto-withdraw-query)
     *
     * @test
     */
    public function autoWithdrawQueryTest()
    {
        $request = new Model\AutoWithdrawQueryRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("REQ6437657876");
        try{
            $response = self::$client->autoWithdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->autoWithdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员自动扣款下单(/rest/v1.0/m-wallet/trade/auto-deduction/create)
     *
     * @test
     */
    public function auto_deduction_createTest()
    {
        $request = new Model\AutoDeductionCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount("amount_example");
        $request->setBindCardId("bindCardId_example");
        $request->setPayWay("payWay_example");
        $request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setGoodsName("goodsName_example");
        try{
            $response = self::$client->auto_deduction_create($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->auto_deduction_create: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员自动扣款查询(/rest/v1.0/m-wallet/trade/auto-deduction/query)
     *
     * @test
     */
    public function auto_deduction_queryTest()
    {
        $request = new Model\AutoDeductionQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->auto_deduction_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->auto_deduction_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起会员自动提现(/rest/v1.0/m-wallet/auto-withdraw)
     *
     * @test
     */
    public function auto_withdrawTest()
    {
        $request = new Model\AutoWithdrawRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("User8232");
        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->auto_withdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->auto_withdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现查询(/rest/v1.0/m-wallet/auto-withdraw-query)
     *
     * @test
     */
    public function auto_withdraw_queryTest()
    {
        $request = new Model\AutoWithdrawQueryRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("REQ6437657876");
        try{
            $response = self::$client->auto_withdraw_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->auto_withdraw_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户确认(/rest/v1.0/m-wallet/bank-account/confirm)
     *
     * @test
     */
    public function bankAccountConfirmTest()
    {
        $request = new Model\BankAccountConfirmRequest();

        $request->setRequestNo("requestNo_example");
        $request->setShortMsg("shortMsg_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户接口(/rest/v1.0/m-wallet/bank-account/open)
     *
     * @test
     */
    public function bankAccountOpenTest()
    {
        $request = new Model\BankAccountOpenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO());
        try{
            $response = self::$client->bankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户一分钱激活结果查询(/rest/v1.0/m-wallet/bank-account/query-activation)
     *
     * @test
     */
    public function bankAccountQueryActivationTest()
    {
        $request = new Model\BankAccountQueryActivationRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryActivation($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryActivation: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户客诉订单查询(/rest/v1.0/m-wallet/bank-account/query-complaint)
     *
     * @test
     */
    public function bankAccountQueryComplaintTest()
    {
        $request = new Model\BankAccountQueryComplaintRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankTradeNo("bankTradeNo_example");
        $request->setTradeTime("tradeTime_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryComplaint($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryComplaint: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户结果查询(/rest/v1.0/m-wallet/bank-account/query-open-result)
     *
     * @test
     */
    public function bankAccountQueryOpenResultTest()
    {
        $request = new Model\BankAccountQueryOpenResultRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryOpenResult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryOpenResult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户交易流水查询(/rest/v1.0/m-wallet/bank-account/query-trade)
     *
     * @test
     */
    public function bankAccountQueryTradeTest()
    {
        $request = new Model\BankAccountQueryTradeRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBeginDate("beginDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLoanFlag("loanFlag_example");
        $request->setStartNum(56);
        $request->setQueryNum(56);
        $request->setQueryToken("queryToken_example");
        $request->setQueryTime("queryTime_example");
        try{
            $response = self::$client->bankAccountQueryTrade($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryTrade: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户提现查询(/rest/v1.0/m-wallet/bank-account/query-withdraw)
     *
     * @test
     */
    public function bankAccountQueryWithdrawTest()
    {
        $request = new Model\BankAccountQueryWithdrawRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountQueryWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountQueryWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户发送短验(/rest/v1.0/m-wallet/bank-account/send-msg)
     *
     * @test
     */
    public function bankAccountSendMsgTest()
    {
        $request = new Model\BankAccountSendMsgRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountSendMsg($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountSendMsg: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户关键字维护(/rest/v1.0/m-wallet/bank-account/update-key-words)
     *
     * @test
     */
    public function bankAccountUpdateKeyWordsTest()
    {
        $request = new Model\BankAccountUpdateKeyWordsRequest();

        $request->setOperateType("operateType_example");
        $request->setKeyWordStrs("keyWordStrs_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountUpdateKeyWords($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountUpdateKeyWords: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户提现(/rest/v1.0/m-wallet/bank-account/withdraw)
     *
     * @test
     */
    public function bankAccountWithdrawTest()
    {
        $request = new Model\BankAccountWithdrawRequest();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setAccountType("accountType_example");
        $request->setOneAccountBankNo("oneAccountBankNo_example");
        $request->setBindBankPhone("bindBankPhone_example");
        $request->setWithdrawPrice(1.2);
        $request->setRemark("remark_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bankAccountWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户确认(/rest/v1.0/m-wallet/bank-account/confirm)
     *
     * @test
     */
    public function bank_account_confirm_v1_0Test()
    {
        $request = new Model\BankAccountConfirmV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setShortMsg("shortMsg_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_confirm_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_confirm_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户接口(/rest/v1.0/m-wallet/bank-account/open)
     *
     * @test
     */
    public function bank_account_open_v1_0Test()
    {
        $request = new Model\BankAccountOpenV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO());
        try{
            $response = self::$client->bank_account_open_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_open_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户一分钱激活结果查询(/rest/v1.0/m-wallet/bank-account/query-activation)
     *
     * @test
     */
    public function bank_account_query_activation_v1_0Test()
    {
        $request = new Model\BankAccountQueryActivationV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_query_activation_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_query_activation_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户客诉订单查询(/rest/v1.0/m-wallet/bank-account/query-complaint)
     *
     * @test
     */
    public function bank_account_query_complaint_v1_0Test()
    {
        $request = new Model\BankAccountQueryComplaintV10Request();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankTradeNo("bankTradeNo_example");
        $request->setTradeTime("tradeTime_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_query_complaint_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_query_complaint_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户结果查询(/rest/v1.0/m-wallet/bank-account/query-open-result)
     *
     * @test
     */
    public function bank_account_query_open_result_v1_0Test()
    {
        $request = new Model\BankAccountQueryOpenResultV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_query_open_result_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_query_open_result_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户交易流水查询(/rest/v1.0/m-wallet/bank-account/query-trade)
     *
     * @test
     */
    public function bank_account_query_trade_v1_0Test()
    {
        $request = new Model\BankAccountQueryTradeV10Request();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBeginDate("beginDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLoanFlag("loanFlag_example");
        $request->setStartNum(56);
        $request->setQueryNum(56);
        $request->setQueryToken("queryToken_example");
        $request->setQueryTime("queryTime_example");
        try{
            $response = self::$client->bank_account_query_trade_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_query_trade_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户提现查询(/rest/v1.0/m-wallet/bank-account/query-withdraw)
     *
     * @test
     */
    public function bank_account_query_withdraw_v1_0Test()
    {
        $request = new Model\BankAccountQueryWithdrawV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_query_withdraw_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_query_withdraw_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户开户发送短验(/rest/v1.0/m-wallet/bank-account/send-msg)
     *
     * @test
     */
    public function bank_account_send_msg_v1_0Test()
    {
        $request = new Model\BankAccountSendMsgV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_send_msg_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_send_msg_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户关键字维护(/rest/v1.0/m-wallet/bank-account/update-key-words)
     *
     * @test
     */
    public function bank_account_update_key_words_v1_0Test()
    {
        $request = new Model\BankAccountUpdateKeyWordsV10Request();

        $request->setOperateType("operateType_example");
        $request->setKeyWordStrs("keyWordStrs_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_update_key_words_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_update_key_words_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员银行账户提现(/rest/v1.0/m-wallet/bank-account/withdraw)
     *
     * @test
     */
    public function bank_account_withdraw_v1_0Test()
    {
        $request = new Model\BankAccountWithdrawV10Request();

        $request->setMerchantMemberNo("merchantMemberNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setAccountType("accountType_example");
        $request->setOneAccountBankNo("oneAccountBankNo_example");
        $request->setBindBankPhone("bindBankPhone_example");
        $request->setWithdrawPrice(1.2);
        $request->setRemark("remark_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_withdraw_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bank_account_withdraw_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单详情查询(/rest/v1.0/m-wallet/bill/query-detail)
     *
     * @test
     */
    public function billQueryDetailTest()
    {
        $request = new Model\BillQueryDetailRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setOrderType("orderType_example");
        $request->setOrderDate(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->billQueryDetail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->billQueryDetail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单列表查询(/rest/v1.0/m-wallet/bill/query-list)
     *
     * @test
     */
    public function billQueryListTest()
    {
        $request = new Model\BillQueryListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOrderType("orderType_example");
        $request->setPage(56);
        $request->setPageNum(56);
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->billQueryList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->billQueryList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单列表查询(/rest/v2.0/m-wallet/bill/query-list)
     *
     * @test
     */
    public function billQueryListV2Test()
    {
        $request = new Model\BillQueryListV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPage(56);
        $request->setPageNum(56);
        $request->setEndTime("endTime_example");
        $request->setOrderType("orderType_example");
        $request->setFundDirection("fundDirection_example");
        $request->setStartTime("2025-01-01 00:00:00");
        try{
            $response = self::$client->billQueryListV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->billQueryListV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单总览查询(/rest/v1.0/m-wallet/bill/query-overview)
     *
     * @test
     */
    public function billQueryOverviewTest()
    {
        $request = new Model\BillQueryOverviewRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setStartMonth("startMonth_example");
        $request->setEndMonth("endMonth_example");
        try{
            $response = self::$client->billQueryOverview($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->billQueryOverview: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单详情查询(/rest/v1.0/m-wallet/bill/query-detail)
     *
     * @test
     */
    public function bill_query_detailTest()
    {
        $request = new Model\BillQueryDetailRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setOrderType("orderType_example");
        $request->setOrderDate(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->bill_query_detail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bill_query_detail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单列表查询(/rest/v1.0/m-wallet/bill/query-list)
     *
     * @test
     */
    public function bill_query_listTest()
    {
        $request = new Model\BillQueryListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOrderType("orderType_example");
        $request->setPage(56);
        $request->setPageNum(56);
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->bill_query_list($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bill_query_list: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账单总览查询(/rest/v1.0/m-wallet/bill/query-overview)
     *
     * @test
     */
    public function bill_query_overviewTest()
    {
        $request = new Model\BillQueryOverviewRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setStartMonth("startMonth_example");
        $request->setEndMonth("endMonth_example");
        try{
            $response = self::$client->bill_query_overview($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->bill_query_overview: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询及绑定银行卡(/rest/v1.0/m-wallet/card/query)
     *
     * @test
     */
    public function cardQueryTest()
    {
        $request = new Model\CardQueryRequest();

        $request->setReturnUrl("returnUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->cardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->cardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询及绑定银行卡(/rest/v1.0/m-wallet/card/query)
     *
     * @test
     */
    public function card_query_v1_0Test()
    {
        $request = new Model\CardQueryV10Request();

        $request->setReturnUrl("returnUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->card_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->card_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 优惠券列表查询(/rest/v1.0/m-wallet/web3/coupon/list-query)
     *
     * @test
     */
    public function coupon_list_query_web3Test()
    {
        $request = new Model\CouponListQueryWeb3Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQueryType("queryType_example");
        $request->setApplyEndTime("applyEndTime_example");
        $request->setPageNo(56);
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setPageSize(56);
        $request->setApplyStartTime("applyStartTime_example");
        try{
            $response = self::$client->coupon_list_query_web3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->coupon_list_query_web3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询用户管理费扣费时间(/rest/v1.0/m-wallet/manage-fee/query-deduct)
     *
     * @test
     */
    public function manageFeeQueryDeductTest()
    {
        $request = new Model\ManageFeeQueryDeductRequest();

        $request->setRealName("realName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setRegisterMobile("registerMobile_example");
        try{
            $response = self::$client->manageFeeQueryDeduct($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->manageFeeQueryDeduct: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询用户管理费扣费时间(/rest/v1.0/m-wallet/manage-fee/query-deduct)
     *
     * @test
     */
    public function manage_fee_query_deductTest()
    {
        $request = new Model\ManageFeeQueryDeductRequest();

        $request->setRealName("realName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setRegisterMobile("registerMobile_example");
        try{
            $response = self::$client->manage_fee_query_deduct($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->manage_fee_query_deduct: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员绑卡列表查询(/rest/v1.0/m-wallet/member/card-list)
     *
     * @test
     */
    public function memberCardListTest()
    {
        $request = new Model\MemberCardListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->memberCardList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->memberCardList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账户信息查询(/rest/v1.0/m-wallet/member/query)
     *
     * @test
     */
    public function memberQueryTest()
    {
        $request = new Model\MemberQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setExternalUserId("member001");
        $request->setMemberNo("20012344459");
        try{
            $response = self::$client->memberQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->memberQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员绑卡列表查询(/rest/v1.0/m-wallet/member/card-list)
     *
     * @test
     */
    public function member_card_listTest()
    {
        $request = new Model\MemberCardListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->member_card_list($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->member_card_list: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包账户信息查询(/rest/v1.0/m-wallet/member/query)
     *
     * @test
     */
    public function member_query_v1_0Test()
    {
        $request = new Model\MemberQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setExternalUserId("member001");
        $request->setMemberNo("20012344459");
        try{
            $response = self::$client->member_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->member_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 安全设置(/rest/v1.0/m-wallet/password/manage)
     *
     * @test
     */
    public function passwordManageTest()
    {
        $request = new Model\PasswordManageRequest();

        $request->setReturnUrl("returnUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->passwordManage($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->passwordManage: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 安全设置(/rest/v1.0/m-wallet/password/manage)
     *
     * @test
     */
    public function password_manage_v1_0Test()
    {
        $request = new Model\PasswordManageV10Request();

        $request->setReturnUrl("returnUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->password_manage_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->password_manage_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付设置(/rest/v1.0/m-wallet/web3/payment-manage)
     *
     * @test
     */
    public function payment_manage_web3_v1_0Test()
    {
        $request = new Model\PaymentManageWeb3V10Request();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->payment_manage_web3_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->payment_manage_web3_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起充值(/rest/v1.0/m-wallet/recharge/initiate)
     *
     * @test
     */
    public function rechargeInitiateTest()
    {
        $request = new Model\RechargeInitiateRequest();

        $request->setAmount("amount_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->rechargeInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->rechargeInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值查询(/rest/v1.0/m-wallet/recharge/query)
     *
     * @test
     */
    public function rechargeQueryTest()
    {
        $request = new Model\RechargeQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->rechargeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起充值(/rest/v1.0/m-wallet/recharge/initiate)
     *
     * @test
     */
    public function recharge_initiate_v1_0Test()
    {
        $request = new Model\RechargeInitiateV10Request();

        $request->setAmount("amount_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->recharge_initiate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->recharge_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值查询(/rest/v1.0/m-wallet/recharge/query)
     *
     * @test
     */
    public function recharge_query_v1_0Test()
    {
        $request = new Model\RechargeQueryV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->recharge_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->recharge_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员主体订阅有效期变更通知(/rest/v1.0/m-wallet/subscribe-expire-notify)
     *
     * @test
     */
    public function subscribeExpireNotifyTest()
    {
        $request = new Model\SubscribeExpireNotifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO());
        try{
            $response = self::$client->subscribeExpireNotify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->subscribeExpireNotify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员主体订阅有效期变更通知(/rest/v1.0/m-wallet/subscribe-expire-notify)
     *
     * @test
     */
    public function subscribe_expire_notifyTest()
    {
        $request = new Model\SubscribeExpireNotifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO());
        try{
            $response = self::$client->subscribe_expire_notify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->subscribe_expire_notify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员自动扣款下单(/rest/v1.0/m-wallet/trade/auto-deduction/create)
     *
     * @test
     */
    public function tradeAutoDeductionCreateTest()
    {
        $request = new Model\TradeAutoDeductionCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount("amount_example");
        $request->setBindCardId("bindCardId_example");
        $request->setPayWay("payWay_example");
        $request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setGoodsName("goodsName_example");
        try{
            $response = self::$client->tradeAutoDeductionCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->tradeAutoDeductionCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 会员自动扣款查询(/rest/v1.0/m-wallet/trade/auto-deduction/query)
     *
     * @test
     */
    public function tradeAutoDeductionQueryTest()
    {
        $request = new Model\TradeAutoDeductionQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->tradeAutoDeductionQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->tradeAutoDeductionQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包交易支付(/rest/v1.0/m-wallet/trade/order)
     *
     * @test
     */
    public function tradeOrderTest()
    {
        $request = new Model\TradeOrderRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPayAmount("payAmount_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setProductName("productName_example");
        $request->setRemark("remark_example");
        $request->setFundProcessType("fundProcessType_example");
        try{
            $response = self::$client->tradeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包交易下单(/rest/v2.0/m-wallet/trade/order)
     *
     * @test
     */
    public function tradeOrderV2Test()
    {
        $request = new Model\TradeOrderV2Request();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setOrderId("ORDER202401010515217305372872");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setMemberNo("200000000000");
        $request->setPayerIp("127.12.1.60");
        $request->setPayAgreement("MICRO_FREE_PWD");
        $request->setCsUrl("https://cs.merchant.com/xxx");
        try{
            $response = self::$client->tradeOrderV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->tradeOrderV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包交易支付(/rest/v1.0/m-wallet/trade/order)
     *
     * @test
     */
    public function trade_order_v1_0Test()
    {
        $request = new Model\TradeOrderV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPayAmount("payAmount_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setProductName("productName_example");
        $request->setRemark("remark_example");
        $request->setFundProcessType("fundProcessType_example");
        try{
            $response = self::$client->trade_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->trade_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包交易下单(/rest/v2.0/m-wallet/trade/order)
     *
     * @test
     */
    public function trade_order_v2_0Test()
    {
        $request = new Model\TradeOrderV20Request();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setOrderId("ORDER202401010515217305372872");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setMemberNo("200000000000");
        $request->setPayerIp("127.12.1.60");
        $request->setPayAgreement("MICRO_FREE_PWD");
        $request->setCsUrl("https://cs.merchant.com/xxx");
        try{
            $response = self::$client->trade_order_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->trade_order_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起B2C转账(/rest/v1.0/m-wallet/transfer/b2c/initiate)
     *
     * @test
     */
    public function transferB2cInitiateTest()
    {
        $request = new Model\TransferB2cInitiateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setToMerchantNo("toMerchantNo_example");
        $request->setToMerchantUserNo("toMerchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->transferB2cInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 营销红包转账(/rest/v1.0/m-wallet/transfer/b2c/market)
     *
     * @test
     */
    public function transferB2cMarketTest()
    {
        $request = new Model\TransferB2cMarketRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setToMerchantNo("toMerchantNo_example");
        $request->setToMerchantUserNo("toMerchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        try{
            $response = self::$client->transferB2cMarket($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cMarket: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * B2C转账查询(/rest/v1.0/m-wallet/transfer/b2c/query)
     *
     * @test
     */
    public function transferB2cQueryTest()
    {
        $request = new Model\TransferB2cQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->transferB2cQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transferB2cQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起B2C转账(/rest/v1.0/m-wallet/transfer/b2c/initiate)
     *
     * @test
     */
    public function transfer_b2c_initiate_v1_0Test()
    {
        $request = new Model\TransferB2cInitiateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setToMerchantNo("toMerchantNo_example");
        $request->setToMerchantUserNo("toMerchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->transfer_b2c_initiate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transfer_b2c_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 营销红包转账(/rest/v1.0/m-wallet/transfer/b2c/market)
     *
     * @test
     */
    public function transfer_b2c_market_v1_0Test()
    {
        $request = new Model\TransferB2cMarketV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setToMerchantNo("toMerchantNo_example");
        $request->setToMerchantUserNo("toMerchantUserNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        try{
            $response = self::$client->transfer_b2c_market_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transfer_b2c_market_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * B2C转账查询(/rest/v1.0/m-wallet/transfer/b2c/query)
     *
     * @test
     */
    public function transfer_b2c_query_v1_0Test()
    {
        $request = new Model\TransferB2cQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setBusinessNo("businessNo_example");
        try{
            $response = self::$client->transfer_b2c_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->transfer_b2c_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 注销会员钱包(/rest/v1.0/m-wallet/wallet/cancel)
     *
     * @test
     */
    public function walletCancelTest()
    {
        $request = new Model\WalletCancelRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->walletCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->walletCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包注册/登录接口(/rest/v2.0/m-wallet/wallet/index)
     *
     * @test
     */
    public function walletIndexV2Test()
    {
        $request = new Model\WalletIndexV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setUserMerchantNo("userMerchantNo_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setMobile("mobile_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setNeedNavBar(true);
        try{
            $response = self::$client->walletIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->walletIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 注销会员钱包(/rest/v1.0/m-wallet/wallet/cancel)
     *
     * @test
     */
    public function wallet_cancel_v1_0Test()
    {
        $request = new Model\WalletCancelV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->wallet_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->wallet_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 钱包注册/登录接口(/rest/v2.0/m-wallet/wallet/index)
     *
     * @test
     */
    public function wallet_index_v2_0Test()
    {
        $request = new Model\WalletIndexV20Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setUserMerchantNo("userMerchantNo_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setMobile("mobile_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setNeedNavBar(true);
        try{
            $response = self::$client->wallet_index_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->wallet_index_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 协议通知商户(/rest/v1.0/m-wallet/web3/agreement/notify)
     *
     * @test
     */
    public function web3AgreementNotifyTest()
    {
        $request = new Model\Web3AgreementNotifyRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperateTime("operateTime_example");
        $request->setOperateType("operateType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setEndTime("endTime_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->web3AgreementNotify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3AgreementNotify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3发起免密支付解约(/rest/v1.0/m-wallet/web3/agreement/payment-cancel)
     *
     * @test
     */
    public function web3AgreementPaymentCancelTest()
    {
        $request = new Model\Web3AgreementPaymentCancelRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperateReason("operateReason_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->web3AgreementPaymentCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3AgreementPaymentCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3钱包免密支付协议查询接口(/rest/v1.0/m-wallet/web3/agreement/payment-query)
     *
     * @test
     */
    public function web3AgreementPaymentQueryTest()
    {
        $request = new Model\Web3AgreementPaymentQueryRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        try{
            $response = self::$client->web3AgreementPaymentQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3AgreementPaymentQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * web3发起免密支付签约(/rest/v1.0/m-wallet/web3/agreement/payment-sign)
     *
     * @test
     */
    public function web3AgreementPaymentSignTest()
    {
        $request = new Model\Web3AgreementPaymentSignRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementAmount("agreementAmount_example");
        try{
            $response = self::$client->web3AgreementPaymentSign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3AgreementPaymentSign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 优惠券列表查询(/rest/v1.0/m-wallet/web3/coupon/list-query)
     *
     * @test
     */
    public function web3CouponListQueryTest()
    {
        $request = new Model\Web3CouponListQueryRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQueryType("queryType_example");
        $request->setApplyEndTime("applyEndTime_example");
        $request->setPageNo(56);
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setPageSize(56);
        $request->setApplyStartTime("applyStartTime_example");
        try{
            $response = self::$client->web3CouponListQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3CouponListQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付设置(/rest/v1.0/m-wallet/web3/payment-manage)
     *
     * @test
     */
    public function web3PaymentManageTest()
    {
        $request = new Model\Web3PaymentManageRequest();

        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->web3PaymentManage($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->web3PaymentManage: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起提现(/rest/v1.0/m-wallet/withdraw/initiate)
     *
     * @test
     */
    public function withdrawInitiateTest()
    {
        $request = new Model\WithdrawInitiateRequest();

        $request->setAmount("amount_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setFeeInnerType("feeInnerType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setWithdrawType("0");
        try{
            $response = self::$client->withdrawInitiate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdrawInitiate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现查询(/rest/v1.0/m-wallet/withdraw/query)
     *
     * @test
     */
    public function withdrawQueryTest()
    {
        $request = new Model\WithdrawQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->withdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起提现(/rest/v1.0/m-wallet/withdraw/initiate)
     *
     * @test
     */
    public function withdraw_initiate_v1_0Test()
    {
        $request = new Model\WithdrawInitiateV10Request();

        $request->setAmount("amount_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setFeeInnerType("feeInnerType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setWithdrawType("0");
        try{
            $response = self::$client->withdraw_initiate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdraw_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现查询(/rest/v1.0/m-wallet/withdraw/query)
     *
     * @test
     */
    public function withdraw_query_v1_0Test()
    {
        $request = new Model\WithdrawQueryV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->withdraw_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MWalletClient->withdraw_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
