<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigLimitOperateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigLimitOperateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigLimitOperateV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigLimitOperateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigLimitOperateV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigLimitOperateV10Response();
    }
}

TradeConfigLimitOperateV10ResponseUnMarshaller::__init();
