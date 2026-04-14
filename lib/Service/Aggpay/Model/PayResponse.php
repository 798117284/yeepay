<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PassiveOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PassiveOrderResponseDTO';
    }

    /**
     * @param PassiveOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PassiveOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
