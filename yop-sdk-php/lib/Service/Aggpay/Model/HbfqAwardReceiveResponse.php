<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class HbfqAwardReceiveResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AwardReceiveResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AwardReceiveResponseDTO';
    }

    /**
     * @param AwardReceiveResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AwardReceiveResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
