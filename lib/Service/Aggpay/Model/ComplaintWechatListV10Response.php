<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatListV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatComplaintListFlatResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintListFlatResponseDTO';
    }

    /**
     * @param WechatComplaintListFlatResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatComplaintListFlatResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
