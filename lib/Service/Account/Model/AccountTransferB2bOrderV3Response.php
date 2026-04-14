<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountTransferB2bOrderV3Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MgTransferOrderRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO';
    }

    /**
     * @param MgTransferOrderRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MgTransferOrderRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
