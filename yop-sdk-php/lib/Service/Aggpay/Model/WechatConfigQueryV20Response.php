<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigQueryV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatConfigFlatResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigFlatResponseDTO';
    }

    /**
     * @param WechatConfigFlatResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigFlatResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
