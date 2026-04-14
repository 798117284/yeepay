<?php


namespace Yeepay\Yop\Sdk\Service\AgencyOperation;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\AgencyOperation\Model as Model;

class AgencyOperationClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = AgencyOperationClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = AgencyOperationClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 门店创建(/rest/v1.0/agency-operation/oc/shop/create)
     *
     * @test
     */
    public function create_shopTest()
    {
        $request = new Model\CreateShopRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO());
        try{
            $response = self::$client->create_shop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->create_shop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起抽佣(/rest/v1.0/agency-operation/oc/commission/request)
     *
     * @test
     */
    public function initiate_commissionTest()
    {
        $request = new Model\InitiateCommissionRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO());
        try{
            $response = self::$client->initiate_commission($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->initiate_commission: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 抽佣查询(/rest/v1.0/agency-operation/oc/commission/query)
     *
     * @test
     */
    public function ocCommissionQueryTest()
    {
        $request = new Model\OcCommissionQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO());
        try{
            $response = self::$client->ocCommissionQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocCommissionQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 发起抽佣(/rest/v1.0/agency-operation/oc/commission/request)
     *
     * @test
     */
    public function ocCommissionRequestTest()
    {
        $request = new Model\OcCommissionRequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopCommissionRequestDTO());
        try{
            $response = self::$client->ocCommissionRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocCommissionRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店授权(/rest/v1.0/agency-operation/oc/shop/auth)
     *
     * @test
     */
    public function ocShopAuthTest()
    {
        $request = new Model\OcShopAuthRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO());
        try{
            $response = self::$client->ocShopAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocShopAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店绑卡(/rest/v1.0/agency-operation/oc/shop/bind-card)
     *
     * @test
     */
    public function ocShopBindCardTest()
    {
        $request = new Model\OcShopBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO());
        try{
            $response = self::$client->ocShopBindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocShopBindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店创建(/rest/v1.0/agency-operation/oc/shop/create)
     *
     * @test
     */
    public function ocShopCreateTest()
    {
        $request = new Model\OcShopCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopCreateRequestDTO());
        try{
            $response = self::$client->ocShopCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocShopCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店查询(/rest/v1.0/agency-operation/oc/shop/query)
     *
     * @test
     */
    public function ocShopQueryTest()
    {
        $request = new Model\OcShopQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO());
        try{
            $response = self::$client->ocShopQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocShopQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店解绑(/rest/v1.0/agency-operation/oc/shop/unbind-card)
     *
     * @test
     */
    public function ocShopUnbindCardTest()
    {
        $request = new Model\OcShopUnbindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO());
        try{
            $response = self::$client->ocShopUnbindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->ocShopUnbindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 抽佣查询(/rest/v1.0/agency-operation/oc/commission/query)
     *
     * @test
     */
    public function query_commission_recordTest()
    {
        $request = new Model\QueryCommissionRecordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryRequestDTO());
        try{
            $response = self::$client->query_commission_record($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->query_commission_record: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣绑定门店(/rest/v1.0/agency-operation/shop/bind)
     *
     * @test
     */
    public function shopBindTest()
    {
        $request = new Model\ShopBindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO());
        try{
            $response = self::$client->shopBind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shopBind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣绑定门店结果查询(/rest/v1.0/agency-operation/shop/bind-query)
     *
     * @test
     */
    public function shopBindQueryTest()
    {
        $request = new Model\ShopBindQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO());
        try{
            $response = self::$client->shopBindQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shopBindQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店授权(/rest/v1.0/agency-operation/oc/shop/auth)
     *
     * @test
     */
    public function shop_authorizeTest()
    {
        $request = new Model\ShopAuthorizeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\AccountApplyRequestDTO());
        try{
            $response = self::$client->shop_authorize($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shop_authorize: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店绑卡(/rest/v1.0/agency-operation/oc/shop/bind-card)
     *
     * @test
     */
    public function shop_bind_cardTest()
    {
        $request = new Model\ShopBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyBindCardRequestDTO());
        try{
            $response = self::$client->shop_bind_card($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shop_bind_card: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店查询(/rest/v1.0/agency-operation/oc/shop/query)
     *
     * @test
     */
    public function shop_queryTest()
    {
        $request = new Model\ShopQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ShopQueryRequestDTO());
        try{
            $response = self::$client->shop_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shop_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 门店解绑(/rest/v1.0/agency-operation/oc/shop/unbind-card)
     *
     * @test
     */
    public function shop_unbind_cardTest()
    {
        $request = new Model\ShopUnbindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\ApplyUnBindCardRequestDTO());
        try{
            $response = self::$client->shop_unbind_card($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->shop_unbind_card: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣(/rest/v1.0/agency-operation/withhold)
     *
     * @test
     */
    public function withholdTest()
    {
        $request = new Model\WithholdRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO());
        try{
            $response = self::$client->withhold($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withhold: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣记录查询(/rest/v1.0/agency-operation/withhold/query)
     *
     * @test
     */
    public function withholdQueryTest()
    {
        $request = new Model\WithholdQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO());
        try{
            $response = self::$client->withholdQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withholdQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣记录查询(/rest/v1.0/agency-operation/withhold/query)
     *
     * @test
     */
    public function withhold_record_query_v1_0Test()
    {
        $request = new Model\WithholdRecordQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelQueryWithholdRecordReqDTO());
        try{
            $response = self::$client->withhold_record_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withhold_record_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣绑定门店结果查询(/rest/v1.0/agency-operation/shop/bind-query)
     *
     * @test
     */
    public function withhold_shop_bind_query_v1_0Test()
    {
        $request = new Model\WithholdShopBindQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopQueryMerchantShopBindReqDTO());
        try{
            $response = self::$client->withhold_shop_bind_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withhold_shop_bind_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣绑定门店(/rest/v1.0/agency-operation/shop/bind)
     *
     * @test
     */
    public function withhold_shop_bind_v1_0Test()
    {
        $request = new Model\WithholdShopBindV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMerchantShopBindReqDTO());
        try{
            $response = self::$client->withhold_shop_bind_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withhold_shop_bind_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代运营服务商抽佣(/rest/v1.0/agency-operation/withhold)
     *
     * @test
     */
    public function withhold_v1_0Test()
    {
        $request = new Model\WithholdV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\AgencyOperation\Model\YopMultiChannelWithholdReqDTO());
        try{
            $response = self::$client->withhold_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AgencyOperationClient->withhold_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
