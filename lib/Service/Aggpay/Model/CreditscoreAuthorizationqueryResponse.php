<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscoreAuthorizationqueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreditScoreAuthorizationQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreAuthorizationQueryResponseDTO';
    }

    /**
     * @param CreditScoreAuthorizationQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreditScoreAuthorizationQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
