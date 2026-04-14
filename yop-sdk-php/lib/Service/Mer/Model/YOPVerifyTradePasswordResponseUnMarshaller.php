<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YOPVerifyTradePasswordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YOPVerifyTradePasswordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YOPVerifyTradePasswordResponseUnMarshaller();
    }

    /**
     * @return YOPVerifyTradePasswordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YOPVerifyTradePasswordResponse
     */
    protected function getResponseInstance()
    {
        return new YOPVerifyTradePasswordResponse();
    }
}

YOPVerifyTradePasswordResponseUnMarshaller::__init();
