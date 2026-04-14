<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankaccountbalancequeryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountBalanceRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceRspDTO';
    }

    /**
     * @param BankAccountBalanceRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountBalanceRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
