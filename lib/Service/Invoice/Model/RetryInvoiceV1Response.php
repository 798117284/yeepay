<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class RetryInvoiceV1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopDigitalRetryOpenInvoiceRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopDigitalRetryOpenInvoiceRespDto';
    }

    /**
     * @param RespDto2YopDigitalRetryOpenInvoiceRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopDigitalRetryOpenInvoiceRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
