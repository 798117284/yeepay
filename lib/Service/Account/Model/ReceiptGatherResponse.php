<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ReceiptGatherResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BatchReceiptRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BatchReceiptRespDTO';
    }

    /**
     * @param BatchReceiptRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BatchReceiptRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
