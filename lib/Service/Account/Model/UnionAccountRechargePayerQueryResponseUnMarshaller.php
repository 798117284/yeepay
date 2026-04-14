<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargePayerQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargePayerQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargePayerQueryResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargePayerQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargePayerQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargePayerQueryResponse();
    }
}

UnionAccountRechargePayerQueryResponseUnMarshaller::__init();
