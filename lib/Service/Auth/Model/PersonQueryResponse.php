<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class PersonQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AuthOrderQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\AuthOrderQueryResponseDTO';
    }

    /**
     * @param AuthOrderQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthOrderQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
