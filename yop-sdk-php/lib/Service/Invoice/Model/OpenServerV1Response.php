<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class OpenServerV1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RespDto2YopInvoiceOpenServerRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\RespDto2YopInvoiceOpenServerRespDto';
    }

    /**
     * @param RespDto2YopInvoiceOpenServerRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespDto2YopInvoiceOpenServerRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
