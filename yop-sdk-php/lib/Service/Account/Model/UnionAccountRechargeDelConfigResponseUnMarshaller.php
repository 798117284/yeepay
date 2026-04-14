<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountRechargeDelConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountRechargeDelConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountRechargeDelConfigResponseUnMarshaller();
    }

    /**
     * @return UnionAccountRechargeDelConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountRechargeDelConfigResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountRechargeDelConfigResponse();
    }
}

UnionAccountRechargeDelConfigResponseUnMarshaller::__init();
