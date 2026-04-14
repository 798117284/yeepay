<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;


class CreditScoreAuthorizationResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreditScoreAuthorizationResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationResponseDTO';
    }

    /**
     * @param CreditScoreAuthorizationResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreditScoreAuthorizationResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
