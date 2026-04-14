<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class ApplyV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopApplyInvoiceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\YopApplyInvoiceResponseDTO';
    }

    /**
     * @param YopApplyInvoiceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopApplyInvoiceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
