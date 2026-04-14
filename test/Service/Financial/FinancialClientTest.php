<?php


namespace Yeepay\Yop\Sdk\Service\Financial;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Financial\Model as Model;

class FinancialClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = FinancialClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = FinancialClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 余额查询(HT银行)(/rest/v1.0/financial/account/balacne-query)
     *
     * @test
     */
    public function accountBalacneQueryTest()
    {
        $request = new Model\AccountBalacneQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO());
        try{
            $response = self::$client->accountBalacneQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->accountBalacneQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额查询(HT银行)(/rest/v1.0/financial/account/balacne-query)
     *
     * @test
     */
    public function fundBalanceQueryTest()
    {
        $request = new Model\FundBalanceQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceRequestDTO());
        try{
            $response = self::$client->fundBalanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundBalanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付下单(HT银行)(/rest/v1.0/financial/fund-remit/request)
     *
     * @test
     */
    public function fundRemitTest()
    {
        $request = new Model\FundRemitRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO());
        try{
            $response = self::$client->fundRemit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundRemit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付订单查询(HT银行)(/rest/v1.0/financial/fund-remit/query)
     *
     * @test
     */
    public function fundRemitQueryTest()
    {
        $request = new Model\FundRemitQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO());
        try{
            $response = self::$client->fundRemitQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundRemitQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付下单(HT银行)(/rest/v1.0/financial/fund-remit/request)
     *
     * @test
     */
    public function fundRemitRequestTest()
    {
        $request = new Model\FundRemitRequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundRemitRequestDTO());
        try{
            $response = self::$client->fundRemitRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundRemitRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付订单查询(HT银行)(/rest/v1.0/financial/fund-remit/query)
     *
     * @test
     */
    public function fundRemitRequestQueryTest()
    {
        $request = new Model\FundRemitRequestQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundRemitRequestDTO());
        try{
            $response = self::$client->fundRemitRequestQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundRemitRequestQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行资金调拨查询(/rest/v1.0/financial/fund-transfer/query)
     *
     * @test
     */
    public function fundTransferQueryTest()
    {
        $request = new Model\FundTransferQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO());
        try{
            $response = self::$client->fundTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行资金挑拨申请(/rest/v1.0/financial/fund-transfer/request)
     *
     * @test
     */
    public function fundTransferRequestTest()
    {
        $request = new Model\FundTransferRequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO());
        try{
            $response = self::$client->fundTransferRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundTransferRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行资金挑拨申请(/rest/v1.0/financial/fund-transfer/request)
     *
     * @test
     */
    public function fundTransferRequest_0Test()
    {
        $request = new Model\FundTransferRequest0Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderRequestDTO());
        try{
            $response = self::$client->fundTransferRequest_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundTransferRequest_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行资金调拨查询(/rest/v1.0/financial/fund-transfer/query)
     *
     * @test
     */
    public function fundTransferReuestQueryTest()
    {
        $request = new Model\FundTransferReuestQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryFundTransferOrderRequestDTO());
        try{
            $response = self::$client->fundTransferReuestQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->fundTransferReuestQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取电子回单(/rest/v1.0/financial/receipt/get)
     *
     * @test
     */
    public function getReceiptTest()
    {
        $request = new Model\GetReceiptRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO());
        try{
            $response = self::$client->getReceipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->getReceipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行开户申请查询(/rest/v1.0/financial/open-account/query)
     *
     * @test
     */
    public function openAccountQueryTest()
    {
        $request = new Model\OpenAccountQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO());
        try{
            $response = self::$client->openAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->openAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行开户申请(/rest/v1.0/financial/open-account/request)
     *
     * @test
     */
    public function openAccountRequestTest()
    {
        $request = new Model\OpenAccountRequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO());
        try{
            $response = self::$client->openAccountRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->openAccountRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行开户申请查询(/rest/v1.0/financial/open-account/query)
     *
     * @test
     */
    public function openAccountRequestQueryTest()
    {
        $request = new Model\OpenAccountRequestQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\QueryOpenAccountRequestDTO());
        try{
            $response = self::$client->openAccountRequestQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->openAccountRequestQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * HT银行开户申请(/rest/v1.0/financial/open-account/request)
     *
     * @test
     */
    public function openAccountRequest_0Test()
    {
        $request = new Model\OpenAccountRequest0Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\OpenAccountRequestDTO());
        try{
            $response = self::$client->openAccountRequest_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->openAccountRequest_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取电子回单(/rest/v1.0/financial/receipt/get)
     *
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Financial\Model\ReceiptRequestDTO());
        try{
            $response = self::$client->receiptGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FinancialClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
}
