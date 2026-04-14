<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AliChannelBookDeailResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ChannelBookDetailQueryRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryRspDTO';
    }

    /**
     * @param ChannelBookDetailQueryRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ChannelBookDetailQueryRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
