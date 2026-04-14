<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class AccountConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var APIOfflineTransferAccountInfoConfirmResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIOfflineTransferAccountInfoConfirmResponseDTO';
    }

    /**
     * @param APIOfflineTransferAccountInfoConfirmResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return APIOfflineTransferAccountInfoConfirmResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
