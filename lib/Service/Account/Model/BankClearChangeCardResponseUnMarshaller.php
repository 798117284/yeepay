<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankClearChangeCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankClearChangeCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankClearChangeCardResponseUnMarshaller();
    }

    /**
     * @return BankClearChangeCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankClearChangeCardResponse
     */
    protected function getResponseInstance()
    {
        return new BankClearChangeCardResponse();
    }
}

BankClearChangeCardResponseUnMarshaller::__init();
