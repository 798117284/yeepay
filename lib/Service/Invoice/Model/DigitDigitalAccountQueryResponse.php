<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class DigitDigitalAccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopInvoiceDigitAccountQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceDigitAccountQueryRespDto';
    }

    /**
     * @param RespDto2YopInvoiceDigitAccountQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopInvoiceDigitAccountQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
