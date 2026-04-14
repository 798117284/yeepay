<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class OcCommissionQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CommissionQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionQueryResponseDTO';
    }

    /**
     * @param CommissionQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CommissionQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
