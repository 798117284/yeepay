<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBalanceUnfreezeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookUnFreezeBalanceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeBalanceResponseDTO';
    }

    /**
     * @param AccountBookUnFreezeBalanceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookUnFreezeBalanceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
