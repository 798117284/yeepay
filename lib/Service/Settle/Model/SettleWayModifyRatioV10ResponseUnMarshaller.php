<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleWayModifyRatioV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleWayModifyRatioV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleWayModifyRatioV10ResponseUnMarshaller();
    }

    /**
     * @return SettleWayModifyRatioV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleWayModifyRatioV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleWayModifyRatioV10Response();
    }
}

SettleWayModifyRatioV10ResponseUnMarshaller::__init();
