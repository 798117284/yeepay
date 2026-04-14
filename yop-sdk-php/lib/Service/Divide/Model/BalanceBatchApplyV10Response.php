<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BalanceBatchApplyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchDivideBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BatchDivideBaseResult';
    }

    /**
     * @param BatchDivideBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchDivideBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
