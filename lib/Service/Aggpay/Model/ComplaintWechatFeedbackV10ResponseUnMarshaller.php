<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatFeedbackV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatFeedbackV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatFeedbackV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatFeedbackV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatFeedbackV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatFeedbackV10Response();
    }
}

ComplaintWechatFeedbackV10ResponseUnMarshaller::__init();
