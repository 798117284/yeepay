<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class InfoQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryInvoiceInfoYOPResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryInvoiceInfoYOPResponseDto';
    }

    /**
     * @param QueryInvoiceInfoYOPResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryInvoiceInfoYOPResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
