<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddV10ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddV10Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddV10Response();
    }
}

WechatConfigAddV10ResponseUnMarshaller::__init();
