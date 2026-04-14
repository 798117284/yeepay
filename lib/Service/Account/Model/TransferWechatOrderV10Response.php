<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferWechatOrderV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatTransferRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WechatTransferRespDTO';
    }

    /**
     * @param WechatTransferRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatTransferRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
