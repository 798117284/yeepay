<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBankTradeFlowQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountTrxQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountTrxQueryRespDTO';
    }

    /**
     * @param BankAccountTrxQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountTrxQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
