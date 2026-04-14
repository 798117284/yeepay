<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountAliBatchProxyTransferResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchProxyTransferRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferRspDTO';
    }

    /**
     * @param BatchProxyTransferRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchProxyTransferRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
