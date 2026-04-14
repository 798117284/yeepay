<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ShareTokenMarketQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AliMarketQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliMarketQueryResponseDTO';
    }

    /**
     * @param AliMarketQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AliMarketQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
