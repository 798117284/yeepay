<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigQueryV10Response();
    }
}

WechatConfigQueryV10ResponseUnMarshaller::__init();
