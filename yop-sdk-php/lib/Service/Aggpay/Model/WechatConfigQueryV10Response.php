<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatConfigResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigResponseDTO';
    }

    /**
     * @param WechatConfigResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
