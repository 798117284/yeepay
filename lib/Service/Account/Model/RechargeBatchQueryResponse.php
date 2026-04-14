<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeBatchQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeQueryMultiApiRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryMultiApiRespDTO';
    }

    /**
     * @param RechargeQueryMultiApiRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeQueryMultiApiRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
