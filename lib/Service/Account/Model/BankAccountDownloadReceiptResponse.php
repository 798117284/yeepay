<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountDownloadReceiptResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var DownloadReceiptRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\DownloadReceiptRespDTO';
    }

    /**
     * @param DownloadReceiptRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return DownloadReceiptRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
