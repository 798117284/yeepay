<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = MerClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = MerClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 用户银行卡新增(/rest/v1.0/mer/user/bankcard/add)
     *
     * @test
     */
    public function add_user_bankcardTest()
    {
        $request = new Model\AddUserBankcardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO());
        try{
            $response = self::$client->add_user_bankcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->add_user_bankcard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付宝实名认证申请单申请(/rest/v1.0/mer/alipayauth/apply)
     *
     * @test
     */
    public function alipayauthApplyTest()
    {
        $request = new Model\AlipayauthApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto());
        try{
            $response = self::$client->alipayauthApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->alipayauthApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 撤销支付宝实名认证(/rest/v1.0/mer/alipayauth/cancel)
     *
     * @test
     */
    public function alipayauthCancelTest()
    {
        $request = new Model\AlipayauthCancelRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());
        try{
            $response = self::$client->alipayauthCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->alipayauthCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询支付宝实名认证状态(/rest/v1.0/mer/alipayauth/query)
     *
     * @test
     */
    public function alipayauthQueryTest()
    {
        $request = new Model\AlipayauthQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());
        try{
            $response = self::$client->alipayauthQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->alipayauthQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 入账方申请进度查询(/rest/v1.0/mer/receiver/apply-progress-query)
     *
     * @test
     */
    public function applyReceiverProgressQueryTest()
    {
        $request = new Model\ApplyReceiverProgressQueryRequest();

        $request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
        try{
            $response = self::$client->applyReceiverProgressQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->applyReceiverProgressQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通用户记账簿(/rest/v1.0/mer/user/apply)
     *
     * @test
     */
    public function apply_userTest()
    {
        $request = new Model\ApplyUserRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO());
        try{
            $response = self::$client->apply_user($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->apply_user: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询经营省市区编码(/rest/v1.0/mer/area/query)
     *
     * @test
     */
    public function areaQueryTest()
    {
        $request = new Model\AreaQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO());
        try{
            $response = self::$client->areaQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->areaQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户授权状态查询接口(/rest/v2.0/mer/auth/state/query)
     *
     * @test
     */
    public function authStateQueryV2Test()
    {
        $request = new Model\AuthStateQueryV2Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setFeeType("feeType_example");
        $request->setQueryStrategy("queryStrategy_example");
        $request->setPageNum("pageNum_example");
        $request->setPageSize("pageSize_example");
        try{
            $response = self::$client->authStateQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户授权状态查询接口(/rest/v2.0/mer/auth/state/query)
     *
     * @test
     */
    public function auth_state_query_v2_0Test()
    {
        $request = new Model\AuthStateQueryV20Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setFeeType("feeType_example");
        $request->setQueryStrategy("queryStrategy_example");
        $request->setPageNum("pageNum_example");
        $request->setPageSize("pageSize_example");
        try{
            $response = self::$client->auth_state_query_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->auth_state_query_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑定用户银行卡(/rest/v1.0/mer/user/bankcard/bind)
     *
     * @test
     */
    public function bind_user_bankcardTest()
    {
        $request = new Model\BindUserBankcardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO());
        try{
            $response = self::$client->bind_user_bankcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bind_user_bankcard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账商户入网进度查询(/rest/v2.0/mer/boss/register/query)
     *
     * @test
     */
    public function bossRegisterQueryV2Test()
    {
        $request = new Model\BossRegisterQueryV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bossRegisterQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账特约商户入网(企业/个体)-收单+分账(/rest/v2.0/mer/boss/register/saas/divide)
     *
     * @test
     */
    public function bossRegisterSaasDivideV2Test()
    {
        $request = new Model\BossRegisterSaasDivideV2Request();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
        $request->setSellerNo("SE20230627XXXXXX");
        try{
            $response = self::$client->bossRegisterSaasDivideV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterSaasDivideV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账特约商户入网(企业/个体)-收单+结算(/rest/v2.0/mer/boss/register/saas/standard)
     *
     * @test
     */
    public function bossRegisterSaasStandardV2Test()
    {
        $request = new Model\BossRegisterSaasStandardV2Request();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\",\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setSellerNo("SE20230627XXXXXX");
        try{
            $response = self::$client->bossRegisterSaasStandardV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->bossRegisterSaasStandardV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户银行卡信息(/rest/v1.0/mer/card/query)
     *
     * @test
     */
    public function cardQueryTest()
    {
        $request = new Model\CardQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto());
        try{
            $response = self::$client->cardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->cardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 子商户新增ID(/rest/v1.0/mer/register/contribute/merchant/clone)
     *
     * @test
     */
    public function cloneMerchantTest()
    {
        $request = new Model\CloneMerchantRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO());
        try{
            $response = self::$client->cloneMerchant($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->cloneMerchant: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户银行卡信息(/rest/v1.0/mer/card/query)
     *
     * @test
     */
    public function mer_card_queryTest()
    {
        $request = new Model\MerCardQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBankCardQueryReqDto());
        try{
            $response = self::$client->mer_card_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->mer_card_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户基础信息(/rest/v1.0/mer/merchant-basic-info-query)
     *
     * @test
     */
    public function merchantBasicInfoQueryTest()
    {
        $request = new Model\MerchantBasicInfoQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto());
        try{
            $response = self::$client->merchantBasicInfoQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantBasicInfoQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 沉默商户解冻申请进度查询(/rest/v1.0/mer/merchant/dispose/query)
     *
     * @test
     */
    public function merchantDisposeQueryTest()
    {
        $request = new Model\MerchantDisposeQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        try{
            $response = self::$client->merchantDisposeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 沉默商户解冻申请(/rest/v1.0/mer/merchant/dispose/unfreeze)
     *
     * @test
     */
    public function merchantDisposeUnfreezeTest()
    {
        $request = new Model\MerchantDisposeUnfreezeRequest();

        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantDisposeUnfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户信息变更(/rest/v1.0/mer/merchant/info/modify)
     *
     * @test
     */
    public function merchantInfoModifyTest()
    {
        $request = new Model\MerchantInfoModifyRequest();

        $request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\",\"defaultSettleCard\":false}");
        $request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
        $request->setQualificationInfo("{\"businessPlacePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\", \"scenePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setMerchantReportConfig("{\"modifyReport\":true,\"reportChannels\": [\"WECHAT\",\"ALIPAY\"]}");
        $request->setMerchantExtraInfo("{\"customAttrs\":{\"subsideFlag\":\"1245\"}}");
        $request->setSettleConfig("{\"settleTarget\":\"HEAD_CHAIN\"}");
        $request->setUboInfoList("uboInfoList_example");
        try{
            $response = self::$client->merchantInfoModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户信息变更进度查询接口(/rest/v1.0/mer/merchant/info/modify/query)
     *
     * @test
     */
    public function merchantInfoModifyQueryTest()
    {
        $request = new Model\MerchantInfoModifyQueryRequest();

        $request->setRequestNo("7973679854dc48949adfd0a57418dedb");
        try{
            $response = self::$client->merchantInfoModifyQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantInfoModifyQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 子商户关系校验(/rest/v1.0/mer/merchant/info/verify-sub-merchant-relation)
     *
     * @test
     */
    public function merchantInfoVerifySubMerchantRelationTest()
    {
        $request = new Model\MerchantInfoVerifySubMerchantRelationRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNoList(array("merchantNoList_example"));
        try{
            $response = self::$client->merchantInfoVerifySubMerchantRelation($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantInfoVerifySubMerchantRelation: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 后补资质查询(/rest/v1.0/mer/merchant/supplement/qualification/query)
     *
     * @test
     */
    public function merchantSupplementQualificationQueryTest()
    {
        $request = new Model\MerchantSupplementQualificationQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantSupplementQualificationQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 后补资质提交(/rest/v1.0/mer/merchant/supplement/qualification/submit)
     *
     * @test
     */
    public function merchantSupplementQualificationSubmitTest()
    {
        $request = new Model\MerchantSupplementQualificationSubmitRequest();

        $request->setMerchantNo("1234567890");
        $request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");
        try{
            $response = self::$client->merchantSupplementQualificationSubmit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信实名认证申请单申请(/rest/v1.0/mer/merchant/wechatauth/apply)
     *
     * @test
     */
    public function merchantWechatauthApplyTest()
    {
        $request = new Model\MerchantWechatauthApplyRequest();

        $request->setRequestNo("YBWXSMRZSQ20220620XXXXXX");
        $request->setSubMerchantNo("10084321321");
        $request->setApplicantType("applicantType_example");
        $request->setApplicantName("张三");
        $request->setApplicantPhone("18876543210");
        $request->setApplicantIdCard("220000000000000001");
        $request->setTransactorInfo("{ \"businessAuthorizationLetter\": \"业务办理授权函\", \"transactorIdentificationBackCopy\": \"申请人证件反面照片\", \"transactorIdentificationFrontCopy\": \"申请人证件正面照片\", \"transactorIdentificationType\": \"申请人证件类型\", \"transactorIdentificationValidDate\": [\"1970-01-01\",\"forever\"] }");
        $request->setIdentificationType("identificationType_example");
        $request->setIdentificationFrontCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setIdentificationBackCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setIdentificationValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
        $request->setIdentificationAddress("广东省深圳市南山区xx路xx号xx室");
        $request->setCertCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setCompanyAddress("广东省深圳市南山区xx路xx号xx室");
        $request->setLicenceValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
        $request->setIsFinanceInstitution(true);
        $request->setFinanceInstitutionInfo("{ \"financeLicensePics\": [  \"金融机构许可证图片1\",    \"金融机构许可证图片2\",    \"金融机构许可证图片3\"  ],  \"financeType\": \"金融机构类型\" }");
        $request->setCertType("CERTIFICATE_TYPE_2388");
        $request->setCertNumber("111111111111");
        $request->setCompanyProveCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setOwner(true);
        $request->setUboInfoList("[{ \"uboIdDocAddress\": \"证件居住地址\", \"uboIdDocCopy\": \"证件正面照片\", \"uboIdDocCopyBack\": \"证件反面照片\", \"uboIdDocName\": \"受益人姓名\", \"uboIdDocNumber\": \"证件号码\", \"uboIdDocType\": \"证件类型\", \"uboIdValidDate\": \"证件有效期\" }]");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("39231134");
        $request->setMicroBizType("microBizType_example");
        $request->setStoreName("大郎烧饼");
        $request->setStoreAddressCode("440305");
        $request->setStoreHeaderCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setStoreIndoorCopy("https://staticres.yeepay.com/xxx.文件后缀");
        try{
            $response = self::$client->merchantWechatauthApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 撤销微信实名认证申请单(/rest/v1.0/mer/merchant/wechatauth/cancel)
     *
     * @test
     */
    public function merchantWechatauthCancelTest()
    {
        $request = new Model\MerchantWechatauthCancelRequest();

        $request->setApplymentId("applymentId_example");
        $request->setRequestNo("requestNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("39231134");
        try{
            $response = self::$client->merchantWechatauthCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询微信实名认证状态(/rest/v1.0/mer/merchant/wechatauth/query)
     *
     * @test
     */
    public function merchantWechatauthQueryTest()
    {
        $request = new Model\MerchantWechatauthQueryRequest();

        $request->setApplymentId("applymentId_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setRequestNo("requestNo_example");
        $request->setCustomQrcode(true);
        $request->setChannelId("channelId_example");
        try{
            $response = self::$client->merchantWechatauthQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取H5入网链接(/rest/v1.0/mer/netin/h5/index)
     *
     * @test
     */
    public function merchant_adapter_read_h5_net_inTest()
    {
        $request = new Model\MerchantAdapterReadH5NetInRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO());
        try{
            $response = self::$client->merchant_adapter_read_h5_net_in($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_adapter_read_h5_net_in: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * H5入网进度查询(/rest/v1.0/mer/netin/h5/query)
     *
     * @test
     */
    public function merchant_adapter_read_h5_queryTest()
    {
        $request = new Model\MerchantAdapterReadH5QueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto());
        try{
            $response = self::$client->merchant_adapter_read_h5_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_adapter_read_h5_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付宝实名认证申请单申请(/rest/v1.0/mer/alipayauth/apply)
     *
     * @test
     */
    public function merchant_alipayauth_apply_v1_0Test()
    {
        $request = new Model\MerchantAlipayauthApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthApplymentReqDto());
        try{
            $response = self::$client->merchant_alipayauth_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_alipayauth_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 撤销支付宝实名认证(/rest/v1.0/mer/alipayauth/cancel)
     *
     * @test
     */
    public function merchant_alipayauth_cancel_v1_0Test()
    {
        $request = new Model\MerchantAlipayauthCancelV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());
        try{
            $response = self::$client->merchant_alipayauth_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_alipayauth_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询支付宝实名认证状态(/rest/v1.0/mer/alipayauth/query)
     *
     * @test
     */
    public function merchant_alipayauth_query_v1_0Test()
    {
        $request = new Model\MerchantAlipayauthQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthInfoReqDto());
        try{
            $response = self::$client->merchant_alipayauth_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_alipayauth_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 沉默商户解冻申请(/rest/v1.0/mer/merchant/dispose/unfreeze)
     *
     * @test
     */
    public function merchant_dispose_unfreeze_v1_0Test()
    {
        $request = new Model\MerchantDisposeUnfreezeV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchant_dispose_unfreeze_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_dispose_unfreeze_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户信息变更(/rest/v1.0/mer/merchant/info/modify)
     *
     * @test
     */
    public function merchant_info_modify_v1_0Test()
    {
        $request = new Model\MerchantInfoModifyV10Request();

        $request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\",\"defaultSettleCard\":false}");
        $request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");
        $request->setQualificationInfo("{\"businessPlacePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\", \"scenePhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setMerchantReportConfig("{\"modifyReport\":true,\"reportChannels\": [\"WECHAT\",\"ALIPAY\"]}");
        $request->setMerchantExtraInfo("{\"customAttrs\":{\"subsideFlag\":\"1245\"}}");
        $request->setSettleConfig("{\"settleTarget\":\"HEAD_CHAIN\"}");
        $request->setUboInfoList("uboInfoList_example");
        try{
            $response = self::$client->merchant_info_modify_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_info_modify_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询整改协查结果(/rest/v1.0/mer/rectification/result/query)
     *
     * @test
     */
    public function merchant_rectification_result_queryTest()
    {
        $request = new Model\MerchantRectificationResultQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO());
        try{
            $response = self::$client->merchant_rectification_result_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_rectification_result_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 后补资质提交(/rest/v1.0/mer/merchant/supplement/qualification/submit)
     *
     * @test
     */
    public function merchant_supplement_qualification_submit_v1_0Test()
    {
        $request = new Model\MerchantSupplementQualificationSubmitV10Request();

        $request->setMerchantNo("1234567890");
        $request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");
        try{
            $response = self::$client->merchant_supplement_qualification_submit_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_supplement_qualification_submit_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信实名认证申请单申请(/rest/v1.0/mer/merchant/wechatauth/apply)
     *
     * @test
     */
    public function merchant_wechatauth_apply_v1_0Test()
    {
        $request = new Model\MerchantWechatauthApplyV10Request();

        $request->setRequestNo("YBWXSMRZSQ20220620XXXXXX");
        $request->setSubMerchantNo("10084321321");
        $request->setApplicantType("applicantType_example");
        $request->setApplicantName("张三");
        $request->setApplicantPhone("18876543210");
        $request->setApplicantIdCard("220000000000000001");
        $request->setTransactorInfo("{ \"businessAuthorizationLetter\": \"业务办理授权函\", \"transactorIdentificationBackCopy\": \"申请人证件反面照片\", \"transactorIdentificationFrontCopy\": \"申请人证件正面照片\", \"transactorIdentificationType\": \"申请人证件类型\", \"transactorIdentificationValidDate\": [\"1970-01-01\",\"forever\"] }");
        $request->setIdentificationType("identificationType_example");
        $request->setIdentificationFrontCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setIdentificationBackCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setIdentificationValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
        $request->setIdentificationAddress("广东省深圳市南山区xx路xx号xx室");
        $request->setCertCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setCompanyAddress("广东省深圳市南山区xx路xx号xx室");
        $request->setLicenceValidDate("[\\\"1970-01-01\\\",\\\"forever\\\"]");
        $request->setIsFinanceInstitution(true);
        $request->setFinanceInstitutionInfo("{ \"financeLicensePics\": [  \"金融机构许可证图片1\",    \"金融机构许可证图片2\",    \"金融机构许可证图片3\"  ],  \"financeType\": \"金融机构类型\" }");
        $request->setCertType("CERTIFICATE_TYPE_2388");
        $request->setCertNumber("111111111111");
        $request->setCompanyProveCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setOwner(true);
        $request->setUboInfoList("[{ \"uboIdDocAddress\": \"证件居住地址\", \"uboIdDocCopy\": \"证件正面照片\", \"uboIdDocCopyBack\": \"证件反面照片\", \"uboIdDocName\": \"受益人姓名\", \"uboIdDocNumber\": \"证件号码\", \"uboIdDocType\": \"证件类型\", \"uboIdValidDate\": \"证件有效期\" }]");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("39231134");
        $request->setMicroBizType("microBizType_example");
        $request->setStoreName("大郎烧饼");
        $request->setStoreAddressCode("440305");
        $request->setStoreHeaderCopy("https://staticres.yeepay.com/xxx.文件后缀");
        $request->setStoreIndoorCopy("https://staticres.yeepay.com/xxx.文件后缀");
        try{
            $response = self::$client->merchant_wechatauth_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_wechatauth_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 撤销微信实名认证申请单(/rest/v1.0/mer/merchant/wechatauth/cancel)
     *
     * @test
     */
    public function merchant_wechatauth_cancel_v1_0Test()
    {
        $request = new Model\MerchantWechatauthCancelV10Request();

        $request->setApplymentId("applymentId_example");
        $request->setRequestNo("requestNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setChannelId("39231134");
        try{
            $response = self::$client->merchant_wechatauth_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_wechatauth_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询微信实名认证状态(/rest/v1.0/mer/merchant/wechatauth/query)
     *
     * @test
     */
    public function merchant_wechatauth_query_v1_0Test()
    {
        $request = new Model\MerchantWechatauthQueryV10Request();

        $request->setApplymentId("applymentId_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setRequestNo("requestNo_example");
        $request->setCustomQrcode(true);
        $request->setChannelId("channelId_example");
        try{
            $response = self::$client->merchant_wechatauth_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchant_wechatauth_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发送短信验证码(/rest/v1.0/mer/mp/send-sms-verify-code)
     *
     * @test
     */
    public function mpSendSmsVerifyCodeTest()
    {
        $request = new Model\MpSendSmsVerifyCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO());
        try{
            $response = self::$client->mpSendSmsVerifyCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->mpSendSmsVerifyCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 设置交易密码(/rest/v1.0/mer/mp/set-trade-password)
     *
     * @test
     */
    public function mpSetTradePasswordTest()
    {
        $request = new Model\MpSetTradePasswordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO());
        try{
            $response = self::$client->mpSetTradePassword($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->mpSetTradePassword: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 验证交易密码(/rest/v1.0/mer/mp/verify-trade-password)
     *
     * @test
     */
    public function mpVerifyTradePasswordTest()
    {
        $request = new Model\MpVerifyTradePasswordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO());
        try{
            $response = self::$client->mpVerifyTradePassword($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->mpVerifyTradePassword: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 根据商户名称和简称查询入网进度(/rest/v1.0/mer/register/query-by-name)
     *
     * @test
     */
    public function netInProgressQueryByNameTest()
    {
        $request = new Model\NetInProgressQueryByNameRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto());
        try{
            $response = self::$client->netInProgressQueryByName($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->netInProgressQueryByName: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取H5入网链接(/rest/v1.0/mer/netin/h5/index)
     *
     * @test
     */
    public function netinH5IndexTest()
    {
        $request = new Model\NetinH5IndexRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\ApplyH5NetInRequestDTO());
        try{
            $response = self::$client->netinH5Index($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->netinH5Index: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * H5入网进度查询(/rest/v1.0/mer/netin/h5/query)
     *
     * @test
     */
    public function netinH5QueryTest()
    {
        $request = new Model\NetinH5QueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryNetInProgressReqDto());
        try{
            $response = self::$client->netinH5Query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->netinH5Query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 重复获取(短验/邮件/电子签章)(/rest/v2.0/mer/notify/repeat)
     *
     * @test
     */
    public function notifyRepeatV2Test()
    {
        $request = new Model\NotifyRepeatV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        $request->setType("type_example");
        try{
            $response = self::$client->notifyRepeatV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 重复获取(短验/邮件/电子签章)(/rest/v2.0/mer/notify/repeat)
     *
     * @test
     */
    public function notify_repeat_v2_0Test()
    {
        $request = new Model\NotifyRepeatV20Request();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        $request->setType("type_example");
        try{
            $response = self::$client->notify_repeat_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->notify_repeat_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户产品变更(/rest/v2.0/mer/product/fee/modify)
     *
     * @test
     */
    public function productFeeModifyV2Test()
    {
        $request = new Model\ProductFeeModifyV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessNotifyUrl("businessNotifyUrl_example");
        $request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
        $request->setMerchantCorporationInfo("{   \"startDate\": \"2010-06-18\",   \"legalAddress\": \"辽宁省抚顺市东洲区煤都路东段72-1栋11号\",   \"expired\": \"2030-06-18\" }");
        $request->setProductConfigInfo("{\"productModifyValidDate\": \"2021-01-01\"}");
        $request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"10080029355\",\"scene\":\"OFFLINE\"}]}}");
        $request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
        $request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantExtraInfo("{\"businessMode\":\"STORE_GROUP\",\"onlineWebsite\":\"线上网址\",\"authorizationUrl\":\"http://staticres.yeepay.com/test12345678.jpeg\",\"oldMerchantNo\":\"10012345678\"}");
        try{
            $response = self::$client->productFeeModifyV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户产品费率查询(/rest/v2.0/mer/product/fee/query)
     *
     * @test
     */
    public function productFeeQueryV2Test()
    {
        $request = new Model\ProductFeeQueryV2Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->productFeeQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 增值结算产品开通(/rest/v2.0/mer/product/increment-settle/open)
     *
     * @test
     */
    public function productIncrementSettleOpenV2Test()
    {
        $request = new Model\ProductIncrementSettleOpenV2Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->productIncrementSettleOpenV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户产品变更进度查询接口(/rest/v2.0/mer/product/modify/query)
     *
     * @test
     */
    public function productModifyQueryV2Test()
    {
        $request = new Model\ProductModifyQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->productModifyQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户产品变更(/rest/v2.0/mer/product/fee/modify)
     *
     * @test
     */
    public function product_fee_modify_v2_0Test()
    {
        $request = new Model\ProductFeeModifyV20Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
        $request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessNotifyUrl("businessNotifyUrl_example");
        $request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
        $request->setMerchantCorporationInfo("{   \"startDate\": \"2010-06-18\",   \"legalAddress\": \"辽宁省抚顺市东洲区煤都路东段72-1栋11号\",   \"expired\": \"2030-06-18\" }");
        $request->setProductConfigInfo("{\"productModifyValidDate\": \"2021-01-01\"}");
        $request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"10080029355\",\"scene\":\"OFFLINE\"}]}}");
        $request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
        $request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantExtraInfo("{\"businessMode\":\"STORE_GROUP\",\"onlineWebsite\":\"线上网址\",\"authorizationUrl\":\"http://staticres.yeepay.com/test12345678.jpeg\",\"oldMerchantNo\":\"10012345678\"}");
        try{
            $response = self::$client->product_fee_modify_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->product_fee_modify_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 增值结算产品开通(/rest/v2.0/mer/product/increment-settle/open)
     *
     * @test
     */
    public function product_increment_settle_open_v2_0Test()
    {
        $request = new Model\ProductIncrementSettleOpenV20Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->product_increment_settle_open_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->product_increment_settle_open_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询经营省市区编码(/rest/v1.0/mer/area/query)
     *
     * @test
     */
    public function queryAreaTest()
    {
        $request = new Model\QueryAreaRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryAreaReqDTO());
        try{
            $response = self::$client->queryArea($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->queryArea: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户信息变更进度查询接口(/rest/v1.0/mer/merchant/info/modify/query)
     *
     * @test
     */
    public function queryMerchantInfoModifyProgressTest()
    {
        $request = new Model\QueryMerchantInfoModifyProgressRequest();

        $request->setRequestNo("7973679854dc48949adfd0a57418dedb");
        try{
            $response = self::$client->queryMerchantInfoModifyProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->queryMerchantInfoModifyProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户状态查询(/rest/v1.0/mer/status/query)
     *
     * @test
     */
    public function queryMerchantStatusTest()
    {
        $request = new Model\QueryMerchantStatusRequest();

        $request->setMerchantNo("10080011235");
        try{
            $response = self::$client->queryMerchantStatus($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->queryMerchantStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询记账簿信息(/rest/v1.0/mer/user/book/query)
     *
     * @test
     */
    public function query_book_infoTest()
    {
        $request = new Model\QueryBookInfoRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO());
        try{
            $response = self::$client->query_book_info($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->query_book_info: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户基础信息(/rest/v1.0/mer/merchant-basic-info-query)
     *
     * @test
     */
    public function query_merchant_basic_infoTest()
    {
        $request = new Model\QueryMerchantBasicInfoRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoQueryReqDto());
        try{
            $response = self::$client->query_merchant_basic_info($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->query_merchant_basic_info: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请入账方(/rest/v1.0/mer/receiver/apply)
     *
     * @test
     */
    public function receiverApplyTest()
    {
        $request = new Model\ReceiverApplyRequest();

        $request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantNo("merchantNo_example");
        $request->setType("type_example");
        $request->setReceiverName("receiverName_example");
        $request->setLabel("label_example");
        $request->setLicenceNo("licenceNo_example");
        $request->setMobile("mobile_example");
        $request->setLegalName("legalName_example");
        $request->setLegalLicenceNo("legalLicenceNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setSettlementProduct("settlementProduct_example");
        $request->setSettlementDate("06:00");
        try{
            $response = self::$client->receiverApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->receiverApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 入账方申请进度查询(/rest/v1.0/mer/receiver/apply-progress-query)
     *
     * @test
     */
    public function receiverApplyProgressQueryTest()
    {
        $request = new Model\ReceiverApplyProgressQueryRequest();

        $request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
        try{
            $response = self::$client->receiverApplyProgressQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->receiverApplyProgressQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改入账方信息(/rest/v1.0/mer/receiver/update)
     *
     * @test
     */
    public function receiverUpdateTest()
    {
        $request = new Model\ReceiverUpdateRequest();

        $request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
        $request->setMerchantNo("merchantNo_example");
        $request->setReceiverNo("receiverNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setLabel("label_example");
        try{
            $response = self::$client->receiverUpdate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->receiverUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询整改协查结果(/rest/v1.0/mer/rectification/result/query)
     *
     * @test
     */
    public function rectificationResultQueryTest()
    {
        $request = new Model\RectificationResultQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\QueryMerchantRectificationResultReqDTO());
        try{
            $response = self::$client->rectificationResultQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rectificationResultQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 子商户新增ID(/rest/v1.0/mer/register/contribute/merchant/clone)
     *
     * @test
     */
    public function registerContributeMerchantCloneTest()
    {
        $request = new Model\RegisterContributeMerchantCloneRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\MerchantCloneReqDTO());
        try{
            $response = self::$client->registerContributeMerchantClone($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerContributeMerchantClone: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 根据商户名称和简称查询入网进度(/rest/v1.0/mer/register/query-by-name)
     *
     * @test
     */
    public function registerQueryByNameTest()
    {
        $request = new Model\RegisterQueryByNameRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\NetInProgressQueryByNameReqDto());
        try{
            $response = self::$client->registerQueryByName($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerQueryByName: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户入网进度查询接口(/rest/v2.0/mer/register/query)
     *
     * @test
     */
    public function registerQueryV2Test()
    {
        $request = new Model\RegisterQueryV2Request();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->registerQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 特约商户H5页面入网（小微）(/rest/v2.0/mer/register/saas/index)
     *
     * @test
     */
    public function registerSaasIndexV2Test()
    {
        $request = new Model\RegisterSaasIndexV2Request();

        $request->setRequestNo("示例值：REQ6437657876");
        $request->setParentMerchantNo("示例值：10080000001");
        $request->setNotifyUrl("示例值：http://www.shili111.com");
        $request->setReturnUrl("示例值：http://www.shili.com");
        $request->setMobile("159****8288");
        $request->setName("示例值：张三");
        $request->setIdCardNo("示例值：430422199001236704");
        $request->setWalletUserNo("示例值：User89849");
        try{
            $response = self::$client->registerSaasIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 特约商户入网(企业/个体)(/rest/v2.0/mer/register/saas/merchant)
     *
     * @test
     */
    public function registerSaasMerchantV2Test()
    {
        $request = new Model\RegisterSaasMerchantV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
        $request->setMerchantCorporationInfo("{\"legalName\":\"法人名称\",\"legalLicenceType\":\"法人证件类型\",\"legalLicenceNo\":\"法人证件编号\",\"legalLicenceFrontUrl\":\"法人证件照人像面地址\",\"legalLicenceBackUrl\":\"法人证件照非人像面地址\"}");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
        $request->setDirectAgentNo("SA202506122153410012");
        $request->setMerchantExtraInfo("{\"groupNo\":\"集团编号\",\"groupName\":\"集团编号\"}");
        $request->setBusinessNotifyUrl("businessNotifyUrl_example");
        $request->setUboInfoList("[{\"name\":\"姓名\",\"type\":\"OWNERSHIP_25_PERCENT\",\"licenceNo\":\"身份证号码\",\"startDate\":\"证件有效期开始时间\",\"address\":\"证件居住地址\",\"expired\":\"有效期结束时间\",\"licenceBackUrl\":\"文件路径\",\"licenceFrontUrl\":\"文件路径\"}]");
        $request->setBusinessConfig("{\"businessConfig\":{\"channelConfigs\":[{\"channelIdentifier\":\"100800295\",\"scene\":\"OFFLINE\"}]}}");
        $request->setMerchantAgreementInfo("{\"signatoryName\":\"协议签署人姓名\",\"signatoryMobile\":\"协议签署人手机号\"}");
        $request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
        try{
            $response = self::$client->registerSaasMerchantV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasMerchantV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 特约商户入网(小微)(/rest/v2.0/mer/register/saas/micro)
     *
     * @test
     */
    public function registerSaasMicroV2Test()
    {
        $request = new Model\RegisterSaasMicroV2Request();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setAccountInfo("{\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCode\":\"开户总行编码\"}");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"SHARE\",\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setBusinessScene("{\"businessSceneList\":[\"POS\"],\"isAppIdConfig\":\"YES\",\"appIdConfigType\":\"MERCHANT\",\"appId\":\"121\",\"appSecret\":\"121\"}");
        $request->setDirectAgentNo("directAgentNo_example");
        $request->setMerchantExtraInfo("{\"groupNo\":\"集团编号\",\"groupName\":\"集团编号\"}");
        $request->setBusinessConfig("上送渠道标识：{\"channelConfigs\":[{\"channelIdentifier\":\"渠道号配置-渠道标识1\",\"scene\":\"渠道号配置-场景1\"},{\"channelIdentifier\":\"渠道号配置-渠道标识2\",\"scene\":\"渠道号配置-场景2\"}]}; 上送渠道号示例值：{\"channelConfigs\":[{\"channelNo\":\"渠道号1\"},{\"channelNo\":\"渠道号2\"}]}");
        $request->setBankOpenAccountInfo("{\"isOpenAccount\":\"是否开立账户\",\"openAccountNoticeUrl\":\"开户结果回调通知\",\"bankCardType\":\"绑定卡类型\",\"bindCardNo\":\"银行卡号\",\"bindAccountName\":\"银行卡户名\",\"bankCode\":\"总行号\",\"branchBankCode\":\"联行号\",\"bankMobile\":\"银行预留手机号\"}");
        try{
            $response = self::$client->registerSaasMicroV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasMicroV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 特约商户WEB页面入网（企业/个体）(/rest/v2.0/mer/register/saas/web/index)
     *
     * @test
     */
    public function registerSaasWebIndexV2Test()
    {
        $request = new Model\RegisterSaasWebIndexV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("fba1dd39fd3846b4901f5a833fa3baa3");
        $request->setSignType("ENTERPRISE");
        $request->setNotifyUrl("http://www.yeepay.com/merchant/notify");
        $request->setReturnUrl("http://www.yeepay.com");
        $request->setProductTemplateNo("CP166748***3516");
        $request->setMerchantBaseInfo("{ \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\"}");
        $request->setCorporationInfo("{ \"legalName\":\"法人名称\",  \"legalLicenceNo\":\"法人证件编号\"}");
        $request->setContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
        $request->setBusinessAddressInfo("{ \"address\":\"商户实际经营地址\"}");
        try{
            $response = self::$client->registerSaasWebIndexV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasWebIndexV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账商户入网进度查询(/rest/v2.0/mer/boss/register/query)
     *
     * @test
     */
    public function rest_v2_mer_boss_register_queryTest()
    {
        $request = new Model\RestV2MerBossRegisterQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->rest_v2_mer_boss_register_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账特约商户入网(企业/个体)-收单+结算(/rest/v2.0/mer/boss/register/saas/standard)
     *
     * @test
     */
    public function rest_v2_mer_boss_register_saas_standardTest()
    {
        $request = new Model\RestV2MerBossRegisterSaasStandardRequest();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\",\"SHARE\"]");
        $request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setSellerNo("SE20230627XXXXXX");
        try{
            $response = self::$client->rest_v2_mer_boss_register_saas_standard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_saas_standard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 老板管账特约商户入网(企业/个体)-收单+分账(/rest/v2.0/mer/boss/register/saas/divide)
     *
     * @test
     */
    public function rest_v2_mer_boss_register_sass_divideTest()
    {
        $request = new Model\RestV2MerBossRegisterSassDivideRequest();

        $request->setRequestNo("YBRWQQH20231113XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"signType\":\"商户签约类型\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\"}");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省编码\", \"city\":\"经营市编码\", \"district\":\"经营区编码\", \"address\":\"经营地址\" }");
        $request->setProductInfo("[{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"D1\",\"fixedRate\":\"0\",\"paymentMethod\":\"REAL_TIME\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"11\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"MERCHANT_SCAN_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"WECHAT_OFFIACCOUNT_WECHAT_OFFLINE\",\"fixedRate\":\"1\",\"paymentMethod\":\"REAL_TIME\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_PERCENT\",\"productCode\":\"USER_SCAN_ALIPAY_OFFLINE\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"percentRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PUBLIC\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"},{\"rateType\":\"SINGLE_FIXED\",\"productCode\":\"ENTERPRISE_PAYMENT_REALTIME_PRIVATE\",\"fixedRate\":\"10\",\"paymentMethod\":\"REAL_TIME\",\"minRate\":\"1\",\"undertaker\":\"PLATFORM_MERCHANT\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\", \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\", \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        $request->setFunctionService("[\"BACKUP\"]");
        $request->setFunctionServiceQualificationInfo("{\"alipayBackupCount\":\"5\",\"wechatBackupCount\":\"30\"}");
        $request->setDivideConfigInfo("{\"publicAccountInfo\":{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"accountType\":\"ENTERPRISE_ACCOUNT\",\"settleRatio\":\"50\"},\"receiverInfo\":[{\"receiverType\":\"TO_PRIVATE\",\"receiverName\":\"receiverName \",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"mobile\":\"mobile\",\"settleRatio\":\"30.00\"}]},{\"legalName\":\"legalName\",\"legalLicenceNo\":\"legalLicenceNo\",\"receiverType\":\"TO_PUBLIC\",\"receiverName\":\"receiverName\",\"licenceNo\":\"licenceNo\",\"accountLabel\":\"API测试1\",\"settleCardInfo\":[{\"bankCode\":\"bankCode\",\"bankCardNo\":\"bankCardNo\",\"settleRatio\":\"20.00\"}]}],\"toPublicDivideUrl\":\"对公分账资质文件url\",\"divideMode\":\"AUTO\"}");
        $request->setSellerNo("SE20230627XXXXXX");
        try{
            $response = self::$client->rest_v2_mer_boss_register_sass_divide($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->rest_v2_mer_boss_register_sass_divide: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发送短信验证码(/rest/v1.0/mer/mp/send-sms-verify-code)
     *
     * @test
     */
    public function sendSmsVerifyCodeTest()
    {
        $request = new Model\SendSmsVerifyCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeReqDTO());
        try{
            $response = self::$client->sendSmsVerifyCode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->sendSmsVerifyCode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 设置交易密码(/rest/v1.0/mer/mp/set-trade-password)
     *
     * @test
     */
    public function setTradePasswordTest()
    {
        $request = new Model\SetTradePasswordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\SetTradePasswordReqDTO());
        try{
            $response = self::$client->setTradePassword($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->setTradePassword: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商户状态查询(/rest/v1.0/mer/status/query)
     *
     * @test
     */
    public function statusQueryTest()
    {
        $request = new Model\StatusQueryRequest();

        $request->setMerchantNo("10080011235");
        try{
            $response = self::$client->statusQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->statusQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改入账方信息(/rest/v1.0/mer/receiver/update)
     *
     * @test
     */
    public function updateReceiverTest()
    {
        $request = new Model\UpdateReceiverRequest();

        $request->setRequestNo("YBXZRZFQQH2024050XXXXXX");
        $request->setMerchantNo("merchantNo_example");
        $request->setReceiverNo("receiverNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setLabel("label_example");
        try{
            $response = self::$client->updateReceiver($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->updateReceiver: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通用户记账簿(/rest/v1.0/mer/user/apply)
     *
     * @test
     */
    public function userApplyTest()
    {
        $request = new Model\UserApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyReqDTO());
        try{
            $response = self::$client->userApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->userApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询用户创建进度(/rest/v1.0/mer/user/apply-progress/query)
     *
     * @test
     */
    public function userApplyProgressQueryTest()
    {
        $request = new Model\UserApplyProgressQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO());
        try{
            $response = self::$client->userApplyProgressQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->userApplyProgressQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 用户银行卡新增(/rest/v1.0/mer/user/bankcard/add)
     *
     * @test
     */
    public function userBankcardAddTest()
    {
        $request = new Model\UserBankcardAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardAddReqDTO());
        try{
            $response = self::$client->userBankcardAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->userBankcardAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 绑定用户银行卡(/rest/v1.0/mer/user/bankcard/bind)
     *
     * @test
     */
    public function userBankcardBindTest()
    {
        $request = new Model\UserBankcardBindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BankCardBindReqDTO());
        try{
            $response = self::$client->userBankcardBind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->userBankcardBind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询记账簿信息(/rest/v1.0/mer/user/book/query)
     *
     * @test
     */
    public function userBookQueryTest()
    {
        $request = new Model\UserBookQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\BookQueryReqDTO());
        try{
            $response = self::$client->userBookQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->userBookQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询用户创建进度(/rest/v1.0/mer/user/apply-progress/query)
     *
     * @test
     */
    public function user_apply_progress_queryTest()
    {
        $request = new Model\UserApplyProgressQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\UserApplyProgressQueryReqDTO());
        try{
            $response = self::$client->user_apply_progress_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->user_apply_progress_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 子商户关系校验(/rest/v1.0/mer/merchant/info/verify-sub-merchant-relation)
     *
     * @test
     */
    public function verify_merchant_relationTest()
    {
        $request = new Model\VerifyMerchantRelationRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNoList(array("merchantNoList_example"));
        try{
            $response = self::$client->verify_merchant_relation($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->verify_merchant_relation: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 验证交易密码(/rest/v1.0/mer/mp/verify-trade-password)
     *
     * @test
     */
    public function yOPVerifyTradePasswordTest()
    {
        $request = new Model\YOPVerifyTradePasswordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Mer\Model\YOPVerifyTradePasswordReqDTO());
        try{
            $response = self::$client->yOPVerifyTradePassword($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->yOPVerifyTradePassword: ', $e->getMessage(), PHP_EOL;
        }
    }
}
