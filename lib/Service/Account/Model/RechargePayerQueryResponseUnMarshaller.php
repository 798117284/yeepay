<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargePayerQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargePayerQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargePayerQueryResponseUnMarshaller();
    }

    /**
     * @return RechargePayerQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargePayerQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RechargePayerQueryResponse();
    }
}

RechargePayerQueryResponseUnMarshaller::__init();
