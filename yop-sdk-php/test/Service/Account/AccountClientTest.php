<?php


namespace Yeepay\Yop\Sdk\Service\Account;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Account\Model as Model;
use Yeepay\Yop\Sdk\Service\Account\Model\Old as ModelOld;

class AccountClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = AccountClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = AccountClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 记账簿退款查询(/rest/v1.0/account/account-book/query-refund)
     *
     * @test
     */
    public function accountBookQueryRefundTest()
    {
        $request = new Model\AccountBookQueryRefundRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        try{
            $response = self::$client->accountBookQueryRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountBookQueryRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿退款(/rest/v1.0/account/account-book/refund)
     *
     * @test
     */
    public function accountBookRefundTest()
    {
        $request = new Model\AccountBookRefundRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        $request->setOriginalOrderNo("originalOrderNo_example");
        $request->setRefundAmount(1.2);
        $request->setBankPostscrip("bankPostscrip_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->accountBookRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountBookRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 更新记账簿(/rest/v1.0/account/account-manage/account/modify)
     *
     * @test
     */
    public function accountManageAccountModifyTest()
    {
        $request = new Model\AccountManageAccountModifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());
        try{
            $response = self::$client->accountManageAccountModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立记账簿(/rest/v1.0/account/account-manage/account/open)
     *
     * @test
     */
    public function accountManageAccountOpenTest()
    {
        $request = new Model\AccountManageAccountOpenRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setMerchantAccountBookName("merchantAccountBookName_example");
        try{
            $response = self::$client->accountManageAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立记账簿(/rest/v2.0/account/account-manage/account/open)
     *
     * @test
     */
    public function accountManageAccountOpenV2Test()
    {
        $request = new Model\AccountManageAccountOpenV2Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());
        try{
            $response = self::$client->accountManageAccountOpenV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountOpenV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询记账簿(/rest/v1.0/account/account-manage/account/query)
     *
     * @test
     */
    public function accountManageAccountQueryTest()
    {
        $request = new Model\AccountManageAccountQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setBookNo("bookNo_example");
        try{
            $response = self::$client->accountManageAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 冻结记账薄金额(/rest/v1.0/account/account-manage/balance/freeze)
     *
     * @test
     */
    public function accountManageBalanceFreezeTest()
    {
        $request = new Model\AccountManageBalanceFreezeRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setFreezeAmount("1.01");
        try{
            $response = self::$client->accountManageBalanceFreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBalanceFreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿冻结记录查询(/rest/v1.0/account/account-manage/balance/freeze-query)
     *
     * @test
     */
    public function accountManageBalanceFreezeQueryTest()
    {
        $request = new Model\AccountManageBalanceFreezeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderFlowNo("orderFlowNo_example");
        try{
            $response = self::$client->accountManageBalanceFreezeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBalanceFreezeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿解冻记录查询(/rest/v1.0/account/account-manage/balance/un-freeze-query)
     *
     * @test
     */
    public function accountManageBalanceUnFreezeQueryTest()
    {
        $request = new Model\AccountManageBalanceUnFreezeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountManageBalanceUnFreezeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBalanceUnFreezeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解冻记账薄金额(/rest/v1.0/account/account-manage/balance/unfreeze)
     *
     * @test
     */
    public function accountManageBalanceUnfreezeTest()
    {
        $request = new Model\AccountManageBalanceUnfreezeRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderFlowNo("orderFlowNo_example");
        $request->setOrgRequestNo("orgRequestNo_example");
        $request->setUnFreezeAmount("1.01");
        try{
            $response = self::$client->accountManageBalanceUnfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBalanceUnfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户(/rest/v1.0/account/account-manage/bank-account/open)
     *
     * @test
     */
    public function accountManageBankAccountOpenTest()
    {
        $request = new Model\AccountManageBankAccountOpenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO());
        try{
            $response = self::$client->accountManageBankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户查询(/rest/v1.0/account/account-manage/bank-account/query)
     *
     * @test
     */
    public function accountManageBankAccountQueryTest()
    {
        $request = new Model\AccountManageBankAccountQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountManageBankAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBankAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户流水查询(/rest/v1.0/account/account-manage/bank/trade/flow/query)
     *
     * @test
     */
    public function accountManageBankTradeFlowQueryTest()
    {
        $request = new Model\AccountManageBankTradeFlowQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setTrxStartDate("2024-01-01");
        $request->setTrxEndDate("2024-01-02");
        $request->setPageSize(100);
        $request->setPageNo(1);
        try{
            $response = self::$client->accountManageBankTradeFlowQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBankTradeFlowQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 厦门多渠道开户激活(/rest/v1.0/account/account-manage/xib-bind-card)
     *
     * @test
     */
    public function accountManageXibBindCardTest()
    {
        $request = new Model\AccountManageXibBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO());
        try{
            $response = self::$client->accountManageXibBindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageXibBindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 冻结记账薄金额(/rest/v1.0/account/account-manage/balance/freeze)
     *
     * @test
     */
    public function account_book_balance_freezeTest()
    {
        $request = new Model\AccountBookBalanceFreezeRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setFreezeAmount("1.01");
        try{
            $response = self::$client->account_book_balance_freeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_balance_freeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿冻结记录查询(/rest/v1.0/account/account-manage/balance/freeze-query)
     *
     * @test
     */
    public function account_book_balance_freeze_queryTest()
    {
        $request = new Model\AccountBookBalanceFreezeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderFlowNo("orderFlowNo_example");
        try{
            $response = self::$client->account_book_balance_freeze_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_balance_freeze_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿解冻记录查询(/rest/v1.0/account/account-manage/balance/un-freeze-query)
     *
     * @test
     */
    public function account_book_balance_un_freeze_queryTest()
    {
        $request = new Model\AccountBookBalanceUnFreezeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->account_book_balance_un_freeze_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_balance_un_freeze_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解冻记账薄金额(/rest/v1.0/account/account-manage/balance/unfreeze)
     *
     * @test
     */
    public function account_book_balance_unfreezeTest()
    {
        $request = new Model\AccountBookBalanceUnfreezeRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderFlowNo("orderFlowNo_example");
        $request->setOrgRequestNo("orgRequestNo_example");
        $request->setUnFreezeAmount("1.01");
        try{
            $response = self::$client->account_book_balance_unfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_balance_unfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立记账簿(/rest/v2.0/account/account-manage/account/open)
     *
     * @test
     */
    public function account_book_createTest()
    {
        $request = new Model\AccountBookCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());
        try{
            $response = self::$client->account_book_create($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_create: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 更新记账簿(/rest/v1.0/account/account-manage/account/modify)
     *
     * @test
     */
    public function account_book_modifyTest()
    {
        $request = new Model\AccountBookModifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());
        try{
            $response = self::$client->account_book_modify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_modify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿退款查询(/rest/v1.0/account/account-book/query-refund)
     *
     * @test
     */
    public function account_book_query_refund_v1_0Test()
    {
        $request = new Model\AccountBookQueryRefundV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        try{
            $response = self::$client->account_book_query_refund_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_query_refund_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿退款(/rest/v1.0/account/account-book/refund)
     *
     * @test
     */
    public function account_book_refund_v1_0Test()
    {
        $request = new Model\AccountBookRefundV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        $request->setOriginalOrderNo("originalOrderNo_example");
        $request->setRefundAmount(1.2);
        $request->setBankPostscrip("bankPostscrip_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->account_book_refund_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_book_refund_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--申请添加个人用户(/rest/v1.0/account/individual/apply)
     *
     * @test
     */
    public function account_individual_applyTest()
    {
        $request = new Model\AccountIndividualApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setPhone("phone_example");
        $request->setFrontUrl("frontUrl_example");
        $request->setContraryUrl("contraryUrl_example");
        try{
            $response = self::$client->account_individual_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--变更已添加的个人用户(/rest/v1.0/account/individual/modify)
     *
     * @test
     */
    public function account_individual_modifyTest()
    {
        $request = new Model\AccountIndividualModifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO());
        try{
            $response = self::$client->account_individual_modify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_modify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--查询已添加的个人用户(/rest/v1.0/account/individual/query)
     *
     * @test
     */
    public function account_individual_queryTest()
    {
        $request = new Model\AccountIndividualQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->account_individual_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--查询申请进度(/rest/v1.0/account/individual/query-progress)
     *
     * @test
     */
    public function account_individual_query_progressTest()
    {
        $request = new Model\AccountIndividualQueryProgressRequest();

        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        try{
            $response = self::$client->account_individual_query_progress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_query_progress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立记账簿(/rest/v1.0/account/account-manage/account/open)
     *
     * @test
     */
    public function account_manage_account_open_v1_0Test()
    {
        $request = new Model\AccountManageAccountOpenV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setMerchantAccountBookName("merchantAccountBookName_example");
        try{
            $response = self::$client->account_manage_account_open_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_manage_account_open_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询记账簿(/rest/v1.0/account/account-manage/account/query)
     *
     * @test
     */
    public function account_manage_account_query_v1_0Test()
    {
        $request = new Model\AccountManageAccountQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setBookNo("bookNo_example");
        try{
            $response = self::$client->account_manage_account_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_manage_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户流水查询(/rest/v1.0/account/account-manage/bank/trade/flow/query)
     *
     * @test
     */
    public function account_manage_bankTradeFlow_queryTest()
    {
        $request = new Model\AccountManageBankTradeFlowQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setTrxStartDate("2024-01-01");
        $request->setTrxEndDate("2024-01-02");
        $request->setPageSize(100);
        $request->setPageNo(1);
        try{
            $response = self::$client->account_manage_bankTradeFlow_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_manage_bankTradeFlow_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户查询(/rest/v1.0/account/account-manage/bank-account/query)
     *
     * @test
     */
    public function account_manage_bank_account_query_v1_0Test()
    {
        $request = new Model\AccountManageBankAccountQueryV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->account_manage_bank_account_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_manage_bank_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单-支持短验复核(/rest/v3.0/account/pay/order)
     *
     * @test
     */
    public function account_pay_order_v3Test()
    {
        $request = new Model\AccountPayOrderV3Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO());
        try{
            $response = self::$client->account_pay_order_v3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_pay_order_v3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款冲退-查询(/rest/v1.0/account/pay/reverse/query)
     *
     * @test
     */
    public function account_remit_reverse_queryTest()
    {
        $request = new Model\AccountRemitReverseQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO());
        try{
            $response = self::$client->account_remit_reverse_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_remit_reverse_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-下单-支持短验复核(/rest/v3.0/account/transfer/b2b/order)
     *
     * @test
     */
    public function account_transfer_b2b_order_v3Test()
    {
        $request = new Model\AccountTransferB2bOrderV3Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO());
        try{
            $response = self::$client->account_transfer_b2b_order_v3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_transfer_b2b_order_v3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 全部账户余额查询(/rest/v1.0/account/accountinfos/query)
     *
     * @test
     */
    public function accountinfosQueryTest()
    {
        $request = new Model\AccountinfosQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountinfosQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountinfosQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 全部账户余额查询(/rest/v1.0/account/accountinfos/query)
     *
     * @test
     */
    public function accountinfos_query_v1_0Test()
    {
        $request = new Model\AccountinfosQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountinfos_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountinfos_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝(/rest/v1.0/account/ali-batch-transfer)
     *
     * @test
     */
    public function aliBatchTransferTest()
    {
        $request = new Model\AliBatchTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO());
        try{
            $response = self::$client->aliBatchTransfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliBatchTransfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝记录查询(/rest/v1.0/account/ali-batch-transfer-detail)
     *
     * @test
     */
    public function aliBatchTransferDetailTest()
    {
        $request = new Model\AliBatchTransferDetailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO());
        try{
            $response = self::$client->aliBatchTransferDetail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliBatchTransferDetail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-解约(/rest/v1.0/account/ali-cancel-contract)
     *
     * @test
     */
    public function aliCancelContractTest()
    {
        $request = new Model\AliCancelContractRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO());
        try{
            $response = self::$client->aliCancelContract($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliCancelContract: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账本资金拨入记录查询(/rest/v1.0/account/ali-capital-transfer-query)
     *
     * @test
     */
    public function aliCapitalTransferQueryTest()
    {
        $request = new Model\AliCapitalTransferQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO());
        try{
            $response = self::$client->aliCapitalTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliCapitalTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-记账本资金拨入(/rest/v1.0/account/ali-captial-transfer)
     *
     * @test
     */
    public function aliCaptialTransferTest()
    {
        $request = new Model\AliCaptialTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO());
        try{
            $response = self::$client->aliCaptialTransfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliCaptialTransfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-记账本查询(/rest/v1.0/account/ali-channel-book-deail)
     *
     * @test
     */
    public function aliChannelBookDeailTest()
    {
        $request = new Model\AliChannelBookDeailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO());
        try{
            $response = self::$client->aliChannelBookDeail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliChannelBookDeail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-开立记账本(/rest/v1.0/account/ali-open-channel-book)
     *
     * @test
     */
    public function aliOpenChannelBookTest()
    {
        $request = new Model\AliOpenChannelBookRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO());
        try{
            $response = self::$client->aliOpenChannelBook($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliOpenChannelBook: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-签约(/rest/v1.0/account/ali-sign-contract)
     *
     * @test
     */
    public function aliSignContractTest()
    {
        $request = new Model\AliSignContractRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO());
        try{
            $response = self::$client->aliSignContract($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliSignContract: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-签约查询(/rest/v1.0/account/ali-sign-contract-query)
     *
     * @test
     */
    public function aliSignContractQueryTest()
    {
        $request = new Model\AliSignContractQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO());
        try{
            $response = self::$client->aliSignContractQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->aliSignContractQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝（单笔）(/rest/v1.0/account/single-proxy-transfer)
     *
     * @test
     */
    public function alipay_Single_Proxy_TransferTest()
    {
        $request = new Model\AlipaySingleProxyTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO());
        try{
            $response = self::$client->alipay_Single_Proxy_Transfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->alipay_Single_Proxy_Transfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 定向付款-下单(/rest/v1.0/account/target/order)
     *
     * @test
     */
    public function appoint_target_remitTest()
    {
        $request = new Model\AppointTargetRemitRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO());
        try{
            $response = self::$client->appoint_target_remit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->appoint_target_remit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则作废(/rest/v1.0/account/auto-withdraw-rule/cancel)
     *
     * @test
     */
    public function autoWithdrawRuleCancelTest()
    {
        $request = new Model\AutoWithdrawRuleCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRuleId("ruleId_example");
        try{
            $response = self::$client->autoWithdrawRuleCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则查询(/rest/v1.0/account/auto-withdraw-rule/query)
     *
     * @test
     */
    public function autoWithdrawRuleQueryTest()
    {
        $request = new Model\AutoWithdrawRuleQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->autoWithdrawRuleQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则设置(/rest/v1.0/account/auto-withdraw-rule/set)
     *
     * @test
     */
    public function autoWithdrawRuleSetTest()
    {
        $request = new Model\AutoWithdrawRuleSetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBindId("bindId_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setReceiveType("receiveType_example");
        $request->setTriggerTime("triggerTime_example");
        $request->setRemainAmount(1.2);
        $request->setRemark("remark_example");
        $request->setNotifyAddress("notifyAddress_example");
        try{
            $response = self::$client->autoWithdrawRuleSet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleSet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则作废(/rest/v1.0/account/auto-withdraw-rule/cancel)
     *
     * @test
     */
    public function auto_withdraw_rule_cancel_v1_0Test()
    {
        $request = new Model\AutoWithdrawRuleCancelV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRuleId("ruleId_example");
        try{
            $response = self::$client->auto_withdraw_rule_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->auto_withdraw_rule_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则查询(/rest/v1.0/account/auto-withdraw-rule/query)
     *
     * @test
     */
    public function auto_withdraw_rule_query_v1_0Test()
    {
        $request = new Model\AutoWithdrawRuleQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->auto_withdraw_rule_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->auto_withdraw_rule_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 自动提现-规则设置(/rest/v1.0/account/auto-withdraw-rule/set)
     *
     * @test
     */
    public function auto_withdraw_rule_set_v1_0Test()
    {
        $request = new Model\AutoWithdrawRuleSetV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBindId("bindId_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setReceiveType("receiveType_example");
        $request->setTriggerTime("triggerTime_example");
        $request->setRemainAmount(1.2);
        $request->setRemark("remark_example");
        $request->setNotifyAddress("notifyAddress_example");
        try{
            $response = self::$client->auto_withdraw_rule_set_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->auto_withdraw_rule_set_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金账户余额查询(/rest/v1.0/account/balance/query)
     *
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资金账户余额查询(/rest/v1.0/account/balance/query)
     *
     * @test
     */
    public function balance_query_v1_0Test()
    {
        $request = new Model\BalanceQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->balance_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行入金退回(/rest/v1.0/account/bank-account/apply-deposit-refund)
     *
     * @test
     */
    public function bankAccountApplyDepositRefundTest()
    {
        $request = new Model\BankAccountApplyDepositRefundRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());
        try{
            $response = self::$client->bankAccountApplyDepositRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountApplyDepositRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通缴费账户(/rest/v1.0/account/bank-account/apply-sub-account)
     *
     * @test
     */
    public function bankAccountApplySubAccountTest()
    {
        $request = new Model\BankAccountApplySubAccountRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());
        try{
            $response = self::$client->bankAccountApplySubAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountApplySubAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户-申请短验(/rest/v1.0/account/bank-account/auth-apply)
     *
     * @test
     */
    public function bankAccountAuthApplyTest()
    {
        $request = new Model\BankAccountAuthApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountAuthApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountAuthApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户-短验确认(/rest/v1.0/account/bank-account/auth-confirm)
     *
     * @test
     */
    public function bankAccountAuthConfirmTest()
    {
        $request = new Model\BankAccountAuthConfirmRequest();

        $request->setAuthCode("authCode_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountAuthConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountAuthConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方银行转账回单(/rest/v1.0/account/bank-account/download-receipt)
     *
     * @test
     */
    public function bankAccountDownloadReceiptTest()
    {
        $request = new Model\BankAccountDownloadReceiptRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setBankSerialNo("bankSerialNo_example");
        $request->setTrxDateTime("trxDateTime_example");
        try{
            $response = self::$client->bankAccountDownloadReceipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountDownloadReceipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行入金流水退回查询(/rest/v1.0/account/bank-account/query-deposit-refund)
     *
     * @test
     */
    public function bankAccountQueryDepositRefundTest()
    {
        $request = new Model\BankAccountQueryDepositRefundRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRefundFlowNo("refundFlowNo_example");
        try{
            $response = self::$client->bankAccountQueryDepositRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountQueryDepositRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询缴费账户(/rest/v1.0/account/bank-account/query-sub-account)
     *
     * @test
     */
    public function bankAccountQuerySubAccountTest()
    {
        $request = new Model\BankAccountQuerySubAccountRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountUid("merchantAccountUid_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        try{
            $response = self::$client->bankAccountQuerySubAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountQuerySubAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 缴费账户绑定卡(/rest/v1.0/account/bank-account/sub-account/bind-card)
     *
     * @test
     */
    public function bankAccountSubAccountBindCardTest()
    {
        $request = new Model\BankAccountSubAccountBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO());
        try{
            $response = self::$client->bankAccountSubAccountBindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountSubAccountBindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户变更绑卡(/rest/v1.0/account/bank-clear/change-card)
     *
     * @test
     */
    public function bankClearChangeCardTest()
    {
        $request = new Model\BankClearChangeCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO());
        try{
            $response = self::$client->bankClearChangeCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankClearChangeCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资质信息补录(/rest/v1.0/account/bank-open-supplement)
     *
     * @test
     */
    public function bankOpenSupplementTest()
    {
        $request = new Model\BankOpenSupplementRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO());
        try{
            $response = self::$client->bankOpenSupplement($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankOpenSupplement: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户支付(/rest/v1.0/account/bank/payment/order)
     *
     * @test
     */
    public function bankPaymentOrderTest()
    {
        $request = new Model\BankPaymentOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto());
        try{
            $response = self::$client->bankPaymentOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankPaymentOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户-申请短验(/rest/v1.0/account/bank-account/auth-apply)
     *
     * @test
     */
    public function bank_account_auth_applyTest()
    {
        $request = new Model\BankAccountAuthApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_auth_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_auth_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行账户-短验确认(/rest/v1.0/account/bank-account/auth-confirm)
     *
     * @test
     */
    public function bank_account_auth_confirmTest()
    {
        $request = new Model\BankAccountAuthConfirmRequest();

        $request->setAuthCode("authCode_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_auth_confirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_auth_confirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户余额查询(/rest/v1.0/account/bankaccountbalancequery)
     *
     * @test
     * @deprecated
     */
    public function bank_account_balance_queryOldTest()
    {
        $request = new ModelOld\BankAccountBalanceQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO());
        try{
            $response = self::$client->bank_account_balance_queryOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_balance_queryOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行入金退回(/rest/v1.0/account/bank-account/apply-deposit-refund)
     *
     * @test
     */
    public function bank_account_deposit_refund_applyTest()
    {
        $request = new Model\BankAccountDepositRefundApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());
        try{
            $response = self::$client->bank_account_deposit_refund_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_deposit_refund_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款方银行转账回单(/rest/v1.0/account/bank-account/download-receipt)
     *
     * @test
     */
    public function bank_account_download_receiptTest()
    {
        $request = new Model\BankAccountDownloadReceiptRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setBankSerialNo("bankSerialNo_example");
        $request->setTrxDateTime("trxDateTime_example");
        try{
            $response = self::$client->bank_account_download_receipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_download_receipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行入金流水退回查询(/rest/v1.0/account/bank-account/query-deposit-refund)
     *
     * @test
     */
    public function bank_account_query_deposit_refundTest()
    {
        $request = new Model\BankAccountQueryDepositRefundRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRefundFlowNo("refundFlowNo_example");
        try{
            $response = self::$client->bank_account_query_deposit_refund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_query_deposit_refund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询缴费账户(/rest/v1.0/account/bank-account/query-sub-account)
     *
     * @test
     */
    public function bank_account_query_sub_accountTest()
    {
        $request = new Model\BankAccountQuerySubAccountRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountUid("merchantAccountUid_example");
        $request->setBankCode("bankCode_example");
        $request->setBankAccountNo("bankAccountNo_example");
        try{
            $response = self::$client->bank_account_query_sub_account($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_query_sub_account: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通缴费账户(/rest/v1.0/account/bank-account/apply-sub-account)
     *
     * @test
     */
    public function bank_account_sub_account_applyTest()
    {
        $request = new Model\BankAccountSubAccountApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());
        try{
            $response = self::$client->bank_account_sub_account_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_sub_account_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 缴费账户绑定卡(/rest/v1.0/account/bank-account/sub-account/bind-card)
     *
     * @test
     */
    public function bank_account_sub_account_bind_cardTest()
    {
        $request = new Model\BankAccountSubAccountBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO());
        try{
            $response = self::$client->bank_account_sub_account_bind_card($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_sub_account_bind_card: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分绑卡(/rest/v1.0/account/bankclearbindcard)
     *
     * @test
     * @deprecated
     */
    public function bank_clear_bind_cardOldTest()
    {
        $request = new ModelOld\BankClearBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO());
        try{
            $response = self::$client->bank_clear_bind_cardOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_clear_bind_cardOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户变更绑卡(/rest/v1.0/account/bank-clear/change-card)
     *
     * @test
     */
    public function bank_clear_change_bind_cardTest()
    {
        $request = new Model\BankClearChangeBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO());
        try{
            $response = self::$client->bank_clear_change_bind_card($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_clear_change_bind_card: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户支付(/rest/v1.0/account/bank/payment/order)
     *
     * @test
     */
    public function bank_payment_order_v1_0Test()
    {
        $request = new Model\BankPaymentOrderV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto());
        try{
            $response = self::$client->bank_payment_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_payment_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户余额查询(/rest/v1.0/account/bankaccountbalancequery)
     *
     * @test
     */
    public function bankaccountbalancequeryTest()
    {
        $request = new Model\BankaccountbalancequeryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO());
        try{
            $response = self::$client->bankaccountbalancequery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankaccountbalancequery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行清分账户查询(/rest/v1.0/account/bankclerapplyrecord)
     *
     * @test
     */
    public function bankclear_apply_recordTest()
    {
        $request = new Model\BankclearApplyRecordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO());
        try{
            $response = self::$client->bankclear_apply_record($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankclear_apply_record: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分绑卡(/rest/v1.0/account/bankclearbindcard)
     *
     * @test
     */
    public function bankclearbindcardTest()
    {
        $request = new Model\BankclearbindcardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO());
        try{
            $response = self::$client->bankclearbindcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankclearbindcard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行清分账户查询(/rest/v1.0/account/bankclerapplyrecord)
     *
     * @test
     */
    public function bankclerapplyrecordTest()
    {
        $request = new Model\BankclerapplyrecordRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO());
        try{
            $response = self::$client->bankclerapplyrecord($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankclerapplyrecord: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡-申请短验(/rest/v1.0/account/bindcardauthapply)
     *
     * @test
     * @deprecated
     */
    public function bind_card_auth_applyOldTest()
    {
        $request = new ModelOld\BindCardAuthApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO());
        try{
            $response = self::$client->bind_card_auth_applyOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bind_card_auth_applyOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户绑卡-验证确认(/rest/v1.0/account/bindcardauthapplyconfirm)
     *
     * @test
     * @deprecated
     */
    public function bind_card_auth_apply_confirmOldTest()
    {
        $request = new ModelOld\BindCardAuthApplyConfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO());
        try{
            $response = self::$client->bind_card_auth_apply_confirmOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bind_card_auth_apply_confirmOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡-申请短验(/rest/v1.0/account/bindcardauthapply)
     *
     * @test
     */
    public function bindcardauthapplyTest()
    {
        $request = new Model\BindcardauthapplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO());
        try{
            $response = self::$client->bindcardauthapply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bindcardauthapply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户绑卡-验证确认(/rest/v1.0/account/bindcardauthapplyconfirm)
     *
     * @test
     */
    public function bindcardauthapplyconfirmTest()
    {
        $request = new Model\BindcardauthapplyconfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO());
        try{
            $response = self::$client->bindcardauthapplyconfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bindcardauthapplyconfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 多渠道入金通知回单下载(/rest/v1.0/account/download/deposit-notify-receipt)
     *
     * @test
     */
    public function downloadDepositNotifyReceiptTest()
    {
        $request = new Model\DownloadDepositNotifyReceiptRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO());
        try{
            $response = self::$client->downloadDepositNotifyReceipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->downloadDepositNotifyReceipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 多渠道入金通知回单下载(/rest/v1.0/account/download/deposit-notify-receipt)
     *
     * @test
     */
    public function download_deposit_notify_receiptTest()
    {
        $request = new Model\DownloadDepositNotifyReceiptRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO());
        try{
            $response = self::$client->download_deposit_notify_receipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->download_deposit_notify_receipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账薄支付(/rest/v1.0/account/enterprise/account-book-pay/order)
     *
     * @test
     */
    public function enterpriseAccountBookPayOrderTest()
    {
        $request = new Model\EnterpriseAccountBookPayOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto());
        try{
            $response = self::$client->enterpriseAccountBookPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAccountBookPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-下单(/rest/v1.0/account/enterprise/account-pay/order)
     *
     * @test
     */
    public function enterpriseAccountPayOrderTest()
    {
        $request = new Model\EnterpriseAccountPayOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto());
        try{
            $response = self::$client->enterpriseAccountPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAccountPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款(/rest/v1.0/account/enterprise/auto-payment/order)
     *
     * @test
     */
    public function enterpriseAutoPaymentOrderTest()
    {
        $request = new Model\EnterpriseAutoPaymentOrderRequest();

        $request->setParentMerchantNo("10014242005");
        $request->setMerchantNo("10014242006");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(0.01);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2021-05-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        try{
            $response = self::$client->enterpriseAutoPaymentOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款-航旅纵横版(/rest/v1.0/account/enterprise/auto-payment/order-hlzh)
     *
     * @test
     */
    public function enterpriseAutoPaymentOrderHlzhTest()
    {
        $request = new Model\EnterpriseAutoPaymentOrderHlzhRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto());
        try{
            $response = self::$client->enterpriseAutoPaymentOrderHlzh($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrderHlzh: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款订单查询(/rest/v1.0/account/enterprise/auto-payment/query)
     *
     * @test
     */
    public function enterpriseAutoPaymentQueryTest()
    {
        $request = new Model\EnterpriseAutoPaymentQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderDate("orderDate_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->enterpriseAutoPaymentQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-token支付(/rest/v1.0/account/enterprise/token-pay/order)
     *
     * @test
     */
    public function enterpriseTokenPayOrderTest()
    {
        $request = new Model\EnterpriseTokenPayOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setToken("token_example");
        $request->setPayerMerchantNo("payerMerchantNo_example");
        try{
            $response = self::$client->enterpriseTokenPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseTokenPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-关系扣款余额预校验(/rest/v1.0/account/enterprise/withholding/check-balance)
     *
     * @test
     */
    public function enterpriseWithholdingCheckBalanceTest()
    {
        $request = new Model\EnterpriseWithholdingCheckBalanceRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPayerMerchantNo("payerMerchantNo_example");
        $request->setTradeAmount(1.2);
        try{
            $response = self::$client->enterpriseWithholdingCheckBalance($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseWithholdingCheckBalance: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-关系扣款(/rest/v1.0/account/enterprise/withholding/order)
     *
     * @test
     */
    public function enterpriseWithholdingOrderTest()
    {
        $request = new Model\EnterpriseWithholdingOrderRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10014242004");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(88.88);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2017-12-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("费用");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        try{
            $response = self::$client->enterpriseWithholdingOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseWithholdingOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账薄支付(/rest/v1.0/account/enterprise/account-book-pay/order)
     *
     * @test
     */
    public function enterprise_account_book_pay_order_v1_0Test()
    {
        $request = new Model\EnterpriseAccountBookPayOrderV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto());
        try{
            $response = self::$client->enterprise_account_book_pay_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_account_book_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-下单(/rest/v1.0/account/enterprise/account-pay/order)
     *
     * @test
     */
    public function enterprise_account_pay_order_v1_0Test()
    {
        $request = new Model\EnterpriseAccountPayOrderV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto());
        try{
            $response = self::$client->enterprise_account_pay_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_account_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款-航旅纵横版(/rest/v1.0/account/enterprise/auto-payment/order-hlzh)
     *
     * @test
     */
    public function enterprise_auto_payment_order_hlzhTest()
    {
        $request = new Model\EnterpriseAutoPaymentOrderHlzhRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto());
        try{
            $response = self::$client->enterprise_auto_payment_order_hlzh($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_auto_payment_order_hlzh: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款(/rest/v1.0/account/enterprise/auto-payment/order)
     *
     * @test
     */
    public function enterprise_auto_payment_order_v1_0Test()
    {
        $request = new Model\EnterpriseAutoPaymentOrderV10Request();

        $request->setParentMerchantNo("10014242005");
        $request->setMerchantNo("10014242006");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(0.01);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2021-05-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        try{
            $response = self::$client->enterprise_auto_payment_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_auto_payment_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-自动付款订单查询(/rest/v1.0/account/enterprise/auto-payment/query)
     *
     * @test
     */
    public function enterprise_auto_payment_query_v1_0Test()
    {
        $request = new Model\EnterpriseAutoPaymentQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderDate("orderDate_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->enterprise_auto_payment_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_auto_payment_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-token支付(/rest/v1.0/account/enterprise/token-pay/order)
     *
     * @test
     */
    public function enterprise_token_pay_order_v1_0Test()
    {
        $request = new Model\EnterpriseTokenPayOrderV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setToken("token_example");
        $request->setPayerMerchantNo("payerMerchantNo_example");
        try{
            $response = self::$client->enterprise_token_pay_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_token_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-关系扣款余额预校验(/rest/v1.0/account/enterprise/withholding/check-balance)
     *
     * @test
     */
    public function enterprise_withholding_check_balance_v1_0Test()
    {
        $request = new Model\EnterpriseWithholdingCheckBalanceV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPayerMerchantNo("payerMerchantNo_example");
        $request->setTradeAmount(1.2);
        try{
            $response = self::$client->enterprise_withholding_check_balance_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_withholding_check_balance_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 企业账户支付-关系扣款(/rest/v1.0/account/enterprise/withholding/order)
     *
     * @test
     */
    public function enterprise_withholding_order_v1_0Test()
    {
        $request = new Model\EnterpriseWithholdingOrderV10Request();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10014242004");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(88.88);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2017-12-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("费用");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        try{
            $response = self::$client->enterprise_withholding_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterprise_withholding_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户支付-外部订单同步(/rest/v1.0/account/external/order)
     *
     * @test
     */
    public function externalOrderTest()
    {
        $request = new Model\ExternalOrderRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelName("美团");
        $request->setOrderId("orderId_example");
        $request->setMerchantName("merchantName_example");
        $request->setGoodsName("goodsName_example");
        $request->setTrxDate("trxDate_example");
        $request->setFinishDate("finishDate_example");
        $request->setOrderAmount(1.2);
        $request->setRealAmount(1.2);
        $request->setPayerUserId("payerUserId_example");
        $request->setPayWay("payWay_example");
        $request->setPayCardNo("payCardNo_example");
        $request->setPayCardType("payCardType_example");
        $request->setUserRequestIp("userRequestIp_example");
        $request->setTrxType("trxType_example");
        $request->setBatchNo("batchNo_example");
        $request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");
        try{
            $response = self::$client->externalOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->externalOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行账户支付-外部订单同步(/rest/v1.0/account/external/order)
     *
     * @test
     */
    public function external_order_v1_0Test()
    {
        $request = new Model\ExternalOrderV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelName("美团");
        $request->setOrderId("orderId_example");
        $request->setMerchantName("merchantName_example");
        $request->setGoodsName("goodsName_example");
        $request->setTrxDate("trxDate_example");
        $request->setFinishDate("finishDate_example");
        $request->setOrderAmount(1.2);
        $request->setRealAmount(1.2);
        $request->setPayerUserId("payerUserId_example");
        $request->setPayWay("payWay_example");
        $request->setPayCardNo("payCardNo_example");
        $request->setPayCardType("payCardType_example");
        $request->setUserRequestIp("userRequestIp_example");
        $request->setTrxType("trxType_example");
        $request->setBatchNo("batchNo_example");
        $request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");
        try{
            $response = self::$client->external_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->external_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转入方回单下载(/rest/v1.0/account/receipt/receiver/get)
     *
     * @test
     */
    public function getReceiptForReceiverTest()
    {
        $request = new Model\GetReceiptForReceiverRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO());
        try{
            $response = self::$client->getReceiptForReceiver($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->getReceiptForReceiver: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户信息查询(/rest/v1.0/account/getclearaccountinfoymerchant)
     *
     * @test
     */
    public function get_clear_account_info_by_merchantTest()
    {
        $request = new Model\GetClearAccountInfoByMerchantRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO());
        try{
            $response = self::$client->get_clear_account_info_by_merchant($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->get_clear_account_info_by_merchant: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户信息查询(/rest/v1.0/account/getclearaccountinfoymerchant)
     *
     * @test
     */
    public function getclearaccountinfoymerchantTest()
    {
        $request = new Model\GetclearaccountinfoymerchantRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO());
        try{
            $response = self::$client->getclearaccountinfoymerchant($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->getclearaccountinfoymerchant: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 集团账户资金划拨(/rest/v1.0/account/group/account/transfer)
     *
     * @test
     */
    public function groupAccountTransferTest()
    {
        $request = new Model\GroupAccountTransferRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
        $request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
        $request->setUsage("usage_example");
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->groupAccountTransfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->groupAccountTransfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 集团账户资金划拨查询(/rest/v1.0/account/group/account/transfer/query)
     *
     * @test
     */
    public function groupAccountTransferQueryTest()
    {
        $request = new Model\GroupAccountTransferQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("TRANS2133213124");
        try{
            $response = self::$client->groupAccountTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->groupAccountTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--申请添加个人用户(/rest/v1.0/account/individual/apply)
     *
     * @test
     */
    public function individualApplyTest()
    {
        $request = new Model\IndividualApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setPhone("phone_example");
        $request->setFrontUrl("frontUrl_example");
        $request->setContraryUrl("contraryUrl_example");
        try{
            $response = self::$client->individualApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--变更已添加的个人用户(/rest/v1.0/account/individual/modify)
     *
     * @test
     */
    public function individualModifyTest()
    {
        $request = new Model\IndividualModifyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO());
        try{
            $response = self::$client->individualModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--查询已添加的个人用户(/rest/v1.0/account/individual/query)
     *
     * @test
     */
    public function individualQueryTest()
    {
        $request = new Model\IndividualQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->individualQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到个人--查询申请进度(/rest/v1.0/account/individual/query-progress)
     *
     * @test
     */
    public function individualQueryProgressTest()
    {
        $request = new Model\IndividualQueryProgressRequest();

        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        try{
            $response = self::$client->individualQueryProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualQueryProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿出款-下单(/rest/v1.0/account/user-book/withdraw/order)
     *
     * @test
     */
    public function initiateUserBookWithdrawTest()
    {
        $request = new Model\InitiateUserBookWithdrawRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO());
        try{
            $response = self::$client->initiateUserBookWithdraw($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->initiateUserBookWithdraw: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通、关闭复核功能(/rest/v1.0/account/manage/audit/process)
     *
     * @test
     */
    public function manageAuditProcessTest()
    {
        $request = new Model\ManageAuditProcessRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO());
        try{
            $response = self::$client->manageAuditProcess($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditProcess: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请添加短验复核人(/rest/v1.0/account/manage/auditor/add)
     *
     * @test
     */
    public function manageAuditorAddTest()
    {
        $request = new Model\ManageAuditorAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO());
        try{
            $response = self::$client->manageAuditorAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditorAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加短验复核人确认(/rest/v1.0/account/manage/auditor/confirm)
     *
     * @test
     */
    public function manageAuditorConfirmTest()
    {
        $request = new Model\ManageAuditorConfirmRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO());
        try{
            $response = self::$client->manageAuditorConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditorConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询短验复核人(/rest/v1.0/account/manage/auditor/list)
     *
     * @test
     */
    public function manageAuditorListTest()
    {
        $request = new Model\ManageAuditorListRequest();

        $request->setAuditBiz("auditBiz_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->manageAuditorList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditorList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询短验复核人申请信息(/rest/v1.0/account/manage/auditor/query)
     *
     * @test
     */
    public function manageAuditorQueryTest()
    {
        $request = new Model\ManageAuditorQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setApplyOrderNo("applyOrderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->manageAuditorQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditorQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加短验复核人重发短验(/rest/v1.0/account/manage/auditor/send-sms)
     *
     * @test
     */
    public function manageAuditorSendSmsTest()
    {
        $request = new Model\ManageAuditorSendSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO());
        try{
            $response = self::$client->manageAuditorSendSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageAuditorSendSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加商户审核人手机号(/rest/v1.0/account/manage/reviewer/add-phone)
     *
     * @test
     */
    public function manageReviewerAddPhoneTest()
    {
        $request = new Model\ManageReviewerAddPhoneRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO());
        try{
            $response = self::$client->manageReviewerAddPhone($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageReviewerAddPhone: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户审核人(/rest/v1.0/account/manage/reviewer/query)
     *
     * @test
     */
    public function manageReviewerQueryTest()
    {
        $request = new Model\ManageReviewerQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->manageReviewerQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageReviewerQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 在途账户余额查询(/rest/v1.0/account/manage/transit-balance-query)
     *
     * @test
     */
    public function manageTransitBalanceQueryTest()
    {
        $request = new Model\ManageTransitBalanceQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO());
        try{
            $response = self::$client->manageTransitBalanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manageTransitBalanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请开通、关闭复核功能(/rest/v1.0/account/manage/audit/process)
     *
     * @test
     */
    public function manage_audit_process_v1_0Test()
    {
        $request = new Model\ManageAuditProcessV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO());
        try{
            $response = self::$client->manage_audit_process_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_audit_process_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 申请添加短验复核人(/rest/v1.0/account/manage/auditor/add)
     *
     * @test
     */
    public function manage_auditor_add_v1_0Test()
    {
        $request = new Model\ManageAuditorAddV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO());
        try{
            $response = self::$client->manage_auditor_add_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_auditor_add_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加短验复核人确认(/rest/v1.0/account/manage/auditor/confirm)
     *
     * @test
     */
    public function manage_auditor_confirm_v1_0Test()
    {
        $request = new Model\ManageAuditorConfirmV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO());
        try{
            $response = self::$client->manage_auditor_confirm_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_auditor_confirm_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询短验复核人(/rest/v1.0/account/manage/auditor/list)
     *
     * @test
     */
    public function manage_auditor_list_v1_0Test()
    {
        $request = new Model\ManageAuditorListV10Request();

        $request->setAuditBiz("auditBiz_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->manage_auditor_list_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_auditor_list_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询短验复核人申请信息(/rest/v1.0/account/manage/auditor/query)
     *
     * @test
     */
    public function manage_auditor_query_v1_0Test()
    {
        $request = new Model\ManageAuditorQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setApplyOrderNo("applyOrderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->manage_auditor_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_auditor_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加短验复核人重发短验(/rest/v1.0/account/manage/auditor/send-sms)
     *
     * @test
     */
    public function manage_auditor_send_sms_v1_0Test()
    {
        $request = new Model\ManageAuditorSendSmsV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO());
        try{
            $response = self::$client->manage_auditor_send_sms_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_auditor_send_sms_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 资质信息补录(/rest/v1.0/account/bank-open-supplement)
     *
     * @test
     */
    public function manage_bank_supplementTest()
    {
        $request = new Model\ManageBankSupplementRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO());
        try{
            $response = self::$client->manage_bank_supplement($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_bank_supplement: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加商户审核人手机号(/rest/v1.0/account/manage/reviewer/add-phone)
     *
     * @test
     */
    public function manage_reviewer_add_phone_v1_0Test()
    {
        $request = new Model\ManageReviewerAddPhoneV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO());
        try{
            $response = self::$client->manage_reviewer_add_phone_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_reviewer_add_phone_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询商户审核人(/rest/v1.0/account/manage/reviewer/query)
     *
     * @test
     */
    public function manage_reviewer_query_v1_0Test()
    {
        $request = new Model\ManageReviewerQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->manage_reviewer_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->manage_reviewer_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单（多场景）(/rest/v2.0/account/pay/order)
     *
     * @test
     */
    public function multimodal_account_tradeTest()
    {
        $request = new Model\MultimodalAccountTradeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());
        try{
            $response = self::$client->multimodal_account_trade($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->multimodal_account_trade: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行清分账户(/rest/v1.0/account/openbankaccount)
     *
     * @test
     * @deprecated
     */
    public function open_bank_accountOldTest()
    {
        $request = new ModelOld\OpenBankAccountRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO());
        try{
            $response = self::$client->open_bank_accountOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->open_bank_accountOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 开立银行清分账户(/rest/v1.0/account/openbankaccount)
     *
     * @test
     */
    public function openbankaccountTest()
    {
        $request = new Model\OpenbankaccountRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO());
        try{
            $response = self::$client->openbankaccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->openbankaccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付到记账簿绑定卡(/rest/v1.0/account/pay/accout-card)
     *
     * @test
     */
    public function payAccoutCardTest()
    {
        $request = new Model\PayAccoutCardRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setReceiverAccountNo("receiverAccountNo_example");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setTerminalType("terminalType_example");
        $request->setComments("comments_example");
        $request->setRemark("remark_example");
        $request->setReceiptComments("receiptComments_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setReceiveType("receiveType_example");
        try{
            $response = self::$client->payAccoutCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payAccoutCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-批量下单(/rest/v1.0/account/pay/batch-order)
     *
     * @test
     */
    public function payBatchOrderTest()
    {
        $request = new Model\PayBatchOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO());
        try{
            $response = self::$client->payBatchOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-批次查询(/rest/v1.0/account/pay/batch-query)
     *
     * @test
     */
    public function payBatchQueryTest()
    {
        $request = new Model\PayBatchQueryRequest();

        $request->setBatchNo("batchNo_example");
        try{
            $response = self::$client->payBatchQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-撤销(/rest/v1.0/account/pay/cancel)
     *
     * @test
     */
    public function payCancelTest()
    {
        $request = new Model\PayCancelRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setOrderNo("20200720110033a171b64e");
        $request->setCancelReason("业务需要撤销此次付款");
        try{
            $response = self::$client->payCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单(/rest/v1.0/account/pay/order)
     *
     * @test
     */
    public function payOrderTest()
    {
        $request = new Model\PayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("PAY2133213124");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("PAYER");
        $request->setReceiveType("REAL_TIME");
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setReceiverAccountName("receiverAccountName_example");
        $request->setReceiverBankCode("receiverBankCode_example");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setBranchBankCode("102100000021");
        $request->setComments("xx平台付款");
        $request->setTerminalType("PC");
        $request->setNotifyUrl("http://www.baidu.com");
        $request->setRemark("remark_example");
        $request->setReceiptComments("receiptComments_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setMacAddress("macAddress_example");
        try{
            $response = self::$client->payOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-复核订单查询(/rest/v1.0/account/pay/order/audit-query)
     *
     * @test
     */
    public function payOrderAuditQueryTest()
    {
        $request = new Model\PayOrderAuditQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAuditMethod("auditMethod_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->payOrderAuditQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrderAuditQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-短信重发(/rest/v1.0/account/pay/order/audit-send-sms)
     *
     * @test
     */
    public function payOrderAuditSendSmsTest()
    {
        $request = new Model\PayOrderAuditSendSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO());
        try{
            $response = self::$client->payOrderAuditSendSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrderAuditSendSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-短信确认(/rest/v1.0/account/pay/order/audit-sms)
     *
     * @test
     */
    public function payOrderAuditSmsTest()
    {
        $request = new Model\PayOrderAuditSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO());
        try{
            $response = self::$client->payOrderAuditSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrderAuditSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单（多场景）(/rest/v2.0/account/pay/order)
     *
     * @test
     */
    public function payOrderV2Test()
    {
        $request = new Model\PayOrderV2Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());
        try{
            $response = self::$client->payOrderV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrderV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单-支持短验复核(/rest/v3.0/account/pay/order)
     *
     * @test
     */
    public function payOrderV3Test()
    {
        $request = new Model\PayOrderV3Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO());
        try{
            $response = self::$client->payOrderV3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrderV3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-查询(/rest/v1.0/account/pay/query)
     *
     * @test
     */
    public function payQueryTest()
    {
        $request = new Model\PayQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->payQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款冲退-查询(/rest/v1.0/account/pay/reverse/query)
     *
     * @test
     */
    public function payReverseQueryTest()
    {
        $request = new Model\PayReverseQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO());
        try{
            $response = self::$client->payReverseQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payReverseQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-查询(/rest/v1.0/account/pay/system/query)
     *
     * @test
     */
    public function paySystemQueryTest()
    {
        $request = new Model\PaySystemQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->paySystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->paySystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-批量下单(/rest/v1.0/account/pay/batch-order)
     *
     * @test
     */
    public function pay_batch_order_v1_0Test()
    {
        $request = new Model\PayBatchOrderV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO());
        try{
            $response = self::$client->pay_batch_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_batch_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-批次查询(/rest/v1.0/account/pay/batch-query)
     *
     * @test
     */
    public function pay_batch_query_v1_0Test()
    {
        $request = new Model\PayBatchQueryV10Request();

        $request->setBatchNo("batchNo_example");
        try{
            $response = self::$client->pay_batch_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_batch_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-撤销(/rest/v1.0/account/pay/cancel)
     *
     * @test
     */
    public function pay_cancel_v1_0Test()
    {
        $request = new Model\PayCancelV10Request();

        $request->setParentMerchantNo("100400612345");
        $request->setOrderNo("20200720110033a171b64e");
        $request->setCancelReason("业务需要撤销此次付款");
        try{
            $response = self::$client->pay_cancel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-复核订单查询(/rest/v1.0/account/pay/order/audit-query)
     *
     * @test
     */
    public function pay_order_audit_queryTest()
    {
        $request = new Model\PayOrderAuditQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAuditMethod("auditMethod_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->pay_order_audit_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_order_audit_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-短信重发(/rest/v1.0/account/pay/order/audit-send-sms)
     *
     * @test
     */
    public function pay_order_audit_send_smsTest()
    {
        $request = new Model\PayOrderAuditSendSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO());
        try{
            $response = self::$client->pay_order_audit_send_sms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_order_audit_send_sms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-短信确认(/rest/v1.0/account/pay/order/audit-sms)
     *
     * @test
     */
    public function pay_order_audit_smsTest()
    {
        $request = new Model\PayOrderAuditSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO());
        try{
            $response = self::$client->pay_order_audit_sms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_order_audit_sms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-下单(/rest/v1.0/account/pay/order)
     *
     * @test
     */
    public function pay_order_v1_0Test()
    {
        $request = new Model\PayOrderV10Request();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("PAY2133213124");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("PAYER");
        $request->setReceiveType("REAL_TIME");
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setReceiverAccountName("receiverAccountName_example");
        $request->setReceiverBankCode("receiverBankCode_example");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setBranchBankCode("102100000021");
        $request->setComments("xx平台付款");
        $request->setTerminalType("PC");
        $request->setNotifyUrl("http://www.baidu.com");
        $request->setRemark("remark_example");
        $request->setReceiptComments("receiptComments_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setMacAddress("macAddress_example");
        try{
            $response = self::$client->pay_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-查询(/rest/v1.0/account/pay/query)
     *
     * @test
     */
    public function pay_query_v1_0Test()
    {
        $request = new Model\PayQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->pay_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款-查询(/rest/v1.0/account/pay/system/query)
     *
     * @test
     */
    public function pay_system_query_v1_0Test()
    {
        $request = new Model\PaySystemQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->pay_system_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->pay_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝记录查询（单笔）(/rest/v1.0/account/query-single-transfer-detail)
     *
     * @test
     */
    public function querySingleTransferDetailTest()
    {
        $request = new Model\QuerySingleTransferDetailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO());
        try{
            $response = self::$client->querySingleTransferDetail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->querySingleTransferDetail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿出款-查询(/rest/v1.0/account/user-book/withdraw/query)
     *
     * @test
     */
    public function queryUserBookWithdrawOrderBySystemTest()
    {
        $request = new Model\QueryUserBookWithdrawOrderBySystemRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO());
        try{
            $response = self::$client->queryUserBookWithdrawOrderBySystem($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->queryUserBookWithdrawOrderBySystem: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡请求查询(/rest/v1.0/account/querybindcardapplylist)
     *
     * @test
     * @deprecated
     */
    public function query_bind_card_apply_listOldTest()
    {
        $request = new ModelOld\QueryBindCardApplyListRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO());
        try{
            $response = self::$client->query_bind_card_apply_listOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->query_bind_card_apply_listOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡信息查询(/rest/v1.0/account/querybindcardlist)
     *
     * @test
     * @deprecated
     */
    public function query_bind_card_listOldTest()
    {
        $request = new ModelOld\QueryBindCardListRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO());
        try{
            $response = self::$client->query_bind_card_listOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->query_bind_card_listOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝记录查询（单笔）(/rest/v1.0/account/query-single-transfer-detail)
     *
     * @test
     */
    public function query_single_transfer_detailTest()
    {
        $request = new Model\QuerySingleTransferDetailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO());
        try{
            $response = self::$client->query_single_transfer_detail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->query_single_transfer_detail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 在途账户余额查询(/rest/v1.0/account/manage/transit-balance-query)
     *
     * @test
     */
    public function query_transit_account_balanceTest()
    {
        $request = new Model\QueryTransitAccountBalanceRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO());
        try{
            $response = self::$client->query_transit_account_balance($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->query_transit_account_balance: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡请求查询(/rest/v1.0/account/querybindcardapplylist)
     *
     * @test
     */
    public function querybindcardapplylistTest()
    {
        $request = new Model\QuerybindcardapplylistRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO());
        try{
            $response = self::$client->querybindcardapplylist($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->querybindcardapplylist: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银行清分账户绑卡信息查询(/rest/v1.0/account/querybindcardlist)
     *
     * @test
     */
    public function querybindcardlistTest()
    {
        $request = new Model\QuerybindcardlistRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO());
        try{
            $response = self::$client->querybindcardlist($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->querybindcardlist: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取资金汇总凭证(/rest/v1.0/account/receipt/gather)
     *
     * @test
     */
    public function receiptGatherTest()
    {
        $request = new Model\ReceiptGatherRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRemark("remark_example");
        $request->setCounterpartyNo("counterpartyNo_example");
        $request->setOrderNos("orderNos_example");
        $request->setBizDate("bizDate_example");
        try{
            $response = self::$client->receiptGather($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptGather: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 电子回单-下载(/rest/v1.0/account/receipt/get)
     *
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setTradeType("tradeType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderDate("orderDate_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->receiptGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转入方回单下载(/rest/v1.0/account/receipt/receiver/get)
     *
     * @test
     */
    public function receiptReceiverGetTest()
    {
        $request = new Model\ReceiptReceiverGetRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO());
        try{
            $response = self::$client->receiptReceiverGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptReceiverGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取资金汇总凭证(/rest/v1.0/account/receipt/gather)
     *
     * @test
     */
    public function receipt_gather_v1_0Test()
    {
        $request = new Model\ReceiptGatherV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setRemark("remark_example");
        $request->setCounterpartyNo("counterpartyNo_example");
        $request->setOrderNos("orderNos_example");
        $request->setBizDate("bizDate_example");
        try{
            $response = self::$client->receipt_gather_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receipt_gather_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 电子回单-下载(/rest/v1.0/account/receipt/get)
     *
     * @test
     */
    public function receipt_get_v1_0Test()
    {
        $request = new Model\ReceiptGetV10Request();

        $request->setTradeType("tradeType_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderDate("orderDate_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->receipt_get_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receipt_get_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-下单（多种支付）(/rest/v1.0/account/recharge)
     *
     * @test
     */
    public function rechargeTest()
    {
        $request = new Model\RechargeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO());
        try{
            $response = self::$client->recharge($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 批量查询记账簿来账流水(/rest/v1.0/account/recharge/account-book/query)
     *
     * @test
     */
    public function rechargeAccountBookQueryTest()
    {
        $request = new Model\RechargeAccountBookQueryRequest();

        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setQueryStartDate("queryStartDate_example");
        $request->setQueryEndDate("queryEndDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->rechargeAccountBookQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeAccountBookQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值订单批量查询(/rest/v1.0/account/recharge/batch-query)
     *
     * @test
     */
    public function rechargeBatchQueryTest()
    {
        $request = new Model\RechargeBatchQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQueryStartDate("queryStartDate_example");
        $request->setQueryEndDate("queryEndDate_example");
        try{
            $response = self::$client->rechargeBatchQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeBatchQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-删除绑卡信息(/rest/v1.0/account/recharge/del/config)
     *
     * @test
     */
    public function rechargeDelConfigTest()
    {
        $request = new Model\RechargeDelConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());
        try{
            $response = self::$client->rechargeDelConfig($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeDelConfig: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-网银下单(/rest/v1.0/account/recharge/onlinebank/order)
     *
     * @test
     */
    public function rechargeOnlinebankOrderTest()
    {
        $request = new Model\RechargeOnlinebankOrderRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setPayType("payType_example");
        $request->setBankCode("bankCode_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        $request->setReturnUrl("returnUrl_example");
        try{
            $response = self::$client->rechargeOnlinebankOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOnlinebankOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-银行汇款下单(/rest/v1.0/account/recharge/order)
     *
     * @test
     */
    public function rechargeOrderTest()
    {
        $request = new Model\RechargeOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setPayType("payType_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->rechargeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加付款方(/rest/v1.0/account/recharge/payer-add)
     *
     * @test
     */
    public function rechargePayerAddTest()
    {
        $request = new Model\RechargePayerAddRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setApplyDataUrl("applyDataUrl_example");
        try{
            $response = self::$client->rechargePayerAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargePayerAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 删除付款方(/rest/v1.0/account/recharge/payer-delete)
     *
     * @test
     */
    public function rechargePayerDeleteTest()
    {
        $request = new Model\RechargePayerDeleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        try{
            $response = self::$client->rechargePayerDelete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargePayerDelete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询付款方(/rest/v1.0/account/recharge/payer-query)
     *
     * @test
     */
    public function rechargePayerQueryTest()
    {
        $request = new Model\RechargePayerQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        try{
            $response = self::$client->rechargePayerQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargePayerQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-查询(/rest/v1.0/account/recharge/query)
     *
     * @test
     */
    public function rechargeQueryTest()
    {
        $request = new Model\RechargeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->rechargeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-查询绑卡信息(/rest/v1.0/account/recharge/query/config)
     *
     * @test
     */
    public function rechargeQueryConfigTest()
    {
        $request = new Model\RechargeQueryConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO());
        try{
            $response = self::$client->rechargeQueryConfig($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeQueryConfig: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-新增绑卡信息(/rest/v1.0/account/recharge/save/config)
     *
     * @test
     */
    public function rechargeSaveConfigTest()
    {
        $request = new Model\RechargeSaveConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());
        try{
            $response = self::$client->rechargeSaveConfig($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeSaveConfig: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 批量查询记账簿来账流水(/rest/v1.0/account/recharge/account-book/query)
     *
     * @test
     */
    public function recharge_account_book_query_v1_0Test()
    {
        $request = new Model\RechargeAccountBookQueryV10Request();

        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setQueryStartDate("queryStartDate_example");
        $request->setQueryEndDate("queryEndDate_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->recharge_account_book_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_account_book_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值订单批量查询(/rest/v1.0/account/recharge/batch-query)
     *
     * @test
     */
    public function recharge_batch_query_v1_0Test()
    {
        $request = new Model\RechargeBatchQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQueryStartDate("queryStartDate_example");
        $request->setQueryEndDate("queryEndDate_example");
        try{
            $response = self::$client->recharge_batch_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_batch_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-网银下单(/rest/v1.0/account/recharge/onlinebank/order)
     *
     * @test
     */
    public function recharge_onlinebank_order_v1_0Test()
    {
        $request = new Model\RechargeOnlinebankOrderV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setPayType("payType_example");
        $request->setBankCode("bankCode_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        $request->setReturnUrl("returnUrl_example");
        try{
            $response = self::$client->recharge_onlinebank_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_onlinebank_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-银行汇款下单(/rest/v1.0/account/recharge/order)
     *
     * @test
     */
    public function recharge_order_v1_0Test()
    {
        $request = new Model\RechargeOrderV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setPayType("payType_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->recharge_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-查询(/rest/v1.0/account/recharge/query)
     *
     * @test
     */
    public function recharge_query_v1_0Test()
    {
        $request = new Model\RechargeQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->recharge_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值-下单（多种支付）(/rest/v1.0/account/recharge)
     *
     * @test
     */
    public function recharge_v1_0Test()
    {
        $request = new Model\RechargeV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO());
        try{
            $response = self::$client->recharge_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝（单笔）(/rest/v1.0/account/single-proxy-transfer)
     *
     * @test
     */
    public function singleProxyTransferTest()
    {
        $request = new Model\SingleProxyTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO());
        try{
            $response = self::$client->singleProxyTransfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->singleProxyTransfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--申请添加供应商(/rest/v1.0/account/supplier/apply)
     *
     * @test
     */
    public function supplierApplyTest()
    {
        $request = new Model\SupplierApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO());
        try{
            $response = self::$client->supplierApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商/个人-下单(/rest/v1.0/account/supplier/pay/order)
     *
     * @test
     */
    public function supplierPayOrderTest()
    {
        $request = new Model\SupplierPayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo111");
        $request->setOrderAmount(1.01);
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setSupplierId(17);
        $request->setReceiverBankCode("ICBC");
        $request->setBranchBankCode("branchBankCode_example");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setComments("xx平台付款");
        $request->setFeeChargeSide("PAYER");
        $request->setTerminalType("PC");
        $request->setReceiveType("REAL_TIME");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setReceiptComments("receiptComments_example");
        try{
            $response = self::$client->supplierPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--查询已添加的供应商(/rest/v1.0/account/supplier/query)
     *
     * @test
     */
    public function supplierQueryTest()
    {
        $request = new Model\SupplierQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->supplierQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--查询申请进度(/rest/v1.0/account/supplier/query-progress)
     *
     * @test
     */
    public function supplierQueryProgressTest()
    {
        $request = new Model\SupplierQueryProgressRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->supplierQueryProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQueryProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--申请添加供应商(/rest/v1.0/account/supplier/apply)
     *
     * @test
     */
    public function supplier_apply_v1_0Test()
    {
        $request = new Model\SupplierApplyV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO());
        try{
            $response = self::$client->supplier_apply_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplier_apply_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商/个人-下单(/rest/v1.0/account/supplier/pay/order)
     *
     * @test
     */
    public function supplier_pay_order_v1_0Test()
    {
        $request = new Model\SupplierPayOrderV10Request();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo111");
        $request->setOrderAmount(1.01);
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setSupplierId(17);
        $request->setReceiverBankCode("ICBC");
        $request->setBranchBankCode("branchBankCode_example");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setComments("xx平台付款");
        $request->setFeeChargeSide("PAYER");
        $request->setTerminalType("PC");
        $request->setReceiveType("REAL_TIME");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setReceiptComments("receiptComments_example");
        try{
            $response = self::$client->supplier_pay_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplier_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--查询申请进度(/rest/v1.0/account/supplier/query-progress)
     *
     * @test
     */
    public function supplier_query_progress_v1_0Test()
    {
        $request = new Model\SupplierQueryProgressV10Request();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->supplier_query_progress_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplier_query_progress_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款到供应商--查询已添加的供应商(/rest/v1.0/account/supplier/query)
     *
     * @test
     */
    public function supplier_query_v1_0Test()
    {
        $request = new Model\SupplierQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->supplier_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplier_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 定向付款-下单(/rest/v1.0/account/target/order)
     *
     * @test
     */
    public function targetOrderTest()
    {
        $request = new Model\TargetOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO());
        try{
            $response = self::$client->targetOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->targetOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 营销账户转账-下单(/rest/v1.0/account/transfer/appoint-market-account)
     *
     * @test
     */
    public function transferAppointMarketAccountTest()
    {
        $request = new Model\TransferAppointMarketAccountRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO());
        try{
            $response = self::$client->transferAppointMarketAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferAppointMarketAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-下单(/rest/v1.0/account/transfer/b2b/order)
     *
     * @test
     */
    public function transferB2bOrderTest()
    {
        $request = new Model\TransferB2bOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("TRANS2133213124");
        $request->setFromMerchantNo("100400612345");
        $request->setToMerchantNo("100400612346");
        $request->setToAccountType("默认FUND_ACCOUNT");
        $request->setOrderAmount("0.01");
        $request->setUsage("预付实扣");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setToAccountNo("toAccountNo_example");
        $request->setVerifyType("verifyType_example");
        $request->setVerifyValue("verifyValue_example");
        try{
            $response = self::$client->transferB2bOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-复核订单查询(/rest/v1.0/account/transfer/b2b/order/audit-query)
     *
     * @test
     */
    public function transferB2bOrderAuditQueryTest()
    {
        $request = new Model\TransferB2bOrderAuditQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setAuditMethod("auditMethod_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferB2bOrderAuditQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrderAuditQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-短信重发(/rest/v1.0/account/transfer/b2b/order/audit-send-sms)
     *
     * @test
     */
    public function transferB2bOrderAuditSendSmsTest()
    {
        $request = new Model\TransferB2bOrderAuditSendSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO());
        try{
            $response = self::$client->transferB2bOrderAuditSendSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrderAuditSendSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-短信确认(/rest/v1.0/account/transfer/b2b/order/audit-sms)
     *
     * @test
     */
    public function transferB2bOrderAuditSmsTest()
    {
        $request = new Model\TransferB2bOrderAuditSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO());
        try{
            $response = self::$client->transferB2bOrderAuditSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrderAuditSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-下单-支持短验复核(/rest/v3.0/account/transfer/b2b/order)
     *
     * @test
     */
    public function transferB2bOrderV3Test()
    {
        $request = new Model\TransferB2bOrderV3Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO());
        try{
            $response = self::$client->transferB2bOrderV3($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrderV3: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-查询(/rest/v1.0/account/transfer/b2b/query)
     *
     * @test
     */
    public function transferB2bQueryTest()
    {
        $request = new Model\TransferB2bQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferB2bQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-查询(/rest/v1.0/account/transfer/system/query)
     *
     * @test
     */
    public function transferSystemQueryTest()
    {
        $request = new Model\TransferSystemQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferSystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferSystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到微信零钱-下单(/rest/v1.0/account/transfer/wechat/order)
     *
     * @test
     */
    public function transferWechatOrderTest()
    {
        $request = new Model\TransferWechatOrderRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAmount(1.2);
        $request->setAppId("appId_example");
        $request->setScene("scene_example");
        $request->setOpenId("openId_example");
        $request->setUserName("userName_example");
        $request->setRemark("remark_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->transferWechatOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferWechatOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到微信零钱-查询(/rest/v1.0/account/transfer/wechat/query)
     *
     * @test
     */
    public function transferWechatQueryTest()
    {
        $request = new Model\TransferWechatQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferWechatQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferWechatQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 营销账户转账-下单(/rest/v1.0/account/transfer/appoint-market-account)
     *
     * @test
     */
    public function transfer_appoint_market_accountTest()
    {
        $request = new Model\TransferAppointMarketAccountRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO());
        try{
            $response = self::$client->transfer_appoint_market_account($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_appoint_market_account: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-复核订单查询(/rest/v1.0/account/transfer/b2b/order/audit-query)
     *
     * @test
     */
    public function transfer_b2b_order_audit_queryTest()
    {
        $request = new Model\TransferB2bOrderAuditQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setAuditMethod("auditMethod_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transfer_b2b_order_audit_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_b2b_order_audit_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-短信重发(/rest/v1.0/account/transfer/b2b/order/audit-send-sms)
     *
     * @test
     */
    public function transfer_b2b_order_audit_send_smsTest()
    {
        $request = new Model\TransferB2bOrderAuditSendSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO());
        try{
            $response = self::$client->transfer_b2b_order_audit_send_sms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_b2b_order_audit_send_sms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-短信确认(/rest/v1.0/account/transfer/b2b/order/audit-sms)
     *
     * @test
     */
    public function transfer_b2b_order_audit_smsTest()
    {
        $request = new Model\TransferB2bOrderAuditSmsRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO());
        try{
            $response = self::$client->transfer_b2b_order_audit_sms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_b2b_order_audit_sms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-下单(/rest/v1.0/account/transfer/b2b/order)
     *
     * @test
     */
    public function transfer_b2b_order_v1_0Test()
    {
        $request = new Model\TransferB2bOrderV10Request();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("TRANS2133213124");
        $request->setFromMerchantNo("100400612345");
        $request->setToMerchantNo("100400612346");
        $request->setToAccountType("默认FUND_ACCOUNT");
        $request->setOrderAmount("0.01");
        $request->setUsage("预付实扣");
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setToAccountNo("toAccountNo_example");
        $request->setVerifyType("verifyType_example");
        $request->setVerifyValue("verifyValue_example");
        try{
            $response = self::$client->transfer_b2b_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_b2b_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-查询(/rest/v1.0/account/transfer/b2b/query)
     *
     * @test
     */
    public function transfer_b2b_query_v1_0Test()
    {
        $request = new Model\TransferB2bQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transfer_b2b_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_b2b_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 集团账户资金划拨查询(/rest/v1.0/account/group/account/transfer/query)
     *
     * @test
     */
    public function transfer_group_account_query_v1Test()
    {
        $request = new Model\TransferGroupAccountQueryV1Request();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("TRANS2133213124");
        try{
            $response = self::$client->transfer_group_account_query_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_group_account_query_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 集团账户资金划拨(/rest/v1.0/account/group/account/transfer)
     *
     * @test
     */
    public function transfer_group_account_v1Test()
    {
        $request = new Model\TransferGroupAccountV1Request();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
        $request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
        $request->setUsage("usage_example");
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->transfer_group_account_v1($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_group_account_v1: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账-查询(/rest/v1.0/account/transfer/system/query)
     *
     * @test
     */
    public function transfer_system_query_v1_0Test()
    {
        $request = new Model\TransferSystemQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transfer_system_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到微信零钱-下单(/rest/v1.0/account/transfer/wechat/order)
     *
     * @test
     */
    public function transfer_wechat_order_v1_0Test()
    {
        $request = new Model\TransferWechatOrderV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAmount(1.2);
        $request->setAppId("appId_example");
        $request->setScene("scene_example");
        $request->setOpenId("openId_example");
        $request->setUserName("userName_example");
        $request->setRemark("remark_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->transfer_wechat_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_wechat_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到微信零钱-查询(/rest/v1.0/account/transfer/wechat/query)
     *
     * @test
     */
    public function transfer_wechat_query_v1_0Test()
    {
        $request = new Model\TransferWechatQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transfer_wechat_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transfer_wechat_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝(/rest/v1.0/account/ali-batch-transfer)
     *
     * @test
     */
    public function union_account_ali_batch_proxy_transferTest()
    {
        $request = new Model\UnionAccountAliBatchProxyTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO());
        try{
            $response = self::$client->union_account_ali_batch_proxy_transfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_batch_proxy_transfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝记录查询(/rest/v1.0/account/ali-batch-transfer-detail)
     *
     * @test
     */
    public function union_account_ali_batch_transfer_detailTest()
    {
        $request = new Model\UnionAccountAliBatchTransferDetailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO());
        try{
            $response = self::$client->union_account_ali_batch_transfer_detail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_batch_transfer_detail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-解约(/rest/v1.0/account/ali-cancel-contract)
     *
     * @test
     */
    public function union_account_ali_cancel_contractTest()
    {
        $request = new Model\UnionAccountAliCancelContractRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO());
        try{
            $response = self::$client->union_account_ali_cancel_contract($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_cancel_contract: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账本资金拨入记录查询(/rest/v1.0/account/ali-capital-transfer-query)
     *
     * @test
     */
    public function union_account_ali_capital_transfer_queryTest()
    {
        $request = new Model\UnionAccountAliCapitalTransferQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO());
        try{
            $response = self::$client->union_account_ali_capital_transfer_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_capital_transfer_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-记账本查询(/rest/v1.0/account/ali-channel-book-deail)
     *
     * @test
     */
    public function union_account_ali_channl_book_detailTest()
    {
        $request = new Model\UnionAccountAliChannlBookDetailRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO());
        try{
            $response = self::$client->union_account_ali_channl_book_detail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_channl_book_detail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-开立记账本(/rest/v1.0/account/ali-open-channel-book)
     *
     * @test
     */
    public function union_account_ali_open_channel_bookTest()
    {
        $request = new Model\UnionAccountAliOpenChannelBookRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO());
        try{
            $response = self::$client->union_account_ali_open_channel_book($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_open_channel_book: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-签约(/rest/v1.0/account/ali-sign-contract)
     *
     * @test
     */
    public function union_account_ali_sign_contractTest()
    {
        $request = new Model\UnionAccountAliSignContractRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO());
        try{
            $response = self::$client->union_account_ali_sign_contract($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_ali_sign_contract: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-记账本资金拨入(/rest/v1.0/account/ali-captial-transfer)
     *
     * @test
     */
    public function union_account_capital_transferTest()
    {
        $request = new Model\UnionAccountCapitalTransferRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO());
        try{
            $response = self::$client->union_account_capital_transfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_capital_transfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-删除绑卡信息(/rest/v1.0/account/recharge/del/config)
     *
     * @test
     */
    public function union_account_recharge_del_configTest()
    {
        $request = new Model\UnionAccountRechargeDelConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());
        try{
            $response = self::$client->union_account_recharge_del_config($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_del_config: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 添加付款方(/rest/v1.0/account/recharge/payer-add)
     *
     * @test
     */
    public function union_account_recharge_payer_addTest()
    {
        $request = new Model\UnionAccountRechargePayerAddRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setApplyDataUrl("applyDataUrl_example");
        try{
            $response = self::$client->union_account_recharge_payer_add($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_payer_add: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 删除付款方(/rest/v1.0/account/recharge/payer-delete)
     *
     * @test
     */
    public function union_account_recharge_payer_deleteTest()
    {
        $request = new Model\UnionAccountRechargePayerDeleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        try{
            $response = self::$client->union_account_recharge_payer_delete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_payer_delete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询付款方(/rest/v1.0/account/recharge/payer-query)
     *
     * @test
     */
    public function union_account_recharge_payer_queryTest()
    {
        $request = new Model\UnionAccountRechargePayerQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setIdentityType("identityType_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        try{
            $response = self::$client->union_account_recharge_payer_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_payer_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-查询绑卡信息(/rest/v1.0/account/recharge/query/config)
     *
     * @test
     */
    public function union_account_recharge_query_configTest()
    {
        $request = new Model\UnionAccountRechargeQueryConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO());
        try{
            $response = self::$client->union_account_recharge_query_config($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_query_config: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 充值银行汇款-新增绑卡信息(/rest/v1.0/account/recharge/save/config)
     *
     * @test
     */
    public function union_account_recharge_save_configTest()
    {
        $request = new Model\UnionAccountRechargeSaveConfigRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());
        try{
            $response = self::$client->union_account_recharge_save_config($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_recharge_save_config: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 转账到支付宝-签约查询(/rest/v1.0/account/ali-sign-contract-query)
     *
     * @test
     */
    public function union_account_sign_contract_queryTest()
    {
        $request = new Model\UnionAccountSignContractQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO());
        try{
            $response = self::$client->union_account_sign_contract_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_sign_contract_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 代付到记账簿绑定卡(/rest/v1.0/account/pay/accout-card)
     *
     * @test
     */
    public function union_account_trade_account_book_remitTest()
    {
        $request = new Model\UnionAccountTradeAccountBookRemitRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setReceiverAccountNo("receiverAccountNo_example");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("feeChargeSide_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setTerminalType("terminalType_example");
        $request->setComments("comments_example");
        $request->setRemark("remark_example");
        $request->setReceiptComments("receiptComments_example");
        $request->setRiskInfo("riskInfo_example");
        $request->setReceiveType("receiveType_example");
        try{
            $response = self::$client->union_account_trade_account_book_remit($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->union_account_trade_account_book_remit: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿出款-下单(/rest/v1.0/account/user-book/withdraw/order)
     *
     * @test
     */
    public function userBookWithdrawOrderTest()
    {
        $request = new Model\UserBookWithdrawOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO());
        try{
            $response = self::$client->userBookWithdrawOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->userBookWithdrawOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 记账簿出款-查询(/rest/v1.0/account/user-book/withdraw/query)
     *
     * @test
     */
    public function userBookWithdrawQueryTest()
    {
        $request = new Model\UserBookWithdrawQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO());
        try{
            $response = self::$client->userBookWithdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->userBookWithdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡-添加(/rest/v1.0/account/withdraw/card/bind)
     *
     * @test
     */
    public function withdrawCardBindTest()
    {
        $request = new Model\WithdrawCardBindRequest();

        $request->setMerchantNo("100400612345");
        $request->setBankCardType("bankCardType_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankCode("总行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：ICBC");
        $request->setBranchCode("支行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：102100000048");
        try{
            $response = self::$client->withdrawCardBind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardBind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡-修改/注销(/rest/v1.0/account/withdraw/card/modify)
     *
     * @test
     */
    public function withdrawCardModifyTest()
    {
        $request = new Model\WithdrawCardModifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBindId(789);
        $request->setBankCardOperateType("bankCardOperateType_example");
        $request->setBankCode("ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdrawCardModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡查询(/rest/v1.0/account/withdraw/card/query)
     *
     * @test
     */
    public function withdrawCardQueryTest()
    {
        $request = new Model\WithdrawCardQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->withdrawCardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-下单（H5版）(/rest/v1.0/account/withdraw/h5/order)
     *
     * @test
     */
    public function withdrawH5OrderTest()
    {
        $request = new Model\WithdrawH5OrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO());
        try{
            $response = self::$client->withdrawH5Order($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawH5Order: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-下单(/rest/v1.0/account/withdraw/order)
     *
     * @test
     */
    public function withdrawOrderTest()
    {
        $request = new Model\WithdrawOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setMerchantNo("100400612345");
        $request->setCardSelectModel("cardSelectModel_example");
        $request->setCardRouteModel("cardRouteModel_example");
        $request->setBankCardId("11103");
        $request->setBankAccountNo("6212260200019388841");
        $request->setReceiveType("receiveType_example");
        $request->setOrderAmount(1);
        $request->setNotifyUrl("www.baidu.com");
        $request->setRemark("XXX平台提现");
        $request->setTerminalType("PC");
        $request->setFeeDeductType("OUTSIDE");
        $request->setAccountType("accountType_example");
        $request->setMacAddress("macAddress_example");
        $request->setWithdrawModel("INNER_ACCOUNT_WITHDRAW");
        $request->setDebitBankAccountBookNo("debitBankAccountBookNo_example");
        $request->setVerifyType("PWD");
        $request->setVerifyValue("verifyValue_example");
        try{
            $response = self::$client->withdrawOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-查询(/rest/v1.0/account/withdraw/query)
     *
     * @test
     */
    public function withdrawQueryTest()
    {
        $request = new Model\WithdrawQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->withdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-查询(/rest/v1.0/account/withdraw/system/query)
     *
     * @test
     */
    public function withdrawSystemQueryTest()
    {
        $request = new Model\WithdrawSystemQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->withdrawSystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawSystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡-添加(/rest/v1.0/account/withdraw/card/bind)
     *
     * @test
     */
    public function withdraw_card_bind_v1_0Test()
    {
        $request = new Model\WithdrawCardBindV10Request();

        $request->setMerchantNo("100400612345");
        $request->setBankCardType("bankCardType_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankCode("总行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：ICBC");
        $request->setBranchCode("支行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：102100000048");
        try{
            $response = self::$client->withdraw_card_bind_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_card_bind_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡-修改/注销(/rest/v1.0/account/withdraw/card/modify)
     *
     * @test
     */
    public function withdraw_card_modify_v1_0Test()
    {
        $request = new Model\WithdrawCardModifyV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBindId(789);
        $request->setBankCardOperateType("bankCardOperateType_example");
        $request->setBankCode("ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdraw_card_modify_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_card_modify_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现卡查询(/rest/v1.0/account/withdraw/card/query)
     *
     * @test
     */
    public function withdraw_card_query_v1_0Test()
    {
        $request = new Model\WithdrawCardQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->withdraw_card_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_card_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-下单（H5版）(/rest/v1.0/account/withdraw/h5/order)
     *
     * @test
     */
    public function withdraw_h5_order_v1_0Test()
    {
        $request = new Model\WithdrawH5OrderV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO());
        try{
            $response = self::$client->withdraw_h5_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_h5_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-下单(/rest/v1.0/account/withdraw/order)
     *
     * @test
     */
    public function withdraw_order_v1_0Test()
    {
        $request = new Model\WithdrawOrderV10Request();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setMerchantNo("100400612345");
        $request->setCardSelectModel("cardSelectModel_example");
        $request->setCardRouteModel("cardRouteModel_example");
        $request->setBankCardId("11103");
        $request->setBankAccountNo("6212260200019388841");
        $request->setReceiveType("receiveType_example");
        $request->setOrderAmount(1);
        $request->setNotifyUrl("www.baidu.com");
        $request->setRemark("XXX平台提现");
        $request->setTerminalType("PC");
        $request->setFeeDeductType("OUTSIDE");
        $request->setAccountType("accountType_example");
        $request->setMacAddress("macAddress_example");
        $request->setWithdrawModel("INNER_ACCOUNT_WITHDRAW");
        $request->setDebitBankAccountBookNo("debitBankAccountBookNo_example");
        $request->setVerifyType("PWD");
        $request->setVerifyValue("verifyValue_example");
        try{
            $response = self::$client->withdraw_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-查询(/rest/v1.0/account/withdraw/query)
     *
     * @test
     */
    public function withdraw_query_v1_0Test()
    {
        $request = new Model\WithdrawQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->withdraw_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 提现-查询(/rest/v1.0/account/withdraw/system/query)
     *
     * @test
     */
    public function withdraw_system_query_v1_0Test()
    {
        $request = new Model\WithdrawSystemQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->withdraw_system_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdraw_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 厦门多渠道开户激活(/rest/v1.0/account/account-manage/xib-bind-card)
     *
     * @test
     */
    public function xibMultiBindCardTest()
    {
        $request = new Model\XibMultiBindCardRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO());
        try{
            $response = self::$client->xibMultiBindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->xibMultiBindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
}
