<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatSuccessV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatSuccessV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatSuccessV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatSuccessV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatSuccessV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatSuccessV10Response();
    }
}

ComplaintWechatSuccessV10ResponseUnMarshaller::__init();
