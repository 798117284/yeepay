<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitCertifyResultGetResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalGetCertifyResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalGetCertifyResultRespDto';
    }

    /**
     * @param RespDto2YopDigitalGetCertifyResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalGetCertifyResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
