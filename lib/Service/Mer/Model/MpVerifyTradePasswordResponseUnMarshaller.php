<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MpVerifyTradePasswordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MpVerifyTradePasswordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MpVerifyTradePasswordResponseUnMarshaller();
    }

    /**
     * @return MpVerifyTradePasswordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MpVerifyTradePasswordResponse
     */
    protected function getResponseInstance()
    {
        return new MpVerifyTradePasswordResponse();
    }
}

MpVerifyTradePasswordResponseUnMarshaller::__init();
