<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ApplyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopOrderDivideResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\YopOrderDivideResDTO';
    }

    /**
     * @param YopOrderDivideResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopOrderDivideResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
