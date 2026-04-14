<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargeQueryConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargeQueryConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargeQueryConfigResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargeQueryConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargeQueryConfigResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargeQueryConfigResponse();
    }
}

UnionAccountRechargeQueryConfigResponseUnMarshaller::__init();
