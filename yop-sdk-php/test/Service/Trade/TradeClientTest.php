<?php


namespace Yeepay\Yop\Sdk\Service\Trade;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Trade\Model as Model;

class TradeClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = TradeClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = TradeClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 代理退款(/rest/v1.0/trade/agentrefund)
     *
     * @test
     */
    public function agentrefundTest()
    {
        $request = new Model\AgentrefundRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO());
        try{
            $response = self::$client->agentrefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->agentrefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代理退款(/rest/v1.0/trade/agentrefund)
     *
     * @test
     */
    public function agentrefund_v1_0Test()
    {
        $request = new Model\AgentrefundV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\RequestAgentRefundDTO());
        try{
            $response = self::$client->agentrefund_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->agentrefund_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询合单退款(/rest/v1.0/trade/refund/combine-query)
     *
     * @test
     */
    public function batch_order_refund_query_v1_0Test()
    {
        $request = new Model\BatchOrderRefundQueryV10Request();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRefundRequestId("refundRequestId_example");
        try{
            $response = self::$client->batch_order_refund_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->batch_order_refund_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请合单退款(/rest/v1.0/trade/refund/combine)
     *
     * @test
     */
    public function batch_order_refund_v1_0Test()
    {
        $request = new Model\BatchOrderRefundV10Request();

        $request->setOrderId("orderId_example");
        $request->setDescription("description_example");
        $request->setMemo("memo_example");
        $request->setSubRefundOrders("[{\"merchantNo\":\"000001\",\"orderId\":\"000001\",\"refundRequestId\":\"000001\",\"refundAmount\":\"1.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"},{\"merchantNo\":\"000002\",\"orderId\":\"000002\",\"refundRequestId\":\"000002\",\"refundAmount\":\"2.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"}]");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRefundAmount("refundAmount_example");
        try{
            $response = self::$client->batch_order_refund_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->batch_order_refund_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 合并订单退款回单(/rest/v1.0/trade/combine-refund-download)
     *
     * @test
     */
    public function combineRefundDownloadTest()
    {
        $request = new Model\CombineRefundDownloadRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO());
        try{
            $response = self::$client->combineRefundDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->combineRefundDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 合并订单退款回单(/rest/v1.0/trade/combine-refund-download)
     *
     * @test
     */
    public function combine_refund_receipt_download_v1_0Test()
    {
        $request = new Model\CombineRefundReceiptDownloadV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\CombineOrderRefundReceiptReqDTO());
        try{
            $response = self::$client->combine_refund_receipt_download_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->combine_refund_receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作交易限额预警(/rest/v1.0/trade/config/limit/alert/operate)
     *
     * @test
     */
    public function configLimitAlertOperateTest()
    {
        $request = new Model\ConfigLimitAlertOperateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLimitConfigId(1.2);
        $request->setAlertAmount(1.2);
        $request->setAlertNotifyUrl("alertNotifyUrl_example");
        try{
            $response = self::$client->configLimitAlertOperate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configLimitAlertOperate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作限额配置(/rest/v1.0/trade/config/limit/operate)
     *
     * @test
     */
    public function configLimitOperateTest()
    {
        $request = new Model\ConfigLimitOperateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperateType("operateType_example");
        $request->setLimitCycleType("limitCycleType_example");
        $request->setLimitStartDate("2023-12-12");
        $request->setLimitAmount(1.2);
        $request->setLimitConfigId(1.2);
        try{
            $response = self::$client->configLimitOperate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configLimitOperate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询限额配置(/rest/v1.0/trade/config/limit/query)
     *
     * @test
     */
    public function configLimitQueryTest()
    {
        $request = new Model\ConfigLimitQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLimitConfigId(1.2);
        try{
            $response = self::$client->configLimitQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configLimitQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 删除商户交易服务配置(/rest/v1.0/trade/config/template/delete)
     *
     * @test
     */
    public function configTemplateDeleteTest()
    {
        $request = new Model\ConfigTemplateDeleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRange("merchantRange_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->configTemplateDelete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configTemplateDelete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作商户交易服务配置(/rest/v1.0/trade/config/template/operate)
     *
     * @test
     */
    public function configTemplateOperateTest()
    {
        $request = new Model\ConfigTemplateOperateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantRange("merchantRange_example");
        $request->setOperateType("operateType_example");
        $request->setDivideFlag("divideFlag_example");
        $request->setPayNotifyUrl("payNotifyUrl_example");
        $request->setCsNotifyUrl("csNotifyUrl_example");
        $request->setRefundNotifyUrl("refundNotifyUrl_example");
        $request->setLedgerNoNotifyUrl("ledgerNoNotifyUrl_example");
        $request->setFailNotify("failNotify_example");
        $request->setTimeOutNotify("timeOutNotify_example");
        $request->setPreAuthProcessType("DELAY_ACCOUNT");
        try{
            $response = self::$client->configTemplateOperate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configTemplateOperate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户交易服务配置(/rest/v1.0/trade/config/template/query)
     *
     * @test
     */
    public function configTemplateQueryTest()
    {
        $request = new Model\ConfigTemplateQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->configTemplateQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->configTemplateQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 葫芦商户交易下单(/rest/v1.0/trade/hulu/order-create)
     *
     * @test
     */
    public function huluOrderCreateTest()
    {
        $request = new Model\HuluOrderCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO());
        try{
            $response = self::$client->huluOrderCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->huluOrderCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 葫芦商户退款下单(/rest/v1.0/trade/hulu/refund-create)
     *
     * @test
     */
    public function huluRefundCreateTest()
    {
        $request = new Model\HuluRefundCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO());
        try{
            $response = self::$client->huluRefundCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->huluRefundCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 葫芦商户交易下单(/rest/v1.0/trade/hulu/order-create)
     *
     * @test
     */
    public function hulu_order_createTest()
    {
        $request = new Model\HuluOrderCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopHuluCreateOrderReqDTO());
        try{
            $response = self::$client->hulu_order_create($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->hulu_order_create: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 葫芦商户退款下单(/rest/v1.0/trade/hulu/refund-create)
     *
     * @test
     */
    public function hulu_refund_createTest()
    {
        $request = new Model\HuluRefundCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Trade\Model\YopCreateHuluRefundReqDTO());
        try{
            $response = self::$client->hulu_refund_create($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->hulu_refund_create: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 交易下单(/rest/v1.0/trade/order)
     *
     * @test
     */
    public function orderTest()
    {
        $request = new Model\OrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("100.50");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setSubOrderDetail("subOrderDetail_example");
        $request->setExpiredTime("expiredTime_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"payWay\":\"POS\"}");
        $request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setPayerInfo("{\"bankCardNo\":\"6225750005831234\",\"cardName\":\"爱丽丝\",\"idCardNo\":\"130225199006093323\",\"mobilePhoneNo\":\"13902092131\",\"userID\":\"20056788\"}");
        $request->setPayMerchantNo("payMerchantNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
        $request->setTradeType("tradeType_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setPreAuthNotifyUrl("http://xxx.xxx.com/xxx");
        $request->setReceiverAccountType("receiverAccountType_example");
        try{
            $response = self::$client->order($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 关闭订单(/rest/v1.0/trade/order/close)
     *
     * @test
     */
    public function orderCloseTest()
    {
        $request = new Model\OrderCloseRequest();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->orderClose($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderClose: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询合并订单(/rest/v1.0/trade/order/combine-query)
     *
     * @test
     */
    public function orderCombineQueryTest()
    {
        $request = new Model\OrderCombineQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->orderCombineQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderCombineQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单(/rest/v1.0/trade/order/query)
     *
     * @test
     */
    public function orderQueryTest()
    {
        $request = new Model\OrderQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->orderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 关闭订单(/rest/v1.0/trade/order/close)
     *
     * @test
     */
    public function order_close_v1_0Test()
    {
        $request = new Model\OrderCloseV10Request();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->order_close_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order_close_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询合并订单(/rest/v1.0/trade/order/combine-query)
     *
     * @test
     */
    public function order_combine_query_v1_0Test()
    {
        $request = new Model\OrderCombineQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->order_combine_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order_combine_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询订单(/rest/v1.0/trade/order/query)
     *
     * @test
     */
    public function order_query_v1_0Test()
    {
        $request = new Model\OrderQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->order_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 交易下单(/rest/v1.0/trade/order)
     *
     * @test
     */
    public function order_v1_0Test()
    {
        $request = new Model\OrderV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("100.50");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setSubOrderDetail("subOrderDetail_example");
        $request->setExpiredTime("expiredTime_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"payWay\":\"POS\"}");
        $request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setPayerInfo("{\"bankCardNo\":\"6225750005831234\",\"cardName\":\"爱丽丝\",\"idCardNo\":\"130225199006093323\",\"mobilePhoneNo\":\"13902092131\",\"userID\":\"20056788\"}");
        $request->setPayMerchantNo("payMerchantNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
        $request->setTradeType("tradeType_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setPreAuthNotifyUrl("http://xxx.xxx.com/xxx");
        $request->setReceiverAccountType("receiverAccountType_example");
        try{
            $response = self::$client->order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 合并订单回单(/rest/v1.0/trade/receipt/combine-download)
     *
     * @test
     */
    public function receiptCombineDownloadTest()
    {
        $request = new Model\ReceiptCombineDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->receiptCombineDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->receiptCombineDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 交易回单(/yos/v1.0/trade/receipt/download)
     *
     * @test
     */
    public function receiptDownloadTest()
    {
        $request = new Model\ReceiptDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->receiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 合并订单回单(/rest/v1.0/trade/receipt/combine-download)
     *
     * @test
     */
    public function receipt_combine_downloadTest()
    {
        $request = new Model\ReceiptCombineDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->receipt_combine_download($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->receipt_combine_download: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 交易回单(/yos/v1.0/trade/receipt/download)
     *
     * @test
     */
    public function receipt_download_v1_0Test()
    {
        $request = new Model\ReceiptDownloadV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->receipt_download_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请退款(/rest/v1.0/trade/refund)
     *
     * @test
     */
    public function refundTest()
    {
        $request = new Model\RefundRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("100000000187142947011");
        $request->setRefundRequestId("refundorder987654");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setRefundAmount("88.88");
        $request->setDescription("用户申请退货并退款");
        $request->setMemo("退款");
        $request->setRefundAccountType("FUND_ACCOUNT");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setDivideBackDetail("[{\"ledgerNo\":\"10080028707\",\"amount\":1.20,\"divideDetailNo\":\"1010202408010000013288965686\"},{\"ledgerNo\":\"10080028770\",\"divBackAccountType\":\"DIVIDE_ACCOUNT\"}]");
        $request->setTerminalInfo("{\"notifyEquipmentNos\":\"97002100231636\"}");
        $request->setYpPromotionRefundInfo("[{\"ypRefundAmount\":\"0.02\"}]");
        $request->setBankOrderId("bankOrderId_example");
        try{
            $response = self::$client->refund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请合单退款(/rest/v1.0/trade/refund/combine)
     *
     * @test
     */
    public function refundCombineTest()
    {
        $request = new Model\RefundCombineRequest();

        $request->setOrderId("orderId_example");
        $request->setDescription("description_example");
        $request->setMemo("memo_example");
        $request->setSubRefundOrders("[{\"merchantNo\":\"000001\",\"orderId\":\"000001\",\"refundRequestId\":\"000001\",\"refundAmount\":\"1.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"},{\"merchantNo\":\"000002\",\"orderId\":\"000002\",\"refundRequestId\":\"000002\",\"refundAmount\":\"2.00\",\"description\":\"描述\",\"memo\":\"对账备注\",\"refundType\":\"REFUNDRETURN\"}]");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRefundAmount("refundAmount_example");
        try{
            $response = self::$client->refundCombine($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundCombine: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询合单退款(/rest/v1.0/trade/refund/combine-query)
     *
     * @test
     */
    public function refundCombineQueryTest()
    {
        $request = new Model\RefundCombineQueryRequest();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRefundRequestId("refundRequestId_example");
        try{
            $response = self::$client->refundCombineQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundCombineQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结束退款(/rest/v1.0/trade/refund/end)
     *
     * @test
     */
    public function refundEndTest()
    {
        $request = new Model\RefundEndRequest();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refundEnd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundEnd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请极速退款(/rest/v1.0/trade/refund/fast)
     *
     * @test
     */
    public function refundFastTest()
    {
        $request = new Model\RefundFastRequest();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setRefundAmount("refundAmount_example");
        $request->setDescription("description_example");
        $request->setRefundAccountType("refundAccountType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCardInfo("cardInfo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refundFast($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundFast: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询退款(/rest/v1.0/trade/refund/query)
     *
     * @test
     */
    public function refundQueryTest()
    {
        $request = new Model\RefundQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueRefundNo("uniqueRefundNo_example");
        try{
            $response = self::$client->refundQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 退款回单(/yos/v1.0/trade/refund/receipt/download)
     *
     * @test
     */
    public function refundReceiptDownloadTest()
    {
        $request = new Model\RefundReceiptDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        try{
            $response = self::$client->refundReceiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundReceiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 上送卡信息退款(/rest/v1.0/trade/refund/supply)
     *
     * @test
     */
    public function refundSupplyTest()
    {
        $request = new Model\RefundSupplyRequest();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setCardInfo("cardInfo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refundSupply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundSupply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 结束退款(/rest/v1.0/trade/refund/end)
     *
     * @test
     */
    public function refund_end_v1_0Test()
    {
        $request = new Model\RefundEndV10Request();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refund_end_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_end_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请极速退款(/rest/v1.0/trade/refund/fast)
     *
     * @test
     */
    public function refund_fast_v1_0Test()
    {
        $request = new Model\RefundFastV10Request();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setRefundAmount("refundAmount_example");
        $request->setDescription("description_example");
        $request->setRefundAccountType("refundAccountType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCardInfo("cardInfo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refund_fast_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_fast_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询退款(/rest/v1.0/trade/refund/query)
     *
     * @test
     */
    public function refund_query_v1_0Test()
    {
        $request = new Model\RefundQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueRefundNo("uniqueRefundNo_example");
        try{
            $response = self::$client->refund_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 退款回单(/yos/v1.0/trade/refund/receipt/download)
     *
     * @test
     */
    public function refund_receipt_download_v1_0Test()
    {
        $request = new Model\RefundReceiptDownloadV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        try{
            $response = self::$client->refund_receipt_download_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_receipt_download_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 上送卡信息退款(/rest/v1.0/trade/refund/supply)
     *
     * @test
     */
    public function refund_supply_v1_0Test()
    {
        $request = new Model\RefundSupplyV10Request();

        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setCardInfo("cardInfo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->refund_supply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_supply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请退款(/rest/v1.0/trade/refund)
     *
     * @test
     */
    public function refund_v1_0Test()
    {
        $request = new Model\RefundV10Request();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("100000000187142947011");
        $request->setRefundRequestId("refundorder987654");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setRefundAmount("88.88");
        $request->setDescription("用户申请退货并退款");
        $request->setMemo("退款");
        $request->setRefundAccountType("FUND_ACCOUNT");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setDivideBackDetail("[{\"ledgerNo\":\"10080028707\",\"amount\":1.20,\"divideDetailNo\":\"1010202408010000013288965686\"},{\"ledgerNo\":\"10080028770\",\"divBackAccountType\":\"DIVIDE_ACCOUNT\"}]");
        $request->setTerminalInfo("{\"notifyEquipmentNos\":\"97002100231636\"}");
        $request->setYpPromotionRefundInfo("[{\"ypRefundAmount\":\"0.02\"}]");
        $request->setBankOrderId("bankOrderId_example");
        try{
            $response = self::$client->refund_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作交易限额预警(/rest/v1.0/trade/config/limit/alert/operate)
     *
     * @test
     */
    public function trade_config_limit_alert_operate_v1_0Test()
    {
        $request = new Model\TradeConfigLimitAlertOperateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLimitConfigId(1.2);
        $request->setAlertAmount(1.2);
        $request->setAlertNotifyUrl("alertNotifyUrl_example");
        try{
            $response = self::$client->trade_config_limit_alert_operate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_limit_alert_operate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作限额配置(/rest/v1.0/trade/config/limit/operate)
     *
     * @test
     */
    public function trade_config_limit_operate_v1_0Test()
    {
        $request = new Model\TradeConfigLimitOperateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOperateType("operateType_example");
        $request->setLimitCycleType("limitCycleType_example");
        $request->setLimitStartDate("2023-12-12");
        $request->setLimitAmount(1.2);
        $request->setLimitConfigId(1.2);
        try{
            $response = self::$client->trade_config_limit_operate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_limit_operate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询限额配置(/rest/v1.0/trade/config/limit/query)
     *
     * @test
     */
    public function trade_config_limit_query_v1_0Test()
    {
        $request = new Model\TradeConfigLimitQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setLimitConfigId(1.2);
        try{
            $response = self::$client->trade_config_limit_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_limit_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 删除商户交易服务配置(/rest/v1.0/trade/config/template/delete)
     *
     * @test
     */
    public function trade_config_template_delete_v1_0Test()
    {
        $request = new Model\TradeConfigTemplateDeleteV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRange("merchantRange_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->trade_config_template_delete_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_template_delete_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 操作商户交易服务配置(/rest/v1.0/trade/config/template/operate)
     *
     * @test
     */
    public function trade_config_template_operate_v1_0Test()
    {
        $request = new Model\TradeConfigTemplateOperateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantRange("merchantRange_example");
        $request->setOperateType("operateType_example");
        $request->setDivideFlag("divideFlag_example");
        $request->setPayNotifyUrl("payNotifyUrl_example");
        $request->setCsNotifyUrl("csNotifyUrl_example");
        $request->setRefundNotifyUrl("refundNotifyUrl_example");
        $request->setLedgerNoNotifyUrl("ledgerNoNotifyUrl_example");
        $request->setFailNotify("failNotify_example");
        $request->setTimeOutNotify("timeOutNotify_example");
        $request->setPreAuthProcessType("DELAY_ACCOUNT");
        try{
            $response = self::$client->trade_config_template_operate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_template_operate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户交易服务配置(/rest/v1.0/trade/config/template/query)
     *
     * @test
     */
    public function trade_config_template_query_v1_0Test()
    {
        $request = new Model\TradeConfigTemplateQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->trade_config_template_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->trade_config_template_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
