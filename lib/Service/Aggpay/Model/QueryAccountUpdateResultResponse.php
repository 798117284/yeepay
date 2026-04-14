<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryAccountUpdateResultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountInfoUpdateQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AccountInfoUpdateQueryResponseDTO';
    }

    /**
     * @param AccountInfoUpdateQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountInfoUpdateQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
