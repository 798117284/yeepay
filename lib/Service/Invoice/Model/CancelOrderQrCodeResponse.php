<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class CancelOrderQrCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitCancelOrderQrCodeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitCancelOrderQrCodeRespDto';
    }

    /**
     * @param RespDto2YopDigitCancelOrderQrCodeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitCancelOrderQrCodeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
