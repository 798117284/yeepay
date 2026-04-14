<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawOrderRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRespDTO';
    }

    /**
     * @param WithdrawOrderRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawOrderRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
