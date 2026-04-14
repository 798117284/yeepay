<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleCardAddV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleCardAddV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleCardAddV10ResponseUnMarshaller();
    }

    /**
     * @return SettleCardAddV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleCardAddV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleCardAddV10Response();
    }
}

SettleCardAddV10ResponseUnMarshaller::__init();
