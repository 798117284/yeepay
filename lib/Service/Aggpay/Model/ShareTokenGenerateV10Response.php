<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ShareTokenGenerateV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AliShareTokenResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AliShareTokenResponseDTO';
    }

    /**
     * @param AliShareTokenResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AliShareTokenResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
