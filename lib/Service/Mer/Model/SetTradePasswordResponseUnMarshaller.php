<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SetTradePasswordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SetTradePasswordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SetTradePasswordResponseUnMarshaller();
    }

    /**
     * @return SetTradePasswordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SetTradePasswordResponse
     */
    protected function getResponseInstance()
    {
        return new SetTradePasswordResponse();
    }
}

SetTradePasswordResponseUnMarshaller::__init();
