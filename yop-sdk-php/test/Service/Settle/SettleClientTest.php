<?php


namespace Yeepay\Yop\Sdk\Service\Settle;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Settle\Model as Model;

class SettleClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = SettleClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = SettleClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 待结算金额查询(/rest/v1.0/settle/balance/query)
     *
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOperatePeriod("ALL");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 待结算金额查询(/rest/v1.0/settle/balance/query)
     *
     * @test
     */
    public function balance_query_v1_0Test()
    {
        $request = new Model\BalanceQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOperatePeriod("ALL");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->balance_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算对账文件获取接口(/yos/v1.0/settle/file/get)
     *
     * @test
     */
    public function fileGetTest()
    {
        $request = new Model\FileGetRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleDate("settleDate_example");
        try{
            $response = self::$client->fileGet($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->fileGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算对账文件获取接口(/yos/v1.0/settle/file/get)
     *
     * @test
     */
    public function file_get_v1_0Test()
    {
        $request = new Model\FileGetV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleDate("settleDate_example");
        try{
            $response = self::$client->file_get_v1_0($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->file_get_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户申请结算回单(/rest/v1.0/settle/receipt/apply)
     *
     * @test
     */
    public function receiptApplyTest()
    {
        $request = new Model\ReceiptApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());
        try{
            $response = self::$client->receiptApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->receiptApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算回单下载(/yos/v1.0/settle/receipt/get)
     *
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        try{
            $response = self::$client->receiptGet($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算订单重新出款(/rest/v1.0/settle/record/retry)
     *
     * @test
     */
    public function recordRetryTest()
    {
        $request = new Model\RecordRetryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleRecordRetryRequestDto());
        try{
            $response = self::$client->recordRetry($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordRetry: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算订单重新出款(/rest/v1.0/settle/record/retry)
     *
     * @test
     */
    public function record_retry_v1_0Test()
    {
        $request = new Model\RecordRetryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleRecordRetryRequestDto());
        try{
            $response = self::$client->record_retry_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->record_retry_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询结算到账情况(/rest/v1.0/settle/records-order/query)
     *
     * @test
     */
    public function recordsOrderQueryTest()
    {
        $request = new Model\RecordsOrderQueryRequest();

        $request->setRequestId("requestId_example");
        $request->setBusinessType("businessType_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setSettleMerchantNo("settleMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->recordsOrderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordsOrderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算记录分页查询(/rest/v1.0/settle/records/page)
     *
     * @test
     */
    public function recordsPageTest()
    {
        $request = new Model\RecordsPageRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordPageQueryRequestDto());
        try{
            $response = self::$client->recordsPage($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordsPage: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算记录查询(/rest/v1.0/settle/records/query)
     *
     * @test
     */
    public function recordsQueryTest()
    {
        $request = new Model\RecordsQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->recordsQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->recordsQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算记录分页查询(/rest/v1.0/settle/records/page)
     *
     * @test
     */
    public function records_page_v1_0Test()
    {
        $request = new Model\RecordsPageV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordPageQueryRequestDto());
        try{
            $response = self::$client->records_page_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->records_page_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算记录查询(/rest/v1.0/settle/records/query)
     *
     * @test
     */
    public function records_query_v1_0Test()
    {
        $request = new Model\RecordsQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setSettleRequestBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleRequestEndTime(new \DateTime("2013-10-20 19:20:30"));
        try{
            $response = self::$client->records_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->records_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自助结算申请(/rest/v1.0/settle/self-settle/apply)
     *
     * @test
     */
    public function selfSettleApplyTest()
    {
        $request = new Model\SelfSettleApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setOperatePeriod("operatePeriod_example");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleAmount(1.2);
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBankRemark("bankRemark_example");
        $request->setExtInfo("extInfo_example");
        try{
            $response = self::$client->selfSettleApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->selfSettleApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自助结算申请(/rest/v1.0/settle/self-settle/apply)
     *
     * @test
     */
    public function self_settle_apply_v1_0Test()
    {
        $request = new Model\SelfSettleApplyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleRequestNo("settleRequestNo_example");
        $request->setOperatePeriod("operatePeriod_example");
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setSettleAmount(1.2);
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBankRemark("bankRemark_example");
        $request->setExtInfo("extInfo_example");
        try{
            $response = self::$client->self_settle_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->self_settle_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新增结算卡(/rest/v1.0/settle/settle-card/add)
     *
     * @test
     */
    public function settleCardAddTest()
    {
        $request = new Model\SettleCardAddRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settleCardAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleCardAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改结算卡(/rest/v1.0/settle/settle-card/modify)
     *
     * @test
     */
    public function settleCardModifyTest()
    {
        $request = new Model\SettleCardModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settleCardModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleCardModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改结算方向比例(/rest/v1.0/settle/settle-way/modify-ratio)
     *
     * @test
     */
    public function settleWayModifyRatioTest()
    {
        $request = new Model\SettleWayModifyRatioRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());
        try{
            $response = self::$client->settleWayModifyRatio($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleWayModifyRatio: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询结算账户(/rest/v1.0/settle/settle-way/query)
     *
     * @test
     */
    public function settleWayQueryTest()
    {
        $request = new Model\SettleWayQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->settleWayQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settleWayQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新增结算卡(/rest/v1.0/settle/settle-card/add)
     *
     * @test
     */
    public function settle_card_add_v1_0Test()
    {
        $request = new Model\SettleCardAddV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settle_card_add_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_card_add_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改结算卡(/rest/v1.0/settle/settle-card/modify)
     *
     * @test
     */
    public function settle_card_modify_v1_0Test()
    {
        $request = new Model\SettleCardModifyV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBankCardType("bankCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setBrancgCode("brancgCode_example");
        $request->setDefaultSettleCard(true);
        try{
            $response = self::$client->settle_card_modify_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_card_modify_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户申请结算回单(/rest/v1.0/settle/receipt/apply)
     *
     * @test
     */
    public function settle_receipt_apply_v1_0Test()
    {
        $request = new Model\SettleReceiptApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptRequestDTO());
        try{
            $response = self::$client->settle_receipt_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_receipt_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结算回单下载(/yos/v1.0/settle/receipt/get)
     *
     * @test
     */
    public function settle_receipt_get_v1_0Test()
    {
        $request = new Model\SettleReceiptGetV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setReceiverMerchantNo("receiverMerchantNo_example");
        try{
            $response = self::$client->settle_receipt_get_v1_0($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_receipt_get_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询结算到账情况(/rest/v1.0/settle/records-order/query)
     *
     * @test
     */
    public function settle_recod_order_query_v1_0Test()
    {
        $request = new Model\SettleRecodOrderQueryV10Request();

        $request->setRequestId("requestId_example");
        $request->setBusinessType("businessType_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setSettleMerchantNo("settleMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->settle_recod_order_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_recod_order_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改结算方向比例(/rest/v1.0/settle/settle-way/modify-ratio)
     *
     * @test
     */
    public function settle_way_modify_ratio_v1_0Test()
    {
        $request = new Model\SettleWayModifyRatioV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Settle\Model\ModifySettleWayRatioRequestDto());
        try{
            $response = self::$client->settle_way_modify_ratio_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_way_modify_ratio_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询结算账户(/rest/v1.0/settle/settle-way/query)
     *
     * @test
     */
    public function settle_way_query_v1_0Test()
    {
        $request = new Model\SettleWayQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->settle_way_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling SettleClient->settle_way_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
