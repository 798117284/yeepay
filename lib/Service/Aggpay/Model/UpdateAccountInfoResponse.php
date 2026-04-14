<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UpdateAccountInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountInfoUpdateResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\AccountInfoUpdateResponseDTO';
    }

    /**
     * @param AccountInfoUpdateResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountInfoUpdateResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
