<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundEndV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopEndRefundResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopEndRefundResponseDTO';
    }

    /**
     * @param YopEndRefundResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopEndRefundResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
