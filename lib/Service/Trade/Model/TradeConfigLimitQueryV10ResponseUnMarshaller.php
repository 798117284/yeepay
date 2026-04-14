<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigLimitQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigLimitQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigLimitQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigLimitQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigLimitQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigLimitQueryV10Response();
    }
}

TradeConfigLimitQueryV10ResponseUnMarshaller::__init();
