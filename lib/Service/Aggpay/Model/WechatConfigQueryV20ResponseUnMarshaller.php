<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigQueryV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigQueryV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigQueryV20ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigQueryV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigQueryV20Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigQueryV20Response();
    }
}

WechatConfigQueryV20ResponseUnMarshaller::__init();
