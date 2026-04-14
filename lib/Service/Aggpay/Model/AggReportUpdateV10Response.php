<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportUpdateV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReportRecordUpdateResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportRecordUpdateResponseDTO';
    }

    /**
     * @param ReportRecordUpdateResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReportRecordUpdateResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
