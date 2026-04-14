<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SingleProxyTransferResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SingleProxyTransferRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferRspDTO';
    }

    /**
     * @param SingleProxyTransferRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SingleProxyTransferRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
