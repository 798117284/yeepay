<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawH5OrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawH5OrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawH5OrderV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawH5OrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawH5OrderV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawH5OrderV10Response();
    }
}

WithdrawH5OrderV10ResponseUnMarshaller::__init();
