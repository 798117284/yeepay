<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitInvoicePageQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto';
    }

    /**
     * @param RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2PageRespDto2YopDigitalInvoicePageQueryListRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
