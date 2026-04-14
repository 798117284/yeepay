<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatNegotiationHistoryV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatNegotiationHistoryV10Response();
    }
}

ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller::__init();
