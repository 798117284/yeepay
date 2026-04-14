<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeDelConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeDelConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeDelConfigResponseUnMarshaller();
    }

    /**
     * @return RechargeDelConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeDelConfigResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeDelConfigResponse();
    }
}

RechargeDelConfigResponseUnMarshaller::__init();
