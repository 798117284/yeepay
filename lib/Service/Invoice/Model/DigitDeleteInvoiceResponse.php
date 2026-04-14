<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitDeleteInvoiceResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalDeleteInvoiceRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalDeleteInvoiceRespDto';
    }

    /**
     * @param RespDto2YopDigitalDeleteInvoiceRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalDeleteInvoiceRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
