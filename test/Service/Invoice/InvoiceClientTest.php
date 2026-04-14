<?php


namespace Yeepay\Yop\Sdk\Service\Invoice;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Invoice\Model as Model;

class InvoiceClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = InvoiceClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = InvoiceClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 【服务开通&amp;新增开票员】短信验证码发送(/rest/v1.0/invoice/digit/active-sms-code-check)
     *
     * @test
     */
    public function active_sms_code_checkTest()
    {
        $request = new Model\ActiveSmsCodeCheckRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto());
        try{
            $response = self::$client->active_sms_code_check($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->active_sms_code_check: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开票(/rest/v1.0/invoice/apply)
     *
     * @test
     */
    public function applyTest()
    {
        $request = new Model\ApplyRequest();

        $request->setMerchantNo("10040040287");
        $request->setCustomerRequestNo("01e1c1a0509e435091e98fc99f11cb4b");
        $request->setParentMerchantNo("10040040286");
        $request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
        $request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("http://172.19.100.117:8001/yop-boss/accept");
        $request->setInvoiceMajor("invoiceMajor_example");
        try{
            $response = self::$client->apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开票(/rest/v1.0/invoice/apply)
     *
     * @test
     */
    public function apply_v1_0Test()
    {
        $request = new Model\ApplyV10Request();

        $request->setMerchantNo("10040040287");
        $request->setCustomerRequestNo("01e1c1a0509e435091e98fc99f11cb4b");
        $request->setParentMerchantNo("10040040286");
        $request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
        $request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("http://172.19.100.117:8001/yop-boss/accept");
        $request->setInvoiceMajor("invoiceMajor_example");
        try{
            $response = self::$client->apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 智能赋码(/rest/v1.0/invoice/digit/auto-goods-code/query)
     *
     * @test
     */
    public function auto_goods_code_queryTest()
    {
        $request = new Model\AutoGoodsCodeQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto());
        try{
            $response = self::$client->auto_goods_code_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->auto_goods_code_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 智能抬头(/rest/v1.0/invoice/digit/auto-title/query)
     *
     * @test
     */
    public function auto_title_queryTest()
    {
        $request = new Model\AutoTitleQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto());
        try{
            $response = self::$client->auto_title_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->auto_title_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码作废(/rest/v1.0/invoice/digit/cancel-order-qr-code)
     *
     * @test
     */
    public function cancel_order_qr_codeTest()
    {
        $request = new Model\CancelOrderQrCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto());
        try{
            $response = self::$client->cancel_order_qr_code($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->cancel_order_qr_code: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询税局人脸核验结果(/rest/v1.0/invoice/digit/certify-result-get)
     *
     * @test
     */
    public function certify_result_getTest()
    {
        $request = new Model\CertifyResultGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto());
        try{
            $response = self::$client->certify_result_get($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->certify_result_get: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】删除发票(/rest/v1.0/invoice/digit/delete-invoice)
     *
     * @test
     */
    public function delete_invoiceTest()
    {
        $request = new Model\DeleteInvoiceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto());
        try{
            $response = self::$client->delete_invoice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->delete_invoice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员修改】开票员信息新增或修改接口(/rest/v1.0/invoice/digit/account-add-edit)
     *
     * @test
     */
    public function digitAccountAddEditTest()
    {
        $request = new Model\DigitAccountAddEditRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto());
        try{
            $response = self::$client->digitAccountAddEdit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitAccountAddEdit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【服务开通&amp;新增开票员】短信验证码发送(/rest/v1.0/invoice/digit/active-sms-code-check)
     *
     * @test
     */
    public function digitActiveSmsCodeCheckTest()
    {
        $request = new Model\DigitActiveSmsCodeCheckRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceUploadSmsVerifyCodeReqDto());
        try{
            $response = self::$client->digitActiveSmsCodeCheck($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitActiveSmsCodeCheck: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 智能赋码(/rest/v1.0/invoice/digit/auto-goods-code/query)
     *
     * @test
     */
    public function digitAutoGoodsCodeQueryTest()
    {
        $request = new Model\DigitAutoGoodsCodeQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoGoodsCodeReqDto());
        try{
            $response = self::$client->digitAutoGoodsCodeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitAutoGoodsCodeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 智能抬头(/rest/v1.0/invoice/digit/auto-title/query)
     *
     * @test
     */
    public function digitAutoTitleQueryTest()
    {
        $request = new Model\DigitAutoTitleQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\AutoTitleReqDto());
        try{
            $response = self::$client->digitAutoTitleQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitAutoTitleQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码作废(/rest/v1.0/invoice/digit/cancel-order-qr-code)
     *
     * @test
     */
    public function digitCancelOrderQrCodeTest()
    {
        $request = new Model\DigitCancelOrderQrCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitCancelOrderQrCodeReqDto());
        try{
            $response = self::$client->digitCancelOrderQrCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitCancelOrderQrCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员人脸核验】获取人脸核验二维码(/rest/v1.0/invoice/digit/certify-qrcode/get)
     *
     * @test
     */
    public function digitCertifyQrcodeGetTest()
    {
        $request = new Model\DigitCertifyQrcodeGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto());
        try{
            $response = self::$client->digitCertifyQrcodeGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitCertifyQrcodeGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询税局人脸核验结果(/rest/v1.0/invoice/digit/certify-result-get)
     *
     * @test
     */
    public function digitCertifyResultGetTest()
    {
        $request = new Model\DigitCertifyResultGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyResultReqDto());
        try{
            $response = self::$client->digitCertifyResultGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitCertifyResultGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】删除发票(/rest/v1.0/invoice/digit/delete-invoice)
     *
     * @test
     */
    public function digitDeleteInvoiceTest()
    {
        $request = new Model\DigitDeleteInvoiceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalDeleteInvoiceReqDto());
        try{
            $response = self::$client->digitDeleteInvoice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitDeleteInvoice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员修改】开票员信息查询接口(/rest/v1.0/invoice/digit/digital-account-query)
     *
     * @test
     */
    public function digitDigitalAccountQueryTest()
    {
        $request = new Model\DigitDigitalAccountQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto());
        try{
            $response = self::$client->digitDigitalAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitDigitalAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】企业信息查询(/rest/v1.0/invoice/digit/enterprise-query)
     *
     * @test
     */
    public function digitEnterpriseQueryTest()
    {
        $request = new Model\DigitEnterpriseQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto());
        try{
            $response = self::$client->digitEnterpriseQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitEnterpriseQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】企业信息注册(/rest/v1.0/invoice/digit/enterprise-register)
     *
     * @test
     */
    public function digitEnterpriseRegisterTest()
    {
        $request = new Model\DigitEnterpriseRegisterRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto());
        try{
            $response = self::$client->digitEnterpriseRegister($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitEnterpriseRegister: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】 企业信息修改(/rest/v1.0/invoice/digit/enterprise-update)
     *
     * @test
     */
    public function digitEnterpriseUpdateTest()
    {
        $request = new Model\DigitEnterpriseUpdateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto());
        try{
            $response = self::$client->digitEnterpriseUpdate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitEnterpriseUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票红字发票开具(/rest/v1.0/invoice/digit/fast-red)
     *
     * @test
     */
    public function digitFastRedTest()
    {
        $request = new Model\DigitFastRedRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto());
        try{
            $response = self::$client->digitFastRed($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitFastRed: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发票汇总查询(/rest/v1.0/invoice/digit-invoice/page-query)
     *
     * @test
     */
    public function digitInvoicePageQueryTest()
    {
        $request = new Model\DigitInvoicePageQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryPageReqDto());
        try{
            $response = self::$client->digitInvoicePageQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitInvoicePageQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票发送】发票文件重新发送(/rest/v1.0/invoice/digit/invoicepdf-resendemail)
     *
     * @test
     */
    public function digitInvoicepdfResendemailTest()
    {
        $request = new Model\DigitInvoicepdfResendemailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto());
        try{
            $response = self::$client->digitInvoicepdfResendemail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitInvoicepdfResendemail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票蓝字发票开具(/rest/v1.0/invoice/digit/issue-invoice)
     *
     * @test
     */
    public function digitIssueInvoiceTest()
    {
        $request = new Model\DigitIssueInvoiceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto());
        try{
            $response = self::$client->digitIssueInvoice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitIssueInvoice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员登录】开票员登录状态查询(/rest/v1.0/invoice/digit/login-result/query)
     *
     * @test
     */
    public function digitLoginResultQueryTest()
    {
        $request = new Model\DigitLoginResultQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto());
        try{
            $response = self::$client->digitLoginResultQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitLoginResultQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票服务开通】数电票发票服务开通激活(/rest/v1.0/invoice/digit/open-server)
     *
     * @test
     */
    public function digitOpenServerTest()
    {
        $request = new Model\DigitOpenServerRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto());
        try{
            $response = self::$client->digitOpenServer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitOpenServer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码(/rest/v1.0/invoice/digit/order/qrcode/gen)
     *
     * @test
     */
    public function digitOrderQrcodeGenTest()
    {
        $request = new Model\DigitOrderQrcodeGenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto());
        try{
            $response = self::$client->digitOrderQrcodeGen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitOrderQrcodeGen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码状态查询(/rest/v1.0/invoice/digit/order/qrcode/status/query)
     *
     * @test
     */
    public function digitOrderQrcodeStatusQueryTest()
    {
        $request = new Model\DigitOrderQrcodeStatusQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto());
        try{
            $response = self::$client->digitOrderQrcodeStatusQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitOrderQrcodeStatusQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员人脸核验】获取人脸核验结果(/rest/v1.0/invoice/digit/qrcode-certify-result/get)
     *
     * @test
     */
    public function digitQrcodeCertifyResultGetTest()
    {
        $request = new Model\DigitQrcodeCertifyResultGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto());
        try{
            $response = self::$client->digitQrcodeCertifyResultGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitQrcodeCertifyResultGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开具结果】数电票开具结果查询(/rest/v1.0/invoice/digit/query-invoice)
     *
     * @test
     */
    public function digitQueryInvoiceTest()
    {
        $request = new Model\DigitQueryInvoiceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto());
        try{
            $response = self::$client->digitQueryInvoice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitQueryInvoice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票蓝字发票重试开具(/rest/v1.0/invoice/digit/retry-invoice)
     *
     * @test
     */
    public function digitRetryInvoiceTest()
    {
        $request = new Model\DigitRetryInvoiceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto());
        try{
            $response = self::$client->digitRetryInvoice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitRetryInvoice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 数电账号登录(/rest/v1.0/invoice/digit/unified-login)
     *
     * @test
     */
    public function digitUnifiedLoginTest()
    {
        $request = new Model\DigitUnifiedLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto());
        try{
            $response = self::$client->digitUnifiedLogin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitUnifiedLogin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 数电账号短信验证(/rest/v1.0/invoice/digit/unified-login/check)
     *
     * @test
     */
    public function digitUnifiedLoginCheckTest()
    {
        $request = new Model\DigitUnifiedLoginCheckRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto());
        try{
            $response = self::$client->digitUnifiedLoginCheck($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitUnifiedLoginCheck: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员登录】开票员登录(/rest/v1.0/invoice/digit/user/login)
     *
     * @test
     */
    public function digitUserLoginTest()
    {
        $request = new Model\DigitUserLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());
        try{
            $response = self::$client->digitUserLogin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digitUserLogin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员登录】开票员登录(/rest/v1.0/invoice/digit/user/login)
     *
     * @test
     */
    public function digit_user_loginTest()
    {
        $request = new Model\DigitUserLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());
        try{
            $response = self::$client->digit_user_login($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digit_user_login: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员修改】开票员信息新增或修改接口(/rest/v1.0/invoice/digit/account-add-edit)
     *
     * @test
     */
    public function digital_account_add_editTest()
    {
        $request = new Model\DigitalAccountAddEditRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountAddOrEditReqDto());
        try{
            $response = self::$client->digital_account_add_edit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digital_account_add_edit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员修改】开票员信息查询接口(/rest/v1.0/invoice/digit/digital-account-query)
     *
     * @test
     */
    public function digital_account_queryTest()
    {
        $request = new Model\DigitalAccountQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceDigitalAccountQueryReqDto());
        try{
            $response = self::$client->digital_account_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->digital_account_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】企业信息查询(/rest/v1.0/invoice/digit/enterprise-query)
     *
     * @test
     */
    public function enterprise_queryTest()
    {
        $request = new Model\EnterpriseQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoQueryReqDto());
        try{
            $response = self::$client->enterprise_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->enterprise_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】企业信息注册(/rest/v1.0/invoice/digit/enterprise-register)
     *
     * @test
     */
    public function enterprise_registerTest()
    {
        $request = new Model\EnterpriseRegisterRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoReqDto());
        try{
            $response = self::$client->enterprise_register($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->enterprise_register: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【企业信息维护】 企业信息修改(/rest/v1.0/invoice/digit/enterprise-update)
     *
     * @test
     */
    public function enterprise_updateTest()
    {
        $request = new Model\EnterpriseUpdateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitEnterpriseInfoUpdateReqDto());
        try{
            $response = self::$client->enterprise_update($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->enterprise_update: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票红字发票开具(/rest/v1.0/invoice/digit/fast-red)
     *
     * @test
     */
    public function fastRedTest()
    {
        $request = new Model\FastRedRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalFastRedInvoiceReqDto());
        try{
            $response = self::$client->fastRed($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->fastRed: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询费用(/rest/v1.0/invoice/fee/query)
     *
     * @test
     */
    public function feeQueryTest()
    {
        $request = new Model\FeeQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
        $request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
        $request->setInvoiceMajor("invoiceMajor_example");
        try{
            $response = self::$client->feeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->feeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询费用(/rest/v1.0/invoice/fee/query)
     *
     * @test
     */
    public function fee_query_v1_0Test()
    {
        $request = new Model\FeeQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setChargingDateStart(new \DateTime("2013-10-20 19:20:30"));
        $request->setChargingDateEnd(new \DateTime("2013-10-20 19:20:30"));
        $request->setInvoiceMajor("invoiceMajor_example");
        try{
            $response = self::$client->fee_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->fee_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员人脸核验】获取人脸核验二维码(/rest/v1.0/invoice/digit/certify-qrcode/get)
     *
     * @test
     */
    public function getCertifyQrcodeTest()
    {
        $request = new Model\GetCertifyQrcodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeReqDto());
        try{
            $response = self::$client->getCertifyQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->getCertifyQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取 H5 页面地址(/rest/v1.0/invoice/get-h5-url)
     *
     * @test
     */
    public function getH5UrlTest()
    {
        $request = new Model\GetH5UrlRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\InvoiceH5UrlRequest());
        try{
            $response = self::$client->getH5Url($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->getH5Url: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员登录】开票员登录状态查询(/rest/v1.0/invoice/digit/login-result/query)
     *
     * @test
     */
    public function getLoginResultTest()
    {
        $request = new Model\GetLoginResultRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetLoginResultReqDto());
        try{
            $response = self::$client->getLoginResult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->getLoginResult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开票员人脸核验】获取人脸核验结果(/rest/v1.0/invoice/digit/qrcode-certify-result/get)
     *
     * @test
     */
    public function getQrcodeCertifyResultTest()
    {
        $request = new Model\GetQrcodeCertifyResultRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalGetCertifyQrcodeResultReqDto());
        try{
            $response = self::$client->getQrcodeCertifyResult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->getQrcodeCertifyResult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 维护发票信息(/rest/v1.0/invoice/info/modify)
     *
     * @test
     */
    public function infoModifyTest()
    {
        $request = new Model\InfoModifyRequest();

        $request->setMerchantNo("10040040287");
        $request->setCustomerRequestNo("8d697f55a80141e291d9cac2d444fb22");
        $request->setParentMerchantNo("10040040286");
        $request->setMode("mode_example");
        $request->setInvoiceType("invoiceType_example");
        $request->setInvoiceForm("invoiceForm_example");
        $request->setLinkman("张三");
        $request->setLinkmanPhone("13300976554");
        $request->setPostalAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
        $request->setPostalCode("100020");
        $request->setTaxpayerId("91110000752646912Q");
        $request->setInvoicePhone("010-57073962");
        $request->setInvoiceAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
        $request->setBankName("招商银行北京建国门支行");
        $request->setAccountNo("110902081410707");
        $request->setEmail("san.zhang@yeepay.com");
        $request->setRemark("备注1");
        $request->setStandardType("GGXH-001");
        $request->setUnit("件");
        $request->setQuantity(1);
        $request->setInvoiceBusiness(array("invoiceBusiness_example"));
        try{
            $response = self::$client->infoModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->infoModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询发票信息(/rest/v1.0/invoice/info/query)
     *
     * @test
     */
    public function infoQueryTest()
    {
        $request = new Model\InfoQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->infoQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->infoQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 维护发票信息(/rest/v1.0/invoice/info/modify)
     *
     * @test
     */
    public function info_modify_v1_0Test()
    {
        $request = new Model\InfoModifyV10Request();

        $request->setMerchantNo("10040040287");
        $request->setCustomerRequestNo("8d697f55a80141e291d9cac2d444fb22");
        $request->setParentMerchantNo("10040040286");
        $request->setMode("mode_example");
        $request->setInvoiceType("invoiceType_example");
        $request->setInvoiceForm("invoiceForm_example");
        $request->setLinkman("张三");
        $request->setLinkmanPhone("13300976554");
        $request->setPostalAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
        $request->setPostalCode("100020");
        $request->setTaxpayerId("91110000752646912Q");
        $request->setInvoicePhone("010-57073962");
        $request->setInvoiceAddress("北京市通州区滨惠北一街3号院1号楼1层1-8-22");
        $request->setBankName("招商银行北京建国门支行");
        $request->setAccountNo("110902081410707");
        $request->setEmail("san.zhang@yeepay.com");
        $request->setRemark("备注1");
        $request->setStandardType("GGXH-001");
        $request->setUnit("件");
        $request->setQuantity(1);
        $request->setInvoiceBusiness(array("invoiceBusiness_example"));
        try{
            $response = self::$client->info_modify_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->info_modify_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询发票信息(/rest/v1.0/invoice/info/query)
     *
     * @test
     */
    public function info_query_v1_0Test()
    {
        $request = new Model\InfoQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->info_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->info_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票发送】发票文件重新发送(/rest/v1.0/invoice/digit/invoicepdf-resendemail)
     *
     * @test
     */
    public function invoicePdf_reSendEmailTest()
    {
        $request = new Model\InvoicePdfReSendEmailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopReSendEmailInvoicePdfReqDto());
        try{
            $response = self::$client->invoicePdf_reSendEmail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->invoicePdf_reSendEmail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票蓝字发票开具(/rest/v1.0/invoice/digit/issue-invoice)
     *
     * @test
     */
    public function issue_invoice_v1Test()
    {
        $request = new Model\IssueInvoiceV1Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceMainInfoReqDto());
        try{
            $response = self::$client->issue_invoice_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->issue_invoice_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票服务开通】数电票发票服务开通激活(/rest/v1.0/invoice/digit/open-server)
     *
     * @test
     */
    public function open_server_v1Test()
    {
        $request = new Model\OpenServerV1Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopInvoiceOpenServerReqDto());
        try{
            $response = self::$client->open_server_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->open_server_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码(/rest/v1.0/invoice/digit/order/qrcode/gen)
     *
     * @test
     */
    public function order_qrcode_genTest()
    {
        $request = new Model\OrderQrcodeGenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopGenOrderQrCodeReqDto());
        try{
            $response = self::$client->order_qrcode_gen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->order_qrcode_gen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】开票二维码状态查询(/rest/v1.0/invoice/digit/order/qrcode/status/query)
     *
     * @test
     */
    public function order_qrcode_status_queryTest()
    {
        $request = new Model\OrderQrcodeStatusQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\OrderQrCodeQueryReqDto());
        try{
            $response = self::$client->order_qrcode_status_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->order_qrcode_status_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【开具结果】数电票开具结果查询(/rest/v1.0/invoice/digit/query-invoice)
     *
     * @test
     */
    public function query_invoice_v1Test()
    {
        $request = new Model\QueryInvoiceV1Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalInvoiceQueryReqDto());
        try{
            $response = self::$client->query_invoice_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->query_invoice_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询开票记录(/rest/v1.0/invoice/record/query)
     *
     * @test
     */
    public function recordQueryTest()
    {
        $request = new Model\RecordQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setCustomerRequestNo("customerRequestNo_example");
        try{
            $response = self::$client->recordQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->recordQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询开票记录(/rest/v1.0/invoice/record/query)
     *
     * @test
     */
    public function record_query_v1_0Test()
    {
        $request = new Model\RecordQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setCustomerRequestNo("customerRequestNo_example");
        try{
            $response = self::$client->record_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->record_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 【发票开具】数电票蓝字发票重试开具(/rest/v1.0/invoice/digit/retry-invoice)
     *
     * @test
     */
    public function retry_invoice_v1Test()
    {
        $request = new Model\RetryInvoiceV1Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalRetryIOpenInvoiceReqDto());
        try{
            $response = self::$client->retry_invoice_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->retry_invoice_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 数电账号登录(/rest/v1.0/invoice/digit/unified-login)
     *
     * @test
     */
    public function unifiedLoginTest()
    {
        $request = new Model\UnifiedLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginReqDto());
        try{
            $response = self::$client->unifiedLogin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->unifiedLogin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 数电账号短信验证(/rest/v1.0/invoice/digit/unified-login/check)
     *
     * @test
     */
    public function unifiedLoginCheckTest()
    {
        $request = new Model\UnifiedLoginCheckRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUnifiedLoginCheckReqDto());
        try{
            $response = self::$client->unifiedLoginCheck($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->unifiedLoginCheck: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开票员登录(/rest/v1.0/invoice/user/login)
     *
     * @test
     */
    public function userLoginTest()
    {
        $request = new Model\UserLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());
        try{
            $response = self::$client->userLogin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->userLogin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开票员登录(/rest/v1.0/invoice/user/login)
     *
     * @test
     */
    public function user_loginTest()
    {
        $request = new Model\UserLoginRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Invoice\Model\YopDigitalUserLoginReqDto());
        try{
            $response = self::$client->user_login($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling InvoiceClient->user_login: ', $e->getMessage(), PHP_EOL;
        }
    }
}
