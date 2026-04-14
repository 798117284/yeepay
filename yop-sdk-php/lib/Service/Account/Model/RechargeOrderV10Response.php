<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiRespDTO';
    }

    /**
     * @param RechargeApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
