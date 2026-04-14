<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountApplyDepositRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountRefundRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundRespDTO';
    }

    /**
     * @param BankAccountRefundRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountRefundRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
