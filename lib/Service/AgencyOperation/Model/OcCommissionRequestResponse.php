<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;


class OcCommissionRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CommissionResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AgencyOperation\Model\CommissionResponseDTO';
    }

    /**
     * @param CommissionResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CommissionResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
