<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferSystemQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MgTransferOrderQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderQueryRespDTO';
    }

    /**
     * @param MgTransferOrderQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MgTransferOrderQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
