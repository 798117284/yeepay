<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitCertifyQrcodeGetResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalGetCertifyQrcodeRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyQrcodeRespDto';
    }

    /**
     * @param RespDto2YopDigitalGetCertifyQrcodeRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalGetCertifyQrcodeRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
