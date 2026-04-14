<?php

namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


class UnionPayOrderQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AuthReportQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AtVcc\Model\AuthReportQueryResponseDTO';
    }

    /**
     * @param AuthReportQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthReportQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
