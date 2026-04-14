<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitOrderQrcodeStatusQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto';
    }

    /**
     * @param RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitPageExtRespDto2OrderQrCodeQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
