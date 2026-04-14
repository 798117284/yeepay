<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawOrderV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawOrderV10Response();
    }
}

WithdrawOrderV10ResponseUnMarshaller::__init();
