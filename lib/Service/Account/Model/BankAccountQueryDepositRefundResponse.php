<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountQueryDepositRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankAccountRefundRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryBankAccountRefundRespDTO';
    }

    /**
     * @param QueryBankAccountRefundRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankAccountRefundRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
