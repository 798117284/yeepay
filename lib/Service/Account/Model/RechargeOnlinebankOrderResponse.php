<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeOnlinebankOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OnlineBankRechargeApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OnlineBankRechargeApiRespDTO';
    }

    /**
     * @param OnlineBankRechargeApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OnlineBankRechargeApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
