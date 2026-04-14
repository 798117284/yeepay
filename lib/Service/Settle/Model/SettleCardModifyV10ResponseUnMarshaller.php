<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleCardModifyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleCardModifyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleCardModifyV10ResponseUnMarshaller();
    }

    /**
     * @return SettleCardModifyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleCardModifyV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleCardModifyV10Response();
    }
}

SettleCardModifyV10ResponseUnMarshaller::__init();
