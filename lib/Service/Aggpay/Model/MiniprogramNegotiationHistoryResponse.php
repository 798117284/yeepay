<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class MiniprogramNegotiationHistoryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatComplaintNegotiationHistoryFlatResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintNegotiationHistoryFlatResponseDTO';
    }

    /**
     * @param WechatComplaintNegotiationHistoryFlatResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatComplaintNegotiationHistoryFlatResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
