<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeConfigTemplateQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeConfigTemplateQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigTemplateQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TradeConfigTemplateQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeConfigTemplateQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeConfigTemplateQueryV10Response();
    }
}

TradeConfigTemplateQueryV10ResponseUnMarshaller::__init();
