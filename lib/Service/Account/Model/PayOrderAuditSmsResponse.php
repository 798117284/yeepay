<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayOrderAuditSmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitAuditVerifySmsRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRespDTO';
    }

    /**
     * @param RemitAuditVerifySmsRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitAuditVerifySmsRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
