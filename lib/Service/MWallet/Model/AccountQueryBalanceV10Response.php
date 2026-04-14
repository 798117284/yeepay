<?php

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountQueryBalanceV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBalanceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBalanceResponseDTO';
    }

    /**
     * @param QueryBalanceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBalanceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
