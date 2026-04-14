<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class RetailGetInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRetailInfoResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryRetailInfoResponseDTO';
    }

    /**
     * @param QueryRetailInfoResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRetailInfoResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
