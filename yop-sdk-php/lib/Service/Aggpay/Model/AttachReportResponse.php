<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AttachReportResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AttachReportResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AttachReportResponseDTO';
    }

    /**
     * @param AttachReportResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AttachReportResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
