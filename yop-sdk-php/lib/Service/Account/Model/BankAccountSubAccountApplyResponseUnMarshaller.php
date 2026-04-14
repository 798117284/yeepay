<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountSubAccountApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountSubAccountApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountSubAccountApplyResponseUnMarshaller();
    }

    /**
     * @return BankAccountSubAccountApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountSubAccountApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountSubAccountApplyResponse();
    }
}

BankAccountSubAccountApplyResponseUnMarshaller::__init();
