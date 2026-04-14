<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AliCapitalTransferQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CapitalTransferApplyRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyRspDTO';
    }

    /**
     * @param CapitalTransferApplyRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CapitalTransferApplyRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
