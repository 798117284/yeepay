<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundSupplyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopSupplyCardInfoRefundResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopSupplyCardInfoRefundResponseDTO';
    }

    /**
     * @param YopSupplyCardInfoRefundResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopSupplyCardInfoRefundResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
