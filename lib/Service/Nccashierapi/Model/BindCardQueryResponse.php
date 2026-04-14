<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


class BindCardQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\QueryBindCardResponseDTO';
    }

    /**
     * @param QueryBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
