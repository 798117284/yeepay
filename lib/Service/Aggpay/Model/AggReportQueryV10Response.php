<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
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
