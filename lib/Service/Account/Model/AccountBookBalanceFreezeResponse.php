<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookBalanceFreezeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookFreezeBalanceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeBalanceResponseDTO';
    }

    /**
     * @param AccountBookFreezeBalanceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookFreezeBalanceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
