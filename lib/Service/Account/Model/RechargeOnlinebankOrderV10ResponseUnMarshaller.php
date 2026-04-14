<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeOnlinebankOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeOnlinebankOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeOnlinebankOrderV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeOnlinebankOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeOnlinebankOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeOnlinebankOrderV10Response();
    }
}

RechargeOnlinebankOrderV10ResponseUnMarshaller::__init();
