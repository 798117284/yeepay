<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountCapitalTransferResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ChannelBookCapitalTransferRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferRspDTO';
    }

    /**
     * @param ChannelBookCapitalTransferRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ChannelBookCapitalTransferRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
