<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AttachRelieveResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ModifyAttachReportResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ModifyAttachReportResponseDTO';
    }

    /**
     * @param ModifyAttachReportResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ModifyAttachReportResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
