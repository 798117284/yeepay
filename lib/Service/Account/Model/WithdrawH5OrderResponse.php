<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawH5OrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopWithdrawH5ResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5ResponseDTO';
    }

    /**
     * @param YopWithdrawH5ResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopWithdrawH5ResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
