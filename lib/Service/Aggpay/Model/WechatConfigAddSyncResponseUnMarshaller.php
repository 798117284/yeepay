<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddSyncResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddSyncResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddSyncResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddSyncResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddSyncResponse
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddSyncResponse();
    }
}

WechatConfigAddSyncResponseUnMarshaller::__init();
