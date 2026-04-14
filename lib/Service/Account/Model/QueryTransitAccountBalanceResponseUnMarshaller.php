<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryTransitAccountBalanceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryTransitAccountBalanceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryTransitAccountBalanceResponseUnMarshaller();
    }

    /**
     * @return QueryTransitAccountBalanceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryTransitAccountBalanceResponse
     */
    protected function getResponseInstance()
    {
        return new QueryTransitAccountBalanceResponse();
    }
}

QueryTransitAccountBalanceResponseUnMarshaller::__init();
