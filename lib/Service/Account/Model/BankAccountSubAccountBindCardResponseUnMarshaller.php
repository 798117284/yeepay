<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountSubAccountBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountSubAccountBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountSubAccountBindCardResponseUnMarshaller();
    }

    /**
     * @return BankAccountSubAccountBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountSubAccountBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountSubAccountBindCardResponse();
    }
}

BankAccountSubAccountBindCardResponseUnMarshaller::__init();
