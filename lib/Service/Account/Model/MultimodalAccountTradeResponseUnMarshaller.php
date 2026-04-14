<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MultimodalAccountTradeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MultimodalAccountTradeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MultimodalAccountTradeResponseUnMarshaller();
    }

    /**
     * @return MultimodalAccountTradeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MultimodalAccountTradeResponse
     */
    protected function getResponseInstance()
    {
        return new MultimodalAccountTradeResponse();
    }
}

MultimodalAccountTradeResponseUnMarshaller::__init();
