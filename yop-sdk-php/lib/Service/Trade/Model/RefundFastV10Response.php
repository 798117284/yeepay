<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundFastV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopFastRefundResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopFastRefundResponseDTO';
    }

    /**
     * @param YopFastRefundResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopFastRefundResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
