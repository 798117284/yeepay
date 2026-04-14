<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferGroupAccountQueryV1Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GroupAccountTransferQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRespDTO';
    }

    /**
     * @param GroupAccountTransferQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GroupAccountTransferQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
