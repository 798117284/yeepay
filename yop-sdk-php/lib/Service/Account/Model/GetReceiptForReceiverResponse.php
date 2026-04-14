<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class GetReceiptForReceiverResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReceiverReceiptResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptResponseDTO';
    }

    /**
     * @param ReceiverReceiptResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiverReceiptResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
