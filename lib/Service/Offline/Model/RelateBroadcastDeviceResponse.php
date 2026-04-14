<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class RelateBroadcastDeviceResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopRelateBroadcastDeviceRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopRelateBroadcastDeviceRspDTO';
    }

    /**
     * @param YopRelateBroadcastDeviceRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopRelateBroadcastDeviceRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
