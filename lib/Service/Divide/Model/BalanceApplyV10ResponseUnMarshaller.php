<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceApplyV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceApplyV10Response();
    }
}

BalanceApplyV10ResponseUnMarshaller::__init();
