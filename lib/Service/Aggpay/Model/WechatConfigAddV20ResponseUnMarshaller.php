<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddV20ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddV20Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddV20Response();
    }
}

WechatConfigAddV20ResponseUnMarshaller::__init();
