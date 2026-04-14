<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitOrderQrcodeGenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopGenOrderQrCodeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopGenOrderQrCodeRespDto';
    }

    /**
     * @param RespDto2YopGenOrderQrCodeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopGenOrderQrCodeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
