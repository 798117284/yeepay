<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class YeeDivideRuleUpdateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpdateRuleBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\UpdateRuleBaseResult';
    }

    /**
     * @param UpdateRuleBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpdateRuleBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
