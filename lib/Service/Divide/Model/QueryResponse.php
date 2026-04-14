<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class QueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryOrderDivideResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\YopQueryOrderDivideResDTO';
    }

    /**
     * @param YopQueryOrderDivideResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryOrderDivideResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
