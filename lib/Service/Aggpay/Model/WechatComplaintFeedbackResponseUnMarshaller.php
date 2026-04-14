<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatComplaintFeedbackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatComplaintFeedbackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatComplaintFeedbackResponseUnMarshaller();
    }

    /**
     * @return WechatComplaintFeedbackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatComplaintFeedbackResponse
     */
    protected function getResponseInstance()
    {
        return new WechatComplaintFeedbackResponse();
    }
}

WechatComplaintFeedbackResponseUnMarshaller::__init();
