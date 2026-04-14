<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ReportQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReportRecordQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordQueryResponseDTO';
    }

    /**
     * @param ReportRecordQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReportRecordQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
