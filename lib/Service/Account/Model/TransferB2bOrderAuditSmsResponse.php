<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderAuditSmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferAuditVerifySmsRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRespDTO';
    }

    /**
     * @param TransferAuditVerifySmsRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferAuditVerifySmsRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
