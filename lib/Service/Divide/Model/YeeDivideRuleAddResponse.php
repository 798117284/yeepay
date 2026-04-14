<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class YeeDivideRuleAddResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AddRuleBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\AddRuleBaseResult';
    }

    /**
     * @param AddRuleBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AddRuleBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
