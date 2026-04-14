<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AliBatchTransferDetailResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchTransferDetailRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailRspDTO';
    }

    /**
     * @param BatchTransferDetailRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchTransferDetailRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
