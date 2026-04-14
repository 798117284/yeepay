<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class QueryQrCodeListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryQrCodeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryQrCodeRespDTO';
    }

    /**
     * @param YopQueryQrCodeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryQrCodeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
