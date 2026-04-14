<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeQueryConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeQueryConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeQueryConfigResponseUnMarshaller();
    }

    /**
     * @return RechargeQueryConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeQueryConfigResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeQueryConfigResponse();
    }
}

RechargeQueryConfigResponseUnMarshaller::__init();
