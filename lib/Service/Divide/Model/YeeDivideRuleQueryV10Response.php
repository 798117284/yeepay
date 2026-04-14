<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class YeeDivideRuleQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRuleBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\QueryRuleBaseResult';
    }

    /**
     * @param QueryRuleBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRuleBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
