<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DivideBackBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideBackBaseResult';
    }

    /**
     * @param DivideBackBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideBackBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
