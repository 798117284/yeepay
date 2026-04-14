<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryAccountInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountInfoQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AccountInfoQueryResponseDTO';
    }

    /**
     * @param AccountInfoQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountInfoQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
