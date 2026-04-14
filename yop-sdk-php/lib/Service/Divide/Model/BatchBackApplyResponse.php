<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BatchBackApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DivideBatchBackBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideBatchBackBaseResult';
    }

    /**
     * @param DivideBatchBackBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideBatchBackBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
