<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class UnifiedLoginResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalUnifiedLoginRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUnifiedLoginRespDto';
    }

    /**
     * @param RespDto2YopDigitalUnifiedLoginRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalUnifiedLoginRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
