<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PrePayV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderResponseDTO';
    }

    /**
     * @param OrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
