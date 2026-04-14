<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class QueryInvoiceV1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalInvoiceQueryRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalInvoiceQueryRespDto';
    }

    /**
     * @param RespDto2YopDigitalInvoiceQueryRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalInvoiceQueryRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
