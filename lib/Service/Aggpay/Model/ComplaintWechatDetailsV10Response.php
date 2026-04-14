<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDetailsV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatComplaintInfoFlatResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintInfoFlatResponseDTO';
    }

    /**
     * @param WechatComplaintInfoFlatResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatComplaintInfoFlatResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
