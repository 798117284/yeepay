<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankTransferPayV11ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankTransferPayV11ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankTransferPayV11ResponseUnMarshaller();
    }

    /**
     * @return BankTransferPayV11ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankTransferPayV11Response
     */
    protected function getResponseInstance()
    {
        return new BankTransferPayV11Response();
    }
}

BankTransferPayV11ResponseUnMarshaller::__init();
