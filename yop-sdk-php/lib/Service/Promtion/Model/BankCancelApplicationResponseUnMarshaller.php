<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankCancelApplicationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankCancelApplicationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankCancelApplicationResponseUnMarshaller();
    }

    /**
     * @return BankCancelApplicationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankCancelApplicationResponse
     */
    protected function getResponseInstance()
    {
        return new BankCancelApplicationResponse();
    }
}

BankCancelApplicationResponseUnMarshaller::__init();
