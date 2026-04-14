<?php


namespace Yeepay\Yop\Sdk\Service\Auth;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Auth\Model as Model;
use Yeepay\Yop\Sdk\Service\Auth\Model\Old as ModelOld;

class AuthClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = AuthClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = AuthClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 企业信息认证(/rest/v1.0/auth/enterprise/auth)
     *
     * @test
     * @deprecated
     */
    public function eNTERPRISE_AUTHOldTest()
    {
        $request = new ModelOld\ENTERPRISEAUTHRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO());
        try{
            $response = self::$client->eNTERPRISE_AUTHOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->eNTERPRISE_AUTHOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业信息认证(/rest/v1.0/auth/enterprise/auth)
     *
     * @test
     */
    public function enterpriseAuthTest()
    {
        $request = new Model\EnterpriseAuthRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Auth\Model\EnterpriseAuthRequestDTO());
        try{
            $response = self::$client->enterpriseAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->enterpriseAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 人脸核验(/rest/v1.0/auth/face-auth)
     *
     * @test
     */
    public function faceAuthTest()
    {
        $request = new Model\FaceAuthRequest();

        $request->setRequestNo("REQ6437657876");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("10012345679");
        $request->setName("张三");
        $request->setCardNo("cardNo_example");
        $request->setCardType("cardType_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setExtraData("extraData_example");
        try{
            $response = self::$client->faceAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 身份核验(/rest/v1.0/auth/face-auth-kyc)
     *
     * @test
     */
    public function faceAuthKycTest()
    {
        $request = new Model\FaceAuthKycRequest();

        $request->setRequestNo("REQ6437657876");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("10012345679");
        $request->setName("张三");
        $request->setCardNo("cardNo_example");
        $request->setCardType("cardType_example");
        $request->setReturnUrl("returnUrl_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setExtraData("extraData_example");
        try{
            $response = self::$client->faceAuthKyc($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthKyc: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 身份核验结果查询(/rest/v1.0/auth/face-auth-kyc-query)
     *
     * @test
     */
    public function faceAuthKycQueryTest()
    {
        $request = new Model\FaceAuthKycQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->faceAuthKycQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthKycQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 人脸核验结果查询(/rest/v1.0/auth/face-auth-result-query)
     *
     * @test
     */
    public function faceAuthResultQueryTest()
    {
        $request = new Model\FaceAuthResultQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->faceAuthResultQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->faceAuthResultQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新信息认证(/rest/v1.0/auth/multiple-auth)
     *
     * @test
     */
    public function multipleAuthTest()
    {
        $request = new Model\MultipleAuthRequest();

        $request->setMerchantNo("100000000000");
        $request->setAuthType("authType_example");
        $request->setRequestNo("requestNo_example");
        $request->setIdCardNo("230231199510101010");
        $request->setUsername("易小宝");
        $request->setBankCardNo("6217876555556554324");
        $request->setRemark("remark_example");
        $request->setMobile("mobile_example");
        $request->setIdCardType("idCardType_example");
        $request->setClientSource("clientSource_example");
        $request->setExtMap("{\"verifyBsnSceneDesc\":\"描述\",\"sourceIP\":\"AD80:0000:0000:0000:ABAA:0000:00C 2:0002\",\"appType\":\"01\",\"appName\":\"某某银行直销银行\",\"verifyBsnScene\":\"99\",\"ipType\":\"06\"}");
        try{
            $response = self::$client->multipleAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->multipleAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 个人信息认证(/rest/v1.0/auth/person/auth)
     *
     * @test
     */
    public function pERSONAL_INFORMATION_AUTHTest()
    {
        $request = new Model\PERSONALINFORMATIONAUTHRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setName("name_example");
        $request->setMobile("mobile_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setAccountLevel("accountLevel_example");
        $request->setAuthType("authType_example");
        try{
            $response = self::$client->pERSONAL_INFORMATION_AUTH($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->pERSONAL_INFORMATION_AUTH: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 个人信息认证(/rest/v1.0/auth/person/auth)
     *
     * @test
     */
    public function personAuthTest()
    {
        $request = new Model\PersonAuthRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setName("name_example");
        $request->setMobile("mobile_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setAccountLevel("accountLevel_example");
        $request->setAuthType("authType_example");
        try{
            $response = self::$client->personAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->personAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询认证结果(/rest/v1.0/auth/person/query)
     *
     * @test
     */
    public function personQueryTest()
    {
        $request = new Model\PersonQueryRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setRequestNo("YB113202411291827514720558981");
        $request->setYbOrderId("CFC10000001");
        try{
            $response = self::$client->personQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AuthClient->personQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
