<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountApplySubAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountApplySubAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountApplySubAccountResponseUnMarshaller();
    }

    /**
     * @return BankAccountApplySubAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountApplySubAccountResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountApplySubAccountResponse();
    }
}

BankAccountApplySubAccountResponseUnMarshaller::__init();
