<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeApiV2ResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2ResponseDTO';
    }

    /**
     * @param RechargeApiV2ResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeApiV2ResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
