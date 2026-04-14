<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceQueryV10Response();
    }
}

BalanceQueryV10ResponseUnMarshaller::__init();
