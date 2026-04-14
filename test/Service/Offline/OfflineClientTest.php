<?php


namespace Yeepay\Yop\Sdk\Service\Offline;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Offline\Model as Model;
use Yeepay\Yop\Sdk\Service\Offline\Model\Old as ModelOld;

class OfflineClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = OfflineClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = OfflineClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 绑机(/rest/v1.0/offline/bind)
     *
     * @test
     */
    public function bindTest()
    {
        $request = new Model\BindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto());
        try{
            $response = self::$client->bind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->bind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新增辅助终端信息(/rest/v1.0/offline/create-auxiliary-terminal)
     *
     * @test
     */
    public function createAuxiliaryTerminalTest()
    {
        $request = new Model\CreateAuxiliaryTerminalRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSerialNo("serialNo_example");
        $request->setShopNo("123122809003044");
        $request->setTerminalName("terminalName_example");
        $request->setTerminalType("terminalType_example");
        $request->setCustomerTerminalNo("customerTerminalNo_example");
        $request->setTerminalAddress("terminalAddress_example");
        $request->setIsReport(true);
        try{
            $response = self::$client->createAuxiliaryTerminal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成台牌(/rest/v1.0/offline/create-qrcode)
     *
     * @test
     * @deprecated
     */
    public function createQrCodeOldTest()
    {
        $request = new ModelOld\CreateQrCodeRequest();

        $request->setCount(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->createQrCodeOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createQrCodeOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成台牌(/rest/v1.0/offline/create-qrcode)
     *
     * @test
     */
    public function createQrcodeTest()
    {
        $request = new Model\CreateQrcodeRequest();

        $request->setCount(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->createQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 创建门店(/rest/v1.0/offline/create-shop)
     *
     * @test
     */
    public function createShopTest()
    {
        $request = new Model\CreateShopRequest();

        $request->setAddress("address_example");
        $request->setProvince("province_example");
        $request->setCity("city_example");
        $request->setDistrict("district_example");
        $request->setMobile("mobile_example");
        $request->setShopName("shopName_example");
        $request->setLinkman("linkman_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCustomizeShopNo("customizeShopNo_example");
        $request->setRealShop(true);
        try{
            $response = self::$client->createShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->createShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 下载台牌(/rest/v1.0/offline/download-qrcode)
     *
     * @test
     * @deprecated
     */
    public function downloadQrCodeOldTest()
    {
        $request = new ModelOld\DownloadQrCodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->downloadQrCodeOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->downloadQrCodeOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 下载台牌(/rest/v1.0/offline/download-qrcode)
     *
     * @test
     */
    public function downloadQrcodeTest()
    {
        $request = new Model\DownloadQrcodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->downloadQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->downloadQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询门店(/rest/v1.0/offline/get-shop)
     *
     * @test
     */
    public function getShopTest()
    {
        $request = new Model\GetShopRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setShopName("shopName_example");
        $request->setShopNo("shopNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->getShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->getShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 台牌绑定商户和网点(/rest/v1.0/offline/open-qrcode)
     *
     * @test
     * @deprecated
     */
    public function openQrCodeOldTest()
    {
        $request = new ModelOld\OpenQrCodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());
        try{
            $response = self::$client->openQrCodeOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->openQrCodeOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 台牌绑定商户和网点(/rest/v1.0/offline/open-qrcode)
     *
     * @test
     */
    public function openQrcodeTest()
    {
        $request = new Model\OpenQrcodeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeReqDTO());
        try{
            $response = self::$client->openQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->openQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 关闭/启用门店(/rest/v1.0/offline/operate-shop)
     *
     * @test
     */
    public function operateShopTest()
    {
        $request = new Model\OperateShopRequest();

        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->operateShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->operateShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询采购关系(/rest/v1.0/offline/query-agent-list)
     *
     * @test
     */
    public function queryAgentListTest()
    {
        $request = new Model\QueryAgentListRequest();

        $request->setAgentMerchantNo("agentMerchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTerminalNo("terminalNo_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->queryAgentList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryAgentList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询辅助终端信息(/rest/v1.0/offline/query-auxiliary-terminal)
     *
     * @test
     */
    public function queryAuxiliaryTerminalTest()
    {
        $request = new Model\QueryAuxiliaryTerminalRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShop("shop_example");
        $request->setTerminalNo("terminalNo_example");
        $request->setCustomerTerminalNo("customerTerminalNo_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->queryAuxiliaryTerminal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询凡科AccessToken(/rest/v1.0/offline/query-fanke-access-token)
     *
     * @test
     * @deprecated
     */
    public function queryFanKeAccessTokenOldTest()
    {
        $request = new ModelOld\QueryFanKeAccessTokenRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->queryFanKeAccessTokenOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryFanKeAccessTokenOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询凡科AccessToken(/rest/v1.0/offline/query-fanke-access-token)
     *
     * @test
     */
    public function queryFankeAccessTokenTest()
    {
        $request = new Model\QueryFankeAccessTokenRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->queryFankeAccessToken($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryFankeAccessToken: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询POS交易信息(/rest/v1.0/offline/query-order-info)
     *
     * @test
     */
    public function queryOrderInfoTest()
    {
        $request = new Model\QueryOrderInfoRequest();

        $request->setOrderId("customerReNo1666686514009");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->queryOrderInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryOrderInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询POS交易信息(/rest/v1.0/offline/query-order-info)
     *
     * @test
     */
    public function queryPosTrxInfoTest()
    {
        $request = new Model\QueryPosTrxInfoRequest();

        $request->setOrderId("customerReNo1666686514009");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->queryPosTrxInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryPosTrxInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询台牌列表(/rest/v1.0/offline/query-qrcode-list)
     *
     * @test
     * @deprecated
     */
    public function queryQrCodeListOldTest()
    {
        $request = new ModelOld\QueryQrCodeListRequest();

        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setQrCodeNo("qrCodeNo_example");
        $request->setShopNo("shopNo_example");
        $request->setBindStatus("bindStatus_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->queryQrCodeListOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryQrCodeListOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询台牌列表(/rest/v1.0/offline/query-qrcode-list)
     *
     * @test
     */
    public function queryQrcodeListTest()
    {
        $request = new Model\QueryQrcodeListRequest();

        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setQrCodeNo("qrCodeNo_example");
        $request->setShopNo("shopNo_example");
        $request->setBindStatus("bindStatus_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setStatus("status_example");
        try{
            $response = self::$client->queryQrcodeList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryQrcodeList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询绑机关系(/rest/v1.0/offline/query-shop-bind-list)
     *
     * @test
     */
    public function queryShopBindListTest()
    {
        $request = new Model\QueryShopBindListRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setTerminalType("POS");
        try{
            $response = self::$client->queryShopBindList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->queryShopBindList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 台牌关联播报设备(/rest/v1.0/offline/relate-broadcast-device)
     *
     * @test
     */
    public function relateBroadcastDeviceTest()
    {
        $request = new Model\RelateBroadcastDeviceRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setSerialNo("serialNo_example");
        try{
            $response = self::$client->relateBroadcastDevice($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->relateBroadcastDevice: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新增或修改操作员(/rest/v1.0/offline/save-terminal-employee)
     *
     * @test
     */
    public function saveTerminalEmployeeTest()
    {
        $request = new Model\SaveTerminalEmployeeRequest();

        $request->setEmployeeName("employeeName_example");
        $request->setPassword("password_example");
        $request->setOperatorType("operatorType_example");
        $request->setEmployeeNo("employeeNo_example");
        $request->setEmployeeStatus("employeeStatus_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->saveTerminalEmployee($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->saveTerminalEmployee: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解绑(/rest/v1.0/offline/unbind)
     *
     * @test
     */
    public function unbindTest()
    {
        $request = new Model\UnbindRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto());
        try{
            $response = self::$client->unbind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 台牌解绑商户和网点(/rest/v1.0/offline/unbind-qrcode)
     *
     * @test
     * @deprecated
     */
    public function unbindQrCodeOldTest()
    {
        $request = new ModelOld\UnbindQrCodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->unbindQrCodeOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbindQrCodeOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 台牌解绑商户和网点(/rest/v1.0/offline/unbind-qrcode)
     *
     * @test
     */
    public function unbindQrcodeTest()
    {
        $request = new Model\UnbindQrcodeRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->unbindQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->unbindQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改辅助终端信息(/rest/v1.0/offline/update-auxiliary-terminal)
     *
     * @test
     */
    public function updateAuxiliaryTerminalTest()
    {
        $request = new Model\UpdateAuxiliaryTerminalRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setSerialNo("serialNo_example");
        $request->setTerminalName("terminalName_example");
        $request->setCustomerTerminalNo("customerTerminalNo_example");
        $request->setTerminalAddress("terminalAddress_example");
        $request->setIsReport(true);
        try{
            $response = self::$client->updateAuxiliaryTerminal($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateAuxiliaryTerminal: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 更新台牌备注和台牌简称(/rest/v1.0/offline/update-qr-cfg)
     *
     * @test
     */
    public function updateQrCfgTest()
    {
        $request = new Model\UpdateQrCfgRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUpdateQrCodeCfgReqDTO());
        try{
            $response = self::$client->updateQrCfg($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrCfg: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改台牌状态(/rest/v1.0/offline/update-qrcode-status)
     *
     * @test
     * @deprecated
     */
    public function updateQrCodeStatusOldTest()
    {
        $request = new ModelOld\UpdateQrCodeStatusRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateQrCodeStatusOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrCodeStatusOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改台牌状态(/rest/v1.0/offline/update-qrcode-status)
     *
     * @test
     */
    public function updateQrcodeStatusTest()
    {
        $request = new Model\UpdateQrcodeStatusRequest();

        $request->setQrCodeNo("qrCodeNo_example");
        $request->setOperateType("operateType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateQrcodeStatus($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateQrcodeStatus: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改门店信息(/rest/v1.0/offline/update-shop)
     *
     * @test
     */
    public function updateShopTest()
    {
        $request = new Model\UpdateShopRequest();

        $request->setAddress("address_example");
        $request->setMobile("mobile_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setShopNo("shopNo_example");
        $request->setLinkman("linkman_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateShop($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateShop: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改操作员密码(/rest/v1.0/offline/update-terminal-employee)
     *
     * @test
     */
    public function updateTerminalEmployeeTest()
    {
        $request = new Model\UpdateTerminalEmployeeRequest();

        $request->setResetPassword(56);
        $request->setPassword("password_example");
        $request->setOldPassword("oldPassword_example");
        $request->setEmployeeNo("employeeNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->updateTerminalEmployee($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling OfflineClient->updateTerminalEmployee: ', $e->getMessage(), PHP_EOL;
        }
    }
}
