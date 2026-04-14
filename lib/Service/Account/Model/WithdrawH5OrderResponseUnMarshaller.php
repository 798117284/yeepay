<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawH5OrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawH5OrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawH5OrderResponseUnMarshaller();
    }

    /**
     * @return WithdrawH5OrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawH5OrderResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawH5OrderResponse();
    }
}

WithdrawH5OrderResponseUnMarshaller::__init();
