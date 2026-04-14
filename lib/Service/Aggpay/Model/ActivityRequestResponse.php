<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ActivityRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerReportAttachResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\MerReportAttachResponseDTO';
    }

    /**
     * @param MerReportAttachResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerReportAttachResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
