<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class UnbindQrCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopUnbindQrCodeRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnbindQrCodeRspDTO';
    }

    /**
     * @param YopUnbindQrCodeRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopUnbindQrCodeRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
