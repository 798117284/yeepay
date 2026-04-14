<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountApplyDepositRefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountApplyDepositRefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountApplyDepositRefundResponseUnMarshaller();
    }

    /**
     * @return BankAccountApplyDepositRefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountApplyDepositRefundResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountApplyDepositRefundResponse();
    }
}

BankAccountApplyDepositRefundResponseUnMarshaller::__init();
