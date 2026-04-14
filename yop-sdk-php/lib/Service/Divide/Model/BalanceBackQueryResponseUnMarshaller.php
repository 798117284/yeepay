<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceBackQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceBackQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceBackQueryResponseUnMarshaller();
    }

    /**
     * @return BalanceBackQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceBackQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceBackQueryResponse();
    }
}

BalanceBackQueryResponseUnMarshaller::__init();
