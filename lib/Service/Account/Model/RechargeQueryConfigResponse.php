<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeQueryConfigResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeWhiteListQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryResponseDTO';
    }

    /**
     * @param RechargeWhiteListQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeWhiteListQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
