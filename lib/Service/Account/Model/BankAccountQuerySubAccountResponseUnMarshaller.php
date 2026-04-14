<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQuerySubAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQuerySubAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQuerySubAccountResponseUnMarshaller();
    }

    /**
     * @return BankAccountQuerySubAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQuerySubAccountResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQuerySubAccountResponse();
    }
}

BankAccountQuerySubAccountResponseUnMarshaller::__init();
