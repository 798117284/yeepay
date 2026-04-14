<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankPaymentOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankPaymentOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankPaymentOrderV10ResponseUnMarshaller();
    }

    /**
     * @return BankPaymentOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankPaymentOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new BankPaymentOrderV10Response();
    }
}

BankPaymentOrderV10ResponseUnMarshaller::__init();
