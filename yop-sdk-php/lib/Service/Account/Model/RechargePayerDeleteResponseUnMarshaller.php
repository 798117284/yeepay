<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargePayerDeleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargePayerDeleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargePayerDeleteResponseUnMarshaller();
    }

    /**
     * @return RechargePayerDeleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargePayerDeleteResponse
     */
    protected function getResponseInstance()
    {
        return new RechargePayerDeleteResponse();
    }
}

RechargePayerDeleteResponseUnMarshaller::__init();
