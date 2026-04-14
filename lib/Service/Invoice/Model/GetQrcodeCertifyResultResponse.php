<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class GetQrcodeCertifyResultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalGetCertifyQrcodeResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeResultRespDto';
    }

    /**
     * @param RespDto2YopDigitalGetCertifyQrcodeResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalGetCertifyQrcodeResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
