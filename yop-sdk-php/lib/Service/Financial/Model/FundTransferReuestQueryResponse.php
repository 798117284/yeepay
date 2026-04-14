<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;


class FundTransferReuestQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FundTransferOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Financial\Model\FundTransferOrderResponseDTO';
    }

    /**
     * @param FundTransferOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FundTransferOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
