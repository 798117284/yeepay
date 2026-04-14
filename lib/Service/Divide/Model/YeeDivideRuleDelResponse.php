<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class YeeDivideRuleDelResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DelRuleBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DelRuleBaseResult';
    }

    /**
     * @param DelRuleBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DelRuleBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
