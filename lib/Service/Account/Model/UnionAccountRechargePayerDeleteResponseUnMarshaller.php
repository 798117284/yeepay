<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargePayerDeleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargePayerDeleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargePayerDeleteResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargePayerDeleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargePayerDeleteResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargePayerDeleteResponse();
    }
}

UnionAccountRechargePayerDeleteResponseUnMarshaller::__init();
