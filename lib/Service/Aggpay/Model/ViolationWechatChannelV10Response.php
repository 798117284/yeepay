<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ViolationWechatChannelV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatRiskQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatRiskQueryResponseDTO';
    }

    /**
     * @param WechatRiskQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatRiskQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
