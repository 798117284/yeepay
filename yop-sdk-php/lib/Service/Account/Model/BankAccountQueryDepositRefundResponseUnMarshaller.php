<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryDepositRefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryDepositRefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryDepositRefundResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryDepositRefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryDepositRefundResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryDepositRefundResponse();
    }
}

BankAccountQueryDepositRefundResponseUnMarshaller::__init();
