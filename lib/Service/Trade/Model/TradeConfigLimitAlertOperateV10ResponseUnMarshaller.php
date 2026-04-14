<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigLimitAlertOperateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigLimitAlertOperateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigLimitAlertOperateV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigLimitAlertOperateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigLimitAlertOperateV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigLimitAlertOperateV10Response();
    }
}

TradeConfigLimitAlertOperateV10ResponseUnMarshaller::__init();
