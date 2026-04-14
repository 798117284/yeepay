<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggWechatDisposalQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatDisposalNoticeQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatDisposalNoticeQueryResponseDTO';
    }

    /**
     * @param WechatDisposalNoticeQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatDisposalNoticeQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
