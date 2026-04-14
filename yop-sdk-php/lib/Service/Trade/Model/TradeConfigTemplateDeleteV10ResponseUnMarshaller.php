<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigTemplateDeleteV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigTemplateDeleteV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigTemplateDeleteV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigTemplateDeleteV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigTemplateDeleteV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigTemplateDeleteV10Response();
    }
}

TradeConfigTemplateDeleteV10ResponseUnMarshaller::__init();
