<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class RecordQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryApplyInvoiceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\QueryApplyInvoiceResponseDTO';
    }

    /**
     * @param QueryApplyInvoiceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryApplyInvoiceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
