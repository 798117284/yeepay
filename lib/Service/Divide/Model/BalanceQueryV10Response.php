<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BalanceQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BaseResult';
    }

    /**
     * @param BaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
