<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRefundResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\QueryRefundResponseDTO';
    }

    /**
     * @param QueryRefundResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRefundResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
