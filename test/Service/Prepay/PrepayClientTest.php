<?php


namespace Yeepay\Yop\Sdk\Service\Prepay;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Prepay\Model as Model;

class PrepayClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = PrepayClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = PrepayClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 预消费完成(/rest/v1.0/prepay/complete)
     *
     * @test
     */
    public function completeTest()
    {
        $request = new Model\CompleteRequest();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setCompleteRequestId("completeRequestId_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPreAuthCompleteAmount(1.2);
        try{
            $response = self::$client->complete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->complete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预消费完成撤销(/rest/v1.0/prepay/complete/repeal)
     *
     * @test
     */
    public function completeRepealTest()
    {
        $request = new Model\CompleteRepealRequest();

        $request->setOrderId("orderId_example");
        $request->setRepealRequestId("repealRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->completeRepeal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->completeRepeal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权完成(/rest/v1.0/prepay/preauth-complete)
     *
     * @test
     */
    public function preauthCompleteTest()
    {
        $request = new Model\PreauthCompleteRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteReqDTO());
        try{
            $response = self::$client->preauthComplete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauthComplete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权完成撤销(/rest/v1.0/prepay/preauth-complete-repeal)
     *
     * @test
     */
    public function preauthCompleteRepealTest()
    {
        $request = new Model\PreauthCompleteRepealRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteRepealReqDTO());
        try{
            $response = self::$client->preauthCompleteRepeal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauthCompleteRepeal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权撤销(/rest/v1.0/prepay/preauth-repeal)
     *
     * @test
     */
    public function preauthRepealTest()
    {
        $request = new Model\PreauthRepealRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthRepealReqDTO());
        try{
            $response = self::$client->preauthRepeal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauthRepeal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权完成撤销(/rest/v1.0/prepay/preauth-complete-repeal)
     *
     * @test
     */
    public function preauth_complete_repeal_v1_0Test()
    {
        $request = new Model\PreauthCompleteRepealV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteRepealReqDTO());
        try{
            $response = self::$client->preauth_complete_repeal_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauth_complete_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权完成(/rest/v1.0/prepay/preauth-complete)
     *
     * @test
     */
    public function preauth_complete_v1_0Test()
    {
        $request = new Model\PreauthCompleteV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteReqDTO());
        try{
            $response = self::$client->preauth_complete_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauth_complete_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预授权撤销(/rest/v1.0/prepay/preauth-repeal)
     *
     * @test
     */
    public function preauth_repeal_v1_0Test()
    {
        $request = new Model\PreauthRepealV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthRepealReqDTO());
        try{
            $response = self::$client->preauth_repeal_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->preauth_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预消费完成撤销(/rest/v1.0/prepay/complete/repeal)
     *
     * @test
     */
    public function prepay_complete_repeal_v1_0Test()
    {
        $request = new Model\PrepayCompleteRepealV10Request();

        $request->setOrderId("orderId_example");
        $request->setRepealRequestId("repealRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->prepay_complete_repeal_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->prepay_complete_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预消费完成(/rest/v1.0/prepay/complete)
     *
     * @test
     */
    public function prepay_complete_v1_0Test()
    {
        $request = new Model\PrepayCompleteV10Request();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setCompleteRequestId("completeRequestId_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPreAuthCompleteAmount(1.2);
        try{
            $response = self::$client->prepay_complete_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->prepay_complete_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预消费撤销(/rest/v1.0/prepay/repeal)
     *
     * @test
     */
    public function prepay_repeal_v1_0Test()
    {
        $request = new Model\PrepayRepealV10Request();

        $request->setOrderId("orderId_example");
        $request->setRepealRequestId("repealRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->prepay_repeal_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->prepay_repeal_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 预消费撤销(/rest/v1.0/prepay/repeal)
     *
     * @test
     */
    public function repealTest()
    {
        $request = new Model\RepealRequest();

        $request->setOrderId("orderId_example");
        $request->setRepealRequestId("repealRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->repeal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PrepayClient->repeal: ', $e->getMessage(), PHP_EOL;
        }
    }
}
