<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class DownloadDepositNotifyReceiptResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DepositNotifyReceiptRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptRespDTO';
    }

    /**
     * @param DepositNotifyReceiptRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DepositNotifyReceiptRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
