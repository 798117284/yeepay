<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CloseOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CloseOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\CloseOrderResponseDTO';
    }

    /**
     * @param CloseOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CloseOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
