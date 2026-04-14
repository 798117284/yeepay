<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountBalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountBalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountBalanceQueryResponseUnMarshaller();
    }

    /**
     * @return BankAccountBalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountBalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountBalanceQueryResponse();
    }
}

BankAccountBalanceQueryResponseUnMarshaller::__init();
