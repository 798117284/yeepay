<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleCardAddV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantSettleCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\MerchantSettleCardResponseDTO';
    }

    /**
     * @param MerchantSettleCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantSettleCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
