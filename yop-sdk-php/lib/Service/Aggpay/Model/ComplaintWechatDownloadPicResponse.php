<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDownloadPicResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatComplaintDownloadPicResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatComplaintDownloadPicResponseDTO';
    }

    /**
     * @param WechatComplaintDownloadPicResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatComplaintDownloadPicResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
