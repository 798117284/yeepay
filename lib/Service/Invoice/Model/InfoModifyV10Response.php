<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class InfoModifyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AddOrModifyInvoiceInfoResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\AddOrModifyInvoiceInfoResponseDto';
    }

    /**
     * @param AddOrModifyInvoiceInfoResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AddOrModifyInvoiceInfoResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
