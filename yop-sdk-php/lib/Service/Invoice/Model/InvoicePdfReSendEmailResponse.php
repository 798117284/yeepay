<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class InvoicePdfReSendEmailResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopReSendEmailInvoicePdfRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopReSendEmailInvoicePdfRespDto';
    }

    /**
     * @param RespDto2YopReSendEmailInvoicePdfRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopReSendEmailInvoicePdfRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
