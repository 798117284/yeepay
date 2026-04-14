<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ActivityQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryMerReportAttachResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryMerReportAttachResponseDTO';
    }

    /**
     * @param QueryMerReportAttachResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryMerReportAttachResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
