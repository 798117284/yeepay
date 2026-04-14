<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CloseOrderV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ClosedOrderResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ClosedOrderResult';
    }

    /**
     * @param ClosedOrderResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ClosedOrderResult
     */
    function getResult()
    {
        return $this->result;
    }
}
