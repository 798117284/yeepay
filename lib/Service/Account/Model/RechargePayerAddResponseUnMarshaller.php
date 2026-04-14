<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargePayerAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargePayerAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargePayerAddResponseUnMarshaller();
    }

    /**
     * @return RechargePayerAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargePayerAddResponse
     */
    protected function getResponseInstance()
    {
        return new RechargePayerAddResponse();
    }
}

RechargePayerAddResponseUnMarshaller::__init();
