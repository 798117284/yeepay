<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayOrderAuditQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RemitAuditQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditQueryRespDTO';
    }

    /**
     * @param RemitAuditQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RemitAuditQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
