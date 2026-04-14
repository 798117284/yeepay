<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankClearBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankClearBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankClearBindCardResponseUnMarshaller();
    }

    /**
     * @return BankClearBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankClearBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new BankClearBindCardResponse();
    }
}

BankClearBindCardResponseUnMarshaller::__init();
