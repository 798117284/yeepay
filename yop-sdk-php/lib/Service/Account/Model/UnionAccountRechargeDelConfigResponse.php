<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountRechargeDelConfigResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeWhiteListResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListResponseDTO';
    }

    /**
     * @param RechargeWhiteListResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeWhiteListResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
