<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargePayerAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargePayerAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargePayerAddResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargePayerAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargePayerAddResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargePayerAddResponse();
    }
}

UnionAccountRechargePayerAddResponseUnMarshaller::__init();
