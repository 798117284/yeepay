<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;


class PrepayCompleteV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopPreAuthCompleteResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Prepay\Model\YopPreAuthCompleteResDTO';
    }

    /**
     * @param YopPreAuthCompleteResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopPreAuthCompleteResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
