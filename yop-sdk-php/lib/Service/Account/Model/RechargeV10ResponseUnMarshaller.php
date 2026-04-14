<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeV10Response();
    }
}

RechargeV10ResponseUnMarshaller::__init();
