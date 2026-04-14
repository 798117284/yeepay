<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankClearChangeBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankClearChangeBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankClearChangeBindCardResponseUnMarshaller();
    }

    /**
     * @return BankClearChangeBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankClearChangeBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new BankClearChangeBindCardResponse();
    }
}

BankClearChangeBindCardResponseUnMarshaller::__init();
