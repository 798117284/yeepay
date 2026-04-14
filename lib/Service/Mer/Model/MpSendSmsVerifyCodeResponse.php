<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MpSendSmsVerifyCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SendSmsVerifyCodeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\SendSmsVerifyCodeRespDTO';
    }

    /**
     * @param SendSmsVerifyCodeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SendSmsVerifyCodeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
