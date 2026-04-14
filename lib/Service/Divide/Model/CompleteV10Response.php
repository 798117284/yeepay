<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class CompleteV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopOrderEndDivideResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\YopOrderEndDivideResDTO';
    }

    /**
     * @param YopOrderEndDivideResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopOrderEndDivideResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
