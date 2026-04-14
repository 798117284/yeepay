<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PayLinkV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderCodeResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\OrderCodeResponseDTO';
    }

    /**
     * @param OrderCodeResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCodeResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
