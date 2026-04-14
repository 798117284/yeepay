<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UploadElectronicReceiptV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ElectronicReceiptResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ElectronicReceiptResponseDTO';
    }

    /**
     * @param ElectronicReceiptResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ElectronicReceiptResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
