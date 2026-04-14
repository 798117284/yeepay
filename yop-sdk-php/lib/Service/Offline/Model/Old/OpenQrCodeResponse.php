<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class OpenQrCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopOpenQrCodeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopOpenQrCodeRespDTO';
    }

    /**
     * @param YopOpenQrCodeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopOpenQrCodeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
