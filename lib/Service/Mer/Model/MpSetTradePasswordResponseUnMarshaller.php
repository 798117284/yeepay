<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MpSetTradePasswordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MpSetTradePasswordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MpSetTradePasswordResponseUnMarshaller();
    }

    /**
     * @return MpSetTradePasswordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MpSetTradePasswordResponse
     */
    protected function getResponseInstance()
    {
        return new MpSetTradePasswordResponse();
    }
}

MpSetTradePasswordResponseUnMarshaller::__init();
