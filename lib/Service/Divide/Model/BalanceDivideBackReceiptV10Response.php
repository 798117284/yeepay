<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BalanceDivideBackReceiptV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DivideReceiptBaseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\DivideReceiptBaseResult';
    }

    /**
     * @param DivideReceiptBaseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DivideReceiptBaseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
