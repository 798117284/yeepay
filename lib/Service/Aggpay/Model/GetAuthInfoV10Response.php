<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class GetAuthInfoV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PassiveGetAuthInfoResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PassiveGetAuthInfoResponseDTO';
    }

    /**
     * @param PassiveGetAuthInfoResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PassiveGetAuthInfoResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
