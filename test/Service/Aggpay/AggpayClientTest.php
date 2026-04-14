<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\Old as ModelOld;

class AggpayClientTest extends TestCase
{

    private static $client;

    public static function setUpBeforeClass()
    {
        // 常用以下两种方式构造client，根据自身情况选择其一
        // 1. 基于本地配置文件方式：支持绝对路径、相对路径(相对于根目录)，适用于将文件打包到项目中，一起部署
        $sdkConfigFile = "yop_sdk_config_default.json";
        self::$client = AggpayClientBuilder::builder($sdkConfigFile)->build();

        // 2. 基于json串方式：适用于自定义配置来源，从其他存储加载(比如说数据库、配置中心等)
        //$sdkConfigJson = '{"app_key":"app_xxx","server_root":"https://openapi.yeepay.com/yop-center","yos_server_root":"https://yos.yeepay.com/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6p0XWjscY+gsyqKRhw9MeLsEmhFdBRhT2emOck/F1Omw38ZWhJxh9kDfs5HzFJMrVozgU+SJFDONxs8UB0wMILKRmqfLcfClG9MyCNuJkkfm0HFQv1hRGdOvZPXj3Bckuwa7FrEXBRYUhK7vJ40afumspthmse6bs6mZxNn/mALZ2X07uznOrrc2rk41Y2HftduxZw6T4EmtWuN2x4CZ8gwSyPAW5ZzZJLQ6tZDojBK4GZTAGhnn3bg5bBsBlw2+FLkCQBuDsJVsFPiGh/b6K/+zGTvWyUcu+LUj2MejYQELDO3i2vQXVDk7lVi2/TcUYefvIcssnzsfCfjaorxsuwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":3000,"read_timeout":30000,"max_conn_total":200,"max_conn_per_route":100}}';
        //self::$client = AggpayClientBuilder::builder(new AppSdkConfig(\GuzzleHttp\json_decode($sdkConfigJson, true)))->build();
    }

    /**
     * 活动报名查询接口(/rest/v1.0/aggpay/activity-query)
     *
     * @test
     */
    public function activityQueryTest()
    {
        $request = new Model\ActivityQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryMerReportAttachRequestDTO());
        try{
            $response = self::$client->activityQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->activityQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 活动报名申请接口(/rest/v1.0/aggpay/activity-request)
     *
     * @test
     */
    public function activityRequestTest()
    {
        $request = new Model\ActivityRequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\MerReportAttachRequestDTO());
        try{
            $response = self::$client->activityRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->activityRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新挂靠主备报备查询记录(/rest/v1.0/aggpay/report/query-all)
     *
     * @test
     */
    public function agg_attach_report_query_v1_0Test()
    {
        $request = new Model\AggAttachReportQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordQueryRequestDTO());
        try{
            $response = self::$client->agg_attach_report_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_attach_report_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合资质提交(/rest/v1.0/aggpay/report/attach)
     *
     * @test
     */
    public function agg_attach_report_v1_0Test()
    {
        $request = new Model\AggAttachReportV10Request();

        $request->setChannel("channel_example");
        $request->setMainChannelNo("mainChannelNo_example");
        $request->setMainReportMerchantNo("mainReportMerchantNo_example");
        $request->setAuthFileName("authFileName_example");
        $request->setAuthFileUrl("authFileUrl_example");
        $request->setGroupName("groupName_example");
        $request->setRequestReason("requestReason_example");
        $request->setPayWayList("payWayList_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMainMerchantNo("mainMerchantNo_example");
        $request->setMerchantTemplateUrl("merchantTemplateUrl_example");
        $request->setMerchantTemplateName("merchantTemplateName_example");
        $request->setRequestType("requestType_example");
        try{
            $response = self::$client->agg_attach_report_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_attach_report_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合关单(/rest/v1.0/aggpay/close-order)
     *
     * @test
     */
    public function agg_close_order_v1_0Test()
    {
        $request = new Model\AggCloseOrderV10Request();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->agg_close_order_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_close_order_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 花呗分期前置发奖(/rest/v1.0/aggpay/hbfq/award-receive)
     *
     * @test
     */
    public function agg_hbfq_award_receive_v1_0Test()
    {
        $request = new Model\AggHbfqAwardReceiveV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AwardReceiveRequestDTO());
        try{
            $response = self::$client->agg_hbfq_award_receive_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_hbfq_award_receive_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 花呗分期前置咨询(/rest/v1.0/aggpay/hbfq/marketing-consult)
     *
     * @test
     */
    public function agg_hbfq_marketing_consult_v1_0Test()
    {
        $request = new Model\AggHbfqMarketingConsultV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\MarketingConsultRequestDTO());
        try{
            $response = self::$client->agg_hbfq_marketing_consult_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_hbfq_marketing_consult_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 报备记录备份(/rest/v1.0/aggpay/report/back-up)
     *
     * @test
     */
    public function agg_report_back_up_v1_0Test()
    {
        $request = new Model\AggReportBackUpV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportBackUpRequestDTO());
        try{
            $response = self::$client->agg_report_back_up_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_report_back_up_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询渠道报备信息(/rest/v1.0/aggpay/report/query)
     *
     * @test
     */
    public function agg_report_query_v1_0Test()
    {
        $request = new Model\AggReportQueryV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setChannel("WECHAT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setChannelNo("208887623451");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setDataRange("dataRange_example");
        $request->setShopMerchantNo("shopMerchantNo_example");
        try{
            $response = self::$client->agg_report_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_report_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改渠道报备信息(/rest/v1.0/aggpay/report/update)
     *
     * @test
     */
    public function agg_report_update_v1_0Test()
    {
        $request = new Model\AggReportUpdateV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelNo("channelNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setReportMerchantName("reportMerchantName_example");
        $request->setReportMerchantAlias("reportMerchantAlias_example");
        $request->setServiceTel("serviceTel_example");
        $request->setContactMobile("contactMobile_example");
        $request->setContactEmail("contactEmail_example");
        $request->setContactPhone("contactPhone_example");
        $request->setContactName("contactName_example");
        $request->setContactType("contactType_example");
        try{
            $response = self::$client->agg_report_update_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_report_update_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信门店信息批量预录入(/rest/v1.0/aggpay/retail/batch-create)
     *
     * @test
     */
    public function agg_retail_batch_create_v1_0Test()
    {
        $request = new Model\AggRetailBatchCreateV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\BatchCreateRetailRequestDTO());
        try{
            $response = self::$client->agg_retail_batch_create_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_retail_batch_create_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询已授权门店信息(/rest/v1.0/aggpay/retail/get-info)
     *
     * @test
     */
    public function agg_retail_get_info_v1_0Test()
    {
        $request = new Model\AggRetailGetInfoV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryRetailInfoRequestDTO());
        try{
            $response = self::$client->agg_retail_get_info_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_retail_get_info_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信处置查询接口(/rest/v1.0/aggpay/wechat-disposal-query)
     *
     * @test
     */
    public function agg_wechat_disposal_query_v1_0Test()
    {
        $request = new Model\AggWechatDisposalQueryV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatDisposalNoticeQueryRequestDTO());
        try{
            $response = self::$client->agg_wechat_disposal_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->agg_wechat_disposal_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 渠道号申请接口(/rest/v1.0/aggpay/apply-channel-no)
     *
     * @test
     */
    public function applyChannelNoTest()
    {
        $request = new Model\ApplyChannelNoRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ApplyChannelNoRequestDTO());
        try{
            $response = self::$client->applyChannelNo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->applyChannelNo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 主从关系配置申请接口(/rest/v1.0/aggpay/attach-add)
     *
     * @test
     */
    public function attachAddTest()
    {
        $request = new Model\AttachAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportRequestDTO());
        try{
            $response = self::$client->attachAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->attachAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 主从关系查询接口(/rest/v1.0/aggpay/attach-query)
     *
     * @test
     */
    public function attachQueryTest()
    {
        $request = new Model\AttachQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachRecordQueryRequestDTO());
        try{
            $response = self::$client->attachQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->attachQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解除主从关系接口(/rest/v1.0/aggpay/attach-relieve)
     *
     * @test
     */
    public function attachRelieveTest()
    {
        $request = new Model\AttachRelieveRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ModifyAttachReportRequestDTO());
        try{
            $response = self::$client->attachRelieve($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->attachRelieve: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 主从关系配置申请接口(/rest/v1.0/aggpay/attach-add)
     *
     * @test
     */
    public function attachReportTest()
    {
        $request = new Model\AttachReportRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportRequestDTO());
        try{
            $response = self::$client->attachReport($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->attachReport: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合关单(/rest/v1.0/aggpay/close-order)
     *
     * @test
     */
    public function closeOrderTest()
    {
        $request = new Model\CloseOrderRequest();

        $request->setOrderId("orderId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->closeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->closeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付关单(/rest/v2.0/aggpay/close-order)
     *
     * @test
     */
    public function closeOrderV2Test()
    {
        $request = new Model\CloseOrderV2Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderCloseRequestDTO());
        try{
            $response = self::$client->closeOrderV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->closeOrderV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付关单(/rest/v2.0/aggpay/close-order)
     *
     * @test
     */
    public function close_order_v2_0Test()
    {
        $request = new Model\CloseOrderV20Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderCloseRequestDTO());
        try{
            $response = self::$client->close_order_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->close_order_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 更新退款审核结果(/rest/v1.0/aggpay/complaint/updaterefundprogress)
     *
     * @test
     */
    public function complaintUpdaterefundprogressTest()
    {
        $request = new Model\ComplaintUpdaterefundprogressRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setAction("action_example");
        $request->setRemark("remark_example");
        $request->setImageList("imageList_example");
        $request->setRejectReason("rejectReason_example");
        $request->setLaunchRefundDay(56);
        try{
            $response = self::$client->complaintUpdaterefundprogress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintUpdaterefundprogress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉订单详情(/rest/v1.0/aggpay/complaint/wechat/details)
     *
     * @test
     */
    public function complaintWechatDetailsTest()
    {
        $request = new Model\ComplaintWechatDetailsRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setComplaintSource("complaintSource_example");
        $request->setMerchantOrderNo("merchantOrderNo_example");
        try{
            $response = self::$client->complaintWechatDetails($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatDetails: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 图片下载(/yos/v1.0/aggpay/complaint/wechat/download-pic)
     *
     * @test
     */
    public function complaintWechatDownloadPicTest()
    {
        $request = new Model\ComplaintWechatDownloadPicRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setFileType("fileType_example");
        $request->setPictureUrl("pictureUrl_example");
        try{
            $response = self::$client->complaintWechatDownloadPic($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatDownloadPic: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 回复用户处理内容(/rest/v1.0/aggpay/complaint/wechat/feedback)
     *
     * @test
     */
    public function complaintWechatFeedbackTest()
    {
        $request = new Model\ComplaintWechatFeedbackRequest();

        $request->setComplaintNo("200201820200101080076610000");
        $request->setFeedbackContent("已与用户沟通解决");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setFeedbackType("GENERAL");
        $request->setComplaintSource("complaintSource_example");
        $request->setOperateType("operateType_example");
        try{
            $response = self::$client->complaintWechatFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉订单列表(/rest/v1.0/aggpay/complaint/wechat/list)
     *
     * @test
     */
    public function complaintWechatListTest()
    {
        $request = new Model\ComplaintWechatListRequest();

        $request->setStartTime("startTime_example");
        $request->setEndTime("endTime_example");
        $request->setMerchantOrderNo("merchantOrderNo_example");
        $request->setWechatOrderNo("wechatOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setComplaintSource("complaintSource_example");
        $request->setPage(56);
        $request->setLimit(56);
        try{
            $response = self::$client->complaintWechatList($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatList: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉协商历史(/rest/v1.0/aggpay/complaint/wechat/negotiation-history)
     *
     * @test
     */
    public function complaintWechatNegotiationHistoryTest()
    {
        $request = new Model\ComplaintWechatNegotiationHistoryRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->complaintWechatNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 反馈处理完成(/rest/v1.0/aggpay/complaint/wechat/success)
     *
     * @test
     */
    public function complaintWechatSuccessTest()
    {
        $request = new Model\ComplaintWechatSuccessRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->complaintWechatSuccess($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaintWechatSuccess: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉订单详情(/rest/v1.0/aggpay/complaint/wechat/details)
     *
     * @test
     */
    public function complaint_wechat_details_v1_0Test()
    {
        $request = new Model\ComplaintWechatDetailsV10Request();

        $request->setComplaintNo("complaintNo_example");
        $request->setComplaintSource("complaintSource_example");
        $request->setMerchantOrderNo("merchantOrderNo_example");
        try{
            $response = self::$client->complaint_wechat_details_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_details_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 图片下载(/yos/v1.0/aggpay/complaint/wechat/download-pic)
     *
     * @test
     */
    public function complaint_wechat_download_pic_v1_0Test()
    {
        $request = new Model\ComplaintWechatDownloadPicV10Request();

        $request->setComplaintNo("complaintNo_example");
        $request->setFileType("fileType_example");
        $request->setPictureUrl("pictureUrl_example");
        try{
            $response = self::$client->complaint_wechat_download_pic_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_download_pic_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 回复用户处理内容(/rest/v1.0/aggpay/complaint/wechat/feedback)
     *
     * @test
     */
    public function complaint_wechat_feedback_v1_0Test()
    {
        $request = new Model\ComplaintWechatFeedbackV10Request();

        $request->setComplaintNo("200201820200101080076610000");
        $request->setFeedbackContent("已与用户沟通解决");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setFeedbackType("GENERAL");
        $request->setComplaintSource("complaintSource_example");
        $request->setOperateType("operateType_example");
        try{
            $response = self::$client->complaint_wechat_feedback_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_feedback_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉订单列表(/rest/v1.0/aggpay/complaint/wechat/list)
     *
     * @test
     */
    public function complaint_wechat_list_v1_0Test()
    {
        $request = new Model\ComplaintWechatListV10Request();

        $request->setStartTime("startTime_example");
        $request->setEndTime("endTime_example");
        $request->setMerchantOrderNo("merchantOrderNo_example");
        $request->setWechatOrderNo("wechatOrderNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setComplaintSource("complaintSource_example");
        $request->setPage(56);
        $request->setLimit(56);
        try{
            $response = self::$client->complaint_wechat_list_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_list_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询投诉协商历史(/rest/v1.0/aggpay/complaint/wechat/negotiation-history)
     *
     * @test
     */
    public function complaint_wechat_negotiation_history_v1_0Test()
    {
        $request = new Model\ComplaintWechatNegotiationHistoryV10Request();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->complaint_wechat_negotiation_history_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_negotiation_history_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 反馈处理完成(/rest/v1.0/aggpay/complaint/wechat/success)
     *
     * @test
     */
    public function complaint_wechat_success_v1_0Test()
    {
        $request = new Model\ComplaintWechatSuccessV10Request();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->complaint_wechat_success_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->complaint_wechat_success_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分预授权(/rest/v1.0/aggpay/creditscore-authorization)
     *
     * @test
     * @deprecated
     */
    public function creditScoreAuthorizationOldTest()
    {
        $request = new ModelOld\CreditScoreAuthorizationRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationRequestDTO());
        try{
            $response = self::$client->creditScoreAuthorizationOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreAuthorizationOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分授权关系查询(/rest/v1.0/aggpay/creditscore-authorizationquery)
     *
     * @test
     * @deprecated
     */
    public function creditScoreAuthorizationQueryOldTest()
    {
        $request = new ModelOld\CreditScoreAuthorizationQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationQueryRequestDTO());
        try{
            $response = self::$client->creditScoreAuthorizationQueryOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreAuthorizationQueryOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分取消(/rest/v1.0/aggpay/creditscore-cancel)
     *
     * @test
     * @deprecated
     */
    public function creditScoreCancelOldTest()
    {
        $request = new ModelOld\CreditScoreCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setReason("reason_example");
        try{
            $response = self::$client->creditScoreCancelOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreCancelOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分创建(/rest/v1.0/aggpay/creditscore-create)
     *
     * @test
     * @deprecated
     */
    public function creditScoreCreateOldTest()
    {
        $request = new ModelOld\CreditScoreCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setServiceId("serviceId_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setServiceSource("serviceSource_example");
        $request->setGoodsName("goodsName_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"startTime\":\"20091225091010\",\"endTime\":\"20091225121010\",\"startTimeRemark\":\"备注1\",\"endTimeRemark\":\"备注2\"}");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setAlipayCreditInfo("alipayCreditInfo_example");
        $request->setUserIp("userIp_example");
        $request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setNeedUserConfirm("true");
        try{
            $response = self::$client->creditScoreCreateOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreCreateOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分修改(/rest/v1.0/aggpay/creditscore-modify)
     *
     * @test
     * @deprecated
     */
    public function creditScoreModifyOldTest()
    {
        $request = new ModelOld\CreditScoreModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setTotalAmount("totalAmount_example");
        $request->setReason("reason_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        try{
            $response = self::$client->creditScoreModifyOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreModifyOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分扣款(/rest/v1.0/aggpay/creditscore-pay)
     *
     * @test
     * @deprecated
     */
    public function creditScorePayOldTest()
    {
        $request = new ModelOld\CreditScorePayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setExpiredTime("expiredTime_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCsUrl("csUrl_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setUserIp("userIp_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("productInfo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPayScene("payScene_example");
        $request->setCreditPayType("creditPayType_example");
        $request->setToken("token_example");
        try{
            $response = self::$client->creditScorePayOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScorePayOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分查询(/rest/v1.0/aggpay/creditscore-query)
     *
     * @test
     * @deprecated
     */
    public function creditScoreQueryOldTest()
    {
        $request = new ModelOld\CreditScoreQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        try{
            $response = self::$client->creditScoreQueryOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreQueryOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分同步(/rest/v1.0/aggpay/creditscore-sync)
     *
     * @test
     * @deprecated
     */
    public function creditScoreSyncOldTest()
    {
        $request = new ModelOld\CreditScoreSyncRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPaidTime("paidTime_example");
        $request->setType("ORDER_PAID");
        try{
            $response = self::$client->creditScoreSyncOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreSyncOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分解除授权(/rest/v1.0/aggpay/creditscore-unauthorization)
     *
     * @test
     * @deprecated
     */
    public function creditScoreUnAuthorizationOldTest()
    {
        $request = new ModelOld\CreditScoreUnAuthorizationRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreUnAuthorizationRequestDTO());
        try{
            $response = self::$client->creditScoreUnAuthorizationOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScoreUnAuthorizationOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分完结(/rest/v1.0/aggpay/creditscore-complete)
     *
     * @test
     * @deprecated
     */
    public function creditScorecompleteOldTest()
    {
        $request = new ModelOld\CreditScorecompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setTotalAmount("totalAmount_example");
        $request->setCompleteTime("YYYY-MM-DDTHH:mm:ss.SSSZ或YYYY-MM-DDTHH:mm:ssZ或YYYY-MM-DDTHH:mm:ss.SSS+08:00或YYYY-MM-DDTHH:mm:ss+08:00");
        try{
            $response = self::$client->creditScorecompleteOld($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditScorecompleteOld: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分预授权(/rest/v1.0/aggpay/creditscore-authorization)
     *
     * @test
     */
    public function creditscoreAuthorizationTest()
    {
        $request = new Model\CreditscoreAuthorizationRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationRequestDTO());
        try{
            $response = self::$client->creditscoreAuthorization($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreAuthorization: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分授权关系查询(/rest/v1.0/aggpay/creditscore-authorizationquery)
     *
     * @test
     */
    public function creditscoreAuthorizationqueryTest()
    {
        $request = new Model\CreditscoreAuthorizationqueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationQueryRequestDTO());
        try{
            $response = self::$client->creditscoreAuthorizationquery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreAuthorizationquery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分取消(/rest/v1.0/aggpay/creditscore-cancel)
     *
     * @test
     */
    public function creditscoreCancelTest()
    {
        $request = new Model\CreditscoreCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setReason("reason_example");
        try{
            $response = self::$client->creditscoreCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分完结(/rest/v1.0/aggpay/creditscore-complete)
     *
     * @test
     */
    public function creditscoreCompleteTest()
    {
        $request = new Model\CreditscoreCompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"start_time\":\"20091225091010\",\"end_time\":\"20091225121010\",\"start_time_remark\":\"备注1\",\"end_time_remark\":\"备注2\"}");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setTotalAmount("totalAmount_example");
        $request->setCompleteTime("YYYY-MM-DDTHH:mm:ss.SSSZ或YYYY-MM-DDTHH:mm:ssZ或YYYY-MM-DDTHH:mm:ss.SSS+08:00或YYYY-MM-DDTHH:mm:ss+08:00");
        try{
            $response = self::$client->creditscoreComplete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreComplete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分创建(/rest/v1.0/aggpay/creditscore-create)
     *
     * @test
     */
    public function creditscoreCreateTest()
    {
        $request = new Model\CreditscoreCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setServiceId("serviceId_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setServiceSource("serviceSource_example");
        $request->setGoodsName("goodsName_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        $request->setLocationInfo("{\"start_location\":\"嗨客时尚主题展餐厅\",\"end_location\":\"嗨客时尚主题展餐厅\"}");
        $request->setRiskFundInfo("{\"name\":\"DEPOSIT\",\"amount\":10000,\"description\":\"就餐的预估费用\"}");
        $request->setTimeRange("{\"startTime\":\"20091225091010\",\"endTime\":\"20091225121010\",\"startTimeRemark\":\"备注1\",\"endTimeRemark\":\"备注2\"}");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setAlipayCreditInfo("alipayCreditInfo_example");
        $request->setUserIp("userIp_example");
        $request->setYpPromotionInfo("[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setNeedUserConfirm("true");
        try{
            $response = self::$client->creditscoreCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分修改(/rest/v1.0/aggpay/creditscore-modify)
     *
     * @test
     */
    public function creditscoreModifyTest()
    {
        $request = new Model\CreditscoreModifyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setTotalAmount("totalAmount_example");
        $request->setReason("reason_example");
        $request->setPostPaymentInfos("[{\"name\":\"就餐费用\",\"amount\":40000,\"description\":\"就餐人均100元\",\"count\":4}]");
        $request->setPostDiscountInfos("[{\"name\":\"满20减1元\",\"description\":\"不与其他优惠叠加\",\"amount\":100,\"count\":2}]");
        try{
            $response = self::$client->creditscoreModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分扣款(/rest/v1.0/aggpay/creditscore-pay)
     *
     * @test
     */
    public function creditscorePayTest()
    {
        $request = new Model\CreditscorePayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setExpiredTime("expiredTime_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCsUrl("csUrl_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAppId("appId_example");
        $request->setUserId("userId_example");
        $request->setUserIp("userIp_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("productInfo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPayScene("payScene_example");
        $request->setCreditPayType("creditPayType_example");
        $request->setToken("token_example");
        try{
            $response = self::$client->creditscorePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscorePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分查询(/rest/v1.0/aggpay/creditscore-query)
     *
     * @test
     */
    public function creditscoreQueryTest()
    {
        $request = new Model\CreditscoreQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        try{
            $response = self::$client->creditscoreQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分同步(/rest/v1.0/aggpay/creditscore-sync)
     *
     * @test
     */
    public function creditscoreSyncTest()
    {
        $request = new Model\CreditscoreSyncRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPaidTime("paidTime_example");
        $request->setType("ORDER_PAID");
        try{
            $response = self::$client->creditscoreSync($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreSync: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 信用分解除授权(/rest/v1.0/aggpay/creditscore-unauthorization)
     *
     * @test
     */
    public function creditscoreUnauthorizationTest()
    {
        $request = new Model\CreditscoreUnauthorizationRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreUnAuthorizationRequestDTO());
        try{
            $response = self::$client->creditscoreUnauthorization($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->creditscoreUnauthorization: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 重新发起报备(/rest/v1.0/aggpay/entry-reapply)
     *
     * @test
     */
    public function entryReapplyTest()
    {
        $request = new Model\EntryReapplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\EntryReapplyDTO());
        try{
            $response = self::$client->entryReapply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->entryReapply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 重新发起报备(/rest/v1.0/aggpay/entry-reapply)
     *
     * @test
     */
    public function entry_reapplyTest()
    {
        $request = new Model\EntryReapplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\EntryReapplyDTO());
        try{
            $response = self::$client->entry_reapply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->entry_reapply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取刷脸付调用凭证(/rest/v1.0/aggpay/get-auth-info)
     *
     * @test
     */
    public function getAuthInfoTest()
    {
        $request = new Model\GetAuthInfoRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRawData("rawData_example");
        $request->setStoreId("storeId_example");
        $request->setStoreName("storeName_example");
        $request->setDeviceId("deviceId_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setAttach("attach_example");
        $request->setAppId("appId_example");
        try{
            $response = self::$client->getAuthInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->getAuthInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 银联获取用户ID(/rest/v1.0/aggpay/get-user-id)
     *
     * @test
     */
    public function getUserIdTest()
    {
        $request = new Model\GetUserIdRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\UnionPayUserAuthRequestDTO());
        try{
            $response = self::$client->getUserId($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->getUserId: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取刷脸付调用凭证(/rest/v1.0/aggpay/get-auth-info)
     *
     * @test
     */
    public function get_auth_info_v1_0Test()
    {
        $request = new Model\GetAuthInfoV10Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setRawData("rawData_example");
        $request->setStoreId("storeId_example");
        $request->setStoreName("storeName_example");
        $request->setDeviceId("deviceId_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setAttach("attach_example");
        $request->setAppId("appId_example");
        try{
            $response = self::$client->get_auth_info_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->get_auth_info_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 花呗分期前置发奖(/rest/v1.0/aggpay/hbfq/award-receive)
     *
     * @test
     */
    public function hbfqAwardReceiveTest()
    {
        $request = new Model\HbfqAwardReceiveRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AwardReceiveRequestDTO());
        try{
            $response = self::$client->hbfqAwardReceive($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->hbfqAwardReceive: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 花呗分期前置咨询(/rest/v1.0/aggpay/hbfq/marketing-consult)
     *
     * @test
     */
    public function hbfqMarketingConsultTest()
    {
        $request = new Model\HbfqMarketingConsultRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\MarketingConsultRequestDTO());
        try{
            $response = self::$client->hbfqMarketingConsult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->hbfqMarketingConsult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询小程序投诉详情(/rest/v1.0/aggpay/miniprogram-details)
     *
     * @test
     */
    public function miniprogramDetailsTest()
    {
        $request = new Model\MiniprogramDetailsRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->miniprogramDetails($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramDetails: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商家回应/申诉小程序投诉(/rest/v1.0/aggpay/miniprogram-feedback)
     *
     * @test
     */
    public function miniprogramFeedbackTest()
    {
        $request = new Model\MiniprogramFeedbackRequest();

        $request->setFeedbackContent("已与用户沟通解决");
        $request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
        $request->setAcceptReturn(" 1");
        $request->setReturnId("121212");
        $request->setBussiHandle(1);
        $request->setType("image");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->miniprogramFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询小程序投诉协商历史(/rest/v1.0/aggpay/miniprogram-negotiation-history)
     *
     * @test
     */
    public function miniprogramNegotiationHistoryTest()
    {
        $request = new Model\MiniprogramNegotiationHistoryRequest();

        $request->setComplaintNo(" adasdasdad");
        try{
            $response = self::$client->miniprogramNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->miniprogramNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付交易查询(/rest/v2.0/aggpay/order-query)
     *
     * @test
     */
    public function orderQueryV2Test()
    {
        $request = new Model\OrderQueryV2Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderQueryRequestDTO());
        try{
            $response = self::$client->orderQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->orderQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款码支付(/rest/v1.0/aggpay/pay)
     *
     * @test
     */
    public function payTest()
    {
        $request = new Model\PayRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("fundProcessType_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAuthCode("authCode123");
        $request->setAppId("wx8888abcd8888888e");
        $request->setUserIp("123.123.123.123");
        $request->setTerminalId("00000000");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("limitCredit_example");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("[{\"amount\":\"分账金额\",\"ledgerNo\":\"分账接收方\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setPayMedium("PRECONSUME");
        $request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"notifyEquipmentNos\":\"970********284,970********200\"}");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setEncryptedPINData("encryptedPINData_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->pay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成聚合订单码(/rest/v1.0/aggpay/pay-link)
     *
     * @test
     */
    public function payLinkTest()
    {
        $request = new Model\PayLinkRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("OrderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setScene("{\"WECHAT\":\"PRIVATE_EDUCATION\",\"ALIPAY\":\"LARGE\"}");
        $request->setAppId("appId12345");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setCsUrl("csUrl_example");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBusinessInfo("businessInfo_example");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setPayMedium("payMedium_example");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->payLink($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->payLink: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成聚合订单码(/rest/v1.0/aggpay/pay-link)
     *
     * @test
     */
    public function pay_link_v1_0Test()
    {
        $request = new Model\PayLinkV10Request();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("OrderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setScene("{\"WECHAT\":\"PRIVATE_EDUCATION\",\"ALIPAY\":\"LARGE\"}");
        $request->setAppId("appId12345");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setCsUrl("csUrl_example");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBusinessInfo("businessInfo_example");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setPayMedium("payMedium_example");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->pay_link_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pay_link_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款码支付(/rest/v1.0/aggpay/pay)
     *
     * @test
     */
    public function pay_v1_0Test()
    {
        $request = new Model\PayV10Request();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("fundProcessType_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setAuthCode("authCode123");
        $request->setAppId("wx8888abcd8888888e");
        $request->setUserIp("123.123.123.123");
        $request->setTerminalId("00000000");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\",\"isEnterprisePay\":\"N\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("limitCredit_example");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setDivideDetail("[{\"amount\":\"分账金额\",\"ledgerNo\":\"分账接收方\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setPayMedium("PRECONSUME");
        $request->setTerminalInfo("{\"terminalNo\":\"15704925\",\"terminalType\":\"POS\",\"notifyEquipmentNos\":\"970********284,970********200\"}");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setEncryptedPINData("encryptedPINData_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->pay_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pay_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付统一下单(/rest/v1.0/aggpay/pre-pay)
     *
     * @test
     */
    public function prePayTest()
    {
        $request = new Model\PrePayRequest();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setOrderId("ORDER202401010515217305372872");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setRedirectUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("fundProcessType_example");
        $request->setPayWay("USER_SCAN");
        $request->setChannel("channel_example");
        $request->setScene("OFFLINE");
        $request->setPromotionType("WECHAT_B2B");
        $request->setAppId("wx012574bf7bc1836d");
        $request->setUserId("2088176118911271 、olkcn7obuausx40U8TjVj-5QEdT7");
        $request->setUserIp("127.12.1.60");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setUserAuthCode("userAuthCode_example");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setTerminalId("terminalId_example");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
        $request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setAgreementId("agreementId_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPayMedium("payMedium_example");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setJdbtPaymentInfo("{\"installmentNum\":\"3\",\"lockPlan\":\"3\",\"riskInfo\":{\"tradeScene\":\"01\",\"ifPickup\":\"01\",\"orderEid\":\"device2736253\",\"orderAccount\":\"user236781532\",\"acctRegTime\":\"2023-01-0112:00:00\",\"goodsId\":\"goods001\",\"type\":\"GT01\",\"price\":\"1000\",\"num\":\"2\",\"payCodeId\":\"paycode28367835\",\"name\":\"张三\",\"mobile\":\"13800138000\",\"province\":\"北京市\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"北京市朝阳区某某街道7号\"}}");
        $request->setAppUpIdentifier("appUpIdentifier_example");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->prePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付统一下单(/rest/v1.0/aggpay/pre-pay)
     *
     * @test
     */
    public function pre_pay_v1_0Test()
    {
        $request = new Model\PrePayV10Request();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setOrderId("ORDER202401010515217305372872");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setRedirectUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("fundProcessType_example");
        $request->setPayWay("USER_SCAN");
        $request->setChannel("channel_example");
        $request->setScene("OFFLINE");
        $request->setPromotionType("WECHAT_B2B");
        $request->setAppId("wx012574bf7bc1836d");
        $request->setUserId("2088176118911271 、olkcn7obuausx40U8TjVj-5QEdT7");
        $request->setUserIp("127.12.1.60");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setLimitCredit("N");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setBankCode("BOC");
        $request->setBusinessInfo("businessInfo_example");
        $request->setUserAuthCode("userAuthCode_example");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setTerminalId("terminalId_example");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setTerminalInfo("{\"shopName\":\"网点名称\",\"shopCustomerNumber\":\"网点编号\"}");
        $request->setProductInfo("[{\"id\":\"random_reduction_pro\"}]");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setAgreementId("agreementId_example");
        $request->setCreditOrderId("creditOrderId_example");
        $request->setPayMedium("payMedium_example");
        $request->setReceiverAccountType("receiverAccountType_example");
        $request->setJdbtPaymentInfo("{\"installmentNum\":\"3\",\"lockPlan\":\"3\",\"riskInfo\":{\"tradeScene\":\"01\",\"ifPickup\":\"01\",\"orderEid\":\"device2736253\",\"orderAccount\":\"user236781532\",\"acctRegTime\":\"2023-01-0112:00:00\",\"goodsId\":\"goods001\",\"type\":\"GT01\",\"price\":\"1000\",\"num\":\"2\",\"payCodeId\":\"paycode28367835\",\"name\":\"张三\",\"mobile\":\"13800138000\",\"province\":\"北京市\",\"city\":\"北京市\",\"county\":\"朝阳区\",\"address\":\"北京市朝阳区某某街道7号\"}}");
        $request->setAppUpIdentifier("appUpIdentifier_example");
        $request->setPreConsumeNotifyUrl("http://xxx.xxx.com/xxx");
        try{
            $response = self::$client->pre_pay_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pre_pay_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询渠道结算账户(/rest/v1.0/aggpay/query-account-info)
     *
     * @test
     */
    public function queryAccountInfoTest()
    {
        $request = new Model\QueryAccountInfoRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040012345");
        $request->setChannel("WECHAT");
        $request->setScene("DIRECT");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->queryAccountInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryAccountInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询渠道结算账户修改结果(/rest/v1.0/aggpay/query-account-update-result)
     *
     * @test
     */
    public function queryAccountUpdateResultTest()
    {
        $request = new Model\QueryAccountUpdateResultRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040012345");
        $request->setApplicationNo("applicationNo12345");
        try{
            $response = self::$client->queryAccountUpdateResult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryAccountUpdateResult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 渠道号申请查询接口(/rest/v1.0/aggpay/query-apply-channel-no)
     *
     * @test
     */
    public function queryApplyChannelNoTest()
    {
        $request = new Model\QueryApplyChannelNoRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryApplyChannelNoRequestDTO());
        try{
            $response = self::$client->queryApplyChannelNo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryApplyChannelNo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询小程序投诉协商历史(/rest/v1.0/aggpay/miniprogram-negotiation-history)
     *
     * @test
     */
    public function queryComplaintNegotiationHistoryTest()
    {
        $request = new Model\QueryComplaintNegotiationHistoryRequest();

        $request->setComplaintNo(" adasdasdad");
        try{
            $response = self::$client->queryComplaintNegotiationHistory($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryComplaintNegotiationHistory: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询小程序投诉详情(/rest/v1.0/aggpay/miniprogram-details)
     *
     * @test
     */
    public function queryMiniProgramDetailTest()
    {
        $request = new Model\QueryMiniProgramDetailRequest();

        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->queryMiniProgramDetail($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryMiniProgramDetail: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款码查询用户ID(/rest/v1.0/aggpay/query-userid)
     *
     * @test
     */
    public function queryUseridTest()
    {
        $request = new Model\QueryUseridRequest();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setAppId("wx012574bf7bc1836d");
        $request->setAuthCode("134052911466658212");
        $request->setChannel("WECHAT");
        try{
            $response = self::$client->queryUserid($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->queryUserid: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付交易查询(/rest/v2.0/aggpay/order-query)
     *
     * @test
     */
    public function query_order_v2_0Test()
    {
        $request = new Model\QueryOrderV20Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderQueryRequestDTO());
        try{
            $response = self::$client->query_order_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->query_order_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 付款码查询用户ID(/rest/v1.0/aggpay/query-userid)
     *
     * @test
     */
    public function query_userid_v1_0Test()
    {
        $request = new Model\QueryUseridV10Request();

        $request->setParentMerchantNo("10012426765");
        $request->setMerchantNo("10012426765");
        $request->setAppId("wx012574bf7bc1836d");
        $request->setAuthCode("134052911466658212");
        $request->setChannel("WECHAT");
        try{
            $response = self::$client->query_userid_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->query_userid_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合资质提交(/rest/v1.0/aggpay/report/attach)
     *
     * @test
     */
    public function reportAttachTest()
    {
        $request = new Model\ReportAttachRequest();

        $request->setChannel("channel_example");
        $request->setMainChannelNo("mainChannelNo_example");
        $request->setMainReportMerchantNo("mainReportMerchantNo_example");
        $request->setAuthFileName("authFileName_example");
        $request->setAuthFileUrl("authFileUrl_example");
        $request->setGroupName("groupName_example");
        $request->setRequestReason("requestReason_example");
        $request->setPayWayList("payWayList_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMainMerchantNo("mainMerchantNo_example");
        $request->setMerchantTemplateUrl("merchantTemplateUrl_example");
        $request->setMerchantTemplateName("merchantTemplateName_example");
        $request->setRequestType("requestType_example");
        try{
            $response = self::$client->reportAttach($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportAttach: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 报备记录备份(/rest/v1.0/aggpay/report/back-up)
     *
     * @test
     */
    public function reportBackUpTest()
    {
        $request = new Model\ReportBackUpRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportBackUpRequestDTO());
        try{
            $response = self::$client->reportBackUp($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportBackUp: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询渠道报备信息(/rest/v1.0/aggpay/report/query)
     *
     * @test
     */
    public function reportQueryTest()
    {
        $request = new Model\ReportQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setChannel("WECHAT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setChannelNo("208887623451");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setDataRange("dataRange_example");
        $request->setShopMerchantNo("shopMerchantNo_example");
        try{
            $response = self::$client->reportQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 新挂靠主备报备查询记录(/rest/v1.0/aggpay/report/query-all)
     *
     * @test
     */
    public function reportQueryAllTest()
    {
        $request = new Model\ReportQueryAllRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordQueryRequestDTO());
        try{
            $response = self::$client->reportQueryAll($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportQueryAll: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改渠道报备信息(/rest/v1.0/aggpay/report/update)
     *
     * @test
     */
    public function reportUpdateTest()
    {
        $request = new Model\ReportUpdateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelNo("channelNo_example");
        $request->setChannel("channel_example");
        $request->setScene("scene_example");
        $request->setPromotionType("promotionType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setReportMerchantName("reportMerchantName_example");
        $request->setReportMerchantAlias("reportMerchantAlias_example");
        $request->setServiceTel("serviceTel_example");
        $request->setContactMobile("contactMobile_example");
        $request->setContactEmail("contactEmail_example");
        $request->setContactPhone("contactPhone_example");
        $request->setContactName("contactName_example");
        $request->setContactType("contactType_example");
        try{
            $response = self::$client->reportUpdate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->reportUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信门店信息批量预录入(/rest/v1.0/aggpay/retail/batch-create)
     *
     * @test
     */
    public function retailBatchCreateTest()
    {
        $request = new Model\RetailBatchCreateRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\BatchCreateRetailRequestDTO());
        try{
            $response = self::$client->retailBatchCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->retailBatchCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 查询已授权门店信息(/rest/v1.0/aggpay/retail/get-info)
     *
     * @test
     */
    public function retailGetInfoTest()
    {
        $request = new Model\RetailGetInfoRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryRetailInfoRequestDTO());
        try{
            $response = self::$client->retailGetInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->retailGetInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成支付宝吱口令(/rest/v1.0/aggpay/share-token/generate)
     *
     * @test
     */
    public function shareTokenGenerateTest()
    {
        $request = new Model\ShareTokenGenerateRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("REAL_TIME");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setExternalUserId("externalUserId_example");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("identityInfo_example");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        $request->setChannelOperationInfo("channelOperationInfo_example");
        $request->setShareTokenExpiredSeconds(56);
        $request->setScene("scene_example");
        try{
            $response = self::$client->shareTokenGenerate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->shareTokenGenerate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付宝前置咨询(/rest/v1.0/aggpay/share-token/market-query)
     *
     * @test
     */
    public function shareTokenMarketQueryTest()
    {
        $request = new Model\ShareTokenMarketQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExternalUserId("externalUserId_example");
        $request->setScene("scene_example");
        try{
            $response = self::$client->shareTokenMarketQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->shareTokenMarketQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 生成支付宝吱口令(/rest/v1.0/aggpay/share-token/generate)
     *
     * @test
     */
    public function share_token_generate_v1_0Test()
    {
        $request = new Model\ShareTokenGenerateV10Request();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("REAL_TIME");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("divideDetail_example");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setFeeSubsidyInfo("feeSubsidyInfo_example");
        $request->setExternalUserId("externalUserId_example");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("identityInfo_example");
        $request->setYpPromotionInfo("ypPromotionInfo_example");
        $request->setChannelOperationInfo("channelOperationInfo_example");
        $request->setShareTokenExpiredSeconds(56);
        $request->setScene("scene_example");
        try{
            $response = self::$client->share_token_generate_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->share_token_generate_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 支付宝前置咨询(/rest/v1.0/aggpay/share-token/market-query)
     *
     * @test
     */
    public function share_token_market_query_v1_0Test()
    {
        $request = new Model\ShareTokenMarketQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExternalUserId("externalUserId_example");
        $request->setScene("scene_example");
        try{
            $response = self::$client->share_token_market_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->share_token_market_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约(/rest/v1.0/aggpay/sign)
     *
     * @test
     */
    public function signTest()
    {
        $request = new Model\SignRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setSignSource("signSource_example");
        $request->setAppId("appId_example");
        $request->setPlainId("plainId_example");
        $request->setAgreementId("agreementId_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setContractDisplayAccount("contractDisplayAccount_example");
        $request->setReturnInfo("returnInfo_example");
        $request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setInvokeScene("invokeScene_example");
        try{
            $response = self::$client->sign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->sign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约查询(/rest/v1.0/aggpay/sign-query)
     *
     * @test
     */
    public function signQueryTest()
    {
        $request = new Model\SignQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        try{
            $response = self::$client->signQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->signQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约查询(/rest/v1.0/aggpay/sign-query)
     *
     * @test
     */
    public function sign_query_v1_0Test()
    {
        $request = new Model\SignQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        try{
            $response = self::$client->sign_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->sign_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 签约(/rest/v1.0/aggpay/sign)
     *
     * @test
     */
    public function sign_v1_0Test()
    {
        $request = new Model\SignV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setPayWay("payWay_example");
        $request->setChannel("channel_example");
        $request->setSignSource("signSource_example");
        $request->setAppId("appId_example");
        $request->setPlainId("plainId_example");
        $request->setAgreementId("agreementId_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setContractDisplayAccount("contractDisplayAccount_example");
        $request->setReturnInfo("returnInfo_example");
        $request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setInvokeScene("invokeScene_example");
        try{
            $response = self::$client->sign_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->sign_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付托管下单(/rest/v1.0/aggpay/tutelage/pre-pay)
     *
     * @test
     */
    public function tutelagePrePayTest()
    {
        $request = new Model\TutelagePrePayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setPayWay("SDK_PAY");
        $request->setChannel("WECHAT");
        $request->setScene("OFFLINE");
        $request->setUserIp("123.123.123.123");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setReturnSchema("returnSchema_example");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"unionProviderId\":\"111112222\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setMerchantMiniInfo("{\"merchantAppId\":\"appId12345\",\"merchantAppUrl\":\"/pages/refund\",\"merchantPhone\":\"1391000010000\"}");
        $request->setReceiverAccountType("receiverAccountType_example");
        try{
            $response = self::$client->tutelagePrePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->tutelagePrePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付托管下单(/rest/v1.0/aggpay/tutelage/pre-pay)
     *
     * @test
     */
    public function tutelage_pre_pay_v1_0Test()
    {
        $request = new Model\TutelagePrePayV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setPayWay("SDK_PAY");
        $request->setChannel("WECHAT");
        $request->setScene("OFFLINE");
        $request->setUserIp("123.123.123.123");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setCsUrl("csUrl_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        $request->setProductInfo("[{\"id\":\"1234\"}]");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setDivideDetail("[{\"amount\":\"金额\",\"ledgerNo\":\"分账商编\",\"divideDetailDesc\":\"分账说明\"}]");
        $request->setDivideNotifyUrl("divideNotifyUrl_example");
        $request->setReturnSchema("returnSchema_example");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"unionProviderId\":\"111112222\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\"}");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("自定义支付立减：[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}],自定义补贴商户[{\"type\":\"CUSTOM_ALLOWANCE\"}]");
        $request->setChannelActivityInfo("{\"food_order_type\":\"QR_FOOD_ORDER\"}");
        $request->setFeeSubsidyInfo("[{\"subsidyMerchantNo\":\"10080009498\",\"subsidyAccountType\":\"FEE_ACCOUNT\",\"subsidyType\":\"ABSOLUTE\",\"subsidyProportion\":\"\",\"subsidyCalculateType\":\"SINGLE_PERCENT\",\"subsidyPercentFee\":\"0.6\",\"subsidyFixedFee\":\"\",\"subsidySingleMaxFee\":\"\"}]");
        $request->setMerchantMiniInfo("{\"merchantAppId\":\"appId12345\",\"merchantAppUrl\":\"/pages/refund\",\"merchantPhone\":\"1391000010000\"}");
        $request->setReceiverAccountType("receiverAccountType_example");
        try{
            $response = self::$client->tutelage_pre_pay_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->tutelage_pre_pay_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付统一下单(/rest/v2.0/aggpay/unified-order)
     *
     * @test
     */
    public function unifiedOrderV2Test()
    {
        $request = new Model\UnifiedOrderV2Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AggregatePayOrderReqDTO());
        try{
            $response = self::$client->unifiedOrderV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->unifiedOrderV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 聚合支付统一下单(/rest/v2.0/aggpay/unified-order)
     *
     * @test
     */
    public function unified_order_v2_0Test()
    {
        $request = new Model\UnifiedOrderV20Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\AggregatePayOrderReqDTO());
        try{
            $response = self::$client->unified_order_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->unified_order_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解约(/rest/v1.0/aggpay/unsign)
     *
     * @test
     */
    public function unsignTest()
    {
        $request = new Model\UnsignRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        $request->setUnSignRemark("unSignRemark_example");
        try{
            $response = self::$client->unsign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->unsign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 解约(/rest/v1.0/aggpay/unsign)
     *
     * @test
     */
    public function unsign_v1_0Test()
    {
        $request = new Model\UnsignV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAgreementId("agreementId_example");
        $request->setUnSignRemark("unSignRemark_example");
        try{
            $response = self::$client->unsign_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->unsign_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 修改渠道结算账户(/rest/v1.0/aggpay/update-account-info)
     *
     * @test
     */
    public function updateAccountInfoTest()
    {
        $request = new Model\UpdateAccountInfoRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("merchantNo_example");
        $request->setApplicationNo("applicationNo12345");
        $request->setReportMerchantNo("0123456789");
        $request->setChannel("WECHAT");
        $request->setScene("DIRECT");
        $request->setAccountNo("012345678912345");
        $request->setAccountName("有限公司");
        $request->setAccountBank("招商银行");
        $request->setAccountBankNo("12345");
        $request->setAccountBankName("支行名称");
        $request->setAccountBankDistinctCode("110101");
        $request->setAccountBankType("BANK_ACCOUNT_TYPE_CORPORATE");
        try{
            $response = self::$client->updateAccountInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->updateAccountInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 更新退款审核结果(/rest/v1.0/aggpay/complaint/updaterefundprogress)
     *
     * @test
     */
    public function updateRefundProgressTest()
    {
        $request = new Model\UpdateRefundProgressRequest();

        $request->setComplaintNo("complaintNo_example");
        $request->setAction("action_example");
        $request->setRemark("remark_example");
        $request->setImageList("imageList_example");
        $request->setRejectReason("rejectReason_example");
        $request->setLaunchRefundDay(56);
        try{
            $response = self::$client->updateRefundProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->updateRefundProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 上传电子小票信息(/rest/v1.0/aggpay/upload-electronic-receipt)
     *
     * @test
     */
    public function uploadElectronicReceiptTest()
    {
        $request = new Model\UploadElectronicReceiptRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ElectronicReceiptRequestDTO());
        try{
            $response = self::$client->uploadElectronicReceipt($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->uploadElectronicReceipt: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 上传电子小票信息(/rest/v1.0/aggpay/upload-electronic-receipt)
     *
     * @test
     */
    public function upload_electronic_receipt_v1_0Test()
    {
        $request = new Model\UploadElectronicReceiptV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\ElectronicReceiptRequestDTO());
        try{
            $response = self::$client->upload_electronic_receipt_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->upload_electronic_receipt_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信违规查询接口(服务商/平台商版)(/rest/v1.0/aggpay/violation/wechat/channel)
     *
     * @test
     */
    public function violationWechatChannelTest()
    {
        $request = new Model\ViolationWechatChannelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->violationWechatChannel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信违规查询接口(服务商/平台商版)(/rest/v1.0/aggpay/violation/wechat/channel)
     *
     * @test
     */
    public function violation_wechat_channel_v1_0Test()
    {
        $request = new Model\ViolationWechatChannelV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBeginTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setEndTime(new \DateTime("2013-10-20 19:20:30"));
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->violation_wechat_channel_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->violation_wechat_channel_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 商家回应/申诉小程序投诉(/rest/v1.0/aggpay/miniprogram-feedback)
     *
     * @test
     */
    public function wechatComplaintFeedbackTest()
    {
        $request = new Model\WechatComplaintFeedbackRequest();

        $request->setFeedbackContent("已与用户沟通解决");
        $request->setOperateType("MERCHANT_RESPOND_COMPLAINT");
        $request->setAcceptReturn(" 1");
        $request->setReturnId("121212");
        $request->setBussiHandle(1);
        $request->setType("image");
        $request->setImageList("[\"https://qpic.cn/xx1\",\"https://qpic.cn/xxx2\"]");
        $request->setComplaintNo("complaintNo_example");
        try{
            $response = self::$client->wechatComplaintFeedback($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatComplaintFeedback: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口(/rest/v1.0/aggpay/wechat-config/add)
     *
     * @test
     */
    public function wechatConfigAddTest()
    {
        $request = new Model\WechatConfigAddRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigRequestDTO());
        try{
            $response = self::$client->wechatConfigAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口（同步）(/rest/v1.0/aggpay/wechat-config/add-sync)
     *
     * @test
     */
    public function wechatConfigAddSyncTest()
    {
        $request = new Model\WechatConfigAddSyncRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigFlatRequestDTO());
        try{
            $response = self::$client->wechatConfigAddSync($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAddSync: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口（异步）(/rest/v2.0/aggpay/wechat-config/add)
     *
     * @test
     */
    public function wechatConfigAddV2Test()
    {
        $request = new Model\WechatConfigAddV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
        $request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\"}]");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechatConfigAddV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAddV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置查询(/rest/v1.0/aggpay/wechat-config/query)
     *
     * @test
     */
    public function wechatConfigQueryTest()
    {
        $request = new Model\WechatConfigQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        try{
            $response = self::$client->wechatConfigQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置查询(/rest/v2.0/aggpay/wechat-config/query)
     *
     * @test
     */
    public function wechatConfigQueryV2Test()
    {
        $request = new Model\WechatConfigQueryV2Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setAppIdType("appIdType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechatConfigQueryV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQueryV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 微信处置查询接口(/rest/v1.0/aggpay/wechat-disposal-query)
     *
     * @test
     */
    public function wechatDisposalQueryTest()
    {
        $request = new Model\WechatDisposalQueryRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatDisposalNoticeQueryRequestDTO());
        try{
            $response = self::$client->wechatDisposalQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatDisposalQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口（同步）(/rest/v1.0/aggpay/wechat-config/add-sync)
     *
     * @test
     */
    public function wechat_config_add_sync_v1_0Test()
    {
        $request = new Model\WechatConfigAddSyncV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigFlatRequestDTO());
        try{
            $response = self::$client->wechat_config_add_sync_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechat_config_add_sync_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口(/rest/v1.0/aggpay/wechat-config/add)
     *
     * @test
     */
    public function wechat_config_add_v1_0Test()
    {
        $request = new Model\WechatConfigAddV10Request();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigRequestDTO());
        try{
            $response = self::$client->wechat_config_add_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechat_config_add_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置接口（异步）(/rest/v2.0/aggpay/wechat-config/add)
     *
     * @test
     */
    public function wechat_config_add_v2_0Test()
    {
        $request = new Model\WechatConfigAddV20Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
        $request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\"}]");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechat_config_add_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechat_config_add_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置查询(/rest/v1.0/aggpay/wechat-config/query)
     *
     * @test
     */
    public function wechat_config_query_v1_0Test()
    {
        $request = new Model\WechatConfigQueryV10Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        try{
            $response = self::$client->wechat_config_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechat_config_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 公众号配置查询(/rest/v2.0/aggpay/wechat-config/query)
     *
     * @test
     */
    public function wechat_config_query_v2_0Test()
    {
        $request = new Model\WechatConfigQueryV20Request();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setAppIdType("appIdType_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        try{
            $response = self::$client->wechat_config_query_v2_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechat_config_query_v2_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取企微支付链接接口(/rest/v1.0/aggpay/wecom-pay-link)
     *
     * @test
     */
    public function wecomPayLinkTest()
    {
        $request = new Model\WecomPayLinkRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WeComRequestDTO());
        try{
            $response = self::$client->wecomPayLink($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wecomPayLink: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * 获取企微支付链接接口(/rest/v1.0/aggpay/wecom-pay-link)
     *
     * @test
     */
    public function wecom_pay_linkTest()
    {
        $request = new Model\WecomPayLinkRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WeComRequestDTO());
        try{
            $response = self::$client->wecom_pay_link($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wecom_pay_link: ', $e->getMessage(), PHP_EOL;
        }
    }
}
