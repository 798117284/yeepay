<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeAccountBookQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargePageQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargePageQueryResponseDTO';
    }

    /**
     * @param RechargePageQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargePageQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
