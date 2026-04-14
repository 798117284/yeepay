<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitIssueInvoiceResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalBlueInvoiceOpenRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalBlueInvoiceOpenRespDto';
    }

    /**
     * @param RespDto2YopDigitalBlueInvoiceOpenRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalBlueInvoiceOpenRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
