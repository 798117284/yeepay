<?php


namespace Yeepay\Yop\Sdk\Service\Divide;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Divide\Model as Model;

class DivideClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = DivideClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = DivideClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 申请订单分账(/rest/v1.0/divide/apply)
     *
     * @test
     */
    public function applyTest()
    {
        $request = new Model\ApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetail("按固定金额分账： [{\"amount\":\"100.00\",\"ledgerNo\":\"10000466938\",\"ledgerType\":\"MERCHANT2MERCHANT\",\"divideDetailDesc\":\"供应商结算\"},{\"amount\":\"100.00\",\"ledgerNo\":\"212345678912\",\"ledgerNoFrom\":\"10000466938\",\"ledgerType\":\"MERCHANT2MEMBER\"}] 按分账比例分账： [{\"proportion\":\"50.15\",\"ledgerNo\":\"10000466938\",\"ledgerType\":\"MERCHANT2MERCHANT\",\"divideDetailDesc\":\"供应商结算\"},{\"proportion\":\"49.85\",\"ledgerNo\":\"212345678912\",\"ledgerNoFrom\":\"10000466938\",\"ledgerType\":\"MERCHANT2MEMBER\"}]");
        $request->setAccountLinkInfo("{\"serviceProvider\":\"YEEPAY\",\"ipAddress\":\"192.168.1.1\",\"divideType\":\"1\",\"token\":\"token\"}");
        $request->setIsUnfreezeResidualAmount("isUnfreezeResidualAmount_example");
        $request->setDivideAmount("12.34");
        $request->setDivideRule("divideRule_example");
        try{
            $response = self::$client->apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请订单分账(/rest/v1.0/divide/apply)
     *
     * @test
     */
    public function apply_v1_0Test()
    {
        $request = new Model\ApplyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetail("按固定金额分账： [{\"amount\":\"100.00\",\"ledgerNo\":\"10000466938\",\"ledgerType\":\"MERCHANT2MERCHANT\",\"divideDetailDesc\":\"供应商结算\"},{\"amount\":\"100.00\",\"ledgerNo\":\"212345678912\",\"ledgerNoFrom\":\"10000466938\",\"ledgerType\":\"MERCHANT2MEMBER\"}] 按分账比例分账： [{\"proportion\":\"50.15\",\"ledgerNo\":\"10000466938\",\"ledgerType\":\"MERCHANT2MERCHANT\",\"divideDetailDesc\":\"供应商结算\"},{\"proportion\":\"49.85\",\"ledgerNo\":\"212345678912\",\"ledgerNoFrom\":\"10000466938\",\"ledgerType\":\"MERCHANT2MEMBER\"}]");
        $request->setAccountLinkInfo("{\"serviceProvider\":\"YEEPAY\",\"ipAddress\":\"192.168.1.1\",\"divideType\":\"1\",\"token\":\"token\"}");
        $request->setIsUnfreezeResidualAmount("isUnfreezeResidualAmount_example");
        $request->setDivideAmount("12.34");
        $request->setDivideRule("divideRule_example");
        try{
            $response = self::$client->apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请订单分账资金归还(/rest/v1.0/divide/back)
     *
     * @test
     */
    public function backTest()
    {
        $request = new Model\BackRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideBackDetail("[{\"amount\":2.98,\"divideBackReason\":\"用户退款奥\",\"divideDetailNo\":\"1010202411290000016334107323\"}]");
        try{
            $response = self::$client->back($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->back: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账退回(/rest/v1.0/divide/back/apply)
     *
     * @test
     */
    public function backApplyTest()
    {
        $request = new Model\BackApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceDivideBackReqDTO());
        try{
            $response = self::$client->backApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->backApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单分账资金归还结果(/rest/v1.0/divide/back/query)
     *
     * @test
     */
    public function backQueryTest()
    {
        $request = new Model\BackQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->backQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->backQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账资金归还回单(/yos/v1.0/divide/back/receipt/download)
     *
     * @test
     */
    public function backReceiptDownloadTest()
    {
        $request = new Model\BackReceiptDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setLedgerNo("ledgerNo_example");
        try{
            $response = self::$client->backReceiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->backReceiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单分账资金归还结果(/rest/v1.0/divide/back/query)
     *
     * @test
     */
    public function back_query_v1_0Test()
    {
        $request = new Model\BackQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->back_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->back_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账资金归还回单(/yos/v1.0/divide/back/receipt/download)
     *
     * @test
     */
    public function back_receipt_download_v1_0Test()
    {
        $request = new Model\BackReceiptDownloadV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setLedgerNo("ledgerNo_example");
        try{
            $response = self::$client->back_receipt_download_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->back_receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请订单分账资金归还(/rest/v1.0/divide/back)
     *
     * @test
     */
    public function back_v1_0Test()
    {
        $request = new Model\BackV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideBackDetail("[{\"amount\":2.98,\"divideBackReason\":\"用户退款奥\",\"divideDetailNo\":\"1010202411290000016334107323\"}]");
        try{
            $response = self::$client->back_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->back_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账(/rest/v1.0/divide/balance/apply)
     *
     * @test
     */
    public function balanceApplyTest()
    {
        $request = new Model\BalanceApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setAccountType("accountType_example");
        $request->setBankAccountBookNo("bankAccountBookNo_example");
        $request->setDivideDetail("[{\"ledgerNo\":\"10080037387\",\"ledgerType\":\"MERCHANT_BIND_CARD\",\"divideAmount\":\"0.1\",\"remark\":\"分账到商户结算卡-附言\",\"feeChargeSide\":\"INSIDE\",\"divideReason\":\"分账到商户结算卡-说明\"}]");
        $request->setBatchNotifyUrl("batchNotifyUrl_example");
        $request->setFundType("fundType_example");
        $request->setDivideVerifyType("divideVerifyType_example");
        try{
            $response = self::$client->balanceApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balanceApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账退回结果(/rest/v1.0/divide/balance/back-query)
     *
     * @test
     */
    public function balanceBackQueryTest()
    {
        $request = new Model\BalanceBackQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceDivideBackQueryDTO());
        try{
            $response = self::$client->balanceBackQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balanceBackQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账-批量分账(/rest/v1.0/divide/balance/batch-apply)
     *
     * @test
     */
    public function balanceBatchApplyTest()
    {
        $request = new Model\BalanceBatchApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetail("[{\"ledgerNo\":\"10080037387\",\"ledgerType\":\"MERCHANT\",\"divideAmount\":\"0.1\",\"remark\":\"分账到商户资金账户\",\"feeChargeSide\":\"INSIDE\",\"divideReason\":\"分账到商户资金账户-说明\"}]");
        $request->setBatchNotifyUrl("batchNotifyUrl_example");
        $request->setAccountType("accountType_example");
        $request->setDivideAmountMode("divideAmountMode_example");
        try{
            $response = self::$client->balanceBatchApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balanceBatchApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账结果(/rest/v1.0/divide/balance/query)
     *
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setDivideRequestId("divideRequestId_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账回单(/rest/v1.0/divide/balance/receipt)
     *
     * @test
     */
    public function balanceReceiptTest()
    {
        $request = new Model\BalanceReceiptRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideReceiptReqDTO());
        try{
            $response = self::$client->balanceReceipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balanceReceipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账(/rest/v1.0/divide/balance/apply)
     *
     * @test
     */
    public function balance_apply_v1_0Test()
    {
        $request = new Model\BalanceApplyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setAccountType("accountType_example");
        $request->setBankAccountBookNo("bankAccountBookNo_example");
        $request->setDivideDetail("[{\"ledgerNo\":\"10080037387\",\"ledgerType\":\"MERCHANT_BIND_CARD\",\"divideAmount\":\"0.1\",\"remark\":\"分账到商户结算卡-附言\",\"feeChargeSide\":\"INSIDE\",\"divideReason\":\"分账到商户结算卡-说明\"}]");
        $request->setBatchNotifyUrl("batchNotifyUrl_example");
        $request->setFundType("fundType_example");
        $request->setDivideVerifyType("divideVerifyType_example");
        try{
            $response = self::$client->balance_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账-批量分账(/rest/v1.0/divide/balance/batch-apply)
     *
     * @test
     */
    public function balance_batch_apply_v1_0Test()
    {
        $request = new Model\BalanceBatchApplyV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetail("[{\"ledgerNo\":\"10080037387\",\"ledgerType\":\"MERCHANT\",\"divideAmount\":\"0.1\",\"remark\":\"分账到商户资金账户\",\"feeChargeSide\":\"INSIDE\",\"divideReason\":\"分账到商户资金账户-说明\"}]");
        $request->setBatchNotifyUrl("batchNotifyUrl_example");
        $request->setAccountType("accountType_example");
        $request->setDivideAmountMode("divideAmountMode_example");
        try{
            $response = self::$client->balance_batch_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_batch_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账退回(/rest/v1.0/divide/back/apply)
     *
     * @test
     */
    public function balance_divide_back_apply_v1_0Test()
    {
        $request = new Model\BalanceDivideBackApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceDivideBackReqDTO());
        try{
            $response = self::$client->balance_divide_back_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_divide_back_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账退回结果(/rest/v1.0/divide/balance/back-query)
     *
     * @test
     */
    public function balance_divide_back_query_v1_0Test()
    {
        $request = new Model\BalanceDivideBackQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceDivideBackQueryDTO());
        try{
            $response = self::$client->balance_divide_back_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_divide_back_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账退回回单(/rest/v1.0/divide/receipt/divide-back)
     *
     * @test
     */
    public function balance_divide_back_receipt_v1_0Test()
    {
        $request = new Model\BalanceDivideBackReceiptV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideBackReceiptReqDTO());
        try{
            $response = self::$client->balance_divide_back_receipt_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_divide_back_receipt_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账退回-批量接口(/rest/v1.0/divide/batch-back/apply)
     *
     * @test
     */
    public function balance_divide_batch_back_apply_v1_0Test()
    {
        $request = new Model\BalanceDivideBatchBackApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceBatchDivideBackReqDTO());
        try{
            $response = self::$client->balance_divide_batch_back_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_divide_batch_back_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账回单(/rest/v1.0/divide/balance/receipt)
     *
     * @test
     */
    public function balance_divide_receipt_v1_0Test()
    {
        $request = new Model\BalanceDivideReceiptV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideReceiptReqDTO());
        try{
            $response = self::$client->balance_divide_receipt_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_divide_receipt_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账结果(/rest/v1.0/divide/balance/query)
     *
     * @test
     */
    public function balance_query_v1_0Test()
    {
        $request = new Model\BalanceQueryV10Request();

        $request->setDivideRequestId("divideRequestId_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->balance_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请余额分账退回-批量接口(/rest/v1.0/divide/batch-back/apply)
     *
     * @test
     */
    public function batchBackApplyTest()
    {
        $request = new Model\BatchBackApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBalanceBatchDivideBackReqDTO());
        try{
            $response = self::$client->batchBackApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->batchBackApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿划拨(/rest/v1.0/divide/book-transfer/apply)
     *
     * @test
     */
    public function bookTransferApplyTest()
    {
        $request = new Model\BookTransferApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferReqDTO());
        try{
            $response = self::$client->bookTransferApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->bookTransferApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿划拨结果查询(/rest/v1.0/divide/book-transfer/query)
     *
     * @test
     */
    public function bookTransferQueryTest()
    {
        $request = new Model\BookTransferQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferQueryReqDTO());
        try{
            $response = self::$client->bookTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->bookTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿上划(/rest/v1.0/divide/book-transfer-up/apply)
     *
     * @test
     */
    public function bookTransferUpApplyTest()
    {
        $request = new Model\BookTransferUpApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferUpReqDTO());
        try{
            $response = self::$client->bookTransferUpApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->bookTransferUpApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿上划结果查询(/rest/v1.0/divide/book-transfer-up/query)
     *
     * @test
     */
    public function bookTransferUpQueryTest()
    {
        $request = new Model\BookTransferUpQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferUpQueryReqDTO());
        try{
            $response = self::$client->bookTransferUpQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->bookTransferUpQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿划拨结果查询(/rest/v1.0/divide/book-transfer/query)
     *
     * @test
     */
    public function book_transfer_query_v1_0Test()
    {
        $request = new Model\BookTransferQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferQueryReqDTO());
        try{
            $response = self::$client->book_transfer_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->book_transfer_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿上划(/rest/v1.0/divide/book-transfer-up/apply)
     *
     * @test
     */
    public function book_transfer_up_v1_0Test()
    {
        $request = new Model\BookTransferUpV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferUpReqDTO());
        try{
            $response = self::$client->book_transfer_up_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->book_transfer_up_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿上划结果查询(/rest/v1.0/divide/book-transfer-up/query)
     *
     * @test
     */
    public function book_transfer_up_v1_1Test()
    {
        $request = new Model\BookTransferUpV11Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferUpQueryReqDTO());
        try{
            $response = self::$client->book_transfer_up_v1_1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->book_transfer_up_v1_1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿划拨(/rest/v1.0/divide/book-transfer/apply)
     *
     * @test
     */
    public function book_transfer_v1_0Test()
    {
        $request = new Model\BookTransferV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopBookTransferReqDTO());
        try{
            $response = self::$client->book_transfer_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->book_transfer_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 订单分账-完结分账(/rest/v1.0/divide/complete)
     *
     * @test
     */
    public function completeTest()
    {
        $request = new Model\CompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetailDesc("divideDetailDesc_example");
        try{
            $response = self::$client->complete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->complete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 订单分账-完结分账(/rest/v1.0/divide/complete)
     *
     * @test
     */
    public function complete_v1_0Test()
    {
        $request = new Model\CompleteV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetailDesc("divideDetailDesc_example");
        try{
            $response = self::$client->complete_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->complete_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约协议验证码确认(/rest/v1.0/divide/protocol/confirm)
     *
     * @test
     */
    public function protocolConfirmTest()
    {
        $request = new Model\ProtocolConfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopVerifyCodeConfirmReqDTO());
        try{
            $response = self::$client->protocolConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocolConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询签约协议(/rest/v1.0/divide/protocol/query)
     *
     * @test
     */
    public function protocolQueryTest()
    {
        $request = new Model\ProtocolQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopDivideProtocolQueryReqDTO());
        try{
            $response = self::$client->protocolQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocolQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约协议埋点(/rest/v1.0/divide/protocol/tracking)
     *
     * @test
     */
    public function protocolTrackingTest()
    {
        $request = new Model\ProtocolTrackingRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\SignTrackingReqDTO());
        try{
            $response = self::$client->protocolTracking($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocolTracking: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账协议申请(/rest/v1.0/divide/ptotocol/apply)
     *
     * @test
     */
    public function protocol_apply_v1_0Test()
    {
        $request = new Model\ProtocolApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopDivideProtocolReqDTO());
        try{
            $response = self::$client->protocol_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocol_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约协议验证码确认(/rest/v1.0/divide/protocol/confirm)
     *
     * @test
     */
    public function protocol_confirm_v1_0Test()
    {
        $request = new Model\ProtocolConfirmV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopVerifyCodeConfirmReqDTO());
        try{
            $response = self::$client->protocol_confirm_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocol_confirm_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询签约协议(/rest/v1.0/divide/protocol/query)
     *
     * @test
     */
    public function protocol_query_v1_0Test()
    {
        $request = new Model\ProtocolQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopDivideProtocolQueryReqDTO());
        try{
            $response = self::$client->protocol_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocol_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约协议埋点(/rest/v1.0/divide/protocol/tracking)
     *
     * @test
     */
    public function protocol_tracking_v1_0Test()
    {
        $request = new Model\ProtocolTrackingV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\SignTrackingReqDTO());
        try{
            $response = self::$client->protocol_tracking_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->protocol_tracking_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账协议申请(/rest/v1.0/divide/ptotocol/apply)
     *
     * @test
     */
    public function ptotocolApplyTest()
    {
        $request = new Model\PtotocolApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopDivideProtocolReqDTO());
        try{
            $response = self::$client->ptotocolApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->ptotocolApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单分账结果(/rest/v1.0/divide/query)
     *
     * @test
     */
    public function queryTest()
    {
        $request = new Model\QueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 批量查询分账结果(/rest/v1.0/divide/query-page)
     *
     * @test
     */
    public function queryPageTest()
    {
        $request = new Model\QueryPageRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\DivideRecordReqPageDTO());
        try{
            $response = self::$client->queryPage($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->queryPage: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 批量查询分账结果(/rest/v1.0/divide/query-page)
     *
     * @test
     */
    public function queryPage_v1_0Test()
    {
        $request = new Model\QueryPageV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\DivideRecordReqPageDTO());
        try{
            $response = self::$client->queryPage_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->queryPage_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单分账结果(/rest/v1.0/divide/query)
     *
     * @test
     */
    public function query_v1_0Test()
    {
        $request = new Model\QueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 余额分账退回回单(/rest/v1.0/divide/receipt/divide-back)
     *
     * @test
     */
    public function receiptDivideBackTest()
    {
        $request = new Model\ReceiptDivideBackRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideBackReceiptReqDTO());
        try{
            $response = self::$client->receiptDivideBack($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->receiptDivideBack: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账回单(/yos/v1.0/divide/receipt/download)
     *
     * @test
     */
    public function receiptDownloadTest()
    {
        $request = new Model\ReceiptDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setLedgerNo("ledgerNo_example");
        try{
            $response = self::$client->receiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账回单(/yos/v1.0/divide/receipt/download)
     *
     * @test
     */
    public function receipt_download_v1_0Test()
    {
        $request = new Model\ReceiptDownloadV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setLedgerNo("ledgerNo_example");
        try{
            $response = self::$client->receipt_download_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加余额分账规则(/rest/v1.0/divide/yee-divide-rule/add)
     *
     * @test
     */
    public function yeeDivideRuleAddTest()
    {
        $request = new Model\YeeDivideRuleAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleAddReqDTO());
        try{
            $response = self::$client->yeeDivideRuleAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yeeDivideRuleAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 失效余额分账规则(/rest/v1.0/divide/yee-divide-rule/del)
     *
     * @test
     */
    public function yeeDivideRuleDelTest()
    {
        $request = new Model\YeeDivideRuleDelRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleDeleteReqDTO());
        try{
            $response = self::$client->yeeDivideRuleDel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yeeDivideRuleDel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账规则(/rest/v1.0/divide/yee-divide-rule/query)
     *
     * @test
     */
    public function yeeDivideRuleQueryTest()
    {
        $request = new Model\YeeDivideRuleQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleQueryReqDTO());
        try{
            $response = self::$client->yeeDivideRuleQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yeeDivideRuleQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改余额分账规则(/rest/v1.0/divide/yee-divide-rule/update)
     *
     * @test
     */
    public function yeeDivideRuleUpdateTest()
    {
        $request = new Model\YeeDivideRuleUpdateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleUpdateReqDTO());
        try{
            $response = self::$client->yeeDivideRuleUpdate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yeeDivideRuleUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加余额分账规则(/rest/v1.0/divide/yee-divide-rule/add)
     *
     * @test
     */
    public function yee_divide_rule_add_v1_0Test()
    {
        $request = new Model\YeeDivideRuleAddV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleAddReqDTO());
        try{
            $response = self::$client->yee_divide_rule_add_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yee_divide_rule_add_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 失效余额分账规则(/rest/v1.0/divide/yee-divide-rule/del)
     *
     * @test
     */
    public function yee_divide_rule_del_v1_0Test()
    {
        $request = new Model\YeeDivideRuleDelV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleDeleteReqDTO());
        try{
            $response = self::$client->yee_divide_rule_del_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yee_divide_rule_del_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询余额分账规则(/rest/v1.0/divide/yee-divide-rule/query)
     *
     * @test
     */
    public function yee_divide_rule_query_v1_0Test()
    {
        $request = new Model\YeeDivideRuleQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleQueryReqDTO());
        try{
            $response = self::$client->yee_divide_rule_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yee_divide_rule_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改余额分账规则(/rest/v1.0/divide/yee-divide-rule/update)
     *
     * @test
     */
    public function yee_divide_rule_update_v1_0Test()
    {
        $request = new Model\YeeDivideRuleUpdateV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Divide\Model\YopYeeDivideRuleUpdateReqDTO());
        try{
            $response = self::$client->yee_divide_rule_update_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->yee_divide_rule_update_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
