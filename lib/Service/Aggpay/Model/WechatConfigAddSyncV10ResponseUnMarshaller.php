<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddSyncV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddSyncV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddSyncV10ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddSyncV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddSyncV10Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddSyncV10Response();
    }
}

WechatConfigAddSyncV10ResponseUnMarshaller::__init();
