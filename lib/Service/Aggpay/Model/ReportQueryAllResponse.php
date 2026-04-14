<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ReportQueryAllResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AttachReportRecordQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportRecordQueryResponseDTO';
    }

    /**
     * @param AttachReportRecordQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AttachReportRecordQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
