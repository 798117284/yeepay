<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class CreateQrCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCreateQrCodeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateQrCodeRespDTO';
    }

    /**
     * @param YopCreateQrCodeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateQrCodeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
