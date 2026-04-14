<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class DownloadQrCodeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopDownloadQrCodeRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopDownloadQrCodeRspDTO';
    }

    /**
     * @param YopDownloadQrCodeRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopDownloadQrCodeRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
