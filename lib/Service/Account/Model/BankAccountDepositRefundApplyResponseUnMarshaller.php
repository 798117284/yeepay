<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountDepositRefundApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountDepositRefundApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountDepositRefundApplyResponseUnMarshaller();
    }

    /**
     * @return BankAccountDepositRefundApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountDepositRefundApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountDepositRefundApplyResponse();
    }
}

BankAccountDepositRefundApplyResponseUnMarshaller::__init();
