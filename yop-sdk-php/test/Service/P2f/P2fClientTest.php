<?php


namespace Yeepay\Yop\Sdk\Service\P2f;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\P2f\Model as Model;

class P2fClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = P2fClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = P2fClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 对公开户(/rest/v1.0/p2f/company-finance/account)
     *
     * @test
     */
    public function companyFinanceAccountTest()
    {
        $request = new Model\CompanyFinanceAccountRequest();

        $request->setCompName("compName_example");
        $request->setCompNo("compNo_example");
        $request->setCustomerCertExpiry("customerCertExpiry_example");
        $request->setRegSerialNoExpired("regSerialNoExpired_example");
        $request->setCompTelephone("compTelephone_example");
        $request->setOrgSMSMobile("orgSMSMobile_example");
        $request->setUniteCreditCode("uniteCreditCode_example");
        $request->setCompEmail("compEmail_example");
        $request->setCompAddr("compAddr_example");
        $request->setZipCode("zipCode_example");
        $request->setBizScope("bizScope_example");
        $request->setLegalName("legalName_example");
        $request->setLegalIdNo("legalIdNo_example");
        $request->setLegalStartDate("legalStartDate_example");
        $request->setLegalExpiredDate("legalExpiredDate_example");
        $request->setLegalMobile("legalMobile_example");
        $request->setBankCode("bankCode_example");
        $request->setBankName("bankName_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBindType("bindType_example");
        $request->setBindAcctBranch("bindAcctBranch_example");
        $request->setThreeInOneFlag("threeInOneFlag_example");
        $request->setUniteCreditCodePath("uniteCreditCodePath_example");
        $request->setFrontPhotoPath("frontPhotoPath_example");
        $request->setBackPhotoPath("backPhotoPath_example");
        $request->setOpenAcctPermitCodePath("openAcctPermitCodePath_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公开户查询(/rest/v1.0/p2f/company-finance/account/query)
     *
     * @test
     */
    public function companyFinanceAccountQueryTest()
    {
        $request = new Model\CompanyFinanceAccountQueryRequest();

        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公资产查询(/rest/v1.0/p2f/company-finance/assets/query)
     *
     * @test
     */
    public function companyFinanceAssetsQueryTest()
    {
        $request = new Model\CompanyFinanceAssetsQueryRequest();

        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAssetsQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAssetsQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公申购赎回订单状态查询(/rest/v1.0/p2f/company-finance/order/query)
     *
     * @test
     */
    public function companyFinanceOrderQueryTest()
    {
        $request = new Model\CompanyFinanceOrderQueryRequest();

        $request->setBizType("bizType_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceOrderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceOrderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公申购(/rest/v1.0/p2f/company-finance/purchase-order)
     *
     * @test
     */
    public function companyFinancePurchaseOrderTest()
    {
        $request = new Model\CompanyFinancePurchaseOrderRequest();

        $request->setProdCode("prodCode_example");
        $request->setAmount(1.2);
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setP2fOpenAcctNo("p2fOpenAcctNo_example");
        try{
            $response = self::$client->companyFinancePurchaseOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinancePurchaseOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公赎回(/rest/v1.0/p2f/company-finance/redeem-order)
     *
     * @test
     */
    public function companyFinanceRedeemOrderTest()
    {
        $request = new Model\CompanyFinanceRedeemOrderRequest();

        $request->setP2fOpenAcctNo("p2fOpenAcctNo_example");
        $request->setProdCode("prodCode_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setP2fOrderId("p2fOrderId_example");
        $request->setRequestTime("2026-04-13 10:38:33");
        try{
            $response = self::$client->companyFinanceRedeemOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceRedeemOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 小额打款鉴权(/rest/v1.0/p2f/company-finance/small-payment)
     *
     * @test
     */
    public function companyFinanceSmallPaymentTest()
    {
        $request = new Model\CompanyFinanceSmallPaymentRequest();

        $request->setConfirmCheckCode("confirmCheckCode_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceSmallPayment($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceSmallPayment: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 对公交易明细查询(/rest/v1.0/p2f/company-finance/transaction/query)
     *
     * @test
     */
    public function companyFinanceTransactionQueryTest()
    {
        $request = new Model\CompanyFinanceTransactionQueryRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceTransactionQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceTransactionQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 文件上传(/yos/v1.0/p2f/file-upload)
     *
     * @test
     */
    public function fileUploadTest()
    {
        $request = new Model\FileUploadRequest();

        $request->setRequestNo("requestNo_example");
        $request->setIdentityType("identityType_example");
        $request->setIdentityId("identityId_example");
        $request->setIdType("ID");
        $request->setIdNO("idNO_example");
        $request->setFileType("fileType_example");
        $request->setImage(fopen("/path/to/file", "r"));
        try{
            $response = self::$client->fileUpload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->fileUpload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 增值代付订单(/rest/v1.0/p2f/zzdf/order)
     *
     * @test
     */
    public function zzdfOrderTest()
    {
        $request = new Model\ZzdfOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderAmount(1.2);
        $request->setReceiverAccountNo("receiverAccountNo_example");
        $request->setReceiverAccountName("receiverAccountName_example");
        $request->setReceiverBankCode("receiverBankCode_example");
        $request->setProvince("province_example");
        $request->setCity("city_example");
        $request->setBranchBankCode("branchBankCode_example");
        $request->setBankAccountType("bankAccountType_example");
        $request->setComments("comments_example");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setTerminalType("terminalType_example");
        $request->setReceiveType("receiveType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        $request->setRechargeAcctType("rechargeAcctType_example");
        $request->setRechargeRemark("rechargeRemark_example");
        $request->setRechargeFeeType("rechargeFeeType_example");
        $request->setRechargeBankCode("rechargeBankCode_example");
        $request->setRechargeBankCardNo("rechargeBankCardNo_example");
        try{
            $response = self::$client->zzdfOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->zzdfOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 增值代付订单查询(/rest/v1.0/p2f/zzdf/query)
     *
     * @test
     */
    public function zzdfQueryTest()
    {
        $request = new Model\ZzdfQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->zzdfQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->zzdfQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
