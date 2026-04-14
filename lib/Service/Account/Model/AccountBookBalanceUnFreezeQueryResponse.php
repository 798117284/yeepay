<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookBalanceUnFreezeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookUnFreezeQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeQueryResponseDTO';
    }

    /**
     * @param AccountBookUnFreezeQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookUnFreezeQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
