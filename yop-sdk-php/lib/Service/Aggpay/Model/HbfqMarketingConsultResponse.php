<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class HbfqMarketingConsultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MarketingConsultResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\MarketingConsultResponseDTO';
    }

    /**
     * @param MarketingConsultResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MarketingConsultResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
