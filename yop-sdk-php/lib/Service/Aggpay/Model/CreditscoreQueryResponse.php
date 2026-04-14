<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscoreQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreditScoreQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScoreQueryResponseDTO';
    }

    /**
     * @param CreditScoreQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreditScoreQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
