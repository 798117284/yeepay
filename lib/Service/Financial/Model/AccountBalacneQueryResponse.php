<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;


class AccountBalacneQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankBalanceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Financial\Model\QueryBankBalanceResponseDTO';
    }

    /**
     * @param QueryBankBalanceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankBalanceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
