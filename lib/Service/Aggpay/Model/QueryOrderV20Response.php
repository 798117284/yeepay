<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryOrderV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryOrderResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryOrderResult';
    }

    /**
     * @param QueryOrderResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryOrderResult
     */
    function getResult()
    {
        return $this->result;
    }
}
