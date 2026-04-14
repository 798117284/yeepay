<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ReceiptDownloadV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReceiptResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\ReceiptResponseDTO';
    }

    /**
     * @param ReceiptResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
