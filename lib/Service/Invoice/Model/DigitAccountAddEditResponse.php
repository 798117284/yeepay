<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitAccountAddEditResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopInvoiceDigitalAccountAddOrEditRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitalAccountAddOrEditRespDto';
    }

    /**
     * @param RespDto2YopInvoiceDigitalAccountAddOrEditRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopInvoiceDigitalAccountAddOrEditRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
