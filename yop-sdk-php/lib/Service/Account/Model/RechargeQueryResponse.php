<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeQueryApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryApiRespDTO';
    }

    /**
     * @param RechargeQueryApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeQueryApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
