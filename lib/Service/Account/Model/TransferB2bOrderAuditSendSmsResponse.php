<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderAuditSendSmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferAuditSendSmsRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRespDTO';
    }

    /**
     * @param TransferAuditSendSmsRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferAuditSendSmsRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
