<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscorePayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreditScorePayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\CreditScorePayResponseDTO';
    }

    /**
     * @param CreditScorePayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreditScorePayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
