<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UnifiedOrderV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var Result
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\Result';
    }

    /**
     * @param Result $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return Result
     */
    function getResult()
    {
        return $this->result;
    }
}
