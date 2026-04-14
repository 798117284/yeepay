<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountAliCancelContractResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CancelChannelBookRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookRspDTO';
    }

    /**
     * @param CancelChannelBookRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CancelChannelBookRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
