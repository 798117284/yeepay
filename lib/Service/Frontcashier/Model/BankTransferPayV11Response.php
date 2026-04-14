<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BankTransferPayV11Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var APIOfflineTransferResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIOfflineTransferResponseDTO';
    }

    /**
     * @param APIOfflineTransferResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return APIOfflineTransferResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
