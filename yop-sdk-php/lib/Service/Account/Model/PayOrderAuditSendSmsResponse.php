<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayOrderAuditSendSmsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitAuditSendSmsRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRespDTO';
    }

    /**
     * @param RemitAuditSendSmsRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitAuditSendSmsRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
