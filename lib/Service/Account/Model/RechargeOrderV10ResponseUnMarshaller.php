<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeOrderV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeOrderV10Response();
    }
}

RechargeOrderV10ResponseUnMarshaller::__init();
