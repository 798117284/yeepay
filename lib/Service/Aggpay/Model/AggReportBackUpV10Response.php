<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportBackUpV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReportBackUpResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ReportBackUpResponseDTO';
    }

    /**
     * @param ReportBackUpResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReportBackUpResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
