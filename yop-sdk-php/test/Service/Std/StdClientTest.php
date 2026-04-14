<?php


namespace Yeepay\Yop\Sdk\Service\Std;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = StdClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = StdClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 账单下载(/yos/v1.0/std/bill/bill-download)
     *
     * @test
     */
    public function billBillDownloadTest()
    {
        $request = new Model\BillBillDownloadRequest();

        $request->setBillDate("billDate_example");
        $request->setBillCode("billCode_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billBillDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billBillDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账接收方账单下载(/yos/v1.0/std/bill/divide-receiver-download)
     *
     * @test
     */
    public function billDivideReceiverDownloadTest()
    {
        $request = new Model\BillDivideReceiverDownloadRequest();

        $request->setDayString("2024-09-01");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billDivideReceiverDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billDivideReceiverDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账日对账下载(/yos/v1.0/std/bill/dividedaydownload)
     *
     * @test
     */
    public function billDividedaydownloadTest()
    {
        $request = new Model\BillDividedaydownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setDayString("dayString_example");
        try{
            $response = self::$client->billDividedaydownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billDividedaydownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金账单申请(/rest/v1.0/std/bill/fundbill/apply)
     *
     * @test
     */
    public function billFundbillApplyTest()
    {
        $request = new Model\BillFundbillApplyRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBillFormat("billFormat_example");
        try{
            $response = self::$client->billFundbillApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金账单下载(/yos/v1.0/std/bill/fundbill/download)
     *
     * @test
     */
    public function billFundbillDownloadTest()
    {
        $request = new Model\BillFundbillDownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setFileId("fileId_example");
        try{
            $response = self::$client->billFundbillDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 日终余额账单申请(/rest/v1.0/std/bill/fundbill-endbalance/apply)
     *
     * @test
     */
    public function billFundbillEndbalanceApplyTest()
    {
        $request = new Model\BillFundbillEndbalanceApplyRequest();

        $request->setBookDate("bookDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        try{
            $response = self::$client->billFundbillEndbalanceApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillEndbalanceApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金流水明细查询(/rest/v1.0/std/bill/fundbill/flow/query)
     *
     * @test
     */
    public function billFundbillFlowQueryTest()
    {
        $request = new Model\BillFundbillFlowQueryRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPage(56);
        $request->setSize(56);
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billFundbillFlowQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillFlowQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金流水汇总查询(/rest/v1.0/std/bill/fundbill/flow/sum)
     *
     * @test
     */
    public function billFundbillFlowSumTest()
    {
        $request = new Model\BillFundbillFlowSumRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->billFundbillFlowSum($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billFundbillFlowSum: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 下载结算账单(/yos/v1.0/std/bill/settlebill/download)
     *
     * @test
     */
    public function billSettlebillDownloadTest()
    {
        $request = new Model\BillSettlebillDownloadRequest();

        $request->setSettleDate("settleDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSettleBatchNo("settleBatchNo_example");
        try{
            $response = self::$client->billSettlebillDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billSettlebillDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 交易日对账下载(/yos/v1.0/std/bill/tradedaydownload)
     *
     * @test
     */
    public function billTradedaydownloadTest()
    {
        $request = new Model\BillTradedaydownloadRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setDayString("dayString_example");
        $request->setDataType("dataType_example");
        try{
            $response = self::$client->billTradedaydownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->billTradedaydownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 分账接收方账单下载(/yos/v1.0/std/bill/divide-receiver-download)
     *
     * @test
     */
    public function bill_divide_receiver_downloadTest()
    {
        $request = new Model\BillDivideReceiverDownloadRequest();

        $request->setDayString("2024-09-01");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bill_divide_receiver_download($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->bill_divide_receiver_download: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金账单申请(/rest/v1.0/std/bill/fundbill/apply)
     *
     * @test
     */
    public function bill_fundbill_apply_v1_0Test()
    {
        $request = new Model\BillFundbillApplyV10Request();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setAccountType("accountType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setBillFormat("billFormat_example");
        try{
            $response = self::$client->bill_fundbill_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->bill_fundbill_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金流水明细查询(/rest/v1.0/std/bill/fundbill/flow/query)
     *
     * @test
     */
    public function bill_fundbill_flow_query_v1_0Test()
    {
        $request = new Model\BillFundbillFlowQueryV10Request();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPage(56);
        $request->setSize(56);
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bill_fundbill_flow_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->bill_fundbill_flow_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金流水汇总查询(/rest/v1.0/std/bill/fundbill/flow/sum)
     *
     * @test
     */
    public function bill_fundbill_flow_sum_v1_0Test()
    {
        $request = new Model\BillFundbillFlowSumV10Request();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTrxCode("trxCode_example");
        $request->setAccountType("accountType_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bill_fundbill_flow_sum_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->bill_fundbill_flow_sum_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新信息认证系统-认证请求(/rest/v1.0/std/cert/order)
     *
     * @test
     */
    public function certOrderTest()
    {
        $request = new Model\CertOrderRequest();

        $request->setMerchantNo("100000000000");
        $request->setAuthType("authType_example");
        $request->setRequestNo("requestNo_example");
        $request->setIdCardNo("230231199510101010");
        $request->setUserName("易小宝");
        $request->setBankCardNo("6217876555556554324");
        $request->setRequestTime("2019-09-09 00:00:00");
        $request->setRemark("remark_example");
        $request->setMobilePhone("mobilePhone_example");
        $request->setIdCardType("idCardType_example");
        $request->setClientSource("clientSource_example");
        $request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");
        try{
            $response = self::$client->certOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->certOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 日终余额查询(/rest/v1.0/std/end-balance/query)
     *
     * @test
     */
    public function endBalanceQueryTest()
    {
        $request = new Model\EndBalanceQueryRequest();

        $request->setDate("2025-03-01");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->endBalanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->endBalanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 日终余额查询(/rest/v1.0/std/end-balance/query)
     *
     * @test
     */
    public function end_balance_query_v1_0Test()
    {
        $request = new Model\EndBalanceQueryV10Request();

        $request->setDate("2025-03-01");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->end_balance_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->end_balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 账单下载(/yos/v1.0/std/bill/bill-download)
     *
     * @test
     */
    public function orca_bill_downloadTest()
    {
        $request = new Model\OrcaBillDownloadRequest();

        $request->setBillDate("billDate_example");
        $request->setBillCode("billCode_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->orca_bill_download($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->orca_bill_download: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金证明申请(/rest/v1.0/std/voucher/asset-apply)
     *
     * @test
     */
    public function voucherAssetApplyTest()
    {
        $request = new Model\VoucherAssetApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Std\Model\YopGenerationAssetVoucherRequestDTO());
        try{
            $response = self::$client->voucherAssetApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->voucherAssetApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金证明等凭证下载(/yos/v1.0/std/voucher/download)
     *
     * @test
     */
    public function voucherDownloadTest()
    {
        $request = new Model\VoucherDownloadRequest();

        $request->setVoucherNo("voucherNo_example");
        try{
            $response = self::$client->voucherDownload($request);
            $response->save('targetFilePath');
        }catch (\Exception $e) {
            echo 'Exception when calling StdClient->voucherDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
}
