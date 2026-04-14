<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleWayQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleWayQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleWayQueryV10ResponseUnMarshaller();
    }

    /**
     * @return SettleWayQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleWayQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleWayQueryV10Response();
    }
}

SettleWayQueryV10ResponseUnMarshaller::__init();
