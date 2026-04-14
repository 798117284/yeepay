<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderCombineQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryCombineOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\YopQueryCombineOrderResDTO';
    }

    /**
     * @param YopQueryCombineOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryCombineOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
