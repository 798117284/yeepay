<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatDetailsV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatDetailsV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDetailsV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatDetailsV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatDetailsV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatDetailsV10Response();
    }
}

ComplaintWechatDetailsV10ResponseUnMarshaller::__init();
