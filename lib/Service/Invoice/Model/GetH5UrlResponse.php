<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class GetH5UrlResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InvoiceH5UrlResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\InvoiceH5UrlResponse';
    }

    /**
     * @param InvoiceH5UrlResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InvoiceH5UrlResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
