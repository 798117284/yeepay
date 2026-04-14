<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderAuditQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferAuditQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditQueryRespDTO';
    }

    /**
     * @param TransferAuditQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferAuditQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
