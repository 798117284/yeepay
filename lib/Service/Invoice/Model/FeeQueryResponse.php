<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class FeeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopFeeResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\YopFeeResponseDTO';
    }

    /**
     * @param YopFeeResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopFeeResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
