<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceApplyResponseUnMarshaller();
    }

    /**
     * @return BalanceApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceApplyResponse();
    }
}

BalanceApplyResponseUnMarshaller::__init();
