<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class NotifyRepeatV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantNetInRepeatNotifyRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantNetInRepeatNotifyRespDto';
    }

    /**
     * @param MerchantNetInRepeatNotifyRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantNetInRepeatNotifyRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
