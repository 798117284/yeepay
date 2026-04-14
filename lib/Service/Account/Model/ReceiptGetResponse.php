<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ReceiptGetResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReceiptRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptRespDTO';
    }

    /**
     * @param ReceiptRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
