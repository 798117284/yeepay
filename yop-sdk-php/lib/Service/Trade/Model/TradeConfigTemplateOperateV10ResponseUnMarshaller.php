<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigTemplateOperateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigTemplateOperateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigTemplateOperateV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigTemplateOperateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigTemplateOperateV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigTemplateOperateV10Response();
    }
}

TradeConfigTemplateOperateV10ResponseUnMarshaller::__init();
