<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class UserLoginResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalUserLoginRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalUserLoginRespDto';
    }

    /**
     * @param RespDto2YopDigitalUserLoginRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalUserLoginRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
