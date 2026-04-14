<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class GroupAccountTransferResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GroupAccountTransferRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRespDTO';
    }

    /**
     * @param GroupAccountTransferRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GroupAccountTransferRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
